y




<?php
//ini_set("display_errors",1);
if($_GET["box_id"] == ""){
	print "BOXID IS NOT EXIT";
	exit();
}	


/*****************************************************
*
*  ftp_dir_put.class
*
*  ftpアップロードをディレクトリ単位で実行するクラス
*  Terminal上での実行専用
*
*****************************************************/
 
require_once 'Net/FTP.php';
 
class ftp_dir_put {
 
  /*-------------------------------------
  *  コンストラクタ
  */
  public function ftp_dir_put( $ftp_server, $ftp_user_name, $ftp_user_pass, $remote_dir, $local_dir, $mode ){
    /*-------------------------------------
    *  $target_hostオブジェクトを生成
    */
    $target_host = new Net_FTP( $ftp_server, 21 );
 
    //ftpサーバに接続
    if( $target_host->connect( $ftp_server  ) ){
 
      print $ftp_server.' に接続しました'."\n";
 
      //接続後、ログイン認証
      if( $target_host->login( $ftp_user_name, $ftp_user_pass ) ){
        print $ftp_server.' にログインしました'."\n";
        print $local_dir.' を '.$remote_dir.' にアップロードしています･･･'."\n";
 
        if( $target_host->putRecursive( $local_dir, $remote_dir, $mode) ){
 
          print 'アップロードが終わりました'."\n";
          if( $target_host->disconnect() ){
            print 'ログアウトしました'."\n";
          }
          else{
            print 'ログアウトに失敗しました'."\n";
          }
        }
        else{
          print 'アップロードに失敗しました'."\n";
          if( $target_host->disconnect() ){
            print 'ログアウトしました'."\n";
          }
          else{
            print 'ログアウトに失敗しました'."\n";
          }
        }
      }
      else{
        print 'ログイン失敗しました'."\n";
      }
    }
    else{
      print $ftp_server.' に接続できません'."\n";
    }
  }
}
 




/*************************************************
予測があまかった
ボックスなど指定がる場合は値を設定できるべき
**************************************************/

//Include Common Files @1-9160B79C
define("RelativePath", "..");
define("PathToCurrentPage", "/zip/");
define("FileName", "makezipfile.php");
include_once(RelativePath . "/Common.php");
include_once(RelativePath . "/Template.php");
include_once(RelativePath . "/Sorter.php");
include_once(RelativePath . "/Navトigator.php");
require_once 'Log.php';    
define("IMG_RAKU_URL","");
//End Include Common Files

//Include Page implementation @2-4DBCB809
include_once(RelativePath . "/class/shopsetting.php");
//End Include Page implementation

//Include Page implementation @3-DFA5FCC9
include_once(RelativePath . "/class/makeImage.php");
//End Include Page implementation

//Initialize Page @1-58026C59
// Variables
$FileName = "";
$Redirect = "";
$Tpl = "";
$TemplateFileName = "";
$BlockToParse = "";
$ComponentName = "";
$Attributes = "";

// Events;
$CCSEvents = "";
$CCSEventResult = "";
$TemplateSource = "";

$FileName = FileName;
$Redirect = "";
$TemplateFileName = "makezipfile.html";
$BlockToParse = "main";
$TemplateEncoding = "UTF-8";
$ContentType = "text/html";
$PathToRoot = "../";
$PathToRootOpt = "../";
$Scripts = "|";
//End Initialize Page

//Before Initialize @1-E870CEBC
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeInitialize", $MainPage);
//End Before Initialize

//Initialize Objects @1-55507A52
$Attributes = new clsAttributes("page:");
$Attributes->SetValue("pathToRoot", $PathToRoot);
$MainPage->Attributes = & $Attributes;

// Controls
$shopsetting = new clsshopsetting("../class/", "shopsetting", $MainPage);
$shopsetting->Initialize();
$makeImage = new clsmakeImage("../class/", "makeImage", $MainPage);
$makeImage->Initialize();
$MainPage->shopsetting = & $shopsetting;
$MainPage->makeImage = & $makeImage;
$ScriptIncludes = "";
$SList = explode("|", $Scripts);
foreach ($SList as $Script) {
    if ($Script != "") $ScriptIncludes = $ScriptIncludes . "<script src=\"" . $PathToRoot . $Script . "\" type=\"text/javascript\"></script>\n";
}
$Attributes->SetValue("scriptIncludes", $ScriptIncludes);

$CCSEventResult = CCGetEvent($CCSEvents, "AfterInitialize", $MainPage);

if ($Charset) {
    header("Content-Type: " . $ContentType . "; charset=" . $Charset);
} else {
    header("Content-Type: " . $ContentType);
}
//End Initialize Objects

//Initialize HTML Template @1-6AE7B07D
$CCSEventResult = CCGetEvent($CCSEvents, "OnInitializeView", $MainPage);
$Tpl = new clsTemplate($FileEncoding, $TemplateEncoding);
if (strlen($TemplateSource)) {
    $Tpl->LoadTemplateFromStr($TemplateSource, $BlockToParse, "UTF-8");
} else {
    $Tpl->LoadTemplate(PathToCurrentPage . $TemplateFileName, $BlockToParse, "UTF-8");
}
$Tpl->SetVar("CCS_PathToRoot", $PathToRoot);
$Tpl->block_path = "/$BlockToParse";
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeShow", $MainPage);
$Attributes->SetValue("pathToRoot", "../");
$Attributes->Show();
//End Initialize HTML Template

//Execute Components @1-EA866EAC
$makeImage->Operations();
$shopsetting->Operations();
//End Execute Components

//Go to destination page @1-FBA93089
if($Redirect)
{
    $CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
    header("Location: " . $Redirect);
    unset($Tpl);
    exit;
}

//カテゴリーのＵＰＤＡＴＥ
$db = new clsDBinternet();
$db->query("update auctions as a,raku_hyoujisaki_category as b set a.raku_hyoujisaki_category = b.Categorie  where a.product_id = b.product_id");

$sql = <<< EOF
UPDATE store_products AS a,
 raku_hyoujisaki_category2 AS b
SET a.raku_hyoujisaki_category2 = b.Categorie
WHERE
	a.product_id = b.product_id and b.raku_hyouji_big2 != ""
EOF;

$db->query($sql);	

/*-------------------------------------
  *  プロパティセット
  */
  $ftp_server = 'ftp.rakuten.ne.jp';       //ftpサーバーアドレス
  $ftp_user_name = 'rfstore';    //ユーザー名
  $ftp_user_pass = 'Uhagej72';    //パスワード
  $remote_dir = '/rakuten/';               //サーバー側ディレクトリパス
  $local_dir = '/var/www/html/test333/';   //ローカル側ディレクトリパス
  $mode = true;                    //オーバーライド
 
  /*-------------------------------------
  *  実行オブジェクト
  */
  $test_init = new ftp_dir_put(
    $ftp_server,
    $ftp_user_name,
    $ftp_user_pass,
    $remote_dir,
    $local_dir,
    $mode
  );

/*-------------------------------------------
*FTPの設定 これが本当
---------------------------------------------*/
$ftp = array(
        'ftp_server' => 'ftp.rakuten.ne.jp',
        'ftp_user_name' => 'rfstore',
        'ftp_user_pass' => 'Uhagej72'
        );
$remote_file = '/rakuten/';
$ftp_file = '';

//exit();
/**********************************************************
①
■ＢＰＭ開始(必ずログをとる）
作業ログの取得
Ｐｒｏｃｅｓｓ　ＥＶＡ

***********************************************************/

//$process = new process;
//    $process->set_new_case("http://sakurasakujinsei.com:8080/syseva/en/classic/services/wsdl2",
//    "34501520051d78eda975917095257446",
//    "97986026551d78f355b3864081570326");

/*********************************************
②
初期データ
pieces ＧＥＴ分割用   メールかログで対応  
**********************************************/
/*
$conf = array('from'=>'miyatken999@gmail.com', 'subject'=>'Log Subject');
$to = 'miyataken999@gmail.com';
$logger = &Log::singleton('mail', $to, 'ident', $conf);
$message = "ログ内容";
$logger->log($message); 
*/
//require_once 'Log.php';
$conf = array('mode' => 0777, 'timeFormat' => '%X %x');
//$logfile = &Log::factory('file', 'out.log', 'TEST', $conf);

$conf = array('from'=>'miyataken999@gmail.com', 'subject'=>'ZIPMAKE');
$to = 'miyataken999@gmail.com
'; 
$logfile = &Log::singleton('mail', $to, 'ident', $conf); 

//ログスタート
$logfile->log('ログ内容'); 

/*-----------------------------------------
初期化処理
------------------------------------------*/

$pieces = "";//¨
$_path = "";//YAHOOURL
$_path2 = "";//RAKUURL
$file_rakuten = "item.csv";//楽天ＣＳＶ
$file_rakuten_cat = "item-cat.csv";//楽天カテゴリーＣＳＶ 
$file_iframe = "";

//GET値を分割  
/*----------------------------------------------
③ボックスネームはＧＥＴでくるので　それを分割
------------------------------------------------*/

$pieces = explode(".", CCGetParam("box_zip"));
$file_yahoo = $pieces[1].".csv";  
system("rm -rf ".$pieces[1].".csv");
system("rm -rf item.csv");
 
//ログデータ
$position = new variableListStruct();
$position->name = "box_name";
$position->value = "manager";  
//$process->send_value($position);

/******************************************************
④マスターデータ取得
初期設定 
$
*******************************************************/
$db = new clsDBinternet();
$db->query("select site_url,mail_url from site_master");
$db->next_record();
$_path = $db->f("site_url");//サイトＵＲＬ 
$_path2 = $db->f("mail_url");//EVAＵＲＬ 


//YAHOOCSV

/******************************************************
⑤BOX名の取得
*******************************************************/    
$sql = "select * from box box_id = ".CCGetParam("box_id",0);
$db->query("select raku_image_name,box_name from box where box_id = ".CCGetParam("box_id",0));
$db->next_record();
$box_name = $db->f("box_name");
$raku_image_path = $db->f("raku_image_name");
//ログデータ
$position = new variableListStruct();
$position->name = "box_name";
$position->value = $box_name;  
//$process->send_value($position);

/******************************************************
⑥ログ＋次の作業
*******************************************************/
$position->name = "raku_image_path";
$position->value = $raku_image_path;  
//$process->send_value($position);
//$process->route_case();
/******************************************************
⑦商品データの取得
*******************************************************/    
$db5 = new clsDBinternet();
$sql = "select yahoo_image4,yahoo_image5,raku_title,product_id,yahoo_sinaban,title,yahoo_junle from store_products where box_id = ".CCGetParam("box_id",0);

//require_once "Log.php";
//$conf = array('from'=>'miyataken999@gmail.com', 'subject'=>'Log Subject');
//$to = 'miyataken999@gmail.com';
//$logger = &Log::singleton('mail', $to, 'ident', $conf);
//$message = "ログ内容";
//$logger->log($sql); 

$db10 = new clsDBinternet();
$db11 = new clsDBinternet();  
$db40 = new clsDBinternet();
$sql40 = "select product_id,yahoo_sinaban from store_products";
$db40->query($sql40);
$dblog = new clsDBinternet();
/*******************************************************
⑧フォルダーの作成
********************************************************/
$db5->query($sql); 
$raku_select = "";
if(CCGetParam("box_zip",0) != ""){
$listfile = system("rm -rf tmp",$rtf); 
$listfile = system("rm -rf tmp_raku",$rtf);
$listfile = system("rm -rf ritem",$rtf); 
$listfile = system("rm -rf cabinet",$rtf); 
$listfile = system("mkdir tmp",$rtf);
$listfile = system("mkdir tmp_raku",$rtf); 
$listfile = system("mkdir ritem",$rtf); 
$listfile = system("mkdir ritem/batch",$rtf); 
$listfile = system("mkdir cabinet",$rtf); 
$listfile = system("mkdir cabinet/images",$rtf); 
$listfile = system("mkdir cabinet/images/{$box_name}",$rtf);
//楽天イメージパスでのイメージフォルダーの作成
$listfile = system("mkdir cabinet/images/{$raku_image_path}",$rtf);     
$listfile = system("chmod 777 tmp",$rtf);
$listfile = system("chmod 777 tmp_raku",$rtf);  
$listfile = system("chmod -R 777 ritem",$rtf);
$listfile = system("chmod -R 777 cabinet",$rtf);  
}

/******************************************************
⑨ログ＋次の作業
*******************************************************/
$position->name = "raku_image_path";
$position->value = $raku_image_path;  
//$process->send_value($position);
//$process->route_case();

/*******************************************************
⑩昔の初期設定
********************************************************/

$sql444 = "
update auctions set raku_cont_col = 'n';
update auctions set raku_goods_name = concat(Title,'【中古】');
update auctions set Product_status = '中古';
update auctions set raku_layout = '4';
update auctions as a ,auctions_copy5 as b set a.raku_tag = b.raku_tag where b.product_id = 2642;
#update auctions set raku_price = Starting_price;
#update auctions set raku_hyouji_kakaku = Starting_price;
update auctions as a ,auctions_copy5 as b set a.Product_status = b.Product_status where b.product_id = 2642;
update auctions as a ,auctions_copy5 as b set a.raku_dir = b.raku_dir where b.product_id = 2642;
update auctions as a ,auctions_copy5 as b set a.raku_tax = b.raku_tax where b.product_id = 2642;
update auctions as a ,auctions_copy5 as b set a.raku_send_price = b.raku_send_price where b.product_id = 2642;
update auctions as a ,auctions_copy5 as b set a.raku_daibiki = b.raku_daibiki where b.product_id = 2642;
update auctions as a ,auctions_copy5 as b set a.raku_souko_sitei = b.raku_souko_sitei where b.product_id = 2642;
update auctions as a ,auctions_copy5 as b set a.raku_siryou_seikyuu = b.raku_siryou_seikyuu where b.product_id = 2642;
update auctions as a ,auctions_copy5 as b set a.raku_shouhin_toiawase = b.raku_shouhin_toiawase where b.product_id = 2642;
update auctions as a ,auctions_copy5 as b set a.raku_sainyuuka_osirase = b.raku_sainyuuka_osirase where b.product_id = 2642;
update auctions as a ,auctions_copy5 as b set a.raku_mobile_disp = b.raku_mobile_disp where b.product_id = 2642;
update auctions as a ,auctions_copy5 as b set a.raku_nosi_taiou = b.raku_nosi_taiou where b.product_id = 2642;
update auctions as a ,auctions_copy5 as b set a.raku_zaiko_tipe = b.raku_zaiko_tipe where b.product_id = 2642;
update auctions as a ,auctions_copy5 as b set a.raku_zaiko_suu = b.raku_zaiko_suu where b.product_id = 2642;
update auctions as a ,auctions_copy5 as b set a.raku_zaiko_suu_hyouji = b.raku_zaiko_suu_hyouji where b.product_id = 2642;
update auctions as a ,auctions_copy5 as b set a.raku_zaiko_suu_hyouji = b.raku_zaiko_suu_hyouji where b.product_id = 2642;
update auctions as a ,auctions_copy5 as b set a.raku_yuusendo = b.raku_yuusendo where b.product_id = 2642;
update auctions as a ,auctions_copy5 as b set a.raku_zaiko_makimodosi = b.raku_zaiko_makimodosi where b.product_id = 2642;
update auctions as a ,auctions_copy5 as b set a.raku_zakiko_kirejino_chuumon = b.raku_zakiko_kirejino_chuumon where b.product_id = 2642;
update auctions as a ,auctions_copy5 as b set a.raku_chuumon_btn = b.raku_chuumon_btn where b.product_id = 2642;
update auctions as a ,store_products as b set a.raku_shouhin_bangou = b.yahoo_sinaban where b.product_id = a.product_id;
"; 
//print $sql444; 
//exit();   
$sql100 = "update auctions set Title = REPLACE(Title,'â– ','■')";
$db10->query($sql100);   
$logfile->log("REPLACE エラー文字を■に変更");

/**************************************************

⑪楽天用ＢＯＸ一括設定   
ＢＯＸ内の商品数分だけここで処理をする
フイルァ取得⇒UP

***************************************************/

while($db5->next_record()){  

// $test = new Net_FTP('ftp.mydomain.com', 21);
// print $db5->f("product_id"); 
  $raku_select .= "&selection[]=".$db5->f("product_id"); 
//楽天用イメージデータ取得 
  $sql_auc_img = "select Image_1,Image_2,Image_3,Image_4,Image_5 from auctions where product_id = ".$db5->f("product_id");
  $db11->query("$sql_auc_img");
  $db11->next_record(); 
  /**********************************************
  //ＹＡＨＯＯ用プレビュー取得(DREAMWEAVER)       
  ***********************************************/
  $bufyahoo = file_get_contents($_path2."shop/yahoo_preview.php?product_id=".$db5->f("product_id")); 
  
  /********************************************************** 
  ＩＦＬＡＭＥ作成部分
  ＩＦＲＭＥ取得をして　画像を取ってきてＺＩＰファイルを作成する  
  
  1,商品ＵＰ時にイメージコンバート
  2.WGET でフォルダーごと取得
  3.FOLDER は /var/www/html/shop/zip/iframe/product_Id/product_id/ZIP
  4.ＺＩＰ　作成
  CREATE IFRAME FILE ON THIS POINT
  AND MAKE IMAGE FORMAT FROM 100 - TO 1000
  @input
  @output
  ***********************************************************/
  //自分のディレクトリー 
  //ここから実際にここのFILE設定
  print dirname(__FILE__);
  //ここでＩＦＲＡＭＥの取得
  
  $iflame_url = "http://urlounge.co.jp/shop/zip/combra/rakuiframe.php?product_id=".$db5->f("product_id");
  //ログ１
  $logfile->log('■■■■■■■■■■■■■■■■■■■■■■■■ファイル名■■■■■■■■■■■■■■■■■■■■■■■■</BR>'); 
  $logfile->log($iframe_url); 
  $logfile->log('■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■</BR>'); 
   
   
  //ボックス内の商品分だけWGET 
  //GET IFRAME FILE
  
  $iframe = file_get_contents($iflame_url);
  
  //print $iframe;
  //exit();
  
  $logfile->log('■■■■■■■■■■■■■■■■■■■■■■■■ファイル名■■■■■■■■■■■■■■■■■■■■■■■■</BR>'); 
  $logfile->log($iframe); 
  $logfile->log('■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■</BR>'); 
  
  
/*************************************************
ファイル名取得
**************************************************/  
  //1.)HTMLファイル名設定
  print $file_name = $db5->f("product_id").".html";
  
  $logfile->log('■■■■■■■■■■■■■■■■■■■■■■■■ファイル名■■■■■■■■■■■■■■■■■■■■■■■■'); 
  $logfile->log($file_name); 
  $logfile->log('■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■'); 
  
  //2.)ボックス名の設定 ①ボックス名を取得
  print $folder_name = $box_name;//$db5->f("product_id")."html";
  
  $logfile->log('■■■■■■■■■■■■■■■■■■■■■■■■フォルダー名■■■■■■■■■■■■■■■■■■■■■■'); 
  $logfile->log($file_name); 
  $logfile->log('■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■'); 
  
  //3.)フォルダー作成　②ボックス名でフォルダー作成
   $logfile->log('■■■■■■■■■■■■■■■■■■■■■■■■フォルダー作成■■■■■■■■■■■■■■■■■■■'); 
  $logfile->log($folder_name); 
  $logfile->log('■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■'); 
    
  /**********************************************************************
  ＩＦＲＡＭＥデータファイルを
  ファイルを　フォルダーへコピー
  **********************************************************************/	
	
	
  $cmd = "mkdir {$folder_name}";
  system($cmd,$a);
  $err = file_put_contents($file_name,$iframe); 
  //3.4 一時フイルァを作成しなといコピー出ないのでcpyo  
  $err = file_put_contents("aaaaaaaaa.txt",$iframe);
  //4.)フォルダーにファイルを設定　ＨＴＭＬを　/zip/フォルダー名に異動
  $logfile->log('■■■■■■■■■■■■■■■■■■■■■■■■フォルダーにファイルを設定■■■■■■■■■■■■■■■■■■■■■■■■'); 
  //$logfile->log("/var/www/html/shop/zip/".$iframe);
  //$logfile->log("/var/www/html/shop/zip/".$file_name); 
  //プレビューの内容を書き出し
  //$logfile->log("/var/www/html/shop/zip/".$err); 
  
  //一時フイルの作成
  $file = "/var/www/html/shop/zip/aaaaaaaaa.txt";
  ///////////////////////////////]
  //ＦＰＴフルダーの設定
  $remote_file = "/rakuten/".$file_name;
  
  //ここでこＦＰＴのアプッロード
  //FPT設定
  //remote_folder設定
  //file設定
  FTPupload($ftp,$remote_file,$file);

  $logfile->log('■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■'); 
  
  
  print $cmd = "mv {$file_name} ".dirname(__FILE__)."/{$folder_name}";
  system($cmd,$a);
  $site_url = "http://103.3.188.103/shop/zip/{$folder_name}";
  //print $site_url;
  //exit();  
  //SET SETTION
  CCSetSession("iframe_url","http://103.3.188.103/shop/zip/{$folder_name}");
  
  /***********************
  make_iframe_zipfile($product_id);
  /***.html
  /image/100/aaa
  /image/200/aaa
  /image/300/aaa
  /image/400/aaa
  /image/600/aaa
   ************************/  
  
  /**************************************************
  CREATE IMAGE FILE TO THIS POINST
  ***************************************************/
  
  //exit();
/**************************************************
⑪
1.4枚目の画像を取得してＢＯＸ楽天ボックスに設定
2.ＹＡＨＯＯはプレビューに設定 yahoo_preview.php
ここでSEQを元に　画像ファイルを確認する
PC用販売説明文 にその内容を追加する
1 ４枚目から６枚目の回数
2 もし　画像があれば
3 PC用販売説明文にIMGタグを追加していく
***************************************************/
$pc_sales_input = "";//PC販売説明文

/***************************************************
⑫
ここで画像枚数の設定
****************************************************/

for($f_num = 4;$f_num <= 6;$f_num++){
//ファイル名作成
/***************************************************
BOXＵＰ時にフォルダー分けをしているので取得
****************************************************/
$f_name = "/var/www/html/shop/services/image/{$box_name}/".$pieces[1]."/{$db5->f('product_id')}_{$f_num}.jpg";
$logfile->log($f_name);
//$f_name = "../services/image.jpg";
//  
	if (file_exists($f_name)){
		//echo "ファイルが存在する！！";
		//print "<img src=\"http://103.3.188.103/shop/services/image/{$box_name}/{$box_name}/{$db5->f('product_id')}_{$f_num}.jpg\" width=300>";
		//$pc_sales_input =  $pc_sales_input . "<img src=\"http://image.rakuten.co.jp/rfstore/cabinet/{$box_name}/{$db5->f('product_id')}_{$f_num}.jpg\">";
	}else{
		//echo "ファイルが存在しない！！";
	}
//print $f_name."<BR>";
}  


/****************************************************************
⑬
4枚目,5枚目を楽天PC商品説明に設定

ファイル名を修正しないとはいらないっぽい
フォルダー　作成　もういっちょ作成
楽天セールス画像４，５の設定
すでに画像４はファイルＵＰ時に設定しているので予備で設定
画像４、５は予備
****************************************************************/
$listfile = system("mkdir cabinet/images/{$box_name}",$rtf); 
//楽天イメージパスでのイメージフォルダーの作成
$listfile = system("mkdir cabinet/images/{$raku_image_path}",$rtf);
$pc_sales_input = "";
//画像４枚目の設定( path is yahoo_image)

/******************************************************
【修正画像を修正しないに変更】
Get data from auctions data
this pictuire is used for rakuten,s preview
@in pc_salse_input PC商品説明文
*******************************************************/

//修正　コメントアウト
if($db11->f("Image_4")!=""){
		$pc_sales_input =  $pc_sales_input . "<img src=\"http://image.rakuten.co.jp/rfstore/cabinet/{$raku_image_path}/{$db5->f('product_id')}_4.jpg\"/></br>";
}	

//楸瑛　コメントアウト
//画像５枚目の設定( path is yahoo_image)
if($db11->f("Image_5")!=""){
		$pc_sales_input =  $pc_sales_input . "<img src=\"http://image.rakuten.co.jp/rfstore/cabinet/{$raku_image_path}/{$db5->f('product_id')}_5.jpg\"/></br>";
}

/******************************************************************
２０
⑮ $raku_pre file_getしたプレビューの内容
楽天ＰＣ説明画像の設定
*******************************************************************/
//旧　楽天画像表示　ＰＣ用販売説明
//$sql_pc_hanbai_sql = "update auctions set raku_pcyou_hanbai_setumei = '{$pc_sales_input}' where product_id = {$db5->f('product_id')}";

$sql_pc_hanbai_sql = "update auctions set raku_pcyou_hanbai_setumei = '{$pc_sales_input}' where product_id = {$db5->f('product_id')}";
$db->query($sql_pc_hanbai_sql);

/*******************************************************************
16 update 
AR
在庫あり時納期管理番号　1
raku_zaiko_kire
AS
在庫切れ時納期管理番号　2
raku_zaiko_ari
P
消費税　0
raku_tax
********************************************************************/

print $sql_update_rakuten = "update auctions set raku_zaiko_ari = 1,raku_zaiko_kire_nouki = 2,raku_zaiko_AR = 1,raku_ziiko_AS = 2,raku_tax=0 where product_id = ".$db5->f('product_id');
$db->query($sql_update_rakuten);
//exit();

/******************************************************************
⑯
ログ＋次の作業 PC説明文の内容
*******************************************************************/
$position->name = "raku_image_path";
$position->value = $raku_image_path;  

/******************************************************************
⑰
PC用販売説明文設定欄

HTML説明一括登録
楽天と楽天モイルバ用プビューレデターの取得
スマートフォンプレビューデータの作成   

shop/rakuten_preview.php
*******************************************************************/ 
   
  //print $_path2."shop/rakuten_preview.php?product_id=".$db5->f("product_id");
  //exit(); 
/*******************************************************************
⑱１０ ★★★★★★★★★★★★★★★★★★★★★★★★★★★ 
  //ここで楽天プレビューの取得  
  //ここにテストサイトのデータコピー
  //ここの内容をログに収集
********************************************************************/

//○18-1 ★楽天ＰＣ用テンプレート   
  //$rakuten_desk = file_get_contents($_path2."shop/rakuten_preview.php?product_id=".$db5->f("product_id")); 
 $rakuten_desk = file_get_contents($_path2."shop/zip/combra/goods_maint_eva_template.php?product_id=".$db5->f("product_id")); 
 
//○18-2 ★楽天モバイル用テンプレート
  $rakuten_desk_moble = file_get_contents($_path2."shop/rakuten_preview_mobile.php?product_id=".$db5->f("product_id"));
//○18-1 のテンプレート内容書き出し
  $logfile->log("".$_path2."shop/rakuten_preview.php?product_id=".$db5->f("product_id")."&mobile=1"); 
  
  //print $_path2."shop/rakuten_preview.php?product_id=".$db5->f("product_id")."&mobile=1";
  //exit();  
  //モバイル＝１で設定
  $raku_smartphone_setumei = file_get_contents($_path2."shop/rakuten_preview.php?product_id=".$db5->f("product_id")."&mobile=1"); 
  //print $raku_smartphone_setumei;
  //exit();
/*----------------------------------------------------------------
@１１　
データのアップデート
------------------------------------------------------------------*/

  $sql55551 = "update store_products set store_products.yahoo_brand = store_products.yahoo_junle where product_id = ".$db5->f("product_id");
//　$db10->query($sql5555);

  $sql444 = "update auctions set Description = '".$bufyahoo."' where product_id = ".$db5->f("product_id");
  $db10->query($sql444);  
  
  $sql444 = "update auctions set raku_layout = 3' where product_id = ".$db5->f("product_id");
  $db10->query($sql444);  
 
  
  //$sql444 = "update auctions set raku_pc_shouhin_setumei = '".$rakuten_desk."' where product_id = ".$db5->f("product_id");
  //15-1 楽天プレビューを商品説明文に設定
  $sql444 = "update auctions set raku_pcyou_hanbai_setumei = '".$rakuten_desk."' where product_id = ".$db5->f("product_id");
  //15-2 楽天ＰＣ用販売説明　ＩＦＲＭＥの内容を設定
  $db10->query($sql444);

//楽天残り　iframeに　採寸説明のＵＲＬをいれる

  $sql444 = "update auctions set raku_pc_shouhin_setumei = '<iframe src=\"http://www.rakuten.ne.jp/gold/rfstore/rakuten/right_test.html\" width=\"320\" height=\"1500\" frameborder=\"0\" scrolling=\"no\">goods</iframe>' where product_id = ".$db5->f("product_id");
  //exit();
  $db10->query($sql444);
 
  
  $db10->query($sql444); 
  $sql444 = "update auctions set raku_smartphone_setumei = '".$raku_smartphone_setumei."' where product_id = ".$db5->f("product_id");
  $db10->query($sql444); 


//楽天スマートフォンプレビューの設定
/*****************************************************  
【機能14】　楽天ＺＩＰ　順番８　画像ファイル結合　行７１５
//表示用が象ータを作成
画像１，２，３枚目まで設定
******************************************************/

  $image444 = "http://image.rakuten.co.jp/rfstore/cabinet/".$pieces[1]."/".$db11->f("Image_1")." "."http://image.rakuten.co.jp/rfstore/cabinet/".$pieces[1]."/".$db11->f("Image_2")." "."http://image.rakuten.co.jp/rfstore/cabinet/".$pieces[1]."/".$db11->f("Image_3")." ";
  //."http://image.rakuten.co.jp/rfstore/cabinet/".$pieces[1]."/".$db11->f("Image_4")." ";



//【修正】2014/02/19  
  $image444 = "http://image.rakuten.co.jp/rfstore/cabinet/".$raku_image_path."/".$db11->f("Image_1")." "."http://image.rakuten.co.jp/rfstore/cabinet/".$raku_image_path."/".$db11->f("Image_2")." "."http://image.rakuten.co.jp/rfstore/cabinet/".$raku_image_path."/".$db11->f("Image_3")." "."http://image.rakuten.co.jp/rfstore/cabinet/".$raku_image_path."/".$db11->f("Image_4")." "."http://image.rakuten.co.jp/rfstore/cabinet/".$raku_image_path."/".$db11->f("Image_5");
  //."http://image.rakuten.co.jp/rfstore/cabinet/".$pieces[1]."/".$db11->f("Image_4")." ";

$logfile->log("CSV用　イメージパス".$image444); 

/**************************************************
楽天　image4個まで追加　2013/03/17
$pieces[1] ZIP　ファイルの実際のファイル名
raku_image1　image_1 image_2 image_3
raku_image2
raku_image3
raku_image4  
***************************************************/


  $db10->query("update auctions set raku_image1 = '".$image444."' where product_id = ".$db5->f("product_id"));	
  $db10->query("update auctions set raku_image2 = 'http://image.rakuten.co.jp/rfstore/cabinet/".$pieces[1]."/".$db11->f("Image_2")."' where product_id = ".$db5->f("product_id"));	
  $db10->query("update auctions set raku_image3 = 'http://image.rakuten.co.jp/rfstore/cabinet/".$pieces[1]."/".$db11->f("Image_3")."' where product_id = ".$db5->f("product_id"));	
  $db10->query("update auctions set raku_image4 = 'http://image.rakuten.co.jp/rfstore/cabinet/".$pieces[1]."/".$db11->f("Image_4")."' where product_id = ".$db5->f("product_id"));	
 
/**************************************************
楽天フォルダー指定イメージパスの変更　2013/07/05
***************************************************/
  $db10->query("update auctions set raku_image1 = '".$image444."' where product_id = ".$db5->f("product_id"));	
  $db10->query("update auctions set raku_image2 = 'http://image.rakuten.co.jp/rfstore/cabinet/".$raku_image_path."/".$db11->f("Image_2")."' where product_id = ".$db5->f("product_id"));	
  $db10->query("update auctions set raku_image3 = 'http://image.rakuten.co.jp/rfstore/cabinet/".$raku_image_path."/".$db11->f("Image_3")."' where product_id = ".$db5->f("product_id"));	
  $db10->query("update auctions set raku_image4 = 'http://image.rakuten.co.jp/rfstore/cabinet/".$raku_image_path."/".$db11->f("Image_4")."' where product_id = ".$db5->f("product_id"));	

/******************************************************
(BPM)イメージパス変更
*******************************************************/
$position->name = "image_path";
$position->value = $image444;  
//$process->send_value($position);
//$process->route_case();  
 
  
//のし対応   
  $str3 = substr($db5->f("yahoo_sinaban"), -1);
  $str4 = "";
/**************************************************
SEX対応
ここもＣＬＡＳＳがよさそう
***************************************************/

  if($str3 == "L"){
	$str4 = "【レディース】";
  }else if($slr3 == "M"){
	$str4 = "【メンズ】";
  }else{
	$str4 = "【ユニセックス】";	
  }   

  $db10->query("update auctions set raku_nosi_taiou = 0");  
/**************************************************
楽天用商品タイトルの設定（問題）
***************************************************/  
  $store_products_title = $db5->f("raku_title");
/*************************************************
@$chk  
**************************************************/
  $chk = preg_match('/■/', $store_products_title);
//商品タイトルがついてなかったらここで新規に設定  
  if($chk==1){
  	$sql55 = "update auctions set raku_goods_name = '".$store_products_title."' where product_id = ".$db5->f("product_id");
  }else{
    $sql55 = "update auctions set raku_goods_name = '".$db5->f("product_id")."■".$store_products_title."".$str4."【中古】' where product_id = ".$db5->f("product_id");
  }
  //print $sql55;
  //exit();
  $db10->query($sql55);//update auctions set raku_goods_name = '".$db5->f("product_id")."■".$store_products_title."','".$str4."','【中古】'");
  $db10->query("update auctions set Product_status = '中古'"); 
    
} 


/**************************************************
BOD設定 YAHOO用ＣＳＶファイルの設定 
in box_csv ボックスＩＤ
***************************************************/
//print $_path.'services/vw_auction_box.php?box_id='.CCGetParam("box_id",0)."&box_csv_template_id=".$_GET['box_csv_template_id'];
//exit();


/***************************************************
@yahoo_csv ここで出力
****************************************************/

//print 'services/yahoocvs.php?box_id='.CCGetParam("box_id",0);
//exit();

if(isset($_GET['box_csv'])){
//ＹＡＨＯＯデータ更新用
$buf = file_get_contents($_path.'services/vw_auction_box.php?box_id='.CCGetParam("box_id",0)."&box_csv_template_id=".$_GET['box_csv_template_id']);
}else{
//YAHOO出品用
$buf = file_get_contents($_path.'services/yahoocvs.php?box_id='.CCGetParam("box_id",0));
}

//print $buf;
//exit();

$buf = mb_convert_encoding($buf, 'sjis', 'sjis');  


/**************************************************
楽天システムからデータ取得
item.csv 取得パス
***************************************************/
$raku_url = $_path2."shop2/vw_auction_rakuten_export.php?a=export&rndVal=0.6296961552060787".$raku_select."&type=csv";
//print $raku_url;
//exit();
//print $raku_url;
//exit();  
/**************************************************
ITEMCATE 取得     （ここのデータを設定する必要有）
DB internet
view item_cat
***************************************************/   
$buf2 =  file_get_contents($raku_url);  
//print $buf2;
//exit();
   
$raku_cat_url = $_path2."shop2/vw_item_cat_export.php?a=export&rndVal=0.6296961552060787".$raku_select."&type=csv";
//exit();
$buf3 =  file_get_contents($raku_cat_url); 

/******************************************************
ログ　イメージパス変更
*******************************************************/
$position->name = "raku_cat_url";
$position->value = $raku_cat_url;  

//$process->send_value($position);
//$process->route_case();  

/**************************************************
楽天カテゴリー用に\くぎり変換  
一度ＵＴＦ－８に変更してから
￥マークを変更して
ＳＪＩＳに戻す
***************************************************/
$buf3 = mb_convert_encoding($buf3, 'utf8', 'sjis');    
$buf3 = preg_replace("/＼/","\\",$buf3);   
$buf3 = mb_convert_encoding($buf3, 'sjis', 'utf8');    

/**************************************************
１２　楽天の文字化けの修正
こうもく、ルール　フロー　
***************************************************/
//$buf2 = preg_replace("/\-/","",$buf2);

/**************************************************
ボックスデータ取得
***************************************************/           
$db = new clsDBinternet();
$sql = "select * from box box_id = ".CCGetParam("box_id",0);
$db->query($sql);
$db->next_record();
$box_id = $db->f("box_name");

/**************************************************
⑯ファイル保存
@intput

$file_rakuten 楽天用ファイルデータ
***************************************************/ 
//ＹＡＨＯＯＣＳＶ
file_put_contents($file_yahoo, $buf);  
file_put_contents($file_rakuten, $buf2);  
file_put_contents($file_rakuten_cat, $buf3);  

 /**************************************************
ボックスネーム取得
***************************************************/ 

//$db = new clsDBinternet();
//$db->query("select box_name from box where box_id = ".CCGetParam("box_id",0));
//$db->next_record();
//$box_name = $db->f("box_name");
//$fire_bug->debug($box_name);

$sql1 = "select * from product_auction where box_id = ".CCGetParam("box_id",0);
$db->query($sql1);

$db3 = new clsDbinternet();
while($db->next_record()){
  $sql2 = "update store_products set created_box_at = CURRENT_DATE,delete_box_at = ADDDATE(CURRENT_DATE,INTERVAL ".$db->f("period")." DAY) where product_id = ".$db->f("project_id");
  $db3->query($sql2);
}

/*********************************************
ボックスＩＤがあれば  出品済みにする
**********************************************/
$db->query("update store_products set status = 3 where box_id = ".CCGetParam("box_id",0));
$db->query("update box set zip_status = 1 where box_id = ".CCGetParam("box_id",0));
$db->query("update box set zip_name = '".$pieces[1].".zip' where box_id = ".CCGetParam("box_id",0));
$db->query("update box set zip_name = '".$raku_image_path.".zip' where box_id = ".CCGetParam("box_id",0));

/*********************************************
ボックスＩＤがあれば　フオルダーを作成してimage 作成
**********************************************/
if(CCGetParam("box_zip",0) != ""){

$listfile = system("chmod -R 777 tmp",$rtf);
$listfile = system("chmod -R 777 tmp_raku",$rtf);  
$listfile = system("chmod -R 777 ritem",$rtf);
$listfile = system("chmod -R 777 cabinet",$rtf);  

//yahoo_copy
$listfile = system("cp -rf ../services/image/{$box_name}/".$pieces[1]."/*.jpg ./tmp/",$rtf);
//yhoo_ image_4 delte rm -rf ./tmp/*_4.jpg
/********************************************
delte yahoo_image
*********************************************/
$listfile = system("rm -rf ./tmp/*_4.jpg",$rtf);
$listfile = system("rm -rf ./tmp/*_5.jpg",$rtf);

$listfile = system("cp -rf ../services/image/{$box_name}/".$pieces[1]."/*.jpg ./tmp_raku/",$rtf); 
$listfile = system("cp -rf ../services/image/{$box_name}/".$pieces[1]."/*.jpg ./cabinet/images/{$box_name}/",$rtf);
//楽天イメージでのコピー
$listfile = system("cp -rf ../services/image/{$box_name}/".$pieces[1]."/*.jpg ./cabinet/images/{$raku_image_path}/",$rtf);
$listfile = system("cp -rf ../services/image/{$box_name}/".$pieces[1]."/*.jpg ../yahoo_image/",$rtf);
/*****************************************
//IFRAME用画像作成
//$makeImage->makezip($pieces[1]);        
******************************************/
                          //       define(BOX_PATH,"../services/image/{$box_name}/".$pieces[1]."/iframe"");
//system("rm -rf 100 200 300 400 500 600 700 800 900 1000",$a); 

//$log =  "mkdir ./combra/image/{$box_name}";
//eixt();
//$position->name = "raku_image_path";
//$position->value = $log;
//プセスにlogを取る  
//$process->send_value($position);
//RUTINGOCSEA
//$process->route_case();

//$listfile = system("mkdir ./combra/image/{$box_name}",$a);  
//$listfile = system("mkdir ./combra/image/{$box_name}/iframe",$a);

//exit();

/**************************************************************
ここでＩＦＲＥＭＥ用のフォルダーを全て作成する
***************************************************************/
$listfile = system("mkdir ../services/image/{$box_name}",$a);
$listfile = system("mkdir ../services/image/{$box_name}/iframe",$a);
$logfile->log("mkdir ../services/image/{$box_name}/iframe");
$logfile->log("mkdir ../services/image/{$box_name}/iframe/500");
$listfile = system("mkdir ../services/image/{$box_name}/iframe/100",$a);
$listfile = system("mkdir ../services/image/{$box_name}/iframe/200",$a);
$listfile = system("mkdir ../services/image/{$box_name}/iframe/300",$a);
$listfile = system("mkdir ../services/image/{$box_name}/iframe/400",$a);
$listfile = system("mkdir ../services/image/{$box_name}/iframe/500",$a);

     $logfile->log("mkdir ../services/image/{$box_name}/iframe/500");
$listfile = system("mkdir ../services/image/{$box_name}/iframe/600",$a);
$listfile = system("mkdir ../services/image/{$box_name}/iframe/700",$a);
$listfile = system("mkdir ../services/image/{$box_name}/iframe/800",$a);
$listfile = system("mkdir ../services/image/{$box_name}/iframe/900",$a);
$listfile = system("mkdir ../services/image/{$box_name}/iframe/1000",$a);
//楽天用ＩＦＲＥＭＥフォルダー

/**************************************************************
ここでそれぞれの画像をフォルダーにコピーする
***************************************************************/

$listfile = system("mkdir ./combra/image/{$box_name}/iframe/500",$a);//楽天用フォルダー
//$listfile = system("/bin/cp -rf ../services/image/{$box_name}/".$pieces[1]."/*.jpg ../services/image/{$box_name}/iframe/100",$a);
//$listfile = system("/bin/cp -rf ../services/image/{$box_name}/".$pieces[1]."/*.jpg ../services/image/{$box_name}/iframe/200",$a);
//$listfile = system("/bin/cp -rf ../services/image/{$box_name}/".$pieces[1]."/*.jpg ../services/image/{$box_name}/iframe/200",$a);
//$listfile = system("/bin/cp -rf ../services/image/{$box_name}/".$pieces[1]."/*.jpg ../services/image/{$box_name}/iframe/300",$a);
//$listfile = system("/bin/cp -rf ../services/image/{$box_name}/".$pieces[1]."/*.jpg ../services/image/{$box_name}/iframe/400",$a);
//$listfile = system("/bin/cp -rf ../services/image/{$box_name}/".$pieces[1]."/*.jpg ../services/image/{$box_name}/iframe/500",$a);
$listfile = system("mkdir ./combra/image/{$box_name}/iframe/500",$a);//楽天用フォルダー
$listfile = system("/bin/cp -rf ../services/image/{$box_name}/".$pieces[1]."/*.jpg ./combra/image/{$box_name}/iframe/500",$a);
$listfile = system("/bin/cp -rf ../services/image/{$box_name}/".$pieces[1]."/*.jpg ../services/image/{$box_name}/iframe/600",$a);
//$listfile = system("/bin/cp -rf ../services/image/{$box_name}/".$pieces[1]."/*.jpg ../services/image/{$box_name}/iframe/700",$a);
//$listfile = system("/bin/cp -rf ../services/image/{$box_name}/".$pieces[1]."/*.jpg ../services/image/{$box_name}/iframe/800",$a);
//$listfile = system("/bin/cp -rf ../services/image/{$box_name}/".$pieces[1]."/*.jpg ../services/image/{$box_name}/iframe/900",$a);
//$listfile = system("/bin/cp -rf ../services/image/{$box_name}/".$pieces[1]."/*.jpg ../services/image/{$box_name}/iframe/1000",$a);

//$listfile = system("mogrify -resize 100x100 -background white -gravity center -extent 100x100 ../services/image/{$box_name}/iframe/100/*.jpg",$a);
//$listfile = system("mogrify -resize 200x200 -background white -gravity center -extent 200x200 ../services/image/{$box_name}/iframe/200/*.jpg",$a);
//$listfile = system("mogrify -resize 300x300 -background white -gravity center -extent 300x300 ../services/image/{$box_name}/iframe/300/*.jpg",$a);
//$listfile = system("mogrify -resize 400x400 -background white -gravity center -extent 400x400 ../services/image/{$box_name}/iframe/400/*.jpg",$a);
$listfile = system("mogrify -resize 500x500 -background white -gravity center -extent 500x500 ../services/image/{$box_name}/iframe/500/*.jpg",$a);
//iframe用ＺＩＰファイルの作成
//$listfile = system("mogrify -resize 500x500 -background white -gravity center -extent 500x500 ./combra/image/{$box_name}/iframe/500/*.jpg",$a);
$listfile = system("mogrify -resize 600x600 -background white -gravity center -extent 600x600 ../services/image/{$box_name}/iframe/600/*.jpg",$a);
//$listfile = system("mogrify -resize 700x700 -background white -gravity center -extent 700x700 ../services/image/{$box_name}/iframe/700/*.jpg",$a);
//$listfile = system("mogrify -resize 800x800 -background white -gravity center -extent 800x800 ../services/image/{$box_name}/iframe/800/*.jpg",$a);
//$listfile = system("mogrify -resize 900x900 -background white -gravity center -extent 900x900 ../services/image/{$box_name}/iframe/900/*.jpg",$a);
//$listfile = system("mogrify -resize 1000x1000 -background white -gravity center -extent 1000x1000 ../services/image/{$box_name}/iframe/1000/*.jpg",$a); 


//画像サイズ５００を test333 にコピー

/***************************************************
FTPでファイルを送る場合
FTP用フォルダーにファイルコピー
****************************************************/

$listfile = system("/bin/cp -rf ../services/image/{$box_name}/iframe/500 /var/www/html/test333",$a);
$logfile->log("/bin/cp -rf ../services/image/{$box_name}/iframe/500 /var/www/html/test333");

// 

/*-------------------------------------
FTPで画像データをFTPサーバーへアップ

*  プロパティセット
*  サーバー
*  ユーザーネーム
*  ユーザーパス
*  リモートパス
---------------------------------------*/
  $ftp_server = '103.3.188.103';       //ftpサーバーアドレス
  $ftp_user_name = 'miyata';    //ユーザー名
  $ftp_user_pass = '1qaz2wsx3edc@@@';    //パスワード
  $remote_dir = '/var/www/html/rakuten/';               //サーバー側ディレクトリパス
  $local_dir = '/var/www/html/shop/services/image/{$box_name}/iframe/500/';   //ローカル側ディレクトリパス
  $mode = true;                    //オーバーライド
  $logfile->log("/var/www/html/shop/services/image/{$box_name}/iframe/500/");

  /*-------------------------------------
  *  実行オブジェクト
  ---------------------------------------*/
  /*
  $test_init2 = new ftp_dir_put(
    $ftp_server,
    $ftp_user_name,
    $ftp_user_pass,
    $remote_dir,
    $local_dir,
    $mode
  );
  */

 
$test = system("rm -rf ./cabinet/images/{$box_name}",$rtf);
/**************************************************************
【修正】2014/02/12 ＺＩＰ作成パス１
***************************************************************/
$zip_path = "cp -rf ../services/image/{$box_name}/".$pieces[1]."/*.jpg ./cabinet/images/{$raku_image_path}/";


//ログスタート
$command = "mogrify -resize 132x200 -background white -gravity center -extent 132x200 ./cabinet/images/{$raku_image_path}/*.jpg";

$logfile->log($command); 
$listfile = system("mogrify -resize 132x200 -background white -gravity center -extent 132x200 ./cabinet/images/{$raku_image_path}/*.jpg",$a);

/******************************************************
ログ　イメージパス変更
*******************************************************/
$position->name = "zip_path";
$position->value = $zip_path;  

$listfile = system("cp ".$pieces[1].".csv ./tmp/".$box_name.".csv");
$listfile = system("cp item.csv ./tmp_raku/item.csv");
$listfile = system("cp item.csv ./ritem/batch/item.csv");
$listfile = system("cp item-cat.csv ./ritem/batch/item-cat.csv");  

$listfile = system("chmod 777 tmp",$rtf);
$listfile = system("chmod 777 tmp_raku",$rtf);  
$listfile = system("chmod -R 777 ritem",$rtf);
$listfile = system("chmod -R 777 cabinet",$rtf);

$listfile = system("rm -rf ".$box_name.".zip",$rtf); 
$listfile = system("rm -rf rakuten.zip",$rtf); 
//YAHOOCSVＺＩＰの作成
$listfile = system("zip ".$box_name.".zip -j ./tmp/*.jpg ./tmp/*.csv >/dev/null 2&>1",$rtf); 
$listfile = system("zip -r rakuten.zip ./ritem/ ./cabinet/ >/dev/null 2&>1",$rtf); 
                                                      
}
/*---------------------------------------------------
FTPUPLOAD
-----------------------------------------------------*/
function FTPupload($ftp, $remote_file, $file)
{ 
	    print "FTP接続設定";
        print $ftp['ftp_user_name'].$ftp['ftp_user_pass'];
        
        // 接続を確立する
        $conn_id = ftp_connect($ftp['ftp_server'],16910)or die("Unable to connect to server.");

if($conn_id){
	print($conn_id);
print "接続ＯＫ<BR>";	
}else{
print "接続ＮＯ<BR>";
}

        // ユーザ名とパスワードでログインする
       if(!$login_result = ftp_login($conn_id, $ftp['ftp_user_name'], $ftp['ftp_user_pass'])){
       		echo "error this is a probrem";
       };

		// パッシブモードをオンにする
		ftp_pasv($conn_id, true);
        // ファイルをアップロードする
        if (!ftp_put($conn_id, $remote_file, $file, FTP_BINARY)) {
                echo "ライン 1047 There was a problem while uploading $file\n";
                exit;
        }

        // 接続を閉じる
        //ftp_close($conn_id);
}


$file2 = $box_name.".zip";
print $file2;

//header("Content-type: application/zip");
//header("Content-Disposition: attachment; filename=$file");
//readfile($file);
		$db = new clsDBinternet();
  		$user_id = CCGetUserID();
		$process = "YAHOOCSVZIP作成";
		//$op_date = date("Y-m-d H:i:s", time());
		$op_date = date("Ymdhis");
		$db->query("insert into log (user_id,template_name,excute,operation_date) values (".$user_id.",'/services/yahoocsv.phpZIPDOWNLOAD".$file2."','YAHOOCSVZIPファイル作成”','".$op_date."')");

//print $box_name."<BR>";
$Redirect = "./../download_zip.php?file_name=".$file2;
header("Location: " . $Redirect);
//unset($Tpl);
//exit;

//End Go to destination page

//Show Page @1-B8D820E8
$shopsetting->Show();
$makeImage->Show();
$Tpl->block_path = "";
$Tpl->Parse($BlockToParse, false);
if (!isset($main_block)) $main_block = $Tpl->GetVar($BlockToParse);
$main_block = CCConvertEncoding($main_block, $FileEncoding, $TemplateEncoding);
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeOutput", $MainPage);
if ($CCSEventResult) echo $main_block;
//End Show Page

//Unload Page @1-40B18AEE
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
$shopsetting->Class_Terminate();
unset($shopsetting);
$makeImage->Class_Terminate();
unset($makeImage);
unset($Tpl);
//End Unload Page
 


?>
