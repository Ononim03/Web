<?php

require_once "./functions.php";

echo find_min(1, 29) . PHP_EOL;
echo find_min(random_int(1, 56),random_int(1, 56),random_int(1, 56),random_int(1, 56),random_int(1, 56));

$id = 1;
$link = "https://vk.com/im?rel=" . $id;
$myHtml = '<a href="' . $link . '">Chat</a>';
$myHtml = <<<HTML
    <a target="_blank" href="$link">Chat</a>
HTML;
//HEREDOC
echo $myHtml . PHP_EOL;
echo str_pad(12, 5, 0, STR_PAD_LEFT);
$pos =  strpos("Mom", "Mom");
if ($pos === false ) {
    echo "Не Нашлось";
}


$arr = [1,2,3,4,5,"i1" => 'word1',"i2" => "word2", "i3" => 'word3', 100, true];
var_dump('<pre>', $arr);
if (isset($arr[5])) {
    var_dump("существует");
}





$x = &$arr['челек'];
if ($x == null) {
    $x = 10;
}
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING ^ E_ERROR); # ошибки идут в жопу
error_reporting(E_ALL); # Возврат ошибок