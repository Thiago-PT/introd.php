<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    ?>

<?php
    require 'conexion.php';

    session_start();

    if(isset($_SESSION['username'])) 
    {
        $id_emp = $_POST['id_empleado'];
        $nombre_emp = $_POST['nombre_empleado'];
        $apellido_emp = $_POST['apellidos_empleados'];
        $departamento_emp = $_POST['id_departamento'];

        $query = "INSERT INTO empleado (id_empleado, nombre_empleado, apellidos_empleados, id_departamento) VALUES ('$id_emp', '$nombre_emp', '$apellido_emp', '$departamento_emp')";

        $insercion = mysqli_query($conexion, $query) or trigger_error("Error en la inserción de los datos: " + mysqli_error($conexion));

        if($insercion)
        {
             echo '<script type "text/javascript">
                    alert("Empleado registrado!");
                    window.location.href = "../registrar_empleado.php"
                </script>';
        }
        else
        {
            header('location: ../index.php');
        }
    } 
?>