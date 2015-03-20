<?

if (isset($_POST['name']) && isset($_POST['surname'])) {
	echo htmlspecialchars($_POST['name'].' '.$_POST['surname']);
	}

