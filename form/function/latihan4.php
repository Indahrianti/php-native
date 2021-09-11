<html>
    <head><title>sa</title></head>
<body>
<table>
    <form action="" method="post">
    <h4>FORMULIR PENDAFTARAN</h4>
<tr> 
   <td>Nama </td>
   <td>:</td>
   <td><input type="text" name="nama"></td></tr>


   <tr><td>Jenis Kelamin</td> <td>:</td>
      <td><input type="radio" name="jk" value="perempuan" checked>perempuan
     <input type="radio" name="jk" value="laki-laki" checked>laki-laki
      <td></tr>
    <tr>
        <td>Tanggal lahir</td><td>:</td>
        <td><input type="date" name="ttl" value=""></td></tr>

    <tr><td>Agama</td> <td>:</td>       
      <td><select name="agama">
      <option value="islam">islam</option>
      <option value="kristen">kristen</option>
      <option value="hindu">hindu</option>
      <option value="budha">budha</option>
      </select></td></tr>

      <tr> 
   <td>Alamat </td>
   <td>:</td>
   <td><input type="textarea" name="alamat"></td></tr>

   <tr><td>Hobi</td> <td>:</td>
      <td><input type="checkbox" name="hobi[]" value="masak" >masak
     <input type="checkbox" name="hobi[]" value="main game" >main game
     <input type="checkbox" name="hobi[]" value="menulis" >menulis
     <input type="checkbox" name="hobi[]" value="membaca" >membaca
      <td></tr>

     <tr><td> <input type="submit" name="input" value="input"></td></tr>
</form>
</table>
</body>
</htm>

<?php
if(isset($_POST['input'])) {
    $nama =$_POST['nama'];
    $jk =$_POST['jk'];
    $ttl =$_POST['ttl'];
    $agama =$_POST['agama'];
    $alamat =$_POST['alamat'];

    $hobi =$_POST['hobi'];

function biodata($nama, $jk, $ttl, $agama, $alamat, $hobi){
   $data = "Nama : $nama <br>";
   $data .= "Jenis Kelamin : $jk <br>";
   $data .= "tempat tanggal lahir : $ttl <br>";
   $data .= "Agama : $agama <br>";
   $data .= "Alamat : $alamat <br>";
   $data .= "hobi : <br>"  .implode(", ", $hobi);
   
   return $data;
   }


 echo biodata($nama,$jk,$ttl,$agama,$alamat,$hobi);
}

?>