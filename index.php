<?php
declare(strict_types = 1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


if (isset($_GET["option-from"]) && isset($_GET["option-to"]) && isset($_GET["amount"])) {
    $option_from = $_GET["option-from"];
    $option_to = $_GET["option-to"];
    $amount = $_GET["amount"];
    
    if ($option_from === "EUR" && $option_to === "DZD") {
        $euro_to_dzd = floatval($amount) * 140.82;
        $euro_to_dzd_round = round($euro_to_dzd, 2);
        } else if ($option_from === "DZD" && $option_to === "EUR") {
            $dzd_to_euro = floatval($amount) / 140.82;
            $dzd_to_euro_round = round($dzd_to_euro, 2);
            } else if ($option_from === "EUR" && $option_to === "USD"){
                $euro_to_usd = floatval($amount) * 1.04;
                $euro_to_usd_round = round($euro_to_usd, 2);
            } else if ($option_from === "USD" && $option_to === "EUR"){
                    $usd_to_eur = floatval($amount) / 1.04;
                    $usd_to_eur_round = round($usd_to_eur, 2);
            }
}



require './resources/views/home.php';

?>