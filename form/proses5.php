<?php
if(isset($_POST['login'])) {
    $user =$_POST['username'];
    $pass =$_POST['password'];
    if($user == "indah" && $pass == "111"){
        echo "<h2>Login Berhasil</h2>";
    }else{
        echo "<h2>Login GAGAL</h2>";
    }
}
?>