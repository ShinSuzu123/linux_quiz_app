# LPICアタック！
## サービスの概要
- コマンドとインフラ関連で必要になる基礎知識を学習するためのクイズアプリ。

### 想定されるユーザー
- LPICの学習し始める予定、学習中の方々

### サービスコンセプト
- 放置していたLPICレベル１の試験学習を再開する際の思いだす時間の削減したい。
- LPIC レベル１の試験学習をポートフォリオ作りながら同時に進めたい。

### 課題解決方法
- クイズアプリ作りながらコマンド等の学習をする。

# 使用技術
フロントエンド
- HTML/CSS
- javascript
- jQuery

バックエンド
- PHP

データベース
- MySQL

インフラ
- AWS

# 主な機能
must
・ユーザー登録機能
・ログイン機能
・ログアウト機能

# テーブル設計


# 画面遷移図
- TOPページ
　・分野一覧　
　・全問題数表示する(正当数を表示)
・分野ページ　全問題数を分野別で表示
　・問題カテゴリ一覧
・問題ページ (5問～10問)
　・正誤で判定する。
　・正誤にかかわらず、解説つける。
　・満点判断
