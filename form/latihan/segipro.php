<?php
if(isset($_POST['save'])) {
    $alas=$_POST['alas'];
    $tinggi=$_POST['tinggi'];
    $bawah=$_POST['bawah'];
    
    $c = $alas * $tinggi;
    $d= $bawah + $alas *$tinggi;
}
echo "luas = $c";
echo "<br>keliling = $d";
?>