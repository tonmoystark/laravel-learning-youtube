<x-mentor-layout>

    <x-slot:header>
        <h2 class="text-3xl font-bold text-slate-800">
            Course
        </h2>
    </x-slot:header>

    <div class="flex flex-wrap justify-center gap-8">

        <div class="w-96 bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">

            <!-- Course Banner -->
            <div class="h-20 bg-indigo-600"></div>

            <div class="p-6">

                <!-- Mentor Name -->
                <h3 class="text-2xl font-bold text-slate-800">
                    {{ $mentor->name }}
                </h3>

                <!-- courses -->
                <div class="mt-4">
    <p class="font-semibold text-slate-700">
        Courses:
    </p>

    <ul class="mt-2 space-y-2">
        @foreach ($mentor->courses as $course)

            <li class="flex justify-between items-center bg-slate-100 p-2 rounded-md">

                <span class="text-slate-700">
                    {{ $course->name }}
                </span>

                <span class="text-sm text-slate-500">
                    {{ $course->start_date }}
                </span>

            </li>

        @endforeach
    </ul>
</div>

                <!-- Description -->
                <div class="mt-5">
                    <p class="text-slate-500 leading-relaxed">
                        Learn Laravel from scratch including routing,
                        controllers, migrations, Eloquent ORM,
                        relationships, factories, seeders, and CRUD operations.
                    </p>
                </div>

                

                <!-- Button -->
                <div class="mt-6">
                    <a
                        href="#"
                        class="inline-block px-5 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition"
                    >
                        View Details
                    </a>
                </div>

            </div>

        </div>

    </div>

</x-mentor-layout>