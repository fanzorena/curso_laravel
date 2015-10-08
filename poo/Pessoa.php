<?php

/**
 * Created by PhpStorm.
 * User: anzorena
 * Date: 07/10/2015
 * Time: 16:03
 */
class Pessoa
{
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function beijar(Pessoa $object)
    {
        echo sprintf('%s beijou %s!', $this->nome, $object->nome);
    }

    public function convidar(Pessoa $object)
    {
        echo sprintf('%s convidou %s para sair!', $this->nome, $object->nome);
    }
}