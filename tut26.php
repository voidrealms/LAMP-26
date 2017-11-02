<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>
<form action="tut26.php" method="post" enctype="multipart/form-data">
<label for="file">Filename:</label>

<input type="file" name="file[]" id="file" />
<input type="file" name="file[]" id="file" />

<br />
<input type="submit" name="submit" value="Submit" />
</form>

<hr>

<?php

  foreach($_FILES['file']['name'] as $id => $name)
  {
	//echo $id . " " . $name . "<br>";
	
	echo "Upload: " . $_FILES["file"]["name"][$id] . "<br />";
	echo "Type: " . $_FILES["file"]["type"][$id]  . "<br />";
	echo "Size: " . ($_FILES["file"]["size"][$id]  / 1024) . " Kb<br />";
	echo "Stored in: " . $_FILES["file"]["tmp_name"][$id] ;
	
	echo "<hr>";
  }
?>

</body>
</html>
