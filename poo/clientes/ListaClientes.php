<?php
/**
 * Created by PhpStorm.
 * User: anzorena
 * Date: 08/10/2015
 * Time: 16:27
 */

require_once "PessoaFisica.php";
require_once "PessoaJuridica.php";

$clientes = [
    new PessoaFisica('João', '111.111.111-11', 'Rua das marias, 115 ap 1', '(17) 3878.8118', 22, 1),
    new PessoaJuridica('Icely', '83.812.487/0001-34', 'Rua da clareira, 1520 sala 12', '(23) 3721.4162', 3),
    new PessoaFisica('Maria', '222.222.222-22', 'Rua das marias, 115 ap 2', '(17) 3878.8218', 18, 2),
    new PessoaJuridica('Preditors', '59.053.693/0001-23', 'Rua general coutinho, 120 sala 1', '(23) 3427.4162', 1, 'Rua general coutinho, 120 sala 4'),
    new PessoaFisica('José', '222.222.222-22', 'Rua das marias, 115 ap 3', '(17) 3878.8318', 60, 4),
    new PessoaFisica('Moisés', '333.333.333-33', 'Rua das marias, 115 ap 4', '(17) 3878.8418', 31, 3),
    new PessoaJuridica('Bowerff', '67.439.740/0001-08', 'Rua vasco da gama, 510 sala 102', '(23) 3321.7164', 3),
    new PessoaJuridica('Agreemed', '86.671.688/0001-57', 'Rua da clareira, 1520 sala 12', '(23) 3823.4961', 3, 'Avenida arnoldo figueira, 720'),
    new PessoaFisica('Cléber', '555.555.555-55', 'Rua das marias, 115 ap 6', '(17) 3878.8618', 45, 1),
    new PessoaFisica('Renata', '777.777.777-77', 'Rua das marias, 115 ap 8', '(17) 3878.8218', 36, 5),
    new PessoaJuridica('Sparents', '90.283.578/0001-95', 'Rua maria souza, 327 sala 43', '(23) 3756.1173', 3),
];

if(isset($_GET['order']) && $_GET['order'] == 'desc') {
    krsort($clientes);
}