<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<title>SQL�C���W�F�N�V������p�����U��</title>
</head>
<body>
<form name="searchform" action="<?php echo $_SERVER["SCRIPT_NAME"]?>" method="GET">
  <input type="text" name="book_title"><br />
  <input type="submit" value="���M">
</form>
<hr>
<?php
mb_internal_encoding('SJIS');

if( isset( $_GET["book_title"] ) ){
  define('DBNAME', 'bookspdo');
  define('DBHOST', 'localhost');
  define('DBUSER', 'postgres'); // �f�[�^�x�[�X���[�U�����w�肵�Ă�������
  define('DBPASS', 'postgres'); // �p�X���[�h���w�肵�Ă�������
  define('DSN', "host=" . DBHOST . " dbname=" . DBNAME . " user=" . DBUSER . " password=" . DBPASS);
  if( !$db = pg_connect( DSN ) ){
    exit("�f�[�^�x�[�X�����G���[");
  }
  pg_set_client_encoding("SJIS");
  $book_title = addslashes($_GET["book_title"]);
echo $book_title."<br />";
  $sql = <<< EOM
    SELECT title, author FROM books
    WHERE title LIKE '%{$book_title}%'
EOM;
  echo $sql;
  echo '����������<br />';
  echo '<table border="1">';
  $res = pg_query( $db, $sql );
  while( $row = pg_fetch_array( $res ) ){
    echo <<< EOM
        <tr>
          <td>{$row["title"]}</td>
          <td>{$row["author"]}</td>
        </tr>
EOM;
  }
  echo "</table>";
}
?>
</body>
</html>