# Resumo do livro PHP - Orientado a Objetos

# Extensões de Arquivos
As formas mais comum de extensões de arquivos são:
- .php: arquivo PHP que contém um programa;
- class.php: arquivo PHP que contém uma classe;
- inc.php: arquivo PHP a ser incluído, pode incluir constantes ou configurações.

Outras extensões usadas programas antigos:
- .php3: Arquivo PHP que contém um programa PHP versão 3;
- .php4: Arquivo PHP que contém um programa PHP versão 4;
- .phtml: Arquivo PHP que contém um programa PHP e HTML na mesma página.

## Delimitadores
Os delimitadores de um código PHP devem ser esses:
`<?php //código ?>`

## Comentários
Para comentários de uma linha:
- Barra simples: `// echo "a";`;
- Circunflexo: `# echo "a";`.

Para comentários de várias linhas
- `/* código; código; */ `

Para comentários do tipo docblock
- `/** */`

Comentários do tipo dockblock servem para documentar classes, propriedades ou métodos.

## Comandos de saída
Usados para gerar uma saída para o console ou em uma página web. Os principais são:

- `echo 'a', 'b'`;
- `print('abc')`;
- `var_dump()`: imprime o conteúdo de uma variável, de um array, ou os atributos de um objeto de forma explanativa. No caso de um array, imprime o conteúdo e tipo de dados de todas as dimensões;
- `print_r()`: imprime de forma explanativa, mas um formato mais legível para o programador, com o conteúdo e supressão dos tipos de dados.

## Variáveis
Identificadores para representar valores mutáveis que apenas existem durante a execução de um programa. São armazenadas na memória RAM e tem o conteúdo destruído, após a execução do programa. Uma variável é criada ao atribuir um nome de identificação precedido por um $, como em:

`<?php` <br>
`$nome = "Paulo";` <br>
`$numeroAleatorio = 10;` <br>
`outra_variavel = "abacaxi";` <br>
`echo $nome; // exibe Paulo`

Para a nomeação de variáveis:
- não inicie com números, use espaços em branco no meio do identificador ou caracteres especiais (!, @, # e etc);
- Até 15 caracteres para clareza de código;
- Devem ser significativos;
- Preferencialmente em minúsculo e, em cada palavra que a compõe, usar o sublinhado (_);
- Variáveis são case sensitive;

### Variáveis dinâmicas
Conhecidas como variáveis variantes ou variáveis variáveis são variáveis que podem mudar o próprio nome, além do conteúdo, de acordo com a situação. Para isso basta usar dois cifrões no nome da variável e o PHP criará uma nova referência a uma variável a partir do conteúdo da primeira. Por exemplo:

`$variavel = 'nome';` <br>
`$$variavel = 'sobrenome';` <br>
`echo $variavel // imprime nome` <br>
`echo $nome // imprime sobrenome`

### Variáveis por valor e referências
Quando uma variável é atribuída a outra sempre será criada uma nova área de armazenamento na memória, ou seja,

`$a = 5;` <br>
`$b = $a;` <br>
`$b = 20;` <br>
`echo $a; // imprime 5` <br>
`echo $b; // imprime 20` <br>

Para se criar uma referência a outra variável, onde ao alterar uma alterará a outra, basta adicionar um & no começo da variável que será copiada,

`$a = 5;` <br>
`$b = &$a;` <br>
`$b = 10;` <br>
`echo $a; // 10` <br>
`echo $b; // 10`

### Tipos boleanos
Valor lógico que representa verdadeiro ou falso. Para especificar um valor boleano basta usar as palavras chaves TRUE ou FALSE.

`$a = TRUE;` <br>
`if ($a) echo 'Mauro'; // imprime Mauro` <br>

Comparações condicionais como `$a >= 81` também podem retornar um valor boleano.

`$umidade = 80;` <br>
`if ($umidade > 79) echo 'Vai chover'; // imprime 'Vai chover'`

Também são considerados valores falsos em comparações boleanas:
- Inteiro 0;
- Ponto flutuante 0.0;
- Uma string vazia "" ou "0";
- Um array vazio;
- Um objeto sem elementos;
- Um tipo null.

