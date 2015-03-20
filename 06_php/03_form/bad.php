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

<form action="index.php" method="post">
	<input type="text" name="name" placeholder="name">
	<input type="text" name="surname" placeholder="surname">
	<input type="submit" value="send">
</form>

<?php
if (isset($_POST['name']) && isset($_POST['surname'])) {
	echo htmlspecialchars($_POST['name'].' '.$_POST['surname']);
	}
?>

</body>
</html>