<?php
require_once "Cliente.php";
require_once "PFInterface.php";

/**
 * Created by PhpStorm.
 * User: anzorena
 * Date: 09/10/2015
 * Time: 16:27
 */
class PessoaFisica extends Cliente implements PFInterface
{
    private $cpf;

    public function __construct($nome, $cpf, $endereco, $telefone, $idade, $importancia, $enderecoCobranca = null)
    {
        $this
            ->setNome($nome)
            ->setEndereco($endereco)
            ->setIdade($idade)
            ->setTelefone($telefone)
            ->setEnderecoCobranca($enderecoCobranca)
            ->setGrauImportancia($importancia)
            ->setCpf($cpf);
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }


}