<?php

$file = 'municipios.csv';
$handle = fopen($file, 'r');

while (($data = fgetcsv($handle, 0, ';', '"')) !== FALSE) {
    echo '<pre>';
    echo "DB::table('cidades')->insert([" . "<br />";
    echo "\t'id'              => " . $data[0] . ",<br />";
    echo "\t'estado_id'       => " . $data[1] . ",<br />";
    echo "\t'sigla_estado'    => " . '"' . $data[2] . '"' . ",<br />";
    echo "\t'nome'            => " . '"' . $data[3] . '"' . ",<br />";
    echo "]);" . "<br />\n";
    echo '</pre>';
}

fclose($handle);


