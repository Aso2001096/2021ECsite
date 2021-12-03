<?php session_start();?>
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

    <?php
    if(isset($_SESSION['sign_in'])){
        echo $_SESSION['sign_in']['name'], 'さん<br>';
        echo '<p>ログアウトしますか？</p>';
    }else {
        echo 'すでにログアウトしています。';
    }
    ?>

    <button onclick="location.href='ログアウト完了.php'">Log out</button><br>
    <a href="top.php">TOPに戻る</a>

</div>
</body>
</html>
