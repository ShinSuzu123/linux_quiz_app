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

// SQLのクエリの作成と実行
$sql = "SELECT id , email, password FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // ログイン成功、ページリダイレクト
        header("Location: ../101_quiz.html");
} else {
    // パスワードが一致しない場合
    echo "ログインに失敗しました。";
    // パスワードの一致を確認前にデバッグ情報を出力する
    // echo "<br>入力されたパスワード:" . $password . "<br>";
    // echo "DBに保存されているハッシュ:" . $row['password'] . "<br>";
}

// DB接続のクローズ
$conn -> close();

?>
