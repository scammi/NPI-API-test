<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://npiregistry.cms.hhs.gov/api/?number=".$_GET["npi"]."&version=2.1");
$result = curl_exec($ch);
print_r($result);

curl_close($ch);

?>
