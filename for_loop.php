<html>
    <head>
        <title>For_loop</title>
    </head>
    <style>
        ul li  {display: inline; margin: 0 5px;}
    </style>
    <body>
        <ul class="Phan_trang">
            <?php
                for($i=1; $i<=10; $i++){
                    echo "<li><a href='$i'>{$i}</a></li>";
                }

            ?>
        </ul>
    </body>

</html>



<form action="" method="post">
    <label>Số lượng sao cần in</label><br>
    <input name="Soluong" type="number" value="" min=1 max=100><br>
    <input type="submit" name="submit" value="submit" />
</form>

<?php
    //Tạo 1 hàm in số sao tương ứng với số mình nhập
    
    function in_sao($Soluong){
        $sao = "";
        for($i=1; $i<=$Soluong; $i++){
            $sao = $sao . "*";
        }
        return $sao;
    }

    if(isset($_POST['submit'])){
        $Soluong = $_POST['Soluong'];
        echo "Số sao tương ứng là:" . in_sao($Soluong);
    }

    
?>

<!-- loop luôn luôn có điều kiện -->