<x-mentor-layout>

    <x-slot:header>
        <h2 class="text-3xl font-bold text-slate-800">
            Mentors
        </h2>
    </x-slot:header>

    <div class="flex flex-wrap justify-center gap-8">

        @foreach ($mentors as $mentor)
            <div class="w-80 bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">

            <!-- Banner -->
            <div class="h-20 bg-indigo-600"></div>

            <!-- Avatar -->
            <div class="flex justify-center">
                <img
                    src="https://i.pravatar.cc/300"
                    alt="Mentor"
                    class="w-24 h-24 rounded-full border-4 border-white object-cover -mt-12"
                >
            </div>

            <!-- Mentor Info -->
            <div class="p-6 text-center">

                <h3 class="text-xl font-bold text-slate-800">
                    {{ $mentor->name }}
                </h3>

                <p class="text-slate-500 mt-2">
                    {{ $mentor->email }}
                </p>

                <p class="text-slate-600 mt-3">
                    <span class="font-semibold">Phone:</span>
                    {{ $mentor->phone }}
                </p>

                <p class="text-slate-600 mt-2">
                    <span class="font-semibold">Job Title:</span>
                    {{ $mentor->job_title }}
                </p>

                <a
                    href="/mentor/{{ $mentor->id }}"
                    class="inline-block mt-6 px-5 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition"
                >
                    View Courses
                </a>

            </div>

        </div>
        @endforeach

    </div>


</x-mentor-layout>