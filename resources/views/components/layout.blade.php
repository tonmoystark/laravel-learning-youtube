<!-- resources/views/components/layout.blade.php -->

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Learner Management System' }}</title>

<script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-slate-100 min-h-screen flex flex-col">
<!-- Navbar -->
<nav class="bg-slate-900 text-white shadow-lg">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">

        <a href="/" class="text-xl font-bold">
            LearnerHub
        </a>

        <div class="flex gap-6">
            
            <a href="/learner" class="hover:text-blue-400 transition">
                Learners
            </a>
            
            <a href="/learner/create" class="hover:text-blue-400 transition">
                Add Learner
            </a>
            <a href="/learner/suspended" class="hover:text-blue-400 transition">
                Suspended Learners
            </a>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main class="flex-1 max-w-6xl mx-auto w-full px-6 py-10">
    {{ $slot }}
</main>

<!-- Footer -->
<footer class="bg-slate-900 text-white mt-auto">
    <div class="max-w-6xl mx-auto px-6 py-4 text-center">
        <p>
            Laravel CRUD Practice Project © {{ date('Y') }}
        </p>
    </div>
</footer>
</body>
</html>
