<?php session_start() ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exo 1</title>
</head>
<body>

<?php
    echo $_SERVER['HTTP_USER_AGENT'] . '<br>' . $_SERVER['REMOTE_ADDR'] . '<br>' . $_SERVER['SERVER_NAME'];
?>

</body>
</html>

