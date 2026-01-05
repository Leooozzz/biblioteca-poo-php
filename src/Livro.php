<?php

namespace Leo\Bibliotecapoo;

class Livro
{
    private bool $disponivel = false;

    public function __construct(private string $titulo, private string $autor) {}

    public function marcarComoEmprestado()
    {
        $this->disponivel = false;
    }

    public function marcarComoDisponivel()
    {
        $this->disponivel = true;
    }

    public function estaDisponivel()
    {
        return $this->disponivel;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }
}
