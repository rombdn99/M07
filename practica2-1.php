 <?php 
 session_start();
if(isset($_SESSION['contador'])){
        $_SESSION['contador']=$_SESSION['contador']+1;
    }else{
        $_SESSION['contador']=1;
    }
    echo "Has entrado en esta pagina ". $_SESSION['contador']." veces.<br>";
    echo "Ayer fue ". (date('d')-1);
    switch (date('n')-1){
        case 1:$mes=Enero;break;
        case 2:$mes=Febrero;break;
        case 3:$mes=Marzo;break;
        case 4:$mes=Abril;break;
        case 5: $mes=Mayo;break;
        case 6:$mes=Junio;break;
        case 7:$mes=Julio;break;
        case 8:$mes=Agosto;break;
        case 9:$mes=Septiembre;break;
        case 10:$mes=Octubre;break;
        case 11:$mes=Noviembre;break;
        case 12:$mes=Diciembre;reak;
        default:$mes=Enero;break;
    }
    echo "<br>El mes anterior fue ".$mes.".";
    echo "<br>Hay ".(date('t')-date('d'))." dias restantes de mes";
    echo "<br>Hay ".(12-date('n'))." deses restantes de año<br><br>";
       
    $verano=date('I');
    if($verano==1){
        echo "Buen verano";
    }else{
        echo "Buen Invierno";
    }
    echo "<br><br>";
?>
    <h1>Escoge tipografia</h1>
    <form action="practica2-2.php" method="POST">
        <input type="color" name="color" placeholder="Escoge el color de texto" required/>
        <select name="tipografia" placeholder="Escoge la tipografia"/>
            <option value="serif">Serif</option>
            <option value="sans-serif">Sans-Serif</option>
            <option value="monospace">Monospace</option>
        </select>
        <input type="number" name="size" placeholder="Escoge el tamaño" required/>
        <br>selecciona para guardar estos parametros<input type="checkbox" name="cookie"><br>
        <textarea name="texto" required></textarea><br>
        <input type="submit"/>
    </form>
    
<?php
   
    if(isset($_COOKIE['color'])){
        echo "<hr><h1>Datos guardados:</h1><br>";
        echo "Color: ". $_COOKIE['color']."<br>";
        echo "Tamaño: ". $_COOKIE['size']."<br>";
        echo "tipografia: ".$_COOKIE['tipografia']."<br>";
        echo "<h2>Texto de prueba:</h2>";
        echo "<p class='guardado' style='color:".$_COOKIE['color'].";font-size:".$_COOKIE['size']."px;font-family:".$_COOKIE['tipografia']."'> ".$_COOKIE['texto']."</p>";
    }
    
    include "footer.php";
?>