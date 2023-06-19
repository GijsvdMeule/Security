<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Api</title>
    <link rel="stylesheet" href="css/poke.css">
    <script src="js/api.js"></script>
</head>
<style>
    body {
        font-family: "American Typewriter";
        background: url({{ asset('images/df4e8ba28f912bf9cdf9fa0dfc196411.png') }});
        background-size: cover;
    }

    .container {
        background: url({{ asset('images/222-2227129_pokemon-pokedex-hd-png-download.png') }}) no-repeat center;
        background-size: 500px;
        padding: 140px;
        display: flex;
        flex-direction: row;
    }
</style>
<body>
<div class="input">
    <a href="{{ url('quiz') }}"><img id="logo" src="images/International_Pokémon_logo.svg.png" width="800" height="300"></a>
    <form>
        <label for="pname">Pokemon name</label><br>
        <input type="text" id="pname" name="pname"><br>
    </form>
</div>
<div class="container">
    <div id="poke-img">
    </div>
    <div id="poke-text">
    </div>
</div>
</body>
</html>
