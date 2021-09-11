<?php
$books= [
    "panduan belajar php untuk pemula",
    "membangun aplikasi web dengan php",
    "tutorial php dan mysql",
    "membuat chat bot dengan php",
];
echo "<h5>judul buku php;</h5>";
echo "<ul>";
foreach ($books as $buku){
    echo "<li>$buku</li>";
}
echo "</ul>";
?>