<?php
$host = "localhost";
$username = "testuser";
$password = "testpass";
$dbname = "lpic_quiz";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 特定のカテゴリーの問題一覧を取得
    $category = isset($_GET['category']) ? $_GET['category'] : '';
    $stmt = $conn->prepare("SELECT * FROM questions WHERE category = :category");
    $stmt->bindParam('category', $category);
    $stmt->execute();
    $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // 取得した問題をJSON形式で出力
    header('Content-Type: application/json');
    echo json_encode($questions);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
