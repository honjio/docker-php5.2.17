# Docker-php 5.2.17 環境

## 概要
この開発環境を使用することで、php（バージョン5.2.17） を実行することができます。

## 前提
docker がインストール済みであり、docker コマンドを使用できること

## 使用方法
src ディレクトリー配下が作業ディレクトリーとなります。  
作業ファイル（.php）は src 配下に置きます。  
下記コマンドを使用します。

* 開発環境の立ち上げ  
localhost:9000 で開発サーバへアクセスできます
  * `docker-compose up -d`
* 開発環境の終了
  * `docker-compose down`
