<?php
//angka(20);

function angka(int $jumlah,int $indeks=1) {
    echo "<strong style='color : green'> 
    sebelum memanggil diri sendiri[{$indeks}] </strong><br> ";


    if($indeks < $jumlah) {
        angka($jumlah, $indeks + 1);
    }else {
        echo "<strong style='color: red'> proses terakhir </strong><br>";
    }
    echo "<strong style='color: blue'>
    sebelum memanggil diri sendiri [{$indeks}]</strong><br>";
}
angka(5);
?>