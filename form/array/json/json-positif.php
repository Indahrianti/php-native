<?php

$url = "https://api.kawalcorona.com/indonesia/";
//persiapan curl / init curl
$ch = curl_init();
//set url
curl_setopt($ch, CURLOPT_URL, $url);
//eturn the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// $output contains the output string
$dataCovid = curl_exec($ch);
//tutup curl
curl_close($ch);
//menampilkan hasil curl
//echo $output;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <nav>
        <a href="json-indonesia.php">Data Indonesia</a>
        <a href="json-provinsi.php">Data Covid Provinsi</a>
        <a href="json-positif.php">Data Global Positif</a>

    </nav>
    </center>
    <fieldset>
        <legend>Data Covid</legend>
        <table border=1 width="100%">
        <?php $data = json_decode($dataCovid); ?>
            <tr>
                
                <th><?php echo $data->name;?></th>
                <th><?php echo $data->value;?></th>
            </tr>
          
           
      
        </table>
    </fieldset>
</body>
</html>