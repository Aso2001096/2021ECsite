<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>検索</title>
    <link rel="stylesheet" href="./css/style/css">
</head>

<body>
<div style="text-align: center">
<h1>Ishin</h1>
<button onclick="location.href='top.php'">TOP</button>

<button onclick="location.href='新着.php'">新着商品</button>

<button onclick="location.href='人気.php'">人気商品</button>

<button onclick="location.href='セール.php'">セール</button>

<button onclick="location.href='カート.php'">カート</button>

<button onclick="location.href='会員情報.php'">会員情報</button>

<p>検索画面</p>
    <form action="検索.php" method="post">
        <input type="text" name="kensaku">
        <button type="submit" value="検索">検索</button><br>
    </form>
<p>検索履歴一覧↓↓</p>
    <?php

    ?>
</div>
</body>
</html>
