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

?>

<footer>
    <div class="footer_content">
        <div class="first_footer_section">
            <div class="left">
                <h3>Interested in learning more? <br> Ready to begin?</h3>
                <p>
                    Schedule a free 15 minute consultation.
                </p>
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
                    <p>
                        35 North Front Street <br> Rio Vista CA
                    </p>
                </div>
                <div class="single_info">
                    <a href="">
                        530/680-7044
                    </a>
                    <a href="">
                        Email address
                    </a>
                </div>
                
            </div>
            <div class="right">
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/yoga-therapy">yoga therapy</a>
                    </li>
                    <li>
                        <a href="/group-classes">group classes</a>
                    </li>
                    <li>
                        <a href="/mentoring">mentoring</a>
                    </li>
                    <li>
                        <a href="/about">studio</a>
                    </li>
                    <li>
                        <a href="/contact">contact us</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="thrid_footer_section">
            <div class="form_holder">
                <form action="">
                    <input type="text" placeholder="Email address">
                    <button>
                        SUBMIT
                        <img src="<?php echo get_template_directory_uri(); ?>/images/black_arrow.svg" alt="arrow">
                    </button>
                </form>
                <p>
                    To be notified of new classes series, guest instructors and special workshop offerings, join our mailing list.
                </p>
            </div>
            
        </div>

        <div class="copyright">
        Copyright 2021 true nature yoga and wellness / terms & conditions
        </div>
    </div>
</footer>
        </div><!-- #scroll-container-->
    </div><!-- #viewport -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
