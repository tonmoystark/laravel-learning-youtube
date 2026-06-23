<x-layout>

    <div class="flex flex-wrap justify-center gap-8">

        @foreach ($students as $student)

            <div class="w-72 bg-white rounded-2xl shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">

                <div class="bg-blue-500 h-20"></div>

                <div class="px-6 pb-6">

                    <img
                        src="https://i.pravatar.cc/300?u={{ $student->id }}"
                        alt="Student"
                        class="w-24 h-24 rounded-full border-4 border-white object-cover mx-auto -mt-12"
                    >

                    <div class="text-center mt-4">

                        <h2 class="text-xl font-bold text-gray-800">
                            {{ $student->name }}
                        </h2>

                        <p class="text-gray-500 text-sm mt-1">
                            {{ $student->email }}
                        </p>

                        <p class="text-gray-600 text-sm mt-2">
                            Age: {{ $student->age }}
                        </p>

                    </div>

                    <div class="mt-5 flex justify-center">

                        <a
                            href="/student/{{ $student->id }}"
                            class="px-5 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition"
                        >
                            View Details
                        </a>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

</x-layout>