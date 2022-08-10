<?php
// check xem user đã bấm nút submit hay chưa bằng cách kiểm tra sự tồn tại của biến $_POST
if(isset($_POST['submit'])){
    $warning =
'女性
女子
男性
男子
大学
以下
以上
旧帝大
上位
下位
日東駒専
関関同立
MARCH
ＭＡＲＣＨ
SMART
ＳＭＡＲＴ
早慶
GMARCH
ＧＭＡＲＣＨ
MARCHG
ＭＡＲＣＨＧ
以外
リスト
対象
関東
関西
首都圏
九州
中部
東北
地方
1
2
3
4
5
6
7
8
9
１
２
３
４
５
６
７
８
９
①
②
③
④
⑤
⑥
⑦
⑧
⑨
⑩
♯
#
LGBT
ＬＧＢＴ
ジェンダー
外国人
留学生
日本人
偏差値
ランク
東京一工
レベル
トップ';
$warning_keywords = explode('<br />', nl2br($warning));

$input_text = $_POST['text'];
$has_warning_keyword = false;
$warning_word = '';

foreach($warning_keywords as $value){
    if (empty($input_text)) {
        break;
    }
    if (is_int(strpos($value, $input_text))){
        $warning_word = $value;
        $has_warning_keyword = true;
        break;
    }
};

if($has_warning_keyword == true){
    echo 'This text is containing warning keyword.' .$warning_word. 'Please try again';
}else{
    echo 'This text has passed!';
}


// echo "<pre>";
// print_r ($array);
// echo "</pre>" . "</br>";
// echo "<hr>";
// echo $key_word;

}

?>
 <!-- Cho 1 ô input, nhập từ bất kỳ và xem có nằm trong warning word ko. Nếu là warning thì in ra warning, ko thì in ra pass -->

<html>
    
    <body>
        <form action="" method="POST">
            <input type="text" name="text" value="">
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>


</html>

