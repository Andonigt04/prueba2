<?php

echo "<table border='1'>
        <tr>
            <th>00</th><th>1</th><th>2</th><th>3</th><th>4</th>
        </tr>";

for($a = 1; $a < 4; $a++){
    echo "<tr><th>$a</th>";
    for($b = 1; $b <= 4; $b++){
        print("<td>$a - $b</td>");
    }
    echo "</tr>";
}

echo "</table>";
?>