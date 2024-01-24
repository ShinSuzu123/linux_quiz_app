<!-- フォームデータの処理とデータベース更新 -->
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

$id = $_POST['id'];
$question_text = $_POST['question_text'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];
$option4 = $_POST['option4'];
$correct_option = $_POST['correct_option'];
$explanation = $_POST['explanation'];
$category = $_POST['category'];

$sql = "UPDATE questions SET question_text = ?, option1 = ?, option2 = ?, option3 = ?, option4 = ?, correct_option = ?, explanation = ?, category = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssi", $question_text, $option1, $option2, $option3, $option4, $correct_option, $explanation, $category, $id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "問題が更新されました";
} else {
    echo "更新に失敗しました";
}

$conn->close();
?>
