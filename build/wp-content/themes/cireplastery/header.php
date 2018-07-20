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
    <style>
        .loading-screen {
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #293939;
            z-index: 9000;
        }
    </style>
</head>
<body <?php body_class(); ?> style="background-color: #293939;">
    <?php //include('cookie-banner.php'); ?>
    <div id="master-wrapper" style="opacity: 0;">

        <div class="master-wrapper__inner">
        <nav class="nav-holder d-none d-md-block">
            <?php include('nav-menu.php'); ?>
        </nav>

        <?php if(is_front_page()){ ?>
            <header class="header">
                <div class="header__inner">
                    <div class="container">
                        <div class="row align-items-end">
                            <div class="col-12 col-md-6 col-lg-6 col-xl-5 offset-lg-2">
                                <div class="title-addon title-addon--01 wp-fade-only-in"><span>Home</span></div>
                                <h1 class="text-transition"><?php the_title(); ?></h1>
                            </div>
                            <div class="col col-xl-4 offset-xl-1">
                                <?= wpautop(apply_filters('the_content', get_post_field('post_content', 2))); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        <?php } ?>