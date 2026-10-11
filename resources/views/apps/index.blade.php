<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Apps | Fenix</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-950 text-white min-h-screen">

    <nav class="border-b border-gray-800 px-6 py-5">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-red-500">FENIX</a>

            <div class="flex gap-5 text-gray-300">
                <a href="/" class="hover:text-red-400">Home</a>
                <a href="/apps" class="text-red-400">Apps</a>
                <a href="/posts" class="hover:text-red-400">Posts</a>
                <a href="/about" class="hover:text-red-400">About</a>
                <a href="/contact" class="hover:text-red-400">Contact</a>
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-6 py-16">
        <p class="text-red-400 font-semibold mb-3">FENIX ECOSYSTEM</p>

        <h1 class="text-4xl md:text-5xl font-bold mb-4">
            Our Applications
        </h1>

        <p class="text-gray-400 mb-12">
            Explore the applications powered by Fenix.
        </p>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

            @forelse ($apps as $app)
                <div class="bg-gray-900 border border-gray-800 rounded-2xl p-7 hover:border-red-500 transition">

                    <div class="w-14 h-14 rounded-xl bg-red-500/10 flex items-center justify-center text-3xl mb-5">
                        🚀
                    </div>

                  <h2 class="text-2xl font-bold mb-3">
    <a href="{{ url('/apps/' . $app->id) }}"
       class="hover:text-red-400">
        {{ $app->name }}
    </a>
</h2>  

                    <p class="text-gray-400 mb-5">
                        {{ $app->description ?? 'Discover this Fenix application.' }}
                    </p>

                    <span class="inline-block text-sm px-3 py-1 rounded-full
                        {{ $app->status === 'active' ? 'bg-green-500/10 text-green-400' : 'bg-yellow-500/10 text-yellow-400' }}">
                        {{ ucfirst(str_replace('_', ' ', $app->status ?? 'available')) }}
                    </span>

                    @if ($app->url)
                        <div class="mt-6">
                            <a href="{{ $app->url }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="inline-block bg-red-500 hover:bg-red-600 px-5 py-2 rounded-lg font-semibold">
                                Open App ↗
                            </a>
                        </div>
                    @endif

                </div>
            @empty
                <p class="text-gray-400">No applications available yet.</p>
            @endforelse

        </div>
    </main>

    <footer class="border-t border-gray-800 text-center text-gray-500 py-6">
        © {{ date('Y') }} Fenix. All rights reserved.
    </footer>

</body>
</html>