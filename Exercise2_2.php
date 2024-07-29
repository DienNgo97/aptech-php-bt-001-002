<!-- Vẽ tam giác với chiều cao tăng dần khi thay đổi tham số n -->
<?php
function veTamGiac($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}

$n = 10; //Muốn tam giác cao bao nhiêu thì thay số n lớn lên
veTamGiac($n);
?>
