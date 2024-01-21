<?php
session_start(); // セッションを開始する

// セッションクッキーを削除する
if(ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// セッション破棄
session_destroy();

// ログアウト後のリダイレクト先
header("Location: signin.html");
exit;

?>
