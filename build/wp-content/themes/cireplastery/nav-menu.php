<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
            <figure class="logo">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php bloginfo( 'template_url' ) ?>/images/cireplaster-logo.png" width="1182" height="1182" alt="<?php bloginfo( 'name' ); ?>" />
                </a>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-10">
            <?php
            $headermenu = ag_get_theme_menu('headermenu');
            if(is_object($headermenu)){
                $headermenu_atts = get_object_vars( $headermenu );
                $args = [
                    'menu' => $headermenu_atts['name'],
                    'container' => 'div',
                    'container_class' => 'float-right'
                ];
                wp_nav_menu( $args );
            }
            ?>
        </div>
    </div>
</div>