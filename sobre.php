<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sobre</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="sobre.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><b><span class="cabecalho1">P</span><span
                            class="cabecalho2">ine</span><span class="cabecalho1"><span>A</span><span
                                class="cabecalho2">pple</span></b></a>
            </div>
            <ul class="nav navbar-nav">
                <li class=""><a href="index.php">Início</a></li>
                <li><a href="">Sobre</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                    <li><a href="redireciona.php?modulo=cliente&acao=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="redireciona.php?modulo=cliente&acao=cadastro"><span class="glyphicon glyphicon-user"></span> Cadastre-se </a></li>
                </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="sobre">
                <div class="col-md-4">
                    <img src="pineapple.png" alt="PineApple">
                </div>
                <div class="col-md-8">

                    <p>Com o objetivo de aplicar os conceitos vistos em aula, apresentamos nosso campacto e simplicado site de e-commerce.</p>
                    <p><strong>Versão 1.0</strong> representa o <tt>esqueleto</tt> de um site.</p>

                </div>
            </div>
        </div>

        <br>

        <div class="row">
            <h2 style="text-align: center;"><b>Equipe</b></h2>
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="1">
                            <img class="foto-minicurrilo" src="karina.jpeg" alt="Karina Cruz">
                        </td>
                        <td colspan="2"> <a href="karina.php">Karina Cruz</a> </td>
                    </tr>
                    <tr>
                        <td rowspan="1">
                            <img class="foto-minicurrilo" src="paula.jpeg" alt="Paula Fernanda">
                        </td>
                        <td colspan="2"> <a href="paula.php">Paula Fernanda</a> </td>
                    </tr>

                    <tr>
                        <td rowspan="1">
                            <img class="foto-minicurrilo" src="pedro_maia.jpeg" alt="Pedro Henrique Maia">
                        </td>
                        <td colspan="2"> <a href="pedro_maia.php">Pedro Henrique Maia</a> </td>
                    </tr>

                    <tr>
                        <td rowspan="1">
                            <img class="foto-minicurrilo" src="pedro_castro.jpeg" alt="Pedro Henrique Castro">
                        </td>
                        <td colspan="2"> <a href="pedro_castro.php">Pedro Henrique Castro</a> </td>
                    </tr>


                </tbody>
            </table>
        </div>


    </div>
    <footer>
        <code><font size="2" color="black">PineApple Copyright© 2020</font></code>
    </footer>
</body>

</html>