<?php
    $data = [
        ["dosen" => "Aceng Fikri", "submenu" => [
            [ "nama" => "Indah",
            "MataKuliah" => [
            ["MataKuliah" => "Bahasa Indonesia "],
            ["MataKuliah" => "Bahasa Asing"],
            ["MataKuliah" => "Bahasa Inggris"]],

            "Hobi" => [
            ["Hobi" => "Menggambar"],
            ["Hobi" => "Mendengarkan Musik"]]],

            [ "nama" =>
             "Rianti",
            "MataKuliah" => [
            ["MataKuliah" => "IPA"],
            ["MataKuliah" => "IPS"],
            ["MataKuliah" => "Bahasa Sunda"]],
            
            "Hobi" => [
            ["Hobi" => "menggambar"],
            ["Hobi" => "menulis"]]],

            [ "nama" => "Fuji",
            "MataKuliah" => [
            ["MataKuliah" => "RPL"],
            ["MataKuliah" => "MTK"],
            ["MataKuliah" => "Kimia"]],

            "Hobi" => [
            ["Hobi" => "Berjualan"],
            ["Hobi" => "Main voli"]]],
        ]
        ],

        ["dosen" => "Ujang Betok", "submenu" => [
            [ "nama" => "Indri",
            "MataKuliah" => [
            ["MataKuliah" => "MTK"],
            ["MataKuliah" => "Bahasa Indonesia"],
            ["MataKuliah" => "Bahasa Inggris"]],

            "Hobi" => [
            ["Hobi" => "Makan"],
            ["Hobi" => "Bermain"]]],

            [ "nama" =>
             "Suci",
            "MataKuliah" => [
            ["MataKuliah" => "MTK"],
            ["MataKuliah" => "B indonesia"],
            ["MataKuliah" => "PAI"]],
            
            "Hobi" => [
            ["Hobi" => "Traveling"],
            ["Hobi" => "Memasak"]]],

            [ "nama" => "Astri",
            "MataKuliah" => [
            ["MataKuliah" => "PPKN"],
            ["MataKuliah" => "Bahasa asing"],
            ["MataKuliah" => "Bahasa Jepang"]],

            "Hobi" => [
            ["Hobi" => "Bermain game"],
            ["Hobi" => "menyanyi"]]],
        ]
        ],
    ];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table border="1" width="100%">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Nama Dosen</th>
            <th>Mata Kuliah</th>
            <th>Hobi</th>
        </tr>
        
        <?php $no=1 ; ?>
             <?php foreach($data as $key=> $menu) {
            foreach($menu['submenu'] as $val){
                ?><tr><td><?php 
                
                echo $no ++; ?></td>
                  <td><?php echo $val['nama'];?></td>
                  <td><?php echo $menu['dosen']?></td>
            
                  
            <?php
                 echo "<td>";
                  foreach($val['MataKuliah'] as $sub) {
                ?>   <li><?php echo  $sub['MataKuliah'] ;?></li>
                <?php
                }
                ?><?php
                 echo "<td>";
                foreach($val['Hobi'] as $hobi) {
                    echo "<li>". $hobi['Hobi']. "</li>";
                }
                echo "</td>";
            }
            }
            ?>
            </td>
            </tr>
        
        </table>
    </body>
    </html>