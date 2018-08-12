<?php

    add_action( 'after_setup_theme', 'add_projects' );

    function add_projects(){
        if( !class_exists( 'Super_Custom_Post_Type' ) )
            return;

        $supercpt_args = array(
            'supports' => array( 'title', 'thumbnail', 'editor', 'excerpt' )
        );

        $supercpt = new Super_Custom_Post_Type( 'project', 'Project', 'Projects', $supercpt_args );

        $supercpt->set_icon( 'edit' );

    }