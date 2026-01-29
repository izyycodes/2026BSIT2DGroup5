<?php
session_start();
require_once VIEW_PATH . 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Silent Signal</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Main Container -->
    <div class="main-container">
        <!-- Welcome Section -->
        <div class="welcome-section">
            <h1>Welcome Back!</h1>
            <p>To stay connected and access accessible emergency support, please log in using your details.</p>
            <a href="index.php?page=login" class="welcome-btn">LOGIN</a>
        </div>

        <!-- Signup Form Section -->
        <div class="form-section">
            <h2>Create Account</h2>
            
            <!-- Social Login -->
            <div class="social-login">
                <button class="social-btn" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </button>
                <button class="social-btn" title="Google">
                    <i class="fab fa-google"></i>
                </button>
                <button class="social-btn" title="GitHub">
                    <i class="fab fa-github"></i>
                </button>
            </div>

            <div class="divider">or use your email for registration</div>

            <!-- Display Messages -->
            <?php
            if(isset($_SESSION['error'])) {
                echo '<div class="alert alert-error">' . $_SESSION['error'] . '</div>';
                unset($_SESSION['error']);
            }
            if(isset($_SESSION['success'])) {
                echo '<div class="alert alert-success">' . $_SESSION['success'] . '</div>';
                unset($_SESSION['success']);
            }
            ?>

            <!-- Signup Form -->
            <form action="../controllers/AuthController.php?action=signup" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="tel" id="phone_number" name="phone_number" required>
                </div>

                <div class="form-group">
                    <label for="role">Role</label>
                    <select id="role" name="role" required>
                        <option value="">Select Role</option>
                        <option value="user">User</option>
                        <option value="responder">Emergency Responder</option>
                        <option value="admin">Administrator</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <button type="submit" class="submit-btn">SIGN UP</button>
            </form>
        </div>
    </div>

    <?php require_once VIEW_PATH . 'includes/footer.php'; ?>
</body>
</html>
