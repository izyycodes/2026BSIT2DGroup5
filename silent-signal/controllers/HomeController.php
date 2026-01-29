<?php
// controllers/HomeController.php

class HomeController {
    
    public function index() {
        // Load any data needed for the home page
        $pageTitle = "Home - Silent Signal";
        $pageDescription = "Emergency Communication Made Accessible for the Deaf and Mute";
        $data = [
            ['1', 'Sign Up & Set Up Profile1', 'Users (or their parents/guardians) can add emergency contacts '],
            ['2', 'Activate & Stay Alert2', 'Receive disaster alerts, check
            and receive updates.'],
            ['3', 'Get Help Instantly3', 'In an emergency, tap buttons to
            send pre-configured messages
            (with/without location).'],
        ];

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