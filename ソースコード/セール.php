<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>sale</title>

</head>
<body>
<div style="text-align: center">
    <h1>Ishin</h1>
    <div style="display: inline-table">
        <table>
            <tr>
                <td><button onclick="location.href='./top.php'">TOP</button></td>
                <td><button onclick="location.href='検索.php'">検索</button></td>
                <td><button onclick="location.href='新着.php'">新着商品</button></td>
                <td><button onclick="location.href='./'">人気商品</button></td>
                <td><button onclick="location.href='カート.php'">カート</button></td>
                <td><button onclick="location.href='会員情報.php'">会員情報</button></td>
            </tr>
        </table>
    </div>
    <br>
    <div style="display: inline-table">
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
</div>
</body>
</html>