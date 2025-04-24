<?php include('define.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="<?php echo $siteurl; ?>fonts/Poppins-Regular.otf" as="font" type="font/otf" crossorigin>
    <title>Crypto Wallet Development Company - Opris Exchange </title>
    <link rel="icon" type="image/x-icon" href="<?php echo $siteurl; ?>Images/favicon.png">
    <meta name="title" content="Crypto Wallet Development Company  - Opris Exchange " />
    <meta name="description"
        content="Opris Exchange is a top crypto wallet development company, providing secure and affordable crypto wallet services for storing and managing crypto holdings. ">
    <meta name="keywords"
        content="Crypto Wallet Development Company, Cryptocurrency Wallet Development Company, Crypto Wallet Development Services, Crypto Wallet Development Solutions. ">
    <meta name="robots" content="index, follow">
    <meta name="p:domain_verify" content="4cc4a899a108609eb666d28a904af75f" />

    <!--- Facebook OG code -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Crypto Wallet Development Company  - Opris Exchange " />
    <meta property="og:description"
        content=" Opris Exchange is a top crypto wallet development company, providing secure and affordable crypto wallet services for storing and managing crypto holdings." />
    <meta property="og:url" content="<?php echo $siteurl; ?>cryptocurrency-wallet-development-company/" />
    <meta property="og:image"
        content="<?php echo $siteurl; ?>assets/images/og-images/cryptocurrency-wallet-development-company.png" />
    <meta property="og:image:secure_url"
        content="https:<?php echo $siteurl; ?>assets/images/og-images/cryptocurrency-wallet-development-company.png" />
    <meta property="og:image:alt" content="Crypto Wallet Development Company" />
    <meta property="og:site_name" content="Opris Exchange" />

    <!--- Twitter OG code -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@oprisexchange">
    <meta name="twitter:creator" content="@Oprisexchange">
    <meta name="twitter:description"
        content="Opris Exchange is a top crypto wallet development company, providing secure and affordable crypto wallet services for storing and managing crypto holdings." />
    <meta name="twitter:title" content="Crypto Wallet Development Company  - Opris Exchange " />
    <meta name="twitter:image"
        content="<?php echo $siteurl; ?>assets/images/og-images/cryptocurrency-wallet-development-company.png" />
    <link rel="icon" type="image/x-icon" href="<?php echo $siteurl; ?>Images/favicon.png">

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
    <link rel="preload" href="<?php echo $siteurl; ?>/assets/images/logo.webp" as="image" fetchpriority="high">

    <link rel="canonical" href="<?php echo $canonical; ?>" />

</head>

<body class="crypto-wallet-page">
    <?php include('include/header.php'); ?>
    <!--- Header START -->
    <!--- Header end -->
    <!-----  Banner start  -->
    <section class="banner-part">
        <div class="contain-width">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="best">Top-Notch</div>
                    <h1>Cryptocurrency Wallet Development Company</h1>
                    <div class="success mb-2">150+ successful projects</div>
                    <div class="secure mb-4">Get a Secured Crypto Wallet for your Business</div>

                    <p>Opris is a top crypto wallet development company that builds, manages, and integrates custom
                        crypto wallet solutions to help businesses and entrepreneurs. Our crypto wallet ensures high-end
                        security and stability for complete asset protection.
                    </p>

                    <div class="explore-btn">
                        <a href="<?php echo $siteurl; ?>contactus" target="_blank">Get a proposal</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="banner-right banner-img">
                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/webp/banner-right-img.webp"
                            alt="cryptocurrency-wallet-development-company" loading="eager" class="img-fluid">
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
                            alt="cryptocurrency-wallet-development-company" loading="lazy" width="31" height="31" />
                    </div>
                    <p>100 <span>+</span></p>
                    <span>Happy clients</span>
                </div>
                <div class="review-box" data-aos="fade-right">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-2.svg" class="img-fluid"
                            alt="cryptocurrency-wallet-development-company" loading="lazy" width="31" height="31" />
                    </div>
                    <p>40 <span>+</span></p>
                    <span>Blockchain Experts</span>
                </div>
                <div class="review-box" data-aos="fade-right">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-3.svg" class="img-fluid"
                            alt="cryptocurrency-wallet-development-company" loading="lazy" width="31" height="31" />
                    </div>
                    <p>150 <span>+</span></p>
                    <span>Successful projects </span>
                </div>
                <div class="review-box" data-aos="fade-right">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-4.svg" class="img-fluid"
                            alt="cryptocurrency-wallet-development-company" loading="lazy" width="31" height="31" />
                    </div>
                    <p>3 <span>+</span></p>
                    <span>Years of Experience</span>
                </div>
                <div class="review-box" data-aos="fade-right">
                    <div class="client-icon">
                        <img src="<?php echo $siteurl; ?>assets/images/landing/icon-5.svg" class="img-fluid"
                            alt="cryptocurrency-wallet-development-company" loading="lazy" width="31" height="31" />
                    </div>
                    <p>30 <span>+</span></p>
                    <span>Nations served</span>
                </div>
            </div>
        </div>
    </section>

  
    <section class="outstanding-features section-top-pt">
        <div class="contain-width">
            <div class="head-text">
                <p class="top-text">Why Invest in </p>
                <h2>Crypto Wallet Development</h2>
                <p>Due to a number of reasons like increasing cryptocurrency users and scaling of crypto markets crypto
                    wallet is a big market to invest in and start crypto wallets. The global crypto wallet market was
                    valued at USD 8.42 billion in 2022 and is projected to expand at a compound annual growth rate
                    (CAGR) of 24.8% from 2023 to 2030.
                </p>
                <p>Recent government and regulatory changes have brought significant advancements to the crypto
                    industry, highlighting the growing demand for crypto-based businesses and markets. As a result,
                    platforms like crypto exchanges, crypto wallets, and crypto payment gateways have gained
                    considerable traction.</p>
                <p>Opris is a leading crypto wallet development service provider, offering secure and customizable
                    crypto wallet solutions tailored to your business needs and type. Choose skilled crypto wallet
                    developers from Opris to pave the way for your business's success.
                </p>
            </div>
        </div>
    </section>
    <section class="development-services section-top-pt">
        <div class="contain-width">
            <div class="head-text">
                <h2>
                    Our <br>Cryptocurrency Wallet Development Services</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic" data-aos-duration="4000">
                    <div class="services-box">
                        <h3>White Label Crypto Wallet Development
                        </h3>
                        <p>Our white-label crypto wallet solutions are customizable and ready to launch, with advanced
                            features integrated to ensure quick deployment while aligning with your business
                            requirements.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic" data-aos-duration="4000">
                    <div class="services-box">
                        <h3 class="max-width-200">
                            DeFi Wallet Development
                        </h3>
                        <p>Our Decentralized wallet development services provide secure and decentralized solutions,
                            enabling users to manage and trade assets independently. We also offer integration with top
                            DeFi protocols to enhance functionality.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic" data-aos-duration="4000">
                    <div class="services-box">
                        <h3>
                            Web3 Wallet Development
                        </h3>
                        <p> Our Web3 wallets are designed to support seamless interaction with decentralized
                            applications (dApps). We ensure compatibility with multiple Web3 standards, such as Ethereum
                            and Polkadot, for a versatile user experience.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic" data-aos-duration="4000">
                    <div class="services-box">
                        <h3>
                            Wallet-as-a-Service (WaaS)
                        </h3>
                        <p> Our WaaS solutions allow businesses to incorporate wallet functionalities without complex
                            development. We ensure robust security, scalability, and easy API integration for smooth
                            operations.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic" data-aos-duration="4000">
                    <div class="services-box">
                        <h3 class="max-width-200">
                            MPC Wallet Development
                        </h3>
                        <p>Our <a href="<?php echo $siteurl; ?>blog/mpc-wallet-development/" class=" text-decoration-underline text-dark">MPC wallet development</a> enhances security by splitting private keys among multiple
                            parties. We also provide features like real-time transaction approvals and two-factor
                            authentication.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic" data-aos-duration="4000">
                    <div class="services-box">
                        <h3>
                            Multi-Chain Wallet Development
                        </h3>
                        <p> Our multi-chain wallets enable users to manage assets across various blockchain networks
                            seamlessly. We also include cross-chain transaction support to improve accessibility.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic" data-aos-duration="4000">
                    <div class="services-box">
                        <h3>
                            Coin-Based Wallet Development
                        </h3>
                        <p>Our coin-specific wallets are optimized for individual cryptocurrencies, like bitcoin,
                            ethereum ensuring high performance and unique features like staking and token swaps.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic" data-aos-duration="4000">
                    <div class="services-box">
                        <h3>
                            Centralized Wallet Development
                        </h3>
                        <p> Our centralized wallets offer high-speed transactions and intuitive interfaces. We also
                            integrate secure backup and recovery options to ensure data safety.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic" data-aos-duration="4000">
                    <div class="services-box">
                        <h3>
                            TRON Wallet Development
                        </h3>
                        <p> Our TRON wallet solutions are customized to support TRX and TRON-based tokens. We also
                            implement smart contract integration for advanced functionalities.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="revenue-modules wallet-types section-top-pt">
        <div class="contain-width">
            <div class="head-text">
                <p class="top-text">Our Various Types of </p>
                <h2>Crypto Wallet App Development</h2>
                <p>As a leading crypto wallet app development company, we create a variety of crypto wallet platforms
                    tailored to meet your unique business needs.</p>
            </div>
            <div class="owl-slider">
                <div id="carousel" class="owl-carousel">
                    <div class="item display_1">
                        <div class="img-box">
                            <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/various-types-1.svg"
                                class="img-fluid" alt="Custodial-Wallets" width="40" height="40" loading="lazy">
                        </div>
                        <h3>Custodial Wallets</h3>
                        <p> Custodial wallets are managed by third-party providers who control the private keys for
                            users, offering convenience and security. Ideal for users who prefer customer support and
                            easy recovery options.</p>
                    </div>
                    <div class="item display_1">
                        <div class="img-box">
                            <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/various-types-2.svg"
                                class="img-fluid" alt="Non-custodial-Wallets" width="40" height="40" loading="lazy">
                        </div>
                        <h3>Non-custodial Wallets</h3>
                        <p> Non-custodial wallets allow users to control their private keys, offering full ownership and
                            enhanced privacy. Perfect for those who prioritize security and autonomy over their assets
                        </p>
                    </div>
                    <div class="item display_1">
                        <div class="img-box">
                            <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/various-types-3.svg"
                                class="img-fluid" alt="Hot (Software)-Wallets" width="40" height="40" loading="lazy">
                        </div>
                        <h3>Hot (Software) Wallets</h3>
                        <p> Hot wallets are connected to the internet, allowing quick access to funds for frequent
                            transactions. They offer speed but come with a higher exposure to online threats.</p>
                    </div>
                    <div class="item display_1">
                        <div class="img-box">
                            <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/various-types-4.svg"
                                class="img-fluid" alt="Cold (Hardware)-Wallets" width="40" height="40" loading="lazy">
                        </div>
                        <h3>Cold (Hardware) Wallets</h3>
                        <p> Cold wallets store private keys offline, providing the highest level of security against
                            hacking. Ideal for long-term storage and safeguarding large amounts of cryptocurrency.</p>
                    </div>
                    <div class="item display_1">
                        <div class="img-box">
                            <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/various-types-5.svg"
                                class="img-fluid" alt=" Multi-currency-Wallets" width="40" height="40" loading="lazy">
                        </div>
                        <h3> Multi-currency Wallets</h3>
                        <p> Multi-currency wallets support a wide range of cryptocurrencies, allowing users to manage
                            diverse portfolios in one place. Great for traders and investors handling multiple assets.
                        </p>
                    </div>
                    <div class="item display_1">
                        <div class="img-box">
                            <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/various-types-6.svg"
                                class="img-fluid" alt="Single-signature-Wallets" width="40" height="40" loading="lazy">
                        </div>
                        <h3>Single-signature Wallets</h3>
                        <p> Single-signature wallets require just one private key for transactions, offering simplicity
                            and ease of use. Suitable for individual users who don't require complex authorization
                            processes.</p>
                    </div>
                    <div class="item display_1">
                        <div class="img-box">
                            <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/various-types-7.svg"
                                class="img-fluid" alt="Multi-signature-Wallets" width="40" height="40" loading="lazy">
                        </div>
                        <h3>Multi-signature Wallets</h3>
                        <p> Multi-signature wallets require multiple private keys to approve transactions, enhancing
                            security for shared accounts. Perfect for businesses or joint accounts requiring additional
                            oversight.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="wallet-features section-top-pt">
        <div class="contain-width">
            <div class="head-text">
                <h2>Features of Our <br> Cryptocurrency Wallet Development Services</h2>

            </div>
            <div class="d-flex align-items-start features-tab">
                <div class="nav flex-column nav-pills me-3 features-tab-nav" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-defaultFeatures-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-defaultFeatures" type="button" role="tab"
                        aria-controls="v-pills-defaultFeatures" aria-selected="true">
                       Default Features
                    </button>
                    <button class="nav-link" id="v-pills-advancedFeatures-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-advancedFeatures" type="button" role="tab"
                        aria-controls="v-pills-advancedFeatures" aria-selected="false">
                       Advanced Features
                    </button>
                    <button class="nav-link" id="v-pills-securityFeatures-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-securityFeatures" type="button" role="tab"
                        aria-controls="v-pills-securityFeatures" aria-selected="false">
                        security Features
                    </button>
                </div>
                <div class="tab-content features-tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-defaultFeatures" role="tabpanel"
                        aria-labelledby="v-pills-defaultFeatures-tab">
                        <div class="row justify-content-center">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/default-features-1.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3>Multi-Wallet</h3>
                                    <p> Our wallets support multiple cryptocurrency accounts, enabling users to manage various assets in one platform. This feature allows for seamless switching between different wallets for convenience.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/default-features-2.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3>Add Custom Token</h3>
                                    <p> Users can add custom tokens to their wallets, supporting a wide range of cryptocurrencies beyond the standard ones. This flexibility allows for managing unique and lesser-known tokens easily.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/default-features-3.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3>Watchlist</h3>
                                    <p> The watchlist feature allows users to track the performance of selected cryptocurrencies. Users can keep an eye on their favorite assets and make informed decisions based on real-time market data.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/default-features-4.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3>Import/Export Private Keys</h3>
                                    <p> Our solution allows users to securely import and export private keys, making it easy to transfer wallets between devices or platforms while maintaining full control over their assets.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/default-features-5.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3>Information User Dashboard</h3>
                                    <p> Our user-friendly dashboard provides comprehensive insights into wallet balances, transaction history, and market trends, offering a clear overview of all relevant data in one place.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/default-features-6.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3>Referrals</h3>
                                    <p> The referral feature enables users to earn rewards by inviting others to join the platform. This incentivizes growth and expands the user base through referrals.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/default-features-7.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3>Bulk Transfer</h3>
                                    <p> Bulk transfer functionality allows users to send multiple transactions at once, saving time and effort for businesses or traders needing to make numerous transfers efficiently.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/default-features-8.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3> Token Listing/Launchpad</h3>
                                    <p> We offer a token listing/launchpad service that allows users to list new tokens or launch Initial Coin Offerings (ICOs), helping businesses gain exposure and support their token's market debut.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/default-features-9.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3>Transaction History and Analytics</h3>
                                    <p>Our wallet provides users with a detailed transaction history and advanced analytics, offering insights into spending patterns, transaction fees, and overall wallet activity for better financial management.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="tab-pane fade" id="v-pills-advancedFeatures" role="tabpanel"
                        aria-labelledby="v-pills-advancedFeatures-tab">
                        <div class="row justify-content-center">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/advanced-features-1.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3>Fiat On/Off Ramp</h3>
                                    <p> Our wallets support seamless fiat-to-crypto and crypto-to-fiat conversions, enabling users to easily deposit or withdraw traditional currencies. This feature bridges the gap between digital assets and traditional financial systems.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/advanced-features-2.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3> Prepaid Card</h3>
                                    <p> We offer integrated prepaid cards that allow users to spend their crypto assets anywhere, making it easy to convert digital currencies into everyday purchases with physical or virtual cards.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/advanced-features-3.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3>On & Cross-Chain Swap</h3>
                                    <p> Our wallet solutions allow users to perform both on-chain and cross-chain swaps, enabling asset transfers between different blockchain networks without the need for an exchange, enhancing liquidity and flexibility.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/advanced-features-4.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3> Price Charts</h3>
                                    <p> Real-time price charts provide users with up-to-date market data, helping them track cryptocurrency prices, trends, and market performance to make informed trading decisions.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/advanced-features-5.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3>Chrome Extension</h3>
                                    <p> We offer a Chrome extension for easy access to your crypto wallet directly from the browser, providing users with a seamless and secure experience while interacting with decentralized applications (dApps).</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/advanced-features-6.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3> Staking</h3>
                                    <p> Our wallets support staking functionalities, allowing users to earn rewards by locking their assets into blockchain protocols. This feature encourages users to participate in network security and governance while earning passive income.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/advanced-features-7.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3>Bill/Utility Payments</h3>
                                    <p> With our crypto wallet, users can directly pay bills and utilities using their digital assets. This feature enhances the wallet's utility by integrating real-world transactions into the crypto space.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/advanced-features-8.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3>Account Abstraction</h3>
                                    <p> Account abstraction allows for simplified and customizable wallet management, offering features such as multi-signature, smart contract support, and gas fee optimization, making wallet management more flexible and user-friendly.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/advanced-features-9.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3>Lightning Network</h3>
                                    <p> We integrate the Lightning Network to enable faster and cheaper Bitcoin transactions by conducting off-chain transactions. This feature enhances scalability and transaction speed, making micro-transactions more viable for users.</p>
                                </div>
                            </div>
                        </div>
</div>
                        <div class="tab-pane fade" id="v-pills-securityFeatures" role="tabpanel"
                            aria-labelledby="v-pills-securityFeatures-tab">
                            <div class="row justify-content-center">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/security-features-1.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3>Multi-Factor Authentication</h3>
                                    <p> We implement multi-factor authentication (MFA) to enhance security by requiring users to verify their identity through two or more methods, such as passwords, OTPs, or biometrics.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/security-features-2.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3>Encryption</h3>
                                    <p> All data within our crypto wallets is encrypted using advanced encryption algorithms to ensure that sensitive information, including private keys, remains secure and inaccessible to unauthorized parties.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/security-features-3.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3>Multi-Party Computation (MPC)</h3>
                                    <p> Our wallets use Multi-Party Computation (MPC) technology, which splits private keys among multiple parties, ensuring that no single party has full access, enhancing overall security.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/security-features-4.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3>Biometric Authentication</h3>
                                    <p> For added convenience and security, we offer biometric authentication, allowing users to securely access their wallet using fingerprint or facial recognition technology.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/security-features-5.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3>Anti-Phishing Software</h3>
                                    <p>Our wallets are equipped with anti-phishing software to detect and prevent phishing attacks, ensuring that users’ funds and personal information remain safe from fraudulent activities.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/security-features-6.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3>Secure Sockets Layer (SSL) Integration</h3>
                                    <p> We integrate Secure Sockets Layer (SSL) technology to encrypt data during transmission, ensuring that all interactions between the user and wallet are secure and protected from man-in-the-middle attacks.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/security-features-7.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3>Jail Login Provision</h3>
                                    <p> Our wallet features a jail login provision, which restricts login attempts from unauthorized or suspicious locations, enhancing security by preventing brute force attacks and unauthorized </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/security-features-8.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3>Anti-Phishing Software</h3>
                                    <p> Built-in anti-phishing protection helps identify and block malicious websites or phishing attempts targeting users, ensuring secure and trusted transactions.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-lg-2">
                                <div class="features-card card">
                                    <div class="features-icon">
                                        <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/security-features-9.svg"
                                            alt="" loading="lazy" width="50" height="50" />
                                    </div>
                                    <h3>Hardware Wallet Integration</h3>
                                    <p> We support hardware wallet integration, providing an additional layer of security by allowing users to store private keys offline in physical devices, making them immune to online attacks.</p>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
    </section>
    <section class="revenue-streams section-top-pt">
        <div class="contain-width">
            <h2 class="text-center">Benefits of <br>Cryptocurrency Wallet App Development <br>
           </h2>
            <div class="revenue-streams-block">
                <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 revenue-first-col">
                    <div class="revenue-streams-content">
                    <h3>Complete Asset Authority</h3>
                    <p> With our crypto wallet solutions, users maintain full control over their digital assets, ensuring privacy and autonomy over their investments.</p>
                    </div>
                    <div class="revenue-streams-content">
                    <h3>Significant ROI</h3>
                    <p> Our wallets provide features that help users maximize returns through secure transactions, staking, and investment tracking, contributing to a significant return on investment.</p>
                    </div>
                    <div class="revenue-streams-content">
                    <h3>Access to Diverse Investment Prospects</h3>
                    <p> Users gain access to a wide range of cryptocurrencies and blockchain-based assets, opening up opportunities to diversify investments and explore new markets.</p>
                    </div>
                    <div class="revenue-streams-content">
                    <h3> Expertise & Vast Experience</h3>
                    <p> Backed by years of expertise in crypto wallet development, we offer highly secure and feature-rich solutions tailored to meet the unique needs of each client and user.</p>
                    </div>
                    <div class="revenue-streams-content">
                    <h3> Comprehensive Solutions</h3>
                    <p>Our solutions provide end-to-end wallet functionalities, from secure storage to seamless transactions, ensuring a smooth and holistic user experience.</p>
                    </div>
               
</div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="revenue-streams-content">
                    <h3> Cost-Effective Offerings</h3>
                    <p> We offer cost-efficient cryptocurrency wallet solutions that deliver premium features and high-level security at competitive prices, ensuring value for money.</p>
                    </div>
                    <div class="revenue-streams-content">
                    <h3>Payments by Merchants</h3>
                    <p> Our wallets enable merchants to accept cryptocurrency payments, expanding their customer base and embracing the future of digital transactions.</p>
                    </div>
                    <div class="revenue-streams-content">
                    <h3>Utilize dApps</h3>
                    <p> With our Web3 wallet integration, users can interact seamlessly with decentralized applications (dApps), unlocking the potential of decentralized finance (DeFi) and blockchain-based services.</p>
                    </div>
                    <div class="revenue-streams-content">
                    <h3>Enhanced Transparency</h3>
                    <p> Blockchain technology ensures that all transactions are transparent and traceable, providing users with increased confidence and trust in their crypto wallet transactions.</p>
                    </div>
                    <div class="revenue-streams-content">
                    <h3>Cost-Efficiency</h3>
                    <p> Our development solutions are designed to be highly cost-efficient, ensuring you can manage digital assets with minimal overhead while maintaining high security and performance.</p>
                    </div>
               
</div>
                
            </div>
            </div>
        </div>
        </section>
        <section class="industry-serve section-top-mt">
        <div class="contain-width">
            
                    <h2 class="text-center">Cryptocurrency Wallet Development Solutions <br>for Various Industries</h2>
                
              
                    <div class="serve-boxs">

                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/industy-1.svg"
                                    class="img-fluid"loading="lazy" width="50" height="50" alt="Supply-Chain" />
                            </div>
                            <p>Supply Chain</p>

                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/industy-2.svg"
                                    class="img-fluid" loading="lazy" width="50" height="50" alt="Banking" />
                            </div>
                            <p>Banking</p>

                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/industy-3.svg"
                                    class="img-fluid" loading="lazy" width="50" height="50" alt="Healthcare" />
                            </div>
                            <p>Healthcare</p>

                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/industy-4.svg"
                                    class="img-fluid" loading="lazy" width="50" height="50" alt="Government" />
                            </div>
                            <p>Government</p>

                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/industy-5.svg"
                                    class="img-fluid" loading="lazy" width="50" height="50" alt="Logistics" />
                            </div>
                            <p>Logistics</p>

                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/industy-6.svg"
                                    class="img-fluid" loading="lazy" width="50" height="50" alt="Gaming" />
                            </div>
                            <p>Gaming</p>

                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/industy-7.svg"
                                    class="img-fluid" loading="lazy" width="50" height="50" alt="e-Commerce" />
                            </div>
                            <p>e-Commerce</p>

                        </div>
                        <div class="serve-box">
                            <div class="serve-img">
                                <img src="<?php echo $siteurl; ?>assets/Image/cryptocurrency-wallet-development-company/svg/industy-8.svg"
                                    class="img-fluid" loading="lazy" width="50" height="50" alt="Insurance" />
                            </div>
                            <p>Insurance</p>

                        </div>
                    </div>
             
            </div>
    </section>
        <section class="about-crypto section-top-pt">
        <div class="contain-width">
                <div class="text-center head-text">
                      <p class="top-text">Why Choose Opris as a </p>
                    <h2>Crypto wallet development company</h2>
                    <p>Opris is a premier choice for developing crypto wallet solutions, known for its unparalleled expertise and innovative approach. As a leading cryptocurrency wallet development company, Opris has a track record of delivering secure, high-performing wallet platforms tailored to each client’s unique requirements. Our team leverages state-of-the-art tools and the latest technology stacks to create feature-rich, user-friendly platforms that cater to both beginners and seasoned traders. At Opris, we go beyond delivering a superior product by offering continuous support and maintenance to keep your platform aligned with the latest industry trends and security standards.</p>
                </div>
                <div class="mx-auto text-center">
                <ul>
                       <li>	Competitive Pricing</li>
                       <li>	End-to-End Services</li>
                       <li>	On-time Project Delivery</li>
                       <li>	Expert Development Team</li>
                       <li>	100% Client Support</li>
                       <li>	Post Launch Support</li>
                     
                       
                   </ul>
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
                                    <h4 class="accrd-title">How much does it cost to develop a crypto wallet?</h4>
                                    <span class="mp-icon"><i class="fa-solid fa-plus" aria-hidden="true"></i></span>
                                </div>
                                <div class="accrd-panel-body active" style="display: none;">
                                    <p>  The cost can range from $15,000 to $60,000, depending on various factors like wallet's features, type, complexities and the platforms it supports. More complex wallets with advanced security will increase the price. Customization and integration also influence the final cost.</p>
                                </div>
                            </div>
                            <div class="block-1">
                                <div class="accrd-panel-head">
                                    <h4 class="accrd-title">How long does it take to develop a crypto wallet?</h4>
                                    <span class="mp-icon"><i class="fa-solid fa-plus" aria-hidden="true"></i></span>
                                </div>
                                <div class="accrd-panel-body active" style="display: none;">
                                    <p> Crypto wallet development takes 2 to 6 months to develop a fully functional crypto wallet but it depends on the wallet’s complexity and the features required. Integration with blockchain networks and advanced security measures may take longer.</p>
                                </div>
                            </div>
                            <div class="block-1">
                                <div class="accrd-panel-head">
                                    <h4 class="accrd-title"> Do you offer white label crypto wallet solutions?</h4>
                                    <span class="mp-icon"><i class="fa-solid fa-plus" aria-hidden="true"></i></span>
                                </div>
                                <div class="accrd-panel-body active" style="display: none;">
                                    <p>  Yes, we offer white label crypto wallet solutions. These allow businesses to quickly launch a branded wallet with pre-built features. Whitelabel solutions save time and development costs compared to building a custom wallet from scratch.</p>
                                </div>
                            </div>
                            <div class="block-1">
                                <div class="accrd-panel-head">
                                    <h4 class="accrd-title">Why is there so much hype around MPC wallets?</h4>
                                    <span class="mp-icon"><i class="fa-solid fa-plus" aria-hidden="true"></i></span>
                                </div>
                                <div class="accrd-panel-body active" style="display: none;">
                                    <p>  MPC wallets distribute the private keys across multiple parties, reducing the risk of a single point of failure. This advanced security model makes MPC wallets highly desirable for institutional investors and high-net-worth individuals. The rise in demand for secure wallets has fueled the hype.</p>
                                </div>
                            </div>
                            <div class="block-1">
                                <div class="accrd-panel-head">
                                    <h4 class="accrd-title">Which is the best crypto wallet development company?</h4>
                                    <span class="mp-icon"><i class="fa-solid fa-plus" aria-hidden="true"></i></span>
                                </div>
                                <div class="accrd-panel-body active" style="display: none;">
                                    <p> Opris, is the best crypto wallet development company which specializes in secure, scalable crypto wallet development with a strong focus on user experience. Our team’s expertise ensures high-quality wallet solutions.</p>
                                </div>
                            </div>
                            <div class="block-1">
                                <div class="accrd-panel-head">
                                    <h4 class="accrd-title">How secure are crypto wallets developed by Opris?</h4>
                                    <span class="mp-icon"><i class="fa-solid fa-plus" aria-hidden="true"></i></span>
                                </div>
                                <div class="accrd-panel-body active" style="display: none;">
                                    <p>  We implement industry-leading security features such as AES-256 encryption, multi-factor authentication, and cold storage. Continuous security audits and real-time threat monitoring further protect your assets. We prioritize the safety of your digital wallet at every stage.</p>
                                </div>
                            </div>
                            <div class="block-1">
                                <div class="accrd-panel-head">
                                    <h4 class="accrd-title">What is the technology stack for crypto wallet development?</h4>
                                    <span class="mp-icon"><i class="fa-solid fa-plus" aria-hidden="true"></i></span>
                                </div>
                                <div class="accrd-panel-body active" style="display: none;">
                                    <p>  Our technology stack includes React Native, Node.js, Ethereum, and Bitcoin integration, with strong security protocols like Multi-signature and MPC. We use PostgreSQL and MongoDB for database management, ensuring scalability and high performance.</p>
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
    AOS.init({
        once: false,
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
    <script async>
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



</body>

</html>