<x-teacher-layout>

    <x-slot:header>
        <h2 class="text-3xl font-bold text-slate-800">
            Teachers
        </h2>
    </x-slot:header>

    <div class="flex flex-wrap justify-center gap-8">

        @foreach ($teachers as $teacher)
            <div class="w-72 bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">

            <!-- Cover -->
            <div class="h-20 bg-blue-600"></div>

            <!-- Profile Image -->
            <div class="flex justify-center">
                <img
                    src="https://i.pravatar.cc/300"
                    alt="Teacher"
                    class="w-24 h-24 rounded-full border-4 border-white object-cover -mt-12"
                >
            </div>

            <!-- Teacher Info -->
            <div class="p-6 text-center">

                <h3 class="text-xl font-bold text-slate-800">
                    {{ $teacher->name }}
                </h3>

                <p class="text-slate-500 mt-2">
                    {{ $teacher->email }}
                </p>

                <p class="text-slate-600 mt-2">
                    Age: {{ $teacher->age }}
                </p>

                <a
                    href="/teacher/{{ $teacher->id }}"
                    class="inline-block mt-5 px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition"
                >
                    View Details
                </a>

            </div>

        </div>
        @endforeach

    </div>

</x-teacher-layout>