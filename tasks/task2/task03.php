<?php
    $tpl = file_get_contents('base.html');
    $html = str_replace('{title}','Объем шара' , $tpl);
    $html = str_replace('{form}','<form action="task03.php" method="post">
		                                R <input type="text" name="R"><br>
		                                <input type="submit">
	                                    </form>' , $html);
    echo $html;
    $r = 10;
    if (isset($_POST['R'])) {
        if ($_POST['R'] != '') {
            $r = $_POST['R'];
        }
    }
    echo (4 / 3) * M_PI * pow($r, 3);
?>
