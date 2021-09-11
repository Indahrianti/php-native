<?php
if(isset($_POST['pilih'])) {
    $film = $_POST['kartun'];
    echo "Film Kartun Favorit Anda Adalah : 
    <font color=blue><b>$film</b></font>";
}
?>