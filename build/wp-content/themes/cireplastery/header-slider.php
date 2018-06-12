<?php 
$slides = [
    [
        'title' => 'Dali 01',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'image' => get_bloginfo( 'template_url' ) .'/images/carousel/dali01.jpg'
    ],
    [
        'title' => 'Dali 02',
        'text' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        'image' => get_bloginfo( 'template_url' ) .'/images/carousel/dali02.jpg'
    ],
    [
        'title' => 'Dali 03',
        'text' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.',
        'image' => get_bloginfo( 'template_url' ) .'/images/carousel/dali03.jpg'
    ]
];
?>

<section id="header-slider-wrapper">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            $i = 0;
            foreach($slides as $slide){
                $class = '';
                if( $i == 0 ){
                    $class .= ' active';
                }
                ?>
                <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>" class="<?php echo $class; ?>"></li>
                <?php
                $i++;
            } ?>
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php
            $i = 0;
            foreach($slides as $slide){
                $class = 'carousel-item';
                if($i == 0)
                    $class .= ' active';
                ?>
                <div class="<?php echo $class; ?>">
                    <img src="<?php echo $slide['image']; ?>" class="img-full-width" alt="Dali 01" />
                    <div class="carousel-caption">
                        <h3><?php echo $slide['title']; ?></h3>
                        <p><?php echo $slide['text']; ?></p>
                    </div>
                </div>
                <?php $i++; } ?>
            </div>
            <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>