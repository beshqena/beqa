<!doctype html>
<html>
<head>
<title>EDIT-ToDoList</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="file.css">
</head>

<body>

<div id="input">
<form id="form" action="edit.php" method="post">
<input type="hidden" name="id" value="<?php echo $_POST['id'];?>">
<label>Title:</label><br><textarea type="text" name="title"><?php echo $_POST['title'];?></textarea><br>
<label>Desc:</label><br> <textarea type="text" name="desc"><?php echo $_POST['desc'];?></textarea><br>
<label>Date:</label><br><input type="date" name="date" value=<?php  $date = $_POST['date']; ?>></br>

<input type="submit" id="submit"><br>
</form>
</div>

</body>
</html>
