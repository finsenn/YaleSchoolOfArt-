<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    // Check if passwords match
    if ($password !== $confirmPassword) {
        $error = "Passwords do not match.";
    } else {
        // Here you would save the user's data in the database
        // For demonstration purposes, we're just storing them in session.
        $_SESSION['user'] = $username;
        $_SESSION['email'] = $email;

        // Redirect to a dashboard or login page
        header("Location: login.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Yale School of Art</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo-container">
                <img src="images/stairslogo.png" alt="Yale Art Logo" class="logo-image">
                <h1 class="logo">Yale School of Art</h1>
            </div>
        </div>
    </header>

    <section class="auth-section">
        <div class="auth-container">
            <h2>Register</h2>
            <form action="register.php" method="POST" class="auth-form">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>

                <?php if (isset($error)): ?>
                    <p style="color: red; text-align: center;"><?php echo $error; ?></p>
                <?php endif; ?>

                <button type="submit">Register</button>

                <p class="auth-footer">Already have an account? <a href="login.php">Login here</a></p>
            </form>
        </div>
    </section>
</body>
</html>
