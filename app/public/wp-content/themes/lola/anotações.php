PHP Básico

VARIÁVEIS
Em php uma para declararmos uma variável basta utilizarmos $ na frente da palavra

<?php

$marca = 'Handel';
$compras = 125;
$aluno_comprou = true;

?>
COPIAR
ECHO
Utilizamos a palavra echo para colocarmos o valor de uma string no html.

<?php
$marca = 'Handel';
echo $marca;
echo 'Empresa de Camisetas';
?>

<h1><?php echo $marca; ?></h1>

<!-- Atalho para o código acima. -->
<h1><?= $marca; ?></h1>
COPIAR
O print também faz a mesma coisa, porém funciona como uma função e retorna o valor 1;

OPERADORES
<?php
$soma = 5 + 5;
$subtracao = 10 - 2;
$divisao = 10 / 2;
$multiplicacao = 10 * 2;

$i = 0;
$i++;

$marca = 'Handel';
$tipo = 'Camisetas';

$concatenar = $marca . ' ' . $tipo;
?>
COPIAR
ARRAYS
Criamos uma array com [] ou com a função array()

<?php
$produtos = ['Camisas', 'Bermudas', 'Casacos'];

$produtos = array('Camisas', 'Bermudas', 'Casacos');

echo $produtos[1]; // Bermudas
?>
COPIAR
PRINT_R() E VAR_DUMP()
As funções print_r() e var_dump() mostram o resultado de array's e objetos na tela. São utilizadas para entendermos o código.

<pre>
<?php
$produtos = ['Camisas', 'Bermudas', 'Casacos'];

echo $produtos; // Array

print_r($produtos);
var_dump($produtos);
?>
</pre>
COPIAR
ASSOCIATIVE ARRAYS
Associative arrays funcionam como objetos em JavaScript, onde podemos definir a chave e valor de cada item dentro da array.

<pre>
<?php
$produto = [
  'nome' => 'Camisa Preta',
  'preco' => 'R$ 129,00',
  'estoque' => 8,
  'foto' => [
    'src' => './img/foto.jpg',
    'alt' => 'Foto do Produto'
  ],
];

print_r($produto);
?>
</pre>

<h1><?= $produto['nome'] ?></h1>
<span><?= $produto['preco'] ?></span> |
<span><?= $produto['estoque'] ?> em estoque.</span>

<img src="<?= $produto['foto']['src']; ?>" alt="<?= $produto['foto']['alt']; ?>">
COPIAR
ADICIONAR ITENS
<pre>
<?php
$categorias = ['Camisetas'];
$categorias[] = 'Bermudas';

print_r($categorias);

$produto = [
  'nome' => 'Camisa Preta',
  'preco' => 'R$ 129,00'
];
$produto['estoque'] = 8;

print_r($produto);
?>
</pre>
COPIAR
FUNÇÕES DIVERSAS
<?php

unset($produtos['preco']); // remove preco
unset($produtos); // remove toda a array/variável
count($produtos); // retorna o total de produtos
array_keys($produtos); // retorna uma array com as chaves
array_merge($produtos1, $produtos2); // combina arrays
array_unique($produtos); // remove valores duplicados

?>