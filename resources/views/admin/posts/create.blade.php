<div class="min-h-screen bg-zinc-50">
  <div class="max-w-4xl mx-auto p-6">
    <div class="mb-6">
      <h1 class="text-3xl font-semibold text-zinc-900">New Post</h1>
      <p class="mt-1 text-sm text-zinc-500">Hey Girl whatcha writing about today?</p>
    </div>

    <form method="POST" action="{{ route('admin.posts.store') }}" class="space-y-6">
      @csrf

      <div class="rounded-2xl border border-zinc-200 bg-white p-6 shadow-sm space-y-5">
        <div class="space-y-2">
          <label for="title" class="text-sm font-medium text-zinc-700">Title</label>
          <input
            id="title"
            name="title"
            value="{{ old('title') }}"
            class="h-11 w-full rounded-lg border border-zinc-200 bg-white px-4 text-sm text-zinc-900 shadow-sm outline-none focus:border-zinc-300 focus:ring-2 focus:ring-orange-500/20"
            placeholder="e.g. Cal Newport notes"
          >
          @error('title') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="space-y-2">
          <label for="excerpt" class="text-sm font-medium text-zinc-700">Excerpt (optional)</label>
          <textarea
            id="excerpt"
            name="excerpt"
            rows="3"
            class="w-full rounded-lg border border-zinc-200 bg-white px-4 py-3 text-sm text-zinc-900 shadow-sm outline-none focus:border-zinc-300 focus:ring-2 focus:ring-orange-500/20"
            placeholder="Short teaser for the list page..."
          >{{ old('excerpt') }}</textarea>
          @error('excerpt') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="space-y-2">
          <div class="flex items-center justify-between gap-3">
            <label for="body" class="text-sm font-medium text-zinc-700">Body</label>

            <div class="flex items-center gap-2">
              <input id="inlineImage" type="file" accept="image/*" class="hidden">
              <button
                type="button"
                id="chooseImageBtn"
                class="inline-flex h-9 items-center rounded-lg border border-zinc-200 bg-white px-3 text-sm font-medium text-zinc-700 shadow-sm hover:bg-zinc-50"
              >
                Choose image
              </button>

              <button
                type="button"
                id="uploadInsertBtn"
                class="inline-flex h-9 items-center rounded-lg bg-zinc-900 px-3 text-sm font-semibold text-white shadow-sm hover:bg-zinc-800"
              >
                Upload + insert
              </button>
            </div>
          </div>

          <textarea
            id="body"
            name="body"
            rows="14"
            class="w-full rounded-lg border border-zinc-200 bg-white px-4 py-3 text-sm text-zinc-900 shadow-sm outline-none focus:border-zinc-300 focus:ring-2 focus:ring-orange-500/20"
            placeholder="Write your post... you can insert images in the middle."
          >{{ old('body') }}</textarea>

          <p class="text-xs text-zinc-500">
            Tip: the image will be inserted where your cursor is.
          </p>
          @error('body') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div class="space-y-2">
            <label for="published_at" class="text-sm font-medium text-zinc-700">Published At (optional)</label>
            <input
              type="datetime-local"
              name="published_at"
              id="published_at"
              class="h-11 w-full rounded-lg border border-zinc-200 bg-white px-4 text-sm text-zinc-900 shadow-sm outline-none focus:border-zinc-300 focus:ring-2 focus:ring-orange-500/20"
            >
            @error('published_at') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
          </div>

          <div class="flex items-end justify-end gap-2">
            <a href="{{ route('posts.index') }}"
               class="inline-flex h-11 items-center justify-center rounded-lg border border-zinc-200 bg-white px-5 text-sm font-medium text-zinc-700 shadow-sm hover:bg-zinc-50">
              Cancel
            </a>

            <button type="submit"
              class="inline-flex h-11 items-center justify-center rounded-lg bg-orange-500 px-6 text-sm font-semibold text-white shadow-sm hover:bg-orange-600">
              Publish
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const fileInput = document.getElementById('inlineImage');
  const chooseBtn = document.getElementById('chooseImageBtn');
  const uploadInsertBtn = document.getElementById('uploadInsertBtn');
  const body = document.getElementById('body');

  chooseBtn.addEventListener('click', () => fileInput.click());

  uploadInsertBtn.addEventListener('click', async () => {
    if (!fileInput.files.length) {
      fileInput.click();
      return;
    }

    uploadInsertBtn.disabled = true;
    uploadInsertBtn.textContent = 'Uploading...';

    const formData = new FormData();
    formData.append('image', fileInput.files[0]);

    const res = await fetch("{{ route('admin.uploads.post-image') }}", {
      method: "POST",
      headers: {
        "X-CSRF-TOKEN": "{{ csrf_token() }}",
        "Accept": "application/json",
      },
      body: formData,
    });

    const data = await res.json();

    uploadInsertBtn.disabled = false;
    uploadInsertBtn.textContent = 'Upload + insert';

    if (!res.ok) {
      alert(data?.message || "Upload failed");
      return;
    }

    const tag = `\n<img src="${data.url}" alt="" class="my-6 w-full rounded-2xl border border-zinc-200">\n`;
    const start = body.selectionStart ?? body.value.length;
    const end = body.selectionEnd ?? body.value.length;

    body.value = body.value.slice(0, start) + tag + body.value.slice(end);
    body.focus();
    body.selectionStart = body.selectionEnd = start + tag.length;
  });
});
</script>
