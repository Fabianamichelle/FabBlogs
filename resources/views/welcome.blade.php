<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head', ['title' => 'Fabblogs'])
        <meta name="description" content="Fabblogs is a personal blog for writing, learning, and sharing ideas" />
    </head> 
    <script>
        window.addEventListener('text-color-changed', e => {
            const c = e.detail?.color || localStorage.getItem('textColor');
            if (!c) return;
            document.documentElement.style.setProperty('--text-color-900', `var(--color-${c}-900)`);
            document.documentElement.style.setProperty('--text-color-700', `var(--color-${c}-700)`);
        });
    </script>
    <body class="min-h-screen bg-white antialiased text-zinc-900  dark:text-zinc-100"
  style="--text-color-900: var(--color-{{ auth()->user()->text_color ?? 'zinc' }}-900); --text-color-700: var(--color-{{ auth()->user()->text_color ?? 'zinc' }}-700);">
        <a
            href="#content"
            class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-50 focus:rounded-lg focus:bg-white focus:px-3 focus:py-2 focus:text-sm focus:font-medium focus:text-zinc-900 focus:shadow focus:ring-1 focus:ring-zinc-200 dark:focus:bg-zinc-900 dark:focus:text-white dark:focus:ring-zinc-700"
        >
            Skip to content
        </a>

        <header class="sticky top-0 z-40 border-b border-zinc-200/60 bg-white/80 backdrop-blur dark:border-zinc-800 dark:bg-zinc-950">
            <div class="mx-auto flex max-w-6xl items-center justify-between gap-3 px-4 py-4 sm:px-6">
                <a href="{{ route('home') }}" class="flex items-center gap-3" wire:navigate>
                    <span class="grid size-10 place-items-center">
                        <x-app-logo-icon class="size-6 fill-current text-white" />
                    </span>
                </a>

                <nav class="hidden items-center gap-6 text-sm text-zinc-700 dark:text-zinc-300 md:flex" aria-label="Primary">
                    <a href="{{ route('about.me') }}" class="hover:text-zinc-900 dark:hover:text-white">About Me</a>
                    <a href="#workflow" class="hover:text-zinc-900 dark:hover:text-white">What I'm up to?</a>
                    <a href="#newsletter" class="hover:text-zinc-900 dark:hover:text-white">Subscribe</a>
                </nav>

                <div class="hidden items-center gap-2 md:flex">
                    @auth
                        <a
                            href="{{ route('dashboard') }}"
                            class="inline-flex items-center justify-center rounded-lg px-3 py-2 text-sm font-medium text-zinc-700 ring-1 ring-zinc-200 hover:bg-zinc-50 dark:text-zinc-200 dark:ring-zinc-800 dark:hover:bg-white/5"
                            wire:navigate
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-flex items-center justify-center rounded-lg px-3 py-2 text-sm font-medium text-zinc-700 ring-1 ring-zinc-200 hover:bg-zinc-50 dark:text-zinc-200 dark:ring-zinc-800 dark:hover:bg-white/5"
                            wire:navigate
                        >
                            Log in
                        </a>
                        <a
                            href="{{ route('register') }}"
                            class="inline-flex items-center justify-center rounded-lg bg-zinc-900 px-3 py-2 text-sm font-medium shadow-sm hover:bg-zinc-800 dark:bg-white dark:text-zinc-900 dark:hover:bg-zinc-100"
                            wire:navigate
                        >
                            Get started
                        </a>
                    @endauth
                </div>

                <details class="relative md:hidden">
                    <summary class="list-none rounded-lg px-3 py-2 text-sm font-medium text-zinc-700 ring-1 ring-zinc-200 hover:bg-zinc-50 dark:text-zinc-200 dark:ring-zinc-800 dark:hover:bg-white/5">
                        Menu
                    </summary>
                    <div class="absolute right-0 mt-2 w-56 overflow-hidden rounded-xl border border-zinc-200 bg-white shadow-lg dark:border-zinc-800 dark:bg-zinc-950">
                        <div class="flex flex-col p-2 text-sm">
                            <a href="#features" class="rounded-lg px-3 py-2 hover:bg-zinc-50 dark:hover:bg-white/5">Features</a>
                            <a href="#workflow" class="rounded-lg px-3 py-2 hover:bg-zinc-50 dark:hover:bg-white/5">Workflow</a>
                            <a href="#newsletter" class="rounded-lg px-3 py-2 hover:bg-zinc-50 dark:hover:bg-white/5">Newsletter</a>
                            <div class="my-1 h-px bg-zinc-200 dark:bg-zinc-800"></div>
                            @auth
                                <a href="{{ route('dashboard') }}" class="rounded-lg px-3 py-2 hover:bg-zinc-50 dark:hover:bg-white/5" wire:navigate>Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="rounded-lg px-3 py-2 hover:bg-zinc-50 dark:hover:bg-white/5" wire:navigate>Log in</a>
                                <a href="{{ route('register') }}" class="rounded-lg bg-zinc-900 px-3 py-2 font-medium text-white hover:bg-zinc-800 dark:bg-white dark:text-zinc-900 dark:hover:bg-zinc-100" wire:navigate>Get started</a>
                            @endauth
                        </div>
                    </div>
                </details>
            </div>
        </header>

        <main id="content">
            <section class="relative isolate overflow-hidden">
                <div class="pointer-events-none absolute inset-0 -z-10">
                    <div class="absolute -top-28 left-1/2 h-[28rem] w-[44rem] -translate-x-1/2 rounded-full bg-gradient-to-r from-pink-500/25 via-fuchsia-500/20 to-sky-500/20 blur-3xl"></div>
                    <div class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-zinc-300/70 to-transparent dark:via-zinc-700/70"></div>
                    <x-placeholder-pattern class="absolute inset-0 size-full stroke-zinc-900/10 dark:stroke-white/10" />
                </div>

                <div class="mx-auto grid max-w-6xl gap-10 px-4 pb-16 pt-14 sm:px-6 sm:pb-20 lg:grid-cols-12 lg:gap-12 lg:pb-24 lg:pt-20">
                    <div class="lg:col-span-7">
                        <p class="inline-flex items-center gap-2 rounded-full border border-zinc-200 bg-white/70 px-3 py-1 text-xs font-medium text-zinc-300 shadow-sm backdrop-blur dark:border-zinc-800 dark:bg-zinc-950 dark:text-zinc-200">
                            <span class="size-1.5 rounded-full bg-pink-500"></span>
                            Current Topic:
                            Right now, I am exploring Laravel 
                        </p>

                        <h1 class="mt-6 text-balance text-4xl font-semibold tracking-tight text-zinc-900 dark:text-white sm:text-5xl">
                            A whole new way to document research and ideas
                        </h1>

                        <p class="mt-4 max-w-xl text-pretty text-base leading-relaxed text-zinc-900 dark:text-zinc-400 sm:text-lg">
                            Hi I'm Fab. I'm here to unscramble my thoughts. I'm not perfect, but I share what I learn... without filter.

                        <div class="mt-8 flex flex-wrap items-center gap-3">
                            @auth
                                <a
                                    href="{{ route('about.me') }}"
                                    class="inline-flex items-center justify-center rounded-lg bg-zinc-900 px-4 py-2.5 text-sm font-medium text-white shadow-sm hover:bg-pink-500 dark:bg-pink dark:text-black dark:hover:bg-pink-500"
                                    wire:navigate
                                >
                                    Learn about my work
                                </a>
                            @else
                                <a
                                    href="{{ route('register') }}"
                                    class="inline-flex items-center justify-center rounded-lg bg-zinc-900 px-4 py-2.5 text-sm font-medium ring-3 text-black shadow-sm hover:bg-pink-500 dark:bg-pink-200 dark:text-zinc-900 dark:hover:bg-pink-500"
                                    wire:navigate
                                >
                                    Join Fabblogs
                                </a>
                                <p> or</p>
                                <a
                                    href="{{ route('login') }}"
                                    class="inline-flex items-center justify-center rounded-lg bg-zinc-900 px-4 py-2.5 text-sm font-medium ring-3 text-black shadow-sm hover:bg-blue-500 dark:bg-blue-200 dark:text-zinc-900 dark:hover:bg-blue-500"
                                    wire:navigate
                                >
                                    Log in
                                </a>
                            @endauth
                            <p>or</p>
                            <a
                                href="{{ route('posts.index') }}"
                                class="inline-flex items-center justify-center rounded-lg bg-zinc-900 px-4 py-2.5 text-sm font-medium ring-3 text-black shadow-sm hover:bg-green-500 dark:bg-green-200 dark:text-zinc-900 dark:hover:bg-green-500"
                            >
                                Explore Topics 
                            </a>
                        </div>
                    <br>
                    <br>
                    <!-- space for color picker -->

                    <p class="text-xs font-medium text-black">What vibe are you going for today? Pick a color!</p>
                                    <div x-data="{
                                            apply(color) {
                                                localStorage.setItem('textColor', color);

                                                const vars = {
                                                    '--text-color-900': `var(--color-${color}-900)`,
                                                    '--text-color-700': `var(--color-${color}-700)`,
                                                    '--text-color-300': `var(--color-${color}-300)`,
                                                    '--text-color-100': `var(--color-${color}-100)`
                                                };

                                                Object.entries(vars).forEach(([k,v]) => {
                                                    document.documentElement.style.setProperty(k, v);
                                                    document.body.style.setProperty(k, v);
                                                });

                                                window.dispatchEvent(new CustomEvent('text-color-changed', { detail: { color } }));
                                                },
                                            init() {
                                                const c = localStorage.getItem('textColor') || '{{ auth()->user()->text_color ?? 'zinc' }}';
                                                this.apply(c);
                                            }
                                        }" x-init="init()" class="mt-2 flex gap-2" role="list">

                                        <button @click="apply('pink')" @if(auth()->check()) wire:click="updateTextColor('pink')" @endif aria-label="Set text color to pink" title="Pink" class="h-6 w-6 rounded-full bg-pink-500 ring-2 ring-white dark:ring-zinc-900"></button>

                                        <button @click="apply('fuchsia')" @if(auth()->check()) wire:click="updateTextColor('fuchsia')" @endif aria-label="Set text color to fuchsia" title="Fuchsia" class="h-6 w-6 rounded-full bg-fuchsia-500 ring-2 ring-white dark:ring-zinc-900"></button>

                                        <button @click="apply('purple')" @if(auth()->check()) wire:click="updateTextColor('purple')" @endif aria-label="Set text color to purple" title="Purple" class="h-6 w-6 rounded-full bg-purple-500 ring-2 ring-white dark:ring-zinc-900"></button>

                                        <button @click="apply('indigo')" @if(auth()->check()) wire:click="updateTextColor('indigo')" @endif aria-label="Set text color to indigo" title="Indigo" class="h-6 w-6 rounded-full bg-indigo-500 ring-2 ring-white dark:ring-zinc-900"></button>

                                        <button @click="apply('blue')" @if(auth()->check()) wire:click="updateTextColor('blue')" @endif aria-label="Set text color to blue" title="Blue" class="h-6 w-6 rounded-full bg-blue-500 ring-2 ring-white dark:ring-zinc-900"></button>

                                        <button @click="apply('sky')" @if(auth()->check()) wire:click="updateTextColor('sky')" @endif aria-label="Set text color to sky" title="Sky" class="h-6 w-6 rounded-full bg-sky-500 ring-2 ring-white dark:ring-zinc-900"></button>

                                        <button @click="apply('cyan')" @if(auth()->check()) wire:click="updateTextColor('cyan')" @endif aria-label="Set text color to cyan" title="Cyan" class="h-6 w-6 rounded-full bg-cyan-500 ring-2 ring-white dark:ring-zinc-900"></button>

                                        <button @click="apply('teal')" @if(auth()->check()) wire:click="updateTextColor('teal')" @endif aria-label="Set text color to teal" title="Teal" class="h-6 w-6 rounded-full bg-teal-500 ring-2 ring-white dark:ring-zinc-900"></button>

                                        <button @click="apply('green')" @if(auth()->check()) wire:click="updateTextColor('green')" @endif aria-label="Set text color to green" title="Green" class="h-6 w-6 rounded-full bg-green-500 ring-2 ring-white dark:ring-zinc-900"></button>

                                        <button @click="apply('lime')" @if(auth()->check()) wire:click="updateTextColor('lime')" @endif aria-label="Set text color to lime" title="Lime" class="h-6 w-6 rounded-full bg-lime-500 ring-2 ring-white dark:ring-zinc-900"></button>
                                    </div>
                                </div>

                        <!-- Side window on home screen -->

                    <div class="lg:col-span-5">
                        <div class="relative overflow-hidden rounded-2xl border border-zinc-200 bg-white shadow-sm dark:border-zinc-800 dark:bg-zinc-950">
                            <div class="flex items-center justify-between border-b border-zinc-200 px-4 py-3 dark:border-zinc-800">
                                <div class="flex items-center gap-2">
                                    <span class="size-2 rounded-full bg-red-400"></span>
                                    <span class="size-2 rounded-full bg-yellow-400"></span>
                                    <span class="size-2 rounded-full bg-green-400"></span>
                                </div>

                                <span class="text-xs font-medium text-zinc-500 dark:text-zinc-400">fabblogs</span>
                            </div>
                            

                            <div class="p-4">
                                <div class="rounded-xl bg-zinc-50 p-4 dark:bg-white/5">
                                    <p class="text-sm font-semibold text-zinc-900 dark:text-white"></p>
                                    <p class="text-xl font-bold text-zinc-500 dark:text-zinc-400">Upcoming Topics</p>
                                    
                                </div>

                                <div class="mt-4 grid gap-3">
                                    <div class="rounded-xl border border-zinc-200 p-4 dark:border-zinc-800">
                                        <p class="text-sm font-semibold text-zinc-900 dark:text-white">My Journey with Laravel</p>
                                        <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-300">How does it work under the hood? Especially for begineers just learning.</p>
                                    </div>
                                    <div class="rounded-xl border border-zinc-200 p-4 dark:border-zinc-800">
                                        <p class="text-sm font-semibold text-zinc-900 dark:text-white">Basic Algorithms you should know</p>
                                        <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-300">We hear this word thrown around in the tech world, but what are they really?</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </section>

            <section id="features" class="mx-auto max-w-6xl px-4 py-14 sm:px-6 sm:py-20">
                <div class="max-w-2xl">
                    <h2 class="text-2xl font-semibold tracking-tight text-zinc-900 dark:text-white sm:text-3xl">My Approach To Blogging</h2>
                    <p class="mt-3 text-base leading-relaxed text-zinc-600 dark:text-zinc-300">
                        Simply curiosity and a desire to share what I learn. No frills, no fluff.
                    </p>
                </div>

                <div class="mt-10 grid gap-4 md:grid-cols-3">
                    <div class="rounded-2xl border border-zinc-200 bg-white p-6 shadow-sm dark:border-zinc-800 dark:bg-zinc-950">
                        <div class="flex size-10 items-center justify-center rounded-xl bg-pink-500/10 text-pink-600 dark:text-pink-400">
                            <svg viewBox="0 0 24 24" fill="none" class="size-5" aria-hidden="true">
                                <path d="M4 7.5V19a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                <path d="M8 3h8l2 4.5H6L8 3Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3 class="mt-4 text-base font-semibold text-zinc-900 dark:text-white">Learning Through Association</h3>
                        <p class="mt-2 text-sm leading-relaxed text-zinc-600 dark:text-zinc-300">
                            In order for things to stick in my brain, I connect a previously neutral stimulus and a naturally occuring stimulus and for association. 
                            This is called <a href="https://www.sciencedirect.com/science/article/abs/pii/S0149763404000892" class="font-bold underline">classical conditioning</a> You have probably
                            heard of an experiment called Pavlov's dogs. Where a natural stimulus (food) was paired with the sound of a bell, and the dogs 
                            eventually started to salivate at the sound of the bell alone.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-zinc-200 bg-white p-6 shadow-sm dark:border-zinc-800 dark:bg-zinc-950">
                        <div class="flex size-10 items-center justify-center rounded-xl bg-fuchsia-500/10 text-fuchsia-700 dark:text-fuchsia-400">
                            <svg viewBox="0 0 24 24" fill="none" class="size-5" aria-hidden="true">
                                <path d="M8 12h8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                <path d="M12 8v8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                <path d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" stroke="currentColor" stroke-width="1.8" />
                            </svg>
                        </div>
                        <h3 class="mt-4 text-base font-semibold text-zinc-900 dark:text-white">Learning By Doing</h3>
                        <p class="mt-2 text-sm leading-relaxed text-zinc-600 dark:text-zinc-300">
                            A simple but effective way to <a href="https://psycnet.apa.org/fulltext/2014-55719-001.html" class="font-bold underline">learn is by doing.</a> I apply what I learn, and then reinforce my learning 
                            through talking about it with you. I also like to challenge you to try one simple thing each time you read a post. 
                        </p>
                    </div>

                    <div class="rounded-2xl border border-zinc-200 bg-white p-6 shadow-sm dark:border-zinc-800 dark:bg-zinc-950">
                        <div class="flex size-10 items-center justify-center rounded-xl bg-sky-500/10 text-sky-700 dark:text-sky-400">
                            <svg viewBox="0 0 24 24" fill="none" class="size-5" aria-hidden="true">
                                <path d="M4.5 12a7.5 7.5 0 1 1 15 0v6a1.5 1.5 0 0 1-1.5 1.5h-3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                <path d="M12 15.5v.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                <path d="M9.5 11.5a2.5 2.5 0 0 1 5 0c0 1.1-.72 1.69-1.33 2.16-.61.46-1.17.9-1.17 1.84" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3 class="mt-4 text-base font-semibold text-zinc-900 dark:text-white">True Critical Thinking</h3>
                        <p class="mt-2 text-sm leading-relaxed text-zinc-600 dark:text-zinc-300">
                            Humans typically love using short cuts to make quick and efficient decisions, but sometimes these short cuts 
                            <a href="https://www.onlinecasinoground.nl/wp-content/uploads/2018/12/Decision-Making-and-Cognitive-Biases-EhrlingerReadingerKim2015.pdf" class="font-bold underline">are predictable and stops innovating thinking.</a>
                            Let alone lead to judgement errors. I try to be more heurristic in my approach while giving myself grace for errors, and you 
                            get to see that in action here. 
                        </p>
                    </div>
                </div>
            </section>


            <section id="newsletter" class="mx-auto max-w-6xl px-4 py-14 sm:px-6 sm:py-20">
                <div class="grid gap-10 rounded-3xl border border-zinc-200 bg-white p-8 shadow-sm dark:border-zinc-800 dark:bg-zinc-950 sm:p-10 lg:grid-cols-12 lg:items-center">
                    <div class="lg:col-span-7">
                        <h2 class="text-2xl font-semibold tracking-tight text-zinc-900 dark:text-white sm:text-3xl">Get new posts in your inbox</h2>
                        <p class="mt-3 text-base leading-relaxed text-zinc-600 dark:text-zinc-300">
                            A short email when something new is published. No spam. Unsubscribe anytime.
                        </p>
                    </div>

                    <div class="lg:col-span-5">
                        <form action="#" method="get" class="flex flex-col gap-3 sm:flex-row">
                            <label class="sr-only" for="email">Email</label>
                            <input
                                id="email"
                                name="email"
                                type="email"
                                autocomplete="email"
                                placeholder="you@example.com"
                                class="h-11 w-full rounded-lg border border-zinc-200 bg-white px-3 text-sm text-zinc-900 shadow-sm outline-none ring-0 placeholder:text-zinc-400 focus:border-zinc-300 focus:ring-2 focus:ring-pink-500/30 dark:border-zinc-800 dark:bg-zinc-950 dark:text-white dark:placeholder:text-zinc-500 dark:focus:border-zinc-700"
                            />
                            <button
                                type="submit"
                                class="inline-flex h-11 items-center justify-center rounded-lg bg-zinc-900 px-4 text-sm font-medium text-white shadow-sm hover:bg-zinc-400 dark:bg-black dark:text-zinc-900 dark:hover:bg-zinc-75 ring-3 ring-zinc-900/10 dark:ring-white/10"
                            >
                                Notify me
                            </button>
                        </form>
                        <p class="mt-3 text-xs text-zinc-500 dark:text-zinc-400">
                            Subscribe to get my latest posts delivered right to your inbox.
                        </p>
                    </div>
                </div>
            </section>
        </main>

        <footer class="border-t border-zinc-200 py-10 dark:border-zinc-800">
            <div class="mx-auto flex max-w-6xl flex-col gap-4 px-4 text-sm text-zinc-600 dark:text-zinc-400 sm:flex-row sm:items-center sm:justify-between sm:px-6">
                <p>© {{ now()->year }} Fabblogs. Built with Laravel.</p>
                <div class="flex items-center gap-4">
                    <a href="#features" class="hover:text-zinc-900 dark:hover:text-white">Features</a>
                    <a href="#newsletter" class="hover:text-zinc-900 dark:hover:text-white">Newsletter</a>
                    @auth
                        <a href="{{ route('dashboard') }}" class="hover:text-zinc-900 dark:hover:text-white" wire:navigate>Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="hover:text-zinc-900 dark:hover:text-white" wire:navigate>Log in</a>
                    @endauth
                </div>
            </div>
        </footer>

        @fluxScripts
    </body>
</html>
