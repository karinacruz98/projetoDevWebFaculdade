<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title>Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="cadastro.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script>

        function validateForm() {

            var email = document.forms["login"]["email"];
            var senha = document.forms["login"]["senha"];

            if (email.value == "") {
                alert("Por favor, informe seu email!");
                email.focus();
                return false;
            }

          
            if (senha.value == "") {
                alert("Por favor, informe sua senha!");
                senha.focus();
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
                <ul class="nav navbar-nav">
                    <li class=""><a href="index.php">Início</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container">

        <main>
            <form  name="form1" method="POST" action="redireciona.php?modulo=cliente&acao=valida">
                <div class="form-group col-md-12">
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="femail" class="form-control" placeholder="Email" id="email" required /> <br>
                        <label for="senha">Senha</label><br>
                        <input type="password" class="form-control" id="senha" name="fpass" placeholder="Senha" required/><br>
                    </div>
                    <div class="form-row">
                        <input type="submit" name="btnsubmit" value="Entrar" onclick="return validateForm()" class="btn btn-primary" title="Fazer Login"/>
                    </div>
                </div>
            </form>
        </main>
        <footer>
            <code><font size="2" color="black">PineApple Copyright© 2020</font></code>
        </footer>
    </div>

</body>

</html>