<?php
// Mapping of Pokémon names to types for each region
$pokemonTypes = [
    'Kanto' => [
        'Bulbasaur' => ['Grass', 'Poison'],
        'Ivysaur' => ['Grass', 'Poison'],
        'Venusaur' => ['Grass', 'Poison'],
        'Charmander' => ['Fire'],
        'Charmeleon' => ['Fire'],
        'Charizard' => ['Fire', 'Flying'],
        'Squirtle' => ['Water'],
        'Wartortle' => ['Water'],
        'Blastoise' => ['Water'],
        'Pidgeot' => ['Normal', 'Flying'],
        'Pikachu' => ['Electric'],
        'Mewtwo' => ['Psychic'],
        'Mew' => ['Psychic'],
        'Gengar' => ['Ghost', 'Poison'],
        'Dragonite' => ['Dragon', 'Flying'],
        'Lapras' => ['Water', 'Ice'],
        'Pichu' => ['Electric'], 
        'Ghastly' => ['Ghost'],
        'Haunter' => ['Ghost', 'Poison'], 
        'Pidgeotto' => ['Normal', 'Flying'], 
        'Pidgey' => ['Normal', 'Flying'], 
        'Dratini' => ['Dragon'], 
        'Dragonair' => ['Dragon'], 
        'Raichu' => ['Electric'],
        'Kangaskhan' => ['Normal']
    ]
];



// Image directories for each region
$imageDirs = [
    'Kanto' => 'pokemon/kanto/',
];

// Initialize an empty array to store all image files
$images = [];

// Loop through each image directory
foreach ($imageDirs as $region => $dir) {
    // Get all image files from the directory
    $imagesInDir = glob($dir . '*.{jpg,png,jpeg}', GLOB_BRACE);

    // Merge the images from this directory with the main images array
    $images = array_merge($images, $imagesInDir);
}

// Shuffle the images array to randomize the order
shuffle($images);

// Generate Pokémon data for each shuffled image
$pokemonData = [];
$totalImages = count($images);
for ($i = 0; $i < min($totalImages, 25); $i++) {
    // Generate random level (for example)
    $randomLevel = rand(1, 99);

    // Generate random gender (for example)
    $gender = rand(0, 1) ? ' Male' : ' Female';

    // Get the Pokémon name from the image filename
    $imageName = pathinfo($images[$i], PATHINFO_FILENAME);
    $name = null;
    foreach ($pokemonTypes['Kanto'] as $pokemonName => $types) {
        if (strcasecmp($pokemonName, $imageName) === 0) {
            $name = $pokemonName;
            break;
        }
    }

    // Store the Pokémon data
    if ($name !== null) {
        $pokemonData[] = [
            'name' => $name,
            'types' => $pokemonTypes['Kanto'][$name],
            'level' => $randomLevel,
            'gender' => $gender,
            'region' => 'Kanto', // Fixed region for Kanto Pokémon
            'image' => $images[$i],
        ];
    }
}
?>

<style>
    .card {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
    }

    .card-title {
        margin-bottom: 10px;
    }

    .card-level,
    .card-types,
    .card-gender,
    .card-type {
        margin-bottom: 5px;
    }

    .card-type {
        font-weight: bold;
    }
    .electric { color: #F7D02C; } /* Electric type color */
        .fire { color: #EE8130; } /* Fire type color */
        .water { color: #6390F0; } /* Water type color */
        .grass { color: #7AC74C; } /* Grass type color */
        .ice { color: #96D9D6; } /* Ice type color */
        .fighting { color: #C22E28; } /* Fighting type color */
        .poison { color: #A33EA1; } /* Poison type color */
        .ground { color: #E2BF65; } /* Ground type color */
        .flying { color: #A98FF3; } /* Flying type color */
        .psychic { color: #F95587; } /* Psychic type color */
        .bug { color: #A6B91A; } /* Bug type color */
        .rock { color: #B6A136; } /* Rock type color */
        .ghost { color: #735797; } /* Ghost type color */
        .dragon { color: #6F35FC; } /* Dragon type color */
        .dark { color: #705746; } /* Dark type color */
        .steel { color: #B7B7CE; } /* Steel type color */
        .fairy { color: #D685AD; } /* Fairy type color */
        .card-gender.male { color: blue; } /* Male gender color */
        .card-gender.female { color: pink; } /* Female gender color */
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <?php foreach ($pokemonData as $pokemon): ?>
                <div class="col-md-4 mb-4">
                    <div class="card" id="pokemon-card-<?php echo $pokemon['name']; ?>">
                        <img src="<?php echo $pokemon['image']; ?>" class="card-img-top" alt="<?php echo $pokemon['name']; ?>">
                        <div class="card-body">
                            <h1 class="card-title"><?php echo $pokemon['name']; ?></h1>
                            <p class="card-level">Level: </p>
                            <p><?php echo $pokemon['level']; ?></p>
                            <p class="card-types">
                                Type:<br>
                                <?php foreach ($pokemon['types'] as $type): ?>
                                    <span class="card-type <?php echo strtolower($type); ?>"><?php echo $type; ?></span>
                                <?php endforeach; ?>
                            </p>
                            <span class="card-text">Gender: </span>
                            <p><span class="card-gender <?php echo strtolower($pokemon['gender']); ?>"><?php echo $pokemon['gender']; ?></span></p>
                            <p class="card-type">Region: <br><?php echo $pokemon['region']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
