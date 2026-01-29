<?php
// index.php - Main entry point
require_once 'config/config.php';
require_once CONTROLLER_PATH . 'HomeController.php';

$controller = new HomeController();

$page = $_GET['page'] ?? 'home';

switch ($page) {	
    case 'login':
        require VIEW_PATH . 'login.php';
        break;
		
	case 'signup':
		require VIEW_PATH . 'signup.php';
		break;

    default:
        $controller->index();
        break;
}
?>