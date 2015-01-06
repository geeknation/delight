<?php require_once('connection/dbConnect.php')?>
<?php
$names = $_POST['fullname'];
$address = $_POST['address'];
$city = $_POST['city'];
$country = $_POST['country'];
$email = $_POST['email'];
$phone = $_POST['phone'];

//lets insert now

$insert_query = "insert into register values('$names','$address','$city','$country','$email','$phone')";
$query = mysql_query($insert_query,$connect) or die('Error while Inserting');

if($query)
{
  echo "Data Successfully Inserted";
}
else
{
 echo 'Error while Inserting';
}
mysql_close();
?>