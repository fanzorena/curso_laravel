<?php
require_once "Cliente.php";
require_once "ClienteInterface.php";
require_once "GrauImportanciaInterface.php";
require_once "EnderecoCobrancaInterface.php";

/**
 * Created by PhpStorm.
 * User: anzorena
 * Date: 09/10/2015
 * Time: 16:27
 */
class PessoaFisica extends Cliente implements ClienteInterface, GrauImportanciaInterface, EnderecoCobrancaInterface
{
    private $cpf;
    private $enderecoCobranca;
    private $grauImportanca;

    public function __construct($nome, $cpf, $endereco, $telefone, $idade, $importancia, $enderecoCobranca = null)
    {
        $this
            ->setNome($nome)
            ->setEndereco($endereco)
            ->setIdade($idade)
            ->setTelefone($telefone)
            ->setDocumento($cpf)
            ->setEnderecoCobranca($enderecoCobranca)
            ->setGrauImportancia($importancia);
    }

    public function getDocumento()
    {
        return $this->cpf;
    }

    public function setDocumento($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }

    public function setEnderecoCobranca($enderecoCobranca)
    {
        $this->enderecoCobranca = $enderecoCobranca;
        return $this;
    }

    public function getGrauImportancia()
    {
        return $this->grauImportanca;
    }

    public function setGrauImportancia($importancia)
    {
        $this->grauImportanca = $importancia;
        return $this;
    }


}