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
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <a href="index.php"><img src="img/backarrow.png" alt="back arrow"></a>
            <div class="title">Profiel maken</div>
        </div>
        <main>
            <form action="">
                <div class="data-field">
                    <img src="img/default-avatar.png" alt="Profiel foto">
                    <label for="image">Profiel foto</label>
                    <input type="file" name="image" id="image">
                </div>
                <div class="data-field">
                    <label for="name">Naam</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="data-field">
                    <label for="position">Positie</label>
                    <select name="position" id="position">
                        <option value="keeper">Keeper</option>
                        <option value="aanvaller">Aanvaller</option>
                        <option value="verdediger">Verdediger</option>
                    </select>
                </div>
                <div class="data-submit">
                    <input type="submit" name="submit" value="Opslaan">
                </div>
            </form>
        </main>
    </div>
</body>
</html>
