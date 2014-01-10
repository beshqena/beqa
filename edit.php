<?php
$con=mysqli_connect("localhost", "root", "", "beqa");
mysql_select_db("beqa");
mysql_query("SET CHARACTER SET utf8");
mysql_query("SET NAMES 'utf8'");
$id=$_POST['id'];
mysqli_query($con, "UPDATE  `beqa`.`table1` SET  `title` = '$_POST[title]',
`desc` =  '$_POST[desc]', `date` = '$_POST[date]' WHERE `id`=$id");  
header('location: index.php');
mysqli_close($con);

?>
