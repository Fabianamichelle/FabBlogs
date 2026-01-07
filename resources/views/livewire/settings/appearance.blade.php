<section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Appearance')" :subheading="__('Update the appearance settings for your account')">
        <div class="space-y-6">
            <!-- Theme Selection -->
            <div>
                <h3 class="mb-3 text-sm font-medium">{{ __('Theme') }}</h3>
                <flux:radio.group x-data variant="segmented" x-model="$flux.appearance">
                    <flux:radio value="light" icon="sun">{{ __('Light') }}</flux:radio>
                    <flux:radio value="dark" icon="moon">{{ __('Dark') }}</flux:radio>
                    <flux:radio value="system" icon="computer-desktop">{{ __('System') }}</flux:radio>
                </flux:radio.group>
            </div>

            <!-- Text Color Selection -->
            <div>
                <h3 class="mb-3 text-sm font-medium">{{ __('Text Color') }}</h3>
                <div class="flex flex-wrap gap-3">
                    @foreach(['zinc' => 'Gray', 'slate' => 'Slate', 'stone' => 'Stone', 'red' => 'Red', 'orange' => 'Orange', 'amber' => 'Amber', 'yellow' => 'Yellow', 'lime' => 'Lime', 'green' => 'Green', 'emerald' => 'Emerald', 'teal' => 'Teal', 'cyan' => 'Cyan', 'blue' => 'Blue', 'indigo' => 'Indigo', 'violet' => 'Violet', 'purple' => 'Purple', 'fuchsia' => 'Fuchsia', 'pink' => 'Pink', 'rose' => 'Rose'] as $color => $label)
                        <button
                            wire:click="updateTextColor('{{ $color }}')"
                            class="flex items-center gap-2 rounded-lg px-4 py-2 text-sm font-medium transition-all
                            @if($textColor === $color)
                                ring-2 ring-offset-2 ring-offset-white dark:ring-offset-zinc-950
                            @endif
                            {{ match($color) {
                                'zinc' => 'text-zinc-900 dark:text-zinc-100 ' . ($textColor === $color ? 'ring-zinc-900 dark:ring-zinc-100' : 'ring-zinc-200 dark:ring-zinc-700'),
                                'slate' => 'text-slate-900 dark:text-slate-100 ' . ($textColor === $color ? 'ring-slate-900 dark:ring-slate-100' : 'ring-slate-200 dark:ring-slate-700'),
                                'stone' => 'text-stone-900 dark:text-stone-100 ' . ($textColor === $color ? 'ring-stone-900 dark:ring-stone-100' : 'ring-stone-200 dark:ring-stone-700'),
                                'red' => 'text-red-900 dark:text-red-100 ' . ($textColor === $color ? 'ring-red-900 dark:ring-red-100' : 'ring-red-200 dark:ring-red-700'),
                                'orange' => 'text-orange-900 dark:text-orange-100 ' . ($textColor === $color ? 'ring-orange-900 dark:ring-orange-100' : 'ring-orange-200 dark:ring-orange-700'),
                                'amber' => 'text-amber-900 dark:text-amber-100 ' . ($textColor === $color ? 'ring-amber-900 dark:ring-amber-100' : 'ring-amber-200 dark:ring-amber-700'),
                                'yellow' => 'text-yellow-900 dark:text-yellow-100 ' . ($textColor === $color ? 'ring-yellow-900 dark:ring-yellow-100' : 'ring-yellow-200 dark:ring-yellow-700'),
                                'lime' => 'text-lime-900 dark:text-lime-100 ' . ($textColor === $color ? 'ring-lime-900 dark:ring-lime-100' : 'ring-lime-200 dark:ring-lime-700'),
                                'green' => 'text-green-900 dark:text-green-100 ' . ($textColor === $color ? 'ring-green-900 dark:ring-green-100' : 'ring-green-200 dark:ring-green-700'),
                                'emerald' => 'text-emerald-900 dark:text-emerald-100 ' . ($textColor === $color ? 'ring-emerald-900 dark:ring-emerald-100' : 'ring-emerald-200 dark:ring-emerald-700'),
                                'teal' => 'text-teal-900 dark:text-teal-100 ' . ($textColor === $color ? 'ring-teal-900 dark:ring-teal-100' : 'ring-teal-200 dark:ring-teal-700'),
                                'cyan' => 'text-cyan-900 dark:text-cyan-100 ' . ($textColor === $color ? 'ring-cyan-900 dark:ring-cyan-100' : 'ring-cyan-200 dark:ring-cyan-700'),
                                'blue' => 'text-blue-900 dark:text-blue-100 ' . ($textColor === $color ? 'ring-blue-900 dark:ring-blue-100' : 'ring-blue-200 dark:ring-blue-700'),
                                'indigo' => 'text-indigo-900 dark:text-indigo-100 ' . ($textColor === $color ? 'ring-indigo-900 dark:ring-indigo-100' : 'ring-indigo-200 dark:ring-indigo-700'),
                                'violet' => 'text-violet-900 dark:text-violet-100 ' . ($textColor === $color ? 'ring-violet-900 dark:ring-violet-100' : 'ring-violet-200 dark:ring-violet-700'),
                                'purple' => 'text-purple-900 dark:text-purple-100 ' . ($textColor === $color ? 'ring-purple-900 dark:ring-purple-100' : 'ring-purple-200 dark:ring-purple-700'),
                                'fuchsia' => 'text-fuchsia-900 dark:text-fuchsia-100 ' . ($textColor === $color ? 'ring-fuchsia-900 dark:ring-fuchsia-100' : 'ring-fuchsia-200 dark:ring-fuchsia-700'),
                                'pink' => 'text-pink-900 dark:text-pink-100 ' . ($textColor === $color ? 'ring-pink-900 dark:ring-pink-100' : 'ring-pink-200 dark:ring-pink-700'),
                                'rose' => 'text-rose-900 dark:text-rose-100 ' . ($textColor === $color ? 'ring-rose-900 dark:ring-rose-100' : 'ring-rose-200 dark:ring-rose-700'),
                                default => ''
                            }} "
                        >
                            <span class="h-4 w-4 rounded-full bg-current"></span>
                            {{ __($label) }}
                        </button>
                    @endforeach
                </div>
            </div>
        </div>
    </x-settings.layout>
</section>