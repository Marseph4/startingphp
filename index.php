<!DOCTYPE html>
<html lang="en" dir="ltr">
<link href="style.css" rel="stylesheet"> 
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="wrapper">
      <div class='menu'>
  
            <ul>
                <li><a href='login.php?' target='contenido'>Login</a></li><br><br>
                <li><a href='calculadora.php' target='contenido'>Calculadora</a></li><br>
                <li><a href='tratamiento_string.php' target='contenido'>Tratamiento de Strings</a></li><br>
                <li><a href='subir.php' target="contenido">Subir Fotos</a></li><br>
                <li><a href='galeria.php' target="contenido">Galería</a></li><br>
            </ul>
               <center><form action="" method="post">
                    <input type="submit" value="logout" name = "submit" class="btn float-right login_btn">
                </form></center> 
      </div>
      <div class='contenido'>
        <iframe name='contenido'></iframe>
      </div>
    </div>
  </body>
</html>


</body>
</html>
<?php 
if (isset($_POST['submit']))
{ 
  header("location: logout.php");
}
?>