<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="css/log.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include 'funciones.php'; ?>
</head>
<body id="grad1">
    <div class="cont">
    <select name="lista" method='post'>
        <?php 
            mostrarcarpetas();
        ?>
    </select>
    <input type="file" name="foto"><br>
	<input type="submit" value="login" name='subir' class="btn float-right login_btn">


<?php 

	if (isset($_POST['subir']) {
		define('FOTOSDIR', 'img/');

		if (!empty($_FILES)) {
			$rutaFoto = FOTOSDIR . $_FILES['foto']['name'];
			if (!$_FILES['foto']['error']){
				if (move_uploaded_file($_FILES['foto']['tmp_name'], $rutaFoto)) {
						
			    }
		    }
		}
	}
 ?>












</div>
</body>
</html>