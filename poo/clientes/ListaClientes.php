<?php
/**
 * Created by PhpStorm.
 * User: anzorena
 * Date: 08/10/2015
 * Time: 16:27
 */

require_once "Cliente.php";

$clientes = [
    new Cliente('João', '111.111.111-11', 'Rua das marias, 115 ap 1', '(17) 3878.8118', 22),
    new Cliente('Maria', '222.222.222-22', 'Rua das marias, 115 ap 2', '(17) 3878.8218', 18),
    new Cliente('José', '222.222.222-22', 'Rua das marias, 115 ap 3', '(17) 3878.8318', 60),
    new Cliente('Moisés', '333.333.333-33', 'Rua das marias, 115 ap 4', '(17) 3878.8418', 31),
    new Cliente('Junior', '444.444.444-44', 'Rua das marias, 115 ap 5', '(17) 3878.8518', 27),
    new Cliente('Cléber', '555.555.555-55', 'Rua das marias, 115 ap 6', '(17) 3878.8618', 45),
    new Cliente('Aline', '666.666.666-66', 'Rua das marias, 115 ap 7', '(17) 3878.8718', 23),
    new Cliente('Renata', '777.777.777-77', 'Rua das marias, 115 ap 8', '(17) 3878.8218', 36),
    new Cliente('Joana', '888.888.888-88', 'Rua das marias, 115 ap 9', '(17) 3878.8918', 28),
    new Cliente('Adão', '999.999.999-99', 'Rua das marias, 115 ap 10', '(17) 3878.8028', 33),
];

if(isset($_GET['order']) && $_GET['order'] == 'desc') {
    krsort($clientes);
}