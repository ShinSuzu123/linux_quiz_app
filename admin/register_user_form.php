<!-- Userの登録フォーム -->
<!DOCTYPE html>
<html lang="en">
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
        <h2>User 登録</h2>
        <form action="submit_user.php" method="post">
            <table>
                <tr>
                    <td>名前</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>電話</td>
                    <td><input type="text" name="tel" required></td>
                </tr>
                <tr>
                    <td>Eメール</td>
                    <td><input type="text" name="email" required></td>
                </tr>
                <tr>
                    <td>パスワード</td>
                    <td><input type="text" name="password" required></td>
                </tr>
                <tr>
                    <td>年齢</td>
                    <td><input type="text" name="age" required></td>
                </tr>
                <tr>
                    <td>住所</td>
                    <td><input type="text" name="address" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" value="登録" class="register-button">登録</button>
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
