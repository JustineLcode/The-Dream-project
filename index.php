<?php
declare(strict_types = 1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$dzd = $_GET["dzd"]; // Conversion dinar Algérien en euro
$dzd_to_euro = floatval($dzd) / 140.82;
$euro= $_GET["euro"]; // Conversion euro en dinar Algérien
$euro_to_dzd = floatval($euro) * 140.82;
require './resources/views/home.php';
?>