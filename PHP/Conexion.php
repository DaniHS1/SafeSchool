<?php
  $db_host="localhost";
  $db_name="id9433736_elefanteform";
  $db_login="id9433736_root";
  $db_pswd="Lucky258";
  $db_table_name="usuario";
  $db_connection=mysqli_connect($db_host,$db_login,$db_pswd,$db_name);
  if($db_connection){
    //echo "bien_Conexion";
  }
  else{ echo "error_Conexion";}
?>
