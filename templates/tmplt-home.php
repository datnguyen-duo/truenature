<?php
/* Template Name: Home */

$main_headline = get_field('main_headline');
$main_subheadline = get_field('main_subheadline');
$section_1_list = get_field('section_1_list');
$section_2_headline = get_field('section_2_headline');
$section_2_description = get_field('section_2_description');
$section_2_image = get_field('section_2_image');
$section_3_headline = get_field('section_3_headline');
$section_3_list = get_field('section_3_list');
$section_4_headline = get_field('section_4_headline');
$testimonials_slider = get_field('testimonials_slider');

get_header(); ?>

<div class="template_home_holder">

    <div class="template_home_content">
        <img src="<?php echo get_template_directory_uri(); ?>/images/shape1.svg" class="shape1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/glow.svg" class="glow1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/shape2.svg" class="shape2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/glow.svg" class="glow2">

        <div class="hero_content">
            <?php if($main_headline): ?>
                <h1><?php echo $main_headline; ?></h1>
            <?php endif; ?>

            <?php if($main_subheadline): ?>
                <p>
                    <?php echo $main_subheadline; ?>
                </p>
            <?php endif; ?>
        </div>
        
        <?php if($section_1_list): ?>
            <section class="first_section">
                <div class="first_section_content">
                    <?php foreach( $section_1_list as $singleItem ): ?>
                        <div class="single_box fadein_wrap">
                            <?php if($singleItem['single_item_headline']): ?>
                                <h2><?php echo $singleItem['single_item_headline']; ?></h2>
                            <?php endif; ?>

                            <?php if($singleItem['single_item_description']): ?>
                                <p>
                                    <?php echo $singleItem['single_item_description']; ?>
                                </p>
                            <?php endif; ?>
                            
                            <?php if($singleItem['single_item_link']): ?>
                                <div class="button_holder">
                                    <a href="<?php echo $singleItem['single_item_link']['url']; ?>" target="<?php echo $singleItem['single_item_link']['target']; ?>">
                                        <?php echo $singleItem['single_item_link']['title']; ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/black_arrow.svg" alt="arrow">
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>

        <section class="second_section">
            <div class="second_section_content">
                <div class="left">
                    <div class="left_content fadein_wrap">
                        <?php if($section_2_headline): ?>
                            <h2>
                                <?php echo $section_2_headline; ?>
                            </h2>
                        <?php endif; ?>
                        <?php if($section_2_description): ?>
                            <p>
                                <?php echo $section_2_description; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    
                </div>
                <div class="right">
                    <?php if($section_2_image): ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/white_lines.svg" class="white_lines">
                        <div class="image_holder fadein_wrap">
                            <img src="<?php echo $section_2_image['url']; ?>" alt="<?php echo $section_2_image['alt']; ?>">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="third_section">
            <div class="third_section_content">
                <?php if($section_3_headline): ?>
                    <div class="headline_holder fadein_wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home_shape.svg">
                        <h3><?php echo $section_3_headline; ?></h3>
                    </div>
                <?php endif; ?>
                
                <?php if($section_3_list): ?>
                    <div class="three_box_section fadein_wrap">
                        <?php foreach( $section_3_list as $singleItem ): ?>
                            <div class="single_box">
                                <p>
                                    <?php echo $singleItem['single_list_item']; ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <div class="fourth_section">
            <img src="<?php echo get_template_directory_uri(); ?>/images/shape3.svg" class="shape3">
            <div class="fourth_section_content fadein_wrap">
            
                <?php if($section_4_headline): ?>
                    <h2><?php echo $section_4_headline; ?></h2>
                <?php endif; ?>
                <?php if($testimonials_slider): ?>
                    <div class="testimonials">
                        <?php foreach( $testimonials_slider as $singleItem ): ?>
                            <div class="single_testimonial">
                                <p class="question">
                                    <?php echo $singleItem['single_testimonial_question']; ?>
                                </p>

                                <p class="answer">
                                    <?php echo $singleItem['single_testimonial_description']; ?>
                                    
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <span class="pagingInfo">1/3</span>
                    <div class="new_arrows"></div>
                <?php endif; ?>
            </div>
        </div>
        
    </div>
</div>

<?php
get_footer(); ?>