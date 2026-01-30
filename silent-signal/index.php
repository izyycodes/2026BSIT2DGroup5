<?php
// index.php - Main entry point

session_start();
require_once 'config/config.php';

$action = $_GET['action'] ?? 'home';

switch ($action) {	
    case 'home':
        require_once CONTROLLER_PATH . 'HomeController.php';
        $controller = new HomeController();
        $controller->index();
        break;

    // Auth routes - redirect to AuthController
    case 'login':
        require_once CONTROLLER_PATH . 'AuthController.php';
        $controller = new AuthController();
        $controller->login();
        break;
		
	case 'signup':
		require_once CONTROLLER_PATH . 'AuthController.php';
        $controller = new AuthController();
        $controller->signup();
        break;

    case 'logout':
        // These are handled by AuthController
        header("Location: controllers/AuthController.php?action=" . $action);
        exit();
        break;

    default:
        require_once CONTROLLER_PATH . 'HomeController.php';
        $controller = new HomeController();
        $controller->index();
        break;
}
?>