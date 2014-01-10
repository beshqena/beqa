<!doctype html>
<html>
<head>
<title>To Do List</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="file.css">
</head>


<body>


<div id="input">
<form id="form" action="insert.php" method="post">
<label>Title:<label><br><textarea type="text" name="title"></textarea><br>
<label>Description:</label><br> <textarea type="text" name="desc"></textarea><br>
<label>Date:</label><br><input type="date" name="date"></textarea><br>
<input type="submit" id="submit"><br>
</form>
</div>


<div id="output">
<?php

$con=mysqli_connect('localhost', 'root', '', 'beqa');
$result=mysqli_query($con, "SELECT * FROM `beqa`.`table1` order by `id` desc");
mysql_select_db("beqa");
mysql_query("SET CHARACTER SET utf8");
mysql_query("SET NAMES 'utf8'");
while($row=mysqli_fetch_array($result))
{
echo "<ul id='otxi'>";

echo "<br>";
echo "<div id='erti'>";
echo "ID: ";  
echo "<li id='sami'>" . $row['id'] ."</li>" ; echo "<br>";
echo "</div>";

echo "<div id='erti'>";
echo "Title: "; 
echo "<li id='sami'>" . $row['title'] . "</li>"; echo "<br>";
echo "</div>";

echo "<div id='erti'>";
echo "Desc: "; 
echo "<li id='sami'>" . $row['desc'] . "</li>"; echo "<br>";
echo "</div>";

echo "<div id='erti'>";
echo "Date: "; 
echo "<li id='sami'>" . $row['date'] . "</li>"; echo "<br>";
echo "</div>";

echo "<div id='erti'>";
echo "<li>";
echo "<form action='delete.php' method='post'>";
echo "<input name='id' type='hidden' value=".$row['id'].">";
echo "<input name='what' type='submit' value='DELETE'>";
echo "</form>";
echo "</li>";
echo "</div>";



echo "<div id='erti'>";
echo "<li>";
echo "<form action='between.php' method='post'>";
echo "<input name='id' type='hidden' value=".$row['id'].">";
echo "<input name='title' type='hidden' value=".$row['title'].">";
echo "<input name='desc' type='hidden' value=".$row['desc'].">";
echo "<input name='date' type='hidden' value=".$row['date'].">";
echo "<button>";
echo "Edit";
echo "</button>";
echo "</form>";
echo "</li>";
echo "</div>";



echo "</ul>";

}

?>
</div>
</body>
</html>
