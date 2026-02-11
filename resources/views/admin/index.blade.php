<x-layouts.app :title="$title ?? 'Posts'">

<div class="max-w-3xl mx-auto p-6">
  <h1 class="text-white text-3xl font-bold mb-6">Posts</h1>

  <div class="space-y-4">
    @forelse ($posts as $post)
      <article class="p-5 border rounded-lg bg-white">
        <h2 class="text-xl font-semibold">
          <a href="{{ route('posts.show', $post->slug) }}" class="hover:underline">
            {{ $post->title }}
          </a>
        </h2>

        <p class="text-sm text-black-500 mt-1">
          {{ optional($post->published_at)->format('M d, Y') }}
        </p>

        @if($post->excerpt)
          <p class="mt-3 text-black-700">{{ $post->excerpt }}</p>
        @endif

        <div class="mt-4">
          <a class="text-blue-600 hover:underline" href="{{ route('posts.show', $post->slug) }}">
            Read more
          </a>
        </div>
      </article>
    @empty
      <p>No posts yet.</p>
    @endforelse
  </div>

  <div class="mt-6">
    {{ $posts->links() }}
  </div>
</div>
</x-layouts.app>
