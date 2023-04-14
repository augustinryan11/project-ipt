<?php  

require "functions.php";

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST")
{

	$errors = login($_POST);

	if(count($errors) == 0)
	{
		header("Location: profile.php");
		die;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<style>
		body {
			background-image: linear-gradient(to right, #87CEEB, #00BFFF);
		}

		form {
    background-color:white;
    padding: 10px;
    border-radius: 10px;
    margin: 20px auto;
    width: 40%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

		input[type="email"],
		input[type="password"] {
			display: block;
			margin: 10px auto;
			padding: 10px;
			border: none;
			border-radius: 5px;
			width: 100%;
			max-width: 350px;
			font-size: 16px;
			background-color: #f2f2f2;
			color: #333;
		}

		input[type="email"]::placeholder,
		input[type="password"]::placeholder {
			color: black;
			text-align: center;
		}

		input[type="submit"] {
			display: block;
			margin: 20px auto;
			padding: 10px 20px;
			background-color:#00BFFF;
			color: black;
			border: none;
			border-radius: 5px;
			font-size: 18px;
			cursor: pointer;
		}
		h1{
			text-align: center;
		}
	</style>
</head>
<body>

	<?php include('header.php')?>
    <h1>Login</h1>
	<div>
		<div>
			<?php if(count($errors) > 0):?>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			<?php endif;?>
		</div>
		<form method="post">
			<input type="email" name="email" placeholder="Email" style="background-color: light-gray;">
			<input type="password" name="password" placeholder="Password" style="background-color: light-gray;">
			<input type="submit" value="Login">
		</form>
	</div>
</body>
</html>