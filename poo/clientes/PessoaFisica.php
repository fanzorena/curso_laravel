<?php
require_once "ClienteInterface.php";

/**
 * Created by PhpStorm.
 * User: anzorena
 * Date: 09/10/2015
 * Time: 16:27
 */
class PessoaFisica implements ClienteInterface
{
    private $nome;
    private $cpf;
    private $endereco;
    private $telefone;
    private $idade;
    private $enderecoCobranca;
    private $importancia;

    public function __construct($nome, $cpf, $endereco, $telefone, $idade, $importancia, $enderecoCobranca = null)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->idade = $idade;
        $this->importancia = $importancia;
        $this->enderecoCobranca = $enderecoCobranca;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    public function getDocumento()
    {
        return $this->cpf;
    }

    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }

    public function getImportancia()
    {
        return $this->importancia;
    }
}