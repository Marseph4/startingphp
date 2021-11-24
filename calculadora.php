<?php
session_start();
if(!isset($_SESSION['user'])) 
{
	echo "<center><h1>inicia sesion para ver el contenido</h1></center>";

exit;}
?>

<!DOCTYPE html>
<html>
	<head> 
		<title>Simple Calculator In PHP</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-
		scale=1">
		 
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		
		<div class="container" style="margin-top: 50px">
		
		    <form method="post">
		        <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
		        <select name="operation">
		        	<option value="plus">Plus</option>
		            <option value="minus">Minus</option>
		            <option value="multiply">Multiply</option>
		            <option value="divided by">Devide</option>
		        </select>
		        <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
		    </form>

			<?php

				if(isset($_POST['submit']))
				{
					if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
					{
						if($_POST['operation'] == 'plus')
						{
							$total = $_POST['number1'] + $_POST['number2'];	
						}
						if($_POST['operation'] == 'minus')
						{
							$total = $_POST['number1'] - $_POST['number2'];	
						}
						if($_POST['operation'] == 'multiply')
						{
							$total = $_POST['number1'] * $_POST['number2'];	
						}
						if($_POST['operation'] == 'divided by')
						{
							$total = $_POST['number1'] / $_POST['number2'];	
						}

						echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";
					
					} else {

						echo 'Numeric values are required';
					
					}
				}

			?>
	    
		</div>
	
	</body>
</html> 