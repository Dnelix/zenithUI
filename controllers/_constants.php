<?php
session_start();
date_default_timezone_set('Africa/Lagos');

$page = isset($_GET['page']) ? $_GET['page'] : '';
//ORGANIZATION DETAILS//
$company        = "Zenith UI";
//$c_website    = "https://investor.ng/";
$c_website      = "http://localhost/2023/zenithUI/"; //trailing slash very important
$c_shortsite    = "zenithbank.com";
$c_tagline      = "Comprehensive and Detailed Design Documentation";
$c_title        = $company." - ".$c_tagline;
$c_description  = "A comprehensive and detailed documentation of Zenith bank's brand elements for designers and developers.";
$c_keywords     = "Zenith, Bank, Design, Developer, Documentation, API, manual, brand";
$c_email        = "help@".$c_shortsite;
$c_phone        = "+2348165370642";
$color_pri      = "#E3000F";
$color_sec      = "#808285";

//GLOBAL ITEMS //
$bodystyle          = "background-image: url(assets/media/patterns/header-bg.jpg)";
$defaultcurrency    = "&dollar;";

?>