
<pre>
    <?php
        echo "<table>";
        for ($i=1;$i<11;$i++){
            echo "<tr>";
            for ($j=1;$j<11;$j++){
                echo "<td>" . $i * $j . "</td>";
            }
             echo "</tr>";
        }
        echo "</table>";
