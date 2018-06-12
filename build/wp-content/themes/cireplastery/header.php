<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset='<?php bloginfo( 'charset' ) ?>'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <title><?php wp_title( ' - ', 1, 'right' ); bloginfo( 'name' ); ?></title>
    <link rel='shortcut icon' href='<?php bloginfo( 'template_url' ) ?>/images/favi.ico'>
    
    <meta property="og:site_name" content="<?php wp_title(); ?>" />
    <meta property="og:title" content="<?php wp_title( ' - ', 1, 'right' ); bloginfo( 'name' ); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= get_home_url(); ?>" />
    <?php if(has_post_thumbnail()){ ?>
        <meta property="og:image" content="<?= get_home_url(); ?>" />
    <?php } ?>

    <?php if(!is_plugin_active('wordpress-seo/wp-seo.php')){ ?><meta name='description' content='<?php bloginfo('description'); ?>'><?php }
    wp_head();
    include_once('analyticstracking.php');
    ?>
</head>
<body <?php body_class(); ?>>

    <?php include('cookie-banner.php'); ?>
    
    <header>
    <?php
        include('header-menu.php');
        if(!is_contact_page()){
            include('header-slider.php');
        } else if(is_contact_page()){
            include_once( 'google-maps.php');
        }
    ?>
    </header>
    <main class="my-3">
        <div class="container">
            <div class="row">