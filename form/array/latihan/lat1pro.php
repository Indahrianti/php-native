<?php
if(isset($_POST['save'])) {
    $nama=$_POST['nama'];
    $asal=$_POST['asal'];
    $indo=$_POST['indo'];
    $mtk=$_POST['mtk'];
    $inggris=$_POST['inggris'];
    $ipa=$_POST['ipa'];
  



?>
<html>
<head><title>hasil</title><head>
<body>
   <fieldset>
   <legend>Data Siswa</legend>
   <table border=1>
     <tr> 
        <th>Nomor</th>
        <th>Nama</th>
        <th>Asal Sekolah</th>
        <th>Nilai Indonesia</th> 
        <th>Nilai MTK</th>
        <th>Nilai Inggris</th>
        <th>Nilai IPA</th> 
        <th>total nilai</th> 
        <th>keterangan</th> 

        </tr>

    <?php
    $no=1;
    for($i=0; $i< count($nama); $i++){
       
      
       
       ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $nama[$i]; ?></td>
      <td><?php echo $asal[$i]; ?></td>
      <td><?php echo $indo[$i]; ?></td>
      <td><?php echo $mtk[$i]; ?></td>
      <td><?php echo $inggris[$i]; ?></td>
      <td><?php echo $ipa[$i]; ?></td>
    

      <?php $total =$indo[$i] + $mtk[$i] + $inggris[$i] + $ipa[$i];
      if($total > 340){
          $keterangan = "Diterima";
      }else{
        $keterangan = "Ditolak";
      }
      ?>
      <td><?php echo $total; ?></td>
      <td><?php echo $keterangan; ?></td>
    </tr>
    
<?php } } ?>

   </table>
   </fieldset>
</body>
</html>