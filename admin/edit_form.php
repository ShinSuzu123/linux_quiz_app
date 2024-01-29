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
        <div class="quiz_btn">
            <table>
                <tr>
                    <td class="list_btn"><button onclick="location.href='admin_quiz.php'">戻る</button></td>
                </tr>
            </table>
        </div>

        <form action="update_questions.php" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']);?>">
            <table>
                <tr>
                    <td><strong><label for="question_text">問題テキスト</label></strong></td>
                    <td><input type="text" name="question_text" id="question_text" value="<?php echo htmlspecialchars($row['question_text']);  ?>"></td>
                </tr>
                <tr>
                    <td><strong><label for="question_text">選択肢1</label></strong></td>
                    <td><input type="text" name="option1" id="option1" value="<?php echo htmlspecialchars($row['option1']); ?>"></td>
                </tr>
                <tr>
                    <td><strong><label for="question_text">選択肢2</label></strong></td>
                    <td><input type="text" name="option2" id="option2" value="<?php echo htmlspecialchars($row['option2']); ?>"></td>
                </tr>
                <tr>
                    <td><strong><label for="question_text">選択肢3</label></strong></td>
                    <td><input type="text" name="option3" id="option3" value="<?php echo htmlspecialchars($row['option3']); ?>"></td>
                </tr>
                <tr>
                    <td><strong><label for="question_text">選択肢4</label></strong></td>
                    <td><input type="text" name="option4" id="option4" value="<?php echo htmlspecialchars($row['option4']); ?>"></td>
                </tr>
                <tr>
                    <td><strong><label for="correct_option">正解</label></strong></td>
                    <td><input type="text" name="correct_option" id="correct_option" value="<?php echo htmlspecialchars($row['correct_option']); ?>"></td>
                </tr>
                <tr>
                    <td><strong><label for="category">カテゴリ</label></strong></td>
                    <td><input type="text" name="category" id="category" value="<?php echo htmlspecialchars($row['category']); ?>"></td>
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
    </footer>
</body>
</html>
