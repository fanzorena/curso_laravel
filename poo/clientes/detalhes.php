<?php
    require_once 'ListaClientes.php';
    $cliente = $clientes[$_GET['id']];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clientes - <?php echo $cliente->nome ?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Clientes</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Lista</a></li>
            </ul>
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>

<div class="container">
    <div class="well">
        <h2><?php echo $cliente->nome;?></h2>
        <ul>
            <li><p><strong>Idade: </strong> <?php echo $cliente->idade ?></p></li>
            <li><p><strong>CPF: </strong><?php echo $cliente->cpf ?></p></li>
            <li><p><strong>Endereço: </strong><?php echo $cliente->endereco ?></p></li>
            <li><p><strong>Telefone: </strong><?php echo $cliente->telefone ?></p></li>
        </ul>
        <a href="index.php" class="btn btn-default">Voltar</a>
    </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>