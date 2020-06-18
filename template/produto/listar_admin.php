<?php
    session_start();
    require 'model/handler.php';

    $dados = Handler::arrayLogin();
?> 
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title>Produtos</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="produto.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

    <header>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><b><span class="cabecalho1">P</span><span
                                class="cabecalho2">ine</span><span class="cabecalho1"><span>A</span><span
                                    class="cabecalho2">pple</span></b></a>
                </div>
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="#"><span class="glyphicon glyphicon-list"></span> Produtos </a></li>
                 </ul>
                 <ul class="nav navbar-nav navbar-right">
                    <li><a href="redireciona.php?modulo=cliente&acao=logout"><span class="glyphicon glyphicon-log-out"></span> Sair </a></li>
                 </ul>
            </div>
        </nav>
    </header>
        <div class="container">
            <main>
            <div class="page-header row col-12">
                <h1>Lista de Produtos</h1>

                <a href="redireciona.php?modulo=produto&acao=inserir" class="btn btn-primary">Inserir</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Categoria</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>

                <?php
                    $servidor="localhost";
                    $usuario="id13244622_admin";
                    $senha="*Devweb101918";
                    $banco="id13244622_banco";
                       
                    $conecta = mysqli_connect($servidor, $usuario, $senha, $banco) or die ('Erro ao conectar');
                   
                    mysqli_select_db($conecta, $banco) or print(mysqli_error($conecta));

                    $sql = 'SELECT * FROM produtos';
                    $result = mysqli_query($conecta, $sql) or die ('Erro ao conectar');

                    while($dado = $result->fetch_array()){
                ?>
                    <tr>
                        <th scope="row"><?php echo $dado['cod_produtos']; ?></th>
                        <td><?php echo $dado['produtos_name']; ?></td>
                        <td><?php echo $dado['produtos_preco']; ?></td>
                        <td><?php echo $dado['produtos_categoria']; ?></td>
                        <td><?php echo $dado['produtos_quantidade']; ?></td>
                        <td>
                            <form method="POST" action="redireciona.php?modulo=produto&acao=excluir">
                                <input type="hidden" value="<?php echo $dado['cod_produtos'] ?>">
                                <input class="btn btn-primary" type="submit" name="excluir" value="Excluir">
                            </form>
                            <form method="POST" action="redireciona.php?modulo=produto&acao=editar">
                                <input type="hidden" value="<?php echo $dado['cod_produtos'] ?>">
                                <input type="hidden" value="<?php echo $dado['produtos_name'] ?>">
                                <input type="hidden" value="<?php echo $dado['produtos_preco'] ?>">
                                <input type="hidden" value="<?php echo $dado['produtos_categoria'] ?>">
                                <input type="hidden" value="<?php echo $dado['produtos_quantidade'] ?>">
                                <input class="btn btn-primary" type="submit" name="editar" value="Editar">
                            </form>
                        </td>
                    </tr>
                       
                <?php
                       }
                    mysqli_close($conecta);
                ?>
            
                </tbody>
                </table>
            </div>
            </main>
            <footer>
                <code><font size="2" color="black">PineApple Copyright© 2020</font></code>
            </footer>
    </div>
</body>

</html>