<?php

date_default_timezone_set('America/Sao_Paulo');

$files = $_FILES['images'];
$files_extension = pathinfo($files, PATHINFO_EXTENSION);
$new_name =  date("Ymd_His") . "." . $files_extension;
$output_dir = "uploads/";

print("<pre>".print_r($files,true)."</pre>");

if (empty($files["name"][0])) {
    echo "Não há imagens";
} else {
    if (count($files["name"]) === 1) {
        echo "Há apenas 1 imagem";
        foreach($files["size"] as $file) {
            echo $file / 1048576;
            echo "<br>";
        }
    } else {
        echo "Várias imagens";
    
        foreach($files["size"] as $file) {
            echo $file;
            echo "<br>";
        }
    }

}

