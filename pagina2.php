<?php
session_start();

?>
<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php
            if (isset($_COOKIE['fecha'])){
            echo "Zona Horaria: " . $_COOKIE['fecha'];
            }else{
                echo "<br> Fecha:No hay datos";
            }
            if (isset($_GET['zhora'])){
            echo "<br>Fecha: ". $_GET['zhora'];
            }else{
                echo "<br> Zona Horaria:No hay datos";
            }
            if (isset($_SESSION['asignatura'])){
            echo "<br>Asignatura: " . $_SESSION['asignatura'];
            }else{
                echo "<br>Asignatura: No hay datos";
            }
            if (isset($_SESSION['UF'])){
            echo "<br>UF: " . $_SESSION['UF'];
            }else{
                echo "<br>No hay datos";
            }
            if (isset($_SESSION['profesor'])){
            echo "<br>Profesor: " . $_SESSION['profesor'];
            }else{
                echo "<br> Profesor: No hay datos";
            }
            if (isset($_POST['nombre']) && isset($_POST['apellido']) ){
            echo "<br>Alumno: " .$_POST['nombre']. " " . $_POST['apellido'];
            }else{
                echo "<br> Alumno:No hay datos";
                }
            if (isset($_POST['edad'])){
            echo "<br>Edad del alumno: " .$_POST['edad'];
            }else{
                echo "<br> Edad del alumno:No hay datos";
                }
                
        
        ?>
        <br>
        <a href="pagina1.php">Volver</a>
    </body>
 </html>

