<?php
require_once 'PHPUnit/Autoload.php';
require_once 'tips0050.php';

class tips0050Test extends PHPUnit_Framework_TestCase {

	public function testSetAccessKey() {
		$tips0050 = new tips0050;
		
		$tips0050->setAccessKey();
		//値が空でないこと
		$this->assertNotEmpty($tips0050->AccessKey);
	}

	public function testSetSecretAccessKey() {
		$tips0050 = new tips0050;
		
		$tips0050->setSecretAccessKey();
		//値が空でないこと
		$this->assertNotEmpty($tips0050->SecretAccessKey);
	}

	public function testSetIsbn() {
		$tips0050 = new tips0050;
		
		$tips0050->setIsbn();
		//値が空でないこと
		$this->assertNotEmpty($tips0050->Isbn);
	}

	public function testCallAws() {
		$tips0050 = new tips0050;
		$tips0050->callAws();

		//オブジェクトが指定する属性を持っているか
		$this->assertObjectHasAttribute('result',$tips0050);
		//配列に指定するキーをもっているか
		$this->assertArrayHasKey('Item',$tips0050->result);
		//
		//文字列が正規表現にマッチするか
		$this->assertRegExp('/[0-9]*/',$tips0050->result['Item'][0]['SalesRank']);
		//文字列が正規表現にマッチするか
		$this->assertRegExp('/^(https?|ftp)(:\/\/[-_.!~*\'()a-zA-Z0-9;\/?:\@&=+\$,%#]+)$/',$tips0050->result['Item'][0]['DetailPageURL']);
	}

}
?>