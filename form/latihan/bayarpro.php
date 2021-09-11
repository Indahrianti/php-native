<?php
if(isset($_POST['input'])) {
    $uang=$_POST['uang'];
  
   $totalpembayaran=$_POST['totalpembayaran'];

}
if($uang == $totalpembayaran){
   echo "uang anda pas";
   echo "terimakasih";
}else if($uang > $totalpembayaran){
   $hasil=$uang-$totalpembayaran;
   echo "kembalian anda $hasil";
}else {
   $hasil=$uang-$totalpembayaran;
   echo "uang anda kurang, anda kami blacklist";
}
   
?>

<html>
<head><title>as</title><head>
<body>

   <input type="hidden" value="<?php echo $totalpembayaran;?>"></td></tr>
   </body>
   </html>