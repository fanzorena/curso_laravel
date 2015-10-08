<?php
/**
 * Created by PhpStorm.
 * User: anzorena
 * Date: 08/10/2015
 * Time: 14:14
 */

require_once('poo/Pessoa.php');

echo "Mostrando um pouco das capacidades do sistema<br>";

$joao = new Pessoa('João', 24);
$maria = new Pessoa('Maria', 20);

$joao->convidar($maria);