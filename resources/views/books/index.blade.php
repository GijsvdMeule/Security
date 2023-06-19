<x-app-layout>
    <style>
        .margin {
            margin: 20px;
        }
    </style>
    <div class="margin text-gray-900 dark:text-gray-100">
        <a href="{{ route('books.create') }}" class="btn btn-primary p-2 bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">Create New Book</a>
    </div>

    <table class="table is-fullwidth">
        <thead>
        <tr>
            <th class="text-gray-900 dark:text-gray-100" style="width: 10%; text-align: left">ID</th>
            <th class="text-gray-900 dark:text-gray-100" style="width: 20%; text-align: left">Title</th>
            <th class="text-gray-900 dark:text-gray-100" style="width: 20%; text-align: left">Author</th>
            <th class="text-gray-900 dark:text-gray-100" style="width: 10%; text-align: left">Price</th>
            <th class="text-gray-900 dark:text-gray-100" style="width: 20%; text-align: left">ISBN</th>
            <th class="text-gray-900 dark:text-gray-100" style="width: 20%; text-align: left">Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)

            <tr>
                <td class="text-gray-900 dark:text-gray-100" >{{ $book->id }}</td>
                <td class="text-gray-900 dark:text-gray-100">
                    <a href="{{ route('books.show', $book) }}">{{ $book->title }}, </a>
                </td>
                <td class="text-gray-900 dark:text-gray-100" >{{ $book->author }}</td>
                <td class="text-gray-900 dark:text-gray-100" >{{ $book->price }}</td>
                <td class="text-gray-900 dark:text-gray-100" >{{ $book->isbn }}</td>
                <td class="text-gray-900 dark:text-gray-100" >{{ $book->published_date}}</td>
                <td>
                    <form class="text-gray-900 dark:text-gray-100" method="POST" action="{{ route('books.destroy', $book) }}" onsubmit="return confirm('Are you sure you want to delete this book?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary p-2 bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>

