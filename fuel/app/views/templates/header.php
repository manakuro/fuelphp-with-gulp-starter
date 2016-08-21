<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $title; //echo View::get('title', __('site.title')); ?></title>
        <meta name="keywords" content="" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content="Home" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="" />
        <meta property="og:url" content="" />
        <meta property="og:description" content="" />

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <?php Asset::add_path('assets/dist/', array('css', 'js', 'img')); ?>

        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,100italic,100|Pacifico|Oswald:400,700,400italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

        <link rel="stylesheet" href="assets/dist/css/vendor.min.css">

        <?php echo Asset::css('main.css');?>
        
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->