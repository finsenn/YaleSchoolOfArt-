<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Art Gallery</h1>
        <p>Explore the world of art and creativity!</p>
    </header>
    <section class="gallery">
        <div class="gallery-item">
            <img src="images/classical.png" alt="Classical Art">
            <h3>Classical Art</h3>
            <p>Experience the timeless elegance of classical art.</p>
            <button onclick="shareArtwork('Classical Art')">Share</button>
        </div>
        <div class="gallery-item">
            <img src="images/contemporary.png" alt="Contemporary Art">
            <h3>Contemporary Art</h3>
            <p>Dive into the bold and expressive world of contemporary art.</p>
            <button onclick="shareArtwork('Contemporary Art')">Share</button>
        </div>
        <div class="gallery-item">
            <img src="images/featured.png" alt="Featured Artwork">
            <h3>Featured Artwork</h3>
            <p>Discover our curated selection of featured artworks.</p>
            <button onclick="shareArtwork('Featured Artwork')">Share</button>
        </div>
    </section>
    <script>
        function shareArtwork(artName) {
            alert(`Share the beauty of ${artName} on your social media!`);
        }
    </script>
</body>
</html>
