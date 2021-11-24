<!DOCTYPE html>
<html>
<head>
	<title>Sign In Page</title>
	<link rel="stylesheet" type="text/css" href="css/log.css">
</head>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
</head>
<body id="grad1">
<div class="cont">
	
	<h3>Sign In</h3>

			<div class="card-body">

				<form method='post'>

					<div class = "Sign">
						<input type="text" class="form-control" name="name" placeholder="username">
					</div>

					<div class = "Sign">
						<input type="password" class="form-control" name="pass" placeholder="password">
					</div>

					<div class = "Sign">
						<input type="email" name="mail" placeholder="email">
					</div>

					<div class = "Sign">				
						<input type="submit" value="go" name='go' class="btn float-right login_btn">
					</div>	

					<div class = "Sign">			
						<input type="submit" value="login" name='login' class="btn float-right login_btn">
					</div>
	
			</div>
</div>

</body>
</html>

<?php   
    if(isset($_POST['go'])){
        $user = $_POST['name'];
		$pass = $_POST['pass'];
		$mail = $_POST['mail'];

		  $crypt = sha1($pass);
		  
        $servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mars";

		$conn = new mysqli($servername, $username, $password, $dbname);

		$stmt = $conn->prepare("INSERT INTO users (user, mail, pass) values (?, ?, ?)"); 
		$stmt->bind_param('sss', $user, $mail, $crypt);
		$stmt->execute();  

		$stmt->close();

		}

	if (isset($_POST['login'])){

        header("location: index.php");
	}
     ?>
    
