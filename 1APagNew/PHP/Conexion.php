<?php
  $db_host="localhost";
  $db_name="id9783016_sc1";
  $db_login="id9783016_root";
  $db_pswd="familia21";
  $db_table_name="UsuarioP";
  $db_connection=mysqli_connect($db_host,$db_login,$db_pswd,$db_name);
  if($db_connection){
    //echo "bien_Conexion";
  }
  else{ echo "error_Conexion";}
?>
