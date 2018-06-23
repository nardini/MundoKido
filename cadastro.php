<?php
//include serve para incluir um arquivo (já existente), no arquivo que será utilizado.
$conexao = mysqli_connect('localhost','root','nardini', 'mundokido') or die('erro de conexão no banco de dados');

if($_POST['usuario'] == '')
      {
        echo 'Por favor, preencha o campo "usuario".';
      }
      else if ($_POST['nome_usuario'] == '')
      {
        echo 'Por favor, preencha o campo "nome".';
      }
      else if ($_POST['endereco_usuario'] == '')
      {
        echo 'Por favor, preencha o campo "endereço".';
      }
      else if ($_POST['email_usuario'] == '')
      {
        echo 'Por favor, preencha o campo "email".';
      }
      else if ($_POST['idade_usuario'] == '')
      {
        echo 'Por favor, preencha o campo "idade".';
      }
      else if ($_POST['senha'] == '')
      {
        echo 'Por favor, preencha o campo "senha".';
      }



    $usuario = $_POST['usuario'];
    $nome_usuario = $_POST['nome_usuario'];
    $endereco_usuario = $_POST['endereco_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $idade_usuario = $_POST['idade_usuario'];
    $senha = $_POST['senha'];


#inserir os registros no banco de dados
mysqli_query($conexao, "insert into tb_usuario (id_usuario, nome_usuario, endereco_usuario, email_usuario, idade_usuario,senha)
values ($usuario, '$nome_usuario','$endereco_usuario','$email_usuario',$idade_usuario,'$senha')") or die (mysqli_error($conexao));

?>
