<?php

  include("Conexion.php");

  if(isset($_POST['btnContactar'])){

  }else if(isset($_POST['btnLog'])){
    $subs_pass = utf8_decode($_POST['pass']);
    $subs_email = utf8_decode($_POST['email']);
    $text= 'SELECT * FROM `usuarios` WHERE `email` = "'.$subs_email.'"';
    mysqli_select_db($db_connection, $db_name);
    $resultado= mysqli_query($db_connection, $text);

    $row = mysqli_num_rows($resultado);

        mysqli_select_db($db_connection, $db_name);
    	$sql2=mysqli_query($db_connection,'SELECT * FROM `usuarios` WHERE `email` = "'.$subs_email.'"');
    	if($f2=mysqli_fetch_assoc($sql2)){
    		if($f2['tipo']=="admin"){
    		    if($subs_pass==$f2['password'])
    		    {
    		        $_SESSION['idUsuario']=$f2['idUsuario'];
    	    		$_SESSION['usuario']=$f2['usuario'];

    		    	echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
    		    	echo "<script>location.href='crud/index.php'</script>";
    		    }
    		    else{
    		        echo '<script>alert("Contraseña incorrecta")</script> ';
    		    	echo "<script>location.href='login.html'</script>";
    		    }
    		}
    		else
    	{
    	    if($subs_pass==$f2['password'])
    		    {
    	    		$_SESSION['usuario']=$f2['usuario'];

    		    	echo '<script>alert("BIENVENIDO")</script> ';
    		    	echo "<script>location.href='../acceso/index.php'</script>";
    		    }
    		    else{
    		        echo '<script>alert("Contraseña incorrecta")</script> ';
    		    	echo "<script>location.href='login.html'</script>";
    		    }
    	}
    	}
    	else
    	{
    	    print "<script>alert(\"Usuario no resgistrado.\");window.location='login.html';</script>";
    	}

    mysqli_close($db_connection);
  }else if(isset($_POST['btnReg'])){

  }

?>
