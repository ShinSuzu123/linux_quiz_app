<?php
$host = "localhost";
$username = "testuser";
$password = "testpass";
$dbname = "lpic_quiz";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // POSTデータから受け取った回答と問題ID
    $userAnswer = isset($_POST['ans']) ? $_POST['ans'] : '';
    var_dump($_POST);
    $questionID = isset($_POST['question_id']) ? $_POST['question_id'] : '';
    var_dump($_POST);

    // 問題の正解と解説をデータベースから取得
    $stmt = $conn->prepare("SELECT correct_option, explanation FROM questions WHERE id = :question_id");
    $stmt->bindParam(':question_id' , $questionID);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // 回答の正誤判定と結果の生成
    $isCorrect = ($userAnswer === $result['correct_option']);
    $response = array(
        'result' => $isCorrect ? '正解' : '不正解',
        'explanation' => $result['explanation'],
    );

    // JSON形式でクライエントに返す
    header('Content-Type: application/json');
    echo json_encode($response);
} catch (PDOException $e) {
    // エラーが発生した場合の処理
    echo "Connection failed: " . $e->getMessage();
}

?>
