<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset='<?php bloginfo( 'charset' ) ?>'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <title><?php wp_title( ' - ', 1, 'right' ); bloginfo( 'name' ); ?></title>
    <link rel='shortcut icon' href='<?php bloginfo( 'template_url' ) ?>/images/favi.ico'>
    <meta name='description' content='<?php bloginfo('description'); ?>'>
	<link rel='stylesheet' href='<?php bloginfo( 'template_url' ) ?>/style.css' />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>