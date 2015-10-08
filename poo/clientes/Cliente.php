<?php

/**
 * Created by PhpStorm.
 * User: anzorena
 * Date: 08/10/2015
 * Time: 16:25
 */
class Cliente
{
    public $nome;
    public $cpf;
    public $endereco;
    public $telefone;
    public $idade;

    public function __construct($nome, $cpf, $endereco, $telefone, $idade)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->idade = $idade;
    }
}