<!-- 問題の登録フォーム -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LPIC lv.1 アタック!</title>
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
    <link href="../common/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header class="header">
        <h1 class="quiz-logo">LPIC lv.1 アタック!</h1>
        <nav class="nav">
            <ul class="list">
                <li class="item"><a href="../certification/logout.php">ログアウト</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>問題 登録</h2>
        <form action="submit_question.php" method="post">
            <table>
                <tr>
                    <td>問題テキスト</td>
                    <td><input type="text" name="question_text"></td>
                </tr>
                <tr>
                    <td>選択肢1</td>
                    <td><input type="text" name="option1" required></td>
                </tr>
                <tr>
                    <td>選択肢2</td>
                    <td><input type="text" name="option2" required></td>
                </tr>
                <tr>
                    <td>選択肢3</td>
                    <td><input type="text" name="option3" required></td>
                </tr>
                <tr>
                    <td>選択肢4</td>
                    <td><input type="text" name="option4" required></td>
                </tr>
                <tr>
                    <td>正解</td>
                    <td>
                        <select name="correct_option" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>カテゴリ</td>
                    <td><input type="text" name="category" required></td>
                </tr>
                <tr>
                    <td>解説</td>
                    <td><textarea name="explanation" rows="4"></textarea></td>
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
