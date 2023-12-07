<?php
// Get real visitor IP behind CloudFlare network
error_reporting(E_ALL);
ini_set('display_errors', 1);
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
$IPINFO_API_TOKEN = "fd291889fde211";
$ip = $user_ip;
$url = "https://ipinfo.io/{$ip}?token={$IPINFO_API_TOKEN}";
$details = json_decode(file_get_contents($url));
// Just block VPNs
if ($details->country == "ID") {
    echo "true";
} else {
    echo "you use vpn or not from Indonesia ";
}

// Or we could block all the other types of private / anonymous connections...
// if ($details->vpn || $details->proxy || $details->tor || $details->hosting) {
//     echo "Access Blocked!";
// }
// print_r($details);
// echo $user_ip; // Output IP address [Ex: 177.87.193.134]