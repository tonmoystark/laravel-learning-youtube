<x-layout>

<x-slot:title>
    Trash
</x-slot:title>

<div class="overflow-x-auto bg-white rounded-lg shadow">

    <table class="w-full">

        <thead class="bg-slate-900 text-white">
            <tr>
                <th class="px-4 py-3 text-left">Name</th>
                <th class="px-4 py-3 text-left">Email</th>
                <th class="px-4 py-3 text-left">Age</th>
                <th class="px-4 py-3 text-left">Score</th>
                <th class="px-4 py-3 text-left">Gender</th>
                <th class="px-4 py-3 text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($learners as $learner) <tr class="border-b hover:bg-slate-100 transition">

    <td class="px-4 py-3">
        {{ $learner->name }}
    </td>

    <td class="px-4 py-3">
        {{ $learner->email }}
    </td>

    <td class="px-4 py-3 text-center">
        {{ $learner->age }}
    </td>

    <td class="px-4 py-3 text-center">
        {{ $learner->score }}
    </td>

    <td class="px-4 py-3 text-center">
        {{ $learner->gender }}
    </td>
    <td class="px-4 py-3 flex gap-2 justify-center">
       <a 
       href="/learner/retrieve/{{ $learner->id }}" 
       class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-md text-sm" 
       > 
            Retrieve 
        </a> 
       <a 
       href="/learner/permanent-delete/{{ $learner->id }}" 
       class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-sm" 
       > 
            Delete 
        </a>
    </td>
</tr>
@endforeach

        </tbody>

    </table>
    @if($learners->isEmpty())
        <div>
            <h1 class="text-3xl text-center my-2 font-bold ">
                No Data in the trash
            </h1>
        </div>
    @endif
</div>

</x-layout>