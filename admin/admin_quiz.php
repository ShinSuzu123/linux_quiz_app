<!-- 問題管理 -->
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
        <h2>管理者ページ</h2>
        <div class="quiz_btn">
            <table>
                <tr>
                    <td class="list_btn"><button><a href="admin_quiz.php">問題 管理</a></button></td>
                    <td class="list_btn"><button><a href="admin_user.php">User 管理</a></button></td>
                </tr>
            </table>
        </div>

        <h2>問題 管理</h2>

        <!-- 問題の登録ページへ飛ぶ -->
        <div>
            <button><a href='register_question_form.php'>問題を登録</a></button>
        </div>
        
        <!-- 問題を一覧として表示 -->
        <!-- 欄の名称 -->
        <table>
            <tr>
                <th>ID</th>
                <th>問題</th>
                <th>１</th>
                <th>２</th>
                <th>３</th>
                <th>４</th>
                <th>正解</th>
                <th>カテゴリ</th>
                <th>編集</th>
                <th>削除</th>
            </tr>
            <!-- 問題の呼び出し -->
            <?php include 'display_questions.php'; ?>
        </table>
    </main>

    <footer class="footer">
    </footer>
</body>
</html>
