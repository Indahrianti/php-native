<?php
/* buatlah pengulangan dibawah ini menggunakan for/while & foreach
1. 2 4 6 16 32 64 128
2. 3215 625 125 25 5
3. carilah sisa hasil bagi 3 dari array tsb
 [18, 45, 29, 61, 47, 34] -> 18 % 3 = 0*/

echo "No 1<br>";
 $i = 2;
do {
    echo " $i";
    $i *= 2;
}while ($i <= 128);
echo "<hr>";

echo "No 2<br>";
$i = 3125;
do {
    echo " $i";
    $i /= 5;
}while ($i >= 5);
echo "<hr>";

echo "No 3<br>";
$a= [18,45,29,61,47,34];
foreach($a as $b){
    $sisa= $b % 3;
    echo "$b % 3 = $sisa<br>";
}
echo "<hr>";

echo "No 4 <br>";

for($i=1; $i <=5; $i++){
    for($j=1; $j<=$i; $j++){
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";
echo "<br>";

echo "No 5 <br>";

for($i=1; $i<=6; $i++){
for($j=6; $j>=$i; $j--){
    echo "_";
}
    for($k=1; $k<=$i; $k++){
        echo "*";
    }
    echo "<br>";
}
?>