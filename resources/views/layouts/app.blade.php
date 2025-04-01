<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Learn Greek')</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen">
    <header class="bg-blue-600 text-white">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <a href="{{ route('home') }}" class="text-2xl font-bold">Learn Greek</a>
                <nav class="space-x-4">
                    <a href="{{ route('words.index') }}" class="hover:text-blue-200">Words</a>
                    <a href="{{ route('grammar.index') }}" class="hover:text-blue-200">Grammar</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; {{ date('Y') }} Learn Greek. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>