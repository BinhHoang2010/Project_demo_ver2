<!-- Nhập 2 số m và n và in ra tích -->


<!-- <form action="" method="post">
    <label>Giá trị m:</label>
    <input name="So_thu_nhat" type="number" value=""><br>
    <label>Giá trị n:</label>
    <input name="So_thu_hai" type="number" value=""><br>
    <input type="submit" name="submit" value="submit" />
</form> -->

<?php
    // if(isset($_POST['submit'])){
    //     $m = $_POST['So_thu_nhat'];
    //     $n = $_POST['So_thu_hai'];
    //     echo $m*$n;
    // }
?>

<!-- In viền cho 1 chuỗi ký tự -->

<form action="" method="post">
    <label>Chuỗi:</label>
    <input name="chuoi" type="text" value=""><br>
    <input type="submit" name="submit" value="submit"/>
</form>

<?php

    function in_vien($Number){
        $vien = "";
        for($i=1; $i<=$Number; $i++){
            $vien = $vien . "+";
        }
        return $vien;
    }

    if(isset($_POST['submit'])){
        $string = $_POST['chuoi'];
        $SO_LUONG = strlen($string) + 2;
        echo in_vien($SO_LUONG) . "</br>";
        echo "+" . $string . "+" ."<br>";
        echo in_vien($SO_LUONG);
    }
?>
