<?php
function eval4($x, $y)
{
    try {
        $m1 = 1 + $y;
        $m2 = $x + $y;
        $m3 = pow($x, 2) - 4;
        $m4 = 1 / $m3;
        $m5 = $y + $m4;
        $m6 = $m2 / $m5;
        $m7 = $x * 2 + pow($y, 2);
        $m8 = $m7 - $m6;
        return $m1 * $m8;
    } catch (DivisionByZeroError $e) {
        echo "Произошло деление на ноль";
    }
}

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
        $y = $_POST['y'];
    }
}
echo eval4($x, $y);
?>
