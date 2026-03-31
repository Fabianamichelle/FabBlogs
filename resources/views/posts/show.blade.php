@php
    $postDescription = $post->excerpt ?? Str::limit(strip_tags($post->body), 160);
    $postKeywords    = implode(', ', array_filter(['software engineering', 'blog', $post->category, 'Fabiana Mendoza', 'Laravel']));
@endphp

<x-layouts.app
    :title="$post->title"
    :description="$postDescription"
    :keywords="$postKeywords"
    :canonical="route('posts.show', $post)"
    ogType="article"
>
    @push('seo')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BlogPosting",
        "headline": "{{ addslashes($post->title) }}",
        "description": "{{ addslashes($postDescription) }}",
        "datePublished": "{{ $post->published_at?->toIso8601String() }}",
        "dateModified": "{{ $post->updated_at->toIso8601String() }}",
        "url": "{{ route('posts.show', $post) }}",
        "author": {
            "@type": "Person",
            "name": "Fabiana Mendoza",
            "url": "{{ route('about.me') }}"
        },
        "publisher": {
            "@type": "Person",
            "name": "Fabiana Mendoza",
            "url": "{{ url('/') }}"
        }
    }
    </script>
    @endpush

    <div class="mx-auto max-w-3xl space-y-6 px-4 py-8 sm:px-6">
        <a href="{{ route('posts.index') }}" class="text-sm font-medium text-pink-900 hover:underline hover:text-white">
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
            {!! nl2br($post->body) !!}
        </div>
    </div>
</x-layouts.app>
