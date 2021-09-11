<?php
$member = "tidak";
$totalBelanja = 50000;
$disc = 0;
$totalHarga = 0;

if ($member =="ya"){
    if ($totalBelanja >= 250000){
        $disc = 0.1 * $totalBelanja;
    } else if ($totalBelanja >= 100000){
        $disc = 0.05 * $totalBelanja;
    }
} else {
    if ($totalBelanja >= 100000){
        $disc = 0.025 * $totalBelanja;
    }
}
$totalHarga = $totalBelanja - $disc;
echo "kartu member : $member<br>";
echo "total belanja : $totalBelanja<br>";
echo "diskon : $disc<br>";
echo "total yang harus dibayar : $totalHarga<br>";

?>