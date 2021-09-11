<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="" method="POST" name="input">
     Masukan Bilangan 1 dan 2 : <br>
     <input type="number" name="bil"><br>
     <input type="number" name="bil2"><br>
     <input type="submit" name="input" value="input">
    </form>
</body>
</html>

<?php
if(isset($_POST['input'])) {
    $bil=$_POST['bil'];
    $bil2=$_POST['bil2'];
    $a= $bil + $bil2;
    $b= $bil - $bil2;
    $c= $bil * $bil2;
    $d= $bil / $bil2;

    echo "bilangan1 + bilangan2 = $a<br>";
    echo "bilangan1 - bilangan2 = $b<br>";
    echo "bilangan1 * bilangan2 = $c<br>";
    echo "bilangan1 / bilangan2 = $d<br>";
}
   
    ?>
