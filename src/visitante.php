<?php

namespace Leo\Bibliotecapoo;

class Visitante extends Usuario
{

    public function podePegarEmprestado(): bool
    {
        return \false;

    }
}
