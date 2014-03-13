<?php
/**
 * Generated by PHPUnit on 2011-07-08 at 03:34:41.
 */
class tips0050 {

    /**
     * @todo Implement setAccessKey().
     */
    public function setAccessKey() {
    	return $this->AccessKey = "AKIAJG7QWGGEX3CG5DCA";
    }

    public function setSecretAccessKey() {
    	return $this->SecretAccessKey = "yJtiDFuez9SpAxl421uzgWupAagY43y+FU6HECSH";
    }

    public function setIsbn(){
    	return $this->Isbn = "4798008850";
    }

	public function callAws() {

		require_once("Services/Amazon.php");

		$access_key = $this->setAccessKey();
		$secret_access_key = $this->setSecretAccessKey();
		$isbn = $this->setIsbn();

		//Amazon Webサービスオブジェクトを生成
		$amazon = new Services_Amazon($access_key,$secret_access_key);
		$amazon->setLocale('JP');
		
		$options = array(
			'ResponseGroup' => 'ItemAttributes,SalesRank,Images'
		);
		
		//Amazon APIをコール
		$this->result = $amazon->ItemLookup($isbn,$options);
	}
}

$obj = new tips0050();
$obj->callAws();

echo "タイトル：".$obj->result['Item'][0]['ItemAttributes']['Title']."<br />";
echo "出版社:".$obj->result['Item'][0]['ItemAttributes']['Manufacturer']."<br />";
echo "ランキング：".$obj->result['Item'][0]['SalesRank']."位<br />";
echo "リンク：<a href=\"".$obj->result['Item'][0]['DetailPageURL']."\">詳細ページ</a>";

?>