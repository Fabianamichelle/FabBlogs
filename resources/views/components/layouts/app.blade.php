@props(['title' => null, 'description' => null, 'keywords' => null, 'canonical' => null, 'ogType' => null, 'ogImage' => null])

<x-layouts.app.sidebar
    :title="$title"
    :description="$description"
    :keywords="$keywords"
    :canonical="$canonical"
    :ogType="$ogType"
    :ogImage="$ogImage"
>
    <flux:main>
        {!! $slot !!}
    </flux:main>
</x-layouts.app.sidebar>
