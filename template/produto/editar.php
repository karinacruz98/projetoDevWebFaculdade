<?php
    session_start();
    require 'model/handler.php';

    $dados = Handler::arrayLogin();
?> 
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="produto.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script>
        function validateForm() {
            var nome = document.forms["inserir"]["nome"];
            if (nome.value == "") {
                alert("Por favor, informe seu o nome do produto!");
                nome.focus();
                return false;
            }
        }
    </script>

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
                    <li><a href="redireciona.php?modulo=produto&acao=listar_admin"><span class="glyphicon glyphicon-list"></span> Produtos </a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="redireciona.php?modulo=cliente&acao=logout"><span class="glyphicon glyphicon-log-out"></span> Sair </a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <main>

            <?php
                 $servidor="localhost";
                 $usuario="id13244622_admin";
                 $senha="*Devweb101918";
                 $banco="id13244622_banco";
                    
                 $conecta = mysqli_connect($servidor, $usuario, $senha, $banco) or die ('Erro ao conectar');
                
                 mysqli_select_db($conecta, $banco) or print(mysqli_error($conecta));


                foreach($_POST as $chave=>$valor){
                    $_SESSION[$chave] = $valor;
                }

                if (isset($_POST['cod_produtos'])){
                    $id = intval($_POST['cod_produtos']);
                }

                print($id);

                 if(isset($_POST['salvar'])){
                    $sql = "
                        UPDATE produtos SET produtos_name = '$_SESSION[nome]',
                        produtos_preco = '$_SESSION[nome]',
                        produtos_categoria = '$_SESSION[categoria]',
                        produtos_quantidade = $_SESSION[quantidade]
                        WHERE cod_produtos = $_SESSION[id]
                    ";

                    echo $sql;

                    $result = mysqli_query($conecta, $sql) or die ('Erro ao alterar');

                    if($result){
                        echo "
                            <script>
                                 alert('Produto alterarado com sucesso.');
                            </script>
                        ";

                        echo "<script> location.href='redireciona.php?modulo=produto&acao=listar_admin' </script>";
                    } else {
                        echo $result; 
                    }
                 }
            ?>

            <form id="alterar" name="alterar" method="POST">
            <div class="form-row">
                    <div class="form-group col-md-12">
                        <div class="form-group col-md-12">
                            <label for="id">ID:</label>
                            <label id="id" name="id"></label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <div class="form-group col-md-12">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <div class="form-group col-md-4">
                            <label for="valor">Valor</label>
                            <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="categoria">Categoria</label>
                            <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoria">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="quantidade">Quantidade</label>
                            <input type="text" class="form-control" id="quantidade" name="quantidade" placeholder="Quantidade">
                        </div>
                    </div>
                </div>

                <input class="btn btn-primary" type="submit" name="salvar" onclick="return validateForm()" value="salvar">

            </form>
        </main>
        <footer>
            <code><font size="2" color="black">PineApple Copyright© 2020</font></code>
        </footer>
    </div>
</body>

</html>