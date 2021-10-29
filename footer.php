<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package True_Nature
 */

 $footer_headline = get_field('footer_headline', 'option');
 $footer_subheadline = get_field('footer_subheadline', 'option');
 $footer_address = get_field('footer_address', 'option');
 $footer_phone = get_field('footer_phone', 'option');
 $footer_email = get_field('footer_email', 'option');
 $copyright_text = get_field('copyright_text', 'option');
 $certificate_image = get_field('certificate_image', 'option');
?>

<footer>
    <div class="footer_content">
        <div class="first_footer_section">
            <div class="left">
                <?php if($footer_headline): ?>
                    <h3><?php echo $footer_headline; ?></h3>
                <?php endif; ?>
                <?php if($footer_subheadline): ?>
                    <p>
                        <?php echo $footer_subheadline; ?>
                    </p>
                <?php endif; ?>
            </div>
            <div class="right">
                <div class="button_holder">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/round_text.svg" alt="arrow" class="marquee">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/white_arrow.svg" alt="arrow" class="arrow">
                    <a href="/contact">
                    </a>
                </div>
            </div>
        </div>

        <div class="second_footer_section">
            <div class="left">
                <div class="single_info">
                    <?php if($footer_address): ?>
                        <p>
                            <?php echo $footer_address; ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="single_info">
                    <?php if($footer_phone): ?>
                        <a href="tel:<?php echo $footer_phone; ?>">
                            <?php echo $footer_phone; ?>
                        </a>
                    <?php endif; ?>

                    <?php if($footer_email): ?>
                        <a href="mailto:<?php echo $footer_email; ?>">
                            <?php echo $footer_email; ?>
                        </a>
                    <?php endif; ?>
                </div>
                
            </div>
            <div class="right">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary',
                            'container' => false,
                        )
                    );
                ?>
            </div>
        </div>

        <div class="thrid_footer_section">
            <div class="form_holder">
                <?php echo do_shortcode('[contact-form-7 id="220" title="Footer Form"]'); ?>

                <p>
                    To be notified of new classes series, guest instructors and special workshop offerings, join our mailing list.
                </p>
            </div>
            
        </div>

        <div class="copyright_wrap <?php if (is_page_template('templates/tmplt-classes.php') || is_page_template('templates/tmplt-therapy.php') || is_page_template('templates/tmplt-mentoring.php') || is_page_template('templates/tmplt-about.php')):?>center<?php endif;?>">
            <?php if (is_page_template('templates/tmplt-classes.php') || is_page_template('templates/tmplt-therapy.php') || is_page_template('templates/tmplt-mentoring.php') || is_page_template('templates/tmplt-about.php')):?>
                <?php if($certificate_image): ?>
                    <div class="certification">
                        <img src="<?php echo $certificate_image['url']; ?>" alt="<?php echo $certificate_image['alt']; ?>">
                    </div>
                <?php endif;?>
            <?php endif;?>

            <?php if($copyright_text): ?>
                <div class="copyright">
                    <?php echo $copyright_text; ?>
                </div>
            <?php endif; ?>
        </div>
        
    </div>
</footer>
        </div><!-- #scroll-container-->
    </div><!-- #viewport -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
