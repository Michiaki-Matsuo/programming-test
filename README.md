### README.md

### サーバーOS、開発言語、フレームワークのバージョン情報

バージョン情報は以下のとおりです。

- PHP               8.0.16 
- Laravel Framework 8.69.0
- MySQL             5.7.37

### Docker による開発環境の構築手順

## 初回起動時

```sh
> cd THIS_REPOSITORY_DIR
> rm laravel/.env
> docker-compose up -d --build
> docker exec -it tttest-laravel chmod +x /mnt/.docker/laravel/firstexec.sh
> docker exec -it tttest-laravel /mnt/.docker/laravel/firstexec.sh

- `laravel/.env.docker` が更新された場合、反映のために一度 `laravel/.env` ファイルを削除する必要があります。それ以外の場合に `laravel/.env` を削除する必要はありません。  
- 現在、 `laravel/firstexec.sh` を実行するとDBのデータが初期化されます。データを削除したくない場合は、引数 `--nodb` をつけて実行してください。  

```sh
> docker exec -it tttest-laravel /mnt/.docker/laravel/firstexec.sh --nodb

### データベースmigrationの実行
次の手順でデータベースにテーブルなどを作成します。

```sh
> cd THIS_REPOSITORY_DIR
> docker-compose up -d
> docker exec -it tttest-laravel bash
$ php artisan migrate


### 初期データ、およびユーザーの登録方法

#### 初期データの登録方法
初期データと致しまして、紹介者(情報提供)を十名分と紹介者(対象)を二名分用意しています。
上記のデータベースmigrationの実行後に次の手順でデータベースに登録して下さい。

```sh
> cd THIS_REPOSITORY_DIR
> docker-compose up -d
> docker exec -it tttest-laravel bash
$ php artisan db:seed

これらの初期データは、usersテーブルのidが1のユーザでログインするとマイページに表示されます。

#### ユーザーの登録方法

初期状態ではマイページにログインするためのユーザ(人事部担当者)が登録されていません。
マイページをご覧いただくためには一人以上のユーザ(人事部担当者)の登録が必要です。
次のURLからユーザ(人事部担当者)の登録を行ってください。
http://localhost:8000/register

初期データは以上です。

### システム側のメール設定
このリポジトリではすでに動作確認出来るように設定を併せていますので改めて設定項目はございません。

参考までに重要な設定項目を以下に示しておきます。
(1) laravelの.envより
MAIL_DRIVER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025

(2))docker-compose.ymlより
  mailhog:
    ports:
      - "1025:1025"
      - "8025:8025"

### システム起動までの準備及び起動手順

docker と docker-compose が必要です。  
[Docker Desktop](https://docs.docker.jp/get-docker.html)を導入すれば両方インストールできます。

### ログイン画面のURL

コンテナ起動後に、以下のURLでアクセスできます  

- ログイン画面：   http://localhost:8000/
- phpMyAdmin画面： http://localhost:8880/  
- MailHog画面：    http://localhost:8025/   

コンテナ内のシェルに移動することが出来ます。  

```sh
> cd THIS_REPOSITORY_DIR
> docker-compose up -d
> docker exec -it tttest-laravel bash
$ pwd
/var/www/laravel
$ php artisan list
$ exit
```




