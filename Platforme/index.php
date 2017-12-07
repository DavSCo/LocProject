<?php
require_once('Models/dbconn.php');
require_once('Models/UserSQL.php');

if (!isset($_GET['p']) OR $_GET['p'] === 'index') {
    require_once('Controllers/homeController.php');
} elseif (isset($_GET['p']) AND $_GET['p'] === 'signin') {
    require_once('Controllers/SignInController.php');
} elseif (isset($_GET['p']) AND $_GET['p'] === 'addLocal') {
    require_once('Controllers/addLocalController.php');
}elseif (isset($_GET['p']) AND $_GET['p'] === 'connection') {
    require_once('Controllers/connectionController.php');
}elseif (isset($_GET['p']) AND $_GET['p'] === 'admin_user') {
    require_once('Controllers/updateController.php');
}elseif (isset($_GET['p']) AND $_GET['p'] === 'deconnection') {
    require_once('Controllers/deconnectionController.php');
}elseif (isset($_GET['p']) AND $_GET['p'] === 'delete_user') {
    require_once('Controllers/deleteUserControllers.php');
}

