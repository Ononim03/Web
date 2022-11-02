<?php
function generate_table($n): string
{
    $table = '<table>';
    for ($i = 1;$i <= $n; $i++) {
        $table .= '<tr>'. '<td>' . $i . '</td>' . '</tr>' . PHP_EOL;
    }
    $table .= '</table>';
    return $table;
}
$tpl = file_get_contents('base.html');
$html = str_replace('{form}','<form action="task01.php" method="post">
		                                N <input type="text" name="n"><br>
		                                <input type="submit">
	                                    </form>' , $tpl);
$n = 5;
if (isset($_POST['n'])) {
    if ($_POST['n'] != '') {
        $n = $_POST['n'];
    }
}
print($html);
print(generate_table($n));

