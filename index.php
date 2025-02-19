<?php
declare(strict_types = 1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//EUR to DZD
$euro_to_dzd_round = round(floatval($amount) * 140.82, 2);
// DZD to EUR
$dzd_to_euro_round = round(floatval($amount) / 140.82, 2);
// EUR to USD
$euro_to_usd_round = round(floatval($amount) * 1.04, 2);
// USD to EUR
$usd_to_eur_round = round(floatval($amount) / 1.04, 2);
// EUR to YEN
$eur_to_yen_round = round(floatval($amount) * 157.92, 2);
// YEN to EUR
$yen_to_eur_round = round(floatval($amount) / 157.92, 2);
// EUR to SKR
$eur_to_skr_round = round(floatval($amount) * 11.19, 2);
// SKR to EUR
$skr_to_eur_round = round(floatval($amount) / 11.19, 2);
// DZD → USD
$dzd_to_usd_round = round(floatval($amount) * 0.007408, 2);
// DZD → YEN
$dzd_to_yen_round = round(floatval($amount) * 1.12, 2);
// DZD → SKR
$dzd_to_skr_round = round(floatval($amount) * 0.08, 2);
// USD → DZD
$usd_to_dzd_round = round(floatval($amount) / 0.007408, 2);
// USD → YEN
$usd_to_yen_round = round(floatval($amount) * 151.42, 2);
// USD → SKR
$usd_to_skr_round = round(floatval($amount) * 10.74, 2);
// YEN → DZD
$yen_to_dzd_round = round(floatval($amount) / 1.12, 2);
// YEN → USD
$yen_to_usd_round = round(floatval($amount) / 151.42, 2);
// YEN → SKR
$yen_to_skr_round = round(floatval($amount) * 0.07, 2);
// SKR → DZD
$skr_to_dzd_round = round(floatval($amount) / 0.08, 2);
// SKR → USD
$skr_to_usd_round = round(floatval($amount) /10.74, 2);
// SKR → YEN
$skr_to_yen_round = round(floatval($amount) / 0.07, 2);

if (isset($_GET["option-from"]) && isset($_GET["option-to"]) && isset($_GET["amount"])) {
    $option_from = $_GET["option-from"];
    $option_to = $_GET["option-to"];
    $amount = $_GET["amount"];
    
    if ($option_from === "EUR" && $option_to === "DZD") {
        $result=$euro_to_dzd_round;
        } else if ($option_from === "DZD" && $option_to === "EUR") {
            $result=$dzd_to_euro_round;
            } else if ($option_from === "EUR" && $option_to === "USD"){
                $result=$euro_to_usd_round;
            } else if ($option_from === "USD" && $option_to === "EUR"){
                $result=$usd_to_eur_round;
            }
}



require './resources/views/home.php';

?>