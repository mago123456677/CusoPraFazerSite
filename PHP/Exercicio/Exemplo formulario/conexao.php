<?php
  /*
   mysqli_connect - É a função no php para fazer a conexão com banco de dados, endereço de host
  */
   $con=mysqli_connect("localhost", "root", "","dbexemplo") or die (mysql_error('Erro na conexão'));   
?>  