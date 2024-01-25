<!-- データ取得とフォーム表示 -->
<?php
// データベース接続とエラーハンドリング
$host = "localhost";
$username = "testuser";
$password = "testpass";
$dbname = "lpic_quiz";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("接続失敗:" . $conn->connect_error);
}

// SQLクエリの実行
$id = $_GET['id']; // 問題のID取得
$sql = "SELECT * FROM questions WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// データベースから問題が正常に取得出来たかの確認
if ($row) {
    include('edit_form.php');
} else {
    echo "問題が見つかりません。";
}

?>
