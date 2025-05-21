<div class="max-w-xl mx-auto p-6 bg-white rounded-2xl shadow-md mt-10">
  <h2 class="text-2xl font-bold mb-4 text-gray-800">Add a New Book</h2>

  <form wire:submit="save">
    <!-- Book Name -->
    <div class="mb-4">
      <label for="name" class="block text-gray-700 font-medium mb-1">Book Name</label>
      <input
        type="text"
        wire:model="name"
        id="name"
        name="name"
        placeholder="Enter book name"
        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
      />
      @error('name')
        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
      @enderror
    </div>
 
    <!-- Author -->
    <div class="mb-4">
      <label for="author" class="block text-gray-700 font-medium mb-1">Author</label>
      <input
        type="text"
        wire:model="author"
        id="author"
        name="author"
        placeholder="Enter author name"
        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
      />
      @error('author')
        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>       
      @enderror
    </div>

    <!-- Rating -->
    <div class="mb-4">
      <label for="rating" class="block text-gray-700 font-medium mb-1">Rating</label>
      <input
        type="number"
        wire:model="rating"
        id="rating"
        name="rating"
        min="0"
        max="5"
        step="0.1"
        placeholder="0 to 5"
        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
      />
      @error('rating')
        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>   
      @enderror
    </div>

    <!-- Submit Button -->
    <div class="mt-6">
      <button
        type="submit"
        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg transition duration-200"
      >
        Add Book
      </button>
    </div>
  </form>
</div>