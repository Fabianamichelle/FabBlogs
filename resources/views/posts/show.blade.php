<x-layouts.app :title="$post->title">
    <div class="mx-auto max-w-3xl space-y-6 px-4 py-8 sm:px-6">
        <a href="{{ route('posts.index') }}" class="text-sm font-medium text-pink-900 hover:underline">
            ← Back to posts
        </a>

        <header class="space-y-2">
            <p class="text-sm text-white">
                {{ optional($post->published_at)?->format('M d, Y') ?? 'Draft' }}
            </p>
            <h1 class="text-4xl font-semibold tracking-tight text-white">
                {{ $post->title }}
            </h1>
            @if($post->excerpt)
                <p class="text-lg text-white">{{ $post->excerpt }}</p>
            @endif
        </header>

        <div class="prose prose-zinc max-w-none">
            {!! nl2br(e($post->body)) !!}
        </div>
    </div>
</x-layouts.app>
