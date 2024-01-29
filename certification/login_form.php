<?php
// セッションの開始
session_start();

// DB接続情報
$host = "localhost";
$username = "testuser";
$dbpassword = "testpass"; //passwordは他で使うのでdbpasswordにする
$dbname = "lpic_quiz";

// DBへの接続設定
$conn = new mysqli($host, $username, $dbpassword, $dbname);

// 接続確認
if ($conn->connect_error) {
    die("データベースへの接続失敗しました:" . $conn->connect_error); // 接続エラーがあればエラーメッセージを出力して処理を中断
}

// POSTメソッドで送信されたかどうかの確認
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームからのデータを受け取る
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQLのクエリの作成と実行
    // ユーザーのメールアドレスに基づいてデータベースからユーザー情報を取得
    $stmt = $conn->prepare("SELECT id, email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // パスワード検証とリダイレクト
    if ($row = $result->fetch_assoc()) {
        // パスワードの検証
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            // パスワードが一致する場合
            echo "<script>alert('ログイン成功'); window.location.href='../101_quiz.html'</script>";
        } else {
            // パスワードが一致しない場合
            echo "<script>alert('ログインに失敗しました'); window.location.href='login.html'</script>";
        }
    } else {
        // メールアドレスが存在しない場合
        echo "<script>alert('ログインに失敗しました'); window.location.href='login.html'</script>";
    }
}

// DB接続のクローズ
$conn -> close();

?>
