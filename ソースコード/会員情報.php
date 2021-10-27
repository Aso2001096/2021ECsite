<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <style>
        table {
            display: inline-table;
        }
    </style>
</head>
<body>
<div style="text-align: center">
    <h1>Ishin</h1>
    <div style="text-align: center">
        <table>
            <tr>
                <td><button onclick="location.href='top.php'">TOP</button></td>
                <td><button onclick="location.href='検索.php'">検索</button></td>
                <td><button onclick="location.href='新着.php'">新着商品</button></td>
                <td><button onclick="location.href='./'">人気商品</button></td>
                <td><button onclick="location.href='セール.php'">セール</button></td>
                <td><button onclick="location.href='カート.php'">カート</button></td>
            </tr>
        </table>
        <p>wellcom!!</p>
        <p>佐藤心様</p>
        <button onclick="location.href='ログアウト.php'">ログアウト</button>
        <div style="text-align: center">
            <p>買い物情報</p>
            <table>
                <tr>
                    <td><button name="button01" type="button">購入履歴   ▷<br>今までの購入履歴です</button></td>
                    <td><button name="button01" type="button">お気に入り  ▷<br>お気に入りに登録した一覧です</button></td>
                </tr>
            </table>
        </div>
        <div style="text-align: center">
            <p>お客様情報</p>
            <table>
                <tr>
                    <td><button name="button01" type="button">会員情報変更     ▷<br>住所/電話番号/お名前等の変更をします</button></td>
                    <td><button name="button01" type="button">パスワードの変更    ▷<br>パスワードの変更をします</button></td>
                </tr>
            </table>
            <br>
            <table>
                <tr>
                    <td><button name="button01" type="button">決済情報変更     ▷<br>決済情報を変更をします</button></td>
                    <td><button name="button01" type="button">アドレス変更     ▷<br>メールアドレスの変更をします</button></td>
                </tr>
            </table>
        </div>
        <p>お問い合わせ</p>
    </div>
</body>
</html>
