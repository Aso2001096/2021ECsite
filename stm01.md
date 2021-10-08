```@
@startuml
[*] --> トップページ
会員情報 --> トップページ : トップページをクリック/商品検索
ログイン --> トップページ : トップページをクリック/商品検索
ログイン : entry/id.passwordを入力
ログイン : do/ログイン認証
トップページ --> トップページ : ログアウトをクリック
トップページ -> トップページ : 商品検索
トップページ -> 商品詳細 : 商品をクリック
トップページ -left-> 会員情報 : 会員登録をクリック
トップページ -left-> ログイン : ログインをクリック
トップページ --> カート内 : カートの中をクリック
トップページ : do/商品一覧を表示
トップページ : do/人気商品を表示
トップページ : do/セール中の商品表示
トップページ : do/新商品を表示
商品詳細 --> カート内 : カートに入れるをクリック
商品詳細 --> トップページ : 前の画面に戻るをクリック
商品詳細 : do/商品説明を表示
カート内 -up-> トップページ : トップページをクリック/商品検索
カート内 -up-> トップページ : ログアウトをクリック
カート内 -> 商品詳細 : 詳細へをクリック

state カート内{
[*] --> カート
カート -> 注文 : 注文をクリック
カート -> カート : 数量を変更/商品を削除
注文 --> カート : カートをクリック
state 注文{
[*] --> お届け先入力
お届け入力 -> お届け入力内容確認 : 入力内容を確認をクリック
お届け入力内容確認 -> お届け先入力 : 修正をクリック
お届け入力内容確認 -> 購入完了 : 注文確定をクリック
}
}
@enduml
```