<?php
// Path to the image directory
$imageDir = 'pokemon/kalos/';

// Get all image files from the directory
$images = glob($imageDir . '*.{jpg,png,jpeg}', GLOB_BRACE); // Support for multiple image formats

$pokemonData = [];

if (!empty($images)) {
    // Get the total number of images
    $totalImages = count($images);

    // Generate six random pokemon
    for ($i = 0; $i < 6; $i++){
    // Generate a random index
    $randomIndex = rand(0, $totalImages - 1);

    // Get the random image
    $randomImage = $images[$randomIndex];

    // Extract the Pokémon name from the image filename
    $pokemonName = pathinfo($randomImage, PATHINFO_FILENAME);

    // Store the data
    $pokemonData[] =[
        'name' => $pokemonName,
        'image' => $randomImage
    ];
}

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
<div class="container mt-5">
    <div class="row">
        <?php foreach ($pokemonData as $index => $pokemon): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo $pokemon['image']; ?>" class="card-img-top" alt="<?php echo $pokemon['name']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $pokemon['name']; ?></h5>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>
