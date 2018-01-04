<?php
ini_set('display_errors', 1);
require_once('Models/dbconn.php');
require_once('Models/UserSQL.php');
require_once('Models/LocalSQL.php');
require_once ('Models/VendeurSQL.php');


if (!isset($_GET['p']) OR $_GET['p'] === 'index') {
    require_once('Controllers/homeController.php');
} elseif (isset($_GET['p']) AND $_GET['p'] === 'join') {
    require_once('Controllers/joinController.php');
} elseif (isset($_GET['p']) AND $_GET['p'] === 'addLocal') {
    require_once('Controllers/addLocalController.php');
}elseif (isset($_GET['p']) AND $_GET['p'] === 'Connection') {
    require_once('Controllers/connectionController.php');
}elseif (isset($_GET['p']) AND $_GET['p'] === 'admin_user') {
    require_once('Controllers/navAdminController.php');
}elseif (isset($_GET['p']) AND $_GET['p'] === 'deconnection') {
    require_once('Controllers/deconnectionController.php');
}elseif (isset($_GET['p']) AND $_GET['p'] === 'delete_user') {
    require_once('Controllers/deleteUserControllers.php');
}elseif (isset($_GET['p']) AND $_GET['p'] === 'joinVendeur') {
    require_once('Controllers/joinVendeurController.php');
}elseif (isset($_GET['p']) AND $_GET['p'] === 'addLocal') {
    require_once('Controllers/addLocalController.php');
} elseif (isset($_GET['p']) AND $_GET['p'] === 'localUser') {
    require_once('Controllers/afficherLocalController.php');
}elseif (isset($_GET['p']) AND $_GET['p'] === 'addLocal') {
    require_once('Controllers/addLocalController.php');
} elseif (isset($_GET['p']) AND $_GET['p'] === 'deconnectionController') {
    require_once('Controllers/deconnectionController.php');
} elseif (isset($_GET['p']) AND $_GET['p'] === 'listLoc') {
    require_once('Controllers/listLocController.php');
} elseif (isset($_GET['p']) AND $_GET['p'] === 'productDetail') {
    require_once('Controllers/productDetailController.php');
} elseif (isset($_GET['p']) AND $_GET['p'] === 'rentPage') {
    require_once('Controllers/rentPageController.php');
}elseif (isset($_GET['p']) AND $_GET['p'] === 'paymentPage') {
    require_once('Controllers/paymentPageController.php');
}elseif (isset($_GET['p']) AND $_GET['p'] === 'adminVendeur') {
    require_once('Controllers/updateVendeurController.php');
}elseif (isset($_GET['p']) AND $_GET['p'] === 'delete_vendeur') {
    require_once('Controllers/deleteVendeurController.php');
}elseif (isset($_GET['p']) AND $_GET['p'] === 'localVendeur') {
    require_once('Controllers/afficherLocalVendeurController.php');
}elseif (isset($_GET['p']) AND $_GET['p'] === 'updateUsers') {
    require_once('Controllers/updateController.php');
}elseif (isset($_GET['p']) AND $_GET['p'] === 'acceuilleUsers') {
    require_once('Controllers/acceuilleUsersController.php');
}




