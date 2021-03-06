# Kinjiro

日々の勉強の記録やタスク管理、
タイマーなど<br>
勉強する際にあって欲しいものをひとまとめにした総合学習プラットホームです。

URL: http://kenta-horiuchi.com/

作成の際に学習したことはqiitaで積極的に発信するようにしていました。
URL: https://qiita.com/kenchi253

## アプリ概要

こちらのアプリのコンセプトは

学習の記録、共有などの発信と
時間管理やタスク管理など勉強に必要不可欠なものを全てこのサービスで行えるというものです。

勤勉の象徴である二宮金次郎にあやかって「Kinjiro] というサービスを開発しました。

## 開発した背景

自分自身がエンジニアの勉強を始めた時に
情報の記録、共有はtwitterやqiitaで行ない、
タスク管理は紙に書いて、時間を測るタイマーは他のアプリを使っていました。

こうした状況の中で、<br>
「なんでこれを全部別々でやっているんだろう？」 <br>
「全部一緒にできたらすごく便利なのにな。。。」

という思いが芽生えてきました。

また、コロナ禍においてオンラインの学習サービスが充実してきていますが<br>
「勉強の場所」を提供するものってまだ少ないし<br>
これ！と言えるようなサービスもないと思います。

以上のような背景からこれは今の時代に絶対に必要だ！
と思い今回Kinjiroを作成いたしました。


## 使用画面のイメージ

![kinjiro-1-8](https://user-images.githubusercontent.com/73926303/122153816-b4e51a00-ce9e-11eb-9c49-1528edf8baa1.png)


## 使用技術

* フロントエンド
    * Vue.js 2.6.11
    * jQuery 3.4.1
    * HTML / SCC / Sass / MDBootstrap

* バックエンド
    * PHP 7.3.11
    * Laravel 6.20.27
    * PHPUnit 9.5.4

* インフラ
   * CircleCi
   * Docker 19.03.12 / docker-compose 1.26.2
   * nginx 1.18
   * PostgreSQL 8.1.8
   * AWS ( EC2, ALB, S3, RDS, CodeDeploy, Route53, CloudWatch, VPC, IAM )

* その他使用ツール

  * Visual Studio Code
  * draw.io
  * pAdobe XD

## AWS構成図

![kinjiro](https://user-images.githubusercontent.com/73926303/121984796-93b4f880-cdce-11eb-9800-427036c517bb.png)


## 機能一覧

* ユーザー登録関連
  * 新規登録、プロフィール編集機能
  * ログイン、ログアウト機能
  * かんたんログイン機能（ゲストユーザーログイン）

* ユーザー投稿一覧、
* ページネーション機能

* コメント一覧、フォロー中/フォロワー一覧など

* ユーザー投稿関連(CRUD)

* ユーザープロフィール編集機能

* パスワード変更機能

* コメント機能
  * コメント一覧機能

* タグ機能 (Vue.js / Vue Tags Input)
 * タグ毎の投稿一覧機能
 * いいね機能 (Vue.js / ajax)

* いいねした投稿一覧機能

* フォロー機能

* フォロー中/フォロワー一覧

* フラッシュメッセージ表示機能 (jQuery/ Toastr)

* 画像アップロード機能 (AWS S3バケット)

* PHPUnitテスト

* レスポンシブWebデザイン（※徐々に追加しています）

* ハンバーガーメニュー(jQuery)

* フォルダ・タスク管理機能
　※ユーザーと紐付け個別対応

* Timer (vue.js / ajax)

* Tips表示 (vue.js / ajax)
  * 勉強に疲れた時役に立つ？言葉を表示します

* Fade-in Fade-cut 機能（vue.js / ajax）
  ※ドミノ倒しのような爽快な演出ができたと思います。

## DB設計

### ER図
![kinjiro](https://user-images.githubusercontent.com/73926303/121997964-1f864f00-cde6-11eb-8ca3-e0d7aba72dac.png)
