<?php
for ($i=1; $i <= 100; $i++){
    echo "Perulangan ke-{$i} <br>";

}
function angka(int $jumlah, int $indeks=1) {
    // panggil diri sendiri slama $indeks <= $jumlah
    if ($indeks < $jumlah) {
        angka($jumlah, $indeks + 1);
    }
}

/* function angka(int $jumlah, int $indeks=1){
    if ($indeks , $jumlah){
        angka($jumlah, $indeks + 1);
    }
    echo "prulangan ke-{$indeks} <br>";
} */ 
?>