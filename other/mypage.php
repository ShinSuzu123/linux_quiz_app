<?php
session_start();

// DB接続情報
$host = "localhost";
$username = "testuser";
$password = "testpass";
$dbname = "lpic_quiz";

// DBへの接続設定
$conn = new mysqli($host, $username, $password, $dbname);

// 接続確認
if ($conn->connect_error) {
    die("データベースへの接続失敗しました:" . $conn->connect_error);
}

// ここでユーザーIDを取得
$userId = $_SESSION['user_id']; // ログイン処理に応じて変更

// データベースからユーザー情報を取得
$stmt = $conn->prepare("SELECT name, tel, email, age, address FROM users WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result(); 
$user = $result->fetch_assoc(); // 連想配列でユーザー情報を取得

// データベース接続を閉じる
$conn->close();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>LPIC lv.1 ファイト!</title>
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
    <link href="../common/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header class="header">
        <h1 class="quiz-logo"><a href="../101_quiz.html">LPIC lv.1 ファイト!</a></h1>
        <nav class="nav">
            <ul class="list">
                <li class="item"><a href="mypage.html">マイページ</a></li>
                <li class="item"><a href="./certification/logout.php">ログアウト</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>マイページ</h2>
        <?php if ($user): ?>
        <table>
            <tr>
                <th>項目</th>
                <th>情報</th>
            </tr>
            <tr>
                <td><strong>名前</strong></td>
                <td><?php echo htmlspecialchars($user['name']); ?></td>
            </tr>
            <tr>
                <td><strong>電話番号</strong></td>
                <td><?php echo htmlspecialchars($user['tel']); ?></td>
            </tr>
            <tr>
                <td><strong>Eメール</strong></td>
                <td><?php echo htmlspecialchars($user['email']); ?></td>
            </tr>
            <tr>
                <td><strong>パスワード</strong></td>
                <td><?php echo htmlspecialchars($user['password']); ?></td>
            </tr>
            <tr>
                <td><strong>年齢</strong></td>
                <td><?php echo htmlspecialchars($user['age']); ?></td>
            </tr>
            <tr>
                <td><strong>住所</strong></td>
                <td><?php echo htmlspecialchars($user['address']); ?></td>
            </tr>
        </table>
        <?php else: ?>
        <p>ユーザー情報を取得できませんでした。</p>
        <?php endif; ?>
    </main>

    <footer class="footer">
        <ul class="menu">
            <li><a href="about.html">このサイトについて</a></li>
            <li><a href="inquiry.html">お問い合わせ</a></li>
        </ul>
    </footer>
</body>
</html>
