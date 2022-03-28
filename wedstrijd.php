<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/diego.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script type="text/javascript" src="js/diego.js"></script>
    <title>Wedstrijd</title>
</head>
<body>
    <div id="sideMenuWrapper" class="sideMenuWrapper">
        <div id="sideMenu" class="sideMenu">
            <a href="#">Wedstrijd maken</a>
            <a href="#">Profiel bewerken</a>
            <a href="#">Wedstrijd beheren</a>
            <a href="#">Instellingen</a>
        </div>
    </div>
    <div id="wrapper" class="wrapper">
        <div class="header">
            <img id="menuButton" src="img/backarrow.png" alt="back arrow">
            <div class="title">Wedstrijd</div>
        </div>
        <main>
            <div class="score">
                1 - 0
            </div>
            <div class="teamVs">
                Team 1 vs Team 2
            </div>
            <div class="formation">
                <div id="aanvallerLinks" class="aanvaller">1</div>
                <div id="aanvallerRechts" class="aanvaller">2</div>
                <div id="verdedigerLinks" class="verdediger">3</div>
                <div id="verdedigerMidden" class="verdediger">4</div>
                <div id="verdedigerRechts" class="verdediger">5</div>
                <div id="keeper" class="keeper">6</div>
            </div>
            <div class="formationNames">
                <div class="formationName">#1 Speler 1</div>
                <div class="formationName">#2 Speler 2</div>
                <div class="formationName">#3 Speler 3</div>
                <div class="formationName">#4 Speler 4</div>
                <div class="formationName">#5 Speler 5</div>
                <div class="formationName">#6 Speler 6</div>
            </div>
        </main>
    </div>
</body>
</html>