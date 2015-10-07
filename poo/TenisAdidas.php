<?php

/**
 * Created by PhpStorm.
 * User: anzorena
 * Date: 07/10/2015
 * Time: 18:29
 */
class TenisAdidas extends Produto implements TenisInterface
{
    private $cor;
    private $tamanho;

    public function getCor()
    {
        return $this->cor;
    }

    public function getTamanho()
    {
        return $this->tamanho;
    }
}