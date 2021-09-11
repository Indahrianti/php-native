<?php
if(isset($_POST['save'])) {
    $panjang=$_POST['panjang'];
    $lebar=$_POST['lebar'];

    $l = $panjang * $lebar;
    $k= 2 * $panjang + $lebar;
}
echo "luas = $l";
echo "<br>keliling = $k";
?>