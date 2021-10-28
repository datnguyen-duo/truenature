<?php
/* Template Name: Contact */

$section_1_image = get_field('section_1_image');
$section_1_headline = get_field('section_1_headline');
$phone = get_field('phone');
$email = get_field('email');

$section_2_headline = get_field('section_2_headline');
$section_2_address = get_field('section_2_address');
$section_2_address_link = get_field('section_2_address_link');

$section_3_headline = get_field('section_3_headline');
$section_3_contact_id = get_field('section_3_contact_id');

get_header(); ?>


<div class="template_contact">
    <div class="template_contact_content">
        <section class="first_section">
            <div class="first_section_content fadein_wrap">
                <div class="left">
                    <?php if($section_1_image): ?>
                        <div class="image_holder">
                            <img src="<?php echo $section_1_image['url'] ?>" alt="<?php echo $section_1_image['alt'] ?>">
                        </div>
                    <?php endif; ?>
                </div>
                <div class="right">
                    <div class="right_content">
                        <?php if($section_1_headline): ?>
                            <h2>
                                <?php echo $section_1_headline; ?>
                            </h2>
                        <?php endif; ?>

                        <div class="contact_info">
                            <?php if($phone): ?>
                                <div class="single_info">
                                    <span>Call us</span>
                                    <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                                </div>
                            <?php endif; ?>

                            <?php if($email): ?>
                                <div class="single_info">
                                    <span>Email us</span>
                                    <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                                </div>
                            <?php endif; ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="second_section">
            <div class="second_section_content fadein_wrap">
                <div class="left">
                    <div class="left_content">
                        <?php if($section_2_headline): ?>
                            <h2>
                                <?php echo $section_2_headline; ?>
                            </h2>
                        <?php endif; ?>
                        <?php if($section_2_address): ?>
                            <h3>
                                <?php echo $section_2_address; ?>
                            </h3>
                        <?php endif; ?>
                        <?php if($section_2_address_link): ?>
                            <a href="<?php echo $section_2_address_link; ?>" target="_blank">
                                Get directions
                                <img src="<?php echo get_template_directory_uri(); ?>/images/black_arrow.svg" alt="arrow">
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="right">
                    <div id="map"></div>
                </div>
            </div>
        </section>

        <section class="third_section">
            <div class="third_section_content fadein_wrap">
                <div class="left">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact_shape.png" class="contact_shape">
                </div>

                <div class="right">
                    <div class="right_content">
                        <?php if($section_3_headline): ?>
                            <h2><?php echo $section_3_headline; ?></h2>
                        <?php endif; ?>

                        <div class="form_holder">
                            <form action="">
                                <input type="text" name="name" placeholder="Name">
                                <input type="email" name="email" placeholder="Email">
                                <input type="text" name="subject" placeholder="Subject">
                                <input type="text" name="message" placeholder="Your Message">
                                <button>
                                    Submit
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/black_arrow.svg" alt="arrow">
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBouENgFTgcMfuaqUv7u0xRZxuENkx-d5Q&callback=initMap&libraries=&v=weekly"
    async
></script>
<script type="text/javascript">
    // Initialize and add the map
    var map_style = [
  {
    "featureType": "administrative",
    "elementType": "geometry",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "landscape",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "transit",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  }
]
    function initMap() {
        // The location of Uluru
        const uluru = { lat: 38.15642191606839, lng: -121.69013361492377 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 17,
        center: uluru,
        styles: map_style,
        
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
            position: uluru,
            icon: {
                url: "<?php echo get_template_directory_uri(); ?>/images/contact/map_icon.svg",
                labelOrigin: new google.maps.Point(90, 12),
                size: new google.maps.Size(35,35),
                anchor: new google.maps.Point(16,32)
            },
            label: {
                text: "TRUE NATURE",
                color: "black",
            },
        
            map: map,
        });
    }
</script>

<?php
get_footer(); ?>