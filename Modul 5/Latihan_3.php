<?php

echo "Menampilkan bilangan prima 1-50 : <br>";

for ($i = 1; $i <= 50; $i++) {
    $bil = 0;
    for ($j = 1; $j <= $i; $j++) {
        if ($i % $j == 0) {
            $bil = $bil + 1;
        }
    }
    if ($bil == 2) {
        echo $i." ";
    }
}

?>