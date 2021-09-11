<?php
$sim = "ya";
$stnk = "tidak";

// penecekan kelengkapan surat kendaraan
if($sim == "ya"){
    if ($stnk == "ya"){
        echo "selamat menjalankan aktifitas,hati hati berkendara";
    } else {
        echo "maaf anda ditilang";
    }
} else {
    echo "maaf anda kami yilanh";
}

?>