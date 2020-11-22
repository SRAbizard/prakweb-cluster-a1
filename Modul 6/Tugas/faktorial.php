<?php

function faktorial($value) {
    if($value == 0) {
        return 1;
    }
    return $value * faktorial($value - 1);
}

$x = 5;
$hasil = faktorial($x);
echo "Faktorial dari $x! adalah $hasil";

?>