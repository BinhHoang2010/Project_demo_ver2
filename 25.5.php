<?php
$x = 20;
global $x;
$y = 35;
$z = 60;

// so sánh giá trị
$x == 20; 
// so sánh cả kiểu dữ liệu (string, int,...)
$x === 20;

if ($x === '20') {
    echo 'ok';
} else {
    echo 'kosdfsdf ok';
}

// Vòng lặp for 

for ($x; $x < 30; $x=$x+1) {
    echo "anc";
}

echo "giá trị cuối cùng của biến x là".$x."</br>"; //x=30

$b = ++$x + $y--; // = 31 + 35

echo "giá trị cuối cùng của biến x là".$b."</br>";

// Biến cục bộ 

$x = 4;


function assignx ($y) {
    print "Biến x bên trong funtion là $y. <br>"; //$y ở đây chỉ nhận giá trị được truyền vào giá trị của hàm assignx ở trên (tham số của hàm)
    $y++;
}
assignx($x); //giá trị tham số của hàm assignx ở đây chính là giá trị của hàm assignx ở trên
print "Biến x bên ngoài hàm là $x. <br>";

$c = 19;

function test(){  //chỉ đang defined hàm, thực thi những việc sẽ làm trong hàm
    global $c;
    $c++;
    echo $c ."</br>";
}
test(); //khi muốn sử dụng hàm thì phải gọi đến nó
echo $c ."</br>";

// Biến toàn cục: phải có từ GLOBAL

echo $_SERVER['SERVER_NAME'];

echo $_GET;