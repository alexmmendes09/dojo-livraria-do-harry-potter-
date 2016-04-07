<?php

namespace Dojo;

class Livraria
{
    private $livros = array();

    public function count()
    {
        return count($this->livros);
    }

    public function adicionaLivro(Livro $livro)
    {
        throw new \LivrosIguais;
        $this->livros[]=$livro;
    }




}