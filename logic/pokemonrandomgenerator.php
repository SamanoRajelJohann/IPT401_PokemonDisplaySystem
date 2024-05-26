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
        'Lapras' => ['Water', 'Ice']
    ],
    'Johto' => [
        'Chikorita' => ['Grass'],
        'Bayleef' => ['Grass'],
        'Meganium' => ['Grass'],
        'Cyndaquil' => ['Fire'],
        'Quilava' => ['Fire'],
        'Typhlosion' => ['Fire'],
        'Totodile' => ['Water'],
        'Croconaw' => ['Water'],
        'Feraligatr' => ['Water'],
        'Steelix' => ['Steel', 'Ground'],
        'Ampharos' => ['Electric'],
        'Gyarados' => ['Water', 'Flying'],
        'Alakazam' => ['Psychic'],
        'Heracross' => ['Bug', 'Fighting'],
        'Scizor' => ['Bug', 'Steel'],
        'Lugia' => ['Psychic', 'Flying'],
        'Abra' => ['Psychic'],
        'Flaaffy' => ['Electric']
    ],
    'Hoenn' => [
        'Treecko' => ['Grass'],
        'Grovyle' => ['Grass'],
        'Sceptile' => ['Grass'],
        'Torchic' => ['Fire'],
        'Combusken' => ['Fire', 'Fighting'],
        'Blaziken' => ['Fire', 'Fighting'],
        'Mudkip' => ['Water'],
        'Marshtomp' => ['Water', 'Ground'],
        'Swampert' => ['Water', 'Ground'],
        'Beautifly' => ['Bug', 'Flying'],
        'Gardevoir' => ['Psychic', 'Fairy'],
        'Gallade' => ['Psychic', 'Fighting'],
        'Aggron' => ['Steel', 'Rock'],
        'Rayquaza' => ['Dragon', 'Flying'],
        'Groudon' => ['Ground'],
        'Kyogre' => ['Water'],
        'Silcoon' =>['Bug']
    ],
    'Sinnoh' => [
        'Turtwig' => ['Grass'],
        'Grotle' => ['Grass'],
        'Torterra' => ['Grass', 'Ground'],
        'Chimchar' => ['Fire'],
        'Monferno' => ['Fire', 'Fighting'],
        'Infernape' => ['Fire', 'Fighting'],
        'Piplup' => ['Water'],
        'Prinplup' => ['Water'],
        'Empoleon' => ['Water', 'Steel'],
        'Darkrai' => ['Dark'],
        'Spiritomb' => ['Ghost', 'Dark'],
        'Mismagius' => ['Ghost'],
        'Garchomp' => ['Dragon', 'Ground'],
        'Giratina' => ['Ghost', 'Dragon'],
        'Dialga' => ['Steel', 'Dragon'],
        'Palkia' => ['Water', 'Dragon']
    ],
    'Unova' => [
        'Snivy' => ['Grass'],
        'Servine' => ['Grass'],
        'Serperior' => ['Grass'],
        'Tepig' => ['Fire'],
        'Pignite' => ['Fire', 'Fighting'],
        'Emboar' => ['Fire', 'Fighting'],
        'Oshawott' => ['Water'],
        'Dewott' => ['Water'],
        'Samurott' => ['Water'],
        'Unfezant' => ['Normal', 'Flying'],
        'Kyurem' => ['Dragon', 'Ice'],
        'Elektross' => ['Electric'],
        'Chandelure' => ['Ghost', 'Fire'],
        'Volcarona' => ['Bug', 'Fire'],
        'Hydreigon' => ['Dark', 'Dragon'],
        'Vanilluxe' => ['Ice']
    ],
    'Kalos' => [
        'Chespin' => ['Grass'],
        'Quilladin' => ['Grass'],
        'Chesnaught' => ['Grass', 'Fighting'],
        'Fennekin' => ['Fire'],
        'Braixen' => ['Fire'],
        'Delphox' => ['Fire', 'Psychic'],
        'Froakie' => ['Water'],
        'Frogadier' => ['Water'],
        'Greninja' => ['Water', 'Dark'],
        'Talonflame' => ['Fire', 'Flying'],
        'Zygarde' => ['Dragon', 'Ground'],
        'Yveltal' => ['Dark', 'Flying'],
        'Xerneas' => ['Fairy'],
        'Sylveon' => ['Fairy'],
        'Diancie' => ['Rock', 'Fairy'],
        'Aurorus' => ['Rock', 'Ice'],
        'Gourgeist' => ['Ghost', 'Grass']
    ]
];


// Lookup the type for this Pokémon
$pokemonType = 'Unknown'; // Default to 'Unknown' if type is not found
if (isset($pokemonTypes[$region]) && is_array($pokemonTypes[$region]) && array_key_exists($pokemonName, $pokemonTypes[$region])) {
    $pokemonType = $pokemonTypes[$region][$pokemonName];
}


$imageDirs = ['pokemon/hoenn/', 'pokemon/johto/', 'pokemon/kalos/', 'pokemon/kanto/', 'pokemon/sinnoh/', 'pokemon/unova/'];

// Initialize an empty array to store all image files
$images = [];

// Loop through each image directory
foreach ($imageDirs as $dir) {
    // Get all image files from the directory
    $imagesInDir = glob($dir . '*.{jpg,png,jpeg}', GLOB_BRACE);

    // Merge the images from this directory with the main images array
    $images = array_merge($images, $imagesInDir);
}

if (!empty($images)) {
    // Get the total number of images
    $totalImages = count($images);

    // Generate random Pokémon data
    for ($i = 0; $i < 8; $i++) {
        // Generate a random index
        $randomIndex = rand(0, $totalImages - 1);

        // Get the random image
        $randomImage = $images[$randomIndex];

        // Extract the Pokémon name from the image filename
        $pokemonName = pathinfo($randomImage, PATHINFO_FILENAME);

        // Determine the region of the Pokémon
        $region = '';
        foreach ($pokemonTypes as $r => $types) {
            if (array_key_exists($pokemonName, $types)) {
                $region = $r;
                break;
            }
        }

        // Lookup the type for this Pokémon
        $pokemonType = isset($pokemonTypes[$region][$pokemonName]) ? $pokemonTypes[$region][$pokemonName] : 'Unknown'; // Default to 'Unknown' if type is not found

        // Generate random level (for example)
        $randomLevel = rand(1, 99);

        // Generate random gender (for example)
        $gender = rand(0, 1) ? 'Male' : 'Female';

        // Store the data
        $pokemonData[] = [
            'name' => $pokemonName,
            'image' => $randomImage,
            'region' => $region,
            'types' => $pokemonType,
            'level' => $randomLevel,
            'gender' => $gender
        ];
    }
}
?>

?>
<style>
    /* Your existing styles */
    /* Add any additional styles here for type styling */
    .card-type {
        font-weight: bold;
        /* Add more styling as needed */
    }
</style>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <?php foreach ($pokemonData as $index => $pokemon): ?>
            <div class="col-md-3 mb-4">
                <div class="card" id="pokemon-card-<?php echo $index; ?>">
                    <img src="<?php echo $pokemon['image']; ?>" class="card-img-top" alt="<?php echo $pokemon['name']; ?>">
                    <div class="card-body">
                        <center><h1 class="card-title"><?php echo $pokemon['name']; ?></h1></center>
                        <center><p class="card-text card-level">Level: <?php echo $pokemon['level']; ?></p></center>
                        <center><p class="card-text card-types">
                            Type:
                            <?php foreach ($pokemon['types'] as $type): ?>
                                <span class="card-type"><?php echo $type; ?></span>
                            <?php endforeach; ?>
                        </p></center>
                        <center><p class="card-text card-gender">Gender: <?php echo $pokemon['gender']; ?></p></center>
                        <center><p class="card-text card-type">Region: <?php echo $pokemon['region']; ?></p></center>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.card');

    cards.forEach(card => {
        card.addEventListener('click', function() {
            const isExpanded = this.classList.contains('expanded');
            cards.forEach(c => c.classList.remove('expanded'));
            if (!isExpanded) {
                this.classList.add('expanded');
            }
        });
    });
});
</script>
</body>
</html>
