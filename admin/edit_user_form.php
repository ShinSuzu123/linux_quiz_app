<!-- 編集フォーム -->
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
        <h1 class="quiz-logo">LPIC lv.1 ファイト!</h1>
        <nav class="nav">
            <ul class="list">
                <li class="item"><a href="../certification/logout.php">ログアウト</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>問題 編集</h2>
        <form action="update_users.php" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']);?>">
            <table>
                <tr>
                    <td><strong><label for="name">名前</label></strong></td>
                    <td><input type="text" name="name" id="name" value="<?php echo htmlspecialchars($row['name']);  ?>"></td>
                </tr>
                <tr>
                    <td><strong><label for="tel">電話</label></strong></td>
                    <td><input type="text" name="tel" id="tel" value="<?php echo htmlspecialchars($row['tel']); ?>"></td>
                </tr>
                <tr>
                    <td><strong><label for="email">Eメール</label></strong></td>
                    <td><input type="text" name="email" id="email" value="<?php echo htmlspecialchars($row['email']); ?>"></td>
                </tr>
                <tr>
                    <td><strong><label for="password">パスワード</label></strong></td>
                    <td><input type="text" name="password" id="password" value="<?php echo htmlspecialchars($row['password']); ?>"></td>
                </tr>
                <tr>
                    <td><strong><label for="age">年齢</label></strong></td>
                    <td><input type="text" name="age" id="age" value="<?php echo htmlspecialchars($row['age']); ?>"></td>
                </tr>
                <tr>
                    <td><strong><label for="correct_option">住所</label></strong></td>
                    <td><input type="text" name="address" id="address" value="<?php echo htmlspecialchars($row['address']); ?>"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" value="更新" class="update-button">更新</button>
                    </td>
                </tr>
            </table>
        </form>
    </main>

    <footer class="footer">
        <button><strong><a href="admin_quiz.php">戻る</a><strong></button>
    </footer>
</body>
</html>
