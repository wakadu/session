<html>
<head>
<title>Login</title>
</head>
<body>
<h1>Login Form</h1>
<form action-"" method="POST">
Username: <input type=text name='user'><br/>
Password: <input type=password name='pass'><br/>
<input type=submit value='Go!' name='submit'>
</form>
<?php
if  (isset($_POST['submit'])){
$user=msql_real_escape_string($_POST['user'])
$pass=msql_real_escape_string($_POST['pass'])
$encrpt_password=md5 ($pass);
$con=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_dd('user') or die("cannot select DB");
$query=mysql_query("SELECT * FROM login WHERE user='$user' AND pass='$encrypt_password'");
$numows=mysql_num_rows($query);
if($numrows!=0)
{
session_start();
$_SESSION['user']=$user;
header("location: member.php");
}
else{
echo"Invalid username or password!";
}
}
?>
<p><a herf="register.php">Register</a> | <a herf="login.php">Login</a></p>
</body>
</html>
