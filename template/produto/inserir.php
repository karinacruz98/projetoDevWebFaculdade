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

                 if(isset($_POST['salvar'])){
                    if(!isset($_SESSION)){
                        session_start();
                    }

                    foreach($_POST as $chave=>$valor){
                        $_SESSION[$chave] = $valor;
                    }

                    $sql = "
                        INSERT INTO produtos(
                            produtos_name,
                            produtos_preco,
                            produtos_categoria,
                            produtos_quantidade)
                        VALUES(
                           '$_SESSION[nome]',
                            $_SESSION[valor],
                           '$_SESSION[categoria]',
                            $_SESSION[quantidade]
                        )
                    ";

                    echo $sql;

                    $result = mysqli_query($conecta, $sql) or die ('Erro ao inserir');

                    if($result){
                        unset($_SESSION[nome],
                        $_SESSION[valor],
                        $_SESSION[categoria],
                        $_SESSION[quantidade]);

                        echo "
                            <script>
                                 alert('Produto inserido com sucesso.');
                            </script>
                        ";

                        echo "<script> location.href='redireciona.php?modulo=produto&acao=listar_admin' </script>";
                    } else {
                        echo $result; 
                    }
                 }

                 mysqli_close($conecta);
            ?>

            <form id="inserir" name="inserir" method="POST">
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