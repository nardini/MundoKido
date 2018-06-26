<?php
  $login = $_POST['usuario'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);
  $connect = mysql_connect('localhost','root','nardini');
  $db = mysql_select_db('mundokido');
    if (isset($entrar)) {

      $verifica = mysql_query("SELECT * FROM tb_usuario WHERE usuario = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:index.php");
        }
    }
?>
