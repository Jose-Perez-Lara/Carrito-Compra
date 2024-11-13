<?php
include_once("./app/functions.php");
include_once("./app/vars.php");
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}

if (isset($_POST['productosUser']) && !empty($_POST['productosUser'])) {
    foreach ($_POST['productosUser'] as $key => $value) {
        $_SESSION['productosUser'][$key] += $value;
    }
}

$tableBody = getTableMarkUp($productos);
include_once("./templates/templateIndex.php");
