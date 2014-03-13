<?php
  //ヘッダーを出力する関数
  function echo_header() {
    echo <<<END_OF_HEADER
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>クッキーのデータを取得する</title>
</head>
<body>
END_OF_HEADER;
  }

  header("Content-Type: text/html; charset=UTF-8");

//doパラメータでフォームを表示するか、受信したデータを表示するかを判断
  if($_POST['do'] != 'send') {
    echo_header();
?>
<p>データ送信フォーム</p>
<form action="<?php echo basename(__FILE__) ?>" method="post" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="do" value="send" />
<?php
    $book = '';
    if(isset($_COOKIE['favorite_books'])) {
      $book = $_COOKIE['favorite_books'];
?>
<p>（過去にこのページから送信したデータを再表示しています。）</p>
<?php
    }
?>
<p>好きな書籍：<input type="text" name="book" value="<?php echo htmlspecialchars($book) ?>" /></p>
<p><input type="submit" name="sendbutton" value="送信する" /></p>
</form>
<?php
  }
  else {
    $book = $_POST['book'];
    //クッキーに好きな書籍を保存する
    setcookie('favorite_books', $book);

    //クッキーをセットした後でヘッダーを出力する
    echo_header();
?>
<p>受信したデータ</p>
<p>好きな書籍：<?php echo htmlspecialchars($book) ?></p>
<p><a href="<?php echo basename(__FILE__) ?>">もう一度入力する</a></p>
<?php
  }
?>
</body>
</html>