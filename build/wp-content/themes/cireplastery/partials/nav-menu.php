<div class="hamburger-menu d-md-none">
    <button class="hamburger hamburger--elastic" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
    </span>
</button>
</div>
<div class="container container-fluid--nav">
    <div class="row align-items-center">
        <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
            <figure class="logo">
                <a href="<?php echo site_url(); ?>">
                    <?php /* <img src="<?php bloginfo( 'template_url' ) ?>/images/cireplaster-logo.png" width="1182" height="1182" alt="<?php bloginfo( 'name' ); ?>" />*/ ?>
                    <img src="<?php bloginfo( 'template_url' ) ?>/images/cireplaster-logo.svg" width="2840" height="2840" alt="<?php bloginfo( 'name' ); ?>" />
                </a>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-10 col-xl-4 offset-xl-6">
            <?php
            $headermenu = ag_get_theme_menu('headermenu');
            if(is_object($headermenu)){
                $headermenu_atts = get_object_vars( $headermenu );
                $args = [
                    'menu' => $headermenu_atts['name'],
                    'container' => 'div'/*,
                    'container_class' => 'float-md-right'*/
                ];
                wp_nav_menu( $args );
            }
            ?>
        </div>
    </div>
</div>