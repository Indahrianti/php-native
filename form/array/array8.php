<?php
$arrnilai=array("ani"=>80, "otim"=>90, "sri"=>75, "budi"=>85);
echo "<b>Array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>";

ksort($arrnilai);
reset($arrnilai);
echo "<b>Array setelah pengurutan dengan ksort()</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>";

krsort($arrnilai);
reset($arrnilai);
echo "<b>array setelah pengurutan dengan krsort()</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>";
?>