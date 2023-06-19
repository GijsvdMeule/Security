<x-app-layout>
    <link rel="stylesheet" href="css/dashboard.css">
    <style>
        .container {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .pokemon-button {
            background: url({{ asset('images/app.png') }});
            background-size: cover;
            background-position: center;
            padding: 250px;
            margin-right: 180px;
        }

        .crud-button {
            background: url({{ asset('images/books.png') }});
            background-position: left;
            background-size: cover;
            padding: 250px;
            margin-left: 180px;
        }

        .button-container {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .test4-button {
            padding: 5px;
            margin-top: 10px;
            margin-left: 390px;
        }

        .test5-button {
            padding: 5px;
            margin-top: 10px;
            margin-right: 390px;
        }


    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcome, you can choose what to do below") }}
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <a href="{{url('books')}}">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg crud-button"></div>
        </a>
        <a href="{{url('pokemon')}}">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg pokemon-button"></div>
        </a>
    </div>
    <div class="button-container">
        <a href="{{url('booksa')}}">
            <button class="bg-white dark:bg-white-800 overflow-hidden shadow-sm sm:rounded-lg test4-button">trigger 404</button>
        </a>
        <a href="{{url('error500')}}" >
            <button class="bg-white dark:bg-white-800 overflow-hidden shadow-sm sm:rounded-lg test5-button">trigger 500</button>
        </a>
    </div>
</x-app-layout>
