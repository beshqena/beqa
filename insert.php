<?php
$con=mysqli_connect("localhost","root","","beqa");
if ($con)
{
mysql_select_db("beqa");
mysql_query("SET CHARACTER SET utf8");
mysql_query("SET NAMES 'utf8'");
}
else 
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="INSERT INTO `beqa`.`table1` (`id`,`title`, `desc`, `date`)
values ('$_POST[id]', '$_POST[title]', '$_POST[desc]', '$_POST[date]')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
mysqli_close($con);
header("location:index.php");
?>
