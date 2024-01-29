<!-- ユーザーのフォームデータの処理 -->
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

// フォームデータの受け取り
$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];
$address = $_POST['address'];

// パスワードハッシュ
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// データベースに登録
$sql = "INSERT INTO users (name, tel, email, password, age, address) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $name, $tel, $email, $hashed_password, $age, $address);
$stmt->execute();

// 登録の成功か失敗かの処理
if ($stmt->affected_rows > 0) {
    echo "<script>alert('ユーザーが登録されました'); window.location.href='admin_user.php';</script>";
} else {
    echo "<script>alert('ユーザーの登録に失敗しました'); window.location.href='admin_user.php';</script>";
}

$conn->close();
?>
