<?php
// controllers/HomeController.php

class HomeController {
    
    public function index() {
        // Load any data needed for the home page
        $pageTitle = "Home - Silent Signal";
        $pageDescription = "Emergency Communication Made Accessible for the Deaf and Mute";
        
        // Load the view
        require_once VIEW_PATH . 'home.php';
    }
    
    public function submitContact() {
        // Handle contact form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $subject = $_POST['subject'] ?? '';
            $message = $_POST['message'] ?? '';
            
            // Here you would process the form data
            // For now, we'll just redirect back
            header('Location: ' . BASE_URL . '?success=1');
            exit;
        }
    }
}
?>