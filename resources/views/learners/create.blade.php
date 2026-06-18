<x-layout>

    <x-slot:title>
        Add New Learner
    </x-slot:title>

<h1 class="text-3xl font-bold mb-6">
    Add New Learner
</h1>

<form action="{{ URL('/learner/add') }}" method="POST" class="bg-white p-6 rounded-lg shadow space-y-4">

    @csrf

    <div>
        <label class="block mb-2 font-medium">
            Name
        </label>

        <input
            type="text"
            name="name"
            class="w-full border rounded-lg px-4 py-2"
            placeholder="Enter learner name"
            required
        >
    </div>

    <div>
        <label class="block mb-2 font-medium">
            Email
        </label>

        <input
            type="email"
            name="email"
            class="w-full border rounded-lg px-4 py-2"
            placeholder="Enter learner email"
            required
        >
    </div>

    <div>
        <label class="block mb-2 font-medium">
            Age
        </label>

        <input
            type="number"
            name="age"
            class="w-full border rounded-lg px-4 py-2"
            placeholder="Enter age"
            required
        >
    </div>

    <div>
        <label class="block mb-2 font-medium">
            Score
        </label>

        <input
            type="number"
            name="score"
            class="w-full border rounded-lg px-4 py-2"
            placeholder="Enter score"
            required
        >
    </div>

    <div>
        <label class="block mb-2 font-medium">
            Gender
        </label>

        <select
            name="gender"
            class="w-full border rounded-lg px-4 py-2"
            required
        >
            <option value="">Select Gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select>
    </div>

    <button
        type="submit"
        class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700"
    >
        Add Learner
    </button>

</form>

</x-layout>
