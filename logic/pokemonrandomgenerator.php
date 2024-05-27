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
        'Gastly' => ['Ghost'],
        'Haunter' => ['Ghost', 'Poison'], 
        'Pidgeotto' => ['Normal', 'Flying'], 
        'Pidgey' => ['Normal', 'Flying'], 
        'Dratini' => ['Dragon'], 
        'Dragonair' => ['Dragon'], 
        'Raichu' => ['Electric'],
        'Kangaskhan' => ['Normal']
    ],
    'Johto' => [
        'Abra' => ['Psychic'],
        'Alakazam' => ['Psychic'],
        'Kadabra' => ['Psychic'],
        'Chikorita' => ['Grass'],
        'Bayleef' => ['Grass'],
        'Meganium' => ['Grass'],
        'Totodile' => ['Water'],
        'Croconaw' => ['Water'],
        'Feraligatr' => ['Water'],
        'Cyndaquil' => ['Fire'],
        'Quilava' => ['Fire'],
        'Typhlosion' => ['Fire'],
        'Mareep' => ['Electric'],
        'Flaaffy' => ['Electric'],
        'Ampharos' => ['Electric'],
        'Heracross' => ['Bug', 'Fighting'],
        'Horsea' => ['Water'], 
        'Seadra' => ['Water'],
        'Kingdra' => ['Water', 'Dragon'], 
        'Onix' => ['Rock', 'Ground'], 
        'Steelix' => ['Steel', 'Ground'], 
        'Scyther' => ['Bug', 'Flying'], 
        'Scizor' => ['Bug', 'Steel'], 
        'Lugia' => ['Psychic', 'Flying'],
    ],
    'Hoenn' => [
        'Aron' => ['Rock', 'Steel'],
        'Lairon' => ['Rock', 'Steel'],
        'Aggron' => ['Rock', 'Steel'],
        'Wurmple' => ['Bug'],
        'Silcoon' => ['Bug'],
        'Beautifly' => ['Bug', 'Flying'],
        'Treecko' => ['Grass'],
        'Grovyle' => ['Grass'],
        'Sceptile' => ['Grass'],
        'Torchic' => ['Fire'],
        'Combusken' => ['Fire','Fighting'],
        'Blaziken' => ['Fire','Fighting'],
        'Mudkip' => ['Water'],
        'Swampert' => ['Water','Ground'],
        'Marshtomp' => ['Water','Ground'],
        'Ralts' => ['Psychic','Fairy'],
        'Kirlia' => ['Psychic','Fairy'], 
        'Gardevoir' => ['Psychic','Fairy'],
        'Gallade' => ['Psychic','Fighting'], 
        'Kyogre' => ['Water'], 
        'Groudon' => ['Ground'], 
        'Rayquaza' => ['Dragon', 'Flying'], 
        'Absol' => ['Dark'], 
        'Jirachi' => ['Psychic', 'Steel'],
    ],
    'Sinnoh' => [
        'Arceus' => ['Normal'],
        'Chimchar' => ['Fire'],
        'Monferno' => ['Fire','Fighting'],
        'Infernape' => ['Fire','Fighting'],
        'Turtwig' => ['Grass'],
        'Grotle' => ['Grass'],
        'Torterra' => ['Grass','Ground'],
        'Piplup' => ['Water'],
        'Prinplup' => ['Water'],
        'Empoleon' => ['Water','Steel'],
        'Gible' => ['Ground','Dragon'],
        'Gabite' => ['Ground','Dragon'],
        'Garchomp' => ['Ground','Dragon'],
        'Darkrai' => ['Dark'],
        'Cresselia' => ['Psychic'],
        'Heatran' => ['Fire', 'Steel'],
        'Dialga' => ['Steel','Dragon'], 
        'Palkia' => ['Water','Dragon'],
        'Giratina' => ['Ghost', 'Dragon'], 
        'Spiritomb' => ['Ghost','Dark'], 
        'Glaceon' => ['Ice'], 
        'Leafeon' => ['Grass'], 
        'Pachirisu' => ['Electric'], 
        'Manaphy' => ['Water'],
    ],
    'Unova' => [
        'Chandelure' => ['Ghost','Fire'],
        'Deino' => ['Dark','Dragon'],
        'Dewott' => ['Water'],
        'Eelektrik' => ['Electric'],
        'Eelectross' => ['Electric'],
        'Emboar' => ['Fire','Fighting'],
        'Hydreigon' => ['Dark','Dragon'],
        'Zweilous' => ['Dark','Dragon'],
        'Lampent' => ['Ghost','Fire'],
        'Larvesta' => ['Bug','Fire'],
        'Litwick' => ['Ghost','Fire'],
        'Oshawott' => ['Water'],
        'Pignite' => ['Fire','Fighting'],
        'Samurott' => ['Water'],
        'Serperior' => ['Grass'],
        'Servine' => ['Grass'], 
        'Snivy' => ['Grass'],
        'Tepig' => ['Fire'], 
        'Tynamo' => ['Electric'], 
        'Vanillish' => ['Ice'], 
        'Vanillite' => ['Ice'], 
        'Vanilluxe' => ['Ice'], 
        'Volcarona' => ['Bug','Fire'],
    ],
    'Kalos' => [
        'Amaura' => ['Ice','Rock'],
        'Aurorus' => ['Ice','Rock'],
        'Fletchling' => ['Normal','Flying'],
        'Fletchinder' => ['Fire','Flying'],
        'Talonflame' => ['Fire','Flying'],
        'Fennekin' => ['Fire'],
        'Braixen' => ['Fire'],
        'Delphox' => ['Fire','Psychic'],
        'Chespin' => ['Grass'],
        'Quilladin' => ['Grass'],
        'Pumpkaboo' => ['Ghost','Grass'],
        'Gourgeist' => ['Ghost','Grass'],
        'Sylveon' => ['Fairy'],
        'Hawlucha' => ['Fighting','Flying'],
        'Chesnaught' => ['Grass','Fighting'],
        'Diancie' => ['Rock','Fairy'], 
        'Dedenne' => ['Electric'],
        'Froakie' => ['Water'], 
        'Frogadier' => ['Water'], 
        'Greninja' => ['Water','Dark'], 
        'Yveltal' => ['Dark','Flying'], 
        'Xerneas' => ['Fairy'], 
        'Zygarde' => ['Ground','Dragon'],
    ],
];

// Get all image files from the specified directories
$imageDirs = ['pokemon/hoenn/', 'pokemon/johto/', 'pokemon/kalos/', 'pokemon/kanto/', 'pokemon/sinnoh/', 'pokemon/unova/'];
$images = [];

foreach ($imageDirs as $dir) {
    $imagesInDir = glob($dir . '*.{jpg,png,jpeg}', GLOB_BRACE);
    $images = array_merge($images, $imagesInDir);
}

$pokemonData = [];

if (!empty($images)) {
    $totalImages = count($images);

    // Generate random Pokémon data
    for ($i = 0; $i < 6; $i++) {
        $randomIndex = rand(0, $totalImages - 1);
        $randomImage = $images[$randomIndex];
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
        $pokemonType = isset($pokemonTypes[$region][$pokemonName]) ? $pokemonTypes[$region][$pokemonName] : ['Unknown'];

        // Generate random level and gender
        $randomLevel = rand(1, 99);
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon Display</title>
    <style>
        /* Your existing styles */
        .card {
            cursor: pointer;
            transition: transform 0.2s;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }
        .card.expanded {
            transform: scale(1.05);
        }
        .card-title {
            margin-bottom: 10px;
            text-align: center;
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
        <?php foreach ($pokemonData as $index => $pokemon): ?>
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