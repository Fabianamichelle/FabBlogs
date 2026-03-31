<x-layouts.app title="Projects">

  <style>
    @keyframes marquee {
      from { transform: translateX(0); }
      to   { transform: translateX(-50%); }
    }
    .marquee-track { animation: marquee 22s linear infinite; }
    .marquee-track:hover { animation-play-state: paused; }
    [data-track]::-webkit-scrollbar { display: none; }
  </style>

  <div class="max-w-6xl mx-auto px-6 py-10 space-y-10">

    {{-- Hero --}}
    <div class="relative overflow-hidden rounded-3xl bg-zinc-900 px-8 py-10">
      {{-- dot grid texture --}}
      <svg class="absolute inset-0 h-full w-full pointer-events-none" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <pattern id="dots" x="0" y="0" width="22" height="22" patternUnits="userSpaceOnUse">
            <circle cx="2" cy="2" r="1.2" fill="rgba(255,255,255,0.10)"/>
          </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#dots)"/>
      </svg>
      {{-- diagonal slash accent --}}
      <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div class="absolute -right-10 top-0 h-full w-64 -skew-x-12 bg-white/[0.03]"></div>
        <div class="absolute -right-24 top-0 h-full w-32 -skew-x-12 bg-white/[0.03]"></div>
      </div>
      <div class="relative">
        <span class="inline-block rounded-full bg-pink-500/20 px-3 py-1 text-xs font-semibold text-pink-400 tracking-wide">Projects</span>
        <h1 class="mt-3 text-4xl font-bold text-white">Stuff I'm building</h1>
        <p class="mt-3 max-w-xl text-zinc-400">A mix of school, software, and fun experiments. Swipe to explore.</p>
        <div class="mt-6 flex flex-wrap gap-3">
          <a href="https://github.com/Fabianamichelle"
             class="inline-flex items-center gap-2 rounded-lg bg-white/10 px-4 py-2.5 text-sm font-semibold text-white hover:bg-white/20 transition">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
            GitHub
          </a>
          <a href="https://www.linkedin.com/in/mrsmendoza/"
             class="inline-flex items-center gap-2 rounded-lg border border-white/20 px-4 py-2.5 text-sm font-semibold text-white hover:bg-white/10 transition">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
            LinkedIn
          </a>
        </div>
      </div>
    </div>

    {{-- Featured Carousel --}}
    <div
      x-data="{
        current: 0, total: 3,
        goTo(i) {
          this.current = i;
          this.$refs.track.children[i].scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
        },
        onScroll() {
          const t = this.$refs.track, c = t.scrollLeft + t.offsetWidth / 2;
          let best = 0, min = Infinity;
          Array.from(t.children).forEach((el, i) => {
            const d = Math.abs((el.offsetLeft + el.offsetWidth / 2) - c);
            if (d < min) { min = d; best = i; }
          });
          this.current = best;
        }
      }"
    >
      <div class="flex items-center justify-between mb-4">
        <h2 class="text-xs font-semibold uppercase tracking-widest text-zinc-500">Featured</h2>
        <div class="flex gap-1.5">
          <button @click="goTo(Math.max(0, current - 1))" :disabled="current === 0"
            class="h-8 w-8 rounded-full border border-zinc-200 bg-white flex items-center justify-center text-zinc-500 hover:bg-zinc-50 disabled:opacity-30 transition">
            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
          </button>
          <button @click="goTo(Math.min(total - 1, current + 1))" :disabled="current === total - 1"
            class="h-8 w-8 rounded-full border border-zinc-200 bg-white flex items-center justify-center text-zinc-500 hover:bg-zinc-50 disabled:opacity-30 transition">
            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
          </button>
        </div>
      </div>

      <div class="-mx-6 overflow-hidden">
        <div x-ref="track" data-track @scroll.passive="onScroll()"
          class="flex gap-5 overflow-x-auto px-6 pb-8"
          style="scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch; scrollbar-width: none;">

          {{-- FabBlogs --}}
          <a href="{{ route('home') }}"
             class="group relative flex-shrink-0 w-[85vw] max-w-xl overflow-hidden rounded-3xl bg-gradient-to-br from-pink-600 to-rose-700 p-8 text-white shadow-2xl
                    -rotate-1 hover:rotate-0 transition-transform duration-300 ease-out"
             style="scroll-snap-align: center;">
            {{-- decorative number --}}
            <span class="pointer-events-none absolute -bottom-4 -right-2 text-[9rem] font-black leading-none text-white/10 select-none">01</span>
            {{-- diagonal stripe --}}
            <div class="absolute inset-0 overflow-hidden rounded-3xl pointer-events-none">
              <div class="absolute -right-8 top-0 h-full w-40 -skew-x-12 bg-white/[0.06]"></div>
            </div>
            <div class="relative">
              <span class="inline-block rounded-full border border-white/30 px-3 py-1 text-xs font-semibold">Live</span>
              <h3 class="mt-4 text-3xl font-bold">FabBlogs</h3>
              <p class="mt-2 text-white/75 leading-relaxed text-sm">
                Personal blog built in Laravel. You're reading it right now.
              </p>
              <div class="mt-5 flex flex-wrap gap-2">
                @foreach (['Laravel', 'Blade', 'SQLite', 'Tailwind'] as $t)
                  <span class="rounded-full bg-white/15 px-3 py-1 text-xs font-medium">{{ $t }}</span>
                @endforeach
              </div>
              <div class="mt-5 text-sm font-semibold text-white/70 group-hover:text-white transition">View project →</div>
            </div>
          </a>

          {{-- Chirper --}}
          <a href="https://chirper-main-idz6jw.laravel.cloud/"
             class="group relative flex-shrink-0 w-[85vw] max-w-xl overflow-hidden rounded-3xl border-2 border-zinc-900 bg-white p-8 shadow-2xl
                    rotate-1 hover:rotate-0 transition-transform duration-300 ease-out"
             style="scroll-snap-align: center;">
            <span class="pointer-events-none absolute -bottom-4 -right-2 text-[9rem] font-black leading-none text-zinc-100 select-none">02</span>
            <div class="relative">
              <span class="inline-block rounded-full bg-blue-100 border border-blue-200 px-3 py-1 text-xs font-semibold text-blue-700">Live</span>
              <h3 class="mt-4 text-3xl font-bold text-zinc-900">Chirper</h3>
              <p class="mt-2 text-zinc-500 leading-relaxed text-sm">
                Microblogging platform à la Twitter — built with the official Laravel tutorial.
              </p>
              <div class="mt-5 flex flex-wrap gap-2">
                @foreach (['Laravel', 'Eloquent', 'Tailwind', 'Jetstream'] as $t)
                  <span class="rounded-full bg-zinc-100 px-3 py-1 text-xs font-medium text-zinc-600">{{ $t }}</span>
                @endforeach
              </div>
              <div class="mt-5 text-sm font-semibold text-zinc-400 group-hover:text-zinc-900 transition">Try it out →</div>
            </div>
          </a>

          {{-- Alcove --}}
          <a href="https://alcovebookshelf.laravel.cloud/login"
             class="group relative flex-shrink-0 w-[85vw] max-w-xl overflow-hidden rounded-3xl border-2 border-zinc-900 bg-white p-8 shadow-2xl
                    -rotate-1 hover:rotate-0 transition-transform duration-300 ease-out"
             style="scroll-snap-align: center;">
            <span class="pointer-events-none absolute -bottom-4 -right-2 text-[9rem] font-black leading-none text-zinc-100 select-none">03</span>
            <div class="relative">
              <span class="inline-block rounded-full bg-emerald-100 border border-emerald-200 px-3 py-1 text-xs font-semibold text-emerald-700">Live</span>
              <h3 class="mt-4 text-3xl font-bold text-zinc-900">Alcove</h3>
              <p class="mt-2 text-zinc-500 leading-relaxed text-sm">
                Your virtual cozy book nook — log your books and track your reading journey.
              </p>
              <div class="mt-5 flex flex-wrap gap-2">
                @foreach (['Laravel', 'Eloquent', 'Tailwind', 'Jetstream'] as $t)
                  <span class="rounded-full bg-zinc-100 px-3 py-1 text-xs font-medium text-zinc-600">{{ $t }}</span>
                @endforeach
              </div>
              <div class="mt-5 text-sm font-semibold text-zinc-400 group-hover:text-zinc-900 transition">Try it out →</div>
            </div>
          </a>

        </div>
      </div>

      <div class="flex justify-center gap-2 -mt-3">
        <template x-for="i in total" :key="i">
          <button @click="goTo(i - 1)"
            :class="current === i - 1 ? 'w-6 bg-pink-500' : 'w-2 bg-zinc-300 hover:bg-zinc-400'"
            class="h-2 rounded-full transition-all duration-300"></button>
        </template>
      </div>
    </div>

    {{-- Marquee ticker --}}
    <div class="overflow-hidden rounded-2xl bg-zinc-900 py-3.5 select-none">
      <div class="marquee-track flex gap-10 whitespace-nowrap">
        @php
          $items = ['Laravel', 'PHP', 'Next.js', 'React', 'Tailwind', 'SQLite', 'MySQL', 'Python', 'Git', 'HTML', 'CSS', 'JavaScript', 'Livewire', 'Alpine.js', 'R'];
          $repeated = array_merge($items, $items); // duplicate for seamless loop
        @endphp
        @foreach ($repeated as $item)
          <span class="text-sm font-semibold text-white/60 hover:text-white transition">{{ $item }}</span>
          <span class="text-pink-500">✦</span>
        @endforeach
      </div>
    </div>

    {{-- More Projects Carousel --}}
    <div
      x-data="{
        current: 0, total: 5,
        goTo(i) {
          this.current = i;
          this.$refs.track2.children[i].scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
        },
        onScroll() {
          const t = this.$refs.track2, c = t.scrollLeft + t.offsetWidth / 2;
          let best = 0, min = Infinity;
          Array.from(t.children).forEach((el, i) => {
            const d = Math.abs((el.offsetLeft + el.offsetWidth / 2) - c);
            if (d < min) { min = d; best = i; }
          });
          this.current = best;
        }
      }"
    >
      <div class="flex items-center justify-between mb-4">
        <h2 class="text-xs font-semibold uppercase tracking-widest text-zinc-500">More on GitHub</h2>
        <div class="flex gap-1.5">
          <button @click="goTo(Math.max(0, current - 1))" :disabled="current === 0"
            class="h-8 w-8 rounded-full border border-zinc-200 bg-white flex items-center justify-center text-zinc-500 hover:bg-zinc-50 disabled:opacity-30 transition">
            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
          </button>
          <button @click="goTo(Math.min(total - 1, current + 1))" :disabled="current === total - 1"
            class="h-8 w-8 rounded-full border border-zinc-200 bg-white flex items-center justify-center text-zinc-500 hover:bg-zinc-50 disabled:opacity-30 transition">
            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
          </button>
        </div>
      </div>

      <div class="-mx-6 overflow-hidden">
        <div x-ref="track2" data-track @scroll.passive="onScroll()"
          class="flex gap-5 overflow-x-auto px-6 pb-8"
          style="scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch; scrollbar-width: none;">

          @php
            $more = [
              ['title' => 'Proposal Generator', 'desc' => 'Internal freelance system to keep track of proposals.',      'tags' => ['Laravel', 'PHP', 'Tailwind'],        'border' => 'border-l-violet-500', 'num' => '04'],
              ['title' => 'Loom Clone',          'desc' => 'Personal screen recorder app.',                             'tags' => ['Next.js', 'Mux', 'Tailwind'],        'border' => 'border-l-sky-500',    'num' => '05'],
              ['title' => 'Habit Tracker',       'desc' => 'Simple habits + streaks tracker.',                         'tags' => ['Laravel', 'Livewire', 'Alpine.js'],  'border' => 'border-l-emerald-500','num' => '06'],
              ['title' => 'Tutor-Tama',          'desc' => 'A kawaii study buddy that summarizes your documents.',     'tags' => ['HTML', 'Javascript'],                'border' => 'border-l-pink-500',   'num' => '07'],
              ['title' => 'CLI Weather App',     'desc' => 'Displays current weather for any city in your terminal.',  'tags' => ['PHP'],                               'border' => 'border-l-amber-500',  'num' => '08'],
            ];
            $tilts = ['-rotate-1', 'rotate-1', '-rotate-1', 'rotate-1', '-rotate-1'];
          @endphp

          @foreach ($more as $i => $p)
            <div class="relative flex-shrink-0 w-[72vw] max-w-sm overflow-hidden rounded-2xl border-2 border-zinc-900 border-l-4 {{ $p['border'] }} bg-white p-6 shadow-2xl
                        {{ $tilts[$i] }} hover:rotate-0 transition-transform duration-300 ease-out"
                 style="scroll-snap-align: center;">
              <span class="pointer-events-none absolute -bottom-3 -right-1 text-7xl font-black leading-none text-zinc-100 select-none">{{ $p['num'] }}</span>
              <div class="relative">
                <h3 class="text-base font-bold text-zinc-900">{{ $p['title'] }}</h3>
                <p class="mt-1.5 text-sm text-zinc-500 leading-relaxed">{{ $p['desc'] }}</p>
                <div class="mt-4 flex flex-wrap gap-2">
                  @foreach($p['tags'] as $t)
                    <span class="rounded-full bg-zinc-100 px-2.5 py-0.5 text-xs font-medium text-zinc-600">{{ $t }}</span>
                  @endforeach
                </div>
              </div>
            </div>
          @endforeach

        </div>
      </div>

      <div class="flex justify-center gap-2 -mt-3">
        <template x-for="i in total" :key="i">
          <button @click="goTo(i - 1)"
            :class="current === i - 1 ? 'w-6 bg-zinc-800' : 'w-2 bg-zinc-300 hover:bg-zinc-400'"
            class="h-2 rounded-full transition-all duration-300"></button>
        </template>
      </div>
    </div>

    {{-- Stack --}}
    <div class="rounded-3xl border-2 border-zinc-900 bg-white p-7 shadow-sm">
      <h2 class="text-sm font-semibold text-zinc-900 mb-4">My Stack</h2>
      <div class="flex flex-wrap gap-2">
        @foreach ([
          'Laravel', 'PHP', 'Next.js', 'React', 'Tailwind', 'SQLite', 'MySQL',
          'Python', 'Git', 'HTML', 'CSS', 'JavaScript', 'R', 'Livewire', 'Alpine.js'
        ] as $s)
          <span class="rounded-full bg-zinc-100 px-3 py-1 text-sm font-medium text-zinc-700 hover:bg-zinc-900 hover:text-white transition cursor-default">{{ $s }}</span>
        @endforeach
      </div>
    </div>

    {{-- CTA --}}
    <div class="rounded-3xl border-2 border-zinc-900 bg-white p-7 shadow-sm flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
      <div>
        <h3 class="text-xl font-semibold text-zinc-900">Want to collaborate?</h3>
        <p class="mt-1 text-sm text-zinc-500">Open to collaborations and small freelance projects.</p>
      </div>
      <div class="flex gap-3 flex-shrink-0">
        <a href="mailto:fabianamichellee@gmail.com"
           class="inline-flex items-center rounded-lg bg-zinc-900 px-4 py-2.5 text-sm font-semibold text-white hover:bg-zinc-700 transition">
          Email me
        </a>
        <a href="https://www.linkedin.com/in/mrsmendoza/"
           class="inline-flex items-center rounded-lg border-2 border-zinc-900 px-4 py-2.5 text-sm font-semibold text-zinc-800 hover:bg-zinc-50 transition">
          LinkedIn
        </a>
      </div>
    </div>

  </div>
</x-layouts.app>
