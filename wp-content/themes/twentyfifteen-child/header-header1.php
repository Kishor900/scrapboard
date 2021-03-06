<?php
/*
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
wp_head();
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta property="fb:app_id" content="1442510186051692" />
        <title>ScrapBoard</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo get_stylesheet_directory_uri() . "/css/bootstrap.min.css"; ?>" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo get_stylesheet_directory_uri() . "/css/agency.css"; ?>" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo get_stylesheet_directory_uri() . "/font-awesome/css/font-awesome.min.css"; ?>" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body id="page-top" class="index">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">ScrapBoard</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php wp_nav_menu(array('theme_location' => 'header-menu', 'items_wrap' => '<ul id="exchangable" class="nav navbar-nav navbar-right">                                           <li class="hidden">
                                            %3$s</ul>')); ?>
                    <!--                                      <ul class="nav navbar-nav navbar-right">
                                                            <li class="hidden">
                                                                <a href="#page-top"></a>
                                                            </li>
                                                            <li>
                                                                <a class="page-scroll" href="#services">Services</a>
                                                            </li>
                                                            <li>
                                                                <a class="page-scroll" href="#portfolio">Portfolio</a>
                                                            </li>
                                                            <li>
                                                                <a class="page-scroll" href="#about">About</a>
                                                            </li>
                                                            <li>
                                                                <a class="page-scroll" href="#team">Team</a>
                                                            </li>
                                                            <li>
                                                                <a class="page-scroll" href="#contact">Contact</a>
                                                            </li>
                                                        </ul>-->
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <!-- Header -->
        <header id="main-header" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/img/header-bg.jpg); background-repeat:none;background-attachment:scroll;background-position:center center;-webkit-background-size:cover;-moz-background-size:cover;background-size:cover;-o-background-size:cover;text-align:center;color:#fff">
            <div class="container">
                <div class="intro-text">
                    <div class="intro-lead-in">Welcome To The ScrapBoard!</div>
                    <div class="intro-heading">Crispy scraps for you !</div>
                    <a href="#about" class="page-scroll btn btn-xl">Tell Me More</a>
                </div>
            </div>
        </header>
