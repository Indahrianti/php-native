<?php
$arrnilai=array("ani"=>80, "otim"=>90, "sri"=>75, "budi"=>85);
echo "<br>Array Sebelum pengurutan</br>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>";

sort($arrnilai);
reset($arrnilai);
echo "<b>Array setelah pngurutan dengan sort()</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>";

rsort($arrnilai);
reset($arrnilai);
echo "<b>Array setelah pengurutan dengan rsort()</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>";
?>