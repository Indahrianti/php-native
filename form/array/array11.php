<?php
//membuat array
$hobi= ["Membaca",
        "Menulis ",
        "Ngeblog" ];

// menambahkan isi array
$hobi[1] .= "Coding";

//menghapus isi array
 unset($hobi[1]);
//menambahkan isi pada index terakhir
$hobi[]= "Olahraga";

// cetak array perulangan 
foreach($hobi as $hobiku){
    echo $hobiku."<br>";
}
?>