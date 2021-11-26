<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>top-in</title>
</head>
<body>
<div style="text-align: center">
    <h1>Ishin</h1>
    <div style="display: inline-table">
    <table>
        <tr>
            <td><button onclick="location.href='検索.php'">検索</button></td>
            <td><button onclick="location.href='新着.php'">新着商品</button></td>
            <td><button onclick="location.href='人気.php'">人気商品</button></td>
            <td><button onclick="location.href='セール.php'">セール</button></td>
            <td><button onclick="location.href='カート.php'">カート</button></td>
            <td><button onclick="location.href='会員情報.php'">会員情報</button></td>
        </tr>
    </table>
    </div>
    <h4>今季新アイテム入荷しました！</h4>
    <h3>セール開催中</h3>
    <button onclick="location.href='セール.php'">詳しく見る▶︎</button>
    <h4>おすすめアイテム</h4>
    <table>
        <tr>
            <script>
                function click1() {
                    document.img.src = "./img/women.png";
                    document.getElementById("text").innerHTML = "ワンピース";
                    document.getElementById("text2").innerHTML = "¥1,580";
                }
                function click2(){
                    document.img.src = "./img/men.png";
                    document.getElementById("text").innerHTML = "ジャケット";
                    document.getElementById("text2").innerHTML = "¥3,300";
                }
            </script>
            <tb><input type="button" id="women" onclick="click1()" value="WOMEN"></tb>
            <tb><input type="button" id="men" onclick="click2()" value="MEN"></tb><br>
            <a href="商品詳細.php"><img name="img" src="./img/women.png"></a>
        </tr>
        <tr><p id="text">ワンピース</p></tr>
        <tr><p id="text2">¥1,580</p></tr>
    </table>
</div>
</body>
</html>
