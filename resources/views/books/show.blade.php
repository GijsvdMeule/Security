<x-app-layout>
    <style>
        .margin {
            margin: 20px;
        }
    </style>    <h1 class="p-6 text-gray-900 dark:text-gray-100">{{ $book->title }}</h1>
    <h2 class="p-6 text-gray-900 dark:text-gray-100">{{ $book->id }}</h2>
    <h2 class="p-6 text-gray-900 dark:text-gray-100">{{ $book->author }}</h2>
    <h2 class="p-6 text-gray-900 dark:text-gray-100">{{ $book->published_date}}</h2>

    <div class="field is-grouped">
        <div class="control margin">
            <a class="button is-link p-2 shadow-sm sm:rounded-lg
            text-gray-100 bg-gray-500" href="{{ route('books.edit', $book) }}">Edit</a>
        </div>
        <div class="control margin">
            <a class="button is-link p-2 shadow-sm sm:rounded-lg
            text-gray-100 bg-gray-500 m-10 inline-block" href="{{ route('books.index') }}">Back</a>
        </div>
    </div>
</x-app-layout>
