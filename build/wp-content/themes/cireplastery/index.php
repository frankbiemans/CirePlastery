<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-12">

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
            }
        }
        ?>

    </div>
</div>
</div>
<?php get_footer(); ?>