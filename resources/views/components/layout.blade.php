{{-- resources/views/home.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title . " haha" : "haha" }}</title>

    {{-- Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#0f172a] text-white min-h-screen flex flex-col">

    {{-- Header --}}
    <header class="border-b border-slate-700">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            <h1 class="text-2xl font-bold text-blue-500">
                {{ isset($title) ? $title . " haha" : "haha" }}
            </h1>

            <div class="flex items-center gap-4">
                
                <a href="#"
                   class="text-slate-300 hover:text-white transition">
                    Sign In
                </a>

                <a href="#"
                   class="bg-blue-600 hover:bg-blue-700 px-5 py-2 rounded-lg transition">
                    Sign Up
                </a>

            </div>

        </div>
    </header>


    {{-- Main Content --}}
    <main class="flex-1 flex items-center justify-center px-6">

        {{ $slot }}

    </main>


    {{-- Footer --}}
    <footer class="border-t border-slate-700">
        <div class="max-w-7xl mx-auto px-6 py-4 text-center text-slate-400">

            © 2026 MyApp. All rights reserved.

        </div>
    </footer>

</body>
</html>