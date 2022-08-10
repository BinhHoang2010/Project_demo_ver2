<!-- Cho một mảng các số nguyên, sắp xếp theo thứ tự từ bé đến lớn -->
<?php
$so_nguyen = [3,6,7,2,1,0,5,4,8,13,67,21,46];
    
$so_phan_tu = count($so_nguyen);

for($i=0; $i < $so_phan_tu - 1; $i++){
    $min = $i;
    for($j = $i + 1; $j < $so_phan_tu; $j++){
        if($so_nguyen[$j] < $so_nguyen[$min])
        {
                $min = $j;
        }
    }

    $temp = $so_nguyen[$i];
    $so_nguyen[$i] = $so_nguyen[$min];
    $so_nguyen[$min] = $temp;

}

return $so_nguyen;

echo $so_nguyen[$i];


// $mang = array(1, 5, 9, 2, 4, 9); // mảng theo đề bài
  
// $sophantu = 6; // hoặc dùng hàm $sophantu = count($mang);
  
// Sắp xếp mảng
// for ($i = 0; $i < ($sophantu - 1); $i++)
// {
//     for ($j = $i + 1; $j < $sophantu; $j++) // lặp các phần tử phía sau
//     {
//         if ($mang[$i] > $mang[$j]) // nếu phần tử $i bé hơn phần tử phía sau
//         {
//             // hoán vị
//             $tmp = $mang[$j];
//             $mang[$j] = $mang[$i];
//             $mang[$i] = $tmp;
//         }
//     }
// }
  
// // Hiển thị các phần tử của mảng đã sắp xếp
// for ($i = 0; $i < $sophantu; $i++){
//     echo $mang[$i] . ' ';
// }


?>