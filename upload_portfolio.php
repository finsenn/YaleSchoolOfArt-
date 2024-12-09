<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Portfolio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Upload Your Portfolio</h1>
        <p>Showcase your work to the world.</p>
    </header>
    <section class="upload-form">
        <form action="upload_portfolio.php" method="POST" enctype="multipart/form-data">
            <label for="file">Upload File:</label>
            <input type="file" id="file" name="file" accept=".png, .jpg, .jpeg" required>
            
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>
            
            <button type="submit" name="submit">Submit</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $file = $_FILES['file'];
            $description = $_POST['description'];
            
            // File validation
            $allowedTypes = ['image/png', 'image/jpeg', 'image/jpg'];
            if (in_array($file['type'], $allowedTypes)) {
                echo "<p class='success'>File uploaded successfully! Description: " . htmlspecialchars($description) . "</p>";
            } else {
                echo "<p class='error'>Invalid file format. Only PNG and JPG allowed.</p>";
            }
        }
        ?>
    </section>
</body>
</html>
