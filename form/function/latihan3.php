
<html>
  <head><title>pengolahan form</title></head>
  <body>
  <form action="" method="POST" name="input">
 Masukan jari-jari : <input type="text" name="jari"><br>
  <input type="submit" name="input" value="input">
  


<?php
// function parameter
// nilai yang bisa dimasukan kedalam fungsi / sebuah nilai yang bisa ditentukan
if(isset($_POST['input'])) {
    $a=$_POST['jari'];

 function luaslingkaran($jari, $phi = 3.14){
      
    $luas = $jari * $jari * $phi;
    return $luas ;
 }

 function kellingkaran($jari, $phi = 3.14){
   
    $keliling = 2 * ($jari * $phi);
    return $keliling ;
}
?>

 <br>jari-jari = <?php echo $a; ?><br>
 luas lingkaran = <?php echo luaslingkaran($a); ?><br>
 keliling lingkaran = <?php echo kellingkaran($a); ?>

 <?php } ?>
 </form>
  </body>
</html>