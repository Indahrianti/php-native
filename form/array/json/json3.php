<?php
// json php

$data=[
    "nama"=> "ujang",
    "domisili"=> "bandung"
    
];
$datanilai = [70,80,90,50];

echo  json_encode($data);
echo "<br>";
echo json_encode($datanilai);
?>