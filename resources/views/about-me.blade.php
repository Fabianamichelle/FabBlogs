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
                    <div class="display:inline-block gap-4 lg:flex lg:items-center">
                    <x-fab-photo-icon class="rounded-3xl border border-zinc-200 shadow-sm dark:border-zinc-800 display:inline-block" />
                    <p class="text-4xl font-semibold tracking-tight text-zinc-900 dark:text-white sm:text-5xl">
                       Hi I’m Fabiana!
                    </p>
                    </div>
                    <h1 class="text-xl font-medium text-zinc-600 dark:text-white">
                        Junior Software Engineer 
                    </h1>
                    <p class="text-base leading-relaxed text-zinc-600 dark:text-zinc-300">
                        
                    </p>
                    <div>
                       <h3>
                         Welcome to my site! I have been dreaming about having a place to track my learning and I thought why not share it with you!
                         Hopefully you will find something useful here. I decided to make this site a bit user friendly so you can share your thoughts by commenting on my 
                         posts or reaching out to me via email if you have any questions or just want to say hi!
                        <br/><br/>
                         I love AI but my posts are 100% written by me with no AI assistance. On my spare time, I love reading books! I am starting a new challenge for 2026, so 
                         take a look at my  <a href="https://fabblogs.com/books" class="text-fuchsia-600 hover:underline">book log</a>. I am recently married as of July 2025, and I 
                         have 3 daughters that keep me on my toes! I own a dog named Prince who is the sassest and sweetest bulldog you will ever meet. I am also in my last year of 
                         college pursing a double major in Bachelors in Business Administration and Applied Computer Science.
                        <br/><br/>
                        You can expect posts about my learning journey in software engineering, tips and tricks I pick up along the way, and maybe some personal stories too. I will never
                        make you pay for anything on this site, everything is free and always will be. If you want to support me, consider subscribing to my newsletter where I share exclusive content and updates.
                        <br/><br/>
                        Enjoy your stay and happy reading!
                       </h3>

                        
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <a href="mailto:{{ config('mail.from.address') ?? 'hello@example.com' }}" class="inline-flex items-center gap-2 rounded-lg bg-zinc-900 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-zinc-800 dark:bg-white dark:text-zinc-900 dark:hover:bg-zinc-200">
                            💌 Say hello
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
                                <p>☆ Someone who simplifies tedious concepts</p>
                                <p>☕ A safe space to grow with a community of people like you</p>
                            </div>
                            <div>
                                <a href="{{ route('home') }}#newsletter" class="inline-flex items-center gap-2 rounded-lg bg-fuchsia-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-fuchsia-500">
                                    📰 Subscribe to updates
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    @fluxScripts
</body>
</html>
