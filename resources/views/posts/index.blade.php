<x-layouts.app title="Posts">
    <div class="mx-auto flex max-w-4xl flex-col gap-6 px-4 py-8 sm:px-6">
        <div>
            <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Latest posts</p>
            <h1 class="text-3xl font-semibold tracking-tight text-zinc-900 dark:text-white">Posts</h1>
        </div>

        <div class="space-y-4">
            @forelse ($posts as $post)
                <article class="rounded-xl border border-zinc-200 bg-white p-5 shadow-sm dark:border-zinc-800 dark:bg-zinc-950">
                    <div class="flex items-start justify-between gap-3">
                        <div class="space-y-2">
                            <h2 class="text-xl font-semibold text-zinc-900 dark:text-white">
                                <a href="{{ route('posts.show', $post) }}" class="hover:underline">
                                    {{ $post->title }}
                                </a>
                            </h2>
                            <p class="text-sm text-zinc-500 dark:text-zinc-400">
                                {{ optional($post->published_at)?->format('M d, Y') ?? 'Draft' }}
                            </p>
                            @if($post->excerpt)
                                <p class="text-zinc-700 dark:text-zinc-300">{{ $post->excerpt }}</p>
                            @else
                                <p class="text-zinc-700 dark:text-zinc-300">{{ Str::limit($post->body, 180) }}</p>
                            @endif
                        </div>
                        <a href="{{ route('posts.show', $post) }}" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-400">Read</a>
                    </div>
                </article>
            @empty
                <p class="text-zinc-600 dark:text-zinc-300">No posts yet.</p>
            @endforelse
        </div>

        <div>
            {{ $posts->links() }}
        </div>
    </div>
</x-layouts.app>
