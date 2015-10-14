<?php
session_start();
if (isset($_SESSION['user'])){
?>
<!doctype html>
<html>
<head>
<title>Member</title>
</head>
<body>
<?php echo "welcome, ".$_SESSION['user']."!";?>
<br/>
<h2>Welcome members!</h2>
<p><a href="logout.php">Logout</a></p>
</body>
<?php
}
else
{
echo"please Login First! <a href="login.php">Login</a>;
}  
?>