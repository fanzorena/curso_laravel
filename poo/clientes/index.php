<?php require_once 'ListaClientes.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>

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
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p class="panel-title">Lista de Clientes</p>
            </div>
            <div class="panel-body">
                <a href="index.php?order=asc" class="btn btn-default">Ordem crescente <span class="glyphicon glyphicon-arrow-down"></span></a>
                <a href="index.php?order=desc" class="btn btn-default">Ordem decrescente <span class="glyphicon glyphicon-arrow-up"></span></a>
                <br/><br/>
                <div class="list-group">
                    <?php foreach($clientes as $k => $cliente): ?>
                    <a href="detalhes.php?id=<?php echo $k ?>" class="list-group-item"><?php echo $cliente->getNome() ?> - <?php echo ($cliente instanceof PessoaFisica) ? 'Pessoa Física' : 'Pessoa Jurídica' ?></a>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>