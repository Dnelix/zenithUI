<?php
session_start();
date_default_timezone_set('Africa/Lagos');

$page = isset($_GET['page']) ? $_GET['page'] : '';
//ORGANIZATION DETAILS//
$company        = "Zenith Bank";
//$c_website    = "https://investor.ng/";
$c_website      = "http://localhost/2023/zenithUI/"; //trailing slash very important
$c_shortsite    = "investor.ng";
$c_title        = $c_shortsite." - Fast and reliable investment portfolio manager";
$c_tagline      = "Fast and reliable investment portfolio manager";
$c_description  = "Fast and reliable investment portfolio manager";
$c_keywords     = "crypto, invest, save, staking, asset management system, business, money";
$c_email        = "help@".$c_shortsite;
$c_phone        = "+13007182733";
$color_pri      = "#009EF7";
$color_sec      = "#F6FAFB";

//GLOBAL ITEMS //
$bodystyle          = "background-image: url(assets/media/patterns/header-bg.jpg)";
$defaultcurrency    = "&dollar;";

?>