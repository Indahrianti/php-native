<?php
// looping php json

$datamhs = '[
       {"nama":"Mahmud", "domisili":"Bandung" },
       {"nama":"Abdul", "domisili":"Tasik" },
       {"nama":"Soleh", "domisili":"Bogor" },
       {"nama":"Solehah", "domisili":"Cirebon" }
    ]';

$data = json_decode($datamhs);
foreach($data as $mhs) {
    echo "Nama : " .$mhs->nama. "<br>";
    echo "Domisili : " .$mhs->domisili;
    echo "<hr>";
}

?>