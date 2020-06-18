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
                <li><a href="sobre.php">Sobre</a></li>
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
            <div class="col-md-4">
                <img class="foto" src="pedro_castro.jpeg" alt="Pedro Henrique Castro">
            </div>
            <div class="col-md-8">

                <h4><b>PEDRO HENRIQUE CASTRO DOS SANTOS</b></h4>

                <strong>Formação</strong>
                <ul>
                    <li>Ciências da Computaçao - Universidade Anhembi Morumbi (Cursando)</li>
                    <li>Técnico em Desenvolvimento de Sistemas - SENAI São Paulo (Concluído)</li>
                    <li>Técnico em Informática - ETEC Centro Paula Souza (Concluído)</li>
                </ul>

                <strong>Conhecimentos</strong>
                <ul>
                    <li>Linguagens de programação: Android, Java, JavaEE, C, Dart e TypeScript.</li>
                    <li>Frameworks: Spring Boot, Spring Framework, Hibernate, JPA, GWT e SmartGWT.</li>
                    <li>Banco de dados: MySQL, PostgreSQL e SQL Server.</li>
                    <li>Front-end: Flutter, HTML, CSS, Bootstrap, Angular (7 em diante), JavaScript e jQuery.</li>
                    <li>Versionamento: GIT.</li>
                    <li>Conceitos de desenvolvimento ágil, Entrega Contínua e Padrões de Projetos.</li>
                </ul>

                <strong>Cursos</strong>
                <ul>
                    <li>Flutter - Udemy(Cursando)</li>
                    <li>DevOps - Udemy(Cursando)</li>
                    <li>Testes Unitários com JUnit - Udemy(Concluído)</li>
                    <li>Padrões de Projeto - Udemy(Concluído)</li>
                    <li>GIT para iniciantes - Udemy(Concluído)</li>
                    <li>Programação Orientada a Objetos - Curso em Vídeo (Concluído)</li>
                    <li>Inglês - iW (Interrompido)</li>
                </ul>

                <strong>Habilidades</strong>
                <ul>
                    <li>Agilidade.</li>
                    <li>Proatividade.</li>
                    <li>Crítico.</li>
                    <li>Organização.</li>
                    <li>Trabalho em equipe.</li>
                    <li>Rápida aprendizagem.</li>
                </ul>

                <strong>Intresses</strong>
                <ul>
                    <li>Se desenvolver pessoalmente, assim como profissionalmente, oferencendo um melhor desempenho em atividades e tarefas atribuído a mim.</li>
                </ul>

                <strong>Hobbies</strong>
                <ul>
                    <dd>
                        <li>Cozinhar.</li>
                        <li>Jogar com colegas e amigos.</li>
                        <li>Passar o tempo com minha família e animais de estimação.</li>
                        <li>Pesca Esportiva.</li>
                        <li>Programar.</li>
                    </dd>
                </ul>

            </div>
        </div>

        <h3 style="text-align: center;"><b>Contatos</b></h3>
        <div class="row">

            <div class="col-md-4">
                <a href="https://portal.anhembi.br/" title="Universidade">
                    <img class="contato-img" src="data:image/jpeg;base64,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">
                </a>
            </div>
            <div class="col-md-4">
                <a href="https://instagram.com/pdrh1/" title="Instagram">
                    <img class="contato-img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/599px-Instagram_icon.png">
                </a>
            </div>
            <div class="col-md-4">
                <a href="https://www.linkedin.com/in/pedro-henrique-castro-061779148/" title="Linkedin">
                    <img class="contato-img" src="https://jornaldoempreendedor.com.br/wp-content/uploads/2015/02/linkedin-perfil.png">
                </a>
            </div>


        </div>
    </div>

    <footer>
        <code><font size="2" color="black">PineApple Copyright© 2020</font></code>
    </footer>

</body>

</html>