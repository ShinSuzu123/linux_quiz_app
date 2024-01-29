<?php
// DB接続情報
$host = "localhost";
$username = "testuser";
$password = "testpass";
$dbname = "lpic_quiz";

// DBへの接続設定
$conn = new mysqli($host, $username, $password, $dbname);

// 接続確認
if ($conn->connect_error) {
    die("データベースへの接続失敗しました:" . $conn->connect_error);
}

// フォームからのデータを受け取る
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];

// SQLのクエリの作成と実行
$sql = "INSERT INTO inquiry (name, email, tel, message) VALUES ('$name', '$email', '$tel', '$message')";

if ($conn->query($sql) === TRUE) {
    // フォームのリダイレクト
    echo "<script>alert('送信しました！'); window.location.href='inquiry.html'</script>";
} else {
    echo "エラー！:" . $sql . "<br>" . $conn->error;
}

// DB接続のクローズ
$conn -> close();

?>
