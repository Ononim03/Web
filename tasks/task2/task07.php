<?php

$tpl = file_get_contents('base.html');
$html = str_replace('{title}', '', $tpl);
$html = str_replace('{form}', '<form action="task07.php" method="post">
		a <input type="text" name="a"><br>
		b <input type="text" name="b"><br>
		<input type="submit">
	</form>', $html);
echo $html;
$a = 10;
$b = 10;
if (isset($_POST['a'])) {
    if ($_POST['a'] != '') {
        $a= $_POST['a'];
    }
}
if (isset($_POST['b'])) {
    if ($_POST['b'] != '') {
        $b = $_POST['b'];
    }
}

echo 'a + b = ' . ($a + $b) . "<br>";
echo 'a - b = ' . ($a - $b) . "<br>";
echo 'b - a = ' . ($b - $a) . "<br>";
echo 'a * b = ' . ($a * $b) . "<br>";
if ($b == 0) {
    echo "Произошло деление на ноль" . "<br>";
}else{
    echo 'a / b = ' . ($a / $b) . "<br>";
    echo 'a % b = ' . ($a % $b) . "<br>";
}
if ($a == 0) {
    echo "Произошло деление на ноль" . "<br>";
}else{
    echo 'b / a = ' . ($b / $a) . "<br>";
    echo 'b % a = ' . ($b % $a) . "<br>";
}

