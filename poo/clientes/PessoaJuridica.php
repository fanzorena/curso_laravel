<?php
require_once "Cliente.php";
require_once "PJInterface.php";

/**
 * Created by PhpStorm.
 * User: anzorena
 * Date: 09/10/2015
 * Time: 16:27
 */
class PessoaJuridica extends Cliente implements PJInterface
{
    private $cnpj;

    public function __construct($nome, $cnpj, $endereco, $telefone, $importancia, $enderecoCobranca = null)
    {
        $this
            ->setNome($nome)
            ->setEndereco($endereco)
            ->setTelefone($telefone)
            ->setEnderecoCobranca($enderecoCobranca)
            ->setGrauImportancia($importancia)
            ->setCnpj($cnpj);
    }

    /**
     * @param mixed $cnpj
     * @return PessoaJuridica
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }
}