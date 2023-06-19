<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500 Internal Server Error</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
            padding: 50px;
        }

        h1 {
            font-size: 48px;
            margin-bottom: 30px;
            color: #333;
        }

        p {
            font-size: 18px;
            margin-bottom: 30px;
            color: #666;
        }

        .pokemon-img {
            max-width: 300px;
            margin-bottom: 30px;
        }

        .retry-button {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .retry-button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
<h1>500 Internal Server Error</h1>
<p>Oops! It looks like mewtwo attacked our server and destroyed it completely</p>
<img class="pokemon-img" src="{{ asset('images/mewtwo-pokemon2.gif') }}" alt="Pokémon">
<p>We apologize for the inconvenience. Please try again later.</p>
<a class="retry-button" href="{{ url('/dashboard') }}">Go to dashboard</a>
</body>
</html>
