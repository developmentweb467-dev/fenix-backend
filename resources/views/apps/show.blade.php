<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $app->name }} | Fenix</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-950 text-white min-h-screen">

    <nav class="border-b border-gray-800 p-6">
        <div class="max-w-4xl mx-auto flex justify-between">
            <a href="/" class="text-2xl font-bold text-red-500">FENIX</a>
            <a href="/apps" class="text-gray-300 hover:text-red-400">All Apps</a>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-6 py-16">
        <div class="bg-gray-900 border border-gray-800 rounded-2xl p-8 md:p-12">
            <div class="text-5xl mb-6">🚀</div>

            <h1 class="text-4xl font-bold mb-4">
                {{ $app->name }}
            </h1>

            <p class="text-gray-400 text-lg mb-6">
                {{ $app->description ?? 'Discover this Fenix application.' }}
            </p>

            <p class="mb-8">
                Status:
                <span class="text-green-400">
                    {{ ucfirst(str_replace('_', ' ', $app->status ?? 'available')) }}
                </span>
            </p>

            @if ($app->url)
                <a href="{{ $app->url }}"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="inline-block bg-red-500 hover:bg-red-600 px-6 py-3 rounded-lg font-semibold">
                    Open Application ↗
                </a>
            @endif

            <div class="mt-8">
                <a href="/apps" class="text-gray-400 hover:text-white">
                    ← Back to Apps
                </a>
            </div>
        </div>
    </main>

</body>
</html>