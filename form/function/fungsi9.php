<?php
$menu =[
    [
        "nama"=>"beranda"
    ],
    [
        "nama"=>"berita",
        "submenu"=>[
            [
                "nama"=>"olahraga",
                "submenu"=>[
                    [
                        "nama"=>"bola"
                    ],
                    [
                        "nama"=>"bulu tangkis"
                    ]
                ]
            ],
            [
                "nama"=>"politik"
            ],
            [
                "nama"=>"mancanegara"
            ]
        ]
            ],
            [
                "nama"=>"tentang"
            ],
            [
                "nama"=>"kontak"
            ],
        ];

function menu(array $menu){
   /* echo "<ul>";
    foreach($menu as $key => $item){
        echo "<li>{$item['nama']} </li>";
    }
    echo "</ul>";
} 
menu($menu);*/



    echo "<ul>";
    foreach($menu as $key => $item){
        echo "<li>{$item['nama']} </li>";

        if(@$item['submenu'] && count($item['submenu'])) {
            menu($item['submenu']);
        }
    }
    echo "</ul>";
}
menu($menu);
?>