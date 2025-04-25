<?php include('define.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us - Opris exchange</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $siteurl; ?>Images/favicon.png">
    <meta name="title" content="About us - Opris exchange" />
    <meta name="description"
        content="Learn about our Cryptocurrency Exchange Software Solution team and their expertise in building and managing successful platforms.">
    <meta name="keywords"
        content="cryptocurrency exchange software, cryptocurrency exchange software development company, cryptocurrency exchange software development, best white label cryptocurrency exchange software,ready made cryptocurrency exchange software">
    <meta name="robots" content="index, follow">

    <!--- Facebook OG code -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="About us - Opris exchange">
    <meta property="og:description"
        content="Learn about our Cryptocurrency Exchange Software Solution team and their expertise in building and managing successful platforms. " />
    <meta property="og:url" content="<?php echo $siteurl; ?>aboutus/" />
    <meta property="og:image" content="<?php echo $siteurl; ?>Images/cryptocurrency-exchange-software.png" />
    <meta property="og:image:secure_url" content="<?php echo $siteurl; ?>Images/cryptocurrency-exchange-software.png" />
    <meta property="og:image:alt" content="Cryptocurrency Exhcnage Software" />
    <meta property="og:site_name" content="Opris Exchange" />

    <!--- Twitter OG code -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@oprisexchange">
    <meta name="twitter:creator" content="@Oprisexchange">
    <meta name="twitter:description"
        content="Learn about our Cryptocurrency Exchange Software Solution team and their expertise in building and managing successful platforms." />
    <meta name="twitter:title" content="About us - Opris exchange" />
    <meta name="twitter:image" content="<?php echo $siteurl; ?>Images/cryptocurrency-exchange-software.png" />
    <?php if (isMobile()): ?>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
               
                setTimeout(function () {
                    var fontStyle = document.createElement("style");
                    fontStyle.innerHTML = `
                        @font-face {
                            font-family: 'Poppins';
                            font-style: normal;
                            font-weight: 400;
                            src: url("<?php echo $siteurl; ?>fonts/Poppins-Regular.otf") format("opentype");
                            font-display: swap;
                        }
                        body { font-family: 'Poppins', sans-serif; }
                    `;
                    document.head.appendChild(fontStyle);
                }, 10000); // Delay of 10 seconds
                
            });
        </script>
    <?php else: ?>
        <link rel="preload" href="<?php echo $siteurl; ?>fonts/Poppins-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
        <style>
            @font-face {
                font-family: 'Poppins';
                font-style: normal;
                font-weight: 400;
                src: url("<?php echo $siteurl; ?>fonts/Poppins-Regular.otf') format('opentype')");
                font-display: swap;
            }
        </style>
    <?php endif; ?>
    <style>
        .d-mobile{
            display:none !important;
        }.grid-images {
    max-width: 845px !important;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-align: center;
}
    </style>


    <!-- here is head file exist in all files -->
    <?php include('inc/head.php'); ?>
    <!-- here is head file exist in all files -->
    <!-- Extra files -->
    <link rel="stylesheet" href="<?php echo $siteurl; ?>assetsindex/css/boostrap/bootstrap.min.css" fetchpriority="low">
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/index.css<?php echo $version; ?>" />
    <link rel="stylesheet" href="<?php echo $siteurl; ?>assetsindex/css/swiper-bundle.min.css" fetchpriority="low">
    <!-- Extra files -->
    <!-- Link Swiper's CSS -->
    <link rel="canonical" href="https://www.opris.exchange/aboutus/" />

   

</head>

<body class="homepage-page">
    <!--- Header START -->

     <?php include('include/header.php'); ?>

    <!--- Header end -->
    <!-----  Banner start  -->
    <section class="banner-part">
        <div class="contain-width">
            <div class="row">
                <h1 class="response">Who We Are</h1>
                <div class="grid-images">
                    <div class="grid-item">
                        <div class="grid-emp-1">
                            <img src="<?php echo $siteurl; ?>Images/grid-emp-1.png" class="img-fluid"
                                alt="Cryptocurrency-exchange-software">
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-emp-2">
                            <img src="<?php echo $siteurl; ?>Images/grid-emp-2.png" class="img-fluid"
                                alt="Cryptocurrency-exchange-software">
                        </div>
                        <div class="grid-emp-3">
                            <img src="<?php echo $siteurl; ?>Images/grid-emp-3.png" class="img-fluid"
                                alt="Cryptocurrency-exchange-software">
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-emp-4">
                            <img src="<?php echo $siteurl; ?>Images/grid-emp-4.png" class="img-fluid"
                                alt="Cryptocurrency-exchange-software">
                        </div>
                        <div class="grid-emp-5">
                            <img src="<?php echo $siteurl; ?>Images/grid-emp-5.png" class="img-fluid"
                                alt="Cryptocurrency-exchange-software">
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-emp-6">
                            <img src="<?php echo $siteurl; ?>Images/grid-emp-6.png" class="img-fluid"
                                alt="Cryptocurrency-exchange-software">
                        </div>
                        <div class="grid-emp-7">
                            <img src="<?php echo $siteurl; ?>Images/grid-emp-7.png" class="img-fluid"
                                alt="Cryptocurrency-exchange-software">
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-emp-8">
                            <img src="<?php echo $siteurl; ?>Images/grid-emp-8.png" class="img-fluid"
                                alt="Cryptocurrency-exchange-software">
                        </div>
                        <div class="grid-emp-9">
                            <img src="<?php echo $siteurl; ?>Images/grid-emp-9.png" class="img-fluid"
                                alt="Cryptocurrency-exchange-software">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="our-story-section">
        <div class="contain-width">
            <div class="row">

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <h3>Our story</h3>
                    <p>We have been here in the crypto industry since the beginning. It weighs on the fearless
                        leadership and countless contributions of everyone around the world to make Opris a global
                        organization. Our team has carried out extensive development at the initial stage to determine
                        the best exchange process for your business.</p>
                    <p>Stepped into different domains globally to give highly secure cryptocurrency exchange. We scoop
                        in every component that makes a huge difference in our cryptocurrency exchange services.</p>
                    <p>We take great pride in providing the best services and making essential and last improvements to
                        the project. Opris offers trading services like order books, crypto derivatives, market making,
                        partial order fills and more make up our entire cryptocurrency architecture.</p>
                    <div class="intelignce-btn" style="margin-top:0px !important">
                        <div class="intelignce-btn" style="margin-top:0px !important">
                            <ul>
                                <li class="nav-item last-menu">
                                    <a class="nav-link menu-last" target="_blank"
                                        href="https://api.whatsapp.com/send?phone=919994248706&text=*Hi%20there!%20I%20am%20looking%20for%20your%20Services,%20Shall%20we%20Start%20the%20discussion*%20Lead%20From%20https://opris.exchange/"><span>Connect
                                            Whatsapp</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="our-story-image">
                        <img src="<?php echo $siteurl; ?>Images/our-story.png" class="img-fluid"
                            alt="Cryptocurrency-exchange-development-services">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-----  Banner end  -->
    <!-- try live demo section start -->
    <section class="interested-to-see-bsc">
        <div class="contain-width">
            <h3>“Opris's goal is to make digital currency safe and secure for everyone.”
            </h3>
            <div class="row">
                <div class="intelignce-btn" style="margin-top:0px !important">
                    <ul class="about">
                        <li class="nav-item last-menu mx-3 abouts">
                            <a class="nav-link menu-last" target="_blank"
                                href="https://api.whatsapp.com/send?phone=919994248706&text=*Hi%20there!%20I%20am%20looking%20for%20your%20Services,%20Shall%20we%20Start%20the%20discussion*%20Lead%20From%20https://opris.exchange/"><span>Connect
                                    Whatsapp</span></a>
                        </li>
                        <li class="nav-item last-menu mx-3">
                            <a class="nav-link menu-last" target="_blank"
                                href="https://telegram.me/Opris_sales"><span>Connect
                                    Telegram</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="our-potential-section">
        <div class="contain-width">
            <div class="row">

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="our-story-image">
                        <img src="<?php echo $siteurl; ?>Images/our-potential.png" class="img-fluid"
                            alt="Readymade-cryptocurrency-exchange-software">
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <h3>Our Potential Business Shift</h3>
                    <p>Opris exchange always tries to stay ahead of the curve when it comes to dealing with the
                        cryptocurrency industry. We always make sure to give the right thing to our clients and suggest
                        what’s best suited for their business. Our team gives the best idea about the white label
                        development or starting from scratch. Opris' advanced capabilities always align with the latest
                        implementation in any crypto sector. It is a substantial investment for our clients and gives a
                        lifetime of income.</p>
                    <p>Technology has come a long way and now everything is virtual. But our role is to help
                        businesspeople and entrepreneurs to create their digital currency exchange and run a successful
                        exchange business.</p>
                    <div class="intelignce-btn" style="margin-top:0px !important">
                        <ul>
                            <li class="nav-item last-menu">
                                <a class="nav-link menu-last" target="_blank"
                                    href="https://api.whatsapp.com/send?phone=919994248706&text=*Hi%20there!%20I%20am%20looking%20for%20your%20Services,%20Shall%20we%20Start%20the%20discussion*%20Lead%20From%20https://opris.exchange/"><span>Connect
                                        Whatsapp</span></a>
                            </li>
                        </ul>
                    </div>
                </div>



            </div>
        </div>
    </section>



    <section class="shared-vision">
        <div class="contain-width">
            <div class="row">

                <h3>Shared Vision - <span style="color:#d00101">Opris</span> Part Of An Crypto Ecosystem</h3>
                <p class="shared-vision-para">Digital currency is building the internet of money. We are focused and
                    driven<br> to help your business, boost revenue and increase efficiency.</p>

            </div>
        </div>

        <div class="contain-width shared-vision-bg">
            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="shared-icon"><img src="<?php echo $siteurl; ?>Images/shared-icon-1.png" alt="Revenue">
                    </div>
                    <h6>Revenue</h6>
                    <p>Create a completely branded cryptocurrency exchange to streamline your exchanges and increase
                        your money flow, or upgrade your current platform to include a feature like an order book,
                        trading, web socket API, and digital wallet support</p>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="shared-icon"><img src="<?php echo $siteurl; ?>Images/shared-icon-2.png"
                            alt="Client-Focused"></div>
                    <h6>Client Focused</h6>
                    <p>By allowing your users to purchase, store, and use cryptocurrency, we are committed to using
                        technology to solve the difficulties that our consumers face. We try to be the most dependable,
                        dependable, and secure platform.</p>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="shared-icon"><img src="<?php echo $siteurl; ?>Images/shared-icon-3.png"
                            alt="Efficiency"></div>
                    <h6>Efficiency</h6>
                    <p>Utilizing one admin system that manages your exchanges, and currency can help you optimize your
                        crypto exchange operations, boost efficiency, and digitize all manual processes.</p>
                </div>


            </div>
        </div>


    </section>


    <section class="interested-to-see-bsc">
        <div class="contain-width">
            <h3>“It’s more than just technology, It is increasing the economic freedom across the globe.”</h3>
            <div class="row">
                <div class="intelignce-btn" style="margin-top:0px !important">
                    <ul class="about">
                        <li class="nav-item last-menu mx-3 abouts">
                            <a class="nav-link menu-last about" target="_blank"
                                href="https://api.whatsapp.com/send?phone=919994248706&text=*Hi%20there!%20I%20am%20looking%20for%20your%20Services,%20Shall%20we%20Start%20the%20discussion*%20Lead%20From%20https://opris.exchange/"><span>Connect
                                    Whatsapp</span></a>
                        </li>
                        <li class="nav-item last-menu mx-3">
                            <a class="nav-link menu-last" target="_blank" href="skype:cid.b4d98d670fe822a2?chat"><span>
                                    Connect Skype </span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


     <?php include('include/form-inner.php'); ?>
     

     <?php include('include/footer.php'); ?>
    <script defer="true" async src="<?php echo $siteurl; ?>assets/js/aos.js"></script>
    <script src="<?php echo $siteurl; ?>assets/js/bootstrap.bundle.min.js" async defer></script>
    <script defer="true" async src="<?php echo $siteurl; ?>assetsindex/js/countrySelect.js<?php echo $version; ?>"></script>
    <script>
        window.onload = function () {
            setTimeout(function () {
                let countryInput = document.querySelector(".niceCountryInput");
                if (countryInput) {
                    let script = document.createElement("script");
                    script.src = "<?php echo $siteurl; ?>assetsindex/js/niceCountryInput.js";
                    document.body.appendChild(script);
                }

                let popper = document.querySelector(".popper");
                if (popper) {
                    let script = document.createElement("script");
                    script.src = "<?php echo $siteurl; ?>assetsindex/js/popper.min.js";
                    document.body.appendChild(script);
                }

                let slick = document.querySelector(".slick");
                if (slick) {
                    let script = document.createElement("script");
                    script.src = "<?php echo $siteurl; ?>assetsindex/js/slick.min.js";
                    document.body.appendChild(script);
                }
            }, 10000); 
           
        };
    </script>
    <?php if (isMobile()): ?>
        <script>
            window.onload = function () {
                setTimeout(function () {
                    let swiper = document.querySelector(".niceswiper");
                    if (swiper) {
                        let script = document.createElement("script");
                        // Check if the screen width is mobile (for example, less than 768px)
                        if (window.innerWidth <= 768) {
                            // For mobile, load script with defer
                            script.src = "<?php echo $siteurl; ?>assetsindex/js/swiper-bundle.min.js";
                            script.defer = true;
                        } else {
                            // For desktop, load script with defer as requested
                            script.src = "<?php echo $siteurl; ?>assetsindex/js/swiper-bundle.min.js";
                            script.defer = true;
                        }
                        document.body.appendChild(script);
                    }
                }, 10000); 
            };
        </script>
    <?php else: ?>
        <script defer="true" src="<?php echo $siteurl; ?>assetsindex/js/swiper-bundle.min.js"></script>
    <?php endif; ?>
    <script defer="true" src="<?php echo $siteurl; ?>js/script1.js"></script>

    <script>
        window.addEventListener('load', () => {
        AOS.init({
            once: true, // Ensures animations only happen once (prevents unnecessary shifts)
            duration: 800, // Adjust animation speed to be smoother
            easing: 'ease-out', // Adds smooth transition
        });
    });

    </script>
    <!-- Get to know about the cryptocurrency exchange software development services -->


    <script type="text/javascript">
        // Timeline Scroll Section

        var items = $(".timeline li"),

            timelineHeight = $(".timeline ul").height(),

            greyLine = $('.default-line'),

            lineToDraw = $('.draw-line');

        // sets the height that the greyLine (.default-line) should be according to `.timeline ul` height

        // run this function only if draw line exists on the page

        if (lineToDraw.length) {

            $(window).on('scroll', function () {

                // Need to constantly get '.draw-line' height to compare against '.default-line'

                var redLineHeight = lineToDraw.height(),

                    greyLineHeight = greyLine.height(),

                    windowDistance = $(window).scrollTop(),

                    windowHeight = $(window).height() / 2,

                    timelineDistance = $(".timeline").offset().top;

                if (windowDistance >= timelineDistance - windowHeight) {

                    line = windowDistance - timelineDistance + windowHeight;

                    if (line <= greyLineHeight) {

                        lineToDraw.css({

                            'height': line + 20 + 'px'

                        });

                    }

                }

                // This takes care of adding the class in-view to the li:before items

                var bottom = lineToDraw.offset().top + lineToDraw.outerHeight(true);

                items.each(function (index) {

                    var circlePosition = $(this).offset();

                    if (bottom > circlePosition.top) {

                        $(this).addClass('in-view');

                    } else {

                        $(this).removeClass('in-view');

                    }

                });

            });

        }
    </script>

    <script>
        $(document).ready(function () {

            $('.accrd-panel-head').click(function () {

                if ($(this).hasClass('active')) {

                    $(this).removeClass('active');

                    $(this).siblings('.accrd-panel-body').slideUp(200);

                    $(this).parent('.block-1').removeClass('coloured');

                } else {

                    $('.accrd-panel-head').removeClass('active');

                    $(this).addClass('active');

                    $('.accrd-panel-head').siblings('.accrd-panel-body').slideUp(200);

                    $(this).siblings('.accrd-panel-body').slideDown(200);

                    $('.accrd-panel-head').parent('.block-1').removeClass('coloured');

                    $(this).parent('.block-1').addClass('coloured');

                }

            });

            $('.accrd-panel-head-cdp').mouseover(function () {

                if ($(this).hasClass('active')) {

                    $(this).removeClass('active');

                    // $(this).parent('.block-cdp').removeClass('slide-cls');

                    // $(this).siblings('.accrd-panel-body-cdp').slideUp(200);

                    $(this).parent('.block-1').removeClass('coloured');

                } else {

                    $('.accrd-panel-head-cdp').removeClass('active');

                    $(this).addClass('active');

                    $('.accrd-panel-head-cdp').siblings('.accrd-panel-body-cdp').slideUp(200);

                    $(this).siblings('.accrd-panel-body-cdp').slideDown(200);

                    $('.accrd-panel-head-cdp').parent('.block-1').removeClass('coloured');

                    $(this).parent('.block-1').addClass('coloured');

                    $('.accrd-panel-head-cdp').parent('.block-cdp').removeClass('slide-cls');

                    $(this).parent('.block-cdp').addClass('slide-cls');

                }

            });

            $('.accrd-panel-head-sdl').mouseover(function () {

                if ($(this).hasClass('active')) {

                    $(this).removeClass('active');

                    // $(this).parent('.block-sdl').removeClass('slide-cls');

                    // $(this).siblings('.accrd-panel-body-sdl').slideUp(200);

                    $(this).parent('.block-1').removeClass('coloured');

                } else {

                    $('.accrd-panel-head-sdl').removeClass('active');

                    $(this).addClass('active');

                    $('.accrd-panel-head-sdl').siblings('.accrd-panel-body-sdl').slideUp(200);

                    $(this).siblings('.accrd-panel-body-sdl').slideDown(200);

                    $('.accrd-panel-head-sdl').parent('.block-1').removeClass('coloured');

                    $(this).parent('.block-1').addClass('coloured');

                    $('.accrd-panel-head-sdl').parent('.block-sdl').removeClass('slide-cls');

                    $(this).parent('.block-sdl').addClass('slide-cls');

                }

            });

            $('.accrd-panel-head-sps').mouseover(function () {

                if ($(this).hasClass('active')) {

                    $(this).removeClass('active');

                    // $(this).parent('.block-sps').removeClass('slide-cls');

                    // $(this).siblings('.accrd-panel-body-sps').slideUp(200);

                    $(this).parent('.block-1').removeClass('coloured');

                } else {

                    $('.accrd-panel-head-sps').removeClass('active');

                    $(this).addClass('active');

                    $('.accrd-panel-head-sps').siblings('.accrd-panel-body-sps').slideUp(200);

                    $(this).siblings('.accrd-panel-body-sps').slideDown(200);

                    $('.accrd-panel-head-sps').parent('.block-1').removeClass('coloured');

                    $(this).parent('.block-1').addClass('coloured');

                    $('.accrd-panel-head-sps').parent('.block-sps').removeClass('slide-cls');

                    $(this).parent('.block-sps').addClass('slide-cls');

                }

            });

            $('.inner-risk-head').click(function () {

                $(this).addClass('active');

                $(this).siblings('.inner-risk-body').slideDown(200);

                $(this).parent('.inner-risk').addClass('top-bordered');

            });

        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const thumbnailsContainer = document.getElementById("carouselp-thumbnails");
            const thumbnails = document.querySelectorAll(".thumbnail");
            const mainImage = document.getElementById("carouselp-main-image");
            const title = document.getElementById("carouselp-title");
            const description = document.getElementById("carouselp-description");


            let currentIndex = 0; // Tracks the currently displayed thumbnail
            const thumbnailWidth = 147; // Thumbnail width including margins
            const containerWidth = thumbnailsContainer.offsetWidth;
            const visibleThumbnails = Math.floor(containerWidth / thumbnailWidth);
            const totalThumbnails = thumbnails.length;

            // Function to update the main image
            function updateMainImage(index) {
                thumbnails.forEach((thumb, idx) => {
                    thumb.classList.toggle("active", idx === index);
                });

                const selectedThumbnail = thumbnails[index];
                mainImage.src = selectedThumbnail.getAttribute("data-large");
                title.textContent = selectedThumbnail.getAttribute("data-title");
                description.textContent = selectedThumbnail.getAttribute("data-description");
            }


            // Attach click event to each thumbnail to update the main image
            thumbnails.forEach((thumb, index) => {
                thumb.addEventListener("click", () => {
                    updateMainImage(index);
                });
            });

            // Initialize the carousel with the first thumbnail active
            updateMainImage(0);
        });

    </script>
    <script defer>
  document.addEventListener("DOMContentLoaded", function () {
    if (typeof Swiper !== "undefined") {
      const swiper = new Swiper(".reviewSwiper", {
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        loop: true,
        autoplay: {
          delay: 5000,
        },
        breakpoints: {
          320: { slidesPerView: 1, spaceBetween: 10 },
          768: { slidesPerView: 2, spaceBetween: 15 },
          1024: { slidesPerView: 3, spaceBetween: 30 },
        },
        on: {
          init() {
            scaleSlides();
          },
          slideChangeTransitionStart() {
            scaleSlides();
          },
        },
      });

      function scaleSlides() {
        document.querySelectorAll(".reviewSwiper .swiper-slide").forEach(slide => {
          slide.style.transform = "scale(0.6)";
        });

        const activeSlide = document.querySelector(".reviewSwiper .swiper-slide.swiper-slide-active");
        if (activeSlide) {
          activeSlide.style.transform = "scale(1)";
        }
      }
    }
  });
</script>

    <script defer>
  document.addEventListener("DOMContentLoaded", function () {
    // Initialize Swiper after the page has loaded
    if (typeof Swiper !== "undefined") {
      new Swiper(".slide-content", {
        slidesPerView: 3,
        spaceBetween: 25,
        loop: true,
        grabCursor: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          dynamicBullets: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          0: { slidesPerView: 1 },
          767: { slidesPerView: 2 },
          950: { slidesPerView: 3 },
        },
      });
    }

    // TypeWriter Effect
    class TypeWriter {
      constructor(txtElement, words, wait = 1000) {
        this.txtElement = txtElement;
        this.words = words;
        this.txt = "";
        this.wordIndex = 0;
        this.wait = parseInt(wait, 10);
        this.isDeleting = false;
        setTimeout(() => this.type(), 500); // Start after delay
      }

      type() {
        const current = this.wordIndex % this.words.length;
        const fullTxt = this.words[current];

        this.txt = this.isDeleting
          ? fullTxt.substring(0, this.txt.length - 1)
          : fullTxt.substring(0, this.txt.length + 1);

        this.txtElement.innerHTML = `<span class="txt" style="color: #e2000f;width:100px;min-width:150px;display:inline-block;font-size:23px">${this.txt}</span>`;

        let typeSpeed = this.isDeleting ? 25 : 50;

        if (!this.isDeleting && this.txt === fullTxt) {
          typeSpeed = this.wait;
          this.isDeleting = true;
        } else if (this.isDeleting && this.txt === "") {
          this.isDeleting = false;
          this.wordIndex++;
          typeSpeed = 400;
        }

        setTimeout(() => this.type(), typeSpeed);
      }
    }

    // Initialize TypeWriter if element exists
    const txtElement = document.querySelector(".txt-type");
    if (txtElement) {
      const words = JSON.parse(txtElement.getAttribute("data-words"));
      const wait = txtElement.getAttribute("data-wait") || 1000;
      new TypeWriter(txtElement, words, wait);
    }
  });
</script>

</body>

</html>