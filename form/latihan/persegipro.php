<?php
if(isset($_POST['save'])) {
    $sisi=$_POST['sisi'];
    
    $l = $sisi * $sisi;
    $k= 4 * $sisi;
}
echo "luas = $l";
echo "<br>keliling = $k";
?>