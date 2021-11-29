<!-- Snack 4 (bonus)
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo. -->

<?php

$item = "Questa è una frase. Verrà divisa in altre frasi. 
Dove c'è il punto ne finisce una e ne inizia un'altra. 
Quindi si crereà una lista di frasi.";

echo $item;

$arrNewItem = explode(".", $item);

for ($i = 0; $i < count($arrNewItem); $i++) {
    $singleItem = trim($arrNewItem[$i]);

    echo "<pre>";
    echo $singleItem;
    echo "</pre>";
}

echo "<pre>";
var_dump($arrNewItem);
echo "</pre>";

?>