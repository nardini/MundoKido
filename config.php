<?php
# FUNÇÃO NATIVA PARA CONEXÃO COM BANCO
#TRADUZINDO: mysql_connect('seu_server', 'usuario', 'senha', 'banco de dados que será utilizado');
$conexao = mysqli_connect('localhost','root','nardini', 'mundokido') or die('erro de conexão no banco de dados');

?>
