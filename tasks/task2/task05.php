<?php
function eval5($x, $y, $z)
{
    try {
        $x += 2;
        $x *= $y;
        $x -= $z;
        $z *= $y;
        $x /= $y;
        return $x + $z;
    } catch (DivisionByZeroError $e) {
        echo "Произошло деление на ноль";
    }
}

$tpl = file_get_contents('base.html');
$html = str_replace('{title}', '((x + 2) * y - z) / y + y * z', $tpl);
$html = str_replace('{form}', '<form action="task05.php" method="post">
		x <input type="text" name="x"><br>
        y <input type="text" name="y"><br>
        z <input type="text" name="z"><br>
		<input type="submit">
	</form>', $html);
echo $html;
$x = 10;
$y = 10;
$z = 10;
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
if (isset($_POST['z'])) {
    if ($_POST['z'] != '') {
        $y = $_POST['z'];
    }
}
echo eval5($x, $y, $z);
