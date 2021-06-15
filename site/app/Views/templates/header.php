<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Title -->
    <title><?= esc($pageTitle)?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?=base_url()?>/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <?php echo link_tag('css/star-rating-svg.css'); ?>
    <?php echo link_tag('style.css'); ?>
    

</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <i class="circle-preloader"></i>
        <?=img('img/core-img/salad.png')?>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-between">
                    <!-- Breaking News -->
                    <div class="col-12 col-sm-6">
                        <div class="breaking-news">
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>
                                    <li><a href="#">Hello!</a></li>
                                    <li><a href="#">Welcome to Foodsmart Family.</a></li>
                                    <li><a href="#">Hello Delicious!</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Top Social Info -->
                    <div class="col-12 col-sm-6">
                        <div class="top-social-info text-right">
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar Area -->
        <div class="delicious-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="deliciousNav">

                        <!-- Logo -->
                        <a class="nav-brand" href=""><?=img('img/core-img/logo.jpg')?></a>
                        
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="<?=$manu['home']?>"><?=anchor('home/index','Home')?></li>
                                    <li class="<?=$manu['about']?>"><?=anchor('home/index/about','About Us')?></a></li>
                                    <li class="<?=$manu['blog']?>"><?=anchor('home/index/blog','Blog Post')?></a></li>
                                    <li class="<?=$manu['recipes']?>"><?=anchor('home/index/recipes','Recipes')?></a></li>
                                    <li class="<?=$manu['contact']?>"><?=anchor('home/index/contact','Contact')?></a></li>
                                </ul>

                                <!-- Newsletter Form -->
                                <div class="search-btn">
                                    <?=anchor('user/signin','Login')?> | <?=anchor('user/signup','Signup')?>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->