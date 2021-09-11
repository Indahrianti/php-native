<?php
$bintang=$_POST['star'];
$i=1;
while($i<=$bintang){
    $j=1;
    while($j<$i){
        echo "*";
        $j++;
    }
    echo "<br>";
    $i++;
}
$i=$bintang;
while($i>=1){
    $k=1;
    while($k<=$i){
        echo "*";
        $k++;
    }
    echo"<br>";
    $i--;
}
?>