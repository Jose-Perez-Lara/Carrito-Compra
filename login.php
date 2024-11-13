<?php
session_start();
include_once("./app/vars.php");

if ((isset($_POST['username']) && !empty($_POST['username'])) && (isset($_POST['passwd']) && !empty($_POST['passwd']))) {

    if (($_POST['username'] == $username) && ($_POST['passwd'] == $passwd)) {
        $_SESSION['user'] = $_POST['username'];
        header("Location: index.php");
    } else {
        echo "Contraseña incorrecta";
    }
}

include_once("./templates/templateLogin.php");
