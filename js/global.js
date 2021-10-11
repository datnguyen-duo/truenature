
(function ($) { //document ready
    $(document).ready(function(){
        
        /*	-----------------------------------------------------------------------------
        SMOOTH SCROLL START
        --------------------------------------------------------------------------------- */

        let container = document.querySelector("#scroll-container");

        let height;
        function setHeight() {
        height = container.clientHeight;
        document.body.style.height = height + "px";
        }
        ScrollTrigger.addEventListener("refreshInit", setHeight);

        // smooth scrolling container
        gsap.to(container, {
        y: () => -(height - document.documentElement.clientHeight),
        ease: "none",
        scrollTrigger: {
            trigger: document.body,
            start: "top top",
            end: "bottom bottom",
            scrub: 1,
            invalidateOnRefresh: true
        }
        });
        // function initScroll() {
        //     new SmoothScroll(document, 20, 12);
        // }
        
        // var pos = 0;
        
        // setTimeout(function(){
        //     pos = $(document).scrollTop();
        // }, 500)
        
        // function SmoothScroll(target, speed, smooth) {
        //     if (target === document)
        //         target = (document.scrollingElement ||
        //             document.documentElement ||
        //             document.body.parentNode ||
        //             document.body) // cross browser support for document scrolling
        
        //     var moving = false
        //     var frame = target === document.body &&
        //         document.documentElement ?
        //         document.documentElement :
        //         target // safari is the new IE
        
        //     target.addEventListener('mousewheel', scrolled, { passive: false })
        //     target.addEventListener('DOMMouseScroll', scrolled, { passive: false })
        
        //     function scrolled(e) {
        //         e.preventDefault(); // disable default scrolling
        
        //         var delta = normalizeWheelDelta(e)
        
        //         pos += -delta * speed
        //         pos = Math.max(0, Math.min(pos, target.scrollHeight + 20 - frame.clientHeight)) // limit scrolling
        
        //         if (!moving) update()
        //     }
        
        //     function normalizeWheelDelta(e) {
        //         if (e.detail) {
        //             if (e.wheelDelta)
        //                 return e.wheelDelta / e.detail / 40 * (e.detail > 0 ? 1 : -1) // Opera
        //             else
        //                 return -e.detail / 3 // Firefox
        //         } else
        //             return e.wheelDelta / 120 // IE,Safari,Chrome
        //     }
        
        //     function update() {
        //         moving = true
        
        //         var delta = (pos - target.scrollTop) / smooth
        
        //         target.scrollTop += delta
        
        //         if (Math.abs(delta) > 0.5)
        //             requestFrame(update)
        //         else
        //             moving = false
        //     }
        
        //     var requestFrame = function() { // requestAnimationFrame cross browser
        //         return (
        //             window.requestAnimationFrame ||
        //             window.webkitRequestAnimationFrame ||
        //             window.mozRequestAnimationFrame ||
        //             window.oRequestAnimationFrame ||
        //             window.msRequestAnimationFrame ||
        //             function(func) {
        //                 window.setTimeout(func, 1000 / 50);
        //             }
        //         );
        //     }()
        // }
        
        /*	-----------------------------------------------------------------------------
            SMOOTH SCROLL END
        --------------------------------------------------------------------------------- */
        // initScroll();

        $("a[href^='#']").click(function(e) {
            e.preventDefault();
            pos = $($(this).attr('href')).offset().top;
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 1000);
        });

        /*	-----------------------------------------------------------------------------
        loader OPENER START
        --------------------------------------------------------------------------------- */
        let loader = sessionStorage.getItem("loader");

        if ($('.loader').length && loader != 'true') {
            sessionStorage.setItem('loader', 'true');
            var tl = gsap.timeline({
                onComplete: function () {
                    // console.log("complete");
                },
            });
    
            let firstDescription = $(".single_description.first");
            let secondDescription = $(".single_description.second");
            let loader_content = $(".loader_content");
            let loader = $(".loader");
            let shape1 = $(".shape1, .glow1");
            let shape2 = $(".shape2, .glow2");
            let hero_content = $(".hero_content");
    
            tl.to(firstDescription, { opacity: 0, duration: 0.7, delay: 1 });
            tl.to(secondDescription, { opacity: 1, duration: 0.7 });
            tl.to(loader_content, { opacity: 0, duration: 0.7, delay: 1 });
            tl.to(loader, { height: '0%' });
            tl.to(shape1, { opacity: 1, duration: 0.7 });
            tl.to(shape2, { opacity: 1, duration: 0.7 });
            tl.to(hero_content, { opacity: 1, top: '0px', duration: 0.7, ease: "power2.inOut" }, "<");
        } else{
            $('.loader').css('display', 'none');

            var tl = gsap.timeline({
                onComplete: function () {
                    // console.log("complete");
                },
            });
            let shape1 = $(".shape1, .glow1");
            let shape2 = $(".shape2, .glow2");
            let hero_content = $(".hero_content");
            tl.to(shape1, { opacity: 1, duration: 0.7 });
            tl.to(shape2, { opacity: 1, duration: 0.7 });
            tl.to(hero_content, { opacity: 1, top: '0px', duration: 0.7, ease: "power2.inOut" }, "<");
        }
        /*	-----------------------------------------------------------------------------
        loader OPENER End
        --------------------------------------------------------------------------------- */

        var $slickElement = $('.testemonials');
        var $status = $('.pagingInfo');

        $slickElement.slick({
            slidesToShow: 1,
            fade: true,
            autoplay: true,
            appendArrows: $('.new_arrows'),
            prevArrow: '<div class="news__arrow news__arrow_dir_left"><img src="'+site_data.theme_url+'/images/slider_arrow.svg"/ class="prev"></div>',
            nextArrow: '<div class="news__arrow news__arrow_dir_right"><img src="'+site_data.theme_url+'/images/slider_arrow.svg" class="next"/></div>',
        });


        $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
            //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
            var i = (currentSlide ? currentSlide : 0) + 1;
            $status.text(i + '/' + slick.slideCount);
        });

        
        /*	-----------------------------------------------------------------------------
        MENU OPENER START
        --------------------------------------------------------------------------------- */
        var menuOpen = gsap.timeline({
            paused:true, 
            reversed:true,
            onComplete: function () {
                console.log("complete");
            },
        });

        let nav_holder = $(".nav_holder");
        let listItem = $("nav ul li");
        menuOpen.to(nav_holder, { visibility: 'visible', height: '100vh', duration: 0.7, ease: "power2.inOut"});
        menuOpen.to(listItem, { top: '0px', opacity: 1, stagger: 0.1});

        $('.menu_opener').on('click', function(){
            if($(this).find('p').text() == 'MENU'){
                $(this).find('p').text('CLOSE');
                $('.header_content .logo').addClass('menuOpen')
            } else{
                $(this).find('p').text('MENU')
                $('.header_content .logo').removeClass('menuOpen')
            }
            menuOpen.reversed() ? menuOpen.play() : menuOpen.reverse();
        })
        /*	-----------------------------------------------------------------------------
        MENU OPENER END
        --------------------------------------------------------------------------------- */

        $(window).scroll(function() {
            var showLogo = $('.first_section').offset().top
            var scrolled = $(window).scrollTop();

            if(showLogo < scrolled){
                $('.header_content .logo').addClass('visible');
            } else{
                $('.header_content .logo').removeClass('visible');
            }
        });
    });

    /*	-----------------------------------------------------------------------------
    SCROLL TRIGGERS
    --------------------------------------------------------------------------------- */

    $(window).on("load", function () {
        let animationTrigger = $(".fadein_wrap");
      
        animationTrigger.each(function () {
          let trigger = $(this);
          let headlineClasssName = "in_view";
      
          gsap.to(animationTrigger, {
            scrollTrigger: {
              trigger: trigger,
              start: "top 70%",
              onEnter: function() {
                $(trigger).addClass("in_view")
              },
            },
          });
        });
      });
}(jQuery));