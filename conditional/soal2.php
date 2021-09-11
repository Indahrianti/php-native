<?php
$nilai = 81;
$grade ="" ;
if ($nilai >= 90) {
    $grade ="A";
 
} else if ($nilai >= 80){
  
  $grade = "B";
}  else if ($nilai >= 70){
    $grade = "C";
  
}  else if ($nilai >= 60){
   $grade = "D";
 
} else {
    $grade = "E";
  
}

 switch ($grade) {
     case "A" : $kom = "pertahankan"; break;
     case "B" : $kom = "harus lebih baik"; break;
     case "C" : $kom = "belajar lagi"; break;
     case "D" : $kom = "jangan main"; break;
     case "E" : $kom = "kebanyakan bolos"; break;
     default : $kom = "tidak sesuai"; break;
 }
     echo "Nilai : $nilai";
     echo "<br>grade : $grade";
     echo "<br>komentar : $kom";
   ?>