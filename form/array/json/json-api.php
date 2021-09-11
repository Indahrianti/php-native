<?php

$url = "https://api.kawalcorona.com/";

// persiapkan curl / init curl
$ch = curl_init();
// set url
curl_setopt($ch, CURLOPT_URL, $url);
// return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//output contains the output string
$dataCovid = curl_exec($ch);
// tutup curl
curl_close($ch);
// menampilkan hasil curl
// echo $output;
?>

<html>
<head><title>sa</title><head>
<body>
<center>
    <nav>
       <a href="json-api.php">Data Covid</a>
       <a href="json-indonesia.php">Data Indonesia</a>
       <a href="json-provinsi">Data Ptovinsi</a>
       <a href="json-positif.php">Data Global Positif</a>|
        <a href="json-mati.php">Data Meninggal</a>|
</center>
<fieldset>
    <legend>Data Covid</legend>
    <table border=1>
    <tr>
        <th>No</th>
        <th>Negara</th>
        <th>Fositif</th>
        <th>Meninggal</th>
        <th>Sembuh</th>
    </tr>

<?php
$no=1;
$data = json_decode($dataCovid);
foreach($data as $covid) { ?>
<tr>
   <td><?php echo $no++; ?></td>
   <td><?php echo $covid->attributes->Country_Region; ?></td>
   <td><?php echo $covid->attributes->Confirmed; ?></td>
   <td><?php echo $covid->attributes->Deaths; ?></td>
   <td><?php echo $covid->attributes->Recovered; ?></td>
</tr>
<?php
} ?>

</table>
        
</fieldset>


</body>
</html>