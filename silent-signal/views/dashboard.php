<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Silent Signal</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .dashboard-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 40px;
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            color: #333;
        }
        .welcome-message {
            text-align: center;
            margin-bottom: 30px;
        }
        .welcome-message h1 {
            color: #2c5f7f;
            font-size: 36px;
            margin-bottom: 10px;
        }
        .user-info {
            background: #f5f5f5;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        .user-info p {
            margin: 10px 0;
            font-size: 16px;
        }
        .logout-btn {
            background: #d9534f;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
            transition: background 0.3s;
        }
        .logout-btn:hover {
            background: #c9302c;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo">
            <div class="logo-icon">🔔</div>
            <span>Silent Signal.</span>
        </div>
        <nav>
            <ul class="nav-menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">How It Works</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="header-buttons">
            <a href="../controllers/AuthController.php?action=logout" class="btn-login">Logout</a>
        </div>
    </header>

    <!-- Dashboard Container -->
    <div class="dashboard-container">
        <div class="welcome-message">
            <h1>Welcome to Silent Signal Dashboard!</h1>
            <p>You have successfully logged in.</p>
        </div>

        <?php if(isset($_SESSION['success'])): ?>
            <div class="alert alert-success">
                <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
                ?>
            </div>
        <?php endif; ?>

        <div class="user-info">
            <h2>Your Account Information</h2>
            <p><strong>Name:</strong> <?php echo htmlspecialchars($_SESSION['user_name']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['user_email']); ?></p>
            <p><strong>Role:</strong> <?php echo htmlspecialchars(ucfirst($_SESSION['user_role'])); ?></p>
        </div>

        <div style="text-align: center;">
            <a href="../controllers/AuthController.php?action=logout" class="logout-btn">Logout</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <div class="logo">
                    <div class="logo-icon">🔔</div>
                    <span>Silent Signal.</span>
                </div>
                <p>Empowering deaf and mute users through accessible emergency communication.</p>
                <div class="social-icons">
                    <div class="social-icon"><i class="fab fa-facebook-f"></i></div>
                    <div class="social-icon"><i class="fab fa-twitter"></i></div>
                    <div class="social-icon"><i class="fab fa-instagram"></i></div>
                    <div class="social-icon"><i class="fab fa-youtube"></i></div>
                </div>
            </div>

            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">How It Works</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Information</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-phone"></i> +63912345678</li>
                    <li><i class="fas fa-envelope"></i> silentsignal@gmail.com</li>
                    <li><i class="fas fa-map-marker-alt"></i> Bacolod City, Philippines</li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            Silent Signal. Copyright 2026. All Rights Reserved.
        </div>
    </footer>
</body>
</html>
