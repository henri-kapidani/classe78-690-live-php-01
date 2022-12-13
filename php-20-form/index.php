<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		$firstname = $_GET['firstname'];
		$lastname = $_GET['lastname'];
	?>

	<h1>Ciao <?= "${firstname} ${lastname}"; ?></h1>

	<h1>Ciao <?= "${_GET['firstname']} ${_GET['lastname']}"; ?></h1>

	<h1>Ciao <?= $firstname; ?> <?= $lastname; ?></h1>

	<?php $nome_completo = $firstname . ' ' . $lastname; ?>
	<h1>Ciao <?= $nome_completo; ?></h1>

	<?php echo "<h1>Ciao ${nome_completo}</h1>"; ?>

	<form method="GET" action="">
		<label for="firstname">Nome</label>
		<input type="text" id="firstname" name="firstname">
		<label for="lastname">Cognome</label>
		<input type="text" id="lastname" name="lastname">
		<button>Salutami!</button>
	</form>
</body>
</html>