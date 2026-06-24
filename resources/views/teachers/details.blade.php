<x-teacher-layout>

    <x-slot:header>
        <h2 class="text-3xl font-bold text-slate-800">
            Teacher Details
        </h2>
    </x-slot:header>

    <div class="max-w-4xl mx-auto">

        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

            <!-- Top Section -->
            <div class="bg-blue-600 h-28"></div>

            <div class="px-8 pb-8">

                <div class="flex justify-center">
                    <img
                        src="https://i.pravatar.cc/300"
                        alt="Teacher"
                        class="w-32 h-32 rounded-full border-4 border-white object-cover -mt-16"
                    >
                </div>

                <!-- Basic Information -->
                <div class="text-center mt-4">
                    <h1 class="text-3xl font-bold text-slate-800">
                        {{ $teacher->name }}
                    </h1>

                    <p class="text-slate-500 mt-2">
                        {{ $teacher->email }}
                    </p>

                    <p class="text-slate-600 mt-2">
                        Age: {{ $teacher->age }}
                    </p>
                </div>

                <!-- Profile Information -->
                <div class="mt-10">

                    <h3 class="text-xl font-bold text-slate-800 mb-4">
                        Profile Information
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        <div class="bg-slate-100 p-4 rounded-lg">
                            <span class="font-semibold">Phone:</span>
                            {{ $teacher->profile->phone }}
                        </div>

                        <div class="bg-slate-100 p-4 rounded-lg">
                            <span class="font-semibold">Qualification:</span>
                            {{ $teacher->profile->qualification }}
                        </div>

                        <div class="bg-slate-100 p-4 rounded-lg md:col-span-2">
                            <span class="font-semibold">Address:</span>
                            {{ $teacher->profile->address }}
                        </div>

                    </div>

                </div>

                <!-- Courses -->
                <div class="mt-10">

                    <h3 class="text-xl font-bold text-slate-800 mb-4">
                        Courses
                    </h3>

                    <div class="space-y-3">

                        @foreach ($teacher->courses as $course)
                            <div class="bg-blue-50 border border-blue-100 p-4 rounded-lg">
                            {{ $course->name }}
                        </div>
                        @endforeach

                    </div>

                </div>

                <!-- Back Button -->
                <div class="mt-8">
                    <a
                        href="/teachers"
                        class="inline-block px-5 py-2 bg-slate-700 text-white rounded-lg hover:bg-slate-800 transition"
                    >
                        Back to Teachers
                    </a>
                </div>

            </div>

        </div>

    </div>

</x-teacher-layout>