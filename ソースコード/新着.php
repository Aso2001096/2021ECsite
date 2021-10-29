<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>新着商品</title>
    <link rel="stylesheet" href="./css/style/css">
</head>

<body style="text-align: center">

<button onclick="location.href='top.php'">TOP</button>

<button onclick="location.href='検索.php'">検索</button>

<button onclick="location.href='セール.php'">セール</button>

<button onclick="location.href='カート.php'">カート</button>

<button onclick="location.href='会員情報.php'">会員情報</button>

<p>新着アイテムページ</p>

<tr>
    <script>
        function click1() {
            document.img.src = "./img/women.png";
        }
        function click2(){
            document.img.src = "./img/men.png";
        }
    </script>
    <tb><input type="button" id="women" onclick="click1()" value="WOMEN"></tb>
    <tb><input type="button" id="men" onclick="click2()" value="MEN"></tb><br>
    <img name="img" src="./img/women.png">
</tr>


</body>
</html>
