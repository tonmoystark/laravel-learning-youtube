<x-layout>

    <div class="max-w-2xl mx-auto">

        <div class="bg-white rounded-xl shadow-md p-8">

            <div class="flex flex-col items-center">

                <img
                    src="https://i.pravatar.cc/300"
                    alt="Student"
                    class="w-32 h-32 rounded-full object-cover"
                >

                <h1 class="text-3xl font-bold mt-4">
                    {{ $student->name }}
                </h1>

            </div>

            <div class="mt-8 space-y-4">

                <div class="border-b pb-2">
                    <span class="font-semibold">Email:</span>
                    {{ $student->email }}
                </div>

                <div class="border-b pb-2">
                    <span class="font-semibold">Age:</span>
                    {{ $student->age }}
                </div>

                <div class="border-b pb-2">
                    <span class="font-semibold">Phone:</span>
                    {{ $student->profile->phone }}
                </div>

                <div class="border-b pb-2">
                    <span class="font-semibold">Address:</span>
                    {{ $student->profile->address }}
                </div>

                <div class="border-b pb-2">
                    <span class="font-semibold">Guardian Name:</span>
                    {{ $student->profile->guardian_name }}
                </div>

            </div>

            <div class="mt-8">
                <a
                    href="/students"
                    class="inline-block bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700"
                >
                    Back to Students
                </a>
            </div>

        </div>

    </div>

</x-layout>