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
                    function build_form($value){
                    foreach($value as $k => $v){
                        echo "<option value='{$k}'>".$v."</option>";
                    }
                    }
                ?>

                <?php
                    build_form($ngay);
                ?>
            </select>

        </form>

        <form action="" method="POST">
            <select>
                <option>Chọn tháng</option>
                <?php
                    build_form($thang);
                ?>
            </select>
        </form>

        <form action="" method="POST">
            <select>
                <option>Chọn năm</option>
                <?php   
                    build_form($nam);
                ?>
            </select>
        </form>