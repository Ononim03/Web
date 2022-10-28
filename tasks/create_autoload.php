<?php

$filelist = glob("*", GLOB_ONLYDIR);
$main_str = "<?php \n";
foreach ($filelist as $dir) {
    $str =  "<?php \n";
    $pattern = $dir . '/' . '*.php';
    var_dump(glob($pattern));
    foreach (glob($pattern) as $php_class ){
        $php_class_end = explode( '/', $php_class);
        $php_class_end = $php_class_end[count($php_class_end)- 1];
        $str .= "require_once('$php_class_end');\n";
    }
    file_put_contents($dir . '/' . 'autoload.php', $str);
    $main_str .= "require_once('$dir/autoload.php');\n";
}
file_put_contents('autoload.php', $main_str);