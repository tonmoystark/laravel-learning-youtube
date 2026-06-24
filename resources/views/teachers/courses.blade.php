<x-teacher-layout>

    <x-slot:header>
        <h2 class="text-3xl font-bold text-slate-800">
            Courses
        </h2>
    </x-slot:header>

    <div class="flex flex-wrap justify-center gap-8">
        @foreach ($courses as $course)
            
        <div class="w-96 bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition duration-300">

            <!-- Course Name -->
            <h3 class="text-2xl font-bold text-slate-800">
                {{ $course->name }}
            </h3>

            <!-- Teacher -->
            <p class="mt-3 text-slate-600">
                <span class="font-semibold">Instructor:</span>
                {{ $course->teacher->name }}
            </p>

            <!-- Description -->
            <div class="mt-4">
                <p class="text-slate-500 leading-relaxed">
                    {{ $course->description }}
                </p>
            </div>

            <!-- Start Date -->
            <div class="mt-5 pt-4 border-t">
                <p class="text-slate-600">
                    <span class="font-semibold">Starting At:</span>
                    {{ $course->start_date }}
                </p>
            </div>

            <!-- Button -->
            {{-- <div class="mt-6">
                <a
                    href="#"
                    class="inline-block px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition"
                >
                    View Course
                </a>
            </div> --}}

        </div>
        @endforeach

    </div>

</x-teacher-layout>