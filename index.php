<?php
$tpl = file_get_contents('tasks/task3/base.html');
$html = str_replace('{form}', '', $tpl);
print($html);

