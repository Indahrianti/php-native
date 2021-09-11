<?php
if(isset($_POST['input'])) {
    $kembali=$_POST['kembali'];
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

    $supir=$_POST['supir'];

    if($supir == "ya"){
     $biaya=250000;
  }else if($supir == "tidak"){
     $biaya=0;
  }
}
?>

<html>
<head><title>pengembalian</title></head>
<body>
<form action="lat5pro.php" method="post">
<fieldset><br><tr><td>Tanggal Kembali </td> 
  <td>: </td>
   <td><input type="date" name="pengembalian"></td>
</br>
<tr><td>
<input type="hidden" name="nama" value="<?php echo $nama; ?>">
</td></tr>

<tr><td>
<input type="hidden" name="nik" value="<?php echo $nik; ?>">
</td></tr>

<tr><td>
<input type="hidden" name="jk" value="<?php echo $jk; ?>">
</td></tr>

<tr><td>
<input type="hidden" name="agama" value="<?php echo $agama; ?>">
</td></tr>

<tr><td>
<input type="hidden" name="mobil" value="<?php echo $mobil; ?>">
</td></tr>

<td>
<input type="hidden" name="jenis" value="<?php echo $jenis; ?>"></td>
<td>
<input type="hidden" name="merk" value="<?php echo $merk; ?>"></td>
<td>
<input type="hidden" name="plat" value="<?php echo $plat; ?>"></td>
<td>
<input type="hidden" name="pinjam" value="<?php echo $pinjam; ?>"></td>
<td>
<input type="hidden" name="kembali" value="<?php echo $kembali; ?>"></td>
<td>
<input type="hidden" name="supir" value="<?php echo $supir; ?>"></td>
<td>
<input type="hidden" name="jamin" value="<?php echo $jamin; ?>"></td>


<br><input type="submit" name="input" value="input">
</fieldset>
 </form>
 </html>