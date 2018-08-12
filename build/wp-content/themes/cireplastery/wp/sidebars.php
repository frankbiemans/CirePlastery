<?php

// Zie ook: http://justintadlock.com/archives/2010/11/08/sidebars-in-wordpress

add_action( 'widgets_init', 'register_theme_sidebars' );
function register_theme_sidebars() {
    register_sidebar(array(
        'name' => __('Post Slider Widget'), 
        'id' => 'postprojectswidget', 
        'description' => __( 'De title and text just after the first slider on the frontpage.' ), 
        'class' => 'widget', 
        'before_widget' => '<div id="%1$s" class="widget %2$s">', 
        'after_widget' => '</div>', 
        'before_title' => '<h2 class="text-transition">', 
        'after_title' => '</h2>'
    ));

    register_sidebar(array(
        'name' => __('Veel Toepassingen'), 
        'id' => 'applications', 
        'description' => __( 'De items onder de kop "Veel toepassingen" op de voorpagina' ), 
        'class' => 'widget', 
        'before_widget' => '<div class="col-12 col-md-6 col-lg-3"><div class="fontpage-widget widget--transition-to-top"><div id="%1$s" class="widget %2$s">', 
        'after_widget' => '</div></div></div>', 
        'before_title' => '<h3 class="d-none">', 
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => __('Beton eigenschappen'), 
        'id' => 'concrete', 
        'description' => __( 'De items onder de kop "Beton eigenschappen" op de voorpagina' ), 
        'class' => 'widget', 
        'before_widget' => '<div class="col-12 col-md-6 col-lg-3"><div class="fontpage-widget widget--transition-to-top"><div id="%1$s" class="widget %2$s">', 
        'after_widget' => '</div></div></div>', 
        'before_title' => '<h3 class="d-none">', 
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => __('Over CirePlastery'), 
        'id' => 'aboutcire', 
        'description' => __( 'De tekst onder de kop "Over Ciré Plastery" op de voorpagina.' ), 
        'class' => 'widget', 
        'before_widget' => '<div id="%1$s" class="widget %2$s">', 
        'after_widget' => '</div>', 
        'before_title' => '<h3 class="d-none">', 
        'after_title' => '</h3>'
    ));


    register_sidebar(array(
        'name' => __('Footer'), 
        'id' => 'footer', 
        'description' => __( 'Items in de footer' ), 
        'class' => 'sidebar-widget', 
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>', 
        'before_title' => '<h5>', 
        'after_title' => '</h5>'
    ));
}