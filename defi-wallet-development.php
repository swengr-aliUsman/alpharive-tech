<?php include('define.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="<?php echo $siteurl; ?>fonts/Poppins-Regular.otf" as="font" type="font/otf" crossorigin>
    <title>Defi Wallet Development Company</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $siteurl; ?>Images/favicon.png">
    <meta name="title" content="DeFi Wallet Development Company" />
    <meta name="description"
        content="Opris is a top DeFi wallet development company offering secure, scalable blockchain solutions for efficient digital asset management and decentralized finance.">
    <meta name="keywords" content="defi wallet development company, defi wallet development, defi wallet development services, defi wallet development solutions">
    <meta name="robots" content="index, follow">
    <meta name="p:domain_verify" content="4cc4a899a108609eb666d28a904af75f" />

    <!--- Facebook OG code -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="DeFi Wallet Development Company" />
    <meta property="og:description"
        content=" Opris is a top DeFi wallet development company offering secure, scalable blockchain solutions for efficient digital asset management and decentralized finance." />
    <meta property="og:url" content="<?php echo $siteurl; ?>defi-wallet-development/" />
    <meta property="og:image" content="<?php echo $siteurl; ?>assets/images/og-images/defi-wallet-development.png" />
    <meta property="og:image:secure_url"
        content="https:<?php echo $siteurl; ?>assets/images/og-images/defi-wallet-development.png" />
    <meta property="og:image:alt" content="DeFi Wallet Development Company" />
    <meta property="og:site_name" content="Opris Exchange" />

    <!--- Twitter OG code -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@oprisexchange">
    <meta name="twitter:creator" content="@Oprisexchange">
    <meta name="twitter:description"
        content="Opris is a top DeFi wallet development company offering secure, scalable blockchain solutions for efficient digital asset management and decentralized finance." />
    <meta name="twitter:title" content="DeFi Wallet Development Company" />
    <meta name="twitter:image" content="<?php echo $siteurl; ?>assets/images/og-images/defi-wallet-development.png" />
    <link rel="preload" href="<?php echo $siteurl; ?>assets/images/logo1.webp" as="image" fetchpriority="high">
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
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/index.css<?php echo $version; ?>" />
    <link rel="stylesheet" href="<?php echo $siteurl; ?>assetsindex/css/swiper-bundle.min.css" fetchpriority="low">
    <!-- Extra files -->
    <link rel="icon" type="image/x-icon" href="<?php echo $siteurl; ?>Images/favicon.png">


</head>

<body class="defi-wallet-page">
    <?php include('include/header.php'); ?>
    <!--- Header START -->
    <!--- Header end -->
    <!-----  Banner start  -->
    <section class="banner-part">
        <div class="contain-width">
            <div class="row align-item-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="trading-left-banner">
                        <p class="best">Top Rated</p>
                        <h1>Defi Wallet Development Company</h1>
                        <p>Partner with Opris, a leading DeFi wallet development company, offers secure and customizable
                            defi wallet solutions for crypto transactions across mobile and web. Our DeFi wallet
                            development services ensure fast integration, robust protection, and seamless transactions,
                            empowering businesses and individuals in the decentralized finance space.
                        </p>

                        <div class="explore-btn mt-5">
                            <a href="<?php echo $siteurl; ?>contactus" target="_blank">Get Free Demo</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="banner-right">
                        <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/webp/defi-wallet-development-company.webp"
                            alt="Defi-Wallet-Development-Company" loading="eager" width="579" height="552">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-----  Banner end  -->
    <section class="clent-review">
        <div class="contain-width">
            <div class="clients-box">
                <div class="review-box" data-aos="fade-right">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-1.svg" class="img-fluid"
                            alt="defi-wallet-development" loading="lazy" width="31" height="31" />
                    </div>
                    <p>100 <span>+</span></p>
                    <span>Happy clients</span>
                </div>
                <div class="review-box" data-aos="fade-right">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-2.svg" class="img-fluid"
                            alt="defi-wallet-development" loading="lazy" width="31" height="31" />
                    </div>
                    <p>40 <span>+</span></p>
                    <span>Blockchain Experts</span>
                </div>
                <div class="review-box" data-aos="fade-right">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-3.svg" class="img-fluid"
                            alt="defi-wallet-development" loading="lazy" width="31" height="31" />
                    </div>
                    <p>115 <span>+</span></p>
                    <span>Successful projects </span>
                </div>
                <div class="review-box" data-aos="fade-right">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-4.svg" class="img-fluid"
                            alt="defi-wallet-development" loading="lazy" width="31" height="31" />
                    </div>
                    <p>3 <span>+</span></p>
                    <span>Years of Experience</span>
                </div>
                <div class="review-box" data-aos="fade-right">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-5.svg" class="img-fluid"
                            alt="defi-wallet-development" loading="lazy" width="31" height="31" />
                    </div>
                    <p>30 <span>+</span></p>
                    <span>Nations served</span>
                </div>
            </div>
        </div>
    </section>
    <section class="transformation-solutions section-top-pt">
        <div class="contain-width">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7">
                    <h2>Defi Wallet Development</h2>
                    <p>Unlock the future of digital finance with our expert DeFi wallet development services. Opris, we
                        specialize in creating secure, user-friendly, and highly functional DeFi wallets that cater to
                        the evolving needs of crypto enthusiasts and investors. Our DeFi wallet solutions combine
                        advanced blockchain technology with industry-leading security features, ensuring seamless
                        transactions and asset management. </p>
                    <p>Whether you're looking to store cryptocurrencies or engage with decentralized finance protocols,
                        our DeFi crypto wallet development team offers tailored solutions that stand out in reliability
                        and innovation. Embrace the decentralized finance revolution and partner with us for your DeFi
                        wallet journey today!</p>
                    <div class="demo-btn">
                        <a href="<?php echo $siteurl; ?>contactus" target="_blank">Schedule a consultation</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                    <div class="digital-trans-img text-center">
                        <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/webp/defi-wallet-development.webp"
                            alt="defi-wallet-development" width="443" height="408" loading="lazy" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="types-of-crypto section-top-pt">
        <div class="contain-width">
            <div class="head-text">
                <p class="top-text">World-Class</p>
                <h2>Our DeFi Wallet Development Services</h2>
                <p>Our DeFi wallet development services are designed to provide advanced, secure, and seamless solutions
                    for users to manage their digital assets efficiently. With our expertise in DeFi wallet development,
                    we ensure the best-in-class protection and user experience for crypto enthusiasts.</p>
            </div>
            <div class="vertical-tab-solution">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="nav nav-pills tabs-solutions-nav" id="solutions-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active" id="defi-wallet-tab" data-bs-toggle="pill"
                                data-bs-target="#defi-wallet" type="button" role="tab" aria-controls="defi-wallet"
                                aria-selected="true">1. Defi Wallet App Development</button>
                            <button class="nav-link" id="mpc-wallet-tab" data-bs-toggle="pill"
                                data-bs-target="#mpc-wallet" type="button" role="tab" aria-controls="mpc-wallet"
                                aria-selected="false">2. MPC DeFi Wallet Development</button>
                            <button class="nav-link" id="exchange-wallet-tab" data-bs-toggle="pill"
                                data-bs-target="#exchange-wallet" type="button" role="tab"
                                aria-controls="exchange-wallet" aria-selected="false">3. Defi Exchange Wallet
                                Development
                                <button class="nav-link" id="multi-wallet-tab" data-bs-toggle="pill"
                                    data-bs-target="#multi-wallet" type="button" role="tab" aria-controls="multi-wallet"
                                    aria-selected="false">4. Defi Multi-Currency Wallet Development</button>
                                <button class="nav-link" id="staking-wallet-tab" data-bs-toggle="pill"
                                    data-bs-target="#staking-wallet" type="button" role="tab"
                                    aria-controls="staking-wallet" aria-selected="false">5. Defi Staking Wallet
                                    Development</button>
                                <button class="nav-link" id="farming-wallet-tab" data-bs-toggle="pill"
                                    data-bs-target="#farming-wallet" type="button" role="tab"
                                    aria-controls="farming-wallet" aria-selected="false">6. Defi Yield Farming Wallet
                                    Development
                                </button>
                                <button class="nav-link" id="finance-wallet-tab" data-bs-toggle="pill"
                                    data-bs-target="#finance-wallet" type="button" role="tab"
                                    aria-controls="finance-wallet" aria-selected="false">7. Defi Yearn Finance Wallet
                                    Development</button>
                                <button class="nav-link" id="lending-borrow-tab" data-bs-toggle="pill"
                                    data-bs-target="#lending-borrow" type="button" role="tab"
                                    aria-controls="lending-borrow" aria-selected="false">8. Lending & Borrowing DeFi
                                    Wallet Development</button>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="tab-content tabs-solutions-content" id="solutions-pills-tabContent">
                            <div class="tab-pane fade show active" id="defi-wallet" role="tabpanel"
                                aria-labelledby="defi-wallet-tab">
                                <div class="solutions-box">
                                    <div class="solutions-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/our-services-1.svg"
                                            alt="defi-wallet-development" loading="lazy" width="60" height="60">
                                    </div>
                                    <h3>Defi Wallet App Development</h3>
                                    <p>We specialize in DeFi wallet app development, creating cross-platform mobile wallets that allow users to easily manage and store digital assets, ensuring swift and secure transactions within the DeFi ecosystem.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="mpc-wallet" role="tabpanel" aria-labelledby="mpc-wallet-tab">
                                <div class="solutions-box">
                                    <div class="solutions-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/our-services-2.svg"
                                            alt="defi-wallet-development" loading="lazy" width="60" height="60">
                                    </div>
                                    <h3>MPC DeFi Wallet Development</h3>
                                    <p>Our MPC DeFi wallet development leverages Multi-Party Computation (MPC) technology, securing private keys by splitting them into multiple shards, preventing a single point of failure, and enhancing security for users' crypto assets.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="exchange-wallet" role="tabpanel"
                                aria-labelledby="exchange-wallet-tab">
                                <div class="solutions-box">
                                    <div class="solutions-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/our-services-3.svg"
                                            alt="defi-wallet-development" loading="lazy" width="60" height="60">
                                    </div>
                                    <h3>Defi Exchange Wallet Development</h3>
                                    <p>We provide advanced DeFi exchange wallet development solutions, enabling users to seamlessly combine their wallets with exchanges, secure asset storage, and streamlined access to DeFi financial services in one platform.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="multi-wallet" role="tabpanel"
                                aria-labelledby="multi-wallet-tab">
                                <div class="solutions-box">
                                    <div class="solutions-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/our-services-4.svg"
                                            alt="defi-wallet-development" loading="lazy" width="60" height="60">
                                    </div>
                                    <h3>Defi Multi-Currency Wallet Development</h3>
                                    <p>Our DeFi multi-currency wallet development services support various cryptocurrencies, enabling users to store, transfer, and manage multiple digital assets securely within a single DeFi crypto wallet for enhanced convenience.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="staking-wallet" role="tabpanel"
                                aria-labelledby="staking-wallet-tab">
                                <div class="solutions-box">
                                    <div class="solutions-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/our-services-5.svg"
                                            alt="defi-wallet-development" loading="lazy" width="60" height="60">
                                    </div>
                                    <h3>Defi Staking Wallet Development</h3>
                                    <p>We offer DeFi staking wallet development, allowing users to stake their assets in selected pools and earn passive income while ensuring their funds remain secure and readily accessible in their DeFi wallets.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="farming-wallet" role="tabpanel"
                                aria-labelledby="farming-wallet-tab">
                                <div class="solutions-box">
                                    <div class="solutions-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/our-services-6.svg"
                                            alt="defi-wallet-development" loading="lazy" width="60" height="60">
                                    </div>
                                    <h3>Defi Yield Farming Wallet Development</h3>
                                    <p>Our DeFi yield farming wallet development focuses on optimizing users' yield farming experience by providing tools to automatically track earnings and enhance the farming process, enabling higher returns on digital assets.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="finance-wallet" role="tabpanel"
                                aria-labelledby="finance-wallet-tab">
                                <div class="solutions-box">
                                    <div class="solutions-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/our-services-7.svg"
                                            alt="defi-wallet-development" loading="lazy" width="60" height="60">
                                    </div>
                                    <h3>Defi Yearn Finance Wallet Development</h3>
                                    <p>With DeFi Yearn finance wallet development, we build specialized wallets designed for swift fund movement, helping users maximize returns through decentralized finance strategies and efficient yield optimization tools.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="lending-borrow" role="tabpanel"
                                aria-labelledby="lending-borrow-tab">
                                <div class="solutions-box">
                                    <div class="solutions-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/our-services-8.svg"
                                            alt="defi-wallet-development" loading="lazy" width="60" height="60">
                                    </div>
                                    <h3>Lending & Borrowing DeFi Wallet Development</h3>
                                    <p>Our lending and borrowing crypto DeFi wallet development service supports peer-to-peer lending and borrowing, allowing users to earn interest on assets or access crypto-backed loans without the need for intermediaries or central authority involvement.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <section class="cta-box section-top-mt">
        <div class="contain-width">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7 my-auto">
                    <div class="cta-box-content">
                        <h3>Ready to launch your own DeFi Wallet? Contact us today to bring your vision to life!</h3>
                        <div class="cta-btn">
                            <a href="<?php echo $siteurl; ?>contactus" target="_blank"><span>Schedule a Free Consultation</span>
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
                <div class="col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 p-lg-0">
                    <div class="cta-box-img">
                         <img src="<?php echo $siteurl; ?>assets/images/index/cta-image.webp" class="img-fluid"
                            alt="defi-wallet-development" loading="lazy" width="405"
                            height="300" />
                    </div>
                </div>

            </div>
    </section>
    <section class="revenue-modules section-top-pt">
        <div class="contain-width">
            <div class="head-text">
                <h2>
                   Top Features of  <br>
                   DeFi Wallet Development
                </h2>
                <p>
                Decentralized Finance wallet development focuses on creating secure, decentralized solutions for users to interact with blockchain-based financial services. Here are some of the top features that make DeFi crypto wallet development stand out:
                </p>
            </div>
            <div class="owl-slider">
                <div id="carousel" class="owl-carousel">
                    <div class="item display_1">
                        <div class="img-box">
                            <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/decentralized-features-1.svg"
                                class="img-fluid" alt="defi-wallet-development" width="40" height="40" loading="lazy">
                        </div>
                        <h3>Non-Custodial Nature </h3>
                        <p>Our DeFi wallet gives users complete control over their assets and private keys, ensuring true ownership and security without relying on intermediaries.</p>
                    </div>
                    <div class="item display_1">
                        <div class="img-box">
                            <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/decentralized-features-2.svg"
                                class="img-fluid" alt="defi-wallet-development" width="40" height="40" loading="lazy">
                        </div>
                        <h3>Robust Security Features</h3>
                        <p>We prioritize security with private key management, two-factor authentication (2FA), biometric authentication, and multi-signature options, safeguarding your funds against unauthorized access and cyber threats.</p>
                    </div>
                    <div class="item display_1">
                        <div class="img-box">
                            <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/decentralized-features-3.svg"
                                class="img-fluid" alt="defi-wallet-development" width="40" height="40" loading="lazy">
                        </div>
                        <h3>Multi-Asset & Multi-Chain Support</h3>
                        <p>Store and manage a wide range of digital assets across multiple blockchains. Our DeFi wallet supports Bitcoin, Ethereum, Solana, and more, ensuring seamless interaction across DeFi protocols.</p>
                    </div>
                    <div class="item display_1">
                        <div class="img-box">
                            <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/decentralized-features-4.svg"
                                class="img-fluid" alt="defi-wallet-development" width="40" height="40" loading="lazy">
                        </div>
                        <h3>Integration with DeFi Protocols</h3>
                        <p>Easily interact with DeFi protocols for lending, borrowing, staking, and trading. Our DeFi crypto wallet directly integrates with top DeFi platforms, enabling effortless access to decentralized finance services.</p>
                    </div>
                    <div class="item display_1">
                        <div class="img-box">
                            <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/decentralized-features-5.svg"
                                class="img-fluid" alt="defi-wallet-development" width="40" height="40" loading="lazy">
                        </div>
                        <h3>User-Friendly Interface</h3>
                        <p>Our wallet is designed with simplicity in mind, offering an intuitive interface that makes managing assets and interacting with DeFi protocols easy, even for beginners.</p>
                    </div>
                    <div class="item display_1">
                        <div class="img-box">
                            <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/decentralized-features-6.svg"
                                class="img-fluid" alt="defi-wallet-development" width="40" height="40" loading="lazy">
                        </div>
                        <h3>Backup & Recovery Mechanisms</h3>
                        <p>Never worry about losing access to your wallet. We offer secure backup and recovery options, like a recovery phrase, to help you restore your assets anytime, anywhere.</p>
                    </div>
                    <div class="item display_1">
                        <div class="img-box">
                            <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/decentralized-features-7.svg"
                                class="img-fluid" alt="defi-wallet-development" width="40" height="40" loading="lazy">
                        </div>
                        <h3>Transaction Privacy & Anonymity</h3>
                        <p>Our DeFi wallet ensures your transaction privacy with built-in anonymity features, including support for privacy coins and tools like Tornado Cash, keeping your financial activities discreet.</p>
                    </div>
                    <div class="item display_1">
                        <div class="img-box">
                            <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/decentralized-features-8.svg"
                                class="img-fluid" alt="defi-wallet-development" width="40" height="40" loading="lazy">
                        </div>
                        <h3>Cross-Platform & Multi-Device Support</h3>
                        <p>Access your wallet and manage your assets seamlessly across all platforms, including mobile, desktop, and web. Enjoy flexibility and convenience wherever you go.</p>
                    </div>
                </div>
            </div>
    </section>
    <section class="business-benefits section-top-pt">
        <div class="contain-width">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 p-lg-5 business-benefits-left">
                         <h2>Benefits of<br>
                         Defi Wallet Development</h2>
                <p>Our decentralized finance wallet development services provide a wide range of benefits, acting as a strategic asset that not only ensures enhanced user engagement but also supports consistent revenue growth and long-term financial success for our clients.
</p>
                        </div>
                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7 business-benefits-right">
                    <div class="benefits-blocks">
             <div class="business-benefits-card">
      <div class="business-benefits-top">
      <div class="business-benefits-icon">
      <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/business-benefits-1.svg"  alt="defi-wallet-development" loading="lazy" width="40" height="40">
      </div>
      <h3>Dedicated Admin Control</h3>
      </div>
      <p>Our wallet comes with powerful admin control, letting you manage and oversee user activity effortlessly. With real-time monitoring and customizable permissions, you can ensure a smooth and secure experience.</p>
      </div>
        <div class="business-benefits-card card-even">
      <div class="business-benefits-top">
      <div class="business-benefits-icon">
      <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/business-benefits-2.svg"  alt="defi-wallet-development" loading="lazy" width="40" height="40">
      </div>
      <h3>Improved Conversion Rates</h3>
      </div>
      <p>With easy access to balances, seamless transactions, and detailed history, users can manage their assets with confidence. This simplicity and transparency lead to better conversion rates and higher retention.</p>
      </div>
        <div class="business-benefits-card">
      <div class="business-benefits-top">
      <div class="business-benefits-icon">
      <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/business-benefits-3.svg"  alt="defi-wallet-development" loading="lazy" width="40" height="40">
      </div>
      <h3>Unique Selling Proposition (USP) </h3>
      </div>
      <p>Our DeFi crypto wallet's USP lies in its innovative features, tailored solutions, and exceptional customer service, providing clients with a competitive edge in the fast-evolving cryptocurrency market.</p>
      </div>
        <div class="business-benefits-card card-even">
      <div class="business-benefits-top">
      <div class="business-benefits-icon">
      <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/business-benefits-4.svg"  alt="defi-wallet-development" loading="lazy" width="40" height="40">
      </div>
      <h3>Seamless Interoperability</h3>
      </div>
      <p>Our wallet easily connects with a variety of DeFi platforms, DApps, and protocols. This seamless interoperability gives users access to a wide range of decentralized services from one secure, easy-to-use wallet.</p>
      </div>
                </div>
                </div>
            
                </div>
                </div>
   
                </section>
                <section class="global-crypto-services section-top-mt">
    <div class="contain-width">
        <div class="head-text">
            <p class="title-text">Our Global <br>DeFi Wallet Development Services</p>
        </div>
        <ul class="nav nav-pills mb-4 services-tabs mt-2 justify-content-center" id="pills-tab" role="tablist">
  <li class="nav-item services-item" role="presentation">
    <button class="nav-link active" id="pills-usa-tab" data-bs-toggle="pill" data-bs-target="#pills-usa" type="button" role="tab" aria-controls="pills-usa" aria-selected="true">
        <span> <img src="<?php echo $siteurl; ?>assets/images/landing/usa.svg" alt="defi-wallet-development" loading="lazy" width="39" height="26" /></span><span>USA</span></button>
  </li>
  <li class="nav-item  services-item" role="presentation">
    <button class="nav-link" id="pills-ind-tab" data-bs-toggle="pill" data-bs-target="#pills-ind" type="button" role="tab" aria-controls="pills-ind" aria-selected="false">
    <span> <img src="<?php echo $siteurl; ?>assets/images/landing/india.svg" alt="defi-wallet-development" loading="lazy" width="39" height="26" /></span>
    <span>India</span></button>
  </li>
  <li class="nav-item  services-item" role="presentation">
    <button class="nav-link" id="pills-uae-tab" data-bs-toggle="pill" data-bs-target="#pills-uae" type="button" role="tab" aria-controls="pills-uae" aria-selected="false">
    <span> <img src="<?php echo $siteurl; ?>assets/images/landing/uae.svg" alt="defi-wallet-development" loading="lazy" width="39" height="26" /></span>
    <span>UAE</span></button>
  </li>
  <li class="nav-item services-item" role="presentation">
    <button class="nav-link" id="pills-uk-tab" data-bs-toggle="pill" data-bs-target="#pills-uk" type="button" role="tab" aria-controls="pills-uk" aria-selected="false">
    <span> <img src="<?php echo $siteurl; ?>assets/images/landing/uk.svg" alt="defi-wallet-development" loading="lazy" width="39" height="26" /></span>    
    <span>UK</span></button>
  </li>


  <li class="nav-item  services-item" role="presentation">
    <button class="nav-link" id="pills-aus-tab" data-bs-toggle="pill" data-bs-target="#pills-aus" type="button" role="tab" aria-controls="pills-aus" aria-selected="false">
    <span> <img src="<?php echo $siteurl; ?>assets/images/landing/aus.svg" alt="defi-wallet-development" loading="lazy" width="39" height="26" /></span>
    <span>Australia</span></button>
  </li>
  <li class="nav-item  services-item" role="presentation">
    <button class="nav-link" id="pills-brazil-tab" data-bs-toggle="pill" data-bs-target="#pills-brazil" type="button" role="tab" aria-controls="pills-brazil" aria-selected="false">
    <span> <img src="<?php echo $siteurl; ?>assets/images/landing/brazil.svg" alt="defi-wallet-development" loading="lazy" width="39" height="26" /></span>
    <span>Brazil</span></button>
  </li>
 
</ul>
<div class="tab-content services-tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-usa" role="tabpanel" aria-labelledby="pills-usa-tab">
    <p>Opris is a premier DeFi wallet development company in the USA1, providing robust, secure, and user-centric DeFi wallet solutions. Leverage our expertise to create powerful decentralized financial tools for the modern world.
    </p>
  </div>
  <div class="tab-pane fade" id="pills-ind" role="tabpanel" aria-labelledby="pills-ind-tab"><p>Opris is a leading DeFi wallet development company in India, offering immersive, high-quality experiences with advanced technology and innovative design. Partner with our industry-leading experts for groundbreaking and secure DeFi wallet solutions.</p></div>
  <div class="tab-pane fade" id="pills-uk" role="tabpanel" aria-labelledby="pills-uk-tab"><p>Opris, a leading DeFi wallet development company in the UK, specializes in creating high-performance decentralized wallets. We empower clients with innovative, secure solutions that drive adoption and engagement in the DeFi ecosystem.</p></div>
  <div class="tab-pane fade" id="pills-uae" role="tabpanel" aria-labelledby="pills-uae-tab"><p>As a trusted crypto DeFi wallet development company in the UAE, Opris delivers top-tier solutions that combine advanced blockchain technology with regional insights. We focus on building secure, scalable, and efficient DeFi wallets for a growing market.</p></div>
  <div class="tab-pane fade" id="pills-aus" role="tabpanel" aria-labelledby="pills-aus-tab"><p>Opris is a trusted DeFi wallet development company in Australia, offering bespoke wallet solutions that prioritize security, user experience, and scalability, tailored to the growing demand for decentralized finance in the region.</p></div>
  <div class="tab-pane fade" id="pills-brazil" role="tabpanel" aria-labelledby="pills-brazil-tab"><p>Opris is a prominent DeFi wallet development company in Brazil, offering tailored decentralized wallet solutions designed to meet local needs while ensuring global standards in security, usability, and scalability.</p></div>
  
  <div class="demo-btn d-flex justify-content-center">
                        <a href="<?php echo $siteurl; ?>contactus/" target="_blank">Get a Demo</a>
                    </div>
</div>
    </div>
    </section>
    <section class="development-process section-top-pt">
        <div class="contain-width">
            <div class="head-text">
                <p class="top-text">Our End-to-End</p>
                <h2>Defi Wallet Development Process</h2>
            </div>
            <div class="row justify-content-center">

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 p-lg-2">
                    <div class="process-card top-space">
                        <div class="process-card-top">01</div>
                        <div class="process-card-img"> <img
                                src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/development-process-1.svg"
                                width="70" height="70" loading="lazy" alt="defi-wallet-development"></div>
                        <div class="process-card-content">
                            <h3>Requirement Gathering & Analysis</h3>
                            <p>We begin by engaging stakeholders to understand their goals, expectations, and requirements. A detailed analysis ensures alignment and sets a clear foundation for the entire project, creating a roadmap for success.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 p-lg-2">
                    <div class="process-card top-space">
                        <div class="process-card-top">02</div>
                        <div class="process-card-img"> <img
                                src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/development-process-2.svg"
                                width="70" height="70" loading="lazy" alt="defi-wallet-development"></div>
                                <div class="process-card-content">
                            <h3>Design, Wireframes & Mockups</h3>
                            <p>Our design team creates visually appealing, interactive prototypes to demonstrate the user experience. Wireframes and mockups outline the platform’s flow, offering a tangible preview of the final product's interface and functionality.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 p-lg-2">
                    <div class="process-card top-space">
                        <div class="process-card-top">03</div>
                        <div class="process-card-img"> <img
                                src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/development-process-3.svg"
                                width="70" height="70" loading="lazy" alt="defi-wallet-development"></div>
                                <div class="process-card-content">
                            <h3>dApp Development (Alpha, Beta, Release)</h3>
                            <p>We build your decentralized application (dApp) in three phases: Alpha for initial DeFi wallet development, Beta for testing and refinement, and Release for final deployment. Each phase ensures quality, security, and functionality.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 p-lg-2">
                    <div class="process-card top-space">
                        <div class="process-card-top">04</div>
                        <div class="process-card-img"> <img
                                src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/development-process-4.svg"
                                width="70" height="70" loading="lazy" alt="defi-wallet-development"></div>
                                <div class="process-card-content">
                            <h3>Alterations & Confirmation</h3>
                            <p>Before proceeding to DeFi wallet development, clients can request modifications to designs and features, ensuring the platform aligns with their vision and specifications. This step ensures complete satisfaction before development begins.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 p-lg-2">
                    <div class="process-card top-space">
                        <div class="process-card-top">05</div>
                        <div class="process-card-img"> <img
                                src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/development-process-5.svg"
                                width="70" height="70" loading="lazy" alt="defi-wallet-development"></div>
                                <div class="process-card-content">
                            <h3>Development</h3>
                            <p>Once the design is approved, our development team leverages the latest technologies to build the DeFi wallet solution. We work iteratively, ensuring high-quality code and regular updates to keep the project on track and within scope.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 p-lg-2">
                    <div class="process-card top-space">
                        <div class="process-card-top">06</div>
                        <div class="process-card-img"> <img
                                src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/development-process-6.svg"
                                width="70" height="70" loading="lazy" alt="defi-wallet-development"></div>
                                <div class="process-card-content">
                            <h3>Deployment & Quality Assurance</h3>
                            <p>After thorough testing, including security audits and bug fixes, the final product is deployed. We ensure it performs seamlessly in the live environment, with continuous monitoring to prevent any issues post-launch.</p>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>
        <section class="cta-box section-top-mt">
        <div class="contain-width">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7 my-auto">
                    <div class="cta-box-content">
                        <h3> Ready to create your own DeFi Wallet? Book our DeFi Wallet Developers and turn your idea into reality!</h3>
                        <div class="cta-btn">
                            <a href="<?php echo $siteurl; ?>contactus" target="_blank"><span>Schedule a Free Consultation</span>
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
                <div class="col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 p-lg-0">
                    <div class="cta-box-img">
                        <img src="<?php echo $siteurl; ?>assets/images/index/cta-image-2.webp" class="img-fluid"
                            alt="defi-wallet-development" loading="lazy" width="324"
                            height="312" />
                    </div>
                </div>

            </div>
            </div>
            </div>
    </section>
    <section class="opris-tech-stack section-top-pt">
    <div class="contain-width">
    <div class="head-text">
                <h2>Tech Stack for <br>
DeFi Wallet App Development
</h2>
            </div>
    <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
            <h3 class="tech-stack-heading">Blockchain Development</h3>
<div class="tech-stack-card">
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/blockchain-development-1.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>Ethereum</p>
</div>
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/blockchain-development-2.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>BSC</p>
</div>
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/blockchain-development-3.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>Solana</p>
</div>
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/blockchain-development-4.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>Polygon</p>
</div>
</div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
            <h3 class="tech-stack-heading">Smart Contract Development</h3>
<div class="tech-stack-card">
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/smart-contract-development-1.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>Solidity</p>
</div>
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/smart-contract-development-2.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>Vyper</p>
</div>
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/smart-contract-development-3.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>Rust</p>
</div>
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/smart-contract-development-4.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>Move</p>
</div>
</div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
            <h3 class="tech-stack-heading">Frontend Development</h3>
<div class="tech-stack-card">
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/frontend-development-1.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>React Native</p>
</div>
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/frontend-development-2.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>Flutter</p>
</div>
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/frontend-development-3.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>HTML5/CSS3</p>
</div>
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/frontend-development-4.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>Web3.js / Ethers.js</p>
</div>
</div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
            <h3 class="tech-stack-heading">Backend Development</h3>
<div class="tech-stack-card">
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/backend-development-1.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>Node.js</p>
</div>
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/backend-development-2.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>Express.js</p>
</div>
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/backend-development-3.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>MongoDB / PostgreSQL</p>
</div>
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/backend-development-4.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>Redis</p>
</div>
</div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
            <h3 class="tech-stack-heading">Wallet Integration</h3>
<div class="tech-stack-card">
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/wallet-integration-1.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>MetaMask SDK</p>
</div>
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/wallet-integration-2.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>WalletConnect</p>
</div>
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/wallet-integration-3.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>Fortmatic</p>
</div>
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/wallet-integration-4.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>Coinbase Wallet SDK</p>
</div>
</div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
            <h3 class="tech-stack-heading">Security Tools</h3>
<div class="tech-stack-card">
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/security-tools-1.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>OpenZeppelin</p>
</div>
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/security-tools-2.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>Chainlink</p>
</div>
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/security-tools-3.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>Forta</p>
</div>
<div class="tech-stack-block">
<div class="tech-stack-icon">
<img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development/svg/security-tools-4.svg" width="80" height="80" loading="lazy" alt="defi-wallet-development">
</div>
<p>Immunefi</p>
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
                    <h2>Industries We Serve with 
                    DeFi Wallet Development Solutions </h2>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9 p-lg-0">
                    <div class="serve-boxs">

                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development//svg/industy-1.svg"
                                    class="img-fluid" alt="Fintech" loading="lazy" width="48" height="48" />
                            </div>
                            <p>Fintech</p>
                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development//svg/industy-2.svg"
                                class="img-fluid" alt="Education" loading="lazy" width="48" height="48" />
                            </div>
                            <p>Education</p>
                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development//svg/industy-3.svg"
                                class="img-fluid" alt="Supply Chain" loading="lazy" width="48" height="48" />
                            </div>
                            <p>Supply Chain</p>
                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development//svg/industy-4.svg"
                                class="img-fluid" alt="Real-Estate" loading="lazy" width="48" height="48" />
                            </div>
                            <p>Real-Estate</p>
                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development//svg/industy-5.svg"
                                class="img-fluid" alt="Sports" loading="lazy" width="48" height="48" />
                            </div>
                            <p>Sports</p>
                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development//svg/industy-6.svg"
                                class="img-fluid" alt="Logistics" loading="lazy" width="48" height="48" />
                            </div>
                            <p>Logistics</p>
                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development//svg/industy-7.svg"
                                class="img-fluid" alt="Insurance" loading="lazy" width="48" height="48" />
                            </div>
                            <p>Insurance</p>
                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development//svg/industy-8.svg"
                                class="img-fluid" alt="Government" loading="lazy" width="48" height="48" />
                            </div>
                            <p>Government</p>
                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development//svg/industy-9.svg"
                                    class="img-fluid" alt="E-Commerce" loading="lazy" width="48" height="48" />
                            </div>
                            <p>E-Commerce</p>
                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/Image/defi-wallet-development//svg/industy-10.svg"
                                class="img-fluid" alt="Gaming" loading="lazy" width="48" height="48" />
                            </div>
                            <p>Gaming</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="choose-opris  section-top-pt">
        <div class="contain-width">
            <div class="col-lg-11 mx-auto head-text">
                <p class="top-text"> Why Choose Opris as a </p>
                <h2>DeFi Wallet Development Company?</h2>
                <p>Opris is a top choice for developing decentralized finance (DeFi) wallet solutions, combining expert knowledge with innovative approaches. As a leading DeFi wallet development company, we focus on creating secure, scalable, and user-friendly wallet platforms that help users interact smoothly with DeFi networks. Our team uses the latest blockchain technology and strong security features to ensure your platform is safe, reliable, and ready for DeFi activities. With Opris, you get a customized solution with ongoing support, making sure your wallet stays up-to-date with the fast-changing DeFi world.
                </p>
            </div>
            <div class="mt-5 mx-auto text-center">
                <ul class="p-0">
<li>Blockchain & DeFi Expertise</li>

<li>Seamless User Experience</li>
<li>100% Client Support</li>
<li>Competitive Pricing</li>
<li>Comprehensive DeFi Services</li>
<li>Timely Project Delivery</li>
<li>Expert Blockchain Development Team</li>
<li>Tailored Development Approach</li>
<li>Proven Success in DeFi Development</li>
<li>Post-Launch Maintenance & Upgrades</li>
                </ul>
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
    <section class="faq section-top-pt">
        <div class="contain-width">
            <h3>FAQ </h3>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="faq-qn">
                        <div class="perks-benfits">
                            <div class="block-1">
                                <div class="accrd-panel-head">
                                    <h4 class="accrd-title">How Does a DeFi Wallet Work? </h4>
                                    <span class="mp-icon"><i class="fa-solid fa-plus" aria-hidden="true"></i></span>
                                </div>
                                <div class="accrd-panel-body active" style="display: none;">
                                    <p>
                                    A DeFi wallet allows users to store, send, and receive cryptocurrencies directly on the blockchain. When assets are transferred, ownership changes, but the asset itself remains on the blockchain, with the address updated to reflect the new owner.
                                    </p>
                                </div>

                            </div>

                            <div class="block-1">
                                <div class="accrd-panel-head">
                                    <h4 class="accrd-title">How much does it cost to build a white label DeFi wallet development solution?</h4>
                                    <span class="mp-icon"><i class="fa-solid fa-plus" aria-hidden="true"></i></span>
                                </div>
                                <div class="accrd-panel-body active" style="display: none;">
                                    <p>The cost of building a DeFi wallet solution depends on factors like features, complexity, technical expertise, and the time required for development. For an accurate estimate tailored to your vision, schedule a consultation with our white label DeFi wallet development experts.</p>
                                </div>

                            </div>

                            <div class="block-1">
                                <div class="accrd-panel-head">
                                    <h4 class="accrd-title">How long does it take to develop a DeFi wallet with Opris?</h4>
                                    <span class="mp-icon"><i class="fa-solid fa-plus" aria-hidden="true"></i></span>
                                </div>
                                <div class="accrd-panel-body active" style="display: none;">
                                    <p>The development timeline for a DeFi wallet with Opris depends on factors like project complexity, features, and customization requirements. Typically, the process takes several weeks to months, from planning to deployment and testing.</p>
                                </div>

                            </div>
                            <div class="block-1">
                                <div class="accrd-panel-head">
                                    <h4 class="accrd-title">Will my DeFi wallet be able to accommodate multiple currencies?</h4>
                                    <span class="mp-icon"><i class="fa-solid fa-plus" aria-hidden="true"></i></span>
                                </div>
                                <div class="accrd-panel-body active" style="display: none;">
                                    <p>Yes, the DeFi wallet we develop will support multiple currencies, including various cryptocurrencies and non-fungible tokens (NFTs), allowing you to manage a diverse range of digital assets seamlessly.
                                    </p>

                                </div>

                            </div>
                            <div class="block-1">
                                <div class="accrd-panel-head">
                                    <h4 class="accrd-title">What is MPC DeFi Crypto Wallet Development and how does it benefit users?</h4>
                                    <span class="mp-icon"><i class="fa-solid fa-plus" aria-hidden="true"></i></span>
                                </div>
                                <div class="accrd-panel-body active" style="display: none;">
                                    <p>MPC DeFi Crypto Wallet Development enables next-gen DeFi solutions with Multi-Party Computation (MPC) technology, offering unrivaled security and scalability. MPC protects user assets by splitting private keys across multiple parties. Our solutions provide powerful security, real-time portfolio management, and rapid deployment.

                                    </p>

                                </div>

                            </div>
                            <div class="block-1">
                                <div class="accrd-panel-head">
                                    <h4 class="accrd-title">What services does Opris offer for DeFi wallet development?</h4>
                                    <span class="mp-icon"><i class="fa-solid fa-plus" aria-hidden="true"></i></span>
                                </div>
                                <div class="accrd-panel-body active" style="display: none;">
                                    <p>Opris provides end-to-end crypto DeFi wallet development services, including consultation, custom design, blockchain integration, security auditing, and continuous maintenance and support to ensure optimal performance, security, and scalability of your wallet.</p>
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

    <script>
        var swiper = new Swiper(".reviewSwiper", {
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            loop: true,
            autoplay: {
                delay: 5000,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
            on: {
                slideChangeTransitionStart: function () {
                    let slides = document.querySelectorAll('.reviewSwiper .swiper-slide');
                    slides.forEach(slide => {
                        slide.style.transform = 'scale(0.6)'; // Scale down all slides
                    });
                    let activeSlide = document.querySelector('.reviewSwiper .swiper-slide.swiper-slide-active');
                    if (activeSlide) {
                        activeSlide.style.transform = 'scale(1)'; // Scale up the active slide
                    }
                },
                init: function () {
                    let activeSlide = document.querySelector('.reviewSwiper .swiper-slide.swiper-slide-active');
                    if (activeSlide) {
                        activeSlide.style.transform = 'scale(1)'; // Ensure active slide starts scaled up
                    }
                }
            }

        });
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
    <script id="rendered-js">
        jQuery("#carousel").owlCarousel({
            autoplay: false,
            rewind: false, /* use rewind if you don't want loop */
            margin: 25,
            loop: true,
            /*
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            */
            responsiveClass: true,
            autoHeight: true,
            autoplayTimeout: 7000,
            smartSpeed: 800,
            nav: true,
            navText: [
                '<button aria-label="Previous slide"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.9675 18.5675L13.2 20.3363L7.89624 15.0325L13.2 9.72876L14.9675 11.4963L12.6825 13.7825H22.1037V16.2825H12.6825L14.9675 18.5675Z" fill="#FF2B2B" /><path fill-rule="evenodd" clip-rule="evenodd" d="M23.75 1.25C25.0761 1.25 26.3479 1.77678 27.2855 2.71447C28.2232 3.65215 28.75 4.92392 28.75 6.25V23.75C28.75 25.0761 28.2232 26.3479 27.2855 27.2855C26.3479 28.2232 25.0761 28.75 23.75 28.75H6.25C4.92392 28.75 3.65215 28.2232 2.71447 27.2855C1.77678 26.3479 1.25 25.0761 1.25 23.75L1.25 6.25C1.25 4.92392 1.77678 3.65215 2.71447 2.71447C3.65215 1.77678 4.92392 1.25 6.25 1.25L23.75 1.25ZM26.25 6.25V23.75C26.25 24.413 25.9866 25.0489 25.5178 25.5178C25.0489 25.9866 24.413 26.25 23.75 26.25H6.25C5.58696 26.25 4.95107 25.9866 4.48223 25.5178C4.01339 25.0489 3.75 24.413 3.75 23.75L3.75 6.25C3.75 5.58696 4.01339 4.95107 4.48223 4.48223C4.95107 4.01339 5.58696 3.75 6.25 3.75L23.75 3.75C24.413 3.75 25.0489 4.01339 25.5178 4.48223C25.9866 4.95107 26.25 5.58696 26.25 6.25Z" fill="#FF2B2B" /></svg></button>',
                '<button aria-label="Next slide"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.0325 17.5675L15.8 19.3363L21.1038 14.0325L15.8 8.72876L14.0325 10.4963L16.3175 12.7825H6.89626V15.2825H16.3175L14.0325 17.5675Z" fill="url(#paint0_linear_1_622)" /><path fill-rule="evenodd" clip-rule="evenodd" d="M5.25 0.25C3.92392 0.25 2.65215 0.776784 1.71447 1.71447C0.776785 2.65215 0.25 3.92392 0.25 5.25V22.75C0.25 24.0761 0.776785 25.3479 1.71447 26.2855C2.65215 27.2232 3.92392 27.75 5.25 27.75H22.75C24.0761 27.75 25.3479 27.2232 26.2855 26.2855C27.2232 25.3479 27.75 24.0761 27.75 22.75V5.25C27.75 3.92392 27.2232 2.65215 26.2855 1.71447C25.3479 0.776784 24.0761 0.25 22.75 0.25L5.25 0.25ZM2.75 5.25V22.75C2.75 23.413 3.01339 24.0489 3.48223 24.5178C3.95107 24.9866 4.58696 25.25 5.25 25.25H22.75C23.413 25.25 24.0489 24.9866 24.5178 24.5178C24.9866 24.0489 25.25 23.413 25.25 22.75V5.25C25.25 4.58696 24.9866 3.95107 24.5178 3.48223C24.0489 3.01339 23.413 2.75 22.75 2.75L5.25 2.75C4.58696 2.75 3.95107 3.01339 3.48223 3.48223C3.01339 3.95107 2.75 4.58696 2.75 5.25Z" fill="url(#paint1_linear_1_622)" /><defs><linearGradient id="paint0_linear_1_622" x1="0.804451" y1="12.8499" x2="10.1882" y2="26.7207" gradientUnits="userSpaceOnUse"><stop stop-color="#FF1717" /><stop offset="1" stop-color="#FF6461" /></linearGradient><linearGradient id="paint1_linear_1_622" x1="-11.5413" y1="10.9341" x2="14.5408" y2="39.719" gradientUnits="userSpaceOnUse"><stop stop-color="#FF1717" /><stop offset="1" stop-color="#FF6461" /></linearGradient></defs></svg></button>'],
            responsive: {
                0: {
                    items: 1
                },


                600: {
                    items: 2
                },


                1024: {
                    items: 3
                },


                1366: {
                    items: 3
                }
            }
        });

    </script>




</body>

</html>