<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FenixApp — High-Performance Application Showcase</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        fenix: {
                            red: '#E53935',
                            coral: '#FF5252',
                            gold: '#FFD700',
                            dark: '#0B0F17',
                            card: '#151C28'
                        }
                    }
                }
            }
        };
    </script>

    <style>
        html { scroll-behavior: smooth; }
        body { background: #0B0F17; color: #f1f5f9; }
        .gradient-text {
            background: linear-gradient(to right, #E53935, #FF5252, #FFD700);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .gradient-button {
            background: linear-gradient(to right, #E53935, #FF5252, #FFD700);
        }
        .app-card {
            background: #151C28;
            transition: transform .3s ease, border-color .3s ease;
        }
        .app-card:hover {
            transform: translateY(-5px);
            border-color: #E53935;
        }
    </style>
</head>

<body class="antialiased font-sans">

    <!-- Navigation -->
    <header class="sticky top-0 z-50 bg-[#0B0F17]/95 backdrop-blur-md border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="/" class="text-xl font-black tracking-wider text-white">
                    FENIX<span class="text-[#E53935]">APP</span>
                </a>

                <nav class="hidden md:flex items-center gap-8">
                    <a href="/" class="text-[#FF5252] font-semibold">Home</a>
                    <a href="/apps" class="text-slate-300 hover:text-[#FF5252]">Apps</a>
                    <a href="/posts" class="text-slate-300 hover:text-[#FF5252]">Posts</a>
                    <a href="/about" class="text-slate-300 hover:text-[#FF5252]">About</a>
                    <a href="/contact" class="text-slate-300 hover:text-[#FF5252]">Contact</a>
                </nav>

                <a href="/contact"
                   class="hidden md:inline-block gradient-button px-5 py-2.5 rounded-xl text-white font-bold">
                    Get in Touch
                </a>

                <button id="menuButton"
                        type="button"
                        class="md:hidden text-white text-2xl"
                        aria-label="Toggle navigation"
                        aria-expanded="false">
                    ☰
                </button>
            </div>

            <nav id="mobileMenu" class="hidden md:hidden pb-4 space-y-2">
                <a href="/" class="block p-2 text-[#FF5252]">Home</a>
                <a href="/apps" class="block p-2 text-slate-300">Apps</a>
                <a href="/posts" class="block p-2 text-slate-300">Posts</a>
                <a href="/about" class="block p-2 text-slate-300">About</a>
                <a href="/contact" class="block p-2 text-slate-300">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Hero -->
    <section class="py-20 lg:py-32 border-b border-slate-800 bg-gradient-to-b from-[#0B0F17] via-slate-950 to-[#0B0F17]">
        <div class="max-w-5xl mx-auto px-4 text-center">
            <span class="inline-block px-4 py-2 rounded-full text-xs font-extrabold uppercase tracking-widest bg-red-950 border border-red-800 text-[#FF5252] mb-6">
                Next-Gen Enterprise Architecture
            </span>

            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-black text-white tracking-tight">
                Ignite Your Digital
                <span class="gradient-text">Ecosystem</span>
            </h1>

            <p class="mt-6 text-lg sm:text-xl text-slate-400 max-w-3xl mx-auto leading-relaxed">
                Discover enterprise-grade Web Applications, Live Broadcast Management Suites, and Custom SaaS Infrastructure engineered for ultra-high traffic.
            </p>

            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <a href="/apps" class="gradient-button px-8 py-4 rounded-xl text-white font-bold text-lg">
                    Explore Applications
                </a>
                <a href="/about" class="px-8 py-4 rounded-xl bg-slate-900 text-slate-200 border border-slate-700 font-bold text-lg hover:border-[#FF5252]">
                    Learn Architecture
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Applications -->
    <section class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between md:items-end mb-12 gap-4">
            <div>
                <h2 class="text-xs font-bold uppercase tracking-widest text-[#FFD700]">
                    Flagship Products
                </h2>
                <p class="text-3xl font-extrabold text-white mt-2">
                    Featured Enterprise Apps
                </p>
            </div>

            <a href="/apps" class="text-sm font-bold text-[#FF5252] hover:text-[#FFD700]">
                View All Systems &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <article class="app-card rounded-2xl border border-slate-800 p-6 shadow-xl flex flex-col justify-between">
                <div>
                    <div class="h-48 rounded-xl bg-slate-900 overflow-hidden mb-6">
                        <img
                            src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=800"
                            alt="Fenix Live Ops CRM"
                            class="w-full h-full object-cover"
                        >
                    </div>
                    <span class="text-xs font-bold text-[#FFD700] uppercase tracking-wider">CRM & Broadcast</span>
                    <h3 class="text-xl font-bold text-white mt-2">Fenix Live Ops CRM</h3>
                    <p class="text-slate-400 text-sm mt-2 leading-relaxed">
                        Automated live session routing, deal pipelines, and client telemetry.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-800">
                    <a href="/apps/1" class="text-sm font-bold text-[#E53935] hover:text-[#FFD700]">
                        Launch Overview &rarr;
                    </a>
                </div>
            </article>

            <article class="app-card rounded-2xl border border-slate-800 p-6 shadow-xl flex flex-col justify-between">
                <div>
                    <div class="h-48 rounded-xl bg-slate-900 overflow-hidden mb-6">
                        <img
                            src="https://images.unsplash.com/photo-1556742049-0a670f4a4591?auto=format&fit=crop&q=80&w=800"
                            alt="Fenix Commerce Core"
                            class="w-full h-full object-cover"
                        >
                    </div>
                    <span class="text-xs font-bold text-[#FFD700] uppercase tracking-wider">Fintech</span>
                    <h3 class="text-xl font-bold text-white mt-2">Fenix Commerce Core</h3>
                    <p class="text-slate-400 text-sm mt-2 leading-relaxed">
                        Multi-currency checkout engines with sub-second payment settlement.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-800">
                    <a href="/apps/2" class="text-sm font-bold text-[#E53935] hover:text-[#FFD700]">
                        Launch Overview &rarr;
                    </a>
                </div>
            </article>

            <article class="app-card rounded-2xl border border-slate-800 p-6 shadow-xl flex flex-col justify-between">
                <div>
                    <div class="h-48 rounded-xl bg-slate-900 overflow-hidden mb-6">
                        <img
                            src="https://images.unsplash.com/photo-1506784983877-45594efa4cbe?auto=format&fit=crop&q=80&w=800"
                            alt="Fenix Studio Calendar"
                            class="w-full h-full object-cover"
                        >
                    </div>
                    <span class="text-xs font-bold text-[#FFD700] uppercase tracking-wider">Scheduling</span>
                    <h3 class="text-xl font-bold text-white mt-2">Fenix Studio Calendar</h3>
                    <p class="text-slate-400 text-sm mt-2 leading-relaxed">
                        Real-time studio slot booking with distributed queue synchronization.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-800">
                    <a href="/apps/3" class="text-sm font-bold text-[#E53935] hover:text-[#FFD700]">
                        Launch Overview &rarr;
                    </a>
                </div>
            </article>

        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-950 border-t border-slate-800 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-2">
                <span class="text-lg font-black text-white">
                    FENIX<span class="text-[#E53935]">APP</span>
                </span>
                <span class="text-slate-500 text-sm">&copy; 2026. All rights reserved.</span>
            </div>

            <div class="flex flex-wrap justify-center gap-6 text-sm text-slate-400">
                <a href="/privacy" class="hover:text-[#FF5252]">Privacy Policy</a>
                <a href="/terms" class="hover:text-[#FF5252]">Terms & Conditions</a>
                <a href="/contact" class="hover:text-[#FF5252]">Contact</a>
            </div>
        </div>
    </footer>

    <script>
        const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');

        menuButton.addEventListener('click', function () {
            const isHidden = mobileMenu.classList.toggle('hidden');
            menuButton.setAttribute('aria-expanded', String(!isHidden));
            menuButton.textContent = isHidden ? '☰' : '✕';
        });
    </script>

</body>
</html>