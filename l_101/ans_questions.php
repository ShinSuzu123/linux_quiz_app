<?php
// DB接続の設定
$host = "localhost";
$username = "testuser";
$password = "testpass";
$dbname = "lpic_quiz";

$ans = $_POST["ans"];

foreach ($ans as $quiz_id => $res) {
    echo($res);
};

// var_dump($ans);
// try {
//     // PDOによるDB接続
//     $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
//     // エラーモードを設定
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }

?>
