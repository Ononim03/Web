<?php
function generateRandomString($length = 3)
{
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
}

function generate_array($n): array
{
    $array = [];
    for ($i = 0; $i < $n; $i++) {
        $type_of_index = rand(0, 1);
        if ($type_of_index == 0) {
            $index = generateRandomString(rand(1, 5));
        } else {
            $index = rand(1, $n);
        }
        $type_of_value = rand(0, 1);
        if ($type_of_value == 0) {
            $value = generateRandomString(rand(1, 5));
        } else {
            $value = rand(1, $n);
        }
        $array[$index] = $value;
    }
    return $array;
}

function generate_table($n): string
{
    $table = '<table><tr><td>index</td><td>before</td><td>after</td></tr>';
    $array = generate_array($n);
    foreach ($array as $key => $value) {
        if (is_string($key)) {
            if (is_string($value)) {
                $new_value = $value . $value;
            } else {
                $new_value = pow($value, 2);
            }
        } else {
            $new_value = $value;
        }
        $table .= '<tr>' . '<td>' . $key . '</td>' . '<td>' . $value . '</td>' . '<td>' . $new_value . '</td>' . '</tr>' . PHP_EOL;
    }
        $table .= '</table>';
        return $table;
    }

    $tpl = file_get_contents('base.html');
    $html = str_replace('{form}', '<form action="task02.php" method="post">
		                                N <input type="text" name="n"><br>
		                                <input type="submit">
	                                    </form>', $tpl);
    $n = 5;
    if (isset($_POST['n'])) {
        if ($_POST['n'] != '') {
            $n = $_POST['n'];
        }
    }
    print($html);
    print(generate_table($n));

