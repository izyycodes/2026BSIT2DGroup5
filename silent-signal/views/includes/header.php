<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Silent Signal'; ?></title>
    <meta name="description" content="<?php echo $pageDescription ?? 'Emergency Communication Made Accessible'; ?>">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <img src="assets/images/image2.png" alt="Silent Signal Logo" class="logo-icon">
                    <span class="logo-text">Silent Signal.</span>
                </div>
                <ul class="nav-menu">
                    <li><a href="#home" class="nav-link">Home</a></li>
                    <li><a href="#features" class="nav-link">Features</a></li>
                    <li><a href="#how-it-works" class="nav-link">How It Works</a></li>
                    <li><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
                <div class="nav-buttons">
                    <a href="index.php?page=login" class="btn btn-secondary">Login</a>
                    <a href="index.php?page=signup" class="btn btn-primary">Sign Up</a>
                </div>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>
    </header>