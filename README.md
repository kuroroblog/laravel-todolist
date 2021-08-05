# laravel-todolist
laravelを利用して、Todolistを作成する。

# zipをダウンロードしてから動作確認する
1. https://github.com/kuroroblog/laravel-todolist へアクセスする。
2. 緑色の「Code」と書かれたボタンを選択
3. 「Download ZIP」を選択
4. ダウンロードされたzipファイルをデスクトップへ移動
5. zipファイルをダブルクリック
6. ターミナルを開く。
7. ターミナルを活用して、zipを展開して生成されたフォルダへ移動する。(`$ cd Desktop/laravel-todolist-master`)
8. `cp .env.example .env`を実行する。
9. .envファイルを編集する。

``` .env
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
- DB_DATABASE=
+ DB_DATABASE={データベース名}
  DB_USERNAME=root
- DB_PASSWORD=
+ DB_PASSWORD={mysqlを接続するためのパスワード}
```

10. `mysql -uroot -p`を実行する。
11. {mysqlを接続するためのパスワード}を入力する。
12. `create database {データベース名};`を入力する。
13. `quit;`を入力する。
14. `composer update --no-scripts`を実行する。
15. `php artisan migrate`を実行する。
16. `php artisan key:generate`を実行する。
17. `php artisan serve`を実行する。

