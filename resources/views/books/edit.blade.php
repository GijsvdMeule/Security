<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-100 leading-tight">
            {{ __('Edit Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('books.update', $book) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                            <input type="text" name="title" id="title" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $book->title }}" required autofocus>
                        </div>

                        <div class="mb-4">
                            <label for="author" class="block text-gray-700 text-sm font-bold mb-2">Author:</label>
                            <input type="text" name="author" id="author" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $book->author }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="author" class="block text-gray-700 text-sm font-bold mb-2">Price:</label>
                            <input type="text" name="price" id="price" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $book->price }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="author" class="block text-gray-700 text-sm font-bold mb-2">ISBN:</label>
                            <input type="text" name="isbn" id="isbn" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $book->isbn }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="published_date" class="block text-gray-700 text-sm font-bold mb-2">Published Date:</label>
                            <input type="date" name="published_date" id="published_date" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $book->published_date }}" required>
                        </div>

                        <div class="flex items-center mt-4 text-gray-900 dark:text-black">
                            <button type="submit" class="p-2 bg-gray dark:bg-gray shadow-sm sm:rounded-lg">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
