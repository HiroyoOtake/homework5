<?php

/////////////////////////////////////////////////////////////////////////////////
// 問題 1.
// あるショッピングサイトに以下のようなコードが存在するとします。
// store_1.php と store_2.php のコードの一部を見て関数を作成した方がいいと思われる部分を探し、
// 実際にその関数を作成して書きなおしてみてください。
// また、なぜその関数を作成したかの理由も簡単にコメントとして記載してください。
// (作成する関数は１つでも複数でも問題ありません)
//
// プログラムの動作テストは必要ありません。(構文エラーは無いように書いてください)
/////////////////////////////////////////////////////////////////////////////////

/********* store_1.php の一部 *********/

// カートに入っている商品合計金額
$sum_price = $_SESSION['sum_price_in_cart'];

// 3000円以上購入した場合は送料無料にする
$free_shipping = false;
if ($price >= 3000) {
  $free_shipping = true;
}

/********* store_2.php の一部 *********/

// カートに入っている商品合計金額
$sum_price = $_SESSION['sum_price_in_cart'];

// カートに入っている商品金額の合計が3000円未満の場合は、
// 送料無料になる金額の商品をオススメ表示する
$show_recommend_item = false;
if ($sum_price < 3000 ) {
  $show_recommend_item = true;
}


// 以下に書きなおしたプログラムを書く

/********* 書き直した store_1.php の一部 *********/



/********* 書き直した store_2.php の一部 *********/



/********* 作成した関数 *********/



/////////////////////////////////////////////////////////////////////////////////
// 問題 2.
// ある会員サイトに以下のように会員の設定を 保存/読み出し するコードが存在するとします。
// user_setting_1.php と user_setting_2.php のコードの一部を見て関数を作成した方がいいと思われる部分を探し、
// 実際にその関数を作成して書きなおしてみてください。
// また、なぜその関数を作成したかの理由も簡単にコメントに記載してください。
// (作成する関数は１つでも複数でも問題ありません)
//
// プログラムが動作する必要はありません。(構文エラーは無いように書いてください)
/////////////////////////////////////////////////////////////////////////////////

/********* user_setting_1.php の一部 *********/
// 設定の保存
$user_setting = array(
  'id'                => '1',
  'image'             => '/img/profile_1.jpg',
  'mail_notification' => 'ON',
  'screen_theme'      => 'dark_theme1',
);

$saved = false;
$fp = fopen('user_setting_1.dat', "w");
if ($fp) {
  $saved = fwrite($fp, implode(',', $user_setting));
  if ($saved) {
    echo '設定の保存に成功しました。';
  }
}
if (!$saved) {
  echo '設定の保存に失敗しました。';
}
fclose($fp);

/********* user_setting_2.php の一部 *********/
// 設定の読み出し
$file_data = file_get_contents('user_setting_1.dat');
$setting_values = explode(',', $file_data);
$user_setting = array_combine(array('id', 'image', 'mail_notification', 'screen_theme'), $setting_values);

echo 'あなたはのメール通知は' . $user_setting['mail_notification'] . 'です。';


// 以下に書きなおしたプログラムを書く

/********* 書き直した user_setting_1.php の一部 *********/



/********* 書き直した user_setting_2.php の一部 *********/



/********* 作成した関数 *********/




