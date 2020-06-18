<?php
    session_start();
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>Início</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <style type="text/css">
            #img_produto {
                height: 256px;
                width: 512px;
            }
        </style>

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
                    <li class=""><a href="#">Início</a></li>
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
                <div class="sobre-empresa">
                    <div class="col-md-4">
                        <img src="pineapple.png" alt="PineApple">
                    </div>
                    <div class="col-md-8">
                        <h1>
                            <b><span class="cabecalho1">P</span><span class="cabecalho2">ine</span><span
                                class="cabecalho1"><span>A</span><span class="cabecalho2">pple</span></b>
                        </h1>
                        <p>
                            Uma empresa focada no cliente!
                        </p>
                        <p>
                            Determinados a entregar um bom resultado.
                        </p>
                        <p>
                            Acreditamos que o trabalho em equipe alcança melhores resultados por meio de esforços coletivos, criatividade e contribuições de um todo.
                        </p>

                        <div class="col-md-6">
                            <dl>
                                <dt>Nossa</dt>
                                <dd>
                                    <a href="#missao">Missão</a>
                                </dd>
                                <dd>
                                    <a href="#visao">Visão</a>
                                </dd>
                            </dl>
                        </div>
                        <div class="col-md-6">
                            <dl>
                                <dt>Nossos</dt>
                                <dd>
                                    <a href="#valor">Valores</a>
                                </dd>
                                <dd>
                                    <a href="#produtos">Produtos</a>
                                </dd>
                                <dd>
                                    <a href="#servico">Serviços</a>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="missao" id="missao">
                    <div class="col-lg-6">
                        <p style="margin-top: 110px;">Oferecer o que falta para os nossos clientes, poupando tempo e dinheiro. </p>
                    </div>
                    <div class="col-lg-6">
                        <img src="missao.png" alt="Missão">
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="visao" id="visao">
                    <div class="col-lg-6">
                        <img src="visao.png" alt="Visão">
                    </div>
                    <div class="col-lg-6">
                        <p style="margin-top: 100px;">Desejamos nos tornar uma grande e reconhecida empresa nacial, no quesito de vendas em multi categorias.
                        </p>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="valor" id="valor">
                    <div class="col-lg-6">
                        <p style="margin-top: 110px;">Acreditamos que nossa força está nos nossos colaboradores.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="valor.png" alt="Valores">
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="produto" id="produto">
                    <div class="col-lg-6">
                        <img src="produto.png" alt="Produtos" id="img_produto">
                    </div>
                    <div class="col-lg-6" style="margin-top: 30px;">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="tecnologia" value="Tecnologia" checked disabled>
                            <label class="form-check-label" for="tecnologia">Tecnologia</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="coisa_casa" value="Coisas de Casa" checked disabled>
                            <label class="form-check-label" for="coisa_casa">Coisas de Casa</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="saude" value="Saúde" checked disabled>
                            <label class="form-check-label" for="saude">Saúde</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="calcado" value="Calçado" checked disabled>
                            <label class="form-check-label" for="calcado">Calçado</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="roupa" value="Roupa" checked disabled>
                            <label class="form-check-label" for="roupa">Roupa</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="escolar" value="Material Escolar" checked disabled>
                            <label class="form-check-label" for="escolar">Material Escolar</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="outro" value="Outros" checked disabled>
                            <label class="form-check-label" for="outro">Outros</label>
                        </div>
                    </div>

                </div>
            </div>

            <hr>

            <div class="row">
                <div class="servico" id="servico">
                    <div class="col-lg-6">
                        <h3 style="margin-top: 90px;">Nossos serviços se destacam em 3 categorias:</h3>
                        <ol>
                            <li>
                                <font size="3">Melhores preços do mercado;</font>
                            </li>
                            <li>
                                <font size="3">Suporte 24h, para <i>clientes</i> e <i>vendedores</i>;</font>
                            </li>
                            <li>Maior variedade, graças ao nosso sistema sem <tt>fins lucrativos</tt>.</li>
                        </ol>
                    </div>
                    <div class="col-lg-6">
                        <h2><b>Nossos Serviços</b></h2>
                        <img src="servico.png" alt="Serviços">
                    </div>

                </div>
            </div>

            <hr>

            <div class="row">
                <h2><b><u>Nossa localização física</u></b></h2>

                <div class="endereco">

                    <br>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.2674400241635!2d-46.66106544926244!3d-23.558836467309373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59cd060ea13b%3A0x7c535e9d9784e6c2!2sAv.%20Paulista%2C%202000%20-%20Bela%20Vista%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001310-200!5e0!3m2!1spt-BR!2sbr!4v1586166168491!5m2!1spt-BR!2sbr"
                        width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>


        </div>
        <footer>
            <code><font size="2" color="black">PineApple Copyright© 2020</font></code>
        </footer>

    </body>

    </html>