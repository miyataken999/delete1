<?php

class query{
 public $querys;
 
 function query_init(){
     print "=================";
     $this->querys = array();
     
 }
 
 function query_add($sql){
 
     $this->querys[] = $sql;
 }
 
 function get_query(){
     
 }
 
 function dump_sql(){
     print "<pre>";
     var_dump($this->querys);
     print "</pre>";
 }
    
}

$query_array = array("",
"",
"");


/***********************************************
 * 
 * カレントデート
 * *********************************************/
$sql_curdate = "select created_box_at from store_products where created_box_at < date_add(now(), interval -100 day)";

$que = new query();

$que->query_init();
$que->query_add($sql_curdate);
$que->dump_sql();






$date = array(2011,2013,2014,);

$create_sql = "create table goods_store_8 SELECT
  count(*) as z,created_box_at
FROM
 store_products
WHERE
 `status` = 3
group by created_box_at
";

$sql = "
SELECT
  *
FROM
	goods_store_8
";

try {
$pdo = new PDO('mysql:host=urlounge.co.jp;dbname=internet;charset=utf8','admin','admin',
array(PDO::ATTR_EMULATE_PREPARES => false));
print "================";
} catch (PDOException $e) {
 exit('データベース接続失敗。'.$e->getMessage());
}
$sql44 = "
select count(*),yahoo_junle,created_box_at from store_products GROUP BY yahoo_junle,created_box_at
";

$sql_tranacte =  "TRUNCATE TABLE kaitenritu";
//$stmp = $pdo->query($sql_tranacte);

for($i = 0 ;$i < 3;$i++){
    
    
print "===========================================<BR>";    
    
$sql44 = "insert into kaitenritu
SELECT
date_add(CURDATE(), INTERVAL -{$i} DAY) as updatedate,
count(product_id) as upsumi,
yahoo_junle as yahoo_jun,
(select count(*) from store_products where yahoo_junle = yahoo_jun and kanryou_henbi = date_add(CURDATE(), INTERVAL -{$i} DAY)) as kanryousuu
FROM
	store_products as c
WHERE
	created_box_at <= date_add(CURDATE(), INTERVAL -{$i} DAY) and created_box_at != \"\"  and `status` = 3 
GROUP BY
	yahoo_junle
order by upsumi desc";

print $sql44;

$stmp = $pdo->query($sql44);
}
/*
while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
 echo "<BR>";
 echo $brand_Junle = $row["yahoo_junle"];
 echo $ttitle = $row["z"];
 echo $tr = $row["created_box_at"];
}*/



//ここで商品テーブルからデータ合計の取得

?>