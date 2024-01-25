<!-- ユーザー フォームデータの処理とデータベース更新 -->
<?php
// データベース接続とエラーハンドリング
$host = "localhost";
$username = "testuser";
$password = "testpass";
$dbname = "lpic_quiz";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("接続失敗:" . $conn->connect_error);
}

// フォームデータ取得
$id = $_POST['id'];
$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];
$address = $_POST['address'];

// データベースの更新
$sql = "UPDATE users SET name = ?, tel = ?, email = ?, password = ?, age = ? , address = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssi", $name, $tel, $email, $password, $age, $address, $id);
$stmt->execute();

// 更新結果
if ($stmt->affected_rows > 0) {
    echo "<script>alert('ユーザーが更新されました'); window.location.href='admin_user.php';</script>";
} else {
    echo "更新に失敗しました";
}

// データベース接続
$conn->close();
?>
