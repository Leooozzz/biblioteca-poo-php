<?php

require_once 'vendor/autoload.php';

use \Leo\Bibliotecapoo\Livro;
use \Leo\Bibliotecapoo\Estante;

echo "Sistema de biblioteca <br>";

$livro1 = new Livro("Romeu e Julieta", "shakespeare");
$livro2 = new Livro("Hamlet", "shakespeare");
$livro1->marcarComoDisponivel();

$estante = new Estante();
$estante->adicionarLivro($livro1);
$estante->adicionarLivro($livro2);


$livroEncontrado = $estante->buscarLivroPorTitulo('Ro');
echo "<pre>";

var_dump($estante);
