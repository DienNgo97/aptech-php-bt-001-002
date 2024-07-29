<?php
function veTamGiacCan($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = $i; $j < $n; $j++) {
            echo "&nbsp&nbsp";
        }

        for ($j = 1; $j <= (2 * $i - 1); $j++) {
            echo "*";
        }

        echo "<br>";
    }
}
$n = 20; 
veTamGiacCan($n);
?>
