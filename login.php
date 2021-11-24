<!DOCTYPE html>
<html>
<head>

	<title>Login</title>

	<link rel="stylesheet" type="text/css" href="css/log.css">
</head>
<body id="grad1">
		<form method="POST" class="cont">

			<div>
				<p>
					<label>username</label>
					<input type="text" id='user' name="user">
				</p>
			</div>

			<div>
				<p>
					<label>Password</label>
					<input type="password" id='pass' name="pass">
				</p>
			</div>

			<div>
				<p>
					<input type="submit" id="btn" value="Login">
				</p>
			</div>

			<br><br>
			<div><a href="registro.php">registrate!</a></div>
			
		</form>
</body>
</html>


<?php 



if ( ! empty( $_POST ) ) { 
    if ( isset( $_POST['user'] ) && isset( $_POST['pass']) ) { 

		$user = $_POST['user'];
		$pass = $_POST['pass'];
		

		$conn = new mysqli("127.0.0.1", "root", "", "mars");
 
		$stmt = $conn->prepare("SELECT * FROM users WHERE user= ?"); 
		$stmt->bind_param('s', $user);
		$stmt->execute(); 
		$stmt->bind_result($username, $mail, $passdb);  	

$crypt = sha1($_POST['pass']); 

		while ($stmt->fetch()) {
			if($passdb == $crypt){ 
				session_start();
				$_SESSION['user']=$username;	
				echo "<center><h1>te has logueado correctamente</h1></center>";
				exit();

		  }	

		}
		
	   $stmt->close(); 

	   echo "<center><h1>vuelve a intentarlo</h1></center>";
	}
}
?>
