<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="shortcut icon" href="<?= base_url() ?>front_assets/images/favicon.png">
    <title>Virtual Conference & Trade Show</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url() ?>front_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>front_assets/vendor/fontawesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="<?= base_url() ?>front_assets/vendor/animateit/animate.min.css" rel="stylesheet">

    <!-- Vendor css -->
    <link href="<?= base_url() ?>front_assets/vendor/owlcarousel/owl.carousel.css" rel="stylesheet">
    <link href="<?= base_url() ?>front_assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Template base -->
    <link href="<?= base_url() ?>front_assets/css/theme-base.css" rel="stylesheet">

    <!-- Template elements -->
    <link href="<?= base_url() ?>front_assets/css/theme-elements.css" rel="stylesheet">

    <!-- Responsive classes -->
    <link href="<?= base_url() ?>front_assets/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- Template color -->
    <link href="<?= base_url() ?>front_assets/css/color-variations/blue.css" rel="stylesheet" type="text/css" media="screen" title="blue">

    <!-- LOAD GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,800,700,600%7CRaleway:100,300,600,700,800" rel="stylesheet" type="text/css"/>

    <!-- CSS CUSTOM STYLE -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>front_assets/css/custom.css" media="screen"/>
    <!--VENDOR SCRIPT-->
    <script src="<?= base_url() ?>front_assets/vendor/jquery/jquery-1.11.2.min.js"></script>
    <script src="<?= base_url() ?>front_assets/vendor/plugins-compressed.js"></script>

    <link href="<?= base_url() ?>assets/alertify/alertify.core.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url() ?>assets/alertify/alertify.default.css" rel="stylesheet" type="text/css"/>
    <style>
        @media (min-width: 1200px) {
            .container {
                width: 1300px;
            }
        }

        @media (min-width: 1400px) {
            .container {
                width: 1450px;
            }
        }

        @media (min-width: 1600px) {
            .container {
                width: 1600px;
            }
        }

        @media (min-width: 1800px) {
            .container {
                width: 1700px;
            }
        }

        @media (min-width: 1900px) {
            .container {
                width: 1850px;
            }
        }

        @media (min-width: 2200px) {
            .container {
                width: 2400px;
            }
        }

        .button.black-light {
            border-color: #679B41;
        }


        #header-wrap {
            border-top: 5px solid #679b41;
            height: 100px !important;
            padding: 16px 120px;
        }

        .parallax {
            /*height: 909px;*/
            margin-top: 40px;
        }

        .logo2 {
            border-left: 1px solid black;
            float: left;
            padding-left: 5px;
            margin-top: 0px;
            margin-left: 25px;
        }

        .logo2 img {
            object-fit: contain;
            width: 190px;
            height: 70px;
        }  
        .logo2 span {
            position: absolute;
            top: -15px;
            font-family: sans-serif;
            font-size: 8px
        }

        #mainMenu2 {
            margin-right: 100px;
            margin-top: 15px;
        }

        #mainMenu2 .nav {
            height: max-content;
        }

        #mainMenu2 ul li a {
            line-height: 0 !important;
            height: max-content !important;
            font-weight: 600;
            font-size: 13px;
            color: #679b41;
        }

        #mainMenu2 ul li {
            margin-right: 40px;
        }

        #mainMenu2 ul li a:hover {
            background-color: transparent;
            color: #ff5e00;
            cursor: pointer;
        }

        #mainMenu2 ul li:hover ul {
            display: block !important;
        }

        .toolboxCustomDrop {

            display: none;
            background-color: white;
            position: absolute;
            width: 180px;
            box-shadow: 0 0 12px -6px black;
            padding: 11px !important;
            position: absolute;
            z-index: 124214214;
        }

        .toolboxCustomDrop li {
            margin-right: 0 !important;

            font-weight: bold;
        }

        .toolboxCustomDrop li a {
            color: #7a7a7a !important;
            cursor: pointer;
        }

        .toolboxCustomDrop li a:hover {
            color: #ff5e00 !important;

        }

        .toolboxCustomDrop li i {
            font-size: 19px !important;
        }

        .toolboxCustomDrop li:nth-of-type(1n+2) {
            margin-top: 12px;
        }

        @media screen and (max-width: 1290px) {
            #header-wrap {
                padding: 16px 30px;
            }
        }

        @media screen and (max-width: 1200px) {
            #header-wrap {
                padding: 16px 10px;
            }

            #header .container {
                width: 100% !important;
            }

            #mainMenu2 {
                margin-right: 0;
            }

            #mainMenu2 ul li {
                margin-right: 10px;
            }
        }

        @media screen and (max-width: 992px) {
            .parallax {
                margin-top: 0;
            }

            #mainMenu2 .nav {
                background-color: white;
                height: 200px;
                width: 200px;
                float: right;
            }

            .nav-main-menu-responsive {
                height: max-content;
                line-height: 0;
            }

        }

        @media screen and (max-width: 493px) {
            .logo2 {
                margin-left: 5px;
            }

            .logo2 img {
                width: 115px;
            }
        }

    </style>

</head>
<body class="wide">
<!-- WRAPPER -->
<div class="wrapper">
    <!-- HEADER -->
    <header id="header" class="header-transparent header-sticky">
        <div id="header-wrap">
            <div class="container">
                <!--LOGO-->
                <?php
                if ($this->session->userdata('cid') != "") {
                    $profile_data = $this->common->get_user_details($this->session->userdata('cid'));
                    ?>
                    <div id="logo">
                        <a href="<?= base_url() ?>home" class="logo" data-dark-logo="<?= base_url() ?>front_assets/images/logo_new.png">
                            <img src="<?= base_url() ?>front_assets/images/logo_new.png" alt="Polo Logo">
                        </a>
                    </div>
                <?php } else { ?>
                    <div id="logo">
                        <a href="<?= base_url() ?>" class="logo" data-dark-logo="<?= base_url() ?>front_assets/images/logo_new.png">
                            <img src="<?= base_url() ?>front_assets/images/logo_new.png" alt="Polo Logo">
                        </a>
                    </div>
                <?php } ?>
                <?php
                if (isset($sesions_logo)) {
                    ?>
                    <div class="logo2">
                        <span><?=$sponsor_type?></span>
                        <img src="<?= base_url() . "uploads/sessions_logo/" . $sesions_logo ?>" onerror="$(this).parent().remove()">
                    </div>
                    <?php
                }
                ?>
                <!--END: LOGO-->
                <!--MOBILE MENU -->
                <div class="nav-main-menu-responsive">
                    <button class="lines-button x" type="button" data-toggle="collapse" data-target=".main-menu-collapse">
                        <span class="lines"></span>
                    </button>
                </div>
                <!--END: MOBILE MENU -->
                <!--SHOPPING CART -->

                <!--END: SHOPPING CART -->

                <!--NAVIGATION-->
                <?php
                if ($this->session->userdata('cid') != "") {
                    ?>

                    <div class="navbar-collapse collapse main-menu-collapse navigation-wrap">
                        <div class="container">
                            <nav id="mainMenu2" class="main-menu mega-menu">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a target="_blank">TOOLBOX</a>
                                        <ul class="toolboxCustomDrop">
                                            <?php
                                            if (isset($right_bar) && isset($tool_box_status)) {
                                                if ($tool_box_status == "1") {
                                                    if (sessionRightBarControl($right_bar, "questions")) {
                                                        ?>
                                                        <li data-type="questionsSticky"><a data-type2="off"><i class="fa fa-question" aria-hidden="true"></i> ASK QUESTIONS</a></li>
                                                        <?php
                                                    }
                                                    if (sessionRightBarControl($right_bar, "notes")) {
                                                        ?>
                                                        <li data-type="notesSticky"><a data-type2="off"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> TAKE NOTES</a></li>
                                                        <?php
                                                    }
                                                    if (sessionRightBarControl($right_bar, "chat")) {
                                                        ?>
                                                        <li data-type="messagesSticky"><a data-type2="off"><i class="fa fa-comments" aria-hidden="true"></i> CHAT</a></li>
                                                        <?php
                                                    }
                                                    if (sessionRightBarControl($right_bar, "resources")) {
                                                        ?>
                                                        <li data-type="resourcesSticky"><a data-type2="off"><i class="fa fa-comments" aria-hidden="true"></i> RESOURCES</a></li>
                                                        <?php
                                                    }
                                                }
                                            }


                                            ?>
                                        </ul>
                                    </li>
                                    <li><a href="https://yourconference.live/support" target="_blank">HELP DESK</a></li>
                                </ul>


                            </nav>
                        </div>
                    </div>
                    <?php
                }
                ?>


                <!--END: NAVIGATION-->
            </div>
        </div>
    </header>
    <!-- END: HEADER -->
