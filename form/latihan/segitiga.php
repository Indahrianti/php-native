<?php
if(isset($_POST['pilih'])) {
    $program=$_POST['program'];
    if($program == 1){
        header("location:segi.php");
    }else if($program == 2){
        header("location:ling.php");
    }else if($program == 3){
        header("location:persegi.php");
    }else if($program == 4){
        header("location:perpanjang.php");
    }
}
        ?>

    