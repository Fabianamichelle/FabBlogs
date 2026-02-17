<x-layouts.app title="Posts">
  <main id="content">
    {{-- Background like home --}}
    <div class="pointer-events-none absolute inset-0 -z-10">
      <div class="absolute -top-28 left-1/2 h-[28rem] w-[44rem] -translate-x-1/2 rounded-full bg-gradient-to-r from-pink-500/25 via-fuchsia-500/20 to-sky-500/20 blur-3xl"></div>
      <div class="absolute -bottom-40 right-1/2 h-[26rem] w-[40rem] translate-x-1/2 rounded-full bg-gradient-to-r from-sky-500/20 via-purple-500/15 to-pink-500/20 blur-3xl"></div>
      <div class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-zinc-300/70 to-transparent"></div>
      <x-placeholder-pattern class="absolute inset-0 size-full stroke-zinc-900/10" />
    </div>

    <section class="mx-auto max-w-6xl px-4 py-10 sm:px-6 sm:py-14">
      {{-- Header --}}
      <div class="flex flex-col gap-6">
        <div class="flex items-start justify-between gap-6">
          <div class="space-y-2">
            <p class="inline-flex items-center gap-2 rounded-full border border-zinc-200 bg-white/70 px-3 py-1 text-xs font-medium text-pink-600 shadow-sm backdrop-blur">
              <span class="size-2 rounded-full bg-pink-500"></span>
              Latest posts
            </p>

            <h1 class="text-balance text-3xl font-semibold tracking-tight text-white sm:text-4xl"
                style="color: var(--text-color-900);">
              Posts
            </h1>

            <p class="max-w-2xl text-pretty text-sm leading-relaxed text-zinc-600 sm:text-base"
               style="color: var(--text-color-700);">
              Here's what I have been writing about recently. 
            </p>
          </div>

          <div class="hidden sm:flex items-center gap-2">
            <a href="{{ route('home') }}"
              class="inline-flex items-center rounded-lg bg-white px-4 py-2.5 text-sm font-medium text-black shadow-md hover:bg-black hover:text-white">
              Back Home
            </a>

            <a href="https://fabblogs.substack.com/"
              class="inline-flex items-center rounded-lg bg-white px-4 py-2.5 text-sm font-medium text-black shadow-md hover:bg-black hover:text-white">
              Subscribe
            </a>
        </div>

        {{-- Filter / search bar (looks modern, unique) --}}
        <div class="rounded-2xl border border-zinc-200 bg-white/80 p-4 shadow-sm backdrop-blur">
          <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <div class="flex flex-wrap items-center gap-2">
            </div>

            <div class="flex items-center gap-2 ">
              <form method="GET" action="{{ route('posts.index') }}" class="flex items-center gap-2">
              <div class="relative w-full sm:w-72">
                <span class="pointer-events-none absolute left-3 top-1/2 -translate-y-1/2 !text-violet-800">⌕</span>
                <input
                  name="search"
                  value="{{ request('search') }}"
                  type="text"
                  placeholder="Search posts..."
                  class="h-10 w-full rounded-lg border border-zinc-200 bg-white pl-9 pr-3 text-sm !text-violet-800 shadow-sm outline-none focus:border-zinc-300 focus:ring-2 focus:ring-pink-500/20"
                />
              </div>

              <button type="submit" class="inline-flex h-10 items-center justify-center rounded-lg bg-white px-3 text-sm font-medium text-zinc-700 border border-zinc-200 shadow-sm hover:bg-orange-500 hover:!text-white">
                Search
              </button>

              <a href="{{ route('posts.index') }}" class="inline-flex h-10 items-center justify-center rounded-lg border border-zinc-200 bg-white px-3 text-sm font-medium text-zinc-700 shadow-sm hover:bg-orange-500 hover:!text-white">
                Reset
              </a>
            </form>
            </div>
          </div>
        </div>
      </div>

      {{-- Body --}}
      <div class="mt-8 grid gap-6 lg:grid-cols-12">
    
        <aside class="lg:col-span-4 lg:order-2">
          <div class="relative overflow-hidden rounded-2xl border border-zinc-200 bg-white shadow-sm">
            <div class="flex items-center justify-between border-b border-zinc-200 px-4 py-3">
              <div class="flex items-center gap-2">
                <span class="size-2 rounded-full bg-red-400"></span>
                <span class="size-2 rounded-full bg-yellow-400"></span>
                <span class="size-2 rounded-full bg-green-400"></span>
              </div>
              <span class="text-xs font-medium text-zinc-500">pinned</span>
            </div>

            <div class="p-4">
              <p class="text-xs font-medium text-zinc-700">Book of The Month</p>
              <p class="mt-1 text-lg font-semibold text-black" style="color: var(--text-color-900);">
                Slow Productivity 
              <img src="{{ asset('images/calnewport.jpg') }}" alt="Cal Newport" class="mt-4 rounded-lg border border-zinc-200">

              </p>
              <p class="mt-2 text-sm text-black">By Cal Newport</p>

              <div class="mt-4 space-y-3">
                <div class="rounded-xl border border-zinc-200 bg-zinc-50 p-4">
                  <p class="text-sm font-semibold text-zinc-700">A Computer Science Professior at Georgetown University</p>
                  <p class="mt-1 text-sm text-black">I recommend you to reach this one if you are an advocate for pushing back against "always busy" work culture. Stop "looking"
                  busy and start producing real results.</p>
                </div>

                <div class="rounded-xl border border-zinc-200 bg-zinc-50 p-4">
                  <p class="text-sm font-semibold text-zinc-700">Measure Outcomes, Not Activity </p>
                  <p class="mt-1 text-sm text-black">If you want to check him out I recommend <a href="https://calnewport.com/my-new-book-slow-productivity/" class="font bold italic !text-indigo-700 hover:underline">you go check his theories out here!</a></p>
                </div>

                <a href="https://fabblogs.substack.com/"
                    class="mt-2 inline-flex w-full items-center justify-center rounded-lg bg-zinc-900 px-4 py-2.5 text-sm font-medium text-white shadow-sm hover:bg-white hover:!text-black hover:shadow-lg hover:ring-2 hover:ring-indigo-500/70">
                    Get updates
                </a>

              </div>
            </div>
          </div>
        </aside>

        {{-- Posts list --}}
        <div class="lg:col-span-8 lg:order-1">
          <div class="space-y-4">
            @forelse ($posts as $post)
              <article class="group rounded-2xl border border-zinc-200 bg-white/85 p-6 shadow-sm backdrop-blur transition hover:shadow-md">
                <div class="flex items-start justify-between gap-4">
                  <div class="min-w-0 space-y-2">
                    <h2 class="text-xl font-semibold !text-violet-800 leading-snug"
                        style="color: var(--text-color-900);">
                      <a href="{{ route('posts.show', $post) }}" class="hover:underline underline-offset-4">
                        {{ $post->title }}
                      </a>
                    </h2>

                    <div class="flex flex-wrap items-center gap-2">
                      <span class="inline-flex items-center rounded-full border border-zinc-200 bg-white px-1 py-0.5 text-xs font-medium text-black">
                        🗓️ {{ optional($post->published_at)?->format('M d, Y') ?? 'Draft' }}
                      </span>

                      @if ($loop->index < 2)
                        <span class="size-2 rounded-full bg-pink-500"></span>
                      @endif
                    </div>


                    <p class="text-sm leading-relaxed text-black" style="color: var(--text-color-700);">
                      @if($post->excerpt)
                        {{ $post->excerpt }}
                      @else
                        {{ Str::limit($post->body, 180) }}
                      @endif
                    </p>
                  </div>

                  <a href="{{ route('posts.show', $post) }}"
                     class="shrink-0 inline-flex items-center gap-2 rounded-lg bg-zinc-900 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-white hover:!text-black">
                    Read More
                    <span class="transition group-hover:translate-x-0.5">→</span>
                  </a>
                </div>
              </article>
            @empty
              <div class="rounded-2xl border border-zinc-200 bg-white p-10 text-center shadow-sm">
                <p class="text-sm font-medium text-black">No posts yet.</p>
                <p class="mt-1 text-sm text-black">There is something that is supposed to be here.... this is weird.</p>
              </div>
            @endforelse
          </div>

          {{-- Pagination --}}
          <div class="mt-8 rounded-2xl border border-zinc-200 bg-white/70 p-4 shadow-sm backdrop-blur">
            <div class="[&_.pagination]:flex [&_.pagination]:flex-wrap [&_.pagination]:gap-2
                        [&_.pagination>li>a]:rounded-lg [&_.pagination>li>a]:px-3 [&_.pagination>li>a]:py-2
                        [&_.pagination>li>a]:border [&_.pagination>li>a]:border-zinc-200 [&_.pagination>li>a]:bg-white
                        [&_.pagination>li>a]:text-sm [&_.pagination>li>a]:font-medium [&_.pagination>li>a]:text-zinc-700
                        [&_.pagination>li>a:hover]:bg-zinc-50
                        [&_.pagination>li>span]:rounded-lg [&_.pagination>li>span]:px-3 [&_.pagination>li>span]:py-2
                        [&_.pagination>li>span]:border [&_.pagination>li>span]:border-zinc-200
                        [&_.pagination>li>span]:bg-zinc-100 [&_.pagination>li>span]:text-sm [&_.pagination>li>span]:font-semibold [&_.pagination>li>span]:text-zinc-900">
              {{ $posts->links() }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</x-layouts.app>

