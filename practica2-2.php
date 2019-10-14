
<?php
session_start();
if(isset($_SESSION['contador'])){
        $_SESSION['contador']=$_SESSION['contador']+1;
    }else{
        $_SESSION['contador']=1;
    }
    echo "Has entrado en esta pagina ". $_SESSION['contador']." veces.<br>";

if (isset($_POST['cookie'])){
    setcookie ("color", $_POST['color']);
    setcookie("size", $_POST['size']);
    setcookie("tipografia", $_POST['tipografia']);
    setcookie("texto",$_POST['texto']);
    echo "<style>.texto{color:".$_COOKIE['color'].";font-size:".$_COOKIE['size']."px;font-family:".$_COOKIE['tipografia']."}</style>";
}else{
    echo "<style>.texto{color:".$_POST['color'].";font-size:".$_POST['size']."px;font-family:".$_POST['tipografia']."}</style>";
}

echo "<h1>Tipografia escogida</h1>";
echo "Color: ". $_POST['color']."<br>";
echo "Tamaño: ". $_POST['size']."<br>";
echo "tipografia: ".$_POST['tipografia']."<br>";
echo "<h1>Texto</h1>";
echo "<p class='texto'>".$_POST['texto']."</p>";
echo "<br><a href='practica2-1.php'>Volver</a>";
include "footer.php";
?>

