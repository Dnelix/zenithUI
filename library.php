<?php
include_once('views/general/inc_head.php');
$doc = 'library';
$page = isset($_GET['page']) ? $_GET['page'] : 'vision'; 
?>

<body class="nk-body bg-white npc-default has-sidebar" id='pageBody'>
    <div class="nk-app-root">
        <div class="nk-main ">
            
            <?php include_once('views/general/sidebar.php'); ?>

            <div class="nk-wrap ">
                
                <?php include_once('views/general/header.php'); ?>

                <div class="nk-content">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">

                                <?php include_once('views/general/pagetitle.php'); ?>

                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="card" id="contentCard">
                                            <div class="card-inner">
                                                <!-- Handle Screen Contents -->
                                                <?php
                                                if(!empty($page)){
                                                    if (file_exists("views/$doc/$page.php")) {
                                                        include_once("views/$doc/$page.php");
                                                    } else {
                                                        include_once("views/general/404.php");
                                                    }
                                                } else {
                                                    include_once("views/$doc/vision.php"); 
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>

                <?php include_once('views/general/footer.php'); ?>
                
            </div>
        </div>
    </div>

    <?php include_once('views/modals/countries.php'); ?>
</body>    
    

<?php include_once('views/general/inc_foot.php'); ?>