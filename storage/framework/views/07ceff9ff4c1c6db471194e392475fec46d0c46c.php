<!DOCTYPE html>
<html>
<head>
    <title><?php echo e(config('layout', 'Finisa2Z')); ?> | <?php echo $__env->yieldContent('title'); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/icons.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
    <link rel="stylesheet" type="text/css" href="css/flexslider.css " />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <!--[if lt IE 8]><!-->
    <link rel="stylesheet" href="ie7/ie7.css">
    <!--<![endif]-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top">
<header>
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 address">
                    <i class="ti-location-pin"></i>Slovenia, 1000 Ljubljana, Zaloška cesta 155
                </div>
                <div class="col-sm-6 social">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">
                    Finisa<span>2Z</span>
                </a>
                <p>Pokličite nas <b>+386 (01) 546 84 00</b></p>
            </div>
            <div class="collapse navbar-collapse navbar-main-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/about">O nas</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Zavarovanja <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/">Avtomobilsko zavarovanje</a></li>
                            <li><a href="/">Osebna zavarovanja</a></li>
                            <li><a href="/">Podjetniška zavarovanja</a></li>
                            <li><a href="/">Premoženjska zavarovanja</a></li>
                            <li><a href="/">Leasing</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Za stranke <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/">Obrazci in dokumenti</a></li>
                            <li><a href="/">Prijava škode</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/advice">Nasveti</a>
                    </li>
                    <li>
                        <a href="/contact">Kontakt</a>
                    </li>
                    <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                        </li>
                        <?php if(Route::has('register')): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                            </li>
                        <?php endif; ?>
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>


<?php echo $__env->yieldContent('content'); ?>

<footer>
    <div class="container">
        <div class="row contact-sec">
            <div class="col-md-5 col-lg-5">
                <h2>Finisa<span>2Z</span></h2>
                <div class="row">
                    <div class="col-sm-6">
                        <p>Slovenia, Zaloška cesta 155
                            <br/>Poštna številka - 1000 Ljubljana</p>
                    </div>
                    <div class="col-sm-6">
                        <ul>
                            <li><a href="#"><i class="fa fa-phone"></i> +386 01 546 84 00</a></li>
                            <li><a href="#"><i class="ti-email"></i> renata.tatalovic@finisa.si</a></li>
                        </ul>
                    </div>
                </div>
                <a href="/contact" class="btn-default">Kontaktirajte nas</a>
            </div>
            <div class="col-md-5 col-lg-5 col-md-offset-2 col-lg-offset-2">
                <h2>Agent<span>Detail</span></h2>
                <div class="row">
                    <div class="col-sm-6">
                        <p>E104 Dharti -2 , Nr Silverstar Mall Chandlodia - Ahmedabad
                            <br/>Zip - 382481</p>
                    </div>
                    <div class="col-sm-6">
                        <ul>
                            <li><a href="#"><i class="fa fa-phone"></i> +91 123 456 7890</a></li>
                            <li><a href="#"><i class="ti-email"></i> info@bootstrapmart.com</a></li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="btn-default">Kontaktirajte Agenta</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-8">
                <ul class="footer-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="#">Compnies represented</a></li>
                    <li><a href="contact-us.html">Contact us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Products</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-lg-2 col-md-offset-2 col-lg-offset-2">
                <ul class="footer-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    Copyright &copy; 2019 <a href="#">Finisa 2Z</a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 text-right">
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/easyResponsiveTabs.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
