<?php include ('define.php'); ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="preload" href="<?php echo $siteurl; ?>fonts/Poppins-Regular.otf" as="font" type="font/otf" crossorigin>
    <title>Opris Portfolio</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $siteurl; ?>Images/favicon.png">
    <meta name="title" content="Portfolio" />
    <meta name="description" content="Explore Opris' portfolio of innovative blockchain solutions and robust crypto trading bots, customized to empower businesses in the digital economy.">
    <meta name="keywords" content="opris portfolio, portfolio">
    <meta name="robots" content="index, follow">
    <meta name="p:domain_verify" content="4cc4a899a108609eb666d28a904af75f" />

    <!--- Facebook OG code -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Opris Portfolio" />
    <meta property="og:description" content="Explore Opris' portfolio of innovative blockchain solutions and robust crypto trading bots, customized to empower businesses in the digital economy." />
    <meta property="og:url" content="<?php echo $siteurl; ?>portfolio/" />
    <meta property="og:image" content="<?php echo $siteurl; ?>assets/images/og-images/portfolio.png" />
    <meta property="og:image:secure_url" content="https:<?php echo $siteurl; ?>assets/images/og-images/portfolio.png" />
    <meta property="og:image:alt" content="Portfolio" />
    <meta property="og:site_name" content="Opris Exchange" />

    <!--- Twitter OG code -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@oprisexchange">
    <meta name="twitter:creator" content="@Oprisexchange">
    <meta name="twitter:description" content="Explore Opris' portfolio of innovative blockchain solutions and robust crypto trading bots, customized to empower businesses in the digital economy." />
    <meta name="twitter:title" content="Opris Portfolio" />
    <meta name="twitter:image" content="<?php echo $siteurl; ?>assets/images/og-images/portfolio.png" />
   
    <link rel="canonical" href="<?php echo $siteurl; ?>portfolio/" />


    <style>
    @font-face {
        font-family: poppins;
        font-style: normal;
        src: url("../fonts/Poppins-Regular.otf");
        font-display: swap;
    }
    </style>
    
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>css/bootstrap.min.css" fetchpriority="low">
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/custom.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/header.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/portfolio.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/footer.css"  fetchpriority="low"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>css/form.css" fetchpriority="low">
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/media.css" fetchpriority="low"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>css/contact.css" fetchpriority="low">
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assetsindex/css/fontawesome/css/all.min.css" as="font" fetchpriority="low">
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/aos.css" fetchpriority="low">
    <link rel="preload" href="<?php echo $siteurl; ?>/assets/images/logo.webp" as="image" fetchpriority="high">
  
    <link rel="stylesheet" href="<?php echo $siteurl; ?>assets/css/swiper-bundle.min.css">

    <link rel="icon" type="image/x-icon" href="<?php echo $siteurl; ?>Images/favicon.png">


</head>

<body class="portfolio-page">
    <?php include ('include/header.php'); ?>
    <!--- Header START -->
    <!--- Header end -->
    <!-----  Banner start  -->
    <section class="banner-part">
        <div class="contain-width">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
               
                    <h1><label>We Transform You Digitally</label> Powered by 
                    <div class="slidingVertical">
      <span>young</span>
      <span>passionate </span>
      <span>innovative </span>
    </div> <div class="slider-end-text">minds</div></h1>
                   
                    <div class="explore-btn mt-5">
                        <a href="<?php echo $siteurl; ?>contactus" target="_blank">Get Demo</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <div class="banner-img">
                <img src="<?php echo $siteurl; ?>assets/Image/portfolio/banner-img.webp" loading="eager" alt="Portfolio" >
                </div>
                </div>
                </div>
          
            </div>
        </div>
    </section>


    <!-----  Banner end  -->
    <section class="our-portfolio section-top-pt">
        <div class="contain-width">
          <h2 class="text-center">Our <span>Portfolio</span></h2>
          <div class="carouselp">
            <div class="row align-items-center">
              <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                <div class="carouselp-left">
                    <!--<span>case study</span>-->
                    <h3 id="carouselp-title"></h3>
                    <label>Web design</label><label>Development</label>
                    <p id="carouselp-description" class="portfolio-carousel-content">
                    </p>
                    <div class="explore-btn">
                      <a href="<?php echo $siteurl; ?>contact-us/" target="_blank">GET LIVE DEMO <span><svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10.1667 1.51855L1 10.6852M10.1667 1.51855C10.1667 1.51855 8.89352 2.02781 6.34722 2.02781C3.80093 2.02781 2.52778 1.51855 2.52778 1.51855M10.1667 1.51855C10.1667 1.51855 9.65741 2.7917 9.65741 5.338C9.65741 7.8843 10.1667 9.15744 10.1667 9.15744" stroke="#0B001A" stroke-width="0.916667" stroke-linecap="square" stroke-linejoin="round"/>
</svg>
                      </a></span></a>
                    </div>
                    <div class="carouselp-thumbnails thumbnails-wrapper">
                <img src="<?php echo $siteurl; ?>assets/Image/portfolio/portfolio-small-img-3.webp" alt="portfolio" loading="lazy" class="thumbnail active" data-large="<?php echo $siteurl; ?>assets/Image/portfolio/portfolio-large-img-3.webp" data-title="Payment Gateway" data-description="Implemented scalable and user-friendly solutions to handle high transaction volumes, focusing on security, reliability, and global accessibility."/>
                <img src="<?php echo $siteurl; ?>assets/Image/portfolio/portfolio-small-img-1.webp" alt="portfolio" loading="lazy" class="thumbnail" data-large="<?php echo $siteurl; ?>assets/Image/portfolio/portfolio-large-img-1.webp" data-title="Crypto Exchange" data-description="Built a scalable crypto exchange solution to handle high volumes of transactions, ensuring fast execution and a smooth user experience." />
                <img src="<?php echo $siteurl; ?>assets/Image/portfolio/portfolio-small-img-2.webp" alt="portfolio" loading="lazy" class="thumbnail" data-large="<?php echo $siteurl; ?>assets/Image/portfolio/portfolio-large-img-2.webp" data-title="Crypto Wallet" data-description="Developed a secure and user-friendly crypto wallet that enables safe storage, transfer, and management of digital assets with a focus on privacy and ease of access." />
                <img src="<?php echo $siteurl; ?>assets/Image/portfolio/portfolio-small-img-4.webp" alt="portfolio" loading="lazy" class="thumbnail" data-large="<?php echo $siteurl; ?>assets/Image/portfolio/portfolio-large-img-4.webp" data-title="Defi" data-description="Designed a cutting-edge DeFi application that allows users to participate in decentralized lending, trading, and yield farming, all while ensuring transparency and security." />
                <img src="<?php echo $siteurl; ?>assets/Image/portfolio/portfolio-small-img-5.webp" alt="portfolio" loading="lazy" class="thumbnail" data-large="<?php echo $siteurl; ?>assets/Image/portfolio/portfolio-large-img-5.webp" data-title="Crypto Trading Bot" data-description="Developed secure and efficient crypto trading bots with advanced algorithms for automated trading, optimized asset management, and seamless trade execution, designed for both beginners and experienced traders." />
                <img src="<?php echo $siteurl; ?>assets/Image/portfolio/portfolio-small-img-6.webp" alt="portfolio" loading="lazy" class="thumbnail" data-large="<?php echo $siteurl; ?>assets/Image/portfolio/portfolio-large-img-6.webp" data-title="Crypto Exchange" data-description="Created secure and scalable crypto exchange platforms with intuitive interfaces and robust security, providing a reliable environment for digital asset trading for all user levels." />
                <img src="<?php echo $siteurl; ?>assets/Image/portfolio/portfolio-small-img-7.webp" alt="portfolio" loading="lazy" class="thumbnail" data-large="<?php echo $siteurl; ?>assets/Image/portfolio/portfolio-large-img-7.webp" data-title="Crypto Trading Bot" data-description="Engineered crypto trading bots that automate market analysis and execute trades with precision, helping users take advantage of real-time market opportunities with minimal effort." />
                <img src="<?php echo $siteurl; ?>assets/Image/portfolio/portfolio-small-img-8.webp" alt="portfolio" loading="lazy" class="thumbnail" data-large="<?php echo $siteurl; ?>assets/Image/portfolio/portfolio-large-img-8.webp" data-title="Crypto Exchange" data-description="Created mobile-friendly crypto exchange platforms, offering secure, intuitive, and seamless trading experiences on-the-go. Our mobile solutions prioritize fast transactions, high security, and user convenience, enabling traders to manage their digital assets anytime, anywhere." />
         
            </div>
                        <!-- Pagination buttons -->
            <div class="carouselp-pagination">
                <span class="pagination-dot active" data-index="0"></span>
                <span class="pagination-dot" data-index="1"></span>
                <span class="pagination-dot" data-index="2"></span>
                <span class="pagination-dot" data-index="3"></span>
                <span class="pagination-dot" data-index="4"></span>
                <span class="pagination-dot" data-index="5"></span>
                <span class="pagination-dot" data-index="6"></span>
                <span class="pagination-dot" data-index="7"></span>
              </div>
                </div>
              </div>
              <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                <div class="carouselp-right">
                  <img id="carouselp-main-image" src="<?php echo $siteurl; ?>assets/Image/portfolio/portfolio-large-img-3.webp" alt="portfolio" loading="lazy" />
                </div>
              </div>
            </div>
                </div>
        </div>
      </section>
    <section class="our-clients-say section-top-pt">
        <div class="contain-width">
            <h2 class="text-center" >What Our <span>Clients Say</span></h2>
            <div class="swiper swiperEffect">
      <div class="swiper-wrapper">
        <div class="swiper-slide"> 
          <div class="row align-items-center">
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
          <div class="card-image"> <img src="<?php echo $siteurl; ?>assets/Image/portfolio/client-img-1.webp" alt="Portfolio" width="309" height="439" loading="lazy" class="img-fluid">
              </div>
              </div>
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
              <div class="card-description">
                <h3>Oliver</h3>
                <p>Thank you for your excellent coordination and dedication. We had an urgent project, and your team completed it within the given timeframe while delivering a top-quality product. Thank you, Opris!</p>
                <div class="rating">
      <span class="rating-value">4.2</span>
      <div class="stars">
        <i class="star fas fa-star full"></i>
        <i class="star fas fa-star full"></i>
        <i class="star fas fa-star full"></i>
        <i class="star fas fa-star full"></i>
        <i class="star fas fa-star-half-alt half"></i>
      </div>
    </div>
              </div>
              </div>
          </div>
        
          </div>
          <div class="swiper-slide"> 
          <div class="row align-items-center">
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
          <div class="card-image"> <img src="<?php echo $siteurl; ?>assets/Image/portfolio/client-img-2.webp" width="309" height="439" loading="lazy" class="img-fluid" alt="Portfolio" >
              </div>
              </div>
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
              <div class="card-description">
                <h3>Kirman</h3>
                <p>I am new to business and was initially scared about my decentralized wallet development project. However, Opris provided me with complete support from planning to launch. As a startup, I didn’t have a clear understanding of the project, but they did. Thank you so much, Opris!</p>
                <div class="rating">
      <span class="rating-value">4.7</span>
      <div class="stars">
        <i class="star fas fa-star full"></i>
        <i class="star fas fa-star full"></i>
        <i class="star fas fa-star full"></i>
        <i class="star fas fa-star full"></i>
        <i class="star fas fa-star-half-alt half"></i>
        
      </div>
    </div>
              </div>
              </div>
          </div>
        
          </div>
          <div class="swiper-slide"> 
          <div class="row align-items-center">
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
          <div class="card-image"> <img src="<?php echo $siteurl; ?>assets/Image/portfolio/client-img-3.webp" width="309" height="439" loading="lazy" class="img-fluid" alt="Portfolio">
              </div>
              </div>
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
              <div class="card-description">
                <h3>Hassan</h3>
                <p>Great work by the Opris team! Their skill and expertise in blockchain development are extraordinary. Our crypto exchange project was completed with high-end features, and they continue to provide support even after the launch. That's truly great support from them.</p>
                <div class="rating">
      <span class="rating-value">4.0</span>
      <div class="stars">
        <i class="star fas fa-star full"></i>
        <i class="star fas fa-star full"></i>
        <i class="star fas fa-star full"></i>
        <i class="star fas fa-star full"></i>
        <i class="star fas fa-star"></i>
      </div>
    </div>
              </div>
              </div>
          </div>
        
          </div>
          <div class="swiper-slide"> 
          <div class="row align-items-center">
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
          <div class="card-image"> <img src="<?php echo $siteurl; ?>assets/Image/portfolio/client-img-4.webp" width="309" height="439" loading="lazy" class="img-fluid" alt="Portfolio">
              </div>
              </div>
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
              <div class="card-description">
                <h3>Isabellah</h3>
                <p>I want to take a moment to appreciate the Opris team for their strong expertise in the field and their excellent coordination with us. Their support at any time made us feel comfortable and helped us complete our project with ease. Now, our project is running very successfully. Thank you, Opris, for your dedication!</p>
                <div class="rating">
      <span class="rating-value">5.0</span>
      <div class="stars">
        <i class="star fas fa-star full"></i>
        <i class="star fas fa-star full"></i>
        <i class="star fas fa-star full"></i>
        <i class="star fas fa-star full"></i>
        <i class="star fas fa-star full"></i>

      </div>
    </div>
              </div>
              </div>
          </div>
        
          </div>
          <div class="swiper-slide"> 
          <div class="row align-items-center">
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
          <div class="card-image"> <img src="<?php echo $siteurl; ?>assets/Image/portfolio/client-img-5.webp" width="309" height="439" loading="lazy" class="img-fluid" alt="Portfolio">
              </div>
              </div>
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
              <div class="card-description">
                <h3>Usman</h3>
                <p>We have worked with Opris on more than two projects. Both projects were well-equipped and developed based on detailed requirements. They delivered more than we expected. Thank you so much to the Opris team, and all the best for your future projects!</p>
                <div class="rating">
      <span class="rating-value">4.1</span>
      <div class="stars">
        <i class="star fas fa-star full"></i>
        <i class="star fas fa-star full"></i>
        <i class="star fas fa-star full"></i>
        <i class="star fas fa-star full"></i>
        <i class="star fas fa-star-half-alt half"></i>
      </div>
    </div>
              </div>
              </div>
          </div>
        
          </div>       

      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>


            </div>
            </section>
    <section class="clent-review  section-top-mt">
        <div class="contain-width">
            <div class="clients-box">
                <div class="review-box" data-aos="fade-right">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-1.svg" class="img-fluid"
                            alt="portfolio" loading="lazy" width="31"
                            height="31" />
                    </div>
                    <p>100 <span>+</span></p>
                    <span>Happy clients</span>
                </div>
                <div class="review-box" data-aos="fade-right">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-2.svg" class="img-fluid"
                            alt="portfolio" loading="lazy" width="31"
                            height="31" />
                    </div>
                    <p>40 <span>+</span></p>
                    <span>Blockchain Experts</span>
                </div>
                <div class="review-box" data-aos="fade-right">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-3.svg" class="img-fluid"
                            alt="portfolio" loading="lazy" width="31"
                            height="31" />
                    </div>
                    <p>150 <span>+</span></p>
                    <span>Successful projects  </span>
                </div>
                <div class="review-box" data-aos="fade-right">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-4.svg" class="img-fluid"
                            alt="portfolio" loading="lazy" width="31"
                            height="31" />
                    </div>
                    <p>3 <span>+</span></p>
                    <span>Years of Experience</span>
                </div>
                <div class="review-box" data-aos="fade-right">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-5.svg" class="img-fluid"
                            alt="portfolio" loading="lazy" width="31"
                            height="31" />
                    </div>
                    <p>30 <span>+</span></p>
                    <span>Nations served</span>
                </div>
            </div>
        </div>
    </section>

    <section class="our-honors section-top-pt">
        <div class="contain-width">
            <h2 class="text-center" ><span>Our Honors</span></h2>
            <div class="awards-logo">
                <div class="award-box">
                    <img src="../assets/images/landing/award-1.webp" class="img-fluid" alt="portfolio" loading="lazy" width="110" height="85">
                </div>
                <div class="award-box">
                    <img src="../assets/images/landing/award-2.webp" class="img-fluid" alt="portfolio" loading="lazy" width="125" height="124">
                </div>
                <div class="award-box">
                    <img src="../assets/images/landing/award-3.webp" class="img-fluid" alt="portfolio" loading="lazy" width="106" height="125">
                </div>
                <div class="award-box">
                    <img src="../assets/images/landing/award-4.webp" class="img-fluid" alt="portfolio" loading="lazy" width="119" height="119">
                </div>
                <div class="award-box">
                    <img src="../assets/images/landing/award-5.webp" class="img-fluid" alt="portfolio" loading="lazy" width="136" height="109">
                </div>
            </div>
        </div>
    </section>
    <section class="technology section-top-pt">
    <div class="contain-width">
        <div class="technology-block">
    <h2 class="text-center">Our <span>Technology</span> Expertise</h2>
<div class="technology-inner-block">
    <div class="technology-block-img">
    <img src="<?php echo $siteurl; ?>assets/Image/portfolio/technology-1.svg" class="img-fluid"  alt="portfolio" loading="lazy" width="82" height="82" />
    </div>
    <div class="technology-block-img">
    <img src="<?php echo $siteurl; ?>assets/Image/portfolio/technology-2.svg" class="img-fluid"  alt="portfolio" loading="lazy" width="82" height="82" />
    </div>
    <div class="technology-block-img">
    <img src="<?php echo $siteurl; ?>assets/Image/portfolio/technology-3.svg" class="img-fluid"  alt="portfolio" loading="lazy" width="82" height="82" />
    </div>
    <div class="technology-block-img">
    <img src="<?php echo $siteurl; ?>assets/Image/portfolio/technology-4.svg" class="img-fluid"  alt="portfolio" loading="lazy" width="82" height="82" />
    </div>
    <div class="technology-block-img">
    <img src="<?php echo $siteurl; ?>assets/Image/portfolio/technology-5.svg" class="img-fluid"  alt="portfolio" loading="lazy" width="82" height="82" />
    </div>
    <div class="technology-block-img">
    <img src="<?php echo $siteurl; ?>assets/Image/portfolio/technology-6.svg" class="img-fluid"  alt="portfolio" loading="lazy" width="82" height="82" />
    </div>
    <div class="technology-block-img">
    <img src="<?php echo $siteurl; ?>assets/Image/portfolio/technology-7.svg" class="img-fluid"  alt="portfolio" loading="lazy" width="82" height="82" />
    </div>
    <div class="technology-block-img">
    <img src="<?php echo $siteurl; ?>assets/Image/portfolio/technology-8.svg" class="img-fluid"  alt="portfolio" loading="lazy" width="82" height="82" />
    </div>
    <div class="technology-block-img">
    <img src="<?php echo $siteurl; ?>assets/Image/portfolio/technology-9.svg" class="img-fluid"  alt="portfolio" loading="lazy" width="82" height="82" />
    </div>
</div>

    </div></div>
        </section>
        <section class="why-opris section-top-mt">
        <div class="contain-width">
            <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 why-opris-left">
            <div class="why-opris-content why-opris-odd"  data-aos="fade-right"><p>Agile Methodology</p></div>
            <div class="why-opris-content"  data-aos="fade-right"><p>High-Profile Portfolio</p></div>
            <div class="why-opris-content why-opris-odd"  data-aos="fade-right"><p>Delivered On Time</p></div>
                </div>
            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12 why-opris-center p-lg-0 d-flex align-content-center">
                <div class="why-opris-center-content" data-aos="zoom-in">
                <h2>Why Opris?</h2>
                <p>We've traveled the industry for miles, bringing passion and expertise to turn your innovation into excellence.</p>
                </div>
                </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 why-opris-right">
            <div class="why-opris-content why-opris-even" data-aos="fade-left"><p>Expert Tech Team</p></div>
            <div class="why-opris-content" data-aos="fade-left"><p>Best Support System</p></div>
            <div class="why-opris-content why-opris-even" data-aos="fade-left"><p>Latest Tech Stack</p></div>
                </div>
            </div>
            <div class="why-opris-bg-images">
            <img src="<?php echo $siteurl; ?>assets/Image/portfolio/why-opris-1.webp" alt="portfolio" loading="lazy" width="82" height="82" />
            <img src="<?php echo $siteurl; ?>assets/Image/portfolio/why-opris-2.webp" alt="portfolio" loading="lazy" width="82" height="82" />
            <img src="<?php echo $siteurl; ?>assets/Image/portfolio/why-opris-3.webp" alt="portfolio" loading="lazy" width="82" height="82" />
            <img src="<?php echo $siteurl; ?>assets/Image/portfolio/why-opris-4.webp" alt="portfolio" loading="lazy" width="82" height="82" />
            <img src="<?php echo $siteurl; ?>assets/Image/portfolio/why-opris-5.webp" alt="portfolio" loading="lazy" width="82" height="82" />
            <img src="<?php echo $siteurl; ?>assets/Image/portfolio/why-opris-6.webp" alt="portfolio" loading="lazy" width="82" height="82" />
            <img src="<?php echo $siteurl; ?>assets/Image/portfolio/why-opris-7.webp" alt="portfolio" loading="lazy" width="82" height="82" />
            </div>
            </div>
            </section>


            <?php include('include/form-inner.php'); ?>
            <?php include('include/footer.php'); ?>
          
            <script src="<?php echo $siteurl; ?>assets/js/aos.js"></script>
            <script src="<?php echo $siteurl; ?>assets/js/bootstrap.bundle.min.js" defer></script>
            <script src="<?php echo $siteurl; ?>assetsindex/js/popper.min.js" defer></script>
            <script src="<?php echo $siteurl; ?>js/countrySelect.js"></script>
            <script src="<?php echo $siteurl; ?>js/script1.js"></script>
            <script src="<?php echo $siteurl; ?>assets/js/owl.carousel.min.js"></script>
          
    <script async>
    AOS.init({
        once: false,
    });
    </script>
    
    <script src="<?php echo $siteurl; ?>assetsindex/js/swiper-bundle.min.js"></script>
  
  <!-- Initialize Swiper -->
  <script>
  var swiperEffect = new Swiper(".swiperEffect", {
    loop: true,
    effect: "cards",
    grabCursor: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    creativeEffect: {
      prev: {
        translate: [0, 0, 0],
        opacity: 1
      },
      next: {
        translate: [0, 0, 0],
        opacity: 1
      }
    },
    on: {
      init: function () {
        // Ensure all slides have a white background when initialized
        document.querySelectorAll('.swiper-slide').forEach(slide => {
          slide.style.backgroundColor = 'white';
        });
      },
      slideChange: function () {
        // Ensure background remains white when slides change
        document.querySelectorAll('.swiper-slide').forEach(slide => {
          slide.style.backgroundColor = 'white';
        });
      }
    }
  });
</script>


<script>
  document.addEventListener("DOMContentLoaded", () => {
    const thumbnails = document.querySelectorAll(".thumbnail");
    const mainImage = document.getElementById("carouselp-main-image");
    const title = document.getElementById("carouselp-title");
    const description = document.getElementById("carouselp-description");
    const paginationDots = document.querySelectorAll(".pagination-dot");

    let currentIndex = 0;
    let autoplayInterval;

    // Function to update carousel
    function updateCarousel(index) {
      thumbnails.forEach((thumb, idx) => {
        if (idx === index) {
          thumb.classList.add("active");
          mainImage.src = thumb.getAttribute("data-large");
          title.textContent = thumb.getAttribute("data-title");
          description.textContent = thumb.getAttribute("data-description");
          mainImage.style.opacity = "0";
          setTimeout(() => (mainImage.style.opacity = "1"), 100);
        } else {
          thumb.classList.remove("active");
        }
      });

      paginationDots.forEach((dot, idx) => {
        dot.classList.toggle("active", idx === index);
      });
    }

    // Function to start autoplay
    function startAutoplay() {
      autoplayInterval = setInterval(() => {
        currentIndex = (currentIndex + 1) % thumbnails.length;
        updateCarousel(currentIndex);
      }, 5000); // Change slide every 3 seconds
    }

    // Function to stop autoplay
    function stopAutoplay() {
      clearInterval(autoplayInterval);
    }

    // Click event for pagination dots
    paginationDots.forEach((dot, idx) => {
      dot.addEventListener("click", () => {
        stopAutoplay();
        currentIndex = idx;
        updateCarousel(currentIndex);
        startAutoplay();
      });
    });

    // Stop autoplay when hovering over the main image
    mainImage.addEventListener("mouseenter", () => {
      stopAutoplay();
    });

    // Restart autoplay when the mouse leaves the main image
    mainImage.addEventListener("mouseleave", () => {
      startAutoplay();
    });

    // Initialize carousel
    updateCarousel(currentIndex);
    startAutoplay();
  });
</script>

</body>

</html>