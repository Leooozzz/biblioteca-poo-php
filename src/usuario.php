<?php


namespace Leo\Bibliotecapoo;



abstract class Usuario
{

    protected array $livrosEmprestados = [];

    public function __construct(protected string $nome) {}


    abstract function podePegarEmprestado(): bool;

    public function adicionarLivroEmprestado(Livro $livro): void
    {
        if ($this->podePegarEmprestado()) {
            $this->livrosEmprestados[] = $livro;
        }
    }
    public function removerLivroEmprestado(Livro $livro): void
    {
        $this->livrosEmprestados = \array_filter(
            $this->livrosEmprestados,
            fn($value) => $value  !== $livro
        );
    }
    public function listarLivrosEmprestados(): array
    {
        return $this->livrosEmprestados;
    }
}
