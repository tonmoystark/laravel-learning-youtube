<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Student Management' }}</title>

<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <nav class="bg-white shadow">
        <div class="max-w-6xl mx-auto px-4 py-4">
            <h1 class="text-2xl font-bold">
                {{ $title ?? 'Student Management' }}
            </h1>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto p-6">
        {{ $slot }}
    </main>

</body>
</html>