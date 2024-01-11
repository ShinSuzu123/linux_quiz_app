<?php
// $host = "localhost";
// $username = "testuser";
// $password = "testpass";
// $dbname = "lpic_quiz";

// try {
//     $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); 
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     // POSTデータから受け取った回答と問題ID
//     $userAnswer = isset($POST['ans']) ? $POST['ans'] : '';
//     $questionID = isset($POST['question_id']) ? $_POST['question_id'] : '';

//     // 問題の正解をデータベースから取得
//     $stmt = $conn->prepare("SELECT correct_option, explanation FROM questions WHERE id = :question_id");
//     $stmt->bindParam(':question_id' , $questionID);
//     $stmt->execute();
//     $result = $stmt->fetch(PDO::FETCH_ASSOC);

//     // 回答の正誤判定と結果の生成
//     $isCorrect = ($userAnswer === $result['correct_option']);
//     $response = array(
//         'result' => $isCorrect ? '正解' : '不正解',
//         'explanation' => $isCorrect ? '正解の解説' : '不正解の解説',
//     );

//     // JSON形式でクライエントに返す
//     header('Conect-Type: application/json');
//     echo json_encode($response);
// } catch (PDOException $e) {
//     // エラーが発生した場合の処理
//     echo "Connection failed: " . $e->getMessage();
// }

?>