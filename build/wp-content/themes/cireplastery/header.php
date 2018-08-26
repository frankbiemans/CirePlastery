<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset='<?php bloginfo( 'charset' ) ?>'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <title><?php wp_title( ' - ', 1, 'right' ); bloginfo( 'name' ); ?></title>

    <link rel='shortcut icon' href='<?php bloginfo( 'template_url' ) ?>/images/favi.ico'>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'template_url' ) ?>/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo( 'template_url' ) ?>/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo( 'template_url' ) ?>/images/icons/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo( 'template_url' ) ?>/images/icons/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
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
    get_template_part('partials/analyticstracking');
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
    <?php //get_template_part('partials/cookie-banner'); ?>
    <div id="master-wrapper" style="opacity: 0;">

        <div class="master-wrapper__inner">
        <nav class="nav-holder nav-holder--desktop d-md-block">
            <?php get_template_part('partials/nav-menu'); ?>
        </nav>

        <header class="header">
            <div class="header__inner">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-12 col-md offset-lg-2">
                            <?php if(is_front_page()){ ?>
                                <div class="title-addon title-addon--01 wp-fade-only-in"><span>Home</span></div>
                            <?php } ?>
                            <h1 class="text-transition"><?php the_title(); ?></h1>
                        </div>
                        <?php if(is_front_page()){ ?>
                            <div class="col col-xl-4 offset-xl-1">
                                <?= wpautop(apply_filters('the_content', get_post_field('post_content', 2))); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </header>
