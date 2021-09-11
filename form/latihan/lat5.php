<html>
<head>
    <title>jam kerja</title>
</head>
<body>
<form action="pro5.php" method="post">
<fieldset> <table>  <h3>Peminjaman Rental Mobil</h3>
<tr> 
   <td>Nama </td>
   <td>:</td>
   <td><input type="text" name="nama"></td></tr>
<tr>
   <td>No Nik </td>
    <td>:</td>
    <td><input type="text" name="nik"></td></tr>

<tr><td>Jenis Kelamin</td> <td>:</td>
<td><input type="radio" name="jk" value="perempuan" checked>perempuan
   <input type="radio" name="jk" value="laki-laki" checked>laki-laki
   <td></tr>

   <tr><td>Agama</td> <td>:</td>
   <td><select name="agama">
   <option value="islam">islam</option>
   <option value="kristen">kristen</option>
   <option value="hindu">hindu</option>
   <option value="budha">budha</option>
   </select></td></tr>

   <tr><td>Nama Mobil </td>
    <td>:</td>
    <td><input type="text" name="mobil"></td></tr>

  <tr><td>Jenis Mobil </td>
    <td>:</td>
    <td><select name="jenis">
    <option value="suv">suv</option>
    <option value="sedan">sedan</option>
    <option value="sport">sport</option>
    <option value="coupe">coupe</option>
   </select></tr>

   <tr><td>Merk Mobil</td>
    <td>:</td>
    <td><select name="merk">
    <option value="suzuki">suzuki</option>
    <option value="honda">honda</option>
    <option value="daihatsu">daihatsu</option>
    <option value="toyota">toyota</option>
   </select> </td></tr>
   
   <tr><td>Nomor Plat </td> <td>: </td>
   <td><input type="text" name="plat"></td>


<tr><td>Tanggal Peminjaman </td> <td>: </td>
   <td><input type="date" name="pinjam"></td>


<tr><td>Tanggal Kembali </td> <td>: </td>
   <td><input type="date" name="kembali"></td>


<tr><td>Pakai Supir</td>
<td>:</td> 
<td><select name="supir">
    <option value="ya">ya</option>
    <option value="tidak">tidak</option>
   </select><td></tr>

   
<tr><td>Penjamin</td><td>:</td> 
<td><select name="jamin">
    <option value="FC KTP">FC KTP</option>
    <option value="FC KK">FC KK</option>
    </select></td></tr>
<tr>
   <td><input type="submit" name="input" value="masukan"></td>
   <td><input type="reset" name="reset" value="reset"></td></tr>
   </form> </table> </fieldset>
    
   </body>
  </html>