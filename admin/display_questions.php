<?php
$host = "localhost";
$username = "testuser";
$password = "testpass";
$dbname = "lpic_quiz";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("接続失敗:" . $conn->connect_error);
}

$sql = "SELECT id, question_text, option1, option2, option3, option4, correct_option, explanation, category FROM questions";// 問題自体を登録しているテーブルを呼ぶ
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["question_text"] . "</td>";
        echo "<td>" . $row["option1"] . "</td>";
        echo "<td>" . $row["option2"] . "</td>";
        echo "<td>" . $row["option3"] . "</td>";
        echo "<td>" . $row["option4"] . "</td>";
        echo "<td>" . $row["correct_option"] . "</td>";
        echo "<td>" . $row["explanation"] . "</td>";
        echo "<td>" . $row["category"] . "</td>";
        echo "<td><a href='./edit/edit_form.php?id=" . $row["id"] . "' class='edit-link'>編集</a></td>";
        echo "<td><a href='delete_questions.php?id=" . $row["id"] . "' class='delete-link'>削除</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='11'>問題がありません</td></tr>";
}

$conn->close();

?>
