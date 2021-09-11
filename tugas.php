<?php
/* tentukaan kondisi bilangan dibawah ini menggunakan operator logika
1 < 10
9 > 10 dan 10 > 9
10 > 11 dan 9 < 10

tono memiliki uang sebesar 10rb dan tini memiliki uang sebesar 8rb dan 
toni memiliki uang sebesar 15rb. 
1. apakah uang toni lebih besar dari tono dan tini, 
2. juga uang toni  lebih besar dari tini dan tidak lebi besar dari 
tono

buatlah sebuah program login sederhana jika username dan pass nya sesuai
maka ada keterangan login 1    */
 
$a = 1;
$b = 9;
$c = 10;
$d = 11;

echo "SOAL 1";
echo "<br>$a < $c : ". ($a < $c);
echo "<br>($b > $c) && ($c > $b) : ". (($b > $c) && ($c > $b));
echo "<br>($c < $d) || ($d < $c) : ". (($c < $d) || ($d < $c));
echo "<hr>";

// no 2 //
$tono = 10000;
$tini = 8000;
$toni = 15000;

echo "SOAL 2";
echo "<br>($toni > $tono) && ($toni > $tini) :". (($toni > $tono) &&
       ($toni > $tini));
echo "<br>($toni > $tini) && ($toni < $tono) :". (($toni > $toni) &&
       ($toni > $tino)); 
echo "<hr>";

// no 3 //
$user = "indah";
$pass = 111;

echo "SOAL 3";
echo "<br>username : <b>$user</b>";
echo "<br>password : <b>$pass</b>";
echo "<br>cek Login = ". ($user && $pass);
?>