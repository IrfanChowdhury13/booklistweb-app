<section class="py-20">
    <div class="container mx-auto">
        <!-- Header -->
        <div class="w-1/2 mx-auto mb-8 flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Hi! {{ $name }}</h1>
                <p class="text-lg text-gray-600 mt-2">You have {{ $books->count() }} books in your list.</p>
            </div>
            <div class="w-6/12 text-right">
                <input type="text" wire:model.live.debounce.300ms="term" placeholder="Search for books..."
                    class="border border-gray-300 rounded-lg p-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
        </div>
        <!-- Search Bar -->
        <!-- Book Grid -->
        <div class="w-1/2 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Book Card -->

                @foreach ($books as $book)
                    <div wire:key="{{ $book->id }}" class="bg-slate-300 shadow rounded-xl p-6">
                        <h2 class="text-xl font-semibold text-blue-600">
                            {{ $book->name }}
                        </h2>
                        <p class="text-gray-700 mt-2">Author: <span class="font-medium">
                                {{ $book->author }}
                            </span></p>
                        <p class="text-gray-700 mt-1">Rating: ⭐ {{ $book->rating }}/5</p>
                        <button wire:click="delete({{ $book->id }})"
                            class="bg-red-400 text-white px-4 py-2 rounded-lg flex justify-self-end">
                            Delete
                        </button>
                    </div>
                @endforeach






            </div>
        </div>
    </div>

</section>
