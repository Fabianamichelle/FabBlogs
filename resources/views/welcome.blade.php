<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head', ['title' => 'Fabblogs'])
        <meta name="description" content="Fabblogs is a personal blog for writing, learning, and sharing ideas" />
    </head>
    <body class="min-h-screen bg-white antialiased text-zinc-900 dark:bg-zinc-950 dark:text-zinc-100">
        <a
            href="#content"
            class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-50 focus:rounded-lg focus:bg-white focus:px-3 focus:py-2 focus:text-sm focus:font-medium focus:text-zinc-900 focus:shadow focus:ring-1 focus:ring-zinc-200 dark:focus:bg-zinc-900 dark:focus:text-white dark:focus:ring-zinc-700"
        >
            Skip to content
        </a>

        <header class="sticky top-0 z-40 border-b border-zinc-200/60 bg-white/80 backdrop-blur dark:border-zinc-800 dark:bg-zinc-950/70">
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
                            class="inline-flex items-center justify-center rounded-lg bg-zinc-900 px-3 py-2 text-sm font-medium text-white shadow-sm hover:bg-zinc-800 dark:bg-white dark:text-zinc-900 dark:hover:bg-zinc-100"
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
                        <p class="inline-flex items-center gap-2 rounded-full border border-zinc-200 bg-white/70 px-3 py-1 text-xs font-medium text-zinc-700 shadow-sm backdrop-blur dark:border-zinc-800 dark:bg-zinc-950/60 dark:text-zinc-200">
                            <span class="size-1.5 rounded-full bg-pink-500"></span>
                            A small corner of the internet for big ideas
                        </p>

                        <h1 class="mt-6 text-balance text-4xl font-semibold tracking-tight text-zinc-900 dark:text-white sm:text-5xl">
                            Write with clarity. Publish with confidence.
                        </h1>

                        <p class="mt-4 max-w-xl text-pretty text-base leading-relaxed text-zinc-600 dark:text-zinc-300 sm:text-lg">
                            Fabblogs is my blog space for shipping thoughts, tutorials, and experiments. Fast to read, easy to navigate, and designed for focus.
                        </p>

                        <div class="mt-8 flex flex-wrap items-center gap-3">
                            @auth
                                <a
                                    href="{{ route('dashboard') }}"
                                    class="inline-flex items-center justify-center rounded-lg bg-zinc-900 px-4 py-2.5 text-sm font-medium text-white shadow-sm hover:bg-zinc-800 dark:bg-white dark:text-zinc-900 dark:hover:bg-zinc-100"
                                    wire:navigate
                                >
                                    Go to dashboard
                                </a>
                            @else
                                <a
                                    href="{{ route('register') }}"
                                    class="inline-flex items-center justify-center rounded-lg bg-zinc-900 px-4 py-2.5 text-sm font-medium text-white shadow-sm hover:bg-zinc-800 dark:bg-white dark:text-zinc-900 dark:hover:bg-zinc-100"
                                    wire:navigate
                                >
                                    Start writing
                                </a>
                                <a
                                    href="{{ route('login') }}"
                                    class="inline-flex items-center justify-center rounded-lg px-4 py-2.5 text-sm font-medium text-zinc-700 ring-1 ring-zinc-200 hover:bg-zinc-50 dark:text-zinc-200 dark:ring-zinc-800 dark:hover:bg-white/5"
                                    wire:navigate
                                >
                                    Log in
                                </a>
                            @endauth

                            <a
                                href="#features"
                                class="inline-flex items-center justify-center rounded-lg px-4 py-2.5 text-sm font-medium text-zinc-700 hover:bg-zinc-50 dark:text-zinc-200 dark:hover:bg-white/5"
                            >
                                Explore features
                            </a>
                        </div>

                        <dl class="mt-10 grid grid-cols-2 gap-4 sm:max-w-xl sm:grid-cols-3">
                            <div class="rounded-xl border border-zinc-200 bg-white/70 p-4 shadow-sm backdrop-blur dark:border-zinc-800 dark:bg-zinc-950/60">
                                <dt class="text-xs font-medium text-zinc-600 dark:text-zinc-400">Reading time</dt>
                                <dd class="mt-1 text-sm font-semibold text-zinc-900 dark:text-white">Optimized layouts</dd>
                            </div>
                            <div class="rounded-xl border border-zinc-200 bg-white/70 p-4 shadow-sm backdrop-blur dark:border-zinc-800 dark:bg-zinc-950/60">
                                <dt class="text-xs font-medium text-zinc-600 dark:text-zinc-400">Speed</dt>
                                <dd class="mt-1 text-sm font-semibold text-zinc-900 dark:text-white">Fast by default</dd>
                            </div>
                            <div class="rounded-xl border border-zinc-200 bg-white/70 p-4 shadow-sm backdrop-blur dark:border-zinc-800 dark:bg-zinc-950/60">
                                <dt class="text-xs font-medium text-zinc-600 dark:text-zinc-400">Built with</dt>
                                <dd class="mt-1 text-sm font-semibold text-zinc-900 dark:text-white">Laravel + Livewire</dd>
                            </div>
                        </dl>
                    </div>

                    <div class="lg:col-span-5">
                        <div class="relative overflow-hidden rounded-2xl border border-zinc-200 bg-white shadow-sm dark:border-zinc-800 dark:bg-zinc-950">
                            <div class="flex items-center justify-between border-b border-zinc-200 px-4 py-3 dark:border-zinc-800">
                                <div class="flex items-center gap-2">
                                    <span class="size-2 rounded-full bg-red-400"></span>
                                    <span class="size-2 rounded-full bg-yellow-400"></span>
                                    <span class="size-2 rounded-full bg-green-400"></span>
                                </div>
                                <span class="text-xs font-medium text-zinc-500 dark:text-zinc-400">fabblogs.test</span>
                            </div>

                            <div class="p-4">
                                <div class="rounded-xl bg-zinc-50 p-4 dark:bg-white/5">
                                    <p class="text-xs font-medium text-zinc-500 dark:text-zinc-400">Pinned</p>
                                    <p class="mt-1 text-sm font-semibold text-zinc-900 dark:text-white">How I structure my notes into posts</p>
                                    <p class="mt-2 text-sm leading-relaxed text-zinc-600 dark:text-zinc-300">
                                        A lightweight workflow: capture → refine → publish. No friction, just momentum.
                                    </p>
                                </div>

                                <div class="mt-4 grid gap-3">
                                    <div class="rounded-xl border border-zinc-200 p-4 dark:border-zinc-800">
                                        <p class="text-sm font-semibold text-zinc-900 dark:text-white">Short, skimmable sections</p>
                                        <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-300">Clear headings, generous spacing, and good typography.</p>
                                    </div>
                                    <div class="rounded-xl border border-zinc-200 p-4 dark:border-zinc-800">
                                        <p class="text-sm font-semibold text-zinc-900 dark:text-white">A calm color system</p>
                                        <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-300">Designed to keep attention on the words.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="mt-4 text-xs text-zinc-500 dark:text-zinc-400">
                            Tip: this is a starter landing page—swap sections with your own posts, categories, and highlights as you build.
                        </p>
                    </div>
                </div>
            </section>

            <section id="features" class="mx-auto max-w-6xl px-4 py-14 sm:px-6 sm:py-20">
                <div class="max-w-2xl">
                    <h2 class="text-2xl font-semibold tracking-tight text-zinc-900 dark:text-white sm:text-3xl">Everything you need for a clean blog</h2>
                    <p class="mt-3 text-base leading-relaxed text-zinc-600 dark:text-zinc-300">
                        A strong foundation for writing and publishing—without the clutter.
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
                        <h3 class="mt-4 text-base font-semibold text-zinc-900 dark:text-white">Posts that look good</h3>
                        <p class="mt-2 text-sm leading-relaxed text-zinc-600 dark:text-zinc-300">
                            Typography-first layouts designed for long-form reading across devices.
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
                        <h3 class="mt-4 text-base font-semibold text-zinc-900 dark:text-white">Simple publishing flow</h3>
                        <p class="mt-2 text-sm leading-relaxed text-zinc-600 dark:text-zinc-300">
                            Keep your workflow lightweight: draft, review, and ship when it’s ready.
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
                        <h3 class="mt-4 text-base font-semibold text-zinc-900 dark:text-white">A space for learning</h3>
                        <p class="mt-2 text-sm leading-relaxed text-zinc-600 dark:text-zinc-300">
                            Turn notes into posts, and posts into a searchable archive of ideas.
                        </p>
                    </div>
                </div>
            </section>

            <section id="workflow" class="border-y border-zinc-200 bg-zinc-50/60 py-14 dark:border-zinc-800 dark:bg-white/5 sm:py-20">
                <div class="mx-auto max-w-6xl px-4 sm:px-6">
                    <div class="grid gap-10 lg:grid-cols-12 lg:gap-12">
                        <div class="lg:col-span-5">
                            <h2 class="text-2xl font-semibold tracking-tight text-zinc-900 dark:text-white sm:text-3xl">A workflow that stays out of your way</h2>
                            <p class="mt-3 text-base leading-relaxed text-zinc-600 dark:text-zinc-300">
                                The goal is simple: keep friction low so writing happens more often.
                            </p>
                        </div>

                        <ol class="grid gap-4 lg:col-span-7 sm:grid-cols-3">
                            <li class="rounded-2xl border border-zinc-200 bg-white p-6 shadow-sm dark:border-zinc-800 dark:bg-zinc-950">
                                <p class="text-xs font-medium text-zinc-500 dark:text-zinc-400">Step 1</p>
                                <p class="mt-2 text-base font-semibold text-zinc-900 dark:text-white">Capture</p>
                                <p class="mt-2 text-sm leading-relaxed text-zinc-600 dark:text-zinc-300">
                                    Save ideas quickly—links, snippets, and outlines.
                                </p>
                            </li>
                            <li class="rounded-2xl border border-zinc-200 bg-white p-6 shadow-sm dark:border-zinc-800 dark:bg-zinc-950">
                                <p class="text-xs font-medium text-zinc-500 dark:text-zinc-400">Step 2</p>
                                <p class="mt-2 text-base font-semibold text-zinc-900 dark:text-white">Refine</p>
                                <p class="mt-2 text-sm leading-relaxed text-zinc-600 dark:text-zinc-300">
                                    Convert notes into a clear narrative with headings.
                                </p>
                            </li>
                            <li class="rounded-2xl border border-zinc-200 bg-white p-6 shadow-sm dark:border-zinc-800 dark:bg-zinc-950">
                                <p class="text-xs font-medium text-zinc-500 dark:text-zinc-400">Step 3</p>
                                <p class="mt-2 text-base font-semibold text-zinc-900 dark:text-white">Publish</p>
                                <p class="mt-2 text-sm leading-relaxed text-zinc-600 dark:text-zinc-300">
                                    Share when it’s ready. Iterate later if you want.
                                </p>
                            </li>
                        </ol>
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
                                class="inline-flex h-11 items-center justify-center rounded-lg bg-zinc-900 px-4 text-sm font-medium text-white shadow-sm hover:bg-zinc-800 dark:bg-white dark:text-zinc-900 dark:hover:bg-zinc-100"
                            >
                                Notify me
                            </button>
                        </form>
                        <p class="mt-3 text-xs text-zinc-500 dark:text-zinc-400">
                            Newsletter wiring is a placeholder here—hook this up to your provider when you’re ready.
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
