<?php
// membuat fungsi
function hitungumur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam = "Assalamualaikum")
 
{
    echo "<b>" . $salam . "</b>, ";
    echo "Perkenalkan Nama Saya <b>" .$nama. "</b><br/>";
    //memanggil fungsi lain
    echo "Saya Berusia <b>" . hitungumur(2004, 2021). "</b> Tahun<br/>";
    echo "Senang Berkenalan Dengan Anda<br/>";
}
echo perkenalan("Indah Rianti");
?>