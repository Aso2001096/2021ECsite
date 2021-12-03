<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>login-out</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div style="text-align: center">
    <h1>Ishin</h1>
    <h3>Wellcome</h3>

    <?php
    $pdo = new PDO('mysql:host=mysql153.phy.lolipop.lan;
                dbname=LAA1290595-school;charset=utf8',
        'LAA1290595',
        'Riemori4268');

    $sql = $pdo->prepare('select * from sign_in where e_mail=? and pass=?');
    $sql->execute([$_POST['mail'],$_POST['password']]);
    foreach ($sql as $row) {
        $_SESSION['sign_in'] = [
                'e_mail'=>$row['e_mail'],
                'pass'=>$row['pass'],
                'name' => $row['name']];
    }
    if (isset($_SESSION['sign_in'])) {
        echo $_SESSION['sign_in']['name'], 'さん<br>';
        echo '<p>ログインしました</p>';
    } else {
        echo '<p>error</p>';
    }
    $pdo = null;
    ?>
    <button onclick="location.href='top.php'">page top</button>
</div>
</body>
</html>
