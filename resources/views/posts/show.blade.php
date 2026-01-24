<x-layouts.app :title="$post->title">
    <div class="mx-auto max-w-3xl space-y-6 px-4 py-8 sm:px-6">
        <a href="{{ route('posts.index') }}" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-400">
            ← Back to posts
        </a>

        <header class="space-y-2">
            <p class="text-sm text-zinc-500 dark:text-zinc-400">
                {{ optional($post->published_at)?->format('M d, Y') ?? 'Draft' }}
            </p>
            <h1 class="text-4xl font-semibold tracking-tight text-zinc-900 dark:text-white">
                {{ $post->title }}
            </h1>
            @if($post->excerpt)
                <p class="text-lg text-zinc-600 dark:text-zinc-300">{{ $post->excerpt }}</p>
            @endif
        </header>

        <div class="prose prose-zinc max-w-none dark:prose-invert">
            {!! nl2br(e($post->body)) !!}
        </div>
    </div>
</x-layouts.app>
