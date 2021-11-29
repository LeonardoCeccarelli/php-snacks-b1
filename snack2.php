<!-- Snack 2
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato:
DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php

// Creo array dei post totali
$arrPost = [

    "10/10/2021" => [
        [
            "title" => "Iron Man",
            "author" => "Stan Lee",
            "text" => "Testo Iron Man (Tony Stark)",
        ],
        [
            "title" => "Spider Man",
            "author" => "Stan Lee",
            "text" => "Testo Spider Man (Peter Parker)",
        ],
    ],
    "19/10/2021" => [
        [
            "title" => "Captain America",
            "author" => "Stan Lee",
            "text" => "Testo Captain America (Steve Rogers)",
        ],
        [
            "title" => "Hulk",
            "author" => "Stan Lee",
            "text" => "Testo Hulk (Bruce Banner)",
        ],
    ],
    "15/11/2021" => [
        [
            "title" => "Batman",
            "author" => "Malcolm Wheeler-Nicholson",
            "text" => "Testo Batman (Bruce Wayne)",
        ],
        [
            "title" => "Superman",
            "author" => "Malcolm Wheeler-Nicholson",
            "text" => "Testo Superman (Clark Kent)",
        ],
    ],
    "29/11/2021" => [
        [
            "title" => "Wonder Woman",
            "author" => "Malcolm Wheeler-Nicholson",
            "text" => "Testo Wonder Woman (Diana Pricne)",
        ],
        [
            "title" => "Acquaman",
            "author" => "Malcolm Wheeler-Nicholson",
            "text" => "Testo Acquaman (Arthur Curry)",
        ],
        [
            "title" => "Flash",
            "author" => "Malcolm Wheeler-Nicholson",
            "text" => "Testo Flash (Jay Garrick)",
        ],
    ],
];

// Recupero le chiavi dell'array precedente
// (che sono le singole date della pubblicazione dei post)
$arrKeysPost = array_keys($arrPost);

// Ciclo sull'array delle chiavi e stampo il contenuto 
// rispettivo alla chiave dell'arrai pcincipale
for ($i = 0; $i < count($arrKeysPost); $i++) {
    $singleDate = $arrKeysPost[$i];

    echo "<pre>";
    echo "<strong>$singleDate</strong><br><br>";
    var_dump($arrPost[$singleDate]);
    echo "</pre>";
}

?>