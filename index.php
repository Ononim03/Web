<?php
$tpl = file_get_contents('tasks/task3/base.html');
$html = str_replace('{form}', '', $tpl);
print($html);

use Classes\Group;
use Lib\Group as LibGroup;

require_once './autoload.php';
$g = new Group('челики');
$g = new Group('челики');
$g = new Group('челики');
$g = new Group('челики');
$g = new Group('челики');
$g = new Group('челики');
$g = new Group('челики');
$g = new Group('челики');
$g = new Group('челики');
$g = new Group('челики');
echo $g->getTitle();
$g2 = new LibGroup('челики');
echo $g2->getTitle();
$a = new Lib\A();
file_put_contents('hello.json', json_encode(['file1' => 0, 'file2' => 1,]));
echo file_get_contents('hello.json');
$v = json_decode(file_get_contents('hello.json'), true);
var_dump($v);
echo $v['file2'];