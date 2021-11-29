<!-- Snack 1
Passare come parametri GET name,
mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age
sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

// Controllo parola name
if (array_search("name", $_GET)) {
    $userName = $_GET["name"];
    // Controllo lunghezza stringa
    if (trim(strlen($userName < 3))) {
        $userName = false;
    }
} else {
    $userName = false;
}

// Controllo parola mail
if (array_search("mail", $_GET)) {
    $userMail = $_GET["mail"];
    // Controllo sulla stringa che contenga determinati caratteri
    if (!strchr($userMail, "@") && !strchr($userMail, "@")) {
        $userMail = false;
    }
} else {
    $userMail = false;
}

// Controllo parola age
if (array_search("age", $_GET)) {
    $userAge = $_GET["age"];
    // Controllo se è un numero
    if (!is_numeric($userAge)) {
        $userAge = false;
    }
} else {
    $userAge = false;
}

echo $userName;
echo $userMail;
echo $userAge;

// Stampo l'accesso
// Se i controlli vengono superato è consentito
if (strtolower($userName) && strtolower($userMail) && $userAge) {
    echo "Accesso riuscito";
} else { //Altrimenti è negato
    echo "Accesso negato";
}

?>