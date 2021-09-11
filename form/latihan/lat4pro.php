<?php
if(isset($_POST['input'])) {
    $nama=$_POST['nama'];
    $agama=$_POST['agama'];
    $jam=$_POST['jam'];
    $lembur= $jam - 173;
    $gajilembur = $lembur * 20000;

    $jk=$_POST['jk'];
    $golongan=$_POST['golongan'];
    if($golongan == 1){
        $gaji = 1500000;
        $tunjangan = 150000;
    }else if($golongan == 2){
       $gaji = 2000000;
       $tunjangan= 200000;
    }else if($golongan == 3){
        $gaji = 2500000;
        $tunjangan= 250000;
       
    }else if($golongan == 4){
        $gaji = 3000000;
        $tunjangan= 300000;
       
    }

    $pajakpokok = 0.5 * $gaji;
    $pajaklembur = 0.5 * $gajilembur;
    $pajak =  $pajakpokok + $pajaklembur ;
    $gajikotor = $gaji + $tunjangan + $lembur;
    $hasil =$gajikotor-$pajak ;
    $f= "Rp.";
    
    echo "<br>Nama = $nama";
    echo "<br>Agama = $agama";
    echo "<br>Jenis Kelamin = $jk";
    echo "<br>Gaji Pokok = $f $gaji";
    echo "<br>Gaji Lembur = $f $gajilembur";
    echo "<br>Tunjangan = $f $tunjangan";
    echo "<br>Gaji Kotor = $f $pajakpokok";
    echo "<br>Total Pajak = $f $pajak";
    echo "<br>Hasil = $f $hasil";
   

}
?>