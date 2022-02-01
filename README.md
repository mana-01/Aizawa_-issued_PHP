# Aizawa_issued_PHP
<br>
**＜やりたいこと＞**
<br>
スクレイピングしてくるデータをSQLに登録
<br>
↓<br>
SQLに登録されている商品データ（商品名・価格・商品画像）を登録されている分動的に更新して表示させるという仕様にしたいです。<br>
なので、スクレイピング先の画像URLをそのまま表示させるという方法がとれるならそうしたいと考えています。<br>
<br>
<br>
<br>
**＜ファイルの説明＞**<br>
・　assets, css js はBoostrapのファイルのままです。<br>
・　backupsは元々Boostrapのindex.htmlにあった内容に検索窓をつけた現段階のゴールとなるフロントイメージです。<br>
   （データがおかしくなってhtmlのデータが消えてしまわないように残しています。）<br>
・　funcs.phpでfunctionをまとめています。<br>
・　index_html_test.phpがメインとなるphpファイルで、<br>
  htmlの内容がSQLの内容更新されるたびに動的にカードが追加・更新されるような設定をしたいです。<br>
・　search_insert.phpは検索した内容がSQLに登録されるようにしている箇所です。<br>
<br>
<br>
<br>
**＜接続しているDB＞**<br>
<img width="620" alt="スクリーンショット 2022-02-02 0 58 55" src="https://user-images.githubusercontent.com/95159204/152004098-c599121d-5538-4425-b46b-53948334d509.png"><br>
DB名：fmk_db<br>
参照元にしたいtable:listing_items_table<br>
<br>
<br>
<br>
**＜現状のエラー＞**<br>
・真っ黒の画面で表示させたいカードや検索窓などが表示されません。<br>
知らないimgタグが生成されているようで、それが悪さしているのかなという状況です。<br>
<img src="https://user-images.githubusercontent.com/95159204/152004930-f07efa94-bbea-4a2a-8baf-121ebec4aca1.PNG")>

