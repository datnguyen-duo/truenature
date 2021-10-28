<?php
/* Template Name: About */
$hero_section_headline = get_field('hero_section_headline');
$hero_section_link_list = get_field('hero_section_link_list');

$section_1_headline = get_field('section_1_headline');
$section_1_description = get_field('section_1_description');

$section_2_image = get_field('section_2_image');
$section_2_headline = get_field('section_2_headline');
$section_2_subheadline = get_field('section_2_subheadline');
$section_2_description = get_field('section_2_description');
$section_2_second_image = get_field('section_2_second_image');
$section_2_thrid_image = get_field('section_2_thrid_image');
$section_2_black_circle_description = get_field('section_2_black_circle_description');

$section_3_image = get_field('section_3_image');
$section_3_headline = get_field('section_3_headline');
$section_3_description = get_field('section_3_description');
$section_3_list = get_field('section_3_list');

$section_4_description = get_field('section_4_description');

$section_5_image = get_field('section_5_image');
$section_5_headline = get_field('section_5_headline');
$section_5_subheadline = get_field('section_5_subheadline');
$section_5_description = get_field('section_5_description');

get_header(); ?>


<div class="template_about">
    <img src="<?php echo get_template_directory_uri(); ?>/images/about/shape1.svg" class="shape1">
    <img src="<?php echo get_template_directory_uri(); ?>/images/about/shape2.svg" class="shape2">
    <div class="template_about_content">
        
        <div class="hero_content_inner">
            <?php if($hero_section_headline): ?>
                <h1><?php echo $hero_section_headline; ?></h1>
            <?php endif; ?>

            <?php if($hero_section_link_list): ?>
            <p>
                <?php 
                    $counter = 1;
                    $length = count($hero_section_link_list); 
                ?>
                <?php foreach( $hero_section_link_list as $singleItem ): ?>
                    <a href="<?php echo $singleItem['single_link']['url'] ?>"><?php echo $singleItem['single_link']['title'] ?></a> <?php if($counter != $length): ?><span>//</span><?php endif; ?>
                    <?php $counter++ ?>
                <?php endforeach; ?>
            </p>
            <?php endif; ?>
        </div>

        <section class="first_section" id="about">
            <div class="first_section_content fadein_wrap">
                <?php if($section_1_headline): ?>
                    <div class="headline_holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/theryapy_flower.svg">
                        <h3><?php echo $section_1_headline; ?></h3>
                    </div>
                <?php endif; ?>

                <div class="description_section">
                    <?php if($section_1_description): ?>
                        <p>
                            <?php echo $section_1_description; ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="second_section">
            <div class="second_section_content fadein_wrap">
                <div class="image_holder_wrap">
                    <?php if($section_2_image): ?>
                        <div class="image_holder">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/about/about_white_lines.png" class="about_white_lines">
                            <img src="<?php echo $section_2_image['url'] ?>" alt="<?php echo $section_2_image['alt'] ?>" class="background">
                        </div>
                    <?php endif; ?>
                </div>
                <div class="second_section_description_wrap">
                    
                    <div class="second_section_description" id="lineage">
                        <?php if($section_2_headline): ?>
                            <h2><?php echo $section_2_headline; ?></h2>
                        <?php endif; ?>

                        <?php if($section_2_subheadline): ?>
                            <h3>
                            <?php echo $section_2_subheadline; ?>
                            </h3>
                        <?php endif; ?>

                        <?php if($section_2_description): ?>
                            <p> 
                                <?php echo $section_2_description; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="images_holder">
                        <?php if($section_2_second_image): ?>
                            <div class="image_holder">
                                <img src="<?php echo $section_2_second_image['url'] ?>" alt="<?php echo $section_2_second_image['alt'] ?>">
                            </div>
                        <?php endif; ?>

                        <?php if($section_2_thrid_image): ?>
                            <div class="image_holder">
                                <img src="<?php echo $section_2_thrid_image['url'] ?>" alt="<?php echo $section_2_thrid_image['alt'] ?>">
                            </div>
                        <?php endif; ?>
                        
                        <?php if($section_2_black_circle_description): ?>
                            <div class="info_holder">
                                <?php echo $section_2_black_circle_description; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="third_section" id="studio">
            <div class="third_section_content fadein_wrap">
                <div class="left">
                    <?php if($section_3_image): ?>
                        <div class="image_holder">
                            <img src="<?php echo $section_3_image['url']; ?>" alt="<?php echo $section_3_image['alt']; ?>">
                        </div>
                    <?php endif; ?>
                </div>
                <div class="right">
                    <div class="right_content">
                        <?php if($section_3_headline): ?>
                            <h2>
                                <?php echo $section_3_headline; ?>
                            </h2>
                        <?php endif; ?>
                        <?php if($section_3_list): ?>
                            <ul>
                                <?php foreach( $section_3_list as $singleItem ): ?>
                                    <li>
                                        <?php echo $singleItem['single_list_item'] ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="fourth_section">
            <div class="fourth_section_content fadein_wrap">
                <div class="headline_holder">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home_shape.svg">
                </div>

                <div class="description_section">
                    <?php if($section_4_description): ?>
                        <p>
                            <?php echo $section_4_description; ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="fifth_section" id="about_briana">
            <div class="fifth_section_content fadein_wrap">
                <div class="left">
                    <?php if($section_5_image): ?>
                        <div class="image_holder">
                            <img src="<?php echo $section_5_image['url'] ?>" alt="<?php echo $section_5_image['alt'] ?>">
                        </div>
                    <?php endif; ?>
                </div>

                <div class="right">
                    <div class="right_content">
                        <?php if($section_5_headline): ?>
                            <h2><?php echo $section_5_headline; ?></h2>
                        <?php endif; ?>
                        <?php if($section_5_subheadline): ?>
                            <h3>
                                <?php echo $section_5_subheadline; ?>
                            </h3>
                        <?php endif; ?>
                        <?php if($section_5_description): ?>
                            <p>
                                <?php echo $section_5_description; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php
get_footer(); ?>