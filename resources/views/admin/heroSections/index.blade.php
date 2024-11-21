<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hero Section') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold">List of Hero Sections</h3>
                        <a href="{{ route('admin.heroSections.create') }}"
                            class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                            Add New
                        </a>
                    </div>
                    <table class="min-w-full border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border border-gray-300 px-4 py-2 text-left">Title</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Subtitle</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Image</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($heroSections as $hero)
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">{{ $hero->title }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $hero->subtitle }}</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <img src="{{ asset('storage/' . $hero->image) }}" alt="{{ $hero->title }}"
                                            class="w-20 h-20 object-cover rounded">
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <div class="flex gap-2">
                                            <a href="{{ route('admin.heroSections.edit', $hero->id) }}"
                                                class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                                                Edit
                                            </a>
                                            <form action="{{ route('admin.heroSections.destroy', $hero->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this item?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-4 text-gray-500">
                                        No Hero Sections Found.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $heroSections->links() }} <!-- Pagination links -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
