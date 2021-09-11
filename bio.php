<?php
 
 //penugasan
  $uang = 200000;
  $jajanMinum = 15000;
  $jajanMakan = 25000;
  $musafir = 0.1;
  $nemuUang = 0.5;

  echo "<br>ucup memiliki uang = <b>$uang</b>";
  echo "<hr>";


  $uang -=$jajanMinum;
  echo "<br>jajan minum <b>$jajanMinum</b>";
  echo "<br>sisa uang = $uang";
  echo "<hr>";


  $uang -= $jajanMakan;
  echo "<br>jajan sosis bakar $jajanMakan";
  echo "<br>sisa uang = $uang";
  echo "<hr>";

  
  $musafir *= $uang;
  $dari = 160000;
  echo "<br>sedekah ke musafir 10% dari ".$dari." yaitu $musafir";
  $uang -=$musafir;
  echo "<br>sisa uang = $uang"; 
  echo "<hr>";

  $nemuUang *= $uang;
  echo "<br>nemu uang dijalan sebesar 50% $nemuUang";
  echo "<br>sisa uang = $nemuUang + $uang" ;
  echo "<hr>";

  $nemuUang += $uang ;
  echo "total uang ucup adalah $nemuUang";

  ?>