<?php
// 訪問回数カウント用の変数$visitにカウント値を格納
$expire = time()+5; //5秒内にアクセスしないばあは、値はクリアされる。
if( isset($_COOKIE['visitcount']) ){ // クッキーがあればその値がカウント値
  $visit = $_COOKIE['visitcount'];
} else{ // クッキー	がなければ初回訪問としてカウント値は0
  $visit = 0;
}

$visit++; // カウント値+1
setcookie('visitcount', $visit,$expire); // 有効期限なしのクッキーを設定
print $visit; //違うブラウザでは違う値になる。ブラウザごとに識別。ブラウザはそのcookieの値はローカルファイルに保存？
?> 