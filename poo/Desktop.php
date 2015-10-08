<?php

/**
 * Created by PhpStorm.
 * User: anzorena
 * Date: 08/10/2015
 * Time: 15:29
 */
class Desktop implements ComputadorInterface
{
    public $placaMae;
    public $processador;
    public $memoria;

    public function __construct($placaMae, $processador, $memoria)
    {
        $this->placaMae = $placaMae;
        $this->processador = $processador;
        $this->memoria = $memoria;
    }

    public function getProcessador()
    {
        // TODO: Implement getProcessador() method.
    }

    public function getMemoria()
    {
        // TODO: Implement getMemoria() method.
    }

    public function getGabinete()
    {
        // TODO: Implement getGabinete() method.
    }

    public function getFonte()
    {
        // TODO: Implement getFonte() method.
    }

    public function getPlacaMae()
    {
        // TODO: Implement getPlacaMae() method.
    }

    public function getComponentes()
    {
        // TODO: Implement getComponentes() method.
    }

    public function getArmazenamento()
    {
        // TODO: Implement getArmazenamento() method.
    }

    public function getPerifericos()
    {
        // TODO: Implement getPerifericos() method.
    }
}