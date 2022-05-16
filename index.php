<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")

{

	$u = $_POST['username'];

	$p = $_POST['pass'];

	if($u =="letmein@yahoo.com" && $p=="12345")

	{

	$_SESSION['user'] = $u;

	$_SESSION['start'] = time();
 
	$_SESSION['expire'] = $_SESSION['start'] + (5) ; 
 
	header('Location: Home.php');

	}

	else

	{

	$err= "<font color='red'>Invalid user login </font>";

	}

}

?>

<html>

<head>

	<title>Log out after 5 mins</title>

</head>

<body>

<form name="form1" method="post">

<table align="center">
<Td colspan="2"><?php echo @$err;?></Td>
	<tr>

		<td>Username </td>

		<td><input type="email" name="username"  placeholder="letmein@yahoo.com" required>

		</td>

	</tr>

	<tr>

		<td>Password</td>

		<td><input type="password" name="pass" placeholder="12345" required></td>

	</tr>

	<tr>

		<td   align="center">

		<input type="submit" value="SignIn" name="submit1">

		</td>

	</tr>

</table>

</form>

</body>

</html>