<?php
  $db_host="localhost";
  $db_name="safeschool";
  $db_login="root";
  $db_pswd="";
  $db_table_name="usuario";
  $db_connection=mysqli_connect($db_host,$db_login,$db_pswd,$db_name);
  if($db_connection){
    //echo "bien_Conexion";
  }
  else{ echo "error_Conexion";}
?>
