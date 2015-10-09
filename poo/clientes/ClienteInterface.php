<?php

/**
 * Created by PhpStorm.
 * User: anzorena
 * Date: 09/10/2015
 * Time: 16:26
 */
interface ClienteInterface
{
    public function getDocumento();
    public function getEnderecoCobranca();
    public function getImportancia();
}