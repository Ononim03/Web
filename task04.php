<html>
<body>

	<form action="task04.php" method="post">
		x <input type="text" name="x"><br>
        y <input type="text" name="y"><br>
		<input type="submit">
	</form>
	<pre><?php
		$x = 10;
        $y = 10;
		if (isset($_POST['x'])) {
			$x = $_POST['x'];
		}
        if (isset($_POST['y'])) {
			$y = $_POST['y'];
		}
		echo (1 + $y) * (2 * $x + pow($y, 2) - ($x + $y)) / ($y + 1 / (pow($x, 2) - 4));
		?>
	</body>
</html>
