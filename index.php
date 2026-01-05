<?php

require_once 'vendor/autoload.php';

use \Leo\Bibliotecapoo\Livro;
use \Leo\Bibliotecapoo\Estante;
use \Leo\Bibliotecapoo\Aluno;
use Leo\Bibliotecapoo\Professor;
use Leo\Bibliotecapoo\Visitante;
use Leo\Bibliotecapoo\Bibliotecario;

echo "Sistema de biblioteca <br>";

$livro1 = new Livro("Romeu e Julieta", "shakespeare");
$livro2 = new Livro("Hamlet", "shakespeare");
$livro3 = new Livro("Moby Dick", "Herman Melville");

$livro1->marcarComoDisponivel();
$livro2->marcarComoDisponivel();
$livro3->marcarComoDisponivel();

$estante = new Estante();
$estante->adicionarLivro($livro1);
$estante->adicionarLivro($livro2);
$estante->adicionarLivro($livro3);

$livroEncontrado = $estante->buscarLivroPorTitulo('Romeu');

$professor = new Professor('professora Vanessa');
$aluno = new Aluno('aluno Marks');
$aluno2 = new Aluno('aluno Diego');
$visitante = new visitante("vititante leo");

$aluno->adicionarLivroEmprestado($livro1);
$professor->adicionarLivroEmprestado($livro2);
$visitante->adicionarLivroEmprestado($livro3);



echo "<pre>";

var_dump($aluno->podePegarEmprestado());
var_dump($aluno->listarLivrosEmprestados());

var_dump($professor->podePegarEmprestado());
var_dump($professor->listarLivrosEmprestados());

var_dump($visitante->podePegarEmprestado());

try {
    Bibliotecario::emprestarLivro($aluno, $livro1, $estante);
    Bibliotecario::devolverLivro($aluno2, $livro1, $estante);
} catch (\Exception $e) {
    echo "Error:" . $e->getMessage() . '<br>';
}
