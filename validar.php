<?php

  $login=$_POST["usuario"];

  $senha=$_POST["senha"];

  if (($login == "root") && ($senha == "root")){

    echo '<script>window.location="usuario.php";</script>';

  }else {

    echo  "<script>alert('Login Incorreto!');</script>";
    include 'index.html';

  }

?>

<!--Verifica se a senha e login são os mesmos solicitados, se sim puxa o usuario.php-->
<!--Se não apresenta a mensagem de erro e volta para a tela de login-->