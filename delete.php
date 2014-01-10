<?php

$con=mysqli_connect("localhost","root","","beqa");
mysql_select_db("beqa");
mysql_query("SET CHARACTER SET utf8");
mysql_query("SET NAMES 'utf8'");

if (!$con)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$id=$_POST['id'];
mysqli_query($con,"DELETE FROM `beqa`.`table1` where `id`=$id");
mysqli_query($con, "ALTER TABLE `table1` AUTO_INCREMENT =$id");


header("location:index.php");
mysqli_close($con);

?>
