<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head', ['title' => 'Skills — Fabiana'])
    <meta name="description" content="Fabiana Mendoza's tech stack and skills." />
    <style>
        body { background: #050507; color: #fff; }

        @keyframes orbFloat {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33%       { transform: translate(30px, -40px) scale(1.05); }
            66%       { transform: translate(-20px, 20px) scale(0.97); }
        }
        @keyframes ticker {
            0%   { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        .orb {
            position: fixed;
            border-radius: 50%;
            filter: blur(50px);
            pointer-events: none;
            animation: orbFloat 14s ease-in-out infinite;
        }
        .orb-1 {
            width: 500px; height: 500px;
            bottom: 10%; right: 5%;
            background: radial-gradient(circle, rgba(236,72,153,0.14) 0%, rgba(236,72,153,0.03) 60%, transparent 80%);
        }
        .orb-2 {
            width: 320px; height: 320px;
            top: 25%; left: 10%;
            animation-delay: -5s;
            background: radial-gradient(circle, rgba(244,114,182,0.09) 0%, transparent 70%);
        }

        .ghost-heading {
            font-size: clamp(4rem, 12vw, 9rem);
            font-weight: 900;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            background: linear-gradient(180deg, rgba(255,255,255,0.06) 0%, rgba(255,255,255,0.015) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1;
            user-select: none;
        }

        .skill-card {
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.07);
            border-radius: 14px;
            width: 100px;
            height: 100px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 8px;
            cursor: default;
            transition: all 0.25s ease;
            flex-shrink: 0;
        }
        .skill-card:hover {
            background: rgba(236,72,153,0.08);
            border-color: rgba(236,72,153,0.45);
            box-shadow: 0 0 22px rgba(236,72,153,0.12), 0 0 50px rgba(236,72,153,0.04);
            transform: translateY(-3px);
        }
        .skill-card img {
            width: 40px;
            height: 40px;
            object-fit: contain;
        }
        .skill-card span {
            font-size: 10px;
            color: rgba(255,255,255,0.45);
            text-align: center;
            font-weight: 500;
            letter-spacing: 0.02em;
        }

        .nav-link {
            color: rgba(255,255,255,0.45);
            font-size: 13px;
            font-weight: 500;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            transition: color 0.2s;
            text-decoration: none;
        }
        .nav-link:hover { color: #fff; }
        .nav-link.active { color: #ec4899; }

        .social-link {
            color: rgba(255,255,255,0.28);
            transition: color 0.2s;
            display: flex;
            align-items: center;
        }
        .social-link:hover { color: #ec4899; }

        .filter-btn {
            background: transparent;
            border: 1px solid rgba(255,255,255,0.1);
            color: rgba(255,255,255,0.38);
            padding: 6px 18px;
            border-radius: 100px;
            font-size: 12px;
            font-weight: 500;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.2s;
        }
        .filter-btn:hover {
            border-color: rgba(236,72,153,0.45);
            color: rgba(255,255,255,0.75);
        }
        .filter-btn.active {
            background: rgba(236,72,153,0.15);
            border-color: rgba(236,72,153,0.55);
            color: #fff;
            box-shadow: 0 0 14px rgba(236,72,153,0.18);
        }

        .animate-ticker { animation: ticker 28s linear infinite; }

        .grid-center-glow {
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            width: 600px; height: 300px;
            background: radial-gradient(ellipse, rgba(236,72,153,0.09) 0%, transparent 70%);
            pointer-events: none;
        }
    </style>
</head>
<body class="min-h-screen antialiased overflow-x-hidden">

    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>

    {{-- Fixed left social sidebar --}}
    <div class="fixed left-5 top-1/2 -translate-y-1/2 z-40 flex-col gap-7 hidden lg:flex">
        {{-- GitHub --}}
        <a href="https://github.com/Fabianamichelle" target="_blank" class="social-link" title="GitHub">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0 1 12 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
            </svg>
        </a>
        {{-- LinkedIn --}}
        <a href="https://www.linkedin.com/in/mrsmendoza/" target="_blank" class="social-link" title="LinkedIn">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
            </svg>
        </a>
        {{-- Upwork --}}
        <a href="https://www.upwork.com/freelancers/~018cdafd413e07ceb5?mp_source=share" target="_blank" class="social-link" title="Upwork">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                <path d="M18.561 13.158c-1.102 0-2.135-.467-3.074-1.227l.228-1.076.008-.042c.207-1.143.849-3.06 2.839-3.06 1.492 0 2.703 1.212 2.703 2.703-.001 1.489-1.212 2.702-2.704 2.702zm0-8.14c-2.539 0-4.51 1.649-5.31 4.366-1.22-1.834-2.148-4.036-2.687-5.892H7.828v7.112c-.002 1.406-1.141 2.546-2.547 2.546-1.405 0-2.543-1.14-2.543-2.546V3.492H0v7.112c0 2.914 2.37 5.303 5.281 5.303 2.913 0 5.283-2.389 5.283-5.303v-1.19c.529 1.107 1.182 2.229 1.974 3.221l-1.673 7.873h2.797l1.213-5.71c1.063.679 2.285 1.109 3.686 1.109 3 0 5.439-2.452 5.439-5.45 0-3-2.439-5.439-5.439-5.439z"/>
            </svg>
        </a>
    </div>

    {{-- Fixed bottom-right RESUME --}}
    <div class="fixed bottom-6 right-6 z-40 hidden lg:flex">
        <a href="https://www.linkedin.com/in/mrsmendoza/" target="_blank"
           class="flex items-center gap-2 text-xs font-semibold tracking-[0.15em] uppercase transition"
           style="color: rgba(255,255,255,0.28);"
           onmouseenter="this.style.color='rgba(236,72,153,0.8)'"
           onmouseleave="this.style.color='rgba(255,255,255,0.28)'"
        >
            RESUME
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="5" y="2" width="14" height="20" rx="2"/><line x1="9" y1="7" x2="15" y2="7"/><line x1="9" y1="11" x2="15" y2="11"/><line x1="9" y1="15" x2="13" y2="15"/>
            </svg>
        </a>
    </div>

    {{-- Navbar --}}
    <header class="sticky top-0 z-40" style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(5,5,7,0.88); backdrop-filter: blur(14px);">
        <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-5 lg:px-16">
            <a href="{{ route('home') }}" class="text-sm font-bold tracking-widest uppercase text-white/70 hover:text-white transition">Fab</a>
            <span class="text-xs tracking-wider hidden sm:block" style="color: rgba(255,255,255,0.2);">fabianamichellee@gmail.com</span>
            <nav class="flex items-center gap-6 sm:gap-8">
                <a href="{{ route('about.me') }}" class="nav-link">About</a>
                <a href="https://fabblogs.substack.com/" target="_blank" class="nav-link hidden sm:inline">Blog</a>
                <a href="{{ route('projects') }}" class="nav-link hidden sm:inline">Work</a>
                <a href="{{ route('skills') }}" class="nav-link active">Skills</a>
                <a href="https://www.upwork.com/freelancers/~018cdafd413e07ceb5?mp_source=share" target="_blank"
                   class="rounded-full px-4 py-1.5 text-xs font-semibold tracking-wider uppercase transition"
                   style="border: 1px solid rgba(236,72,153,0.5); color: #ec4899; background: rgba(236,72,153,0.07);"
                   onmouseenter="this.style.background='rgba(236,72,153,0.18)'"
                   onmouseleave="this.style.background='rgba(236,72,153,0.07)'"
                >Hire me ↗</a>
            </nav>
        </div>
    </header>

    <main class="lg:pl-16">

        {{-- Hero --}}
        <section class="relative pt-16 pb-8 text-center overflow-hidden px-4">
            <div class="ghost-heading mb-4">TECH STACK</div>
            <p class="text-sm tracking-[0.2em] uppercase mb-2" style="color: rgba(236,72,153,0.7);">Junior Software Engineer</p>
            <p class="text-sm max-w-md mx-auto" style="color: rgba(255,255,255,0.3);">
                The tools I reach for — from backend frameworks to frontend libraries.
            </p>
        </section>

        {{-- Livewire Skills --}}
        <livewire:skills />

        {{-- Contact footer --}}
        <section class="py-20 text-center px-4" style="border-top: 1px solid rgba(255,255,255,0.05);">
            <p class="text-xs tracking-[0.2em] uppercase mb-4" style="color: rgba(255,255,255,0.22);">Get in touch</p>
            <a href="mailto:fabianamichellee@gmail.com"
               class="text-2xl sm:text-3xl font-bold transition-opacity hover:opacity-60"
               style="color: rgba(255,255,255,0.8);">
                fabianamichellee@gmail.com
            </a>

            {{-- Social links row --}}
            <div class="mt-8 flex justify-center gap-6">
                <a href="https://github.com/Fabianamichelle" target="_blank"
                   class="flex items-center gap-2 text-xs tracking-widest uppercase transition"
                   style="color: rgba(255,255,255,0.3);"
                   onmouseenter="this.style.color='#ec4899'" onmouseleave="this.style.color='rgba(255,255,255,0.3)'">
                    GitHub ↗
                </a>
                <a href="https://www.linkedin.com/in/mrsmendoza/" target="_blank"
                   class="flex items-center gap-2 text-xs tracking-widest uppercase transition"
                   style="color: rgba(255,255,255,0.3);"
                   onmouseenter="this.style.color='#ec4899'" onmouseleave="this.style.color='rgba(255,255,255,0.3)'">
                    LinkedIn ↗
                </a>
                <a href="https://www.upwork.com/freelancers/~018cdafd413e07ceb5?mp_source=share" target="_blank"
                   class="flex items-center gap-2 text-xs tracking-widest uppercase transition"
                   style="color: rgba(255,255,255,0.3);"
                   onmouseenter="this.style.color='#ec4899'" onmouseleave="this.style.color='rgba(255,255,255,0.3)'">
                    Upwork ↗
                </a>
            </div>

            <div class="mt-8 flex justify-center gap-8 text-xs tracking-widest uppercase" style="color: rgba(255,255,255,0.15);">
                <span>USA</span>
                <span>Open to remote</span>
                <span>© {{ date('Y') }} Fabiana Mendoza</span>
            </div>
        </section>

    </main>

    @fluxScripts
</body>
</html>
