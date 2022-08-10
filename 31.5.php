<?php
    $members = [
        "Tung" => 1994,
        "Binh" => 1997,
        "Ly" => 1995,
        "Thao" => 1998,
        "Viet" => 2000,
        "Duy" => 1992,
        "Quynh" => 1990
    ];
    echo $members["Thao"];

    $member_TOC = [
        "Tung" => [
            'Weight'=> 60,
            'Height'=> '1m70'
        ],
        "Thao" => [
            'Weight'=> 41,
            'Height'=> '1m65'
        ]
    ];
    $thao = $member_TOC["Thao"];
    print_r($thao);
    
    $thao = [
        'Weight'=> 41,
        'Height'=> '1m65'
    ];
    echo $member_TOC["Thao"]['Weight'] ."</br>";

    $role = ['PM','Comtor','Dev','Tester'];
    echo $role[2] ."</br>";

    foreach ($members as $key => $value){
        if($value <= 1996){
            echo "Tên của member là:".$key ."</br>";
            continue;
        }
        echo "không thoa man </br>";
    }
// Continue là bỏ qua code ở dưới và chạy tiếp vòng lặp

// Từ mảng dưới đây, phân loại member theo năm sinh trong khoảng từ 90 -> 95 và từ 96 -> 20

$members = [
    "Tung" => 1949,
    "Binh" => 1997,
    "Ly" => 1995,
    "Thao" => 1998,
    "Viet" => 2000,
    "Duy" => 1992,
    "Quynh" => 1990
];
$reverse_members = [];

$mem_key = [];
$mem_value = [];

foreach($members as $key => $value){
    $mem_key[] = $key;
    $mem_value[] = $value;
}

print_r($mem_key);
print_r($mem_value);

//output $old ( 90 -> 95) và $young ( 96 -> 20)
$old = [];
$young = [];

foreach ($members as $key => $value){
    if($value >= 1990 && $value <= 1995){
        $old[] = $key;
    }elseif($value >= 1996 && $value <= 2000    ){
        $young[] = $key;
    }
}
echo "Các thành viên có năm sinh từ 90 -> 95 là: " .  implode(', ', $old) ."</br>";
echo "Các thành viên có năm sinh từ 20 -> 96 là: " .  implode(', ', $young);

echo "</br>";

?>