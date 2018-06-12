<div class="container my-3">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-2 flex-xs-middle">
            <figure class="logo">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php bloginfo( 'template_url' ) ?>/images/nosuch-yellow.svg" alt="<?php bloginfo( 'name' ); ?>" />
                </a>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-10 flex-xs-middle">
            <?php
            $headermenu = ag_get_theme_menu('headermenu');
            if(is_object($headermenu)){
                $headermenu_atts = get_object_vars( $headermenu );
                $args = [
                    'menu' => $headermenu_atts['name'],
                    'container' => 'nav',
                    'container_class' => 'float-xs-right'
                ];
                wp_nav_menu( $args );
            }
            ?>
        </div>
    </div>
</div>