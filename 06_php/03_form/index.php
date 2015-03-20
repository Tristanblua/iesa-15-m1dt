<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$date = date("d-m-Y");
echo $date;
?>

<form action="post.php" method="post">
	<input type="text" name="name" placeholder="name">
	<input type="text" name="surname" placeholder="surname">
	<input type="submit" value="send">
</form>

</body>
</html>