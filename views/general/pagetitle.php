    <div class="mt-5 mb-3 p-2">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-head-content">
                <h2 class="nk-block-title fw-normal"><?= ucwords($page); ?></h2>
                <div class="nk-block-des"><p> 
                    <a onclick="javascript:goBack()" class="btn btn-icon btn-sm btn-primary"><em class="icon ni ni-caret-left"></em></a> &nbsp; 
                    <a href="home"> HOME </a> &nbsp; | &nbsp; 
                    <?= strToUpper($page); ?>
                </p></div>
            </div>
        </div>
    </div>
