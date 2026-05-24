<x-layout>

    <x-slot:title>
        Home
    </x-slot:title>

    <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach ($users as $user)

            <div class="bg-[#1e293b] border border-slate-700 rounded-2xl p-8 shadow-lg hover:scale-105 hover:border-blue-500 transition duration-300">

                {{-- User ID --}}
                <div class="mb-4">
                    <span class="text-sm text-slate-400">
                        User ID
                    </span>

                    <h2 class="text-2xl font-bold text-white">
                        #{{ $user['id'] }}
                    </h2>
                </div>


                {{-- Name --}}
                <div class="mb-4">
                    <p class="text-slate-400 text-sm">
                        Name
                    </p>

                    <h1 class="text-3xl font-bold text-blue-400">
                        {{ $user['name'] }}
                    </h1>
                </div>


                {{-- Email --}}
                <div class="mb-4">
                    <p class="text-slate-400 text-sm">
                        Email
                    </p>

                    <p class="text-white break-all">
                        {{ $user['email'] }}
                    </p>
                </div>


                {{-- Role --}}
                <div class="flex items-center justify-between mt-6">

                    <span class="bg-blue-600/20 text-blue-400 px-4 py-2 rounded-full text-sm border border-blue-500/30">
                        {{ $user['role'] }}
                    </span>

                    <a href="/profile/{{ $user->id }}">
                        <button  class="bg-slate-800 hover:bg-slate-700 px-4 py-2 rounded-lg text-sm transition">
                        View Profile
                    </button>
                    </a>

                </div>

            </div>

        @endforeach

    </div>

</x-layout>