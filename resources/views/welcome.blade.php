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
    <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.8.11/dist/dotlottie-wc.js" type="module"></script>

    <body class="min-h-screen bg-white antialiased text-zinc-900  dark:text-white"
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
                    <a href="{{ route('about.me') }}" class="hover:text-zinc-900 text-white">About Me</a>
                    <a href="{{ route('posts.index') }}" class="hover:text-zinc-900 text-white">What I'm up to?</a>
                    <a href="https://fabblogs.substack.com/" class="hover:text-zinc-900 text-white">Subscribe</a>
                    <a href="{{ route('projects') }}" class="hover:text-zinc-900 text-white">My Projects</a>
                </nav>

                <div class="hidden items-center gap-2 md:flex">

                        <a
                            href="{{ route('posts.index') }}"
                            class="inline-flex items-center justify-center rounded-lg bg-zinc-900 px-3 py-2 text-sm font-medium shadow-sm hover:bg-zinc-800 dark:bg-white dark:text-zinc-900 dark:hover:bg-zinc-100"
                            wire:navigate
                        >
                            Explore Topics
                        </a>
                </div>

                <details class="relative md:hidden">
                    <summary class="list-none rounded-lg px-3 py-2 text-sm font-medium text-zinc-900 ring-1 ring-zinc-200 hover:bg-zinc-50 dark:text-white dark:ring-zinc-800 dark:hover:bg-white/5">
                        Menu
                    </summary>
                    <div class="absolute right-0 mt-2 w-56 overflow-hidden rounded-xl border border-zinc-200 bg-white shadow-lg dark:border-zinc-800 dark:bg-zinc-950 dark:text-white">
                        <div class="flex flex-col p-2 text-sm">
                            <a href="{{ route('about.me') }}" class="rounded-lg px-3 py-2 hover:bg-zinc-50 dark:hover:bg-white/5">About Me</a>
                            <a href="{{ route('posts.index') }}" class="rounded-lg px-3 py-2 hover:bg-zinc-50 dark:hover:bg-white/5">Posts</a>
                            <a href="{{ route('projects') }}" class="rounded-lg px-3 py-2 hover:bg-zinc-50 dark:hover:bg-white/5">Projects</a>
                            <a href="https://fabblogs.substack.com/" class="rounded-lg px-3 py-2 hover:bg-zinc-50 dark:hover:bg-white/5">Subscribe</a>
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

                <div class="mx-auto grid items-center max-w-6xl gap-12 px-4 pb-16 pt-14 text-center sm:px-6 sm:pb-20 lg:grid-cols-12 lg:gap-12 lg:pb-24 lg:pt-20 lg:text-left">
                  <div class="lg:col-span-7 space-y-6">
                    <p class="inline-flex items-center gap-2 rounded-full border border-zinc-200 bg-white/70 px-3 py-1 text-xs font-medium text-zinc-300 shadow-sm backdrop-blur dark:border-zinc-800 dark:bg-zinc-950 dark:text-zinc-200 mx-auto lg:mx-0">
                      <span class="size-1.5 rounded-full bg-pink-500"></span>
                      Current Topic: Right now, I am exploring Laravel
                    </p>

                    <h1 class="text-balance text-4xl font-semibold tracking-tight text-zinc-900 dark:text-white sm:text-5xl">
                      This is the site where you finally feel at home.
                    </h1>

                    <p class="max-w-xl text-pretty text-base leading-relaxed text-zinc-900 dark:text-zinc-400 sm:text-lg mx-auto lg:mx-0">
                      Hi I'm Fab. I'm here to unscramble my thoughts. I share what I learn without filter.
                    </p>

                    <div class="mt-2 flex flex-wrap items-center justify-center gap-3 lg:justify-start">
                      <a
                        href="{{ route('projects') }}"
                        class="inline-flex items-center justify-center rounded-lg bg-zinc-900 px-4 py-2.5 text-sm font-medium text-white shadow-sm hover:bg-pink-500 dark:bg-pink dark:text-black dark:hover:bg-pink-500 w-full sm:w-auto"
                        wire:navigate
                      >
                        Learn about my work
                      </a>
                      <a
                        href="{{ route('posts.index') }}"
                        class="inline-flex items-center justify-center rounded-lg bg-zinc-900 px-4 py-2.5 text-sm font-medium text-white shadow-sm hover:bg-pink-500 dark:bg-pink dark:text-black dark:hover:bg-pink-500 w-full sm:w-auto"
                      >
                        Explore Topics 
                      </a>
                    </div>

                    <div class="space-y-2 hidden md:block">
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
                      }" x-init="init()" class="mt-2 flex flex-wrap justify-center gap-2 lg:justify-start" role="list">

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
                  </div>

                    <!-- Side window on home screen -->

                    <div class="lg:col-span-5 md:col-span-12 flex items-center justify-center">
                        <dotlottie-wc src="https://lottie.host/8a82ee8a-0a5c-4cd9-89e8-d8276b57ffbf/3A9lFgab6v.lottie" style="width: 300px;height: 300px" autoplay loop></dotlottie-wc>
                    </div>

                    <section>
                    </section>

                    <div class="lg:col-span-10 lg:col-start-2">
                        <div class="relative overflow-hidden rounded-2xl border border-zinc-200 bg-white shadow-sm dark:border-zinc-800 dark:bg-zinc-950">
                            <div class="flex items-center justify-between border-b border-zinc-200 px-4 py-3 dark:border-zinc-800">
                                <div class="flex items-center gap-2">
                                    <span class="size-2 rounded-full bg-red-400"></span>
                                    <span class="size-2 rounded-full bg-yellow-400"></span>
                                    <span class="size-2 rounded-full bg-green-400"></span>
                                </div>


                                <span class="text-xs font-medium text-zinc-500 dark:text-zinc-400">fabblogs</span>
                            </div>
                            

                            <div class="p-4 text-center">
                                <div class="rounded-xl bg-zinc-50 p-4 dark:bg-white/5">
                                    <p class="text-sm font-semibold text-zinc-900 dark:text-white"></p>
                                    <p class="text-xl font-bold text-zinc-500 dark:text-white">Upcoming Posts</p>
                                    
                                </div>

                                <div class="mt-4 grid gap-3">
                                    <div class="rounded-xl border border-zinc-200 p-4 dark:border-zinc-800">
                                        <p class="text-lg font-semibold text-white dark:text-white">My Journey with Laravel</p>
                                        <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-300">Models, Controllers, Views, Routes? How Do They Connect?</p>
                                    </div>
                                    <div class="rounded-xl border border-zinc-200 p-4 dark:border-zinc-800">
                                        <p class="text-lg font-semibold text-white dark:text-white">Basic Algorithms you should know</p>
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
                    <p class="mt-3 text-base leading-relaxed text-zinc-900">
                        How does Fabiana approach problems?
                    </p>
                </div>

                <div class="mt-10 grid gap-4 md:grid-cols-3">
                    <div class="rounded-2xl border border-zinc-200 bg-white p-6 shadow-sm text-center md:text-left dark:border-zinc-800 dark:bg-zinc-950">
                        <div class="flex size-10 items-center justify-center rounded-xl bg-pink-500/10 text-pink-600 dark:text-pink-400">
                            <img src="{{ asset('images/cld-server-svgrepo-com.svg') }}" alt="server icon">
                        </div>
                        <h3 class="mt-4 text-base font-semibold text-white dark:text-white">Learning Through Association</h3>
                        <p class="mt-2 text-sm leading-relaxed text-zinc-600 dark:text-zinc-300">
                            In order for things to stick in my brain, I connect a previously neutral stimulus and a naturally occuring stimulus and for association. 
                            This is called <a href="https://www.sciencedirect.com/science/article/abs/pii/S0149763404000892" class="font-bold underline">classical conditioning</a> You have probably
                            heard of an experiment called Pavlov's dogs. Where a natural stimulus (food) was paired with the sound of a bell, and the dogs 
                            eventually started to salivate at the sound of the bell alone.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-zinc-200 bg-white p-6 shadow-sm text-center md:text-left dark:border-zinc-800 dark:bg-zinc-950 dark:text-white">
                        <div class="flex size-10 items-center justify-center rounded-xl bg-fuchsia-500/10 text-fuchsia-700 dark:text-fuchsia-400">
                            <img src="{{ asset('images/com-keyboard-svgrepo-com.svg') }}" alt="keyboard icon">
                        </div>
                        <h3 class="mt-4 text-base font-semibold text-white dark:text-white">Learning By Doing</h3>
                        <p class="mt-2 text-sm leading-relaxed text-zinc-600 dark:text-zinc-300">
                            A simple but effective way to <a href="https://psycnet.apa.org/fulltext/2014-55719-001.html" class="font-bold underline">learn is by doing.</a> I apply what I learn, and then reinforce my learning 
                            through talking about it with you. I also like to challenge you to try one simple thing each time you read a post. 
                        </p>
                    </div>

                    <div class="rounded-2xl border border-zinc-200 bg-white p-6 shadow-sm text-center md:text-left dark:border-zinc-800 dark:bg-zinc-950 dark:text-white">
                        <div class="flex size-10 items-center justify-center rounded-xl bg-sky-500/10 text-sky-700 dark:text-sky-400">
                            <img src="{{ asset('images/com-laptop-code-svgrepo-com.svg') }}" alt="Laptop Code Icon">
                        </div>
                        <h3 class="mt-4 text-base font-semibold text-white dark:text-white">True Critical Thinking</h3>
                        <p class="mt-2 text-sm leading-relaxed text-zinc-600 dark:text-zinc-300">
                            Humans typically love using short cuts to make quick and efficient decisions, but sometimes these short cuts 
                            <a href="https://keithstanovich.com/Site/Research_on_Reasoning_files/West_JEP_2008.pdf?utm_source=chatgpt.com" class="font-bold underline">are predictable and stops innovating thinking.</a>
                            Let alone lead to judgement errors. I try to be more heurristic in my approach while giving myself grace for errors, and you 
                            get to see that in action here. 
                        </p>
                    </div>
                </div>
            </section>


            <section id="newsletter" class="mx-auto max-w-6xl px-4 py-14 sm:px-6 sm:py-20">
                <div class="grid gap-10 rounded-3xl border border-zinc-200 bg-white p-8 shadow-sm text-center sm:p-10 lg:grid-cols-12 lg:items-center lg:text-left dark:border-zinc-800 dark:bg-zinc-950">
                    <div class="lg:col-span-7 space-y-3">
                        <h2 class="text-2xl font-semibold tracking-tight text-white dark:text-white sm:text-3xl">Get new posts in your inbox</h2>
                        <p class="text-base leading-relaxed text-zinc-600 dark:text-zinc-300">
                            A short email when something new is published. No spam. Unsubscribe anytime.
                        </p>
                    </div>

                    <div class="lg:col-span-5 space-y-3">
                        <a href="https://fabblogs.substack.com/" class="inline-flex w-full items-center justify-center rounded-lg bg-zinc-900 px-4 py-2.5 text-sm font-medium text-white shadow-sm hover:bg-zinc-800 sm:w-auto dark:bg-pink dark:text-black dark:hover:bg-pink-500">
                            Join the newsletter
                        </a>
            
                        <p class="text-xs text-zinc-500 dark:text-zinc-400">
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
                    
                    <a href="{{ route('posts.index') }}" class="hover:text-zinc-900 dark:hover:text-white">Posts</a>
                    <a href="https://fabblogs.substack.com/" class="hover:text-zinc-900 dark:hover:text-white">Newsletter</a>
                </div>
            </div>
        </footer>

        @fluxScripts
    </body>
</html>
