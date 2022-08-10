<?php
    if(isset($_POST['submit'])){ //isset check xem form đã submit hay chưa. Nếu chưa thì ko xử lý những hàng tiếp theo
       echo $_POST['gender'] == "nu" ? "chào chị!" : "chào anh!";
    }
?>


<form action="" method="POST">
    <select name="gender">
        <option>Giới Tính</option>
        <option value="nu">Nữ</option>
        <option value="nam">Nam</option>
        <option value="other">Khác</option>
    </select>
    <input type="submit" name="submit" value="Submit" />
</form>
