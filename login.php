<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Here you would check the database for valid user credentials.
    // For demonstration purposes, a simple check:
    if ($email == "user@example.com" && $password == "password123") {
        $_SESSION['user'] = $email;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Yale School of Art</title>
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
            <h2>Login</h2>
            <form action="login.php" method="POST" class="auth-form">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <?php if (isset($error)): ?>
                    <p style="color: red; text-align: center;"><?php echo $error; ?></p>
                <?php endif; ?>

                <button type="submit">Login</button>

                <p class="auth-footer">Don't have an account? <a href="register.php">Register here</a></p>
            </form>
        </div>
    </section>
</body>
</html>
