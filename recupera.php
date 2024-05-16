<?php
function recupera($num1, $num2) {
    echo '<table>';
    echo '<tr><th>Número</th><th>Divisores</th></tr>';
    for ($i = 50; $i <= 60; $i++) {
        echo '<tr>';
        echo "<td>$i</td>";
        echo '<td>';
        $divisores = [];
        for ($j = $num1; $j <= $num2; $j++) {
            if ($i % $j == 0) {
                $divisores[] = $j;
            }
        }
        echo implode(', ', $divisores);
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
?>
