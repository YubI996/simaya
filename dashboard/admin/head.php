<?php 
    include_once("../../assts/fctn/serv-conf.php");

    //check auth
    if (isset($_SESSION["userauth_token-key"]) AND $_SESSION["userauth_token-key"] == md5(KEY)) {
        
    } else {
        session_destroy();
        header("location: " . BASE_URL);
    } 
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Simayabatik - Rumah Layanan Bantuan Politik</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL ?>assets/img/favicon.ico">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/bootstrap.min.css">
    <!-- Font Awesome CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/owl.transitions.css">
    <!-- users section CSS
        ============================================ -->
    <!-- <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/colors/colors.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/colors/palette-gradient.css"> -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/users/users.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/metisMenu/metisMenu-vertical.css">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/datapicker/datepicker3.css">
    <!-- dropzone CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/form/all-type-forms.css">
    <!-- accordions CSS
         ============================================ -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/accordions.css">
    <!-- buttons CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/buttons.css">
    <!-- notifications CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/notifications/Lobibox.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/notifications/notifications.css">
    <!-- modals CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/modals.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assts/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo BASE_URL ?>assts/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- set base url
        ============================================ -->
    <base href="">
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <?php include_once('../../lmnts/dsh-sdbr.php'); ?>

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="./"><img class="main-logo" src="../assts/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">

                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="fa fa-bars"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n" style="vertical-align: middle;">
                                            <h4 style="color: white; padding: 15px 10px; margin: 0 !important;">
                                                <i>DASHBOARD ADMIN</i>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu pull-right" style="margin: 0 !important">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="indicator-nt"></span></a>

                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <!--li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li-->
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="nav-item" >
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                        <span class="admin-name"><?php echo $_SESSION["access-login"]; ?></span>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="fa fa-user author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        <li><a href="#"><span class="fa fa-cog author-log-ic"></span>Settings</a>
                                                        </li>
                                                        <li><a onclick="logClick()" style="cursor: pointer;"><span class="fa fa-lock author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li style="padding: 0px 10px;"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <!-- jquery
        ============================================ -->
    <script src="<?php echo BASE_URL ?>assts/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="<?php echo BASE_URL ?>assts/js/bootstrap.min.js"></script>
