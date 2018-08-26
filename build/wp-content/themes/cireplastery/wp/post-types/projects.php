<?php

    add_action( 'after_setup_theme', 'add_projects' );

    function add_projects(){
        if( !class_exists( 'Super_Custom_Post_Type' ) )
            return;

        $supercpt_args = array(
            'supports' => array( 'title', 'thumbnail', 'editor', 'excerpt' )
        );

        $supercpt = new Super_Custom_Post_Type( 'project', 'Project', 'Projects', $supercpt_args );
        
        $fields = [
            'title_multiple_lines' => [ 
                'type' => 'textarea', 
                'label' => 'Title over multiple lines',
                'field_description' => 'hoi',
                'default' => ''
            ]
        ];

        $supercpt->add_meta_box(
            array(
                'id' => 'page_extra_options',
                'title' => 'Extra opties voor paginas',
                'context' => 'normal',
                'fields' => $fields
            )
        );

        $supercpt->set_icon( 'edit' );

    }