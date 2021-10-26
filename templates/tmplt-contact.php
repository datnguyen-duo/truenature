<?php
/* Template Name: Contact */

get_header(); ?>


<div class="template_contact">
    <div class="template_contact_content">
        <section class="first_section">
            <div class="first_section_content fadein_wrap">
                <div class="left">
                    <div class="image_holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact.png" alt="Yoga Therapy">
                    </div>
                </div>
                <div class="right">
                    <div class="right_content">
                        <h2>
                            contact <br>  us
                        </h2>

                        <div class="contact_info">
                            <div class="single_info">
                                <span>Call us</span>
                                <a href="tel:5306807044">530/680-7044</a>
                            </div>
                            <div class="single_info">
                                <span>Email us</span>
                                <a href="mailto:briana@truenature.us.com">briana@truenature.us.com</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="second_section">
            <div class="second_section_content fadein_wrap">
                <div class="left">
                    <div class="left_content">
                        <h2>
                            //find us at
                        </h2>

                        <h3>
                            35 North Front Street <br> Rio Vista CA
                        </h3>

                        <a>
                            Get directions
                            <img src="<?php echo get_template_directory_uri(); ?>/images/black_arrow.svg" alt="arrow">
                        </a>
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
                        <h2>//Send us a <br> message</h2>

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
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
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
        disableDefaultUI: true,
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