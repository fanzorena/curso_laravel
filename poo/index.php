<?php
/**
 * Created by PhpStorm.
 * User: anzorena
 * Date: 07/10/2015
 * Time: 16:42
 */

require_once 'Pessoa.php';
require_once 'Produto.php';

$joao = new Pessoa('João', 18);
$maria = new Pessoa('Maria', 18);
$joao->beijar($maria);