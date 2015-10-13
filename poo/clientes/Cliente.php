<?php

require_once('ClienteInterface.php');
require_once('EnderecoCobrancaInterface.php');
require_once('GrauImportanciaInterface.php');

class Cliente implements ClienteInterface, EnderecoCobrancaInterface, GrauImportanciaInterface
{
    private $nome;
    private $endereco;
    private $telefone;
    private $idade;
    private $enderecoCobranca;
    private $importancia;

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
        return $this;
    }

    public function setEnderecoCobranca($enderecoCobranca)
    {
        $this->enderecoCobranca = $enderecoCobranca;
        return $this;
    }

    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }

    public function setGrauImportancia($importancia)
    {
        $this->importancia = $importancia;
        return $this;
    }

    public function getGrauImportancia()
    {
        return $this->importancia;
    }
}