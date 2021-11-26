<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div style="text-align: center">
    <h1>Ishin</h1>
    <div style="display: inline-table">
    <table>
            <tr>
                <td><button onclick="location.href='./top.php'">TOP</button></td>
                <td><button onclick="location.href='./検索.php'">検索</button></td>
                <td><button onclick="location.href='./新着.php'">新着商品</button></td>
                <td><button onclick="location.href='/セール.php'">セール</button></td>
                <td><button onclick="location.href='./カート.php'">カート</button></td>
                <td><button onclick="location.href='./会員情報.php'">会員情報</button></td>
            </tr>
        </table>
        <h3>当店おすすめのアイテム</h3>
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
</div>
</body>
</html>
