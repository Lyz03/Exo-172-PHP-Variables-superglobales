<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exo 2</title>
</head>
<body>

<?php
session_start();
echo $_SESSION['surname'] . ', ' . $_SESSION['name'] . ', ' . $_SESSION['age'];
?>

</body>
</html>


