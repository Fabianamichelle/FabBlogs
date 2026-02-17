<x-layouts.app title="Projects">
  <div class="max-w-6xl mx-auto px-6 py-10">
    <div class="rounded-3xl border border-zinc-200 bg-white p-8 shadow-sm">
      <p class="text-sm font-semibold text-pink-600">Projects</p>
      <h1 class="mt-2 text-4xl font-bold text-zinc-900">Stuff I’m building</h1>
      <p class="mt-3 max-w-2xl text-zinc-600">
        A mix of school, software, and fun experiments. Click a project to see details.
      </p>

      <div class="mt-6 flex flex-wrap gap-3">
        <a href="https://github.com/Fabianamichelle" class="inline-flex items-center rounded-lg bg-zinc-900 px-4 py-2.5 text-sm font-semibold text-white hover:bg-zinc-800">
          GitHub
        </a>
        <a href="https://www.linkedin.com/in/mrsmendoza/" class="inline-flex items-center rounded-lg border border-zinc-200 bg-white px-4 py-2.5 text-sm font-semibold text-zinc-800 hover:bg-zinc-50">
          LinkedIn
        </a>
      </div>
    </div>

    {{-- Featured --}}
    <div class="mt-10 grid gap-6 lg:grid-cols-2">
      <a  href="{{ route('home') }}" class="group rounded-3xl border border-zinc-200 bg-zinc-900 p-7 text-white shadow-sm transition hover:shadow-md">
        <div class="flex items-start justify-between gap-4">
          <div>
            <h2 class="text-2xl font-semibold">FabBlogs</h2>
            <p class="mt-2 text-white/80">
              Personal blog built in Laravel.
            </p>
          </div>
          <span class="rounded-full bg-white/10 px-3 py-1 text-xs font-semibold">Featured</span>
        </div>
        <div class="mt-6 flex flex-wrap gap-2">
          <span class="rounded-full bg-white/10 px-3 py-1 text-xs">Laravel</span>
          <span class="rounded-full bg-white/10 px-3 py-1 text-xs">Blade</span>
          <span class="rounded-full bg-white/10 px-3 py-1 text-xs">SQLite</span>
        </div>
        <div class="mt-6 text-sm font-semibold text-white/90 group-hover:text-white">View project →</div>
      </a>

      <a href="https://chirper-main-idz6jw.laravel.cloud/" class="group rounded-3xl border border-zinc-200 bg-white p-7 shadow-sm transition hover:shadow-md">
        <div class="flex items-start justify-between gap-4">
          <div>
            <h2 class="text-2xl font-semibold text-zinc-900">Chirper</h2>
            <p class="mt-2 text-zinc-600">
              follows the "Laravel Learn: Chirper" tutorial to build a simple microblogging platform similar to Twitter.
            </p>
          </div>
          <span class="rounded-full border border-zinc-200 bg-white px-3 py-1 text-xs font-semibold text-zinc-700">
           Featured 
          </span>
        </div>
        <div class="mt-6 flex flex-wrap gap-2">
          <span class="rounded-full border border-zinc-200 px-3 py-1 text-xs text-zinc-700">Laravel</span>
          <span class="rounded-full border border-zinc-200 px-3 py-1 text-xs text-zinc-700">Eloquent</span>
          <span class="rounded-full border border-zinc-200 px-3 py-1 text-xs text-zinc-700">Tailwind</span>
          <span class="rounded-full border border-zinc-200 px-3 py-1 text-xs text-zinc-700">Jetstream</span>
        </div>
        <div class="mt-6 text-sm font-semibold text-zinc-800 group-hover:text-zinc-900">Try it out yourself →</div>
      </a>
    </div>

    {{-- More projects --}}
    <div class="mt-10">
      <h3 class="text-xl font-semibold text-zinc-900">More projects</h3>
      <div class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ([
          ['title'=>'Habit Tracker', 'desc'=>'Simple habits + streaks.', 'tags'=>['Laravel','Livewire', 'Tailwind', 'Alpine.js'], 'img'=>'Habit_Tracker.png'],
          ['title'=>'Tutor-Tama', 'desc'=>'A Kawaii themed study buddy that will summarize your documents :)', 'tags'=>['HTML','Javascript']],
          ['title'=>'CLI Weather App ', 'desc'=>'A lightweight CLI tool that displays the current weather for any city, directly in your terminal.', 'tags'=>['PhP']],
        ] as $p)

          <div class="rounded-2xl border border-zinc-200 bg-white p-5 shadow-sm hover:shadow-md transition">
            <div class="text-lg font-semibold text-zinc-900">{{ $p['title'] }}</div>
            <div class="mt-2 text-sm text-zinc-600">{{ $p['desc'] }}</div>
            <div class="mt-4 flex flex-wrap gap-2">
              @foreach($p['tags'] as $t)
                <span class="rounded-full border border-zinc-200 bg-white px-3 py-1 text-xs font-medium text-zinc-700">{{ $t }}</span>
              @endforeach
            </div>
          </div>
        @endforeach
      </div>
    </div>

    {{-- Skills --}}
    <div class="mt-10 rounded-3xl border border-zinc-200 bg-white p-7 shadow-sm">
      <h3 class="text-xl font-semibold text-zinc-900">Stack</h3>
      <div class="mt-4 flex flex-wrap gap-2">
        @foreach (['Laravel','PHP','Blade','Tailwind','SQLite','MySQL','Python','Git','Laravel','HTML','CSS', 'Javascript', 'R'] as $s)
          <span class="rounded-full bg-zinc-100 px-3 py-1 text-sm font-medium text-zinc-800">{{ $s }}</span>
        @endforeach
      </div>
    </div>

    {{-- CTA --}}
    <div class="mt-10 rounded-3xl border border-zinc-200 bg-white p-7 shadow-sm flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
      <div>
        <h3 class="text-xl font-semibold text-zinc-900">Want to collaborate?</h3>
        <p class="mt-1 text-sm text-zinc-600">Open to internships and small freelance projects.</p>
      </div>
      <div class="flex gap-3">
        <a href="mailto:fabianamichellee@gmail.com" class="inline-flex items-center rounded-lg bg-zinc-900 px-4 py-2.5 text-sm font-semibold text-white hover:bg-zinc-800">
          Email me
        </a>

</x-layouts.app>
