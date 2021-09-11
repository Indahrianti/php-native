<html>
<head>
    <title>jam kerja</title>
</head>
<body>
<fieldset><form action="lat4pro.php" method="post">
   <tr> 
   <td>Nama </td>
   <td>:</td>
   <td><input type="text" name="nama"></td></tr>
</br>
    <tr><td>Agama <select name="agama">
   <td><option value="islam">islam</option></td>
   <td><option value="kristen">kristen</option></td>
   <td><option value="hindu">hindu</option></td>
   <td><option value="budha">budha</option></td>
   </select></td></tr>

   <tr><br>Jenis Kelamin : 
   <td><input type="radio" name="jk" value="perempuan" checked>perempuan</td>
   <td><input type="radio" name="jk" value="laki-laki" checked>laki-laki</br></td>
   </tr>

  <tr><td>Golongan </td>
    <td>:</td>
    <td><select name="golongan"></td>
    <td><option value=1>golongan 1</option></td>
    <td><option value=2>golongan 2</option></td>
    <td><option value=3>golongan 3</option></td>
    <td><option value=4>golongan 4</option></td>
   </select></tr>
   
   <br><tr><td>Jumlah Jam Kerja</td> <td>: </td>
   <td><input type="number-format" name="jam"></td>
   </fieldset></br>
   <br><input type="submit" name="input" value="input">
   </form>
    
   </body>
  </html>