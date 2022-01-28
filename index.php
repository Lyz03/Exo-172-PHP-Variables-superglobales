<?php session_start();
$_SESSION['surname'] = 'surname';
$_SESSION['name'] = 'name';
$_SESSION['age'] = 'age';
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exo 172</title>
</head>
<body>

<a href="/exo1.php">exo 1</a>
<a href="/exo2.php"> exo 2</a>

<form action="/exo3.php" method="post">
    <div>
        <label for="username">username</label>
        <input id="username" type="text" name="username">
    </div>
    <div>
        <label for="password">password</label>
        <input id="password" type="password" name="password">
    </div>
    <input type="submit" name="submit">
</form>

</body>
</html>
