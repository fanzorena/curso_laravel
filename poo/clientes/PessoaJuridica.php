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
class PessoaJuridica extends Cliente implements ClienteInterface, GrauImportanciaInterface, EnderecoCobrancaInterface
{
    private $cnpj;
    private $enderecoCobranca;
    private $grauImportancia;

    public function __construct($nome, $cnpj, $endereco, $telefone, $importancia, $enderecoCobranca = null)
    {
        $this
            ->setNome($nome)
            ->setEndereco($endereco)
            ->setTelefone($telefone)
            ->setDocumento($cnpj)
            ->setEnderecoCobranca($enderecoCobranca)
            ->setGrauImportancia($importancia);
    }

    public function getDocumento()
    {
        return $this->cnpj;
    }

    public function setDocumento($cnpj)
    {
        $this->cnpj = $cnpj;
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
        $this->grauImportancia = $importancia;
        return $this;
    }

    public function getGrauImportancia()
    {
        return $this->grauImportancia;
    }


}