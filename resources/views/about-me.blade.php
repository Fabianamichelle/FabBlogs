<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head', ['title' => 'About Fabiana'])
    <meta name="description" content="Learn more about Fabiana — the engineer behind Fabblogs." />
</head>
<body class="min-h-screen bg-white antialiased text-zinc-900 dark:bg-zinc-950 dark:text-zinc-100">
    <div class="relative isolate overflow-hidden">
        <div class="pointer-events-none absolute inset-0 -z-10">
            <div class="absolute -top-28 left-1/2 h-[26rem] w-[40rem] -translate-x-1/2 rounded-full bg-gradient-to-r from-pink-500/25 via-fuchsia-400/20 to-sky-400/20 blur-3xl"></div>
            <div class="absolute inset-x-10 bottom-6 h-[18rem] rounded-[3rem] bg-gradient-to-r from-fuchsia-500/10 via-pink-400/10 to-emerald-300/10 blur-3xl"></div>
        </div>

        <header class="sticky top-0 z-40 border-b border-zinc-200/60 bg-white/80 backdrop-blur dark:border-zinc-800 dark:bg-zinc-950/70">
            <div class="mx-auto flex max-w-5xl items-center justify-between gap-3 px-4 py-4 sm:px-6">
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    <span class="grid size-10 place-items-center rounded-2xl bg-gradient-to-br from-pink-500 to-fuchsia-600 text-white shadow-sm ring-1 ring-black/5">
                        <x-app-logo-icon class="size-6 fill-current text-white" />
                    </span>
                    <span class="text-sm font-semibold tracking-tight">Fabblogs</span>
                </a>
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2 rounded-full bg-zinc-900 px-3 py-2 text-xs font-semibold text-white shadow-sm ring-1 ring-black/5 hover:bg-zinc-800 dark:bg-white dark:text-zinc-900 dark:hover:bg-zinc-200">
                    ← Back home
                </a>
            </div>
        </header>

        <main class="mx-auto flex max-w-5xl flex-col gap-10 px-4 pb-16 pt-12 sm:px-6 sm:pb-20 sm:pt-16">
            <section class="grid gap-8 lg:grid-cols-5 lg:items-center lg:gap-10">
                <div class="lg:col-span-3 space-y-4">
                    <x-fab-photo-icon class="rounded-3xl border border-zinc-200 shadow-sm dark:border-zinc-800" />
                    <p class="inline-flex items-center gap-2 rounded-full border border-pink-200/70 bg-white/80 px-3 py-1 text-xs font-semibold text-pink-600 shadow-sm backdrop-blur dark:border-pink-900/40 dark:bg-zinc-950/70 dark:text-pink-300">
                        ✿ Hi I’m Fabiana!
                    </p>
                    <h1 class="text-4xl font-semibold tracking-tight text-zinc-900 dark:text-white sm:text-5xl">
                        Junior Software Engineer 
                    </h1>
                    <p class="text-base leading-relaxed text-zinc-600 dark:text-zinc-300">
                        
                    </p>
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="inline-flex items-center gap-2 rounded-full bg-pink-500/10 px-3 py-1.5 text-sm font-semibold text-pink-700 ring-1 ring-pink-200 dark:text-pink-300 dark:ring-pink-900/50">
                            🌸 Frontend joy: Vue, Livewire, Tailwind
                        </span>
                        <span class="inline-flex items-center gap-2 rounded-full bg-fuchsia-500/10 px-3 py-1.5 text-sm font-semibold text-fuchsia-700 ring-1 ring-fuchsia-200 dark:text-fuchsia-200 dark:ring-fuchsia-900/50">
                            💻 Backend calm: Laravel, APIs
                        </span>
                        <span class="inline-flex items-center gap-2 rounded-full bg-sky-500/10 px-3 py-1.5 text-sm font-semibold text-sky-700 ring-1 ring-sky-200 dark:text-sky-200 dark:ring-sky-900/50">
                            ✨ Obsessed with clean DX
                        </span>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <a href="mailto:{{ config('mail.from.address') ?? 'hello@example.com' }}" class="inline-flex items-center gap-2 rounded-lg bg-zinc-900 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-zinc-800 dark:bg-white dark:text-zinc-900 dark:hover:bg-zinc-200">
                            💌 Say hello
                        </a>
                        <a href="{{ route('home') }}#newsletter" class="inline-flex items-center gap-2 rounded-lg px-4 py-2.5 text-sm font-semibold text-zinc-700 ring-1 ring-zinc-200 hover:bg-zinc-50 dark:text-zinc-200 dark:ring-zinc-800 dark:hover:bg-white/5">
                            📰 Subscribe to updates
                        </a>
                    </div>
                </div>
                <div class="lg:col-span-2">
                    <div class="relative overflow-hidden rounded-3xl border border-zinc-200 bg-white/90 p-6 shadow-xl backdrop-blur dark:border-zinc-800 dark:bg-zinc-950/80">
                        <div class="absolute -right-8 -top-8 size-28 rounded-full bg-gradient-to-br from-pink-400/60 via-fuchsia-400/40 to-amber-300/40 blur-3xl"></div>
                        <div class="relative space-y-4">
                            <div class="flex items-center gap-3">
                                <div>
                                    <p class="text-lg uppercase tracking-[0.2em] text-zinc-500 dark:text-white">Why Subscribe?</p>
                                    <p class="text-m font-semibold text-zinc-900 dark:text-zinc-400">Because I believe in learning through reading and <em class="text-zinc-900 dark:text-white">you should too </em> </p>
                                </div>
                            </div>
                            <div class="h-4 w-full">
                                <p>That means:</p>
                            </div>

                            <div class="space-y-3 text-sm">
                                <p>♡ You want someone who makes mistakes because that's what it takes to learn</p>
                                <p>☆ Someone who simplifies unglamourous learning</p>
                                <p>☕ A safe space to grow with a community with people like you</p>
                            </div>
                            <div class="grid grid-cols-2 gap-2 text-xs font-semibold text-zinc-800 dark:text-zinc-200">
                                <span class="rounded-xl bg-pink-500/10 px-3 py-2 ring-1 ring-pink-200 dark:ring-pink-900/50">UI polish</span>
                                <span class="rounded-xl bg-fuchsia-500/10 px-3 py-2 ring-1 ring-fuchsia-200 dark:ring-fuchsia-900/50">API design</span>
                                <span class="rounded-xl bg-sky-500/10 px-3 py-2 ring-1 ring-sky-200 dark:ring-sky-900/50">DX tooling</span>
                                <span class="rounded-xl bg-emerald-500/10 px-3 py-2 ring-1 ring-emerald-200 dark:ring-emerald-900/50">Mentoring</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="grid gap-6 lg:grid-cols-3">
                <div class="rounded-2xl border border-zinc-200 bg-white/80 p-5 shadow-sm backdrop-blur dark:border-zinc-800 dark:bg-zinc-950/70">
                    <p class="text-xs font-semibold uppercase tracking-wide text-pink-500">Currently</p>
                    <h2 class="mt-2 text-lg font-semibold text-zinc-900 dark:text-white">Shipping calm interfaces</h2>
                    <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-300">Designing flows that feel comforting and easy—even on a Monday morning.</p>
                </div>
                <div class="rounded-2xl border border-zinc-200 bg-white/80 p-5 shadow-sm backdrop-blur dark:border-zinc-800 dark:bg-zinc-950/70">
                    <p class="text-xs font-semibold uppercase tracking-wide text-fuchsia-500">Learning</p>
                    <h2 class="mt-2 text-lg font-semibold text-zinc-900 dark:text-white">Advanced animation</h2>
                    <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-300">Micro-interactions with a kawaii twist—without sacrificing performance.</p>
                </div>
                <div class="rounded-2xl border border-zinc-200 bg-white/80 p-5 shadow-sm backdrop-blur dark:border-zinc-800 dark:bg-zinc-950/70">
                    <p class="text-xs font-semibold uppercase tracking-wide text-emerald-500">Community</p>
                    <h2 class="mt-2 text-lg font-semibold text-zinc-900 dark:text-white">Mentoring juniors</h2>
                    <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-300">Pairing, code reviews, and helping new devs find their spark.</p>
                </div>
            </section>
        </main>
    </div>

    @fluxScripts
</body>
</html>
