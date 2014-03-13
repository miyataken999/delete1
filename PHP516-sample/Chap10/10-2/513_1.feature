Feature:正規ユーザのみログインを許可したい

Scenario:ユーザのログイン
	Given ログイン画面が表示されている　
	And "login"に"shuwa"と入力する
	And "password"に"system"と入力する
	When loginとpasswordの組み合わせが正しい
	Then "ログイン成功"と表示される