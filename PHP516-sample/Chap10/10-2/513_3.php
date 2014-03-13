<?php
class loginCheck {
	public function init() {
		//実際にはここでログイン用のIDとパスワードのHTTP変数を受け取る
		$this->strLogin = "shuwa";	
		$this->strPassword = "system";
	}

	public function inputCheck() {
		//バリデーションチェック
		if (!$this->strLogin) {	
			throw new Exception('no input Login ID');
		}
		if (!$this->strPassword) {
			throw new Exception('no input Password');
		}
	}

	public function loginPasswordCheck() {
		//実際にはここでDB等のユーザテーブルと、ログインID及びパスワードをチェックする
		if (($this->strLogin == "shuwa") && ($this->strPassword == "system")) {	
			$this->loginFlg = true;
		} else {
			$this->loginFlg = false;
			throw new Exception('loginPasswordCheck Failed.');
		}
	}
	
	public function loginSuccess() {
		if ($this->loginFlg) {
			//ログイン成功画面出力
			echo "ログイン成功";
		} else {
			//ログイン失敗画面出力
			throw new Exception('ログイン失敗');
		}
	}	
}
?>