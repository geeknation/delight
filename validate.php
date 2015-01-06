<?php require_once('connection/dbConnect.php')?>
<?php

$email = $_POST['email'];
$password = $_POST['password'];

//lets hash the password before storing

$password = md5($password);

//lets check if user exists
$select_query = "select email,password from users where email = '$email' and password = '$password'";
$squery = mysql_query($select_query) or die('unable to select data');

$row = mysql_num_rows($squery);

if($row > 0)
{
//user exists
include('checkout.html');exit;
}
else
{
  echo 'invalid credentials';
  include('login.html');exit;
}

mysql_close($connect);  //here we closing connection of database
?>