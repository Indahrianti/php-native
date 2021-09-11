<html>
<head>
    <title>Document</title>
</head>
<body>
   <form action="" method="post">
  <fieldset><legend>soal no 3</legend>
   <input type="text" name="bintang" placeholder="masukan jumlah bintang" required>
   <button type="submit" name="buat">buat</button>
   </fieldset>
   </form>
    
   </body>
  </html>
 <?php
 if(isset($_POST['buat'])) {
     $bintang =$_POST['bintang'];
     for($i=1; $i<=$bintang; $i++){
         for($j=$bintang; $j>=$i; $j--){
             echo "&nbsp";
         }
         for($k=1; $k<=$i; $k++){
             echo "*";
         }
         echo "<br>";
     }
     echo " ";
     for($l=$bintang; $l>=1; $l--){
         for($m=$bintang; $m >= $l; $m--){
             echo "&nbsp";
         }
         for($n=1; $n<=$l; $n++){
             echo "*";
         }
         echo "<br>";
     }
 }
 ?>