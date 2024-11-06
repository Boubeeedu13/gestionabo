<?php
// index.php


require_once 'controllers/AccountController.php';
require_once 'controllers/PlatformController.php';
require_once 'controllers/ServiceController.php';

$action = $_GET['action'] ?? 'list_accounts';
$controller = new AccountController();

switch ($action) {
    case 'list_accounts':
        $controller->list();
        break;
    case 'add_account':
        $controller->add();
        break;
    case 'create_account':
        $controller = new AccountController();
        $controller->create();
        break;
    case 'list_accounts':
        $controller = new AccountController();
        $controller->list();
        break;
    case 'create_platform':
        $controller = new PlatformController();
        $controller->create();
        break;
    case 'list_platforms':
        $controller = new PlatformController();
        $controller->list();
        break;
    case 'create_service':
        $controller = new ServiceController();
        $controller->create();
        break;
    case 'list_services':
        $controller = new ServiceController();
        $controller->list();
        break;
    default:
        echo "Action inconnue.";
}
?>
