<?php
require_once('controllers/_constants.php');
$doc = 'home'; 
?>

<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Anyaegbunam F. Chinaza - Dnelix">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A comprehensive and detailed documentation of Zenith bank's brand elements for designers and developers.">
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="favicon" href="assets/images/favicon.png">
    <title>Zenith UI - Comprehensive and Detailed Design Documentation</title>
    <link rel="stylesheet" href="assets/css/zenhome.css?ver=3.2.3">
    <link rel="stylesheet" type="text/css" href="assets/css/libs/fontawesome-iconse5ca.css"> 
</head>

<body class="nk-body npc-landing bg-white intro">
    <div class="nk-app-root">
        <div class="nk-main ">

            <?php include_once("views/$doc/navbar.php"); ?>
            <?php include_once("views/$doc/banner.php"); ?>
            <?php include_once("views/$doc/features.php"); ?>
            <?php include_once("views/$doc/foot.php"); ?>
            
            
        </div>
    </div>

</body>    
    

<?php include_once('views/general/inc_foot.php'); ?>