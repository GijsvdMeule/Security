<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page Not Found</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(198 179 211);
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

        .home-button {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .home-button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
<h1>404 Page Not Found</h1>
<p>Ditto, the versatile Pokémon known for its ability to transform into any other Pokémon, has taken on a new disguise
    as a web page, seamlessly mimicking the appearance and
    content of a real website but unfortunately this is not a real page. </p>
<img class="pokemon-img" src="{{ asset('images/7AAc.gif') }}" alt="Pokémon">
<p>Return to the homepage.</p>
<a class="home-button" href="{{ url('/dashboard') }}">Go to dashboard</a>
</body>
</html>
