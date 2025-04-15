<?php include('define.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blockchain Development Services</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $siteurl; ?>assetsindex/Image/favicon.png">
    <meta name="title" content="Blockchain Development Services" />
    <meta name="description"
        content="Opris is a leading blockchain development services provider offering a wide range of development services, including crypto exchange, token development, AI solutions, and trading bots, catering to clients worldwide " />
    <meta name="keywords"
        content="Digital Transformation Company, Digital Transformation Services, Digital Transformation Solutions. ">

    <link rel="preload" as="image" href="<?php echo $siteurl; ?>assets/images/index/banner-bg.webp" type="image/webp" />
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
        }
    </style>


    <!-- here is head file exist in all files -->
    <?php include('inc/head.php'); ?>
    <!-- here is head file exist in all files -->
    <!-- Extra files -->
    <link rel="stylesheet" href="<?php echo $siteurl; ?>assetsindex/css/boostrap/bootstrap.min.css" fetchpriority="low">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css<?php echo $version; ?>" />
    <link rel="stylesheet" href="<?php echo $siteurl; ?>assetsindex/css/swiper-bundle.min.css" fetchpriority="low">
    <!-- Extra files -->
    <!-- Facebook -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Blockchain Development Services" />
    <meta property="og:description"
        content="Opris is a leading blockchain development services provider offering a wide range of development services, including crypto exchange, token development, AI solutions, and trading bots, catering to clients worldwide " />
    <meta property="og:url" content="https://www.opris.exchange/" />
    <meta property="og:image" content="<?php echo $siteurl; ?>assets/images/og-images/digital-transform-company.png" />
    <meta property="og:image:secure_url"
        content="<?php echo $siteurl; ?>assets/images/og-images/digital-transform-company.png" />
    <meta property="og:image:alt" content="Blockchain Development Services" />
    <meta property="og:site_name" content="Opris Exchange" />
    <!-- Facebook -->
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@Opris Exchange">
    <meta name="twitter:creator" content="@Opris Exchange">
    <meta name="twitter: description"
        content="Opris is a leading blockchain development services provider offering a wide range of development services, including crypto exchange, token development, AI solutions, and trading bots, catering to clients worldwide" />
    <meta name="twitter:title" content="Blockchain Development Services" />
    <meta name="twitter: image"
        content="<?php echo $siteurl; ?>assets/images/og-images/digital-transform-company.png" />
    <!-- Twitter -->
    <!-- Google site verification -->
    <link rel="canonical" href="<?php echo $canonical; ?>" />
    <meta name="google-site-verification" content="TeBLdhHlpPqgj36tVRFn6jJV41yB90UN0kBzR6B7PZA" />
    <!-- Google site verification -->

</head>

<body class="homepage-page">
    <?php include('include/header.php'); ?>

    <section class="banner">
    <div class="contain-width">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <h1 style="font-size: 3.2rem !important;
        line-height: 1.4 !important;
        font-family: Roboto !important;
        min-height: 170px !important;">Blockchain Development Company</h1>
                <p>Where Innovative Ideas Meet <span class="txt-type d-desktop" data-wait="4000" data-words='["Expert", "Smart","Passionate"]' style="color: #e2000f;width:100px;min-width:150px;display:inline-block;font-size:23px">Expert</span><span class="txt-type d-mobile" style="color: #e2000f;width:100px;min-width:150px;display:inline-block;font-size:23px">Expert</span> Minds<br>
                    to Make an Entrepreneur.
                </p>
                <div class="explore-btn">
                    <a href="<?php echo $siteurl; ?>contactus/" target="_blank">Talk to Experts</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0">
                <div class="banner-right">
                    
                        <img 
                        src="<?php echo $siteurl; ?>assets/images/index/banner-right-img-small.webp" 
                        srcset="
                            <?php echo $siteurl; ?>assets/images/index/banner-right-img-small.webp 400w,
                            <?php echo $siteurl; ?>assets/images/index/banner-right-img-medium.webp 768w,
                            <?php echo $siteurl; ?>assets/images/index/banner-right-img.webp 1200w
                        "
                        sizes="(max-width: 600px) 400px, (max-width: 1024px) 768px, 1200px"
                        class="banner-right-img" 
                        alt="Digital Transformation Company" 
                        width="845" 
                        height="660" 
                        loading="lazy"
                        fetchpriority="high">
                </div>
            </div>
        </div>
    </div>
</section>


<?php if (isMobile()): ?>
<section class="clent-review">
        <div class="contain-width">
            <div class="clients-box">
                <div class="review-box">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-1.svg" class="img-fluid"
                            alt="cryptocurrency-exchange-development" loading="lazy" width="31" height="31" />
                    </div>
                    <p>100 <span>+</span></p>
                    <span>Trusted Clients
                    </span>
                </div>
                <div class="review-box">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-2.svg" class="img-fluid"
                            alt="cryptocurrency-exchange-development" loading="lazy" width="31" height="31" />
                    </div>
                    <p>40 <span>+</span></p>
                    <span>Blockchain Experts</span>
                </div>
                <div class="review-box">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-3.svg" class="img-fluid"
                            alt="cryptocurrency-exchange-development" loading="lazy" width="31" height="31" />
                    </div>
                    <p>150 <span>+</span></p>
                    <span>Successful projects </span>
                </div>
                <div class="review-box">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-4.svg" class="img-fluid"
                            alt="cryptocurrency-exchange-development" loading="lazy" width="31" height="31" />
                    </div>
                    <p>3 <span>+</span></p>
                    <span>Years of Experience</span>
                </div>
                <div class="review-box">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-5.svg" class="img-fluid"
                            alt="cryptocurrency-exchange-development" loading="lazy" width="31" height="31" />
                    </div>
                    <p>30 <span>+</span></p>
                    <span>Nations served</span>
                </div>
            </div>
        </div>
    </section>
    <?php else: ?>
        <section class="clent-review">
        <div class="contain-width">
            <div class="clients-box">
                <div class="review-box" data-aos="fade-right">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-1.svg" class="img-fluid"
                            alt="cryptocurrency-exchange-development" loading="lazy" width="31" height="31" />
                    </div>
                    <p>100 <span>+</span></p>
                    <span>Trusted Clients
                    </span>
                </div>
                <div class="review-box" data-aos="fade-right">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-2.svg" class="img-fluid"
                            alt="cryptocurrency-exchange-development" loading="lazy" width="31" height="31" />
                    </div>
                    <p>40 <span>+</span></p>
                    <span>Blockchain Experts</span>
                </div>
                <div class="review-box" data-aos="fade-right">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-3.svg" class="img-fluid"
                            alt="cryptocurrency-exchange-development" loading="lazy" width="31" height="31" />
                    </div>
                    <p>150 <span>+</span></p>
                    <span>Successful projects </span>
                </div>
                <div class="review-box" data-aos="fade-right">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-4.svg" class="img-fluid"
                            alt="cryptocurrency-exchange-development" loading="lazy" width="31" height="31" />
                    </div>
                    <p>3 <span>+</span></p>
                    <span>Years of Experience</span>
                </div>
                <div class="review-box" data-aos="fade-right">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-5.svg" class="img-fluid"
                            alt="cryptocurrency-exchange-development" loading="lazy" width="31" height="31" />
                    </div>
                    <p>30 <span>+</span></p>
                    <span>Nations served</span>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <section class="transformation-solutions section-top-pt">

        <div class="contain-width">
            <div class="head-text">
                <h2>Our Expertise In<br> Blockchain Development Solutions</h2>
            </div>
            <div class="row transformation-solutions-blocks align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="digital-trans-content">
                        <h3 class="sub-title">
                            Crypto Exchange Development
                        </h3>
                        <p>We specialize in building secure, scalable, and feature-rich crypto exchange platforms. Our
                            team ensures seamless trading experiences with advanced security measures and a
                            user-friendly interface for both beginners and experienced traders.</p>
                        <ul>
                            <li>Development from scratch</li>
                            <li>Readymade scripts</li>
                        </ul>
                        <div class="demo-btn">
                            <a href="https://www.opris.exchange/cryptocurrency-exchange-development/"
                                target="_blank">Book
                                Your Crypto Exchange</a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="digital-trans-img">
                    <img 
                        src="<?php echo $siteurl; ?>assets/images/index/transform-solution-1-small.webp" 
                        srcset="
                            <?php echo $siteurl; ?>assets/images/index/transform-solution-1-small.webp 400w,
                            <?php echo $siteurl; ?>assets/images/index/transform-solution-1-medium.webp 768w,
                            <?php echo $siteurl; ?>assets/images/index/transform-solution-1.webp 1200w
                        "
                        sizes="(max-width: 600px) 400px, (max-width: 1024px) 768px, 1200px"
                        class="transform-solution-img"
                        alt="Crypto Exchange Development"
                        width="500"
                        height="350"
                        loading="lazy">

                    </div>
                </div>
            </div>
            <div class="row transformation-solutions-blocks align-items-center">

                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="digital-trans-img">
                    <img 
                        src="<?php echo $siteurl; ?>assets/images/index/transform-solution-2-small.webp" 
                        srcset="
                            <?php echo $siteurl; ?>assets/images/index/transform-solution-2-small.webp 400w,
                            <?php echo $siteurl; ?>assets/images/index/transform-solution-2-medium.webp 768w,
                            <?php echo $siteurl; ?>assets/images/index/transform-solution-2.webp 1200w
                        "
                        sizes="(max-width: 600px) 400px, (max-width: 1024px) 768px, 1200px"
                        class="transform-solution-img"
                        alt="Crypto Payment Gateway Development"
                        width="500"
                        height="350"
                        loading="lazy">

                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="digital-trans-content">
                        <h3 class="sub-title">
                            Crypto Payment Gateway Development 
                        </h3>
                        <p>We offer custom crypto payment gateway solutions that enable businesses to accept
                            cryptocurrency payments with ease. Our solutions are designed to integrate seamlessly into
                            existing systems, ensuring fast, secure, and reliable transactions.</p>
                        <ul>
                            <li>White Label payment gateway</li>
                            <li>Development from scratch</li>
                        </ul>
                        <div class="demo-btn">
                            <a href="https://www.opris.exchange/crypto-payment-gateway-development/"
                                target="_blank">Book
                                Your Payment Gateway</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row transformation-solutions-blocks align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="digital-trans-content">
                        <h3 class="sub-title">
                            Blockchain
                            Development  </h3>
                        <p>
                            Our blockchain development services help businesses unlock the power of decentralized
                            technologies. We create robust, scalable, and secure blockchain applications tailored to
                            your needs, whether it's for supply chain, finance, or other industries.</p>
                        <ul>
                            <li>Binance Smart Chain</li>
                            <li>Ethereum</li>
                            <li>Solana</li>
                        </ul>
                        <div class="demo-btn">
                            <a href="https://www.opris.exchange/blockchain-development-company/" target="_blank">Book
                                Your Blockchain Development </a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="digital-trans-img">
                    <img 
                        src="<?php echo $siteurl; ?>assets/images/index/transform-solution-3-small.webp" 
                        srcset="
                            <?php echo $siteurl; ?>assets/images/index/transform-solution-3-small.webp 400w,
                            <?php echo $siteurl; ?>assets/images/index/transform-solution-3-medium.webp 768w,
                            <?php echo $siteurl; ?>assets/images/index/transform-solution-3.webp 1200w
                        "
                        sizes="(max-width: 600px) 400px, (max-width: 1024px) 768px, 1200px"
                        class="transform-solution-img"
                        alt="Cryptocurrency Exchange Development"
                        width="500"
                        height="350"
                        loading="lazy">

                    </div>
                </div>
            </div>
            <div class="row transformation-solutions-blocks align-items-center">

                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="digital-trans-img">
                    <img 
                        src="<?php echo $siteurl; ?>assets/images/index/transform-solution-4-small.webp" 
                        srcset="
                            <?php echo $siteurl; ?>assets/images/index/transform-solution-4-small.webp 400w,
                            <?php echo $siteurl; ?>assets/images/index/transform-solution-4-medium.webp 768w,
                            <?php echo $siteurl; ?>assets/images/index/transform-solution-4.webp 1200w
                        "
                        sizes="(max-width: 600px) 400px, (max-width: 1024px) 768px, 1200px"
                        class="transform-solution-img"
                        alt="Cryptocurrency Exchange Development"
                        width="500"
                        height="350"
                        loading="lazy">

                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="digital-trans-content">
                        <h3 class="sub-title">
                            Crypto Trading Bot Development 
                        </h3>
                        <p>We develop advanced crypto trading bots that automate trading strategies for optimal profit.
                            Our bots are designed to handle market fluctuations, execute trades at the right moments,
                            and ensure better decision-making, all while minimizing risk.</p>
                        <ul>
                            <li>Arbitrage Bots</li>
                            <li>MEV Bots</li>
                            <li>Copy trading Bots</li>
                        </ul>
                        <div class="demo-btn">
                            <a href="https://www.opris.exchange/crypto-trading-bot-development/" target="_blank">Book
                                Your Crypto Trading Bot</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row transformation-solutions-blocks align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="digital-trans-content">
                        <h3 class="sub-title">
                            ICO
                            Development </h3>
                        <p>
                            Launch your own Initial Coin Offering (ICO) with our expertise. We provide end-to-end
                            services from whitepaper creation to token design and smart contract development, ensuring
                            your ICO is successful and compliant with regulations.</p>
                        <ul>
                            <li>ICO token development</li>
                            <li>ICO website development</li>
                        </ul>
                        <div class="demo-btn">
                            <a href="https://www.opris.exchange/ico-development-services/" target="_blank">Book
                                Your ICO Development</a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="digital-trans-img">
                    <img 
                        src="<?php echo $siteurl; ?>assets/images/index/transform-solution-5-small.webp" 
                        srcset="
                            <?php echo $siteurl; ?>assets/images/index/transform-solution-5-small.webp 400w,
                            <?php echo $siteurl; ?>assets/images/index/transform-solution-5-medium.webp 768w,
                            <?php echo $siteurl; ?>assets/images/index/transform-solution-5.webp 1200w
                        "
                        sizes="(max-width: 600px) 400px, (max-width: 1024px) 768px, 1200px"
                        class="transform-solution-img"
                        alt="Cryptocurrency Exchange Development"
                        width="500"
                        height="350"
                        loading="lazy">

                    </div>
                </div>
            </div>
            <div class="row transformation-solutions-blocks align-items-center">

                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="digital-trans-img">
                    <img 
                        src="<?php echo $siteurl; ?>assets/images/index/transform-solution-6-small.webp" 
                        srcset="
                            <?php echo $siteurl; ?>assets/images/index/transform-solution-6-small.webp 400w,
                            <?php echo $siteurl; ?>assets/images/index/transform-solution-6-medium.webp 768w,
                            <?php echo $siteurl; ?>assets/images/index/transform-solution-6.webp 1200w
                        "
                        sizes="(max-width: 600px) 400px, (max-width: 1024px) 768px, 1200px"
                        class="transform-solution-img"
                        alt="Cryptocurrency Exchange Development"
                        width="500"
                        height="350"
                        loading="lazy">

                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="digital-trans-content">
                        <h3 class="sub-title">
                            Wallet
                            Development 
                        </h3>
                        <p>Securely store and manage cryptocurrencies with custom wallet solutions. We create
                            multi-currency wallets, with enhanced security features like two-factor authentication and
                            multi-signature, ensuring your digital assets are always safe and accessible.</p>
                        <ul>
                            <li>Hot Wallet</li>
                            <li>Cold Wallet</li>
                            <li>MPC Wallet</li>
                        </ul>
                        <div class="demo-btn">
                            <a href="https://www.opris.exchange/cryptocurrency-wallet-development/" target="_blank">Book
                                Your Wallet Development </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="cta-box section-top-mt">
        <div class="contain-width">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 my-auto p-lg-0">
                    <div class="cta-box-content">
                        <h3>Ready to Ignite Your Startup with Expert Techies?</h3>
                        <div class="cta-btn">
                            <a href="<?php echo $siteurl; ?>contactus" target="_blank"><span>Schedule Free Demo</span>
                                <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.04297 15.8337L9.20964 10.0003L5.04297 4.16699H7.08464L11.2513 10.0003L7.08464 15.8337H5.04297ZM10.0013 15.8337L14.168 10.0003L10.0013 4.16699H12.043L16.2096 10.0003L12.043 15.8337H10.0013Z"
                                            fill="black" />
                                    </svg>
                                </span> </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 p-lg-0">
                    <div class="cta-box-img">
                        <img src="<?php echo $siteurl; ?>assets/images/index/cta-image.webp" class="img-fluid" alt=""
                            loading="lazy" width="" height="" />
                    </div>
                </div>

            </div>
    </section>
    <section class="blockchain-services section-top-pt">

        <div class="contain-width">
            <div class="head-text">
                <h2>Our Other Premium <br>Blockchain Development Services</h2>
            </div>
            <div class="blockchain-tab">
                <ul class="nav nav-pills mb-3 blockchain-tab-pills" id="pills-tab" role="tablist">
                    <li class="nav-item blockchain-tab-item" role="presentation">
                        <button class="nav-link active" id="pills-defi-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-defi" type="button" role="tab" aria-controls="pills-defi"
                            aria-selected="true">DeFi Development</button>
                    </li>
                    <li class="nav-item blockchain-tab-item" role="presentation">
                        <button class="nav-link" id="pills-web3-tab" data-bs-toggle="pill" data-bs-target="#pills-web3"
                            type="button" role="tab" aria-controls="pills-web3" aria-selected="false">Web3
                            Development</button>
                    </li>
                    <li class="nav-item blockchain-tab-item" role="presentation">
                        <button class="nav-link" id="pills-nft-tab" data-bs-toggle="pill" data-bs-target="#pills-nft"
                            type="button" role="tab" aria-controls="pills-nft" aria-selected="false">NFT Marketplace
                            Development</button>
                    </li>
                    <li class="nav-item blockchain-tab-item" role="presentation">
                        <button class="nav-link" id="pills-token-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-token" type="button" role="tab" aria-controls="pills-token"
                            aria-selected="false">Token Development</button>
                    </li>
                    <li class="nav-item blockchain-tab-item" role="presentation">
                        <button class="nav-link" id="pills-dapp-tab" data-bs-toggle="pill" data-bs-target="#pills-dapp"
                            type="button" role="tab" aria-controls="pills-dapp" aria-selected="false">dApp
                            Development</button>
                    </li>
                </ul>
                <div class="tab-content blockchain-tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-defi" role="tabpanel"
                        aria-labelledby="pills-defi-tab" tabindex="0">
                        <div class="blockchain-block">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7">
                                    <div class="blockchain-content">
                                        <h3>DeFi Development</h3>
                                        <p>Unlock the power of decentralized finance with our custom DeFi solutions like
                                            lending, borrowing, staking, and yield farming platforms. We provide
                                            end-to-end DeFi development that ensures transparency, security, and
                                            accessibility, empowering users to control their financial assets directly.
                                        </p>
                                        <div class="demo-btn">
                                            <a href="<?php echo $siteurl; ?>contactus/" target="_blank">Defi
                                                Development</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-1 col-xl-1">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="blockchain-img text-center">
                                        <img src="<?php echo $siteurl; ?>assets/images/index/blockchain-service-1.webp"
                                            alt="defi-development" width="233" height="284" loading="lazy" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-web3" role="tabpanel" aria-labelledby="pills-web3-tab"
                        tabindex="0">
                        <div class="blockchain-block">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7">
                                    <div class="blockchain-content">
                                        <h3>Web3 Development</h3>
                                        <p>Embrace the next era of the internet with our Web3 development services. We
                                            build decentralized applications (dApps), smart contracts, and blockchain
                                            integration solutions, helping businesses and users interact securely in the
                                            decentralized web without intermediaries.
                                        </p>
                                        <div class="demo-btn">
                                            <a href="https://www.opris.exchange/web3-development-company/"
                                                target="_blank">Web3 Development</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-1 col-xl-1">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="blockchain-img text-center">
                                        <img src="<?php echo $siteurl; ?>assets/images/index/blockchain-service-2.webp"
                                            alt="Web3-Development" width="" height="" loading="lazy" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-nft" role="tabpanel" aria-labelledby="pills-nft-tab"
                        tabindex="0">
                        <div class="blockchain-block">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7">
                                    <div class="blockchain-content">
                                        <h3>NFT Marketplace Development</h3>
                                        <p>Dive into the world of digital collectibles and unique assets with a custom
                                            NFT marketplace. We offer NFT platform development that includes minting,
                                            buying, selling, and trading NFTs across various industries like art, music,
                                            gaming, and real estate, all with top-tier security and user-friendly
                                            interfaces.
                                        </p>
                                        <div class="demo-btn">
                                            <a href="<?php echo $siteurl; ?>contactus/" target="_blank">NFT Marketplace
                                                Development</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-1 col-xl-1">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="blockchain-img text-center">
                                        <img src="<?php echo $siteurl; ?>assets/images/index/blockchain-service-3.webp"
                                            alt="NFT-Marketplace-Development" width="" height="" loading="lazy" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-token" role="tabpanel" aria-labelledby="pills-token-tab"
                        tabindex="0">
                        <div class="blockchain-block">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7">
                                    <div class="blockchain-content">
                                        <h3>Token Development</h3>
                                        <p>Create your own tokenized ecosystem with our token development services. We
                                            design and deploy ERC-20, ERC-721, and ERC-1155 tokens, tailored to your
                                            specific requirements, including utility tokens, governance tokens, and
                                            more, ensuring seamless integration and security.
                                        </p>
                                        <div class="demo-btn">
                                            <a href="<?php echo $siteurl; ?>contactus/" target="_blank">Token
                                                Development</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-1 col-xl-1">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="blockchain-img text-center">
                                        <img src="<?php echo $siteurl; ?>assets/images/index/blockchain-service-4.webp"
                                            alt="Token-Development" width="" height="" loading="lazy" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-dapp" role="tabpanel" aria-labelledby="pills-dapp-tab"
                        tabindex="0">
                        <div class="blockchain-block">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7">
                                    <div class="blockchain-content">
                                        <h3>dApp Development</h3>
                                        <p>Build decentralized applications that run without any central authority. From
                                            gaming to finance and beyond, our dApp development services focus on
                                            creating secure, scalable, and user-centric solutions that interact
                                            seamlessly with blockchain networks, giving users full control over their
                                            data.
                                        </p>
                                        <div class="demo-btn">
                                            <a href="https://www.opris.exchange/blog/dapp-development-company/"
                                                target="_blank">dApp Development</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-1 col-xl-1">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="blockchain-img text-center">
                                        <img src="<?php echo $siteurl; ?>assets/images/index/blockchain-service-5.webp"
                                            alt="dApp-Development" width="" height="" loading="lazy" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="industry-serve section-top-mt">
        <div class="contain-width">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
                    <h2>Industries we serve</h2>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9 p-lg-0">
                    <div class="serve-boxs">

                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/images/index/svg/industy-1.svg"
                                    class="img-fluid" alt="Banking-Finance" loading="lazy" width="53" height="53" />
                            </div>
                            <p>Banking & Finance</p>

                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/images/index/svg/industy-2.svg"
                                    class="img-fluid" alt="Manufacturing" loading="lazy" width="53" height="53" />
                            </div>
                            <p>Manufacturing</p>

                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/images/index/svg/industy-3.svg"
                                    class="img-fluid" alt="Retail & Ecommerce" loading="lazy" width="53" height="53" />
                            </div>
                            <p>Retail & Ecommerce</p>

                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/images/index/svg/industy-4.svg"
                                    class="img-fluid" alt="Healthcare" loading="lazy" width="53" height="53" />
                            </div>
                            <p>Healthcare</p>

                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/images/index/svg/industy-5.svg"
                                    class="img-fluid" alt="Technology" loading="lazy" width="53" height="53" />
                            </div>
                            <p>Technology</p>

                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/images/index/svg/industy-6.svg"
                                    class="img-fluid" alt="Electronics" loading="lazy" width="53" height="53" />
                            </div>
                            <p>Electronics</p>

                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/images/index/svg/industy-7.svg"
                                    class="img-fluid" alt="Startups" loading="lazy" width="53" height="53" />
                            </div>
                            <p>Startups</p>

                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/images/index/svg/industy-8.svg"
                                    class="img-fluid" alt="Education" loading="lazy" width="53" height="53" />
                            </div>
                            <p>Education</p>

                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/images/index/svg/industy-9.svg"
                                    class="img-fluid" alt="Transportation and Logistics" loading="lazy" width="53"
                                    height="53" />
                            </div>
                            <p>Transportation and Logistics</p>

                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/images/index/svg/industy-10.svg"
                                    class="img-fluid" alt="Automation" loading="lazy" width="53" height="53" />
                            </div>
                            <p>Automation</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="start-project section-top-pt" style="display:none">
        <div class="contain-width">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 project-block-1">
                            <div class="project-block">
                                <div>
                                    <img src="<?php echo $siteurl; ?>assets/images/index/svg/kickstart-project-1.svg"
                                        class="img-fluid" alt="Start-Your-Project-Today" loading="lazy" width="67" height="67" />
                                </div>
                                <p>Start Your<br>
                                Project Today</p>
                            </div>
                            <div class="project-block">
                                <div>
                                    <img src="<?php echo $siteurl; ?>assets/images/index/svg/kickstart-project-2.svg"
                                        class="img-fluid" alt="Book-Consultation" loading="lazy" width="67" height="67" />
                                </div>
                                <p>Book<br>
                                Consultation</p>
                            </div>
                            <div class="project-block">
                                <div>
                                    <img src="<?php echo $siteurl; ?>assets/images/index/svg/kickstart-project-3.svg"
                                        class="img-fluid" alt="Get a Free Consultation" loading="lazy" width="67" height="67" />
                                </div>
                                <p>Get a Free <br>
                                Consultation</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 my-auto project-block-2 p-lg-0">
                        <div class="project-block">
                                <div>
                                    <img src="<?php echo $siteurl; ?>assets/images/index/svg/kickstart-project-4.svg"
                                        class="img-fluid" alt="Get Live Demo" loading="lazy" width="67" height="67" />
                                </div>
                                <p>Get Live<br>
                                Demo</p>
                            </div>
                            <div class="project-block">
                                <div>
                                    <img src="<?php echo $siteurl; ?>assets/images/index/svg/kickstart-project-5.svg"
                                        class="img-fluid" alt="Get a Proposal" loading="lazy" width="67" height="67" />
                                </div>
                                <p>Get a<br>
                                Proposal</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 my-auto project-block-3">
                      
                            <div class="project-block">
                                <div>
                                    <img src="<?php echo $siteurl; ?>assets/images/index/svg/kickstart-project-6.svg"
                                        class="img-fluid" alt="Kickstart-Project" loading="lazy" width="67" height="67" />
                                </div>
                                <p>Kickstart<br>
                                Project</p>
                            </div>
                            <div class="demo-btn">
                            <a href="https://www.opris.exchange/contactus/"
                                target="_blank">Kickstart Project</a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                        <div class="start-project-left"></div>
                    </div>
                </div>
            </div>
    </section>
    <section class="hire section-top-pt">
        <div class="contain-width">

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 my-auto">
                    <div class="developer-hire-cnt" data-aos="fade-down">
                        <h2>Hire <br>
                            <span> <img src="<?php echo $siteurl; ?>assets/images/index/svg/opris-logo.svg"
                                    class="img-fluid" alt="hire-opris" loading="lazy" width="" height="" /></span>pris
                            Developers 
                        </h2>
                        <p>Having trouble finding the right talent for your project? At Opris, we provide a
                            strong network of highly skilled developers to meet all your requirements. Our
                            dedicated remote developers are not only experts in their fields but also excel
                            in communication and collaboration. By choosing Opris, you can easily integrate
                            senior developers into your team, bringing advanced technical skills and
                            industry experience. Our developers are adaptable and ready to work across
                            various time zones, ensuring your project meets the highest standards of quality
                            and innovation. Hire from Opris and watch your project succeed.</p>
                    </div>

                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
                    <div class="hire-img" data-aos="fade-up" data-aos-duration="4500">
                        <img src="<?php echo $siteurl; ?>assets/images/index/hire.webp" class="img-fluid" alt="hire"
                            loading="lazy" width="" height="" />
                    </div>
                </div>
            </div>

        </div>


    </section>
    <section class="technology section-top-pt">
        <div class="contain-width">
            <div class="technology-block">
                <h2 class="text-center">Our <span>Technology</span> Expertise</h2>
                <div class="technology-inner-block">
                    <div class="technology-inner">
                        <div class="technology-block-img">
                            <img src="<?php echo $siteurl; ?>assets/images/index/svg/technology-1.svg" class="img-fluid"
                                alt="React.js" loading="lazy" width="50" height="50" />
                        </div>
                        <p>React.js</p>
                    </div>
                    <div class="technology-inner">
                        <div class="technology-block-img">
                            <img src="<?php echo $siteurl; ?>assets/images/index/svg/technology-2.svg" class="img-fluid"
                                alt="Vue.js" loading="lazy" width="50" height="50" />
                        </div>
                        <p>Vue.js</p>
                    </div>
                    <div class="technology-inner">
                        <div class="technology-block-img">
                            <img src="<?php echo $siteurl; ?>assets/images/index/svg/technology-3.svg" class="img-fluid"
                                alt="solidity" loading="lazy" width="50" height="50" />
                        </div>
                        <p>solidity</p>
                    </div>
                    <div class="technology-inner">
                        <div class="technology-block-img">
                            <img src="<?php echo $siteurl; ?>assets/images/index/svg/technology-4.svg" class="img-fluid"
                                alt="Laravel" loading="lazy" width="50" height="50" />
                        </div>
                        <p>Laravel</p>
                    </div>
                    <div class="technology-inner">
                        <div class="technology-block-img">
                            <img src="<?php echo $siteurl; ?>assets/images/index/svg/technology-5.svg" class="img-fluid"
                                alt="Php" loading="lazy" width="50" height="50" />
                        </div>
                        <p>Php</p>
                    </div>
                    <div class="technology-inner">
                        <div class="technology-block-img">
                            <img src="<?php echo $siteurl; ?>assets/images/index/svg/technology-6.svg" class="img-fluid"
                                alt="java script" loading="lazy" width="50" height="50" />
                        </div>
                        <p>java script</p>
                    </div>
                    <div class="technology-inner">
                        <div class="technology-block-img">
                            <img src="<?php echo $siteurl; ?>assets/images/index/svg/technology-7.svg" class="img-fluid"
                                alt="Mongo DB" loading="lazy" width="50" height="50" />
                        </div>
                        <p>Mongo DB</p>
                    </div>
                    <div class="technology-inner">
                        <div class="technology-block-img">
                            <img src="<?php echo $siteurl; ?>assets/images/index/svg/technology-8.svg" class="img-fluid"
                                alt="next.js" loading="lazy" width="50" height="50" />
                        </div>
                        <p>next.js</p>
                    </div>
                    <div class="technology-inner">
                        <div class="technology-block-img">
                            <img src="<?php echo $siteurl; ?>assets/images/index/svg/technology-9.svg" class="img-fluid"
                                alt="hyperledger " loading="lazy" width="50" height="50" />
                        </div>
                        <p>hyperledger </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-portfolio section-top-pt">
        <div class="contain-width">
            <div class="head-text">
                <h2 class="text-center">Our Success Stories</h2>
            </div>
            <div class="carouselp">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                        <div class="carouselp-left">
                            <h3 id="carouselp-title"></h3>
                            <label>Web design</label><label>Development</label>
                            <p id="carouselp-description" class="portfolio-carousel-content">
                            </p>
                            <div class="explore-btn">
                                <a href="<?php echo $siteurl; ?>contact-us/" target="_blank">GET LIVE DEMO <span><svg
                                            width="11" height="12" viewBox="0 0 11 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.1667 1.51855L1 10.6852M10.1667 1.51855C10.1667 1.51855 8.89352 2.02781 6.34722 2.02781C3.80093 2.02781 2.52778 1.51855 2.52778 1.51855M10.1667 1.51855C10.1667 1.51855 9.65741 2.7917 9.65741 5.338C9.65741 7.8843 10.1667 9.15744 10.1667 9.15744"
                                                stroke="#0B001A" stroke-width="0.916667" stroke-linecap="square"
                                                stroke-linejoin="round" />
                                        </svg>
                                </a></span></a>
                            </div>
                            <div class="carouselp-thumbnails-wrapper">
                                <div class="carouselp-thumbnails thumbnails-wrapper" id="carouselp-thumbnails">
                                    <img src="<?php echo $siteurl; ?>assets/images/index/portfolio-small-img-1.webp"
                                        alt="Crypto-Exchange" loading="lazy" class="thumbnail active"
                                        data-large="<?php echo $siteurl; ?>assets/images/index/portfolio-large-img-1.webp"
                                        data-title="Crypto Exchange"
                                        data-description="Built a scalable crypto exchange solution to handle high volumes of transactions, ensuring fast execution and a smooth user experience." />
                                    <img src="<?php echo $siteurl; ?>assets/images/index/portfolio-small-img-2.webp"
                                        alt="Crypto-Exchange" loading="lazy" class="thumbnail"
                                        data-large="<?php echo $siteurl; ?>assets/images/index/portfolio-large-img-2.webp"
                                        data-title="Crypto Exchange"
                                        data-description="Built a scalable crypto exchange solution to handle high volumes of transactions, ensuring fast execution and a smooth user experience." />
                                    <img src="<?php echo $siteurl; ?>assets/images/index/portfolio-small-img-3.webp"
                                        alt="Crypto-Exchange" loading="lazy" class="thumbnail"
                                        data-large="<?php echo $siteurl; ?>assets/images/index/portfolio-large-img-3.webp" 
                                        data-title="Crypto Exchange"
                                        data-description="Built a scalable crypto exchange solution to handle high volumes of transactions, ensuring fast execution and a smooth user experience." />
                                    <img src="<?php echo $siteurl; ?>assets/images/index/portfolio-small-img-4.webp"
                                        alt="Crypto-Exchange" loading="lazy" class="thumbnail"
                                        data-large="<?php echo $siteurl; ?>assets/images/index/portfolio-large-img-4.webp"
                                        data-title="Crypto Exchange"
                                        data-description="Built a scalable crypto exchange solution to handle high volumes of transactions, ensuring fast execution and a smooth user experience." />

                                </div>
                            </div>
                            <!-- Pagination buttons -->
                            <!-- <div class="carouselp-pagination">
                <span class="pagination-dot active" data-index="0"></span>
                <span class="pagination-dot" data-index="1"></span>
                <span class="pagination-dot" data-index="2"></span>
                <span class="pagination-dot" data-index="3"></span>
               
              </div> -->
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                        <div class="carouselp-right">
                            <img id="carouselp-main-image"
                                src="<?php echo $siteurl; ?>assets/images/index/portfolio-large-img-1.webp"
                                alt="Crypto-Exchange" loading="lazy" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="client-says section-top-pt">
        <div class="container-fluid">
            <div class="head-text">
                <h2>What Our Client Says</h2>
            </div>
            <div class="swiper reviewSwiper">

                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <div class="card-description">
                            <h3><span class="client-profile"> <img
                                        src="<?php echo $siteurl; ?>assets/images/index/svg/avatar-1.svg"
                                        class="img-fluid" alt="Client-say" loading="lazy" width="72"
                                        height="72" /></span>Oliver</h3>
                            <p>Thank you for your excellent coordination and dedication. We had an urgent project, and
                                your team completed it within the given timeframe while delivering a top-quality
                                product. Thank you, Opris!</p>
                            <div class="rating">
                                <span class="rating-value">Rating start:</span>
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
                    <div class="swiper-slide">

                        <div class="card-description">
                            <h3><span class="client-profile"> <img
                                        src="<?php echo $siteurl; ?>assets/images/index/svg/avatar-2.svg"
                                        class="img-fluid" alt="Client-say" loading="lazy" width="72"
                                        height="72" /></span>Kirman</h3>
                            <p>I am new to business and was initially scared about my decentralized wallet development
                                project. However, Opris provided me with complete support from planning to launch. As a
                                startup, I didn’t have a clear understanding of the project, but they did. Thank you so
                                much, Opris!</p>
                            <div class="rating">
                                <span class="rating-value">Rating start:</span>
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
                    <div class="swiper-slide">
                        <div class="card-description">
                            <h3><span class="client-profile"> <img
                                        src="<?php echo $siteurl; ?>assets/images/index/svg/avatar-3.svg"
                                        class="img-fluid" alt="Client-say" loading="lazy" width="72"
                                        height="72" /></span>Hassan</h3>
                            <p>Great work by the Opris team! Their skill and expertise in blockchain development are
                                extraordinary. Our crypto exchange project was completed with high-end features, and
                                they continue to provide support even after the launch. That's truly great support from
                                them.</p>
                            <div class="rating">
                                <span class="rating-value">Rating start:</span>
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
                    <div class="swiper-slide">
                        <div class="card-description">
                            <h3><span class="client-profile"> <img
                                        src="<?php echo $siteurl; ?>assets/images/index/svg/avatar-4.svg"
                                        class="img-fluid" alt="Client-say" loading="lazy" width="72"
                                        height="72" /></span>Isabellah</h3>
                            <p>I want to take a moment to appreciate the Opris team for their strong expertise in the
                                field and their excellent coordination with us. Their support at any time made us feel
                                comfortable and helped us complete our project with ease. Now, our project is running
                                very successfully. Thank you, Opris, for your dedication!</p>
                            <div class="rating">
                                <span class="rating-value">Rating start:</span>
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
                    <div class="swiper-slide">
                        <div class="card-description">
                            <h3><span class="client-profile"> <img
                                        src="<?php echo $siteurl; ?>assets/images/index/svg/avatar-5.svg"
                                        class="img-fluid" alt="Client-say" loading="lazy" width="72"
                                        height="72" /></span>Usman</h3>
                            <p>We have worked with Opris on more than two projects. Both projects were well-equipped and
                                developed based on detailed requirements. They delivered more than we expected. Thank
                                you so much to the Opris team, and all the best for your future projects!</p>
                            <div class="rating">
                                <span class="rating-value">Rating start:</span>
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

    </section>
    <section class="choose-opris section-top-pt">
        <div class="contain-width">
            <div class="head-text">
                <h2>Why Choose Opris</h2>
            </div>
            <div class="choose-opris-block desktop-view text-center">
                <img src="<?php echo $siteurl; ?>assets/images/index/choose-opris.webp" alt="choose-opris" width="964"
                    height="490" loading="lazy">
            </div>
            <div class="mobile-view">
                <div class="choose-opris-inner-block">
                    <div class="benefit-opris">
                        <div>
                            <img src="<?php echo $siteurl; ?>assets/images/index/svg/choose-opris-1.svg"
                                alt="Customer-Centric Excellence" width="55" height="55" loading="lazy">
                        </div>
                        <p>Customer-Centric Excellence</p>
                    </div>
                    <div class="benefit-opris">
                        <div>
                            <img src="<?php echo $siteurl; ?>assets/images/index/svg/choose-opris-2.svg"
                                alt="Innovation-Driven Approach" width="55" height="55" loading="lazy">
                        </div>
                        <p>Innovation-Driven Approach</p>
                    </div>
                    <div class="benefit-opris">
                        <div>
                            <img src="<?php echo $siteurl; ?>assets/images/index/svg/choose-opris-3.svg"
                                alt="Scalable Platform" width="55" height="55" loading="lazy">
                        </div>
                        <p>Scalable Platform</p>
                    </div>
                    <div class="benefit-opris">
                        <div>
                            <img src="<?php echo $siteurl; ?>assets/images/index/svg/choose-opris-4.svg"
                                alt="Customized Partnerships" width="55" height="55" loading="lazy">
                        </div>
                        <p>Customized Partnerships</p>
                    </div>
                    <div class="benefit-opris">
                        <div>
                            <img src="<?php echo $siteurl; ?>assets/images/index/svg/choose-opris-5.svg"
                                alt="Advanced Technology " width="55" height="55" loading="lazy">
                        </div>
                        <p>Advanced Technology </p>
                    </div>
                    <div class="benefit-opris">
                        <div>
                            <img src="<?php echo $siteurl; ?>assets/images/index/svg/choose-opris-6.svg"
                                alt="Global Reach " width="55" height="55" loading="lazy">
                        </div>
                        <p>Global Reach </p>
                    </div>
                    <div class="benefit-opris">
                        <div>
                            <img src="<?php echo $siteurl; ?>assets/images/index/svg/choose-opris-7.svg"
                                alt="Proven 3+ years of Expertise " width="55" height="55" loading="lazy">
                        </div>
                        <p>Proven 3+ years of Expertise </p>
                    </div>
                    <div class="benefit-opris">
                        <div>
                            <img src="<?php echo $siteurl; ?>assets/images/index/svg/choose-opris-8.svg"
                                alt="Commitment to Growth " width="55" height="55" loading="lazy">
                        </div>
                        <p>Commitment to Growth </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blogs">
        <div class="contain-width">
            <h3>Find our Trending Blogs</h3>
            <div class="blog-carsoule">
                <div class="slide-container swiper">
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper">
                            <div class="card swiper-slide" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                data-aos-duration="2000">
                                <div class="card card-body">
                                    <div class="card-img">
                                        <img src="<?php echo $siteurl; ?>assets/images/index/card-img-1.webp"
                                            class="img-fluid" alt="digital-transformation-company" width="361"
                                            height="217" loading="lazy" />
                                    </div>
                                    <div class="card-para">
                                        <p>P2P Crypto Exchange Development A Best Crypto Business Idea For Startups</p>
                                        <p>Peer-to-peer (P2P) exchanges are particularly notable in the ever-changing
                                            world of cryptocurrencies as agents of financial autonomy and
                                            democratization.....</p>
                                    </div>
                                    <div class="demo-btn">
                                        <a href="<?php echo $siteurl; ?>blog/the-entrepreneurs-guide-to-p2p-crypto-exchange-development/"
                                            target="_blank">Read More...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card swiper-slide" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                data-aos-duration="2000">
                                <div class="card card-body">
                                    <div class="card-img">
                                        <img src="<?php echo $siteurl; ?>assets/images/index/card-img-2.webp"
                                            class="img-fluid" alt="digital-transformation-company" width="361"
                                            height="217" loading="lazy" />
                                    </div>
                                    <div class="card-para">
                                        <p>Starting a Crypto Exchange Business: How to Do it Right and When to Do it</p>
                                        <p>Crypto exchange software is a key component for advancement in the fast-paced
                                            world of digital finance; it makes it easier for users to transact and
                                            engage...</p>
                                    </div>
                                    <div class="demo-btn">
                                        <a href="<?php echo $siteurl; ?>blog/starting-a-crypto-exchange-business-guide/"
                                            target="_blank">Read More...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card swiper-slide" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                data-aos-duration="2000">
                                <div class="card card-body">
                                    <div class="card-img">
                                        <img src="<?php echo $siteurl; ?>assets/images/index/card-img-3.webp"
                                            class="img-fluid" alt="digital-transformation-company" width="361"
                                            height="217" loading="lazy" />
                                    </div>
                                    <div class="card-para">
                                        <p>How to Turn Your Crypto Exchange Business Into a Profitable one...</p>
                                        <p>Bybit Clone Script appears as a ray of hope for prospective business owners
                                            in the rapidly evolving world of cryptocurrency trading. Offering
                                            companies....</p>
                                    </div>
                                    <div class="demo-btn">
                                        <a href="<?php echo $siteurl; ?>blog/bybit-clone-script-a-profitable-solution-for-your-crypto-business/"
                                            target="_blank">Read More...</a>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="card swiper-slide">-->
                            <!--    <div class="card card-body">-->
                            <!--        <div class="card-img">-->
                            <!--            <img src="<?php echo $siteurl; ?>assets/images/index/card-img-4.webp"-->
                            <!--                class="img-fluid" alt="digital-transformation-company" width="361" height="217" loading="lazy" />-->
                            <!--        </div>-->
                            <!--        <div class="card-para">-->
                            <!--            <p>How to Develop a Crypto Payment Gateway Like Bitpay in Less Time</p>-->
                            <!--            <p>In the quickly developing field of cryptocurrency payments, Bitpay is a trailblazer. BitPay, well-known for playing a crucial role in the cryptocurrency.....</p>-->
                            <!--        </div>-->
                            <!--        <div class="demo-btn">-->
                            <!--            <a href="https://www.opris.exchange/blog/how-to-develop-a-crypto-payment-gateway-like-bitpay/" target="_blank">Read More...</a>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="card swiper-slide">-->
                            <!--    <div class="card card-body">-->
                            <!--        <div class="card-img">-->
                            <!--            <img src="<?php echo $siteurl; ?>assets/images/index/card-img-1.webp"-->
                            <!--                class="img-fluid" alt="digital-transformation-company" width="361" height="217" loading="lazy" />-->
                            <!--        </div>-->
                            <!--        <div class="card-para">-->
                            <!--            <p>Lorem ipsum dolor sit amet ....</p>-->
                            <!--            <p>Lorem ipsum dolor sit amet consectetur. In leo tellus purus quam elit neque-->
                            <!--                dui. Iaculis non bibendum cursus proin...</p>-->
                            <!--        </div>-->
                            <!--        <div class="demo-btn">-->
                            <!--            <a href="" target="_blank">Read More...</a>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="card swiper-slide">-->
                            <!--    <div class="card card-body">-->
                            <!--        <div class="card-img">-->
                            <!--            <img src="<?php echo $siteurl; ?>assets/images/index/card-img-1.webp"-->
                            <!--                class="img-fluid" alt="digital-transformation-company" width="361" height="217" loading="lazy" />-->
                            <!--        </div>-->
                            <!--        <div class="card-para">-->
                            <!--            <p>Lorem ipsum dolor sit amet ....</p>-->
                            <!--            <p>Lorem ipsum dolor sit amet consectetur. In leo tellus purus quam elit neque-->
                            <!--                dui. Iaculis non bibendum cursus proin...</p>-->
                            <!--        </div>-->
                            <!--        <div class="demo-btn">-->
                            <!--            <a href="" target="_blank">Read More...</a>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->

                        </div>
                    </div>
                    <div class="precv-nxt">
                        <div class="swiper-button-prev swiper-navBtn"></div>
                        <div class="swiper-button-next swiper-navBtn"></div>
                    </div>

                </div>
                <div class="blogs-view-btn demo-btn d-flex justify-content-center"><a
                        href="<?php echo $siteurl; ?>blog/" class="blog-btn" target="_blank">
                        View More
                    </a>
                </div>

            </div>
        </div>
    </section>



    <section class="faq">
        <div class="contain-width">
            <h3>Frequently Asked Questions </h3>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="faq-qn">
                        <div class="perks-benfits">
                            <div class="block-1">
                                <div class="accrd-panel-head">
                                    <h4>What is Opris Exchange? </h4>
                                    <span class="mp-icon"><i class="fa-solid fa-plus" aria-hidden="true"></i></span>
                                </div>
                                <div class="accrd-panel-body active" style="display: none;">
                                    <p>
                                        Opris Exchange is a top digital transformation company that provides a wide
                                        range of advanced technology solutions like Crypto exchange, AI, trading bots,
                                        launchpads, and tokens to help entrepreneurs and investors start their
                                        businesses in the crypto world.
                                    </p>
                                </div>

                            </div>

                            <div class="block-1">
                                <div class="accrd-panel-head">
                                    <h4>What services are provided by Opris Exchange?</h4>
                                    <span class="mp-icon"><i class="fa-solid fa-plus" aria-hidden="true"></i></span>
                                </div>
                                <div class="accrd-panel-body active" style="display: none;">
                                    <p> Opris Exchange provides all kinds of services,</p>
                                    <ul>
                                        <li>Crypto Exchange Development </li>
                                        <li>AI Development</li>
                                        <li>Crypto Trading Bot Development </li>
                                        <li>Defi Development </li>
                                        <li>NFT Development</li>
                                        <li>Web3 development</li>
                                        <li>Crypto Wallet Development </li>
                                        <li>Crypto Game Development</li>
                                        <li>Crypto Launchpad Development </li>
                                        <li>Crypto Token Developmen</li>
                                    </ul>
                                </div>

                            </div>

                            <div class="block-1">
                                <div class="accrd-panel-head">
                                    <h4>How to reach the Opris Exchange?</h4>
                                    <span class="mp-icon"><i class="fa-solid fa-plus" aria-hidden="true"></i></span>
                                </div>
                                <div class="accrd-panel-body active" style="display: none;">
                                    <p> Opris Exchange Experts are available 24/7! You can contact them using any of the
                                        following ways:
                                    </p>
                                    <ul>
                                        <li>Whatsapp : +91 99942 48706</li>
                                        <li>Email : sales@opris.exchange <a href=""></a></li>
                                        <li><a href="https://telegram.me/Opris_sales" target="_blank">Telegram :
                                                @Opris_sales</a></li>
                                        <li> <a href="skype:cid.b4d98d670fe822a2?chat" target="_blank">Skype : @Opris
                                                Exchange</a></li>
                                    </ul>
                                </div>

                            </div>




                        </div>
                    </div>
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