<?php

  include("Conexion.php");

  if(isset($_POST['btnContactar'])){
//------------------------------------------------------------------------------
  }else if(isset($_POST['btnLog'])){
//------------------------------------------------------------------------------
    $subs_pass = utf8_decode($_POST['LContraseña']);
    $subs_email = utf8_decode($_POST['LCorreo']);
    $text= 'SELECT * FROM `UsuarioP` WHERE `Correo` = "'.$subs_email.'"';

    mysqli_select_db($db_connection, $db_name);
    $sql2=mysqli_query($db_connection,'SELECT * FROM `UsuarioP` WHERE `Correo` = "'.$subs_email.'"');
    if($f2=mysqli_fetch_assoc($sql2)){
    	if($f2['Tipo']=="1"){
    	    if($subs_pass==$f2['Contrasena']){
            session_start();
    		      $_SESSION['idUsuarioP']=$f2['idUsuarioP'];
    	    		$_SESSION['Nombre']=$f2['Nombre'];

    		    	echo '<script>alert("BIENVENIDO USUARIO :D")</script> ';
    		    	echo "<script>location.href='../Inicio.php'</script>";
    		    }
    		    else{
    		        echo '<script>alert("Contraseña incorrecta")</script> ';
    		    	  echo "<script>location.href='../Login.php'</script>";
    		    }
    		}else{
    	     if($subs_pass==$f2['password']){
             session_start();
              $_SESSION['idUsuarioP']=$f2['idUsuarioP'];
    	    		$_SESSION['Nombre']=$f2['Nombre'];

    		    	echo '<script>alert("NO YET")</script> ';
    		    	//echo "<script>location.href='../acceso/index.php'</script>";
    		    }
    		    else{
    		        echo '<script>alert("Contraseña incorrecta")</script> ';
    		    }
    	  }
    	}
    	else{
    	    print "<script>alert(\"Usuario no resgistrado.\");window.location='../Login.php';</script>";
    	}

      mysqli_close($db_connection);
    }
//------------------------------------------------------------------------------
    else if(isset($_POST['btnReg'])){
//------------------------------------------------------------------------------
      $subs_nombre = utf8_decode($_POST['RNombre']);
      $subs_apellidos = utf8_decode($_POST['RApellidos']);
      $subs_correo = utf8_decode($_POST['RCorreo']);
      $subs_contraseña = utf8_decode($_POST['RContraseña']);
      $subs_telefono = utf8_decode($_POST['RTelefono']);
      $subs_direccion = utf8_decode($_POST['RDireccion']);

      $text= 'SELECT * FROM `UsuarioP` WHERE `Correo` = "'.$subs_correo.'"';
      mysqli_select_db($db_connection, $db_name);
      $resultado= mysqli_query($db_connection, $text);

      $row = 0; //$row = mysqli_num_rows($resultado);

      if ($row>0){
        header('alert(\"Ya existe otro usuario con el mismo correo.\");');
      } else {
        $insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`nombre` , `apellidos` , `correo`, `Contrasena`, `telefono`, `direccion`) VALUES ("' . $subs_nombre . '", "' . $subs_apellidos . '", "' . $subs_correo . '", "' . $subs_contraseña . '", "' . $subs_telefono . '", "' . $subs_direccion . '")';
        //mysqli_select_db($db_connection, $db_name);
        $retry_value = mysqli_query($db_connection, $insert_value);
        if (!$retry_value) {
          die('Error: ' . mysqli_error($db_connection));
        }
        $sql2=mysqli_query($db_connection,'SELECT * FROM `UsuarioP` WHERE `Correo` = "'.$subs_email.'"');
        if($f2=mysqli_fetch_assoc($sql2)){
          if($f2['tipo']=="1"){
            if($subs_pass==$f2['Contrasena']){
              $_SESSION['idUsuarioP']=$f2['idUsuarioP'];
            }
          }
          $_SESSION['Nombre']= $subs_nombre;
          header('alert(\"Registro exitoso.\"); Location: ../Inicio.php');
        }
      mysqli_close($db_connection);
}
}

?>
