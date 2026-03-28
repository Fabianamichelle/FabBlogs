<div>
    {{-- Category filter --}}
    <div class="flex justify-center gap-3 pb-12 px-4">
        @foreach ($categories as $key => $label)
            <button
                wire:click="setCategory('{{ $key }}')"
                class="filter-btn {{ $activeCategory === $key ? 'active' : '' }}"
            >
                {{ $label }}
            </button>
        @endforeach
    </div>

    {{-- Pyramid (all) --}}
    @if ($activeCategory === 'all')
        <div class="relative py-4">
            {{-- Subtle center glow behind the grid --}}
            <div class="grid-center-glow" style="background: radial-gradient(ellipse, rgba(236,72,153,0.09) 0%, transparent 70%);"></div>

            <div class="flex flex-col items-center gap-3 px-4" wire:loading.class="opacity-40">
                @foreach ($this->pyramidRows as $row)
                    <div class="flex justify-center gap-3 flex-wrap">
                        @foreach ($row as $skill)
                            <div class="skill-card group" title="{{ $skill['name'] }}">
                                <img
                                    src="{{ $skill['icon'] }}"
                                    alt="{{ $skill['name'] }}"
                                    loading="lazy"
                                    style="{{ $skill['invert'] ? 'filter: invert(1) brightness(0.8);' : '' }}"
                                    onerror="this.style.display='none'; this.nextElementSibling.style.fontSize='28px';"
                                />
                                <span>{{ $skill['name'] }}</span>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>

    {{-- Filtered grid --}}
    @else
        <div class="flex justify-center px-4 pb-12" wire:loading.class="opacity-40">
            <div class="flex flex-wrap justify-center gap-4 max-w-3xl">
                @forelse ($this->filteredSkills as $skill)
                    <div class="skill-card" title="{{ $skill['name'] }}">
                        <img
                            src="{{ $skill['icon'] }}"
                            alt="{{ $skill['name'] }}"
                            loading="lazy"
                            style="{{ $skill['invert'] ? 'filter: invert(1) brightness(0.8);' : '' }}"
                            onerror="this.style.display='none';"
                        />
                        <span>{{ $skill['name'] }}</span>
                    </div>
                @empty
                    <p class="text-white/20 text-sm tracking-widest uppercase py-12">Nothing here yet</p>
                @endforelse
            </div>
        </div>
    @endif

    {{-- Currently learning ticker --}}
    <div class="mt-16 mb-4">
        <p class="text-center text-xs tracking-[0.2em] uppercase mb-5" style="color: rgba(255,255,255,0.2);">
            Currently Exploring
        </p>
        <div class="relative overflow-hidden py-3" style="border-top: 1px solid rgba(255,255,255,0.05); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <div class="flex animate-ticker whitespace-nowrap gap-8 w-max">
                @php
                    $learning = ['Inertia.js', 'Vue.js', 'Docker', 'Redis', 'Testing with Pest', 'Laravel Reverb', 'TypeScript', 'System Design', 'CI/CD Pipelines', 'GraphQL'];
                    $items = array_merge($learning, $learning);
                @endphp
                @foreach ($items as $item)
                    <span class="inline-flex items-center gap-3 text-sm font-medium" style="color: rgba(255,255,255,0.25);">
                        <span class="size-1 rounded-full" style="background: rgba(236,72,153,0.7);"></span>
                        {{ $item }}
                    </span>
                @endforeach
            </div>
        </div>
    </div>
</div>
