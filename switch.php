<html>
    <head>
        <title>Switch PHP</title>
    </head>


    <body>
        <ul>
            <li><a href="">Home page</a></li>
            <li><a href="">Blog</a></li>

            <?php
             // Hàm switch: khai báo giá trị của 1 biến và đưa ra 1 số case. Nếu case nào match với giá trị đã cho sẽ in ra output
                $user = 1;
                switch($user){
                    case 1:
                    echo "<li><a href=''>My page</a></li>";
                    break;

                    case 2:
                    echo "<li><a href=''>Edit profile</a></li>";
                    break;

                    case 3:
                    echo "<li><a href=''>Delete Profile</a></li>";
                    break;
                }

            ?>

        </ul>

    </body>


</html>
