<?php
include_once("./app/functions.php");
include_once("./app/vars.php");
session_start();

if (isset($_POST['productosUser']) && !empty($_POST['productosUser'])) {
    $_SESSION['productosUser'] = $_POST['productosUser'];
}
$userTable = getTableMarkUp($productos, $_SESSION['productosUser']);

include_once("./templates/templateUser.php");
