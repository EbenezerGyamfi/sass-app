<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create Talks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form
                        action="{{ route('talks.store') }}"
                        method="POST"
                        class="mx-auto max-w-lg rounded-lg bg-white p-4 shadow-md"
                    >
                        <!-- Title -->
                        @csrf
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input
                                type="text"
                                id="title"
                                name="title"
                                class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            />
                            <x-input-error :messages="$errors->get('title')" />
                        </div>

                        <!-- Length -->
                        <div class="mb-4">
                            <label for="length" class="block text-sm font-medium text-gray-700">Length</label>
                            <input
                                type="text"
                                id="length"
                                name="length"
                                class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            />
                            <x-input-error :messages="$errors->get('length')" />
                        </div>

                        <!-- Type -->
                        <div class="mb-4">
                            <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                            <select
                                id="type"
                                name="type"
                                class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            >
                                <option value="lightning">Lightning</option>
                                <option value="standard">Standard</option>
                                <option value="keynote">Keynote</option>
                            </select>
                            <x-input-error :messages="$errors->get('type')" />
                        </div>

                        <!-- Abstract -->
                        <div class="mb-4">
                            <label for="abstract" class="block text-sm font-medium text-gray-700">Abstract</label>
                            <textarea
                                id="abstract"
                                name="abstract"
                                rows="4"
                                class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            ></textarea>
                            <x-input-error :messages="$errors->get('abstract')" />
                        </div>

                        <!-- Organizer Notes -->
                        <div class="mb-4">
                            <label for="organizer_notes" class="block text-sm font-medium text-gray-700">
                                Organizer Notes
                            </label>
                            <textarea
                                id="organizer_notes"
                                name="organizer_notes"
                                rows="4"
                                class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            ></textarea>
                            <x-input-error :messages="$errors->get('organiser_notes')" />
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button
                                type="submit"
                                class="w-full rounded-md bg-red-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            >
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
