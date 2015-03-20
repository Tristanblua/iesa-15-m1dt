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

<? if (isset($_GET["name"]) && isset($_GET["surname"])) {
	echo '<h1>Hello '. $_GET["name"].' '.$_GET["surname"]. '</h1>';
} 
?>
</body>
</html>