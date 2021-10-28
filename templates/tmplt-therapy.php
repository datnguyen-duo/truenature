<?php
/* Template Name: Yoga Therapy */
$hero_section_headline = get_field('hero_section_headline');
$hero_section_link = get_field('hero_section_link');

$section_1_image = get_field('section_1_image');
$section_1_headline = get_field('section_1_headline');
$section_1_list = get_field('section_1_list');

$section_2_headline = get_field('section_2_headline');
$section_2_description = get_field('section_2_description');

$section_3_first_headline = get_field('section_3_first_headline');
$section_3_first_additional_headline = get_field('section_3_first_additional_headline');
$section_3_second_headline = get_field('section_3_second_headline');
$section_3_second_additional_headline = get_field('section_3_second_additional_headline');
$section_3_description = get_field('section_3_description');
$section_3_image = get_field('section_3_image');

$section_4_headline = get_field('section_4_headline');
$section_4_description = get_field('section_4_description');

$section_5_headline = get_field('section_5_headline');
$section_5_description = get_field('section_5_description');
$section_5_sub_headline = get_field('section_5_sub_headline');
$section_5_list = get_field('section_5_list');

$contact_section_description = get_field('contact_section_description');
$contact_section_link = get_field('contact_section_link');

$faq_section_headline = get_field('faq_section_headline');
$faq_section_questions = get_field('faq_section_questions');

get_header(); ?>

<div class="template_therapy">
    <img src="<?php echo get_template_directory_uri(); ?>/images/therapy/shape.png" alt="" class="shape1">
    <img src="<?php echo get_template_directory_uri(); ?>/images/therapy/shape.png" alt="" class="shape2">
    <div class="template_therapy_content">
        <div class="hero_content_inner">
            <?php if($hero_section_headline): ?>
                <h1><?php echo $hero_section_headline; ?></h1>
            <?php endif; ?>
            <?php if($hero_section_link): ?>
                <a href="<?php echo $hero_section_link['url'] ?>" target="<?php echo $hero_section_link['target']; ?>">
                    <?php echo $hero_section_link['title']; ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/black_arrow.svg" alt="arrow">
                </a>
            <?php endif; ?>
        </div>

        <section class="first_section">
            <div class="first_section_content fadein_wrap">
                <div class="left">
                    <?php if($section_1_image): ?>
                        <div class="image_holder fadein_wrap">
                            <img src="<?php echo $section_1_image['url'] ?>" alt="<?php echo $section_1_image['alt'] ?>">
                        </div>
                    <?php endif; ?>
                </div>
                <div class="right">
                    <div class="right_content fadein_wrap">
                        <?php if($section_1_headline): ?>
                            <h2>
                                <?php echo $section_1_headline; ?>
                            </h2>
                        <?php endif; ?>
                        <?php if($section_1_list): ?>
                            <ul>
                                <?php foreach( $section_1_list as $singleItem ): ?>
                                    <li>
                                        <?php echo $singleItem['single_item']; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="second_section">
            <div class="second_section_content">
                <?php if($section_2_headline): ?>
                    <div class="headline_holder fadein_wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/theryapy_flower.svg">
                        <h3><?php echo $section_2_headline; ?></h3>
                    </div>
                <?php endif; ?>
                <?php if($section_2_description): ?>
                    <div class="list">
                        <?php echo $section_2_description; ?>
                    </div>
                <?php endif; ?>
                <!-- <ul>
                    <li></li>
                </ul> -->
            </div>
        </section>

        <section class="third_section">
            <div class="third_section_content fadein_wrap">
                <div class="left">
                    <?php if($section_3_first_headline): ?>
                        <h2>
                            <?php echo $section_3_first_headline; ?>
                            <?php if($section_3_second_additional_headline): ?>
                                <span><?php echo $section_3_first_additional_headline ?></span>
                            <?php endif; ?>
                        </h2>
                    <?php endif; ?>
                    <?php if($section_3_second_headline): ?>
                        <h2>
                            <?php echo $section_3_second_headline; ?>
                            <?php if($section_3_second_additional_headline): ?>
                                <span><?php echo $section_3_second_additional_headline; ?></span>
                            <?php endif; ?>
                        </h2>
                    <?php endif; ?>
                    
                    <?php if($section_3_description): ?>
                        <p>
                            <?php echo $section_3_description; ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="right">
                    <?php if($section_3_image): ?>
                        <div class="image_holder">
                            <img src="<?php echo $section_3_image['url'] ?>" alt="<?php echo $section_3_image['alt'] ?>">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="fourth_section">
            <div class="fourth_section_content fadein_wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/images/therapy/circle3.svg" class="circle3">
                <img src="<?php echo get_template_directory_uri(); ?>/images/therapy/circle1.svg" class="circle1">
                <?php if($section_4_headline): ?>
                    <h2><?php echo $section_4_headline; ?></h2>
                <?php endif; ?>
                <?php if($section_4_description): ?>
                    <p>
                        <?php echo $section_4_description; ?>
                    </p>
                <?php endif; ?>

                <img src="<?php echo get_template_directory_uri(); ?>/images/therapy/circle5.svg" class="circle5">
                <img src="<?php echo get_template_directory_uri(); ?>/images/therapy/circle4.svg" class="circle4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/therapy/circle2.svg" class="circle2">

                <ul class="mobile_list">
                    <li>
                        Insomnia
                    </li>
                    <li>
                        Depression & Anxiety
                    </li>
                    <li>
                        Grief
                    </li>
                    <li>
                        Stress
                    </li>
                    <li>
                        Anger
                    </li>
                    <li>
                        Chronic Pain
                    </li>
                    <li>
                        PTSD
                    </li>
                </ul>
            
            </div>
        </section>

        <section class="fifth_section">
            <div class="fifth_section_content fadein_wrap">
                <?php if($section_5_headline): ?>
                    <h2><?php echo $section_5_headline; ?></h2>
                <?php endif; ?>
                <?php if($section_5_description): ?>
                    <p>
                        <?php echo $section_5_description; ?>
                    </p>
                <?php endif; ?>

                <div class="tools">
                    <?php if($section_5_sub_headline): ?>
                        <p class="tools_desc">
                            <?php echo $section_5_sub_headline; ?>
                        </p>
                    <?php endif; ?>
                    <?php if($section_5_list): ?>
                        <div class="tools_wrap">
                            <?php foreach( $section_5_list as $singleItem ): ?>
                                <div class="single_tool">
                                    <h3><?php echo $singleItem['single_list_item_headline'] ?></h3>
                                    <span><?php echo $singleItem['single_list_item_subheadline'] ?></span>
                                    <p>
                                        <?php echo $singleItem['single_list_item_description'] ?>
                                    </p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="contact_section fadein_wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/images/contact_circle.svg" alt="separator" class="contact_circle">
            <div class="contact_section_wrap">
                <div class="contact_section_content">
                
                    <?php if($contact_section_description): ?>
                        <h2><?php echo $contact_section_description; ?></h2>
                    <?php endif; ?>
                    
                    <?php if($contact_section_link): ?>
                        <div class="separator">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/white_separator.svg" alt="separator">
                        </div>
                        
                        <a href="<?php echo $contact_section_link['url'] ?>" target="<?php echo $contact_section_link['target'] ?>">
                            <?php echo $contact_section_link['title'] ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/white_arrow.svg" alt="arrow">
                        </a>
                    <?php endif; ?>
                </div>
                
            </div>
        </section>

        <section class="faq_section fadein_wrap">
            <div class="faq_section_content">
                <div class="left">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/shape3.svg" class="shape3">
                </div>

                <div class="right">
                    <div class="right_content">
                        <?php if($faq_section_headline): ?>
                            <h2><?php echo $faq_section_headline ?></h2>
                        <?php endif; ?>
                        <?php if($faq_section_questions): ?>
                        <div class="faq_wrap">
                            <?php foreach( $faq_section_questions as $singleItem ): ?>
                                <div class="single_question">
                                    <h3>
                                        <?php echo $singleItem['faq_single_question'] ?>
                                        <div class="opener">
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </h3>

                                    <p>
                                        <?php echo $singleItem['faq_single_answer'] ?>
                                    </p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    
                </div>
                
            </div>
        </section>
    </div>
   
</div>

<?php
get_footer(); ?>