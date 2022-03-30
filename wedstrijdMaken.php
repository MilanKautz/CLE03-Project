<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/milan.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <div class="title">Profiel maken</div>
    </div>
    <main>

        <form action="">
            <div class="teamName">
                <label for="Team 1">Naam Team 1:</label>
                <input id="teamOne" type="text" name="teamOne" placeholder="team 1"/>

                <label class="team" for="Team 2">Naam team 2:</label>
                <input id="teamTwo" type="text" name="teamTwo" placeholder="team 1"/>
            </div>

            <div class="data-field">
                <label for="name">Tijd</label>
                <select name="time" id="time">
                    <option value="10mins">10 Minuten</option>
                    <option value="15mins">15 Minuten</option>
                    <option value="20mins">20 Minuten</option></select>

            </div>

            <div class="data-field">
                <label for="players">Aantal spelers</label>
                <select name="players" id="players">
                    <option value="6">6 spelers</option>
                    <option value="10">10 spelers</option>
                    <option value="14">14 spelers</option></select>
            </div>

            <div class="data-field">
                <label for="date">Datum</label>
                <input name="date" id="date" type="date" placeholder="Datum">
            </div>

            <div class="data-field">
                <label for="time">Tijd</label>
                <input name="time" id="time" type="time" placeholder="Tijd">
            </div>


            <div class="data-submit">
                <input type="submit" name="submit" value="Opslaan">
            </div>
        </form>
    </main>
</div>
</body>
</html>
