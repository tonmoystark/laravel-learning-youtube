<x-layout>

    <x-slot:title>
        Profile
    </x-slot:title>

    <div class="max-w-3xl mx-auto py-16 px-6">

        <div class="bg-[#1e293b] border border-slate-700 rounded-3xl p-10 shadow-2xl">

            {{-- Top Section --}}
            <div class="flex items-center gap-6 mb-10">

                <div class="w-24 h-24 rounded-full bg-blue-600 flex items-center justify-center text-4xl font-bold">
                    {{ strtoupper(substr($user->name, 0, 1)) }}
                </div>

                <div>
                    <h1 class="text-4xl font-bold text-white">
                        {{ $user->name }}
                    </h1>

                    <p class="text-slate-400 mt-2">
                        {{ $user->email }}
                    </p>
                </div>

            </div>


            {{-- Info Section --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div class="bg-slate-800 p-6 rounded-2xl">
                    <p class="text-slate-400 text-sm mb-2">
                        User ID
                    </p>

                    <h2 class="text-2xl font-bold text-white">
                        #{{ $user->id }}
                    </h2>
                </div>


                <div class="bg-slate-800 p-6 rounded-2xl">
                    <p class="text-slate-400 text-sm mb-2">
                        Role
                    </p>

                    <h2 class="text-2xl font-bold text-blue-400">
                        {{ $user->role }}
                    </h2>
                </div>

            </div>


            {{-- Back Button --}}
            <div class="mt-10">

                <a href="/"
                   class="inline-block bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-xl transition">
                    Back To Home
                </a>

            </div>

        </div>

    </div>

</x-layout>