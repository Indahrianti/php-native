<?php
$data=[
   ["dosen"=> "aceng ",
    "submenu"=> [
        ["nama"=>"ahmad",
         "matakuliah"=>[
             ["matakuliah"=> "MTK"],
             ["matakuliah"=> "indonesia"],
             ["matakuliah"=> "IPA"]],
             "Hobi"=> [["Hobi"=> "renang"],
                      ["Hobi"=> "main game"]]
         ],
         ["nama"=> "suep",
         "matakuliah"=>[
            ["matakuliah"=> "Bahasa Inggris"],
            ["matakuliah"=> "MTK"],
            ["matakuliah"=> "IPS"]],
            "Hobi"=> [["Hobi"=> "makan"],
                     ["Hobi"=> "tidur"]]
        ],
        ["nama"=> "indah",
         "matakuliah"=>[
            ["matakuliah"=> "Kimia"],
            ["matakuliah"=> "Bahasa Sunda"],
            ["matakuliah"=> "Bahasa Asing"]],
            "Hobi"=> [["Hobi"=> "masak"],
                     ["Hobi"=> "membaca"]]
        ]
        ]
         ],
         ["dosen"=> "ujang betok ",
         "submenu"=> [
             ["nama"=>"ahmad",
              "matakuliah"=>[
                  ["matakuliah"=> "Fisika"],
                  ["matakuliah"=> "Bahasa Jepang"],
                  ["matakuliah"=> "PPKN"]],
                  "Hobi"=> [["Hobi"=> "main hp"],
                           ["Hobi"=> "renang"]]
              ],
              ["nama"=> "suep",
              "matakuliah"=>[
                 ["matakuliah"=> "Bahasa Jepang"],
                 ["matakuliah"=> "Fisika"],
                 ["matakuliah"=> "Bahasa Sunda"]],
                 "Hobi"=> [["Hobi"=> "renang"],
                          ["Hobi"=> "olahraga"]]
             ],
             ["nama"=> "indah",
              "matakuliah"=>[
                 ["matakuliah"=> "MTK"],
                 ["matakuliah"=> "Fisika"],
                 ["matakuliah"=> "indonesia"]],
                 "Hobi"=> [["Hobi"=> "Membaca"],
                          ["Hobi"=> "Menggambar"]]
             ]
             ]
              ]
    
         ];

   
   foreach($data as $key => $val){
       echo "NAMA DOSEN: " .$val['dosen']. "<br>";
       echo "DAFTAR SISWA :";
       echo "<ul>";

       foreach($val['submenu'] as $menu){
         
           echo $menu['nama'];
           echo "<br>daftar mapel :";
           echo "<ol>";

           foreach($menu['matakuliah'] as $sub){
               echo "<li>". $sub['matakuliah']. "</li>";
           }
           echo "daftar hobi :";
           echo "<ol>";
        foreach($menu['Hobi'] as $hobi) {
            echo "<li>". $hobi['Hobi']. "</li>";
        }
        echo "</ol>";
        echo "</ol>";
        echo "</ul>";
       }
   } 
?>

<html>
<head><title>hasil</title><head>
<body>
   <fieldset>
   <legend>Data Siswa</legend>
   <table border=1>
     <tr> 
        <th>No</th>
        <th>Nama Mahasiswa</th>
        <th>Nama Dosen</th>
        <th>Mata Kuliah</th>
        <th>Hobi</th> 

        </tr>

    <?php
    $no=1;
    for($i=0; $i< count($val); $i++){
       
      
       
       ?>
    
<?php }  ?>

   </table>
   </fieldset>
</body>
</html>