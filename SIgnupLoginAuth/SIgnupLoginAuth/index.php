<?php 
session_start();
	include("connection.php");
	include("function.php");

	$user_data=check_login($con);
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Website</title>
</head>
<body>
	<a href="logout.php">Logout</a>
	<h2>Your Profile</h2>

	<br>
	<h1>Hello,<?php echo $user_data['user_name'] ?></h1>
	<h1>Date of registration is <?php echo $user_data['date'] ?> </h1>
	<h2>Your password is <?php $user_data['password'] ?></h2>
	
</body>
</html>