<?php
error_reporting(0);
session_start();

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <head>
        <title>E-Hospital</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Aplikasi rumah sakit free,rumah sakit" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/numscroller-1.0.js"></script>
        <script type="text/javascript" src="js/highcharts.js"></script>
	   <script type="text/javascript" src="js/exporting.js"></script>

		
        <!-- //js -->


        <!-- fonts -->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>

        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->

        <!--start-date-piker-->
        <script src="js/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#datepicker,#datepicker1").datepicker();
            });
        </script>
        <!--/End-date-piker-->
        <script src="js/responsiveslides.min.js"></script>
        <!--animate-->
        <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <!--//end-animate-->
    </head>
    <body>
        <!-- header -->
        <div class="header wow zoomIn">
            <div class="container">
                <div class="header_left" data-wow-duration="2s" data-wow-delay="0.5s">
                    <ul>
                        <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(+0215)809176282</li>
                        <li><a href="mailto:info@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>E-Hospital@gmail.com</a></li>
                    </ul>
                </div>
                <div class="header_right">
                    <div class="login">
                        <ul>

                            <?php 
                            if(isset($_SESSION['authorized'])) { ?>
                           <li> <span  class="glyphicon glyphicon-user" aria-hidden="true"></span><?php echo $_SESSION['username'];?> </li>&nbsp;
                            <li> <a href="logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>Logout</a></li>&nbsp;
                            <?php }else{?>
                            
                            <li><a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Login</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Signup</a></li>
                            <?php }?>
                            </div>
                                        
                                </div>

                                    
                                		
                                                                   
                        </ul>
                    </div>
                    
        </div>
        <!-- //header -->
        <div class="header-bottom ">
            <div class="container">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        
                        <div class="logo grid">
                            <div class="grid__item color-3">
                                <h1><a class="link link--nukun" href="index.php"><i></i>E-Ho<span>SPI</span>tal</a></h1>
                            </div>
                        </div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <nav class="menu menu--horatio">
                            <ul class="nav navbar-nav menu__list">
                                <?php 
                                
                                if ($_SESSION['level']=='admin'){ ?>
                                <li class="menu__item"><a href="index.php" class="menu__link">Home</a></li>
                                <li class="menu__item"><a href="view_obat.php" class="menu__link">Data Pegawai</a></li> 
                                <li class="menu__item"><a href="view_pasien.php" class="menu__link">Data Suami/Istri</a></li> 
                                <li class="menu__item"><a href="view_dokter.php" class="menu__link">Data Anak</a></li> 
                                <li class="menu__item"><a href="view_obat2.php" class="menu__link">Cetak SKUM</a></li>
                                <li class="menu__item"><a href="setting_data.php" class="menu__link">Setting</a></li>
                                <?php }elseif($_SESSION['level']=='pimpinan'){ ?>
                                <li class="menu__item menu__item--current"><a href="index.php" class="menu__link">Home</a></li>
								<li class="menu__item menu__item--current"><a href="view_obat.php" class="menu__link">Profil Anda</a></li>
								<li class="menu__item menu__item--current"><a href="tampil_user.php" class="menu__link">Setting Akun</a></li>
                                <?php }else{ ?>
								      <li class="menu__item menu__item--current"><a href="index.php" class="menu__link">Home</a></li>
								<?php }?>
                            </ul>
                        </nav>
                    </div>
                </nav>
            </div>
        </div>