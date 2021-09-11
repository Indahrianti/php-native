<?php

$menu = [
    [
        "nama"=> "beranda",
        "submenu" => [
            [
                "nama" => "olahraga",
                "submenu" => [
                    [
                        "nama" => "bola"
                    ],
                    [
                        "nama"=> "bulu tangkis"
                    ]
                ]
            ],
            [
                "nama" => "politik",
                "submenu"=>[
                    [
                        "nama"=> "partai banteng"
                    ],
                    [
                        "nama"=> "ekonomi"
                    ]
                ]
            ],
            [
                "nama"=>"manca negara",
                "submenu"=> [
                    [
                        "nama"=>"internasional"
                    ],
                    [
                        "nama"=>"world"
                    ]
                ]
            ]
        ]
    
        ]
];

foreach($menu as $key => $val)
{
    echo $val['nama']."<br>";
    echo "<ul>";
    foreach($val['submenu'] as $menu)
    {
        echo "<li>". $menu['nama']. "</li>";
        echo "<ol>";
        foreach($menu['submenu'] as $sub)
        {
            echo "<li>". $sub['nama'] ."</li>";
        }
        echo "</ol>";
    }
    echo "</ul>";
}
?>