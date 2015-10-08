<?php

/**
 * Created by PhpStorm.
 * User: anzorena
 * Date: 08/10/2015
 * Time: 15:24
 */
interface ComputadorInterface
{
    public function getProcessador();
    public function getMemoria();
    public function getGabinete();
    public function getFonte();
    public function getPlacaMae();
    public function getComponentes();
    public function getArmazenamento();
    public function getPerifericos();
}