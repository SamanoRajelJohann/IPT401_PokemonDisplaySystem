<?php
// Path to the image directory
$imageDir = 'pokemon/hoenn/';

// Get all image files from the directory
$images = glob($imageDir . '*.{jpg,png,jpeg}', GLOB_BRACE); // Support for multiple image formats

if (!empty($images)) {
    // Get the total number of images
    $totalImages = count($images);

    // Generate a random index
    $randomIndex = rand(0, $totalImages - 1);

    // Get the random image
    $randomImage = $images[$randomIndex];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Image Display</title>
</head>
<body>
    <?php if (!empty($randomImage)): ?>
        <img src="<?php echo $randomImage; ?>" alt="Random Image">
    <?php else: ?>
        <p>No images found in the directory.</p>
    <?php endif; ?>
</body>
</html>
