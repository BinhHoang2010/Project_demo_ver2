<?php
    $name = null;

    // 
    if ($name) {
        echo "Tùng đẹp trai 1";
        echo "<br/>";
    }

    // ! trong T.H này có ý nghĩa nếu $name k tồn tại thì in Tùng đẹp trai => hàm đối nghịch, thêm ! vào thì đk sẽ bị đảo ngược
    if (!$name) {
        echo "Tùng đẹp trai 2";
        echo "<br/>";

    }

    // kiểm tra xem biên có tồn tại hay ko
    if (isset($name)) {
        echo "Tùng đẹp trai 3";
        echo "<br/>";

    }

    // check xem biến có rỗng hay ko -> 
    if (empty($name)) {
        echo "Tùng đẹp trai 4";
        echo "<br/>";

    }


?>