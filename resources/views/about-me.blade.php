<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head', ['title' => 'About — Fabiana'])
    <meta name="description" content="Fabiana Mendoza — Junior Software Engineer, SaaS background, builder of things." />
    <style>
        *, *::before, *::after { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { background: #050507; color: #fff; overflow-x: hidden; font-family: 'Instrument Sans', sans-serif; }

        /* ── Orbs ── */
        @keyframes orbFloat {
            0%,100% { transform: translate(0,0) scale(1); }
            33%      { transform: translate(25px,-35px) scale(1.04); }
            66%      { transform: translate(-18px,18px) scale(0.97); }
        }
        .orb {
            position: fixed; border-radius: 50%;
            filter: blur(55px); pointer-events: none;
            animation: orbFloat 14s ease-in-out infinite;
        }
        .orb-1 { width:480px;height:480px;bottom:8%;right:4%;
            background: radial-gradient(circle,rgba(236,72,153,.13) 0%,rgba(236,72,153,.03) 60%,transparent 80%); }
        .orb-2 { width:300px;height:300px;top:20%;left:8%;animation-delay:-5s;
            background: radial-gradient(circle,rgba(244,114,182,.08) 0%,transparent 70%); }

        /* ── Scroll reveal ── */
        .reveal { opacity:0; transform:translateY(36px); transition: opacity .75s ease, transform .75s ease; }
        .reveal.left  { transform:translateX(-40px); }
        .reveal.right { transform:translateX(40px); }
        .reveal.visible { opacity:1; transform:translate(0,0); }

        /* ── Ghost heading ── */
        .ghost {
            font-size: clamp(3.5rem,11vw,8rem);
            font-weight:900; letter-spacing:.06em; text-transform:uppercase;
            background:linear-gradient(180deg,rgba(255,255,255,.06) 0%,rgba(255,255,255,.015) 100%);
            -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;
            line-height:1; user-select:none;
        }

        /* ── Spinning badge ── */
        @keyframes spinSlow { to { transform: rotate(360deg); } }
        .spin-badge { animation: spinSlow 14s linear infinite; }

        /* ── Horizontal rule draw ── */
        @keyframes drawLine { from{width:0} to{width:100%} }
        .draw-line { height:1px; background:rgba(255,255,255,.08); width:0; }
        .draw-line.visible { animation: drawLine .9s ease forwards; }

        /* ── Nav ── */
        .nav-link {
            color:rgba(255,255,255,.42); font-size:13px; font-weight:500;
            letter-spacing:.08em; text-transform:uppercase; transition:color .2s; text-decoration:none;
        }
        .nav-link:hover { color:#fff; }
        .nav-link.active { color:#ec4899; }

        /* ── Social sidebar ── */
        .social-link { color:rgba(255,255,255,.26); transition:color .2s; display:flex; align-items:center; }
        .social-link:hover { color:#ec4899; }

        /* ── Role accordion ── */
        .role-box {
            border:1px solid rgba(255,255,255,.08);
            border-radius:0;
            padding:28px 32px;
            cursor:pointer;
            transition:border-color .3s, background .3s;
        }
        .role-box:hover, .role-box.open {
            border-color:rgba(236,72,153,.35);
            background:rgba(236,72,153,.04);
        }
        .role-title {
            font-size:clamp(1.4rem,3.5vw,2.2rem);
            font-weight:800; letter-spacing:.04em; text-transform:uppercase;
        }
        .role-subtitle { color:rgba(255,255,255,.38); font-size:.85rem; margin-top:4px; }
        .role-body { overflow:hidden; transition:max-height .4s ease, opacity .4s ease; }
        .role-body.closed { max-height:0; opacity:0; }
        .role-body.open   { max-height:300px; opacity:1; }
        .role-chevron { transition:transform .35s ease; }
        .role-chevron.open { transform:rotate(180deg); }

        /* ── Timeline ── */
        .timeline-line {
            position:absolute; left:50%; top:0; bottom:0;
            width:1px; background:linear-gradient(to bottom,transparent,rgba(236,72,153,.4),transparent);
            transform:translateX(-50%);
        }
        .timeline-dot {
            width:10px; height:10px; border-radius:50%;
            background:#ec4899; box-shadow:0 0 12px rgba(236,72,153,.5);
            flex-shrink:0;
        }

        /* ── Stats counter ── */
        @keyframes countUp { from{opacity:0;transform:translateY(8px)} to{opacity:1;transform:none} }
        .stat-num { animation: countUp .6s ease both; }

        /* ── Ticker ── */
        @keyframes ticker { 0%{transform:translateX(0)} 100%{transform:translateX(-50%)} }
        .animate-ticker { animation:ticker 24s linear infinite; }

        /* ── Photo frame ── */
        .photo-frame {
            position:relative; border-radius:24px; overflow:hidden;
            border:1px solid rgba(236,72,153,.2);
            box-shadow:0 0 60px rgba(236,72,153,.08), 0 0 120px rgba(236,72,153,.04);
        }
        .photo-frame::after {
            content:''; position:absolute; inset:0;
            background:linear-gradient(to top,rgba(5,5,7,.7) 0%,transparent 50%);
        }

        /* ── Pink pill ── */
        .pink-pill {
            display:inline-flex; align-items:center; gap:6px;
            border:1px solid rgba(236,72,153,.4); border-radius:100px;
            padding:5px 14px; font-size:11px; font-weight:600;
            letter-spacing:.06em; text-transform:uppercase; color:#ec4899;
            background:rgba(236,72,153,.07);
        }
        .ping { animation:ping 1.4s cubic-bezier(0,0,.2,1) infinite; }
        @keyframes ping {
            75%,100%{transform:scale(2);opacity:0}
        }
    </style>
</head>
<body class="min-h-screen antialiased">

    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>

    {{-- Fixed left social sidebar --}}
    <div class="fixed left-5 top-1/2 -translate-y-1/2 z-40 flex-col gap-7 hidden lg:flex">
        <a href="https://github.com/Fabianamichelle" target="_blank" class="social-link" title="GitHub">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0 1 12 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
            </svg>
        </a>
        <a href="https://www.linkedin.com/in/mrsmendoza/" target="_blank" class="social-link" title="LinkedIn">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
            </svg>
        </a>
        <a href="https://www.upwork.com/freelancers/~018cdafd413e07ceb5?mp_source=share" target="_blank" class="social-link" title="Upwork">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                <path d="M18.561 13.158c-1.102 0-2.135-.467-3.074-1.227l.228-1.076.008-.042c.207-1.143.849-3.06 2.839-3.06 1.492 0 2.703 1.212 2.703 2.703-.001 1.489-1.212 2.702-2.704 2.702zm0-8.14c-2.539 0-4.51 1.649-5.31 4.366-1.22-1.834-2.148-4.036-2.687-5.892H7.828v7.112c-.002 1.406-1.141 2.546-2.547 2.546-1.405 0-2.543-1.14-2.543-2.546V3.492H0v7.112c0 2.914 2.37 5.303 5.281 5.303 2.913 0 5.283-2.389 5.283-5.303v-1.19c.529 1.107 1.182 2.229 1.974 3.221l-1.673 7.873h2.797l1.213-5.71c1.063.679 2.285 1.109 3.686 1.109 3 0 5.439-2.452 5.439-5.45 0-3-2.439-5.439-5.439-5.439z"/>
            </svg>
        </a>
    </div>

    {{-- Fixed bottom-right --}}
    <div class="fixed bottom-6 right-6 z-40 hidden lg:flex">
        <a href="https://www.linkedin.com/in/mrsmendoza/" target="_blank"
           style="color:rgba(255,255,255,.26);font-size:11px;letter-spacing:.14em;text-transform:uppercase;font-weight:600;display:flex;align-items:center;gap:6px;transition:color .2s;"
           onmouseenter="this.style.color='rgba(236,72,153,.8)'"
           onmouseleave="this.style.color='rgba(255,255,255,.26)'">
            RESUME
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="5" y="2" width="14" height="20" rx="2"/><line x1="9" y1="7" x2="15" y2="7"/><line x1="9" y1="11" x2="15" y2="11"/><line x1="9" y1="15" x2="13" y2="15"/>
            </svg>
        </a>
    </div>

    {{-- Navbar --}}
    <header class="sticky top-0 z-40" style="border-bottom:1px solid rgba(255,255,255,.05);background:rgba(5,5,7,.88);backdrop-filter:blur(14px);">
        <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-5 lg:px-16">
            <a href="{{ route('home') }}" class="text-sm font-bold tracking-widest uppercase" style="color:rgba(255,255,255,.7);">Fab</a>
            <span class="text-xs tracking-wider hidden sm:block" style="color:rgba(255,255,255,.2);">fabianamichellee@gmail.com</span>
            <nav class="flex items-center gap-6 sm:gap-8">
                <a href="{{ route('about.me') }}" class="nav-link active">About</a>
                <a href="https://fabblogs.substack.com/" target="_blank" class="nav-link hidden sm:inline">Blog</a>
                <a href="{{ route('projects') }}" class="nav-link hidden sm:inline">Work</a>
                <a href="{{ route('skills') }}" class="nav-link hidden sm:inline">Skills</a>
                <a href="https://www.upwork.com/freelancers/~018cdafd413e07ceb5?mp_source=share" target="_blank"
                   class="rounded-full px-4 py-1.5 text-xs font-semibold tracking-wider uppercase transition"
                   style="border:1px solid rgba(236,72,153,.5);color:#ec4899;background:rgba(236,72,153,.07);"
                   onmouseenter="this.style.background='rgba(236,72,153,.18)'"
                   onmouseleave="this.style.background='rgba(236,72,153,.07)'">Hire me ↗</a>
            </nav>
        </div>
    </header>

    <main class="lg:pl-16">

        {{-- ── HERO ── --}}
        <section class="relative min-h-screen flex flex-col justify-center px-6 lg:px-16 pt-10 pb-20 overflow-hidden">

            {{-- Ghost name --}}
            <div class="ghost absolute inset-x-0 top-8 text-center pointer-events-none select-none">FABIANA</div>

            <div class="relative z-10 grid lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto w-full mt-20 lg:mt-0">

                {{-- Left: text --}}
                <div class="space-y-8">
                    <div class="pink-pill">
                        <span class="relative flex size-2">
                            <span class="ping absolute inline-flex h-full w-full rounded-full bg-pink-400 opacity-75"></span>
                            <span class="relative inline-flex size-2 rounded-full bg-pink-500"></span>
                        </span>
                        Open to opportunities
                    </div>

                    <div>
                        <p style="color:rgba(255,255,255,.35);font-size:.8rem;letter-spacing:.18em;text-transform:uppercase;margin-bottom:7px;">Hello! I'm</p>
                        <h1 style="font-size:clamp(2.8rem,8vw,5.5rem);font-weight:900;line-height:0.85;letter-spacing:.02em;">
                            Fabiana<br>
                            <span class="text-xl" style="font-style:italic; color:rgba(255,255,255,.25);">But You Can Call Me Fab</span>
                        </h1>
                    </div>

                    <div style="border-left:2px solid rgba(236,72,153,.5);padding-left:20px;">
                        <p style="font-size:clamp(1rem,2.5vw,1.25rem);color:rgba(255,255,255,.6);line-height:1.7;font-weight:400;">
                            I'm a Software Engineer with a background in SaaS. I love working with businesses through my code. Creativity fuels the things that I build.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <a href="{{ route('skills') }}"
                           style="background:linear-gradient(135deg,#ec4899,#f43f5e);color:#fff;padding:12px 28px;border-radius:100px;font-size:13px;font-weight:700;letter-spacing:.05em;text-decoration:none;transition:opacity .2s;"
                           onmouseenter="this.style.opacity='.8'" onmouseleave="this.style.opacity='1'">
                            View My Stack →
                        </a>
                        <a href="https://fabblogs.substack.com/" target="_blank"
                           style="border:1px solid rgba(255,255,255,.12);color:rgba(255,255,255,.65);padding:12px 28px;border-radius:100px;font-size:13px;font-weight:600;letter-spacing:.05em;text-decoration:none;transition:all .2s;"
                           onmouseenter="this.style.borderColor='rgba(236,72,153,.4)';this.style.color='#fff'"
                           onmouseleave="this.style.borderColor='rgba(255,255,255,.12)';this.style.color='rgba(255,255,255,.65)'">
                            Read My Blog ↗
                        </a>
                    </div>
                </div>

                {{-- Right: photo + spinning badge --}}
                <div class="flex justify-center lg:justify-end relative">
                    <div class="relative">
                        <div class="photo-frame" style="width:320px;max-width:90vw;">
                            <img src="{{ asset('images/fabby.jpg') }}" alt="Fabiana"
                                 style="width:100%;display:block;object-fit:cover;aspect-ratio:4/5;" />
                        </div>

                        {{-- Spinning circular text badge --}}
                        <div class="spin-badge absolute -bottom-8 -right-8" style="width:110px;height:110px;">
                            <svg viewBox="0 0 110 110" width="110" height="110">
                                <defs>
                                    <path id="circ" d="M 55,55 m -42,0 a 42,42 0 1,1 84,0 a 42,42 0 1,1 -84,0"/>
                                </defs>
                                <circle cx="55" cy="55" r="42" fill="rgba(236,72,153,0.1)" stroke="rgba(236,72,153,0.3)" stroke-width="1"/>
                                <text font-size="9.5" fill="rgba(236,72,153,0.9)" font-weight="700" letter-spacing="3.2">
                                    <textPath href="#circ">OPEN TO WORK • HIRE ME • FABIANA •</textPath>
                                </text>
                                <circle cx="55" cy="55" r="5" fill="#ec4899"/>
                            </svg>
                        </div>

                        {{-- Floating tag --}}
                        <div class="absolute -left-6 top-8 reveal left"
                             style="background:rgba(5,5,7,.9);border:1px solid rgba(236,72,153,.25);border-radius:12px;padding:10px 16px;">
                            <p style="font-size:10px;color:rgba(255,255,255,.35);letter-spacing:.1em;text-transform:uppercase;">Role</p>
                            <p style="font-size:13px;font-weight:700;color:#fff;margin-top:2px;">Jr. Software Engineer</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Scroll indicator --}}
            <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2" style="color:rgba(255,255,255,.2);">
                <span style="font-size:10px;letter-spacing:.15em;text-transform:uppercase;">Scroll</span>
                <div style="width:1px;height:40px;background:linear-gradient(to bottom,rgba(236,72,153,.5),transparent);animation:scrollLine 1.8s ease infinite;">
                </div>
            </div>
        </section>

        <style>
            @keyframes scrollLine {
                0%   { opacity:0; transform:scaleY(0); transform-origin:top; }
                50%  { opacity:1; transform:scaleY(1); }
                100% { opacity:0; transform:scaleY(1); transform-origin:bottom; }
            }
        </style>

        {{-- Divider --}}
        <div class="draw-line reveal max-w-6xl mx-auto lg:ml-16 mr-6"></div>

        {{-- ── ABOUT TEXT ── --}}
        <section class="max-w-6xl mx-auto px-6 lg:px-16 py-24">
            <div class="grid lg:grid-cols-12 gap-12 items-start">
                <div class="lg:col-span-4 reveal left">
                    <p style="font-size:.75rem;letter-spacing:.2em;text-transform:uppercase;color:rgba(236,72,153,.7);margin-bottom:12px;">01 — Story</p>
                    <h2 style="font-size:clamp(2rem,5vw,3.5rem);font-weight:900;line-height:1.05;letter-spacing:.02em;">
                        ABOUT<br>
                        <span style="color:rgba(255,255,255,.2);">ME</span>
                    </h2>
                </div>
                <div class="lg:col-span-8 space-y-6 reveal right">
                    <p style="font-size:clamp(1rem,2vw,1.2rem);color:rgba(255,255,255,.65);line-height:1.85;">
                        I double-majored in <span style="color:#fff;font-weight:600;">Business Administration</span> and
                        <span style="color:#fff;font-weight:600;">Applied Computer Science</span> (emphasis: Software Development).
                        Before that, I spent years in SaaS, as a BDR, Account Executive, and Account Manager, working alongside
                        developers every day until I decided to become one.
                    </p>
                    <p style="font-size:clamp(1rem,2vw,1.2rem);color:rgba(255,255,255,.65);line-height:1.85;">
                        I started a blog because I needed somewhere to track my learning visibly. Now it's a place where I build in public,
                        share what I find confusing, and make it easier for the next person. <a href="https://fabblogs.substack.com/" target="_blank" style="color:#ec4899;font-weight:600;text-decoration:underline;">Essays from a forever learner to your inbox.</a>
                    </p>
                    <p style="font-size:clamp(1rem,2vw,1.2rem);color:rgba(255,255,255,.65);line-height:1.85;">
                        I've lived in 4 countries, own a sassy bulldog named Prince, and on my off hours I'm usually reading,
                        working out, or exploring a new city. Playing with my babygirl, or watching a movie with my husband. <span style="color:#fff;font-weight:600;">Code</span> is how I think. <span style="color:#fff;font-weight:600;">Writing</span> is how I share it.
                    </p>
                </div>
            </div>
        </section>

        {{-- ── STATS ── --}}
        <section class="px-6 lg:px-16 py-12" style="border-top:1px solid rgba(255,255,255,.05);border-bottom:1px solid rgba(255,255,255,.05);">
            <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 text-center reveal">
                @foreach([
                    ['5+',  'Projects Shipped'],
                    ['227',   'Commits in the Last 6 Months'],
                    ['2',   'Degrees Earned'],
                    ['100%','Posts Written by Me'],
                ] as [$num, $label])
                <div>
                    <div style="font-size:clamp(2rem,5vw,3.5rem);font-weight:900;background:linear-gradient(135deg,#fff 40%,rgba(236,72,153,.7));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;line-height:1.1;">
                        {{ $num }}
                    </div>
                    <div style="font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.3);margin-top:6px;">{{ $label }}</div>
                </div>
                @endforeach
            </div>
        </section>

        {{-- ── WHAT I DO ── --}}
        <section class="max-w-6xl mx-auto px-6 lg:px-16 py-24">
            <div class="mb-12 reveal">
                <p style="font-size:.75rem;letter-spacing:.2em;text-transform:uppercase;color:rgba(236,72,153,.7);margin-bottom:12px;">02 — Roles</p>
                <h2 style="font-size:clamp(2rem,5vw,3.5rem);font-weight:900;line-height:1.05;">WHAT I DO</h2>
            </div>

            <div x-data="{ open: null }" class="space-y-0 divide-y reveal" style="border:1px solid rgba(255,255,255,.08);border-radius:2px;--tw-divide-opacity:.06;">

                @foreach([
                    ['FULL-STACK DEVELOPER',  'Laravel & PHP · Web Applications',
                     'I build full-stack web applications with Laravel at the core. Routing, middleware, Eloquent ORM, queues, and REST APIs. I think carefully about database design, write clean migrations, and use Livewire to keep the stack tight without reaching for a JavaScript framework. I care about readable code, sensible architecture, and shipping things that actually hold up in production.'],
                    ['FRONTEND BUILDER',       'Tailwind · Blade · Alpine.js',
                     'I turn designs into pixel-accurate, responsive interfaces using Tailwind CSS, Laravel Blade, and Alpine.js. I focus on mobile-first layouts, smooth interactions, and keeping the UI fast without over-engineering it. I prefer staying in the PHP ecosystem when possible, less context switching, more consistency. I also pay attention to accessibility and making sure things look right at every screen size.'],
                    ['PYTHON DEVELOPER',       'APIs · Scripting · Automation',
                     'I use Python to build lightweight APIs, automate repetitive workflows, and write scripts that save time. Whether it\'s hitting a third-party API, processing data, or automating a task I\'d otherwise do manually. Python is my go-to for getting things done quickly and cleanly. I\'m comfortable working with libraries like requests, Flask, and standard tooling for scripting and file I/O.'],
                    ['TECHNICAL WRITER',       'Substack · Fabblogs',
                     'I write about software the way I wish someone had explained it to me. Clearly, honestly, and without unnecessary jargon. My writing covers things I\'m actively learning: Laravel internals, debugging sessions, project builds, and concepts that took me longer than expected to understand. Everything I publish is 100% human-written.Just real experience put into words.'],
                    ['FREELANCER',             'Upwork · Open to Projects',
                     'I\'m open to junior roles, freelance web projects, and collaborations. I can build full-stack Laravel apps, set up APIs, automate workflows with Python, or help with frontend work. My background in SaaS sales means I can communicate clearly with clients, understand what they actually need, and translate that into working software. Without the back-and-forth that slows projects down.'],
                ] as [$title, $sub, $body])
                <div class="role-box reveal" x-on:click="open === '{{ $title }}' ? open = null : open = '{{ $title }}'">
                    <div class="flex items-center justify-between gap-4">
                        <div>
                            <div class="role-title">{{ $title }}</div>
                            <div class="role-subtitle">{{ $sub }}</div>
                        </div>
                        <div class="role-chevron flex-shrink-0" :class="open === '{{ $title }}' ? 'open' : ''"
                             style="width:32px;height:32px;border:1px solid rgba(255,255,255,.12);border-radius:4px;display:flex;align-items:center;justify-content:center;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <polyline points="6 9 12 15 18 9"/>
                            </svg>
                        </div>
                    </div>
                    <div class="role-body" :class="open === '{{ $title }}' ? 'open' : 'closed'">
                        <p style="color:rgba(255,255,255,.5);font-size:.95rem;line-height:1.8;margin-top:16px;">{{ $body }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        {{-- ── TIMELINE ── --}}
        <section class="max-w-6xl mx-auto px-6 lg:px-16 py-24">
            <div class="mb-16 reveal">
                <p style="font-size:.75rem;letter-spacing:.2em;text-transform:uppercase;color:rgba(236,72,153,.7);margin-bottom:12px;">03 — Journey</p>
                <h2 style="font-size:clamp(2rem,5vw,3.5rem);font-weight:900;line-height:1.05;">
                    My Career<br>
                    <span style="color:#ec4899;">&amp; Experience</span>
                </h2>
            </div>

            <div class="relative">
                {{-- Center line --}}
                <div class="timeline-line hidden md:block"></div>

                <div class="space-y-14">
                    @foreach([
                        ['May 2026',  'Junior Engineer Intern',    'Laravel',      'Working with a Team, pushing myself deeper into the Laravel ecosystem. Exploring: Livewire, Pest testing, and system design.', 'right'],
                        ['2026', 'Applied CS + Business Admin Graduate',    'Software Development',  'Completed a double major: BBA + Applied Computer Science with an Emphasis in Software Development.', 'left'],
                        ['2025', 'Freelance Developer',  'Projects & Freelance',  'Building full-stack web apps with Laravel, Livewire, and Tailwind. Deployed on Laravel Cloud. Open to junior roles and collaborations.', 'right'],
                        ['2022', 'Account Executive',      'Remote SaaS',           'Worked closely with Solutions Engineers and developers daily. Realized I wanted to be on the other side. Writing the code, not just selling it.', 'left'],
                        ['2020', 'Business Development',  'Remote SaaS',           'Started in tech sales as a BDR, progressing to AE and Account Manager. Built strong communication and business sense that I now bring to engineering.', 'right'],
                    ] as [$year, $role, $type, $desc, $side])
                    <div class="md:grid md:grid-cols-2 md:gap-16 items-center reveal {{ $side === 'left' ? 'left' : 'right' }}">
                        @if($side === 'right')
                        <div class="hidden md:flex justify-end">
                            <div style="text-align:right;">
                                <div style="font-size:clamp(2rem,6vw,4rem);font-weight:900;color:rgba(255,255,255,.08);line-height:1;">{{ $year }}</div>
                            </div>
                        </div>
                        @endif

                        <div style="padding:24px 28px;border:1px solid rgba(255,255,255,.07);border-radius:4px;background:rgba(255,255,255,.02);position:relative;">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="timeline-dot"></div>
                                <div style="font-size:10px;letter-spacing:.14em;text-transform:uppercase;color:#ec4899;">{{ $type }}</div>
                            </div>
                            <h3 style="font-size:1.4rem;font-weight:800;letter-spacing:.02em;text-transform:uppercase;margin-bottom:8px;">{{ $role }}</h3>
                            <p style="color:rgba(255,255,255,.45);font-size:.9rem;line-height:1.75;">{{ $desc }}</p>
                            <div class="md:hidden mt-3" style="font-size:2.5rem;font-weight:900;color:rgba(255,255,255,.06);">{{ $year }}</div>
                        </div>

                        @if($side === 'left')
                        <div class="hidden md:flex">
                            <div style="font-size:clamp(2rem,6vw,4rem);font-weight:900;color:rgba(255,255,255,.08);line-height:1;">{{ $year }}</div>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ── FUN FACTS TICKER ── --}}
        <section style="border-top:1px solid rgba(255,255,255,.05);border-bottom:1px solid rgba(255,255,255,.05);padding:20px 0;overflow:hidden;">
            <div class="flex animate-ticker whitespace-nowrap gap-10 w-max">
                @php
                    $facts = ['Dog mom to Prince 🐾', 'Lived in 4 countries 🌍', 'Books > Netflix 📚', '100% human writing ✍️', 'SaaS → Software Engineer 🔄', 'Laravel lover ❤️', 'Open to remote 💻', 'Learning in public 🚀', 'Coffee first ☕', 'Workout daily 💪'];
                    $items = array_merge($facts, $facts);
                @endphp
                @foreach($items as $f)
                    <span style="font-size:14px;font-weight:500;color:rgba(255,255,255,.25);display:inline-flex;align-items:center;gap:10px;">
                        <span style="width:4px;height:4px;border-radius:50%;background:#ec4899;flex-shrink:0;"></span>
                        {{ $f }}
                    </span>
                @endforeach
            </div>
        </section>

        {{-- ── CTA ── --}}
        <section class="max-w-6xl mx-auto px-6 lg:px-16 py-24">
            <div class="relative overflow-hidden reveal" style="border-radius:4px;background:#0d0d10;border:1px solid rgba(236,72,153,.15);padding:64px 48px;text-align:center;">
                <div style="position:absolute;inset:0;background:radial-gradient(ellipse at 50% 0%,rgba(236,72,153,.12) 0%,transparent 65%);pointer-events:none;"></div>
                <div style="position:relative;">
                    <p style="font-size:.75rem;letter-spacing:.2em;text-transform:uppercase;color:rgba(236,72,153,.7);margin-bottom:16px;">04 — Let's Build</p>
                    <h2 style="font-size:clamp(2rem,5vw,3.5rem);font-weight:900;line-height:1.1;margin-bottom:12px;">
                        Want to work together?
                    </h2>
                    <p style="color:rgba(255,255,255,.4);font-size:.95rem;max-width:480px;margin:0 auto 36px;line-height:1.75;">
                        Open to junior roles, freelance projects, and anything creative. Let's make something real.
                    </p>
                    <div style="display:flex;flex-wrap:wrap;gap:12px;justify-content:center;">
                        <a href="mailto:fabianamichellee@gmail.com"
                           style="background:linear-gradient(135deg,#ec4899,#f43f5e);color:#fff;padding:14px 32px;border-radius:100px;font-size:13px;font-weight:700;letter-spacing:.06em;text-decoration:none;transition:opacity .2s;"
                           onmouseenter="this.style.opacity='.8'" onmouseleave="this.style.opacity='1'">
                            💌 Email Me
                        </a>
                        <a href="https://www.upwork.com/freelancers/~018cdafd413e07ceb5?mp_source=share" target="_blank"
                           style="border:1px solid rgba(255,255,255,.12);color:rgba(255,255,255,.65);padding:14px 32px;border-radius:100px;font-size:13px;font-weight:600;letter-spacing:.06em;text-decoration:none;transition:all .2s;"
                           onmouseenter="this.style.borderColor='rgba(236,72,153,.4)';this.style.color='#fff'"
                           onmouseleave="this.style.borderColor='rgba(255,255,255,.12)';this.style.color='rgba(255,255,255,.65)'">
                            Hire on Upwork ↗
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- Footer --}}
        <div class="max-w-6xl mx-auto px-6 lg:px-16 pb-16 flex flex-wrap justify-between items-center gap-4" style="border-top:1px solid rgba(255,255,255,.05);">
            <p style="font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.2);">© {{ date('Y') }} Fabiana Mendoza</p>
            <div style="display:flex;gap:24px;">
                <a href="{{ route('skills') }}" style="font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.2);text-decoration:none;transition:color .2s;" onmouseenter="this.style.color='#ec4899'" onmouseleave="this.style.color='rgba(255,255,255,.2)'">Skills</a>
                <a href="{{ route('projects') }}" style="font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.2);text-decoration:none;transition:color .2s;" onmouseenter="this.style.color='#ec4899'" onmouseleave="this.style.color='rgba(255,255,255,.2)'">Projects</a>
                <a href="https://fabblogs.substack.com/" target="_blank" style="font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.2);text-decoration:none;transition:color .2s;" onmouseenter="this.style.color='#ec4899'" onmouseleave="this.style.color='rgba(255,255,255,.2)'">Substack</a>
            </div>
        </div>

    </main>

    {{-- Scroll reveal + draw-line observer --}}
    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                    // stagger children if any
                }
            });
        }, { threshold: 0.12 });

        document.querySelectorAll('.reveal, .draw-line').forEach(el => observer.observe(el));
    </script>

    @fluxScripts
</body>
</html>
