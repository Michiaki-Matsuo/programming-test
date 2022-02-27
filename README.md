### README.md

### サーバーOS、開発言語、フレームワークのバージョン情報

バージョン情報は以下のとおりです。

- PHP 8.0.16 
- Laravel Framework 8.69.0
- MySQL 5.7.37

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

### 初期データ、およびユーザーの登録方法

http://localhost:8000/register

### システム側のメール設定

### システム起動までの準備及び起動手順
### ログイン画面のURL

サイト（localhost等）にアクセスした際にログイン画面が初期表示される。
