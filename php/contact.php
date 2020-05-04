<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
<?php
	// server side checking example
	if(!isset($_POST['name']) || strlen($_POST['name']) < 5)
	{
		exit("Wrong name: ".$_POST['name']);
	}
	if(!isset($_POST['surname']) || strlen($_POST['surname']) < 5)
	{
		exit("Wrong surname: ".$_POST['surname']);
	}
	if(!isset($_POST['phone']) || strlen($_POST['phone']) < 5)
	{
		exit("Wrong phone: ".$_POST['phone']);
	}
	$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
	if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
	{
		exit("Wrong email: ".$_POST['email']);
	}

	

	echo "<h3>The received results:</h3>";
	echo "<pre>";
	var_dump($_POST);
	echo "</pre>";
?>
	</body>
</html>
