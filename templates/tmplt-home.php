<?php
/* Template Name: Home */
get_header(); ?>

<div class="template_home_holder">

    <div class="template_home_content">
        <img src="<?php echo get_template_directory_uri(); ?>/images/shape1.svg" class="shape1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/glow.svg" class="glow1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/shape2.svg" class="shape2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/glow.svg" class="glow2">

        <div class="hero_content">
            <h1>True Nature</h1>
            <p>
                Yoga therapy, small group classes & mentoring in the Viniyoga tradition
            </p>
        </div>

        <section class="first_section">
            <div class="first_section_content">
                <div class="single_box fadein_wrap">
                    <h2>Yoga therapy</h2>
                    <p>
                        Private therapy, teaching passed down through the lineage of T. Krisnamacharya and his son, T.K.V. Desikachar, widely known as Viniyoga.
                    </p>

                    <div class="button_holder">
                        <a href="">
                            Learn More
                            <img src="<?php echo get_template_directory_uri(); ?>/images/black_arrow.svg" alt="arrow">
                        </a>
                    </div>
                </div>
                <div class="single_box fadein_wrap">
                    <h2>Group classes</h2>
                    <p>
                        True Nature offers goal-focused, small group classes, that run as monthly series. Lesson plans build skills over time and are tailored to the goals and needs of the group.
                    </p>

                    <div class="button_holder">
                        <a href="">
                            Learn More
                            <img src="<?php echo get_template_directory_uri(); ?>/images/black_arrow.svg" alt="arrow">
                        </a>
                    </div>
                </div>
                <div class="single_box fadein_wrap">
                    <h2>mentoring</h2>
                    <p>
                        Guidance on the path for serious practitioners, students, teachers, and therapists in the Viniyoga tradition. Includes support in programs of study for teachers and therapists. Support for emerging and established teachers and therapists.
                    </p>

                    <div class="button_holder">
                        <a href="">
                            Learn More
                            <img src="<?php echo get_template_directory_uri(); ?>/images/black_arrow.svg" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="second_section">
            <div class="second_section_content">
                <div class="left">
                    <div class="left_content fadein_wrap">
                        <h2>
                            //The Viniyoga Philosophy
                        </h2>
                        <p>
                            The essential meaning of the ancient Sanskrit word Viniyoga is application to suit the individual, a progression.
                        </p>
                    </div>
                    
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/white_lines.svg" class="white_lines">
                    <div class="image_holder fadein_wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home.png" alt="The Viniyoga Philosophy">
                    </div>
                </div>
            </div>
        </section>

        <section class="third_section">
            <div class="third_section_content">
                <div class="headline_holder fadein_wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home_shape.svg">
                    <h3>The hallmarks of the Viniyoga approach</h3>
                </div>

                <div class="three_box_section fadein_wrap">
                    <div class="single_box">
                        <p>
                            A clear, organized approach. Practices develop over time for step-by-step, sustainable progress.
                        </p>
                    </div>
                    <div class="single_box">
                        <p>
                            Meets you where you are. Injured or at the peak of health- Viniyoga has a practice adapted to work for you.
                        </p>
                    </div>
                    <div class="single_box">
                        <p>
                            Practices are chosen for function over form, to maintain or regain individual balance.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div class="fourth_section">
            <img src="<?php echo get_template_directory_uri(); ?>/images/shape3.svg" class="shape3">
            <div class="fourth_section_content fadein_wrap">
                <h2>//we asked our clients</h2>

                <div class="testemonials">
                    <div class="single_testimonial">
                        <p class="question">
                            HOW HAS VINIYOGA BENEFITTED YOU?
                        </p>

                        <p class="answer">
                            I am calmer, I worry less about things that used to bother me, and when I practice regularly I feel a a stability and strength at my (physical) center.
                        </p>
                    </div>
                    <div class="single_testimonial">
                        <p class="question">
                        HOW HAS VINIYOGA BENEFITTED YOU SECOND SLIDE?
                        </p>

                        <p class="answer">
                            Second I am calmer, I worry less about things that used to bother me, and when I practice regularly I feel a a stability and strength at my (physical) center.
                        </p>
                    </div>
                    <div class="single_testimonial">
                        <p class="question">
                        HOW HAS VINIYOGA BENEFITTED YOU THIRD SLIDE?
                        </p>

                        <p class="answer">
                            Third I am calmer, I worry less about things that used to bother me, and when I practice regularly I feel a a stability and strength at my (physical) center.
                        </p>
                    </div>
                </div>
                <span class="pagingInfo">1/3</span>
                <div class="new_arrows"></div>
            </div>
        </div>
        
    </div>
</div>

<?php
get_footer(); ?>