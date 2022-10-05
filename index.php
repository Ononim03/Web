<?php
 declare(strict_types = 1);
 $x = 1;
 ?>
<pre>
    <?php
var_dump($x);
$x = [2,3,4,[3,45,6,4312],421];
var_dump($x);
for ($i = 0;$i < 10; $i++) {
    echo $i . "\n";
}
$a = 0;
while ($a < 10) {
    $a++;
}