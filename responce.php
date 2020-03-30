<?php
$responce =  file_get_contents("https://npiregistry.cms.hhs.gov/api/?number=".$_GET["npi"]."&version=2.1");

$json = json_decode($responce);
// $orgName = $json["results"][0]["number"];
// print_r($orgName);

print_r($json);
?>
