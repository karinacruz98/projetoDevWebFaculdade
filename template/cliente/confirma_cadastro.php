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
        function cadastrosuccess(){
            setTimeout("window.location='redireciona.php?modulo=cliente&acao=login'",3000);
        }
        
        function cadastrofailed(){
            setTimeout("window.location='redireciona.php?modulo=cliente&acao=cadastro",3000);
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
        <main>
            <?php
                $servidor="localhost";
                $usuario="id13244622_admin";
                $senha="*Devweb101918";
                $banco="id13244622_banco";
                    
                $conecta = mysqli_connect($servidor, $usuario, $senha, $banco) or die ('Erro ao conectar');
                
                mysqli_select_db($conecta, $banco) or print(mysqli_error($conecta));
                
                $nome=$_POST["nome"];
                $sexo=$_POST["sexo"];
                $data_nascimento=$_POST["data_nascimento"];
                $estado_civil=$_POST["estado_civil"];
                $endereco=$_POST["endereco"];
                $email=$_POST["email"];
                $senha=$_POST["senha"];
                $tel_residencial=$_POST["telefone_residencial"];
                $tel_celular=$_POST["telefone_celular"];
                $mensagem=$_POST["mensagem"];
                
                $sql = "INSERT INTO user_regs (user_name, user_email, user_pass, user_genero, user_nascimento, user_estadoCivil, user_telResidencial, user_telCelular, user_mensagem, user_endereco)
                VALUES('$nome', '$email', aes_encrypt('$senha', 'UAM'), '$sexo', '$data_nascimento', '$estado_civil', '$tel_residencial', '$tel_celular', '$mensagem', '$endereco')";
                
                $sqlConfirma = "SELECT * from user_regs where user_email='$email'";
                
                $result = mysqli_query($conecta, $sqlConfirma) or die ('Erro ao conectar2');
                $row=mysqli_num_rows($result);
                
                if($row > 0){
                    echo "<center> Já existe um usuário registrado com esse email</center>";
                    echo "<script>cadastrofailed()</script>";}
                else{
                    if (mysqli_query($conecta, $sql)) {
                        echo "<br><center>Registro realizado com sucesso</center>";
                        echo "<script>cadastrosuccess()</script>";
                    } else {
                      echo "Error: " . $sql . "<br>" . mysqli_error($conecta);
                    }
                }
                   
                mysqli_close($conecta);


            ?>
            
        </main>
        <footer>
            <code><font size="2" color="black">PineApple Copyright© 2020</font></code>
        </footer>
    </div>


</body>

</html>