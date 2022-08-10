<?php
    if(isset($_POST['submit'])){ //isset check xem form đã submit hay chưa. Nếu chưa thì ko xử lý những hàng tiếp theo
        if($_POST['gender']=='nu'){  //$_POST sẽ gọi biến trong form bên dưới ra; ['submit'] sẽ là button submit bên dưới có value là Submit
            echo "Xin chào chị!";  
        }elseif($_POST['gender']=='nam'){  //chạy lần lượt qua các giá trị trong select 
            echo "Xin chào anh!";
        }elseif($_POST['gender']=='other'){
            echo "Xin chào!";
        }else "Chào người lạ!"; 
            echo($_REQUEST['gender']);
            echo($_REQUEST['id']);
    }
?>


<form action="" method="POST">
    <select name="gender">
        <option>Giới Tính</option>
        <option value="nu">Nữ</option>
        <option value="nam">Nam</option>
        <option value="other">Khác</option>
    </select>

    <input type="file"  name="file" />    
    <input type="submit" name="submit" value="Submit" />
</form>

