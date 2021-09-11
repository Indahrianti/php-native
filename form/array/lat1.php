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
                 "Hobi"=> [["Hobi"=> "renang"],
                          ["Hobi"=> "menggambar"]]
             ]
             ]
              ]
    
         ];

   
   foreach($data as $key => $val){
       echo "nama dosen :" .$val['dosen']. "<br>";
       echo "daftar siswa :";
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