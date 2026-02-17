<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head', ['title' => 'About Fabiana'])
    <meta name="description" content="Learn more about Fabiana — the engineer behind Fabblogs." />
</head>
<script>
(function(){
  function applyColor(c){
    if(!c) return;
    const vars = {
      '--text-color-900': `var(--color-${c}-900)`,
      '--text-color-700': `var(--color-${c}-700)`,
      '--text-color-300': `var(--color-${c}-300)`,
      '--text-color-100': `var(--color-${c}-100)`
    };
    Object.entries(vars).forEach(([k,v])=>{
      document.documentElement.style.setProperty(k,v);
      document.body.style.setProperty(k,v);
    });
  }

  window.addEventListener('text-color-changed', e => {
    applyColor(e.detail?.color || localStorage.getItem('textColor'));
  });

  document.addEventListener('DOMContentLoaded', () => {
    const c = localStorage.getItem('textColor') || '{{ auth()->user()->text_color ?? "zinc" }}';
    applyColor(c);
  });
})();
</script>
<body class="min-h-screen bg-white antialiased text-zinc-900 dark:text-zinc-100">
    <div class="relative isolate overflow-hidden">
        <div class="pointer-events-none absolute inset-0 -z-10">
            <div class="absolute -top-28 left-1/2 h-[26rem] w-[40rem] -translate-x-1/2 rounded-full bg-gradient-to-r from-pink-500/25 via-fuchsia-400/20 to-sky-400/20 blur-3xl"></div>
            <div class="absolute inset-x-10 bottom-6 h-[18rem] rounded-[3rem] bg-gradient-to-r from-fuchsia-500/10 via-pink-400/10 to-emerald-300/10 blur-3xl"></div>
        </div>

        <header class="sticky top-0 z-40 border-b border-zinc-200/60 bg-white/80 backdrop-blur dark:border-zinc-800 dark:bg-zinc-950/70">
            <div class="mx-auto flex max-w-5xl items-center justify-between gap-3 px-4 py-4 sm:px-6">
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    <span class="grid size-10 place-items-center">
                        <x-app-logo-icon class="size-6 fill-current text-white" />
                    </span>
                </a>
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2 rounded-full bg-zinc-900 px-3 py-2 text-xs font-semibold shadow-sm ring-1 ring-black/5 hover:bg-zinc-800 dark:bg-white dark:text-zinc-900 dark:hover:bg-zinc-200">
                    ← Back home
                </a>
            </div>
        </header>

        <main class="mx-auto flex max-w-5xl flex-col gap-10 px-4 pb-16 pt-12 sm:px-6 sm:pb-20 sm:pt-16">
            <section class="grid gap-8 lg:grid-cols-5 lg:items-center lg:gap-10">
                <div class="lg:col-span-3 space-y-4">
                    <div class="display:inline-block gap-4 lg:flex lg:items-center">
                    <section>
                        <img src="{{ asset('images/fabby.jpg') }}" alt="fab at coffee shop" class="h-100 w-100 rounded-xl shadow-lg">
                    </section>
                    <p class="text-4xl font-semibold tracking-tight text-zinc-900 dark:text-white sm:text-5xl">
                       Hi I’m Fabiana!
                    </p>
                    </div>
                    <h1 class="text-xl font-medium text-zinc-800 dark:text-white">
                        Junior Software Engineer 
                    </h1>
                    <p class="text-base leading-relaxed text-zinc-600 dark:text-zinc-300">
                        
                    </p>
                    <div>
                       <h3>
                         Welcome to my site! I have been dreaming about having a place to track my learning and I thought why not share it with you!
                         Hopefully you will find something useful here. I have a history of being an Business Development Representative, Account Exective, or Account Manager for Remote
                         SaaS companies. While there, I had the privilege to work with Solutions Engineers and Developers across all skill levels,
                         and I decided to give it a chance. So, I double majored in Bachelors in Business Administration and Applied Computer Science with an Emphasis of Software Development.
                         As I happened to fall in love with code, I needed a place where I could track my learning but visiablly so other can see too. So, this is how this site
                         was born! Now, I get to learn in real time and share it with you! 
                        <br/><br/>
                         I love AI but my posts are 100% written by me with no AI assistance. On my spare time, I love reading books! I own a dog named Prince who is the sassest and sweetest bulldog you will ever meet,
                         a handsome husband, and little ones I adore! I have lived in 4 different countries and I love to travel and explore new cultures, workout, and ... have I meantioned reading haha!
                        <br/><br/>
                        You can expect posts about my learning journey in software engineering, tips and tricks I pick up along the way, and maybe some personal stories too. I will never
                        make you pay for anything on this site, everything is free and always will be. If you want to support me, consider subscribing to my newsletter where I share exclusive content and updates.
                        Or you can always reach out to me via email if you have any questions or just want to say hi!
                        <br/><br/>
                        <br/><br/>
                        Enjoy your stay and happy reading!
                       </h3>

                        
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <a href="mailto:{{ config('mail.from.address') ?? env('CONTACT_EMAIL', 'hello@example.com') }}"
                            class="inline-flex items-center gap-2 rounded-lg bg-zinc-900 px-4 py-2.5 text-sm font-semibold text-black shadow-sm hover:bg-zinc-800 dark:bg-white dark:text-zinc-900 dark:hover:bg-zinc-200">
                            💌 Say hello
                        </a>

                    </div>
                    <h1 class="text-lg">Oh You can also keep up with other projects and updates here! 👀➡️🔔</h1>
                     <div class="mt-6">
                        <h2 class="inline-flex items-center gap-2 rounded-lg text-black bg-white px-4 py-2.5 text-sm font-semibold shadow-sm hover:bg-fuchsia-500">
                        <a href="https://www.linkedin.com/in/mrsmendoza/" class="hover:underline">Follow Me on Linkedin</a>
                    </div>
                    <div class="mt-6">
                        <h2 class="inline-flex items-center gap-2 rounded-lg text-black bg-white px-4 py-2.5 text-sm font-semibold shadow-sm hover:bg-fuchsia-500">
                        <a href="https://github.com/Fabianamichelle" class="hover:underline">Follow Me on Github</a>
                    </div>
                </div>
                <div class="lg:col-span-2">
                    <div class="relative overflow-hidden rounded-3xl border border-zinc-200 bg-white/90 p-6 shadow-xl backdrop-blur dark:border-zinc-800">
                        <div class="absolute -right-8 -top-8 size-28 rounded-full bg-gradient-to-br from-pink-400/60 via-fuchsia-400/40 to-amber-300/40 blur-3xl"></div>
                        <div class="relative space-y-4">
                            <div class="flex items-center gap-3">
                                <div>
                                    <p class="text-lg uppercase tracking-[0.2em] text-zinc-800 dark:text-white">Why Subscribe?</p>
                                    <p class="text-m font-semibold text-zinc-900 dark:text-zinc-400">Because I believe in learning through others and <em class="text-zinc-900 dark:text-white">you should too </em> </p>
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
                                <a href="https://fabblogs.substack.com/" class="inline-flex items-center gap-2 rounded-lg  text-white bg-pink-400 px-4 py-2.5 text-sm font-semibold shadow-sm hover:bg-violet-300">
                                    📰 Subscribe to updates
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="border-t border-zinc-200 pt-6 dark:border-zinc-800">
                    <p class="text-sm text-zinc-500 dark:text-zinc-400">
                        © {{ date('Y') }} Fabiana Mendoza. All rights reserved.
                    </p>
                </div>
            </section>  
        </main>
    </div>

    @fluxScripts
</body>
</html>
