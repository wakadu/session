<!doctype html>
<html>
<head>
<title>Register</title>
</head>
<body>

<h1>REGISTRATION FORM</h1>
<form action="" method="POST">
username:<input type=text name='user'><br/>
Password:<input type=password name='pass'><br/>

<input type=submit value='Go!' name='submit'>
</form>
<?php
if (isset($_POST['submit'])){
//mysql_real_escape_string() escapes special characters in a string for use in an SQL statement 
$user=mysql_real_escape_string($_POST['user']);
$pass=mysql_real_escape_string($_POST['pass']);

$con=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('user') or die("cannot select DB");
$query=mysql_query("SELECT * FROM login WHERE user='" .$user."'");
$numrows=mysql_num_rows($query);
if ($numrows==0)
{
//md5() calculates the MD5 hash of a string 
$encrypt_password=md5 ($pass);

$sql-"INSERT INTO login(user,pass) VALUES ('$user','$encrypt_password')";

$result=msql_query($sql);

if($result!=1)
{
echo "FAilure!";
}
else{
echo "Account succefully created";
}
} else{
echo"That username already exists! please try again with another.";
}
}
?>
<p><a herf="register.php"><Register</a> | <a href=login.php">Login</a></p>
</body>
</html>
