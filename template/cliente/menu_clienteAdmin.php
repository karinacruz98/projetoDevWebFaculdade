<?php
    session_start();
    
    if(isset($_SESSION["usercod"])){
        echo "bem-vindo";
    }  
?> 
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title>Menu</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="menu.css">
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
                echo("<center>Olá, bem vindo! </center>");
            ?>
            
        </main>
        <footer>
            <code><font size="2" color="black">PineApple Copyright© 2020</font></code>
        </footer>
    </div>


</body>

</html>