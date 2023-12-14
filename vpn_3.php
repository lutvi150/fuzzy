<?php
// Get real visitor IP behind CloudFlare network

// error_reporting(E_ALL);
// ini_set('display_errors', 1);
function getUserIP()
{
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if (filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }

    return $ip;
}



$user_ip = getUserIP();
$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://blackbox.p.rapidapi.com/v2/obj/" . $user_ip,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: blackbox.p.rapidapi.com",
        "X-RapidAPI-Key: b1c2b7cb1bmsh8b339bdf28dfbc4p1562a2jsn1ece4484ea4e"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $response = json_decode($response);
    if (property_exists($response, 'sugestion')) {
        if ($response->suggestion == 'block') {
            // taroh link disini
        }
    } else {
        echo json_encode(['status' => 'something wrong']);
    }
}
