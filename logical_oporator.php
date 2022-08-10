<?php
    // hàm in_array: chọn 1 giá trị trong mảng và in ra output 
    $img = "binh2010.jpg";
    $count = strlen($img);
    $allowed = array("jpg","png","gif");
    $split = explode(".", $img);
    $end = end($split);

    if(($count < 15 ) && in_array("jpg",$allowed)){
        echo "your image is ready for upload";
    }else{
        echo "your image is not ether the valid type or over the size limit";
    }
?>