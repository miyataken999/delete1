<?php
  $errlog_file = "./error.log";

  //エラーハンドラ
  function error_handler($err_num, $err_msg, $err_file, $err_line, $err_ctxt) {
    //エラーレベルを識別
    switch($err_num) {
      case E_ERROR :
        echo "致命的なエラー";
        break;

      case E_WARNING :
        echo "警告";
        break;

      case E_PARSE :
        echo "コンパイルエラー";
        break;

      case E_NOTICE :
        echo "実行時通知";
        break;

      default :
        echo "その他のエラー";
    }

    echo "が発生しました\n";

    echo "エラー番号 => {$err_num}\n";
    echo "エラーメッセージ => {$err_msg}\n";
    echo "エラーが発生したファイル => {$err_file}\n";
    echo "エラーが発生した行番号 => {$err_msg}\n";

    echo "エラーコンテキスト\n";
    var_dump($err_ctxt);

    //通常のエラーハンドラには処理を引き継がない
    return TRUE;
    //FALSEを返すと通常のエラーハンドラに処理を引き継ぐ
  }

  header("Content-Type: text/plain; charset=UTF-8");

  //エラーハンドラを設定
  set_error_handler("error_handler");
  echo "エラーハンドラをerror_handle関数に設定しました\n";

  //不適切なコード（0による除算）
  $invalid_code = 100 / 0;

  restore_error_handler();
  echo "エラーハンドラを元に戻しました\n";

  //不適切なコード（0による除算）
  $invalid_code = 100 / 0;
?>