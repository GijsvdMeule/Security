<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Api</title>
    <link rel="stylesheet" href="css/quiz.css">
    <script src="js/quiz.js"></script>

    <style>
        body {
            font-family: "American Typewriter";
            background: url({{ asset('images/df4e8ba28f912bf9cdf9fa0dfc196411.png') }});
            background-size: cover;
        }
    </style>
</head>
<body>
<div class="input">
    <a href="{{url('pokemon')}}"><img id="logo" src="images/International_Pokémon_logo.svg.png" width="800" height="300"></a>
    <form id="form" onsubmit="return false;">
            <label for="userInput">Pokemon name</label><br>
            <input type="text" id="userInput"/>
            <input class="btn" type="submit" onclick="othername();" value="submit"/>
    </form>
</div>
<div class="container">
    <div id="poke-img">
    </div>
</div>
<button id="resetButton">Reset Game</button>
</body>
</html>
