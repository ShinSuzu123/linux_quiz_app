<!-- Userを一覧に出す処理 -->
<?php
$host = "localhost";
$username = "testuser";
$password = "testpass";
$dbname = "lpic_quiz";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("接続失敗:" . $conn->connect_error);
}

$sql = "SELECT id, name, tel, email, password, age, address FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row ["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["tel"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["password"] . "</td>";
        echo "<td>" . $row["age"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td><a href='edit_form.php?id=" . $row["id"] . "'>編集</a></td>";
        echo "<td><a href='delete_users.php?id=" . $row["id"]. "' class='delete-link'>削除</a></td>";
    }
} else {
    echo "<tr><td colspan='11'>問題がありません</td></tr>";
}

$conn->close();

?>
