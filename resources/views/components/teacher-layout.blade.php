<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Teacher Management' }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <h1 class="text-2xl font-bold">
                Teacher Management
            </h1>

            <div class="flex gap-6">
                <a href="/teachers" class="hover:text-blue-200 transition">
                    Teachers
                </a>

                <a href="/teachers/courses" class="hover:text-blue-200 transition">
                    Courses
                </a>
            </div>

        </div>
    </nav>

    <!-- Header -->
    <header class="max-w-7xl mx-auto px-6 py-8">
        @isset($header)
            {{ $header }}
        @endisset
    </header>

    <!-- Content -->
    <main class="max-w-7xl mx-auto px-6 pb-10">
        {{ $slot }}
    </main>

</body>
</html>