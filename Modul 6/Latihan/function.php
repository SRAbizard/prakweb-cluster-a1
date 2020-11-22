<?php

function perkalian($angka1, $angka2) {
    $hasil = $angka1 * $angka2;
    return $hasil;
}

$hasil = perkalian(50, 2);
echo "Perkalian 50 x 2 adalah $hasil <br>";
echo "Perkalian 25 x 4 adalah ".perkalian(25, 4);

?>