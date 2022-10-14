<?php

$tpl = file_get_contents('base.html');
$html = str_replace('{title}', '(1 + y) * (2x + y² - (x + y) / (y + 1 / (x² - 4)))', $tpl);
$html = str_replace('{form}', '<form action="task04.php" method="post">
		x <input type="text" name="x"><br>
        y <input type="text" name="y"><br>
		<input type="submit">
	</form>', $html);
echo $html;
$x = 10;
$y = 10;
if (isset($_POST['x'])) {
    if ($_POST['x'] != '') {
        $x = $_POST['x'];
    }
}
if (isset($_POST['y'])) {
    if ($_POST['y'] != '') {
        $x = $_POST['y'];
    }
}
echo (1 + $y) * (2 * $x + pow($y, 2) - ($x + $y)) / ($y + 1 / (pow($x, 2) - 4));
?>