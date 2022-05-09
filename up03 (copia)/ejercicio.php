<?php

    $word = $_REQUEST["palabra"];
    $fichero = $_FILES["fichero"]["tmp_name"];

    // echo $word."<br>".$fichero;
    // print_r($fichero);

    $content = strtolower(file_get_contents($fichero));
    $contentStrict = file_get_contents($fichero);
    

    $countWord = substr_count($content, strtolower($word));
    // $countWord = substr_count(strtolower($content), strtolower($word));

    $countStrictWord = substr_count($contentStrict, $word);

    echo "El texto del fichero contiene $countWord la palabra $word. Tanto en mayúscula como minúscula.<br>";
    echo "El texto del fichero contiene $countStrictWord la palabra $word, tal y como la has escrito.";