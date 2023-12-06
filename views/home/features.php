<?php
    function showFeature($title, $content, $icon='fa-user', $size='4') {
        return "
        <div class='col-md-$size'>
            <div class='intro-feature-item'>
                <div style='padding:10px'>
                    <a href='#' class='btn btn-lg btn-gray'><em class='fa $icon fa-2x'></em></a>
                </div>
                <div class='intro-feature-info'>
                    <h4 class='title'>$title</h4>
                    <p>$content</p>
                </div>
            </div>
        </div>
        ";
    }
?>
        <div class="intro-section intro-feature bg-white" id="features">
            <div class="container container-ld">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-xl-7">
                        <div class="intro-section-title text-center">
                            <span class="overline-title">--</span>
                            <h2 class="intro-heading-lead title">Content Overview</h2>
                            <div class="intro-section-desc">
                                <p>Here you will find a comprehensive set of guidelines to help you communicate our brand to the world in a consistent and effective manner.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="row intro-feature-list">
                            <?= showFeature(
                                'BRAND IDENTITY',
                                'Learn about the company\'s strategic and customer-centric approach to the highly competitive market, including our focus on identifying our unique value proposition.',
                                'fa-star',
                                '6'
                                ); 
                            ?>
                            <?= showFeature(
                                'CROSS-PLATFORM DESIGN',
                                'Discover how we use high-quality, on-brand visuals to bring our brand to life and create a powerful visual identity that resonates with our audience.',
                                'fa-heart',
                                '6'
                                ); 
                            ?>
                            <?= showFeature(
                                'FRONT-END DEVELOPMENT',
                                'Discover how we use visually appealing and strategically crafted cross-platform codes to bring our brand to life and engage with our audience in impactful ways.',
                                'fa-file',
                                '4'
                                ); 
                            ?>
                            <?= showFeature(
                                'PRINT & OFFLINE MEDIA',
                                'Learn about how we use high-quality, on-brand stationary to represent our brand offline and create a memorable experience for our recipients.',
                                'fa-bolt',
                                '4'
                                ); 
                            ?>
                            <?= showFeature(
                                'BACKEND & APIs',
                                'In this guide, we will introduce you to the key features and functions of the banks\' platforms, and provide you with the tools you need to get up and running quickly.',
                                'fa-arrow-right',
                                '4'
                                ); 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>