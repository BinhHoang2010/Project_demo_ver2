<html>
    <head>
        <title>While_loop</title>
    </head>
    <style>
        ul li  {display: inline; margin: 0 5px;}
    </style>
    <body>
        <ul class="Phan_trang">
            <?php
                $count = 0;
                while($count <=10) {
                    echo "<li><a href='$count'>{$count}</a></li>";
                    $count++;
                }

            ?>
        </ul>
    </body>

</html>
