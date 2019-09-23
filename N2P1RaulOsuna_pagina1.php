<?php
session_start();
$_SESSION['asignatura']="M7";
$_SESSION['UF']="UF1";
$_SESSION['profesor']="Jordi Egea";
$hora=date('e');
setcookie("fecha",$hora,time()+6000);
?>
<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
    <h1>Registro</h1>
    
    <?php
        echo "<br>Asignatura: " . $_SESSION['asignatura'];
        echo "<br>UF: " . $_SESSION['UF'];
        echo "<br>Profesor: " . $_SESSION['profesor'];
        $get= date('r');

        $dia = urlencode($get);
        echo "<form action='pagina2.php?zhora=". $dia ."' method='POST'>";
        ?>
        <input type="text" name="nombre" placeholder="Nombre" >
        <input type="text" name="apellido" placeholder="Apellido">
        <input type="number" name="edad" placeholder="Edad">
        <input type="submit">
        </form>
    </body>
 </html>

