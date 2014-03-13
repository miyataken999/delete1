<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>猫認証する</title>
</head>
<body>

<script type="text/javascript">
var passThroughFormSubmit = false;
function MySubmitForm() {
     if (passThroughFormSubmit) {
          return true;
     }
     Asirra_CheckIfHuman(HumanCheckComplete);
     return false;
}
function HumanCheckComplete(isHuman){
     if (!isHuman)
     {
          alert("猫の選択が正しくありません。もう一度チャレンジしてください。");
     }
     else
     {
          passThroughFormSubmit = true;
          formElt = document.getElementById("mainForm");
          formElt.submit();
     }
}
</script>

<form action="448_2.php" method="post" id="mainForm" onsubmit="return MySubmitForm();">
  あなたの氏名: <input type="text" name="yourname"><br />
  <script type="text/javascript" src="./Asirra/AsirraClientSide.js"></script>

  <!--Please select all the cat photos の部分を日本語にするにはマイクロソフトからダウンロードしたjsを直接変更する-->
  <script type="text/javascript" src="./Asirra/AsirraClientSide.js"></script>
  <script type="text/javascript">
    <!--拡大画像の表示位置を指定する。-->
    asirraState.SetEnlargedPosition("bottom");
    asirraState.SetCellsPerRow(6);
  </script>
  <input type="submit" value="Submit">
</form>

</body>
</html>
