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
    <link rel="manifest" href="manifest.json">
    <title>Kies je positie</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <a href="index.php"><img id="backArrow" src="img/backarrow.png" alt="back arrow"></a>
            <div class="title">Kies je positie</div>
        </header>
        <main>
            <form action="">
                <div class="data-field">
                    <label for="position">Primaire positie</label>
                    <select name="position" id="position">
                        <option value="keeper">Keeper</option>
                        <option value="aanvaller">Aanvaller</option>
                        <option value="verdediger">Verdediger</option>
                    </select>
                </div>
                <div class="data-field">
                    <label for="position">Secundaire positie</label>
                    <select name="position" id="position">
                        <option value="keeper">Keeper</option>
                        <option value="aanvaller">Aanvaller</option>
                        <option value="verdediger">Verdediger</option>
                    </select>
                </div>
                <div class="data-submit">
                    <input class="button button-confirm" type="submit" name="submit" value="Opslaan">
                </div>
            </form>
        </main>
    </div>
</body>
</html>
