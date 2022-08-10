<html>
    <head>
        <title>Foreach</title>
    </head>

    <?php
        $names = array("Beo", "Thanh", "Tung", "Thao", "Ly", 2010, 1309);
        foreach($names as $name){
            echo $name;
        }

        foreach($names as $key => $value){
            echo $key . " " . $value . "</br>";
        }
    ?>


</html>