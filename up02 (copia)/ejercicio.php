<?php


// $content = file_get_contents("texto.txt");

// echo $content;

// echo str_replace("\n", "<br>", $content);

$file = fopen("texto.txt", 'r');

if ($file) {
    $count = 0;
    while (($búfer = fgets($file)) !== false) {
        $count++;
        $listWord = explode(" ",$búfer);
        $countWord = count($listWord);
        echo "<br>Línea $count: " . $búfer ."<br>Esta línea tiene $countWord palabras.". "<br>" ;
    }
}


//otra forma de Cristian
/* $file = fopen("texto.txt", "r");


while ($text = fgets($file)) {
    $palabras = explode(" ", $text);
    $array = array_splice($palabras, 2);
    $numero = strlen(implode(" ", $array));
    $count = count($array);

    echo  "$text tiene  $count palabras -> y $numero  letras" . "<br />";
} */