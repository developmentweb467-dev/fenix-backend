<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} | Fenix</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-950 text-white min-h-screen">

    <nav class="border-b border-gray-800 p-6">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-red-500">FENIX</a>
            <a href="/posts" class="text-gray-300 hover:text-red-400">All Posts</a>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-6 py-16">
        <article class="bg-gray-900 border border-gray-800 rounded-2xl p-8 md:p-12">

            <p class="text-red-400 font-semibold mb-4">FENIX NEWS</p>

            <h1 class="text-3xl md:text-5xl font-bold mb-8">
                {{ $post->title }}
            </h1>

            @if ($post->image)
                <img src="{{ $post->image }}"
                     alt="{{ $post->title }}"
                     class="w-full rounded-xl mb-8">
            @endif

            <div class="text-gray-300 text-lg leading-8 whitespace-pre-line">
                {{ $post->content }}
            </div>

            <p class="text-gray-500 text-sm mt-8">
                Status: {{ ucfirst($post->status ?? 'published') }}
            </p>

            <a href="/posts"
               class="inline-block mt-8 bg-red-500 hover:bg-red-600 px-6 py-3 rounded-lg font-semibold">
                ← Back to Posts
            </a>

        </article>
    </main>

    <footer class="border-t border-gray-800 text-center text-gray-500 py-6">
        © {{ date('Y') }} Fenix. All rights reserved.
    </footer>

</body>
</html>