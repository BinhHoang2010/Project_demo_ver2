<html>
    <head>
        <title>start up</title>
    </head>

    <body>
        <?php 
        // Đây là đoạn tính toán PHP 
        echo "3*9=";
        echo 3*9 . " và 3+9=";
        echo 3+9;
        ?> </br>

        <?php 
        $var = 2010;
        echo  $var; 
        ?></br>
        <?php 
        // Đây là biến 
        $Bình = "24 tuổi, sinh ngày 20/10 </br>";
        echo $Bình;

        $file = $_SERVER['SCRIPT_FILENAME'];
        echo "Bạn đang xem file: {$file}" . "</br>";
        ?>

        <?php
        // Đây là comment về bài chuỗi 
        $nickname = "Bèo";
        $manga = "Boku no hero academia";
        echo "<p><strong>{$nickname}</strong> rất thích đọc <b>{$manga}</b> </p>"
        ?>

        <?php 
        // Đây là comment về bài nối chuỗi
        $string1 = "hom nay troi rat dep nen";
        $string2 = " chung ta nen di cafe hoc bai";
        $string3 = $string1;
        $string3 .= $string2;
        echo $string3;
        ?>

        <!-- Thực hành một số function  -->
        <p><strong>String Length: </strong><?php echo strlen($string1);?></p> 
        <!-- In hoa toàn bộ câu -->
        <p><strong>String Uppercase: </strong><?php echo strtoupper($string2);?></p> 
        <!-- In thường toàn bộ câu -->
        <p><strong>String lowercase: </strong><?php echo strtolower($string2);?></p>
        <p><strong>String chữ đầu in hoa: </strong><?php echo ucfirst($string1);?></p>
        <p><strong>String tất cả chữ đầu in hoa: </strong><?php echo ucwords($string1);?></p>
        <p><strong>String thay thế: </strong><?php echo str_replace('cafe hoc bai','cong vien',$string3);?></p>

        <?php
        // Thực hành về constant
            define('username','Bèo');
            echo "Hello, " . username;

            define('TODAY', '2022-05-22');
            echo "<p>Hôm nay là " . TODAY. " Bèo đang sử dụng phiên bản " . PHP_VERSION . " trên hệ điều hành " . PHP_OS. "</p></br>";

        // Sử dụng HS để khai báo cho những giá trị k muốn thay đổi. Ví dụ như username, password,...(sau này khi liên kết vs CSDL)
        ?>

        <?php
        // Array
            $myarray1 = array(20,10,13,9,97,98,array('a','c','b'));
            echo $myarray1 [6]['1'];

            $myarray = array(20,10,13,9,97,98,array('a'=>'アパート','b'=>'ビル','k'=>'会館'));
            echo "<p>私が住んでいる所は{$myarray[0]}番の{$myarray[6]['k']} </p>";

            echo "<pre>";
            print_r ($myarray);
            echo "</pre>";

            $myarray3 = array(0,49,21,58,20,67);
        ?>

        <!-- Các array function -->
        <p>Count số lượng trong Array là: <?php echo count($myarray3); ?></p>
        <p>Tính max số lượng trong Array: <?php echo max($myarray3); ?></p>
        <p>Tính min số lượng trong Array: <?php echo min($myarray3); ?></p>

        <p>Sắp xếp thứ tự tăng dần trong Array như sau:</p>
        <?php
        sort($myarray1);
        echo "<pre>";
        print_r ($myarray1);
        echo "</pre>";
        ?>

        <p>Sắp xếp thứ tự giảm dần:</p>
        <?php
        rsort($myarray);
        echo "<pre>";
        print_r($myarray);
        echo "</pre>";
        ?>
        
        <p>Implode: 
        <?php echo implode('*',$myarray3);?>
        </p>

        <?php
        $myEmails = "hthuongbinh@gmail.com,binh.hoang@amela.vn,thanh.nguyen@amela.vn";
        $split = explode(',', $myEmails);
        echo "<pre>";
        print_r ($split);
        echo "</pre>";

        $last = end($split);
        echo $last;
        ?>

        <?php
        // Thêm 1 phần tử khác vào cuối cùng của array
        $myArray4 = array('thao','tung','binh','ly','duy');
        $myArray4[] = 'thanh';
        // Thêm 1 phần tử chen vào giữa array
        array_splice($myArray4,2,0,'dung');
        // nếu là 0, thì chỉ chèn thêm 'dung' vào trước 'bình', nhưng nếu là 1 thì sẽ xóa luôn 'bình'

        // Xóa value của 1 key
        $myArray4[4] = '';
        // Xóa luôn key và value trong array
        unset($myArray4[2]);

        echo "<pre>";
        print_r ($myArray4);
        echo "</pre>";
        ?>

        <?php
        $myArray5 = array('thao','tung','binh','ly','thang','hung','thanh');
        // Xóa đi 1 số phần tử trong array bắt đầu từ phần tử n
        array_splice($myArray5,3,2);

        echo "<pre>";
        print_r ($myArray5);
        echo "</pre>";
        ?>

        <?php
        $myArray6 = array('html','css','java');
        $myArray7 = array('php','ruby','python');

        // Merge 2 array lại với nhau

        $merged = array_merge($myArray6,$myArray7);

        // random hiển thị array
        shuffle($merged);

        // Hiển thị random key trong array
        $rand = array_rand($merged);


        echo "<pre>";
        // cho hiển thị random key trong array
        // print_r ($merged[$rand]);
        print_r ($merged);
        echo "</pre>";
        // If,else
        if(in_array('htmlll',$merged)){
            echo "yes, it is in array";
        }
        else{
            echo "no, it is not here";
        }
        ?>

        <?php
        // viết hoa cho các phần tử trong mảng, dùng ucfirst,array_map và for each
        // array_map để thực hiện function viết hoa đầu từ cho các phẩn tử trong mảng
        $myArray8 = array('táo','đào','mận','chuối','cam');
        
        $viet_hoa = array_map('ucfirst',$myArray8);
        foreach ($viet_hoa as $hoa){
            echo "<li>{$hoa}</li>";
        }
        // vì $viet_hoa đang được hiểu là 1 mảng, nên phải đặt tên biến cho từng phần tử trong mảng là $hoa
        // Còn khi khai báo biến viet_hoa là array_map thì nó đang đc hiểu là 1 mảng (hàm map trả về 1 array)

        ?>

        <!-- Số nguyên, số thập phân -->

        <?php
        $number = 3.14;
        $number2 = 2.67;
        // Làm tròn số 
        echo round($number, 1) . "</br>";
        echo round($number2) . "</br>";
        // Làm tròn đến số cao nhất:
        echo ceil($number) . "</br>"; 
        // Làm tròn đến số thấp nhất:
        echo floor($number2). "</br>"; 
        // Hiển thị số random:
        echo rand() . "</br>"; 
        echo rand(1,1000) . "</br>"; 

        $float = 20536;
        echo number_format($float,1);
        ?>

        <?php
        // Gán giá trị cho biến
        $so_luong = 25;
        $gia = 27.940;
        $thue = 0.8;

        // Tính tổng hóa đơn 
        $tong_cong = $so_luong*$gia;
        $tong_cong +=  ($tong_cong*$thue);

        echo "<p>Bạn mua số lượng tổng cộng là: <strong>{$tong_cong}</strong></p>";
        ?>

        <!-- Bài toán tạo form chọn ngày tháng năm -->

        <?php
            $thang = array(
                1 => "Tháng 1",
                2 => "Tháng 2",
                3 => "Tháng 3",
                4 => "Tháng 4",
                5 => "Tháng 5",
                6 => "Tháng 6",
                7 => "Tháng 7",
                8 => "Tháng 8",
                9 => "Tháng 9",
                10 => "Tháng 10",
                11 => "Tháng 11",
                12 => "Tháng 12",
            );

            $ngay = range(1,31);
            $nam = range(1980,2030);
        ?>

        <form action="" method="POST">
            <select>
                <option>Chọn ngày</option>
                <?php
                    foreach($ngay as $k => $v){
                        echo "<option value='{$k}'>".$v."</option>";
                    }
                ?>
                <option>Chọn tháng</option>
                <?php
                    foreach($thang as $k => $v){
                        echo "<option value='{$k}'>".$v."</option>";
                    }
                ?>
            </select>
        </form>

        <form action="" method="POST">
            <select>
                <option>Chọn tháng</option>
                <?php
                    foreach($thang as $k => $v){
                        echo "<option value='{$k}'>".$v."</option>";
                    }
                ?>
            </select>
        </form>

        <!--  -->
        <form action="" method="POST">
            <select>
                <option>Chọn năm</option>
                <?php
                    foreach($nam as $k => $v){
                        echo "<option value='{$k}'>".$v."</option>";
                    }
                ?>
            </select>
        </form>


    </body>


</html>


