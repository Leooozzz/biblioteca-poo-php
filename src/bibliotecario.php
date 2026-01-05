<?php

namespace Leo\Bibliotecapoo;

class Bibliotecario
{

    public  static function emprestarLivro(Usuario $usuario, Livro $livro, Estante $estante): bool
    {
        if (!$livro->estaDisponivel()) {
            throw new \Exception("Livro não está disponível");
        }
        if (!$usuario->podePegarEmprestado()) {
            throw new \Exception("O usuario nao pode pegar emprestado");
            return \false;
        }
        if (!$estante->buscarLivroPorTitulo($livro->getTitulo())) {
            throw new \Exception(" Livro nao esta na estante");
            return \false;
        }
        $livro->marcarComoEmprestado();
        $usuario->adicionarLivroEmprestado($livro);
        $estante->removerLivro($livro);
        return \true;
    }
    public static function devolverLivro(Usuario $usuario, Livro $livro, Estante $estante): bool
    {
        if ($livro->estaDisponivel()) {
            throw new \Exception("Livro nao esta disponivel");
            return \false;
        }

        if ($estante->buscarLivroPorTitulo($livro->getTitulo())) {
            throw new \Exception("Livro ja esta na estante");
            return \false;
        }
        if (!\in_array($livro, $usuario->listarLivrosEmprestados())) {
            throw new \Exception("O livro nao esta com o usuario");
            return \false;
        }
        $usuario->removerLivroEmprestado($livro);
        $estante->adicionarLivro($livro);
        $livro->marcarComoDisponivel();
        return \true;
    }
}
