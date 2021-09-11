<?php
$arrnilai=array("ani"=>80, "otim"=>90, "sri"=>75, "budi"=>85);
echo "<b>Array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>";

asort($arrnilai);
reset($arrnilai);
echo"<b>Array Setelah pengurutan dengan asort()</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>";

arsort($arrnilai);
reset($arrnilai);
echo "<b>Array setelah penggunaan arsort()</b>";
echo"<pre>";
print_r($arrnilai);
echo "</pre>";
?>