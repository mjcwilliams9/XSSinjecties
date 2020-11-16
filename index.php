<!DOCTYPE html>
<html>
<head>
	<title>XSS</title>
</head>
<body>
	<h1>Zoekopdracht</h1>

	<form action="index.php" method="get">
		<input type="text" name="search" placeholder="Zoekopdracht " />
		<input type="submit" name="submit" value="Zoek">
	</form>

	<?php
		if (isset($_GET["search"])) {
			echo "Ingevoerde zoekterm: " . $_GET["search"] . "<br/>";
			echo "Er zijn geen resultaten gevonden voor de ingevoerde zoekopdracht!";
		}
	?>
</body>
</html>



