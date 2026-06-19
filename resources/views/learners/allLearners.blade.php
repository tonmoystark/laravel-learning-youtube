<x-slot>
    <title>Learners Management</title>
</x-slot>
<x-layout>

<div class="mb-6">
    <h1 class="text-3xl font-bold mb-4">
        Learners Management
    </h1>

    <form class="flex gap-3" action="{{ URL('learner') }}" method="GET">
        <input
            type="text"
            placeholder="Search learners..."
            class="border px-4 py-2 rounded-lg w-full"
            name="search"
            id="search"
        >

        <button
            type="submit"
            class="bg-blue-600 text-white px-5 py-2 rounded-lg"
        >
            Search
        </button>
    </form>
</div>

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
       href="/learner/edit/{{ $learner->id }}" 
       class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-md text-sm" 
       > 
            Edit 
        </a> 
       <a 
       href="/learner/delete/{{ $learner->id }}" 
       class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-sm" 
       > 
            Delete 
        </a>
    </td>
</tr>
@endforeach

        </tbody>

    </table>

</div>
</x-layout>
