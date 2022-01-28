<?php

if (isset($_POST['submit'])) {
    setcookie('username', $_POST['username']);
    setcookie('password', $_POST['password']);

    header('location: /exo4.php');
}
