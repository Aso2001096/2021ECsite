<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div style="text-align: center">
    <h1>Ishin</h1>
    <button onclick="location.href='top.php'">TOP</button>
    <button onclick="location.href='検索.php'">検索</button>
    <button onclick="location.href='セール.php'">セール</button>
    <button onclick="location.href='カート.php'">カート</button>
    <button onclick="location.href='./'">人気商品</button>
    <button onclick="location.href='会員情報.php'">会員情報</button>
    <div>
        <h2>ワンピース</h2>
        <p>この商品にぴったりな素材です</p>
        <p>(商品説明)</p>
        <div>
            <select>
                <option value="1">サイズを選択してください</option>
                <option value="2">S</option>
                <option value="1">M</option>
                <option value="2">L</option>
                <select/>
        </div>
        <div>
            <select>
                <option value="1">個数を選択してください</option>
                <option value="2">1</option>
                <option value="1">2</option>
                <option value="2">3</option>
                <select/>
        </div>
        <h2>¥1,580</h2>
        <form action="/demo/send.html">
            <button type="submit">カートに入れる</button>
        </form>
        <p>閉じる</p>
</body>
</html>

