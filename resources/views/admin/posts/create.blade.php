
<form method="POST" action="{{ route('admin.posts.store') }}">
    @csrf

    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
    </div>
    <div>
        <label for="excerpt">Excerpt</label>
        <textarea name="excerpt" id="excerpt">{{ old('excerpt') }}</textarea>
    </div>
    <div>
        <label for="body">Body</label>
        <textarea name="body" id="body">{{ old('body') }}</textarea>
    </div>
    <div>
        <label for="published_at">Published At</label>
        <input type="datetime-local" name="published_at" id="published_at">
    </div>
    <button type="submit">Create Post</button>
</form>