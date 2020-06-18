<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title>Cadastro</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="cadastro.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script>
        function confirmarCadastro() {
            alert("Usuário cadastrado com sucesso.");
        }

        function validateForm() {
            var nome = document.forms["cadastro"]["nome"];
            var sexo = document.forms["cadastro"]["sexo"];
            var data_nascimento = document.forms["cadastro"]["data_nascimento"];
            var estado_civil = document.forms["cadastro"]["estado_civil"];
            var endereco = document.forms["cadastro"]["endereco"];
            var email = document.forms["cadastro"]["email"];
            var confirm_email = document.forms["cadastro"]["confirm_email"];
            var senha = document.forms["cadastro"]["senha"];
            var confirm_senha = document.forms["cadastro"]["confirm_senha"];
            var telefone_residencial = document.forms["cadastro"]["telefone_residencial"];
            var telefone_celular = document.forms["cadastro"]["telefone_celular"];
            var mensagem = document.forms["cadastro"]["mensagem"];

            if (nome.value == "") {
                alert("Por favor, informe seu nome!");
                nome.focus();
                return false;
            }

            if (sexo.value == "") {
                alert("Por favor, selecione seu gênero!");
                return false;
            }

            if (data_nascimento.value == "") {
                alert("Por favor, informe sua data de nascimento!");
                data_nascimento.focus();
                return false;
            }

            if (estado_civil.value == "") {
                alert("Por favor, informe seu estado civil!");
                estado_civil.focus();
                return false;
            }

            if (endereco.value == "") {
                alert("Por favor, informe seu endereço!");
                endereco.focus();
                return false;
            }

            if (email.value == "") {
                alert("Por favor, informe seu email!");
                email.focus();
                return false;
            }

            if (confirm_email.value == "") {
                alert("Por favor, confirme seu email!");
                confirm_email.focus();
                return false;
            }

            if (email.value != confirm_email.value) {
                alert("O email não corresponde com sua confirmação!");
                email.focus();
                confirm_email.focus();
                return false;
            }

            if (senha.value == "") {
                alert("Por favor, informe sua senha!");
                senha.focus();
                return false;
            }

            if (confirm_senha.value == "") {
                alert("Por favor, confirme sua senha!");
                confirm_senha.focus();
                return false;
            }

            if (senha.value != confirm_senha.value) {
                alert("A senha não corresponde com sua confirmação!");
                senha.focus();
                confirm_senha.focus();
                return false;
            }

            if (telefone_residencial.value == "") {
                alert("Por favor, informe seu telefone residencial!");
                telefone_residencial.focus();
                return false;
            }

            if (telefone_celular.value == "") {
                alert("Por favor, informe seu telefone celular!");
                telefone_celular.focus();
                return false;
            }

            if (mensagem.value == "") {
                alert("Por favor, nos deixe uma mensagem! :)");
                mensagem.focus();
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
                    <li class=""><a href="../../index.php">Início</a></li>
                    <li><a href="../../sobre.php">Sobre</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container">

        <main>
            <form id="cadastro" name="cadastro" method="POST" action="confirma_cadastro.php">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <fieldset>
                            <legend style="font-weight: bold;">Dados Pessoais</legend>

                            <div class="form-group col-md-12">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                            </div>

                            <div class="form-group col-md-4">
                                <div class="col-md-2">
                                    <label>Gênero:</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="radio" class="form-check-input" id="sexoFem" name="sexo" value="F">
                                    <label class="form-check-label" for="sexoFem">Feminino</label>
                                    <br>
                                    <input type="radio" class="form-check-input" id="sexoMasc" name="sexo" value="M">
                                    <label class="form-check-label" for="sexoMasc">Masculino</label>
                                </div>
                            </div>

                            <div class="form-group col-md-4" id="data_nascimento">
                                <label for="data_nascimento">Nascimento</label>
                                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="Data de Nascimento">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="estado_civil">Estado Civil</label>
                                <select id="estado-civil" class="form-control" id="estado_civil" name="estado_civil">
                                    <option selected>Solteiro</option>
                                    <option>Casado</option>
                                    <option>Viúvo</option>
                                    <option>Separado judicialmente</option>
                                    <option>Divorciado</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="endereco">Endereço</label>
                                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço">
                            </div>
                        </fieldset>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <fieldset>
                            <legend style="font-weight: bold;">Conta</legend>


                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="confirm_email">Email</label>
                                <input type="email" class="form-control" id="confirm_email" name="confirm_email" placeholder="Confirme seu Email">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="senha">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="confirm_senha">Senha</label>
                                <input type="password" class="form-control" id="confirm_senha" name="confirm_senha" placeholder="Confirme sua Senha">
                            </div>
                        </fieldset>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-12">
                        <fieldset>
                            <legend style="font-weight: bold;">Contatos</legend>

                            <div class="form-group col-md-6">
                                <label for="telefone_residencial">Telefone Residencial</label>
                                <input type="text" class="form-control" id="telefone_residencial" name="telefone_residencial" placeholder="Telefone Residencial">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="telefone_celular">Telefone Celular</label>
                                <input type="text" class="form-control" id="telefone_celular" name="telefone_celular" placeholder="Telefone Celular">
                            </div>
                        </fieldset>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="mensagem">Mensagegem</label>
                        <textarea class="form-control" id="mensagem" name="mensagem" rows="3" placeholder="Deixe sua mensagem..."></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <button type="submit" onclick="return validateForm()" class="btn btn-primary" title="Enviar Cadastro">Cadastrar</button>
                </div>
            </form>

        </main>
        <footer>
            <code><font size="2" color="black">PineApple Copyright© 2020</font></code>
        </footer>
    </div>

</body>

</html>