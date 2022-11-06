<?php
error_reporting(0);
$uname = $_POST['uname1'];
$upswd1 = $_POST['upswd1'];


$connect=mysqli_connect("localhost","root","","smartfarmer");

$sql="select * from register" ;

$result=mysqli_query($connect,$sql);

if($result!=false){

while($row=mysqli_fetch_array($result)){
$check = $row['uname'];
$check1 = $row['upswd1'];
}
mysqli_free_result($result);
mysqli_close($connect);
}

if($check == $_POST['username'])
{
if($check1 == $_POST['password'])
{
  echo '<script language="javascript">';
  echo 'alert("Login Failed")';
  echo '</script>';
}
else{
  echo '<script language="javascript">';
  echo 'alert("Login Successful !!!")';
  echo '</script>';
}
}


 ?>
