<?php
$url = 'https://staging.slotegrator.com/api/index.php/v1/balance/notify';

$merchantId = '';
$merchantKey = '';
$nonce = md5(uniqid(mt_rand(), true));
$time = time();
$session_id = uniqid();

$headers = [
  'X-Merchant-Id' => $merchantId,
  'X-Timestamp' => $time,
  'X-Nonce' => $nonce,
];
$requestParams = [
  'session_id' => '56454645645',
  'balance' => '100',
];

$mergedParams = array_merge($requestParams, $headers);
ksort($mergedParams);
$hashString = http_build_query($mergedParams);

$XSign = hash_hmac('sha1', $hashString, $merchantKey);

$postdata = http_build_query($requestParams);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'X-Merchant-Id: '.$merchantId,
  'X-Timestamp: '.$time,
  'X-Nonce: '.$nonce,
  'X-Sign: '.$XSign,
  'Accept: application/json',
  'Enctype: application/x-www-form-urlencoded',
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
$response = json_decode($result, true);

print_r($response);


?>
