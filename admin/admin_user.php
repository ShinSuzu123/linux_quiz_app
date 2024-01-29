<!-- User管理 -->
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
                    <td class="list_btn"><button onclick="location.href='admin_quiz.php'">問題 管理</button></td>
                    <td class="list_btn"><button onclick="location.href='admin_user.php'">User 管理</button></td>
                </tr>
            </table>
        </div>

        <h2>User 管理</h2>

        <!-- ユーザー登録 -->
        <div class="quiz_btn">
            <table>
                <tr>
                    <td class="list_btn"><button onclick="location.href='register_user_form.php'">ユーザーを登録する</button></td>
                </tr>
            </table>
        </div>

        <!-- ユーザー 一覧として表示 -->
        <!-- 欄の名称 -->
        <div id="table-quiz">
            <table>
                <tr>
                    <th>ID</th>
                    <th>名前</th>
                    <th>電話番号</th>
                    <th>Eメール</th>
                    <th>パスワード</th>
                    <th>年齢</th>
                    <th>住所</th>
                    <th>編集</th>
                    <th>削除</th>
                </tr>
                <!-- ユーザーの呼び出し -->
                <?php include 'display_user.php'; ?>
            </table>
        </div>
    </main>

    <footer class="footer">
    </footer>
</body>
</html>
