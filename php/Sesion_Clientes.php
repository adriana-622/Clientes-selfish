<?php
    require("../config/conexion.php");
    $email=$_POST['email'];
    $password=$_POST['password'];
    //conectar a base de datos
    $conexion= Conexion();
    //consulta a la tabla clientes
    $consulta="SELECT * FROM clientes WHERE Correo='$email' and Password ='$password'";
 
    $Result=mysqli_query($conexion, $consulta);

    $filas=mysqli_num_rows($Result);

        if ($filas>0) {
             //inicio de sesion..
             session_start();
            $_SESSION['correo']=$email;
            // redirecionara a pagina..
            header("location:../Admin/inicio_admin.php");
        } else {
              // alerta de usuario ou contraseña no valido
             echo '<script language="javascript">alert("Error de autentificacion");window.location.href="../index.php"</script>';
        }

    mysqli_free_result($Result);
    mysqli_close($conexion);

?>	                    