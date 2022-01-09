<?php
$jumlah1 = 5;
for ($a = 1; $a <= $jumlah1; $a++) {
    for ($c = $jumlah1; $c >= $a; $c -= 1) {
        echo '*&nbsp&nbsp';
    }
    echo "<br>";
}
?>
