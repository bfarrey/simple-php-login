<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "class.login.php"; 

//login attempt
if( isset($_POST['username']) && isset($_POST['password']) ) {
	$login = new simpleLogin();
	$login->loginAttempt($_POST['username'], $_POST['password']);
}
?>
<html>
<head>
  <title>Simple PHP Login</title>
</head>

<body>

<h1>Login</h1>

<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
<p>
	<b>Username:</b><br />
	<input type="text" name="username">
</p>
<p>
	<input type="password" name="password">
</p>
<p>
	<input type="submit" value="Login">
</p>
</form>

</body>

</html>


