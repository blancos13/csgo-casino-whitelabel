<?php
$url = 'https://staging.slotegrator.com/api/index.php/v1/games/init';

$merchantId = '';
$merchantKey = '';
$nonce = md5(uniqid(mt_rand(), true));
$time = time();

$headers = [
  'X-Merchant-Id' => $merchantId,
  'X-Timestamp' => $time,
  'X-Nonce' => $nonce,
];
//let data = await fetchData(`/softswiss/getDemoGame/${SLOTS_GAME_PROVIDER}/${SLOTS_GAME_ID}`);
$session_id = uniqid();


$requestParams = [
  'currency' => 'EUR',
  'game_uuid' => '0b6e2e38d76c4a40bf6ab7235f92c5e7',
  'player_id' => 'fd25da4c-e67b-462a-a784-27086c199dc3',
  'language' => 'en',
  'player_name' => '56454645645',
  'session_id' => '56454645645',
  'return_url' => 'https://growbet.cc/slots',
];

$mergedParams = array_merge($requestParams, $headers);
ksort($mergedParams);
$hashString = http_build_query($mergedParams);

$XSign = hash_hmac('sha1', $hashString, $merchantKey);

ksort($requestParams);
$postdata = http_build_query($requestParams);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'X-Merchant-Id: '.$merchantId,
  'X-Timestamp: '.$time,
  'X-Nonce: '.$nonce,
  'X-Sign: '.$XSign,
  'Accept: application/json',
  'Enctype: application/x-www-form-urlencoded',
));
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
$response = json_decode($result, true);

$gameURL = $response['url'];
echo $gameURL;
//echo $gameURL;
?>
