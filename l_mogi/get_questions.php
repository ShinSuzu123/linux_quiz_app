<?php
// DB接続の設定
$host = "localhost";
$username = "testuser";
$password = "testpass";
$dbname = "lpic_quiz";

try {
    // PDOによるDB接続
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // エラーモードを設定
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // カテゴリーを取得
    $category = isset($_GET['category']) ? $_GET['category'] : ''; // カテゴリーのパラメーターの取得
    
    //特定のカテゴリーを取得
    $stmt = $conn->prepare("SELECT * FROM questions WHERE category = :category"); // カテゴリーのパラメーターの取得
    $stmt->bindParam(':category', $category); // パラメーターのバインド
    $stmt->execute(); // クエリの実行
    $questions = $stmt->fetchAll(PDO::FETCH_ASSOC); // 結果の取得

    // 取得した問題をJSON形式で出力
    header('Content-Type: application/json');
    echo json_encode($questions);

} catch(PDOException $e)  { //接続失敗時のエラーハンドリング
    die("Connection failed: " . $e->getMessage());
}
?>
