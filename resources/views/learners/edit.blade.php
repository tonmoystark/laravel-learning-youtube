<x-layout>

<x-slot:title>
    Edit Learner
</x-slot:title>

<h1 class="text-3xl font-bold mb-6">
    Edit Learner
</h1>

<form action="/learner/update/{{ $learner->id }}" method="POST" class="bg-white p-6 rounded-lg shadow space-y-4">

    @csrf

    <div>
        <label class="block mb-2 font-medium">
            Name
        </label>

        <input
            type="text"
            name="name"
            value="{{ $learner->name }}"
            class="w-full border rounded-lg px-4 py-2"
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
            value="{{ $learner->email }}"
            class="w-full border rounded-lg px-4 py-2"
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
            value="{{ $learner->age }}"
            class="w-full border rounded-lg px-4 py-2"
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
            value="{{ $learner->score }}"
            class="w-full border rounded-lg px-4 py-2"
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
            <option value="M" {{ $learner->gender == 'M' ? 'selected' : '' }}>
                Male
            </option>

            <option value="F" {{ $learner->gender == 'F' ? 'selected' : '' }}>
                Female
            </option>
        </select>
    </div>

    <button
        type="submit"
        class="bg-yellow-500 text-white px-6 py-2 rounded-lg hover:bg-yellow-600"
    >
        Update Learner
    </button>

</form>

</x-layout>
