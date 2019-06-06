<?php

  include("Conexion.php");

  if(isset($_POST['btnContactar'])){

  }else if(isset($_POST['btnLog'])){


    $subs_pass = utf8_decode($_POST['LContraseña']);
    $subs_email = utf8_decode($_POST['LCorreo']);
    $text= 'SELECT * FROM `usuarios` WHERE `Correo` = "'.$subs_email.'"';
    mysqli_select_db($db_connection, $db_name);
    $resultado= mysqli_query($db_connection, $text);

    $row = mysqli_num_rows($resultado);

    mysqli_select_db($db_connection, $db_name);
    $sql2=mysqli_query($db_connection,'SELECT * FROM `usuario` WHERE `Correo` = "'.$subs_email.'"');
    if($f2=mysqli_fetch_assoc($sql2)){
    	if($f2['tipo']=="1"){
    	    if($subs_pass==$f2['Contraseña']){
    		      $_SESSION['idUsuario']=$f2['idUsuario'];
    	    		$_SESSION['Nombre']=$f2['Nombre'];

    		    	echo '<script>alert("BIENVENIDO USUARIO :D")</script> ';
    		    	echo "<script>location.href='../Inicio.html'</script>";
    		    }
    		    else{
    		        echo '<script>alert("Contraseña incorrecta")</script> ';
    		    	echo "<script>location.href='../Login.html'</script>";
    		    }
    		}else{
    	     if($subs_pass==$f2['password']){
    	    		$_SESSION['usuario']=$f2['usuario'];

    		    	echo '<script>alert("NO YET")</script> ';
    		    	//echo "<script>location.href='../acceso/index.php'</script>";
    		    }
    		    else{
    		        echo '<script>alert("Contraseña incorrecta")</script> ';
    		    	echo "<script>location.href='login.html'</script>";
    		    }
    	  }
    	}
    	else{
    	    print "<script>alert(\"Usuario no resgistrado.\");window.location='../Login.html';</script>";
    	}

      mysqli_close($db_connection);
    }
    else if(isset($_POST['btnReg'])){
      $subs_nombre = utf8_decode($_POST['RNombre']);
      $subs_apellidos = utf8_decode($_POST['RApellidos']);
      $subs_correo = utf8_decode($_POST['RCorreo']);
      $subs_contraseña = utf8_decode($_POST['RContraseña']);
      $subs_telefono = utf8_decode($_POST['RTelefono']);
      $subs_direccion = utf8_decode($_POST['RDireccion']);

      $text= 'SELECT * FROM `usuarios` WHERE `email` = "'.$subs_email.'"';
      mysqli_select_db($db_connection, $db_name);
      $resultado= mysqli_query($db_connection, $text);

      $row = mysqli_num_rows($resultado);

      if ($row>0){
        header('alert(\"Ya existe otro usuario con el mismo correo.\");');
      } else {
        $insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'`
        (`nombre` , `apellidos` , `correo`, `Contraseña`, `telefono`, `direccion`)
         VALUES ("' . $subs_nombre . '", "' . $subs_apellidos . '", "' . $subs_correo . '", "' . $subs_contraseña . '", "' . $subs_telefono . ', "' . $subs_direccion . '"")';
        //mysqli_select_db($db_connection, $db_name);
        $retry_value = mysqli_query($db_connection, $insert_value);
        if (!$retry_value) {
          die('Error: ' . mysqli_error($db_connection));
        }
        $sql2=mysqli_query($db_connection,'SELECT * FROM `usuario` WHERE `Correo` = "'.$subs_email.'"');
        if($f2=mysqli_fetch_assoc($sql2)){
          if($f2['tipo']=="1"){
            if($subs_pass==$f2['Contraseña']){
              $_SESSION['idUsuario']=$f2['idUsuario'];
            }
          }
          $_SESSION['Nombre']= $subs_nombre;
          header('alert(\"Registro exitoso.\"); Location: ../Inicio.php');
        }
      mysqli_close($db_connection);
}

?>
