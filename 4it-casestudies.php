<?php

/*
 * Template Name: 4it
 * Template Post Type: casestudies
 */

get_header();
?>

	<?php
	$imageID = get_field('background_image_case_single');
	$image = wp_get_attachment_image_src( $imageID, 'full-image' );
	$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
	?> 

    <div id="mobile-case--header">

        <div class="forit-header">  

        <?php 
        $values = get_field( 'main_title_hero_case' );
        if ( $values ) { ?>
            <h2><?php the_field('main_title_hero_case'); ?></h2>
        <?php 
        } else { ?>
            <h2><?php the_title(); ?></h2>
        <?php } ?>


            <h4><?php the_field('subtitle_hero_case'); ?></h4>

        </div>
        <!-- // inner  -->
    </div>
    <!-- // mobile case header  -->

	<div class="parallax-window" id="case-header" data-parallax="scroll" data-image-src="<?php echo $image[0]; ?>">
		<div class="overlay">
            <div class="container">
                <div class="hero-caption">

                    <?php 
                    $values = get_field( 'main_title_hero_case' );
                    if ( $values ) { ?>
                        <h1><?php the_field('main_title_hero_case'); ?></h1>
                    <?php 
                    } else { ?>
                        <h1><?php the_title(); ?></h1>
                    <?php } ?>

                    
                    <h2><?php the_field('subtitle_hero_case'); ?></h2>
                </div>
                <!-- // caption  -->

                <img src="<?php the_field('shape_image_cases'); ?>" alt="" class="shape shape-4it">


            </div>
            <!-- // container  -->
        </div>
        
	</div>
    <!-- // parlaax  -->



    <section id="case-single" class="it-case">


        <div class="it-intro">
            <div class="container">

                <div class="it-intro--left">
                    <h2><?php the_field('block_title_forit_intro'); ?></h2>
                    <?php the_field('intro_text_forit_intro'); ?>
                </div>
                <!-- // left  -->

                <div class="it-intro--right">
                    <ul>
                        <?php if( have_rows('intro_list_forit_intro') ): ?>
                            <?php while( have_rows('intro_list_forit_intro') ): the_row(); ?>

                                <li><?php the_sub_field('label'); ?></li>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <!-- // right  -->

            </div>
            <!-- // container  -->
        </div>
        <!-- // 4 it intro  -->

        <div class="it-challange">
            <div class="container">

                <div class="challange-text">
                    <h2><?php the_field('block_title_cha_forit_cha'); ?></h2>
                    <?php the_field('content_block_cha_intro'); ?>
                </div>
                <!-- // text  -->

                <div class="challange-images">

                    <div class="image-1">
                        <span class="caption"><?php the_field('image_1_caption_cha'); ?><img src="<?php bloginfo('template_directory'); ?>/img/ico/arrow-right.svg" alt=""></span>

                        <img src="<?php the_field('image_1_cha'); ?>" alt="" class="imager-1">
                    </div>
                    <!-- // image  -->

                    <div class="image-2">
                        <span class="caption"><?php the_field('image_2_caption_cha'); ?><img src="<?php bloginfo('template_directory'); ?>/img/ico/down-arrow.svg" alt=""></span>

                        <img src="<?php the_field('image_2_cha'); ?>" alt="">
                    </div>
                    <!-- // image 2  -->

                </div>
                <!-- // images  -->

            </div>
            <!-- // container  -->
        </div>
        <!-- // chalange  -->

        <div class="it-build">
            <div class="container">

                <div class="build-images">

                    <div class="image-1">
                        <span class="caption"><?php the_field('caption_1_it_build'); ?><img src="<?php bloginfo('template_directory'); ?>/img/ico/down-arrow.svg" alt=""></span>

                        <img src="<?php the_field('image_1_it_build'); ?>" alt="">
                    </div>
                    <!-- // image 1  -->

                    <div class="image-2">
                        <span class="caption"><?php the_field('caption_2_build_it'); ?><img src="<?php bloginfo('template_directory'); ?>/img/ico/down-arrow.svg" alt=""></span>

                        <img src="<?php the_field('image_2_it_build'); ?>" alt="">
                    </div>
                    <!-- // image 1  -->        
                    
                    <div class="image-3">
                        <img src="<?php the_field('image_3_build_it'); ?>" alt="">
                    </div>

                </div>
                <!-- // images  -->

                <div class="build-text">
                    <h2><?php the_field('block_title_build_it'); ?></h2>
                    <?php the_field('content_block_it_build'); ?>
                    <a href="<?php the_field('button_link_build_it'); ?>" class="btn-cta"><?php the_field('button_label_it_build'); ?></a>
                    <div class="image-holder">
                        <span class="caption"><?php the_field('caption_4_build_it'); ?><img src="<?php bloginfo('template_directory'); ?>/img/ico/down-arrow.svg" alt=""></span>
                       
                        <img src="<?php the_field('image_4_build_it'); ?>" alt="">
                    </div>
                    <!-- // image  -->
                </div>
                <!-- // text  -->

            </div>
            <!-- // container  -->
        </div>
        <!-- // build  -->

        <div class="case-testimonials">
            <div class="container">
                <div class="reviews-wrapper">
                    <h3><?php the_field('block_title_test_it'); ?></h3>
                    <div class="review-block">
                        <?php the_field('review_text_test_it'); ?>
                        <span class="author"><?php the_field('author_review_test_it'); ?></span>
                    </div>
                    <!-- // block  -->
                </div>
                <!-- // wrapper  -->
            </div>
            <!-- // container  -->
        </div>
        <!-- // stories  -->          

        <footer>
            <a href="<?php bloginfo('url'); ?>/case-stories" class="btn-more">Back to Case Stories <span class="icon-Polygon-44"></span></a>
            <a href="#top-page" class="btn-more btn-up">Back to top <span class="icon-Polygon-44-uper"></span></a>
        </footer>

    </section>
    <!-- // case single  -->


<?php get_footer(''); ?>