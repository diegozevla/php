<?php

// Coleção de funções globais

// a função dd imprime detalhes de qualquer variável
function dd($dump) {
    echo "<pre>";
    var_dump($dump);
    echo "</pre>";
    die();
}
