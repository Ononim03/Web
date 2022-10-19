<?php

$tpl = file_get_contents('base.html');
$html = str_replace('{title}', 'x⁵ + 6x⁴ + 10x³ + 25x² + 30x + 101', $tpl);
$html = str_replace('{form}', '<form action="task06.php" method="post">
		x <input type="text" name="x"><br>
		<input type="submit">
	</form>', $html);
echo $html;
$x = 10;
if (isset($_POST['x'])) {
    if ($_POST['x'] != '') {
        $x = $_POST['x'];
    }
}
echo pow($x, 5) + 6 * pow($x, 4) + 10 * pow($x, 3) + 25 * pow($x, 2) + 30 * $x + 101;
