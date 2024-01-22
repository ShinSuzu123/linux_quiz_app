<?php
// DB接続情報
$host = "localhost";
$username = "testuser";
$dbpassword = "testpass";
$dbname = "lpic_quiz";

// DBへの接続設定
$conn = new mysqli($host, $username, $dbpassword, $dbname);

// 接続確認
if ($conn->connect_error) {
    die("データベースへの接続失敗しました:" . $conn->connect_error); // 接続エラーがあればエラーメッセージを出力して処理を中断
}

// フォームからのデータを受け取る
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$password = $_POST['password'];
$age = $_POST['age'];
$address = $_POST['address'];

// SQLのクエリの作成と実行
// usersテーブルに登録情報を挿入
$sql = "INSERT INTO users (name, email, tel, password, age, address) VALUES ('$name', '$email', '$tel', '$password', '$age', '$address')";

if ($conn->query($sql) === TRUE) {
    // フォームのリダイレクト
    header("Location: ../101_quiz.html");
} else {
    echo "エラー！:" . $sql . "<br>" . $conn->error;
}

// DB接続のクローズ
$conn -> close();

?>
