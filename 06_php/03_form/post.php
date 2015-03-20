<?


if (isset($_POST['name']) && isset($_POST['surname'])) {
	htmlspecialchars($_POST['name'].' '.$_POST['surname']);
		header('Location: index.php?name='.$_POST['name'].'&surname='.$_POST['surname']);

	}

