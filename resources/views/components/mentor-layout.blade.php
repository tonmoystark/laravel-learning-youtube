<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Mentor Management' }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-indigo-600 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <h1 class="text-2xl font-bold">
                Mentor Management
            </h1>

            <div class="flex items-center gap-6">
                <a href="/mentors" class="hover:text-indigo-200 transition">
                    Mentors
                </a>

                <a href="/courses" class="hover:text-indigo-200 transition">
                    Courses
                </a>
            </div>

        </div>
    </nav>

    <!-- Page Header -->
    <header class="max-w-7xl mx-auto px-6 py-8">
        @isset($header)
            {{ $header }}
        @endisset
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-6 pb-10">
        {{ $slot }}
    </main>

</body>
</html>