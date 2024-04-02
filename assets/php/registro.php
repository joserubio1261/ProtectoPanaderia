<?php
//Consexion con la base de datos
include("conexion.php");

//registro
if (isset($_POST["registrar"])) {
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
    $usuario = mysqli_real_escape_string($conexion, $_POST['user']);
    $password = mysqli_real_escape_string($conexion, $_POST['pass']);
    $passwordrepit = mysqli_real_escape_string($conexion, $_POST['passr']);
    $password_encriptada = sha1($password);
    $rolCliente = "4";
    $sqluser = "SELECT usuario FROM usuarios 
                WHERE usuario = '$usuario'";
    $resultadouser = $conexion->query($sqluser);
    $filas = $resultadouser->num_rows;
    $userExists = true;
   

    if ($password != $passwordrepit) {
        echo "<script>
                alert('Las contraseñas son diferentes');
                event.preventDefault();
             </script>";
        
    } else {
        if ($filas > 0) {
            echo "<script> 
                    alert('El usuario ya existe');
                    event.preventDefault();
                 </script>";
        } else {
            //insertar informacion del registro
            $sqlusuario = "INSERT INTO usuarios(nom_completo,email,telefono,usuario,password,id_rol)
						   VALUES ('$nombre',' $correo',' $telefono','$usuario','$password_encriptada','$rolCliente')";
            $resultadousuario = $conexion->query($sqlusuario);
            if ($resultadousuario > 0) {
                echo "<script>
                        alert('Te has registrado correctamente');
                        event.preventDefault();
                     </script>"; 
            } else {
                echo "<script>
                        alert('Error de registro');
                        event.preventDefault();   
                     </script>";
            }
        }
    }
}
