<?php
$data= [
    [
        "namamahasiswa"=> "Abdul",
        "matakuliah"=> [
            ["mata"=> "Fisika"],
            ["mata"=> "Fisika"],
            ["mata"=> "Fisika"]
        ],
        "hobi"=> [
            ["hob"=> "renang"],
            ["hob"=> "mancing"],
        ],
        "namadosen"=> "Abdul"
    ],
    ["namamahasiswa"=> " indah"]

    ];


    foreach($data as $key => $val){
        echo "NAMA siswa: " .$val['namamahasiswa']. "<br>";
        echo "<ul>";
 
            echo "<br>daftar mapel :";
            echo "<ol>";
 
            foreach($val['matakuliah'] as $sub){
                echo "<li>". $sub['mata']. "</li>";
            }
            echo "daftar hobi :";
            echo "<ol>";
         foreach($val['hobi'] as $hobi) {
             echo "<li>". $hobi['hob']. "</li>";

         }
       
             echo "<li>". $val['namadosen']. "</li>";
         

         echo "</ol>";
         echo "</ol>";
         echo "</ul>";
        } 

?>

<html>
<head><title>hasil</title><head>
<body>
   <fieldset>
   <legend>Data Siswa</legend>
   <table border=1>
     <tr> 
        
        <th><?php echo "namamahasiswa"; ?></th>
        <th><?php echo "matakuliah"; ?></th> 
        <th><?php echo "hobi"; ?></th> 
        <th><?php echo "namadosen"; ?></th> 

        </tr>

        <tr>

<?php
if(isset($_POST['data'])) {
    $namamahasiswa=$_POST['namamahasiswa'];
    $matakuliah=$_POST['matakuliah'];
    $hobi=$_POST['hobi'];
    $namadosen=$_POST['namadosen'];
  



?>
      <td><?php echo $namamahasiswa['namamahasiswa']; ?></td>
      <td><?php echo $matakuliah['matakuliah']; ?></td>
      <td><?php echo $hobi['hobi']; ?></td>
      <td><?php echo $namadosen['namadosen']; ?></td>

<?php } ?>
   </table>
   </fieldset>
</body>
</html>