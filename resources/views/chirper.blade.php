<x-layout>
    <x-slot:title>
        Chirper
    </x-slot:title>
    <div class="w-6xl mx-auto px-6 py-12 gap-4">

        @foreach ($messages as $message)
            <div class="bg-[#1e293b] border border-slate-700 rounded-2xl p-8 shadow-lg hover:scale-105 hover:border-blue-500 transition duration-300">

                {{-- User ID --}}
                <div class="mb-4">

                    <h2 class="text-2xl font-bold text-white">
                        {{ $message->user->name }}
                    </h2>
                </div>
                {{-- Name --}}
                <div class="mb-4">
                    <h1 class="text-3xl font-bold text-blue-400">
                        {{ $message->$user_id }}
                    </h1>
                </div>


                {{-- Role --}}
                <div class="flex items-center justify-between mt-6">
                   
                </div>

            </div>
        @endforeach
            


    </div>
</x-layout>