<?php

namespace Tests;

use Dojo\Livraria;
use Dojo\Livro;


class  ColecaoLivrariaTest extends \PHPUnit_Framework_TestCase{


    public function testCriarColecaoVazia()
    {
        $livraria = new Livraria();

        $this->assertEmpty($livraria->count());
    }

    public function testDevePossuirSeteTitulos()
    {
        $livraria = new Livraria();

        $livro = new Livro();


        $livraria->adicionaLivro($livro);
        $livraria->adicionaLivro($livro);
        $livraria->adicionaLivro($livro);
        $livraria->adicionaLivro($livro);
        $livraria->adicionaLivro($livro);
        $livraria->adicionaLivro($livro);
        $livraria->adicionaLivro($livro);



        $this->assertEquals(7,$livraria->count());
    }

    /**
     * @expectedException LivrosIguais
     */
    public function testDevePossuirSeteTitulosDistintos()
    {
        $livraria = new Livraria();

        $livro = new Livro();


        $livraria->adicionaLivro($livro);
        $livraria->adicionaLivro($livro);
        $livraria->adicionaLivro($livro);
        $livraria->adicionaLivro($livro);
        $livraria->adicionaLivro($livro);
        $livraria->adicionaLivro($livro);
        $livraria->adicionaLivro($livro);
    }
}