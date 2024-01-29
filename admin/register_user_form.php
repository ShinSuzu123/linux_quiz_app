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
        <div class="quiz_btn">
            <table>
                <tr>
                    <td class="list_btn"><button onclick="location.href='admin_quiz.php'">戻る</button></td>
                </tr>
            </table>
        </div>

        <form action="submit_user.php" method="post">
            <table>
                <tr>
                    <th>項目</th>
                    <th>登録欄</th>
                </tr>
                <tr>
                    <td><strong>名前</strong></td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td><strong>電話</strong></td>
                    <td><input type="text" name="tel" required></td>
                </tr>
                <tr>
                    <td><strong>Eメール</strong></td>
                    <td><input type="text" name="email" required></td>
                </tr>
                <tr>
                    <td><strong>パスワード</strong></td>
                    <td><input type="text" name="password" required></td>
                </tr>
                <tr>
                    <td><strong>年齢</strong></td>
                    <td><input type="text" name="age" required></td>
                </tr>
                <tr>
                    <td><strong>住所</strong></td>
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
    </footer>
</body>
</html>
