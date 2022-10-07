<!DOCTYPE html>
<html lang="en">
<head>
    <title>homework№1</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="icon" href="https://sun9-16.userapi.com/impg/2q1bniJWyu_N8rqZBnNaYFZKpWUkbjwWYXN05A/_gV4DVNgvrI.jpg?size=1620x2160&quality=96&sign=2ca2a0cbdbed68538f461bcc43417720&type=album"/>
</head>
<pre>

    <?php
        echo "<table>";
        echo "<caption>Multiplication Table</caption>";
        for ($i=1;$i<11;$i++){
            echo "<tr>";
            for ($j=1;$j<11;$j++){
                echo "<td>" . $i * $j . "</td>";
            }
             echo "</tr>";
        }
        echo "</table>";
    ?></pre>
</html>
    