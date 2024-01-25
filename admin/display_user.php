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

// データベースからのユーザーデータの取得
$sql = "SELECT id, name, tel, email, password, age, address FROM users";
$result = $conn->query($sql);

// ユーザーデータの表示
if ($result->num_rows > 0) { // 行の数が0より大きい場合い以下の処理が実行
    while($row = $result->fetch_assoc()) {  // 結果セットの次の行を連想配列として取得
        echo "<tr>";
        echo "<td>" . $row ["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["tel"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["password"] . "</td>";
        echo "<td>" . $row["age"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td><a href='edit_user.php?id=" . $row["id"] . "' class='edit-link'>編集</a></td>";
        echo "<td><a href='delete_users.php?id=" . $row["id"]. "' class='delete-link'>削除</a></td>";
    }
} else { // データがない場合
    echo "<tr><td colspan='11'>問題がありません</td></tr>";
}

$conn->close();

?>
