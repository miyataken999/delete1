<?php


print str_replace("$amp;","&", "$amp;aaaaaaaaaaaaa") . "\n";
exit();
/* EDIT EMAIL AND PASSWORD */
$EMAIL      = "sdkfjoadfa1121";
$PASSWORD   = "fokahbjt56";
function cURL($url, $header=NULL, $cookie=NULL, $p=NULL)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, $header);
    curl_setopt($ch, CURLOPT_NOBODY, $header);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    if ($p) {
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $p);
    }
    $result = curl_exec($ch);
    if ($result) {
        return $result;
    } else {
        return curl_error($ch);
    }
    curl_close($ch);
    $info = curl_getinfo ($ch);
var_dump ($info);
}
//$a = cURL("https://glogin.rms.rakuten.co.jp/",true,null,"module=BizAuth&action=BizAuthCustomerAttest&sp_id=1&login_id=sdkfjoadfa1121&passwd=fokahbjt56&submit=%B3%DA%C5%B7%B2%F1%B0%F7%A4%CE%C7%A7%BE%DA%A4%D8");
preg_match('%Set-Cookie: ([^;]+);%',$a,$b);
$EMAIL = "nushiro@urlounge.co.jp";
$PASSWORD = "kldai6ks8";
//$c = cURL("https://glogin.rms.rakuten.co.jp/",true,$b[1],"module=BizAuth&action=BizAuthUserAttest&biz_login_id=616101cc1a3ff519cfa98366d38596c9c9e7964e47f9e5b6180d&business_id=b2e9dc1af1faa11ae27861deeca916eaf03c55&sp_id=1&user_id=nushiro%40urlounge.co.jp&user_passwd=kldai6ks8&submit=%A5%ED%A5%B0%A5%A4%A5%F3");
preg_match_all('%Set-Cookie: ([^;]+);%',$c,$d);
for($i=0;$i<count($d[0]);$i++)
    $cookie.=$d[1][$i].";";
/*
NOW TO JUST OPEN ANOTHER URL EDIT THE FIRST ARGUMENT OF THE FOLLOWING FUNCTION.
TO SEND SOME DATA EDIT THE LAST ARGUMENT.
*/
//$c = cURL("https://mainmenu.rms.rakuten.co.jp/?act=login&sp_id=1",null,$cookie,null);
print "<pre>";
print "----------------".$c;
print "</pre>";
exit();
preg_match_all('%Set-Cookie: ([^;]+);%',$c,$d);
for($i=0;$i<count($d[0]);$i++)
    $cookie.=$d[1][$i].";";
echo $cookie;
echo cURL("https://mainmenu.rms.rakuten.co.jp/",true,$cookie,"");





?>