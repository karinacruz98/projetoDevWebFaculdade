<?php 
    $servidor="localhost";
    $usuario="id13244622_admin";
    $senha="*Devweb101918";
    $banco="id13244622_banco";
       
    $conecta = mysqli_connect($servidor, $usuario, $senha, $banco) or die ('Erro ao conectar');
   
    mysqli_select_db($conecta, $banco) or print(mysqli_error($conecta));

    if (isset($_POST['cod_produtos'])){
        $cod_produtos = intval($_POST['cod_produtos']);
    }
    $sql = "DELETE FROM produtos WHERE cod_produtos = '$cod_produtos'";
    $result = mysqli_query($conecta, $sql) or die ('Erro ao excluir produto.');

    if($result){
        echo "
            <script>
                alert('Produto excluído com sucesso.');
                location.href='redireciona.php?modulo=produto&acao=listar_admin';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Ocorreu um erro ao tentar excluir o produto.');
                location.href='redireciona.php?modulo=produto&acao=listar_admin';
            </script>
        ";
    }
    mysqli_close($conecta);
?>