<?php
session_start();

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

// ここでユーザーIDを取得
$userId = $_SESSION['user_id']; // ログイン処理に応じて変更

// データベースからユーザー情報を取得
$stmt = $conn->prepare("SELECT name, tel, email, age, address FROM users WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result(); 
$user = $result->fetch_assoc(); // 連想配列でユーザー情報を取得

// データベース接続を閉じる
$conn->close();
?>
