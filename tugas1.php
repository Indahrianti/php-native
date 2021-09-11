<?php
/* ada sebuah test masuk universitas negeri kejuruan olahraga
jika nilai akademik > 85 dan juga nilai atletik > 83 maka dinyatakan
lulus
jika kurang salah satu atau keduanya maka dinyatakan tidak lulus
buatlah program tersebut menggunakan kombinasi antara operator logika,
perbandingan dan juga ternary  */


$akademik = 85;
$atletik = 80;


echo "<br>nilai akademik : <b>$akademik</b>";
echo "<br>nilai atletik: <b>$atletik</b>";
$kelulusan = ($akademik >= 85 && $atletik >= 83)
     ? "ulus" : "tidak lulus";
echo "<br>ldinyatakan : <b>$kelulusan";


?>