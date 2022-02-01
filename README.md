# Aizawa_issued_PHP
**＜やりたいこと＞**
スクレイピングしてくるデータをSQLに登録
↓
SQLに登録されている商品データ（商品名・価格・商品画像）を登録されている分動的に更新して表示させるという仕様にしたいです。
なので、スクレイピング先の画像URLをそのまま表示させるという方法がとれるならそうしたいと考えています。



**＜ファイルの説明＞**
・　assets, css js はBoostrapのファイルのままです。
・　backupsは元々Boostrapのindex.htmlにあった内容に検索窓をつけた現段階のゴールとなるフロントイメージです。（データがおかしくなってhtmlのデータが消えてしまわないように残しています。）
・　funcs.phpでfunctionをまとめています。
・　index_html_test.phpがメインとなるphpファイルで、htmlの内容がSQLの内容更新されるたびに動的にカードが追加・更新されるような設定をしたいです。
・　search_insert.phpは検索した内容がSQLに登録されるようにしている箇所です。



**＜接続しているDB＞**
![IMG_3455](https://user-images.githubusercontent.com/95159204/152002484-393fe042-6293-421c-b118-a91594fd006b.PNG)
DB名：fmk_db
参照元にしたいtable:listing_items_table



**＜現状のエラー＞**
・真っ黒の画面で表示させたいカードや検索窓などが表示されません。
知らない<img>タグが生成されているようで、それが悪さしているのかなという状況です。
![IMG_3455](https://user-images.githubusercontent.com/95159204/152002484-393fe042-6293-421c-b118-a91594fd006b.PNG)
