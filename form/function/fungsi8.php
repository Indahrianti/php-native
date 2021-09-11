<?php
angka(20);

function angka(int $jumlah,int $indeks=1) {
    if($indeks < $jumlah) {
        angka($jumlah, $indeks+1);
    }
    echo "Perulangan ke-{$indeks} <br>";
}
?>