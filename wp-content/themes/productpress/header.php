<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <!-- Title -->
        <!-- Character set -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <!-- Configure viewport for mobile / tabled devices -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <!-- Define keywords for search engines -->
        <meta name="keywords" content="Gumroad, WordPress, Membership">
        <!-- Define a description of your web page -->
        <meta name="description" content="Turn WordPress into a membership site using Gumroad">
        <!-- Shorcut icon -->
        <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png">
        <!-- Apple Touch Icon  -->
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo esc_url( get_template_directory_uri() ); ?>/apple-touch-icon-precomposed.png">
        <!-- Call Google fonts -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Quicksand:300,400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style/font-awesome.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style/animate.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style/style.css"/>
        <!-- Additional color variations ( uncomment to acitvate ) -->
        <!-- YOUR CUSTOM STYLES: <link rel="stylesheet" type="text/css" href="style/customize.css" /> -->
        <!-- MING: <link rel="stylesheet" type="text/css" href="style/colors/ming.css" /> -->
        <!-- LYNCH: <link rel="stylesheet" type="text/css" href="style/colors/lynch.css" /> -->
        <!-- POMEGRANATE: <link rel="stylesheet" type="text/css" href="style/colors/pomegranate.css" /> -->
        <!-- LIGHT SEE GREEN: <link rel="stylesheet" type="text/css" href="style/colors/lightseagreen.css" /> -->
        <!-- BLACK AND WHITE: <link rel="stylesheet" type="text/css" href="style/colors/black-white.css" />
<!-- ROSE: <link rel="stylesheet" type="text/css" href="style/colors/rose.css" /> -->
        <!-- SANDSTORM: <link rel="stylesheet" type="text/css" href="style/colors/sandstorm.css" /> -->
        <!-- AQUAMARINE: <link rel="stylesheet" type="text/css" href="style/colors/aquamarine.css" /> -->
        <!-- WHITE: <link rel="stylesheet" type="text/css" href="style/colors/white.css" /> -->
        <!-- DARK: <link rel="stylesheet" type="text/css" href="style/colors/dark.css" /> -->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body>