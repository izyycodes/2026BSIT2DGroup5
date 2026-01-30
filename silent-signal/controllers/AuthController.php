<?php
// require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/User.php';

class AuthController {
    private $db;
    private $user;

    // // public function __construct() {
    // //     $database = new Database();
    // //     $this->db = $database->getConnection();
    // //     $this->user = new User($this->db);
    // // }

    public function signup() {
        $pageTitle = "Signup - Silent Signal";

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get posted data
            $this->user->name = $_POST['name'];
            $this->user->email = $_POST['email'];
            $this->user->phone_number = $_POST['phone_number'];
            $this->user->role = $_POST['role'];
            $this->user->password = $_POST['password'];

            // Validate inputs
            if(empty($this->user->name) || empty($this->user->email) || 
               empty($this->user->phone_number) || empty($this->user->role) || 
               empty($this->user->password)) {
                $_SESSION['error'] = "All fields are required!";
                header("Location: ../views/signup.php");
                exit();
            }

            // Validate email format
            if(!filter_var($this->user->email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['error'] = "Invalid email format!";
                header("Location: ../views/signup.php");
                exit();
            }

            // Check if email already exists
            $this->user->email = $_POST['email'];
            if($this->user->emailExists()) {
                $_SESSION['error'] = "Email already exists!";
                header("Location: ../views/signup.php");
                exit();
            }

            // Create the user
            if($this->user->create()) {
                $_SESSION['success'] = "Registration successful! Please login.";
                header("Location: ../views/login.php");
                exit();
            } else {
                $_SESSION['error'] = "Unable to register. Please try again.";
                header("Location: ../views/signup.php");
                exit();
            }
        }

        require_once VIEW_PATH . 'signup.php';  
    }

    public function login() {
        $pageTitle = "Login - Silent Signal";

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $email_or_phone = $_POST['email_phone'];
            $password = $_POST['password'];

            // Validate inputs
            if(empty($email_or_phone) || empty($password)) {
                $_SESSION['error'] = "All fields are required!";
                header("Location: ../views/login.php");
                exit();
            }

            // Attempt login
            if($this->user->login($email_or_phone, $password)) {
                $_SESSION['user_id'] = $this->user->id;
                $_SESSION['user_name'] = $this->user->name;
                $_SESSION['user_email'] = $this->user->email;
                $_SESSION['user_role'] = $this->user->role;
                $_SESSION['success'] = "Login successful!";
                
                // Redirect to dashboard or home page
                header("Location: ../views/dashboard.php");
                exit();
            } else {
                $_SESSION['error'] = "Invalid credentials!";
                header("Location: ../views/login.php");
                exit();
            }
        }

        require_once VIEW_PATH . 'login.php';  
    }

    public function logout() {
        session_destroy();
        header("Location: ../views/login.php");
        exit();
    }
}

// Handle requests
if(isset($_GET['action'])) {
    $controller = new AuthController();
    
    switch($_GET['action']) {
        case 'signup':
            $controller->signup();
            break;
        case 'login':
            $controller->login();
            break;
        case 'logout':
            $controller->logout();
            break;
        default:
            header("Location: ../views/login.php");
            break;
    }
}
?>
