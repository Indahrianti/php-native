<?php
// optional parameter / default parameter
function pertambahan($bil1 =1, $bil2 = 2){
    return $bil1 + $bil2;
}
echo pertambahan(10,10). "<br>";
echo pertambahan(10). "<br>";
echo pertambahan(8). "<br>";
echo pertambahan();

?>
