<?php
 session_start();
?>

<meta charset="UTF-8">
<font face="arial" color="black" size="4">

<script type="text/javascript">
    function loginsuccess(){
        setTimeout("window.location='redireciona.php?modulo=cliente&acao=menu_cliente'",3000);
    }
    
    function loginsuccessAdmin(){
        setTimeout("window.location='redireciona.php?modulo=cliente&acao=menu_clienteAdmin'",3000);
    }
    
    function loginfailed(){
        setTimeout("window.location='redireciona.php?modulo=cliente&acao=login'",3000);
    }
</script>

<?php
    $servidor="localhost";
    $usuario="id13244622_admin";
    $senha="*Devweb101918";
    $banco="id13244622_banco";
    
$conecta = mysqli_connect($servidor, $usuario, $senha, $banco) or die ('Erro ao conectar');

mysqli_select_db($conecta, $banco) or print(mysqli_error($conecta));

$vemail=$_POST["femail"];
$vpass=$_POST["fpass"];

$sql = "SELECT * from user_regs where user_email='$vemail' and aes_decrypt(user_pass, 'UAM')='$vpass'";

$result = mysqli_query($conecta, $sql) or die ('Erro ao conectar2');
$row=mysqli_num_rows($result);
$rowAdmin = mysqli_fetch_assoc($result);

if($row > 0){
    if($rowAdmin["admin"] == 1){
    while($consulta = mysqli_fetch_array($result)){
          $_SESSION["usercod"]=$consulta['cod_reg'];}
          echo "<center> Você foi autenticado com sucesso admin! Aguarde um instante...</center>";
          echo "<script>loginsuccessAdmin()</script>";}
    else{
        while($consulta = mysqli_fetch_array($result)){
            $_SESSION["usercod"]=$consulta['cod_reg'];}
            echo "<center> Você foi autenticado com sucesso! Aguarde um instante...</center>";
            echo "<script>loginsuccess()</script>";
    }
}else{
    echo "<center> Você não foi autenticado com sucesso! Aguarde um instante...</center>";
    echo "<script>loginfailed()</script>";
}

   
mysqli_close($conecta);


?>

  </font>
  </meta>