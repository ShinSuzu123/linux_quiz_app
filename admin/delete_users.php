<!-- ユーザー削除処理 -->
<?php
// データベースの接続
$host = "localhost";
$username = "testuser";
$password = "testpass";
$dbname = "lpic_quiz";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("接続失敗:" . $conn->connect_error);
}

// 問題の削除
$id = $_GET['id']; // 特定の問題をデータベースから削除する

$sql = "DELETE FROM users WHERE id = ?";
$stmt = $conn->prepare($sql); // SQlインジェクション対策
$stmt->bind_param("i", $id); // IDをSQLクエリにバインド
$stmt->execute();

// 削除が結果の確認
if ($stmt->affected_rows > 0) { // affected_rowsは削除された行の数を返す
    echo "ユーザーが削除されました";
} else {
    echo "削除に失敗しました";
}

// ステートメントとデータ接続を閉じる
$stmt->close();
$conn->close();

header("Location: admin_user.php"); // 前のページにリダイレクト
exit;

?>
