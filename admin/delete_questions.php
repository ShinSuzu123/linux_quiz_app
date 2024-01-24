<!-- 削除処理 -->
<?php
$host = "localhost";
$username = "testuser";
$password = "testpass";
$dbname = "lpic_quiz";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("接続失敗:" . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "DELETE FROM questions WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "問題が削除されました";
} else {
    echo "削除に失敗しました";
}

$stmt->close();
$conn->close();

header("Location: admin_quiz.php");
exit;

?>
