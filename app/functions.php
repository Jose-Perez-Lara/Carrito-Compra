<?php
include_once("./app/functions.php");
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
