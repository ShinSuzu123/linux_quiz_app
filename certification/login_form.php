<?php
// DB接続情報
$host = "localhost";
$username = "testuser";
$dbpassword = "testpass";
$dbname = "lpic_quiz";

// DBへの接続設定
$conn = new mysqli($host, $username, $dbpassword, $dbname);

// 接続確認
if ($conn->connect_error) {
    die("データベースへの接続失敗しました:" . $conn->connect_error);
}

// フォームからのデータを受け取る
$email = $_POST['email'];
$password = $_POST['password'];

// パスワードのハッシュ化
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// SQLのクエリの作成と実行
// SQlインジェクション対策のためにプロペアードステートメントを使用
$sql = "SELECT * FROM users WHERE email= ? Limit 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // ユーザーが存在する場合
    $row = $result->fetch_assoc();

    // パスワードの一致を確認
    if (password_verify($password ,$row['password'])) {
        // ログイン成功
        // ページリダイレクト
        header("Location: ../101_quiz.html");
        // echo "ログイン成功";
        exit; // リダイレクトしたら処理を終了させる
    } else {
        // パスワードが一致しない場合
        echo "パスワード一致しません";
    
        // パスワードの一致を確認前にデバッグ情報を出力する
        echo "<br>入力されたパスワード:" . $password . "<br>";
        echo "DBに保存されているハッシュ:" . $row['password'] . "<br>";
    }
} else {
    // ユーザーが存在しません。
    echo "ユーザーが存在しません";
}

// DB接続のクローズ
$conn -> close();

?>
