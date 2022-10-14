<?php
$tpl = file_get_contents('tasks/task2/base.html');
$html = str_replace('{title}', 'Выбор задания', $tpl);
$html = str_replace('{form}', '', $html);
print($html);

