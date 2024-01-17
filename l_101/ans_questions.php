<?php
// DB接続の設定
$host = "localhost";
$username = "testuser";
$password = "testpass";
$dbname = "lpic_quiz";

// $ans = $_POST["ans"];

// 複数表示のメモ
// foreach ($ans as $quiz_id => $res) {
//     ($res);
// };

// POSTで情報を受け取っているかの確認
// error_log("Received POST request to ans_questions.php\n", 3, "debug.log");

try {
    // PDOによるDB接続
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // POSTデータから受け取った解答と問題ID
    $userAnswer = isset($_POST['ans']) ? $_POST['ans'] : '';
    $questionID = isset($_POST['question_id']) ? $_POST['question_id'] : '';

    // 問題の正解をデータベースから取得
    // $stmt = $conn->prepare("SELECT correct_option, explanation FROM questions WHERE id = :question_id");
    // $stmt = $conn->prepare("SELECT correct_option, explanation FROM questions");
    
    // SQL文を確認するために出力
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':question_id', $questionID);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // 解答の正誤判定と結果の生成
    // $isCorrect = ($userAnswer === $result['correct_option']);

    // 正解・不正解と解説をJSON形式で返す
    // $response = array(
    //     'userAnswer' => $userAnswer,
    //     'isCorrect' => $isCorrect,
    //     'explanation' => $result['explanation'],
    // );

    // JSON形式でクライエントに返す
    header('Content-Type: application/json');
    echo json_encode($response);

    // header('Location: l_101_1_ans.html');
    // exit();

} catch(PDOException $e) {
    // エラーが発生した場合の処理
    echo "Connection failed: " . $e->getMessage();
}

?>
