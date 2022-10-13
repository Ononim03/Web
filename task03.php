<html>
<body>

	<form action="task03.php" method="post">
		R <input type="text" name="R"><br>
		<input type="submit">
	</form>
	<pre><?php
		$r = 10;
		if (isset($_POST['R'])) {
			$r = $_POST['R'];
		}
		echo (4 / 3) * M_PI * pow($r, 3);
		?>
	</body>
</html>
