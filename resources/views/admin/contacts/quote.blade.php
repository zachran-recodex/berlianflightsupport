<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Quote Details
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-col justify-between space-y-4">
                        <div class="">
                            <span class="font-semibold">Name:</span>
                            <span>{{ $quote->name }}</span>
                        </div>

                        <div class="">
                            <span class="font-semibold">Email:</span>
                            <span>{{ $quote->email }}</span>
                        </div>

                        <div class="">
                            <span class="font-semibold">Phone:</span>
                            <span>{{ $quote->phone }}</span>
                        </div>

                        <div class="">
                            <span class="font-semibold">Service:</span>
                            <span>{{ $quote->service->title }}</span>
                        </div>

                        <div class="flex flex-col">
                            <span class="font-semibold">Message:</span>
                            <span>{{ $quote->message }}</span>
                        </div>

                    </div>
                    <div class="mt-6 flex gap-4 justify-end">
                        <a href="{{ route('admin.contacts.index') }}"
                            class="bg-blue-500 px-5 py-2 rounded text-white hover:underline">
                            Back
                        </a>
                        <form action="{{ route('admin.quotes.destroy', $quote->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this item?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 px-5 py-2 rounded text-white hover:underline">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
