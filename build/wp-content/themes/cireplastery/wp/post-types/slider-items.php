<?php

    add_action( 'after_setup_theme', 'add_slider_items' );

    function add_slider_items(){
        if( !class_exists( 'Super_Custom_Post_Type' ) )
            return;


        $supercpt_args = array(
            'supports' => array( 'title', 'thumbnail', 'editor' )
        );

        $supercpt = new Super_Custom_Post_Type( 'slider-item', 'Item', 'Slider Items', $supercpt_args );

        $supercpt->set_icon( 'picture' );

    }