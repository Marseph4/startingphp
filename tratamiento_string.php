<?php
session_start();
if(!isset($_SESSION['user'])) 
{
	echo "<center><h1>inicia sesion para ver el contenido</h1></center>";
}
exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>strings</title>
</head>
<body>
    <div class="container" style="margin-top: 50px">
        <form method="POST">
            <div>
                <p>quitar espacios:</p>
                <input name="str01" type="text">
                <input name="str1" type="submit" value="Go" class="btn btn-primary space" />
            </div>

            <br><br>
            
            <div>
                <p>caracteres especiales:</p>
                <input name="str02" type="text">
                <input name="str2" type="submit" value="Go" class="btn btn-primary special" />
             </div>
             
             <br><br><br>

             <div>
             <input name="concat" type="submit" value="concatenar" class="btn btn-primary concat" />
             </div>
         </form>
    </div>
    
</body>
</html>

    <?php
        // quitar espacios
        if(isset($_POST['str1'])){
            $string = $_POST['str01'];
            echo str_replace(" ","", $string);
            }

        // quitar caracteres especiales
        if(isset($_POST['str2'])){
            $string2 = $_POST['str02'];
            $string2 = preg_replace('([^A-Za-z0-9])', '', $string2);	     					
            echo $string2;
        }
            
        // concatenar
        if(isset($_POST['concat'])){
            $string = $_POST['str01'];
            $string2 = $_POST['str02'];
        echo $string.$string2;
        }
    ?>

