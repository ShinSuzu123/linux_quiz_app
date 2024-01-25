<!-- 問題 フォームデータの処理とデータベース更新 -->
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

// フォームデータ取得
$id = $_POST['id'];
$question_text = $_POST['question_text'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];
$option4 = $_POST['option4'];
$correct_option = $_POST['correct_option'];
$explanation = $_POST['explanation'];
$category = $_POST['category'];

// データベースの更新
$sql = "UPDATE questions SET question_text = ?, option1 = ?, option2 = ?, option3 = ?, option4 = ?, correct_option = ?, explanation = ?, category = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssi", $question_text, $option1, $option2, $option3, $option4, $correct_option, $explanation, $category, $id);
$stmt->execute();

// 更新結果
if ($stmt->affected_rows > 0) {
    echo "<script>alert('問題が更新されました'); window.location.href='admin_quiz.php';</script>";
} else {
    echo "<script>alert('更新に失敗しました'); window.location.href='admin_quiz.php';</script>";
}

// データベース接続
$conn->close();
?>
