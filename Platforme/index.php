<?php
ini_set('display_errors', 1);
require_once('Models/dbconn.php');
require_once('Models/UserSQL.php');

if (!isset($_GET['p']) OR $_GET['p'] === 'index') {
    require_once('Controllers/homeController.php');
} else if (isset($_GET['p']) AND $_GET['p'] === 'signin') {
    require_once('Controllers/SignInController.php');
}