<?php
/* Template Name: Group Classes */

$hero_section_headline = get_field('hero_section_headline');
$hero_section_link = get_field('hero_section_link');

$section_1_image = get_field('section_1_image');
$section_1_headline = get_field('section_1_headline');

$section_2_list = get_field('section_2_list');

$section_3_list_headline = get_field('section_3_list_headline');
$section_3_list = get_field('section_3_list');
$section_3_secondary_headline = get_field('section_3_secondary_headline');
$section_3_description = get_field('section_3_description');

$contact_section_description = get_field('contact_section_description');
$contact_section_link = get_field('contact_section_link');

$faq_section_headline = get_field('faq_section_headline');
$faq_section_questions = get_field('faq_section_questions');
get_header(); ?>

<div class="template_classes">
    <img src="<?php echo get_template_directory_uri(); ?>/images/classes/shape.png" class="shape1">

    <div class="template_classes_content">
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
                    <div class="left_content">
                        <?php if($section_1_headline): ?>
                            <h2>
                                <?php echo $section_1_headline; ?>
                            </h2>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="right">
                    <?php if($section_1_image): ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/white_lines.svg" class="white_lines">
                        <div class="image_holder">
                            <img src="<?php echo $section_1_image['url']; ?>" alt="<?php echo $section_1_image['alt']; ?>">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="second_section">
            <div class="second_section_content fadein_wrap">
                <div class="tools">
                    <?php if($section_2_list): ?>
                        <div class="tools_wrap">
                            <?php foreach( $section_2_list as $singleItem ): ?>
                                <div class="single_tool">
                                    <p>
                                        <?php echo $singleItem['section_2_list_item']; ?>
                                    </p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="third_section">
            <div class="third_section_content fadein_wrap">
                <div class="image_holder">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/classes/classes_shape.png">
                </div>
                <?php if($section_3_list_headline): ?>
                    <p class="third_section_description">
                        <?php echo $section_3_list_headline; ?>
                    </p>
                <?php endif; ?>
                <?php if($section_3_list): ?>
                    <div class="classes_list">
                        <div class="classes_list_content">
                            <?php foreach( $section_3_list as $singleItem ): ?>
                                <div class="single_class">
                                    <div class="left">
                                        <h3><?php echo $singleItem['section_3_list_item_main_headline']; ?></h3>
                                        <p>
                                            <?php echo $singleItem['section_3_list_item_sub_headline']; ?>
                                        </p>
                                    </div>
                                    <div class="right">
                                        <?php echo $singleItem['section_3_list_item_list']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($section_3_secondary_headline): ?>
                    <p class="third_section_description bottom">
                        <?php echo $section_3_secondary_headline; ?>
                    </p>
                <?php endif; ?>

                <?php if($section_3_description): ?>
                    <p class="regular_desc">
                        <?php echo $section_3_description; ?>
                    </p>
                <?php endif; ?>
            </div>
        </section>

        <section class="contact_section fadein_wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/images/contact_circle.svg" alt="separator" class="contact_circle">
            <div class="contact_section_wrap">
                <div class="contact_section_content with_form">
                    <?php if($contact_section_description): ?>
                        <h2><?php echo $contact_section_description; ?></h2>
                    <?php endif; ?>

                    <div class="form_holder">
                        <?php echo do_shortcode('[contact-form-7 id="221" title="Classes Form"]'); ?>
                        <!-- <form action="">
                            <input type="text" placeholder="Email address">
                            <button>
                                SUBMIT
                                <img src="<?php echo get_template_directory_uri(); ?>/images/white_arrow.svg" alt="arrow">
                            </button>
                        </form> -->
                    </div>
                    
                    <?php if($contact_section_link): ?>
                        <div class="separator">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/white_separator.svg" alt="separator">
                        </div>
                        
                        <a href="<?php echo $contact_section_link['url'] ?>" target="<?php echo $contact_section_link['target'] ?>">
                            <?php echo $contact_section_link['title'] ?>
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