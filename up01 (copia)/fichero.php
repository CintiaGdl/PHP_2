<?php 

    file_put_contents("loremp-ipsum.txt", "Firmado por Cintia", FILE_APPEND);

    echo "fichero creado";

    $content = file_get_contents("loremp-ipsum.txt");
