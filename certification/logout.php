<?php
session_start(); // セッションを開始する

// 使用しているセッションクッキーを削除する
if(ini_get("session.use_cookies")) { // セッションがクッキーをクッキーを使用しているかどうかの確認 
    $params = session_get_cookie_params(); // セッションクッキーのパラメーターを取得する
    setcookie(session_name(), '', time() - 42000, // クッキーの有効期限を現在時刻より過去にすることでブラウザはそのクッキーを削除する
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    ); // setcookie関数を使用してセッションクッキーを削除する。
}

// 全てのセッション破棄
session_destroy();

// ログアウト後のリダイレクト先
header("Location: signin.html");
exit; // 処理を終了する

?>
