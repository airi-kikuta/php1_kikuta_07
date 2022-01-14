
<?php

$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];

$name = htmlspecialchars($name, ENT_QUOTES);
$mail = htmlspecialchars($mail, ENT_QUOTES);
$phone = htmlspecialchars($phone, ENT_QUOTES);

?>

<html>
    <html lang="ja">
<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    氏名: <?= $name ?>
    E-mail: <?= $name ?>
    電話番号: <?= $phone ?>
</body>

</html>

