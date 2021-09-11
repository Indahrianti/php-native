<?php
for($a=2; $a<=6; $a++){
    for($b = $a; $b <= $a + 4; $b++ ){
        echo $b. "&nbsp;";
    }
    echo "<br>";
}

echo "<br>No 2<br>";
$z=3;
for ($x=3; $x <= 21; $x += 2){
    for ($y = $x; $y<=$z; $y++){
        echo $y. "&nbsp;";
    
    }
    echo "<br>";
    $z +=2;
    $z = $z + 1;
}








?>