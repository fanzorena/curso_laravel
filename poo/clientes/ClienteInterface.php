<?php

/**
 * Created by PhpStorm.
 * User: anzorena
 * Date: 09/10/2015
 * Time: 16:26
 */
interface ClienteInterface
{
    public function getNome();
    public function setNome($nome);
    public function getTelefone();
    public function setTelefone($telefone);
    public function getEndereco();
    public function setEndereco($endereco);
    public function getIdade();
    public function setIdade($idade);
}