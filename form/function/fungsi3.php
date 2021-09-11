<?php
// function parameter
// nilai yang bisa dimasukan kedalam fungsi / sebuah nilai yang bisa ditentukan
function luassegitiga($a,$b){
    $alas = $a;
    $tinggi = $b;
    $luas = ($alas * $tinggi) /2;
    return $luas;
}
echo "Luas Segitiga : " .luassegitiga(10,7);
?>