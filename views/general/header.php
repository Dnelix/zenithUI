<?php
    if (isset($_POST['whouser'])) { $_SESSION['who'] == '_user'; }
    else if (isset($_POST['whoadmin'])) { $_SESSION['who'] == '_admin'; }
?>
                
                <div class="nk-header nk-header-fixed is-light" id="nav-head">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="home" class="logo-link">
                                    <img class="logo-light logo-img" src="assets/images/logo.png" srcset="assets/images/logo.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="assets/images/logo-dark.png" srcset="assets/images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div>

                            <div class="nk-header-search ms-3 ms-xl-0">
                                <em class="icon ni ni-search"></em>
                                <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search anything">
                            </div>


                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <!--li class="dropdown chats-dropdown hide-mb-sm">
                                        <a href="#" class="nk-quick-nav-icon">
                                            <div class="icon-status icon-status-info"><em class="icon ni ni-comments"></em></div>
                                        </a>
                                    </li-->

                                    <li class="">
                                        <a href="#" onClick="changeSiteTheme('light')" class="nk-quick-nav-icon "><em class="icon ni ni-sun"></em></a>
                                    </li>
                                    <li class="">
                                        <a href="#" onClick="changeSiteTheme('dark')" class="nk-quick-nav-icon "><em class="icon ni ni-moon-fill"></em></a>
                                    </li>

                                    <!--li class="dropdown language-dropdown d-none d-sm-block me-n1">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="quick-icon border border-light"><img class="icon" src="assets/images/flags/english-sq.png" alt=""></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="language-list">
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="assets/images/flags/english.png" alt="" class="language-flag">
                                                        <span class="language-name">English</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li-->

                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em></div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar"><span>AB</span></div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                                        <span class="sub-text">info@softnio.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="profile"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="profile&sub=security"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a href="profile&sub=security"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

<script>
    function switchWho(who){
        var web = '<?= $c_website; ?>';
        var url = web+"controllers/sessions.php";
        var formData = {"who":who};

        AJAXcall("POST", url, formData, (r)=>{handleResponseMsg(r, 'reload');});
    }

</script>