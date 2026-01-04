<?php


namespace Leo\Bibliotecapoo;

class Estante
{
    private array $livros = [];

    public function adicionarLivro(Livro $livro)
    {
        $this->livros[] = $livro;
    }
    public  function removerLivro(Livro $livro)
    {
        $this->livros = array_filter($this->livros, function ($value) use ($livro) {
            echo 'Livro atual: ' . $value->getTitulo();
            if ($value === $livro) {
                echo "- livro removido";
            }
            echo "<br>";
            return $value !== $livro;
        });
    }
    public function buscarLivroPorTitulo(string $titulo): ?Livro
    {
        foreach ($this->livros as $livro) {
            if (\str_contains(strtolower($livro->getTitulo()), \strtolower($titulo))) {
                return $livro;
            }
        }
        return \null;
    }
    public function listarLivroDisponivel(): array
    {
        $livroDisponiveis = [];
        foreach ($this->livros as $livroAtual) {
            if ($livroAtual->estaDisponivel()) {
                $livroDisponiveis[] = $livroAtual;
            }
        }
        return $livroDisponiveis;
    }
}
