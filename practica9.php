<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripción UdeA</title>
    <style>
        table{
            margin: auto;
        }
        #error{
            color: red;
        }
    </style>
</head>
<body>
    <header>
        <center>Inscripciones UdeA</center>
    </header>
    <section>
        <?php 
        error_reporting(0);
        $nombre=$_POST['txtNombre'];
        $apellidoPaterno=$_POST['txtApellidoPaterno'];
        $apellidoMaterno=$_POST['txtApellidoMaterno'];
        $residencia=$_POST['txtResidencia'];
        $email=$_POST['txtEmail'];
        $programa=$_POST['slPrograma'];

        $nombreMensaje="";
        $apellidoPMensaje="";
        $apellidoMMensaje="";
        $residenciaMensaje="";
        $emailMensaje="";
        $programaMensaje="";

        if(isset($_POST['btnEnviar'])){
            if(empty($nombre)) $nombreMensaje= "Por favor ingresa el nombre";
            if(empty($apellidoPaterno)) $apellidoPMensaje= "Por favor ingresa el apellido paterno";
            if(empty($apellidoMaterno)) $apellidoMMensaje= "Por favor ingresa el apellido materno";
            if(empty($residencia)) $residenciaMensaje= "Por favor ingresa la dirección de residencia";
            if(empty($email)) $emailMensaje= "Por favor ingresa el email";
            if(empty($programa)) $programaMensaje= "Por favor ingresa el programa";
        }
        ?>
        <form action="./practica9.php" method="post">
            <table>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="txtNombre" id=""></td>
                    <td id="error"><?php  echo $nombreMensaje;?></td>
                </tr>

                <tr>
                    <td>Apellido Paterno</td>
                    <td><input type="text" name="txtApellidoPaterno" id=""></td>
                    <td id="error"><?php echo $apellidoPMensaje; ?></td>
                </tr>

                <tr>
                    <td>Apellido Materno</td>
                    <td><input type="text" name="txtApellidoMaterno" id=""></td>
                    <td id="error"><?php echo $apellidoMMensaje; ?></td>
                </tr>

                <tr>
                    <td>Ciudad de Residencia</td>
                    <td><input type="text" name="txtResidencia" id=""></td>
                    <td id="error"><?php echo $residenciaMensaje; ?></td>
                </tr>

                <tr>
                    <td>Fecha de Nacimiento</td>
                    <td><input type="date" name="txtNacimiento" id=""></td>
                </tr>

                <tr>
                    <td>Correo Electronico:</td>
                    <td><input type="email" name="txtEmail" id=""></td>
                    <td id="error"><?php echo $emailMensaje ?></td>
                </tr>

                <tr>
                    <td>Programa</td>
                    <td>
                        <select name="slPrograma" id="">
                            <option value="Selecciona">Selecciona</option>
                            <option value="ingPetroleo">Ingeneria De Petroleo</option>
                            <option value="ingIndustrial">Ingeneria Industrial</option>
                            <option value="ingCivil">Ingeneria Civil</option>
                            <option value="ingSistemas">Ingeneria de Sistemas</option>
                            <option value="ingTelecomunicaciones">Ingeneria de Telecomunicaciones</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><input type="submit" value="Enviar" name="btnEnviar"></td>
                </tr>

                <?php 

                $servidor= "localhost";
                $usuario="root";
                $clave="";
                $baseDeDatos="inscripciones";

                $enlace= mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);

                if (isset($_POST['btnEnviar'])){
                    $nombre= $_POST ['txtNombre'];
                    $apellido_paterno= $_POST ['txtApellidoPaterno'];
                    $apellido_materno= $_POST ['txtApellidoMaterno'];
                    $residencia= $_POST['txtResidencia'];
                    $nacimiento=$_POST['txtNacimiento'];
                    $email= $_POST['txtEmail'];
                    $programa= $_POST['slPrograma'];

                    $insertarDatos = "INSERT INTO alumnos VALUES('$nombre','$apellido_paterno','$apellido_materno','$residencia','$nacimiento','$email','$programa')";
            
                    $ejecutarInsertar = mysqli_query($enlace,$insertarDatos);

                }


                ?>


            </table>
        </form>
    </section>
</body>
</html>