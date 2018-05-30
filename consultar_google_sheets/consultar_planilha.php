<?php

// token-gerado-pelo-google-sheets representa um identificador do seu documento. Sempre o mantenha protegido.
$url_do_arquivo = "https://docs.google.com/spreadsheets/d/e/token-gerado-pelo-google-sheets/pub?output=csv";

// Tenta abrir o arquivo, antes de prosseguir com as instruções dentro do IF.
// Note o aninhamento dos parênteses, as instruções são resolvidas a partir dos parênteses mais internos para os mais externos. O $identificador é um handle (identificador) do arquivo aberto e somente leitura da instrução fopen().
// O PHP tentará retornar um recurso se conseguir, ou FALSE, se não conseguir. Independente do valor retornado, ele será armazenado no $identificador para posterior comparação com FALSE, na mesma linha.
if (($identificador = fopen($url_do_arquivo, 'r')) !== FALSE) {

    echo '<pre>';

    // Lê cada linha do arquivo CSV e retornará FALSE quando passar da última linha ou se não houverem registros.
    while (($linha_do_arquivo = fgetcsv($identificador, 0, ",")) !== FALSE) {
        
        // Afim de tornar mais legível a exibição no navegador usarei a instrução printf() para exibição. A instrução printf() recebe uma string de formato no primeiro argumento e os valores a serem exibidos a partir do segundo argumento. Para funcionar a exibição dos dados com os espaços adicionais a direita é importante delimitar a instrução com a tag <pre>.
        printf("%-10s %-19s %s <br />",  $linha_do_arquivo[0], $linha_do_arquivo[1], $linha_do_arquivo[2]);

    }

    echo '</pre>';

    // Libera o recurso aberto
    fclose($identificador);

} else {
    
    // Aviso amigável ao usuário de que não foi possível, por algum motivo, abrir o recurso.
    echo 'Não foi possível abrir o arquivo';

}
