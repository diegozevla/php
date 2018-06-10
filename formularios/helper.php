<?php

// imprime um valor para depuração
function dd($dump) {
    echo '<pre>';
    var_dump($dump);
    echo '</pre>';
    die();
}

// imprime um valor para depuração de forma legível
function dp($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}
