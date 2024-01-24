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

if (isset($_GET['id'])) {
    $id = $_GET['id']; // URLから問題のIDを取得
} else {
    die("IDが指定されていません。");
}

// SQLクエリの実行
$sql = "SELECT * FROM questions WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

var_dump($row);

if ($row = $result->fetch_assoc()) {
    // データが取得できた場合、フォームを表示
    include('edit_form.php');
} else {
    // 問題が見つからない場合のエラーメッセージ
    die("指定された問題が見つかりません");
}
?>
