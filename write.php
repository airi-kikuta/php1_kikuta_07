
<?php

$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];


// ファイルに書き込むデータ
$date = date('Y/m/d H:i:s');
$str = $date . '/' . $name .'/'. $mail . '/' . $phone;

// ファイルの用意
$file = fopen('./data.txt','a');

// 書き込み
fwrite($file , $str . "\n");

// ファイルをクローズ
fclose($file);

?>


<html>

<head>
    <meta charset="utf-8">
    <title>write</title>
</head>

<body>
    <ul>
        <li><a href="read.php">確認</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
