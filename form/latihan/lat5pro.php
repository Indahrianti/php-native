<?php
if(isset($_POST['input'])) {
    $nama=$_POST['nama'];
    $nik=$_POST['nik'];
    $jk=$_POST['jk'];
    $agama=$_POST['agama'];
    $mobil=$_POST['mobil'];
    $jenis=$_POST['jenis'];
    $merk=$_POST['merk'];
    $plat=$_POST['plat'];
    $pinjam=$_POST['pinjam'];
    $kembali=$_POST['kembali'];
    $jamin=$_POST['jamin'];
    $pengembalian=$_POST['pengembalian'];

    $supir=$_POST['supir'];
    $hari=(strtotime($kembali)-strtotime($pinjam))/60/60/24;
    
    $telat=(strtotime($pinjam)-strtotime($kembali))/60/60/24;

}
    $harian=250000;
    $tgl1= new datetime("$pinjam");
    $tgl2= new datetime("$kembali");
    $jarak= $tgl2 ->diff($tgl1);

    $tgl11=new datetime("$kembali");
    $tgl22=new datetime("$pengembalian");
    $lama= $tgl22 ->diff($tgl11);

    $denda=240000 *$jarak->d;

    $total=$harian*$jarak->d;
   $totaldenda= $lama->d * $denda;
   $totalpembayaran= $total + $totaldenda;

?>

<html>
<head><title>sa</title></head>
<body><fieldset> 
   <table border=3 width=100% align="center">
   <tr><th colspan=7>Data Diri</th></tr>
  
   <table border=4 width=100% align="center">
  <tr><th>nama</th>
  <th>no nik</th>
  <th>jenis kelamin</th>
 <th>agama</th>
 <th>penjamin</th></tr>
 
  <tr><th><input value="<?php echo $nama; ?>"></th>
  <th><input value="<?php echo $nik; ?>"></th>
  <th><input value="<?php echo $jk; ?>"></th>
 <th><input value="<?php echo $agama; ?>"></th>
 <th><input value="<?php echo $jamin; ?>"></th></tr>
 </table>

 <table border=3 width=100% align="center">
  <tr><th>Nama Mobil</th>
  <th>Jenis Mobil</th>
  <th>Merk Mobil</th>
 <th>Plat Mobil</th>
 <th>Tanggal Peminjaman</th>
 <th>Tanggal kembali</th></tr>
 
  <tr><th><input value="<?php echo $mobil; ?>"></th>
  <th><input value="<?php echo $jenis; ?>"></th>
  <th><input value="<?php echo $merk; ?>"></th>
 <th><input value="<?php echo $plat; ?>"></th>
 <th><input value="<?php echo $pinjam; ?>"></th>
 <th><input value="<?php echo $kembali; ?>"></th></tr>

 </table>


   <table border=3 width=100% align=center>
   <tr><th colspan=7>Rincian Biaya</tr></th>

   <tr><td>Lama Pinjam</td><td>
   <input value="<?php echo $jarak->d ; ?>"></td></tr>
   
   <tr><td>Biaya Harian</td><td>
   <input value="<?php echo $harian; ?>"></td></tr>

   <tr><td>Telat Mengembalikan</td><td>
   <input value="<?php echo $lama->d;?>"></td></tr>

   <tr><td>Denda (telat mengembalikan * denda)</td><td>
   <input value="<?php echo $totaldenda;?>"></td></tr>

  <tr><td>Total Biaya(lama pinjam * harian)</td><td>
   <input value="<?php echo $totalpembayaran;?>"></td></tr>
   </table>
   
   <br>
   <table>
   <form action="bayarpro.php" method="post">
   <tr><td>masukan uang pembayaran<td>
   <td>:</td>
   <td><input type="text" name="uang"></td>
   <td><input type="hidden" value="<?php echo $totalpembayaran;?>"></td>
 
 <input type="submit" name="input" value="masukan">
</form>

   </table>
</fieldset>
</body>
</html>

