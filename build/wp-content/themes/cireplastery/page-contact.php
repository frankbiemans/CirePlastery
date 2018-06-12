<?php /* Template Name: Contact Template */ ?>

<?php get_header(); ?>

    <div class="col-sm-8">
        <?php
            if ( have_posts() ) {
              while ( have_posts() ) {
                 the_post(); 
                 ?>
                 
                <article>
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </article>

                <?php
                } // end while
            } // end if
        ?>
    </div>

<?php get_footer(); ?>