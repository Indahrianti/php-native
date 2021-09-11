<?php
//json string
$datajson = "[1,2,3,4,5]";

$data = json_decode($datajson);

echo implode("-", $data);

?>