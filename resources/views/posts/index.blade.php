<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Posts | Fenix</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-950 text-white min-h-screen">

    <nav class="border-b border-gray-800 px-6 py-5">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-red-500">FENIX</a>

            <div class="flex gap-5 text-gray-300">
                <a href="/" class="hover:text-red-400">Home</a>
                <a href="/apps" class="hover:text-red-400">Apps</a>
                <a href="/posts" class="text-red-400">Posts</a>
                <a href="/about" class="hover:text-red-400">About</a>
                <a href="/contact" class="hover:text-red-400">Contact</a>
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-6 py-16">
        <p class="text-red-400 font-semibold mb-3">NEWS & UPDATES</p>

        <h1 class="text-4xl md:text-5xl font-bold mb-4">
            Latest Posts
        </h1>

        <p class="text-gray-400 mb-12">
            Discover the latest news, stories, and updates from Fenix.
        </p>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

            @forelse ($posts as $post)
                <article class="bg-gray-900 border border-gray-800 rounded-2xl p-7 hover:border-red-500 transition">

                    <div class="text-4xl mb-5">📰</div>

                    <h2 class="text-2xl font-bold mb-3">
                        <a href="{{ url('/posts/' . $post->id) }}"
                           class="hover:text-red-400">
                            {{ $post->title }}
                        </a>
                    </h2>

                    <p class="text-gray-400 mb-5">
                        {{ \Illuminate\Support\Str::limit(strip_tags($post->content), 140) }}
                    </p>

                    <span class="text-sm text-gray-500">
                        {{ ucfirst($post->status ?? 'published') }}
                    </span>

                    <div class="mt-6">
                        <a href="{{ url('/posts/' . $post->id) }}"
                           class="text-red-400 hover:text-red-300 font-semibold">
                            Read More →
                        </a>
                    </div>

                </article>
            @empty
                <div class="col-span-full bg-gray-900 border border-gray-800 rounded-2xl p-10 text-center">
                    <p class="text-xl font-semibold mb-2">No posts yet</p>
                    <p class="text-gray-400">
                        New posts will appear here when they are added.
                    </p>
                </div>
            @endforelse

        </div>
    </main>

    <footer class="border-t border-gray-800 text-center text-gray-500 py-6">
        © {{ date('Y') }} Fenix. All rights reserved.
    </footer>

</body>
</html>