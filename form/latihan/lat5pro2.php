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
    $supir=$_POST['supir'];
    $jamin=$_POST['jamin'];

    $lamapinjam=4;
    $biayaharian= 100000*4;
    $telatpengembalian=30000*4;


}
    echo "<br>Nama lengkap= $nama </br>";
    echo "<br>No Nik = $nik </br>";
    echo "<br>Jenis Kelamin = $jk </br>";
    echo "<br>Agama= $agama </br>";
    echo "<br>Nama Mobil = $mobil </br>";
    echo "<br>Jenis Mobil = $jenis </br>";
    echo "<br>Merk Mobil = $merk </br>";
    echo "<br>Nomor Plat = $plat </br>";
    echo "<br>Tanggal Peminjaman = $pinjam </br>";
    echo "<br>Tanggal Pengembalian = $kembali </br>";
    echo "<br>Pakai Supir = $supir </br>";
    echo "<br>Penjamin = $jamin </br>";
   
    echo "<br>lamapinjam = $lamapinjam </br>";
    echo "<br>biayaharian = $biayaharian </br>";
?>

<html>
<head><title>sa</title></head>
<body>

<table border=3 width=100% align="center">
   <tr><th colspan=7>Data Rental Mobil</tr></th></table>

   <tr> <td>Nama Mobil</td>
   <td><input value="<?php echo $mobil; ?>">
   </td></tr>

   <tr> <td>Jenis Mobil</td>
   <td><input value="<?php echo $jenis; ?>">
   </td></tr>

   <tr> <td>Merk Mobil</td>
   <td><input  value="<?php echo $merk; ?>">
   </td></tr>
   <tr> <td>Plat Mobil</td>
   <td><input value="<?php echo $plat; ?>">
   </td></tr>

   <tr> <td>Tanggal Peminjaman</td>
   <td><input  value="<?php echo $pinjam; ?>">
   </td></tr>

   <tr> <td>Tanggal Pengembalian</td>
   <td><input value="<?php echo $kembali; ?>">
   </td></tr>

   <tr> <td>Pakai Supir</td>
   <td><input value="<?php echo $supir; ?>">
   </td></tr></table>

</body>
</html>