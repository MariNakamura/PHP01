<?php
mb_language("Japanese");
mb_internal_encoding("UTF-8");

if ($_POST) {
    $to = 'nakamura@incubatefund.com'; //送信先アドレス
    $subject = "【G's Academy】お問い合わせがありました"; //メールタイトル

    //送信メールの本文
    $message = "お問い合わせがありました。\n";
    $message .= "入力された内容は以下の通りです。\n";
    $message .= "\n";
    $message .= "---\n";
    $message .= "\n";
    $message .= "お名前: " . $_POST["name"];
    $message .= "\n";
    $message .= "メールアドレス: " . $_POST["email"];
    $message .= "\n";
    $message .= "お問い合わせ本文: " . $_POST["message"];

    //メール転送の実行
    if (mb_send_mail($to, $subject, $message)) {
        include 'success.php'; // 成功時のPHPファイルを読み込む
    } else {
        echo "フォームの送信に失敗しました";
    }
} else {
    echo "HTMLからのPOST送信受信に失敗しました";
}
?>