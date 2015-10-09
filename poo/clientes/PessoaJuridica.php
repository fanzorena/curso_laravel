<?php
require_once "ClienteInterface.php";

/**
 * Created by PhpStorm.
 * User: anzorena
 * Date: 09/10/2015
 * Time: 16:27
 */
class PessoaJuridica implements ClienteInterface
{
    private $nome;
    private $cnpj;
    private $endereco;
    private $telefone;
    private $enderecoCobranca;
    private $importancia;

    public function __construct($nome, $cnpj, $endereco, $telefone, $importancia, $enderecoCobranca = null)
    {
        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
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

    public function getDocumento()
    {
        return $this->cnpj;
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