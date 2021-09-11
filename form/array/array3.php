<?php
$arrwarna=array("blue", "black", "red", "yellow", "green");

echo "Menampilkan isi array dengan for : <br>";
for($i=0; $i<count($arrwarna); $i++){
    echo "Do You Like <font color=$arrwarna[$i]". $arrwarna[$i].
    "</font> ? <br>";
}
echo "Menampilkan isi array dengan foreach : <br>";
foreach($arrwarna as $warna){
    echo "Do You Like <fonr color=$warna>". $warna."</font> ? <br>";
}
?>