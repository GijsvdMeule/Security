<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-100 leading-tight">
            {{ __('Create Book') }}
        </h2>
    </x-slot>

    <style>
        .te {
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .field {
            margin-bottom: 1rem;
        }

        .label {
            display: block;
            font-weight: bold;
        }

        .input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .input.is-danger {
            border-color: #f44336;
        }

        .help {
            margin-top: 0.25rem;
            color: #f44336;
            font-size: 0.875rem;
        }

        .button {
            padding: 0.5rem 1rem;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('books.store') }}">
                        @csrf
                        <div class="te"><h1>Books</h1></div>
                        <div class="field">
                            <label class="label" for="title">Title</label>
                            <div class="control">
                                <input class="input @error('title') is-danger @enderror" type="text"
                                       name="title" id="title" value="{{ old('title') }}">
                            </div>
                            @error('title')
                            <p class="help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="field">
                            <label class="label" for="author">Author</label>
                            <div class="control">
                                <input class="input @error('author') is-danger @enderror" type="text" name="author"
                                       id="author" value="{{ old('author') }}">
                            </div>
                            @error('author')
                            <p class="help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="field">
                            <label class="label" for="price">Price</label>
                            <div class="control">
                                <input class="input @error('price') is-danger @enderror" type="text" name="price"
                                       id="price" value="{{ old('price') }}">
                            </div>
                            @error('price')
                            <p class="help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="field">
                            <label class="label" for="isbn">ISBN</label>
                            <div class="control">
                                <input class="input @error('isbn') is-danger @enderror" type="text" name="isbn"
                                       id="isbn" value="{{ old('isbn') }}">
                            </div>
                            @error('isbn')
                            <p class="help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="field">
                            <label class="label" for="published_date">Published Date</label>
                            <div class="control">
                                <input class="input @error('published_date') is-danger @enderror" type="date"
                                       name="published_date" id="published_date" value="{{ old('published_date') }}" max="{{ date('Y-m-d') }}">
                            </div>
                            @error('published_date')
                            <p class="help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-link" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>





