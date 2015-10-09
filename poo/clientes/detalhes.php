<?php
    require_once 'ListaClientes.php';
    $cliente = $clientes[$_GET['id']];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clientes - <?php echo $cliente->getNome() ?></title>

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
        <h2><?php echo $cliente->getNome();?></h2>
        <ul>
            <li><p><strong>Tipo: </strong> <?php echo ($cliente instanceof PessoaFisica) ? 'Pessoa Física' : 'Pessoa Jurídica' ?></p></li>
            <?php if($cliente instanceof PessoaFisica): ?>
            <li><p><strong>Idade: </strong> <?php echo $cliente->getIdade() ?></p></li>
            <?php endif; ?>
            <li><p><strong>CPF/CNPJ: </strong><?php echo $cliente->getDocumento() ?></p></li>
            <li><p><strong>Endereço: </strong><?php echo $cliente->getEndereco() ?></p></li>
            <?php if (!empty($cliente->getEnderecoCobranca())): ?>
            <li><p><strong>Endereço de Cobrança: </strong> <?php echo $cliente->getEnderecoCobranca() ?></p></li>
            <?php endif; ?>
            <li><p><strong>Telefone: </strong><?php echo $cliente->getTelefone() ?></p></li>
            <li>
                <p><strong>Classificação:</strong>
                <?php for($i = 1; $i <= 5; $i++): ?>
                <span class="glyphicon <?php echo ($i <= $cliente->getImportancia()) ? 'glyphicon-star' : 'glyphicon-star-empty' ?>"></span>
                <?php endfor; ?>
                </p>
            </li>
        </ul>
        <a href="index.php" class="btn btn-default">Voltar</a>
    </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>