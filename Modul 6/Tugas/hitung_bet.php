<?php

function hitung_bet($nama, $color = "red") {
    $a = strlen($nama);
    if($a >= 1 && $a <= 10) {
        $total = $a * 300;
        echo '<font color = "'.$color.'">'.$nama.' : Rp.'.$total.'</font><br>';
    } else if($a >= 11 && $a <= 20) {
        $total = $a * 500;
        echo '<font color = "'.$color.'">'.$nama.' : Rp.'.$total.'</font><br>';
    } else if($a > 20) {
        $total = $a * 700;
        echo '<font color = "'.$color.'">'.$nama.' : Rp.'.$total.'</font><br>';
    }
}

hitung_bet("Kaguya");
hitung_bet("Kosaki Onodera", 'blue');
hitung_bet("Senjougahara Hitagi san", 'violet');

?>