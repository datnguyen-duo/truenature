<?php
/* Template Name: Mentoring */

$hero_section_headline = get_field('hero_section_headline');
$hero_section_link = get_field('hero_section_link');

$section_1_image = get_field('section_1_image');
$section_1_headline = get_field('section_1_headline');
$section_1_description = get_field('section_1_description');

$section_2_headline = get_field('section_2_headline');
$section_2_image = get_field('section_2_image');
$section_2_left_list = get_field('section_2_left_list');
$section_2_right_list = get_field('section_2_right_list');
$section_2_subheadline = get_field('section_2_subheadline');
$section_2_description = get_field('section_2_description');

$contact_section_description = get_field('contact_section_description');
$contact_section_link = get_field('contact_section_link');

$section_4_headline = get_field('section_4_headline');
$section_4_description = get_field('section_4_description');
$section_4_list = get_field('section_4_list');

$faq_section_headline = get_field('faq_section_headline');
$faq_section_questions = get_field('faq_section_questions');

get_header(); ?>


<div class="template_mentoring">
    <img src="<?php echo get_template_directory_uri(); ?>/images/mentoring/shape.png" class="shape1">
    <img src="<?php echo get_template_directory_uri(); ?>/images/mentoring/shape.png" class="shape2">
    <div class="template_mentoring_content">
        <div class="hero_content_inner">
            <?php if($hero_section_headline): ?>
                <?php echo $hero_section_headline; ?>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/mentoring/white_lines.png" class="white_lines">
                        <div class="image_holder fadein_wrap">
                            <img src="<?php echo $section_1_image['url']; ?>" alt="<?php echo $section_1_image['alt']; ?>">
                        </div>
                    <?php endif; ?>
                </div>
                <div class="right">
                    
                    <div class="right_content fadein_wrap">
                        <?php if($section_1_headline): ?>
                            <?php echo $section_1_headline; ?>
                        <?php endif; ?>
                        <?php if($section_1_description): ?>
                            <p>
                                <?php echo $section_1_description; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="second_section">
            <div class="second_section_content fadein_wrap">
                <?php if($section_2_headline): ?>
                    <p>
                        <?php echo $section_2_headline; ?>
                    </p>
                <?php endif; ?>

                <div class="second_section_list">
                    
                    <div class="list_wrap">
                        <?php if($section_2_left_list): ?>
                            <ul>
                                <?php foreach( $section_2_left_list as $singleItem ): ?>
                                    <li>
                                        <?php echo $singleItem['single_item'] ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <div class="image_wrap">
                        <?php if($section_2_image): ?>
                            <div class="image_holder">
                                <img src="<?php echo $section_2_image['url']; ?>" alt="<?php echo $section_2_image['alt']; ?>">
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="list_wrap">
                        <?php if($section_2_right_list): ?>
                            <ul>
                                <?php foreach( $section_2_right_list as $singleItem ): ?>
                                    <li>
                                        <?php echo $singleItem['single_item'] ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="separator"></div>

                <?php if($section_2_subheadline): ?>
                    <p class="bottom">
                        <?php echo $section_2_subheadline; ?>
                    </p>
                <?php endif; ?>

                <?php if($section_2_description): ?>
                    <h2>
                        <?php echo $section_2_description; ?>
                    </h2>
                <?php endif; ?>
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

        <section class="fourth_section">
            <div class="fourth_section_content fadein_wrap">
                <?php if($section_4_headline): ?>
                    <?php echo $section_4_headline; ?>
                <?php endif; ?>
                <!-- <p>
                    After you’ve had your consult call and we’ve decided to work together, what to expect:
                </p> -->

                <div class="tools">
                    <?php if($section_4_description): ?>
                        <p class="tools_desc">
                            <?php echo $section_4_description; ?>
                        </p>
                    <?php endif; ?>
                    <?php if($section_4_list): ?>
                        <div class="tools_wrap">
                            <?php foreach( $section_4_list as $singleItem ): ?>
                                <div class="single_tool">
                                    <h3><?php echo $singleItem['section_4_list_item_headline'] ?></h3>
                                    <span><?php echo $singleItem['section_4_list_item_subheadline'] ?></span>
                                    <p>
                                        <?php echo $singleItem['section_4_list_item_description'] ?>
                                    </p>
                                </div>
                            <?php endforeach; ?>
                        </div>
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