<?php
$day = ("senin");
switch ($day){
    case 'sun' : $hari = "minggu"; break;
    case 'mon' : $hari = "senin"; break;
    case 'tue' : $hari = "selasa"; break;
    case 'thu' : $hari = "rabu"; break;
    case 'wed' : $hari = "kamis"; break;
    case 'fri' : $hari = "jumat"; break;
    case 'sat' : $hari = "sabtu"; break;
    default    : $hari = "hari kiamat";
}
   echo "hari ini hari <b>$day</b>";
   ?>