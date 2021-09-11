<?php
if(isset($_POST['save'])) {
    $jari=$_POST['jari'];
    
    $c =3.14 * $jari * $jari;
    $d= 2 * 3.14 * $jari;
}
echo "luas = $c";
echo "<br>keliling = $d";
?>