# LPICアタック！
## 目的
LPICレベル１に合格するためのクイズアプリ開発におけるREADMEになります。
新規開発です。

## 概要
### システム方式・構成
システムの構成は次の通りです。

- アプリケーションサーバー
  クイズアプリを表示する画面を提供します。

- データベースサーバー
  既存の社内サーバーです。(想定)

### 用語定義
|
- LPIC101
  LPIC lv.1の101試験のこと 

- LPIC102
  LPIC lv.1の102試験のこと

- LPIC 模擬試験
  LPIC lv.1 101と102の模擬試験のこと

- ランダム
  ランダムに問題が出題されることの表記。

## アプリ要件
### 利用者一覧
- 開発者(管理者)
- 一般ユーザー

### 規模
- 21人日

## 機能要件
### 画面
| 画面 | 説明 |
|:---  |:--- |
| 新規登録画面 | 新規でユーザー登録をする画面 |
| ログイン画面 | ログインする際に必要な画面 |
| ユーザー画面 | ユーザー情報が見れる画面 |
| LPIC101問題一覧ページ | LPIC101の問題項目を見ることができるページ |
| LPIC101の問題ページ群 |７項目、順番出題とランダム出題ページにつながる(計 14ページ) |
| LPIC102問題一覧ページ | LPIC102の問題項目を見ることができるページ |
| LPIC102の問題ページ群 | 6項目、順番出題とランダム出題ページにつながる(計 12ページ) |
| LPIC 模擬試験一覧ページ | LPIC lv.1の101、102の模擬試験の一覧が見れる |
| LPIC 模擬試験ページ群 | 2項目、順番出題とランダム出題ページにつながる(計 4ページ) |
| 問題登録ページ | 管理者ユーザーでログインした際に表示される、問題の登録作業ができる|
| サイトについてページ | サイト説明のページ |
| お問い合わせページ | お問い合わせをすることができるページ |

### 権限
問題登録設定
・新しい問題の追加は管理者に限る。

### 外部インターフェース
・メール

### データフロー

## 非機能要件
### スケジュール
| 日付 | 内容 |
| :--- |:--- |
| 1/11,1/12,1/13 | 問題順番出題ページ群 |
| 1/14,1/15 | ランダム問題ページ群 |
| 1/16,1/17 | ログインページ |
| 1/18,1/19 | 新規登録ページ |
| 1/20,1/21 | 問題登録ページ |
| 1/22,1/23 | 問題登録作業   |
| 1/24,1/25 | 問い合わせページ, このサイトについてページ |
| 1/26～1/28| 未定 |
| 1/29～1/31まで | テスト・動作確認 |
--------------------------------------------------------------------
## サービスの概要
- コマンドとインフラ関連で必要になる基礎知識を学習するためのクイズアプリ。

### 想定されるユーザー
- LPICの学習し始める予定、学習中の方々

### サービスコンセプト
- 放置していたLPICレベル１の試験学習を再開する際の思いだす時間の削減したい。
- LPIC レベル１の試験学習をポートフォリオ作りながら同時に進めたい。

# 使用技術
フロントエンド
- HTML/CSS
- javascript
- jQuery

バックエンド
- PHP

データベース
- MySQL

# ER図
