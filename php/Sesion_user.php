<?php
    require("../config/conexion.php");
    $correo=$_POST['correo'];
    $password=$_POST['password'];
    //conectar a base de datos
    $conexion= Conexion();
    //consulta a la tabla clientes
    $consulta="SELECT * FROM clientes WHERE Correo='$correo' and Password ='$password'";
 
    $Result=mysqli_query($conexion, $consulta);

    $filas=mysqli_num_rows($Result);

        if ($filas>0) {
             // inicio de sesion..
             session_start();
            $_SESSION['correo']=$correo;
            // redirecionara a pagina..
            header("location:../index.html");
        } else {
              // alerta de usuario ou contraseña no valido
             echo '<script language="javascript">alert("Error de autentificacion");window.location.href="../iniciosesion.php"</script>';
        }

    mysqli_free_result($Result);
    mysqli_close($conexion);

?>	                    