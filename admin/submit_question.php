<!-- 問題のフォームデータの処理 -->
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

// フォームデータの受け取り
$question_text = $_POST['question_text'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];
$option4 = $_POST['option4'];
$correct_option = $_POST['correct_option'];
$category = $_POST['category'];
$explanation = $_POST['explanation'];

// データベースに登録
$sql = "INSERT INTO questions (question_text, option1, option2, option3, option4, correct_option, category, explanation) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssss", $question_text, $option1, $option2, $option3, $option4, $correct_option, $category, $explanation);
$stmt->execute();

// 登録の成功か失敗かの処理
if ($stmt->affected_rows > 0) {
    echo "<script>alert('問題が登録されました'); window.location.href='admin_quiz.php';</script>";
} else {
    echo "<script>alert('問題の登録に失敗しました'); window.location.href='admin_quiz.php';</script>";
}

$conn->close();
?>
