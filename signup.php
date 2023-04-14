<?php  

require "functions.php";

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST"){

	$errors = signup($_POST);

	if(count($errors) == 0)
	{
		header("Location: login.php");
		die;
		
	}
}
?>


<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>Signup</title>
	<style>
		body {
			background: linear-gradient(to right, #87CEEB, #00BFFF);
			font-family: Arial, sans-serif;
			color: #fff;
			text-align: center;
			margin: 10;
			padding: 0;
		}
		h1 {
			margin-top: 50px;
		}
		form {
			margin-top: 25px;
			display: inline-block;
			text-align: left;
			background-color: #fff;
			border-radius: 10px;
			padding: 20px;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
		}
		
		input[type=text], input[type=password] {
			display: block;
			margin-bottom: 20px;
			width: 100%;
			height: 40px;
			padding: 5px;
			border: none;
			border-radius: 10px;
			box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
			text-align: center;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
		}
		
		input[type=submit] { 
			display: block;
			margin: 0; 
			width: 300px;
			height: 100px;
			border: none;
			border-radius: 10px;
			background-color: #87CEEB;
			color: #fff;
			font-size: 16px;
			font-weight: bold;
			cursor: pointer;
			box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
			text-align: center;
			}
			
			input[type=text] {
				font-size: 16px;
				padding: 5px;
				border-radius: 5px;
				border: 2px solid #ccc;
				text-align: center;
			}
			
			input::placeholder {
				font-size: 15px;
			}
		
			input[type=submit]:hover {
			background-color: #00BFFF;
		}

	</style>
	
</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signup</title>
</head>
<body>

	<?php include('header.php')?>
	<h1>Signup</h1>
	<div>
		<div>
			<?php if(count($errors) > 0):?>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			<?php endif;?>
	<form method="post">
		<input type="text" name="username" placeholder="Username">
		<input type="text" name="email" placeholder="Email">
		<input type="password" name="password" placeholder="Password">
		<input type="password" name="password2" placeholder="Retype Password">
		<input type="submit" value="Signup">
	</form>
</body>
</html>