<?php

namespace Leo\Bibliotecapoo;

class Professor extends Usuario
{
    private const MAX_LIVROS_EMPRESTADO = 3;

    public function podePegarEmprestado(): bool
    {
        return count($this->livrosEmprestados) < self::MAX_LIVROS_EMPRESTADO;
    }
}
