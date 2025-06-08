<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$universeId = '4019583467';
$url = "https://games.roblox.com/v1/games?universeIds=" . $universeId;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'ArashiyamaProxy/1.0');

// ⚠️ Skip SSL cert check — ONLY for development
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
    http_response_code(500);
    echo json_encode(['error' => 'cURL Error', 'details' => curl_error($ch)]);
} elseif ($http_code !== 200) {
    http_response_code($http_code);
    echo json_encode(['error' => 'Invalid response from Roblox', 'http_code' => $http_code]);
} else {
    echo $response;
}

curl_close($ch);
?>
