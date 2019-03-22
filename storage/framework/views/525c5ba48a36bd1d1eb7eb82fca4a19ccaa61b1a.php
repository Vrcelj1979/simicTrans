<!DOCTYPE html>
<html>
<head>
	<title><?php echo e(config('layouts', 'Finisa2Z')); ?> | <?php echo $__env->yieldContent('title'); ?></title>
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
                            <li><a href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://sr-rs.facebook.com"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="https://www.linkedin.com"><i class="fa fa-linkedin-square"></i></a></li>
                            <li><a href="https://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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