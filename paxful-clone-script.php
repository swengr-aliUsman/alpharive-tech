<?php include('define.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paxful Clone App Script | Try LIVE DEMO Now - Opris</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $siteurl; ?>Images/favicon.png">
    <meta name="description"
        content="Launch your own P2P cryptocurrency exchange app with Paxful clone app script. Secure transactions & seamless user experience. Contact us to get started.">
    <meta name="keywords" content="Paxful Clone Script">
    <meta name="robots" content="index, follow">
    <meta name="p:domain_verify" content="4cc4a899a108609eb666d28a904af75f" />

    <!--- Facebook OG code -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Paxful Clone App Script | Try LIVE DEMO Now - Opris">
    <meta property="og:description"
        content="Launch your own P2P cryptocurrency exchange app with Paxful clone app script. Secure transactions & seamless user experience. Contact us to get started." />
    <meta property="og:url" content="<?php echo $siteurl; ?>paxful-clone-script/" />
    <meta property="og:image" content="<?php echo $siteurl; ?>Images/paxful-clone-script-development.png" />
    <meta property="og:image:secure_url" content="<?php echo $siteurl; ?>Images/paxful-clone-script-development.png" />
    <meta property="og:image:alt" content="Paxful Clone Script" />
    <meta property="og:site_name" content="Opris Exchange" />

    <!--- Twitter OG code -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@oprisexchange">
    <meta name="twitter:creator" content="@Oprisexchange">
    <meta name="twitter:description"
        content="Launch your own P2P cryptocurrency exchange app with Paxful clone app script. Secure transactions & seamless user experience. Contact us to get started." />
    <meta name="twitter:title" content="Paxful Clone App Script | Try LIVE DEMO Now - Opris" />
    <meta name="twitter:image" content="<?php echo $siteurl; ?>Images/paxful-clone-script-development.png" />

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
</head>

<body class="homepage-page">
    <!--- Header START -->
    <?php include('include/header.php'); ?>
    <!--- Header end -->
    <!-----  Banner start  -->
    <section class="banner-part">
        <div class="contain-width">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <h1 class="head-banner-head-hightlght">Paxful Clone Script</h1>
                    <!--<p class="head-banner-head-hightlght">A quick cryptocurrency exchange business <br>adoption like paxful-->
                    <!--  <br> in <span>8-10 days</span>-->
                    <!--</p>-->
                    <div class="para-banner-button">
                        <p>The cryptocurrency exchange business boasts a billion-strong user base. It is growing larger
                            every day. Establish an effective peer-to-peer cryptocurrency exchange platform like paxful
                            with opris configurable paxful clone script. We will assist you at every stage and get you
                            to the next level. It offers outstanding trading conditions and is protected by strict
                            security standards.</p>
                        <ul>
                            <li>
                                <div class="tick-img-banner"><img src="<?php echo $siteurl; ?>Images/banner-list.webp"
                                        alt="Banner checklist" width="24" height="20"></div>
                                14 Business Days Set Up
                            </li>
                            <li>
                                <div class="tick-img-banner"><img src="<?php echo $siteurl; ?>Images/banner-list.webp"
                                        alt="Banner checklist" width="24" height="20"></div>
                                Technical Support 24/7
                            </li>
                            <li>
                                <div class="tick-img-banner"><img src="<?php echo $siteurl; ?>Images/banner-list.webp"
                                        alt="Banner checklist" width="24" height="20"></div>
                                Web-based and Mobile apps Supported
                            </li>
                            <li>
                                <div class="tick-img-banner"><img src="<?php echo $siteurl; ?>Images/banner-list.webp"
                                        alt="Banner checklist" width="24" height="20"></div>
                                Software Constant Updates & Release Notes
                            </li>
                            <li>
                                <div class="tick-img-banner"><img src="<?php echo $siteurl; ?>Images/banner-list.webp"
                                        alt="Banner checklist" width="24" height="20"></div>
                                Hosting on Client's side- 100% whitelabel solutions
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="banner-right pax">
                        <img src="<?php echo $siteurl; ?>Images/paxful-clone-script-development-software.png"
                            alt="paxful-clone-script-development-software" fetchpriority="high" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-----  Banner end  -->
    <section class="interested-to-see-bsc">
        <div class="contain-width">
            <p>Launch cryptocurrency exchange application with the readymade Paxful clone script</p>
            <h2>Are you looking to build an app like Paxful?</h2>
            <p>Opris proficiency extends to build software tailored to the platform of your choice, whether it be
                web-based, mobile-based.</p>
            <div class="row">
                <div class="intelignce-btn" style="margin-top:0px !important">
                    <ul>
                        <li class="nav-item last-menu">
                            <a class="nav-link menu-last" target="_blank"
                                href="<?php echo $siteurl; ?>contactus/"><span>Request a live demo</span></a>
                        </li>
                        <!--<li class="nav-item last-menu">-->
                        <!--    <a class="nav-link menu-last" target="_blank"-->
                        <!--        href="https://telegram.me/Opris_sales"><span>Connect-->
                        <!--            Telegram</span></a>-->
                        <!--</li>-->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="crypto-exchange overwhelm-business">
        <div class="contain-width">
            <h2 class="overview-cls">Want to yield success for your business like Paxful? Then, Paxful clone script is
                for you</h2>
            <div class="crypto-para">
                <p>A cryptocurrency exchange business is the key to infinite possibilities for entrepreneurial-spirited
                    individuals. It's always rewarding to be the best on-ramp to the exchange of the future. One of the
                    top peer-to-peer (P2P) exchanges is Paxful, which connects buyers and sellers so they can conduct
                    direct business without the involvement of a middleman. As the middlemen are eliminated from the
                    approval system, the third-party control policies governing the exchanges also wane in importance.
                </p>
                <p>High-end security systems and complete encryption on Paxful give traders a flexible and peaceful mind
                    by trading on a secured exchange. Because there are more than 300 payment options on Paxful, this is
                    the big selling point. By the way, users can choose their preferred method of payment.
                </p>
                <div class="business-overwhelm">
                    <div class="business-overwhelm-inner">
                        <div class="overwhelmed-outer-img"><img
                                src="<?php echo $siteurl; ?>Images/Svg/business-like-paxful-1.svg" class="img-fluid"
                                alt="Payment-Methods">
                        </div>
                        <h3>100+</h3>
                        <p>Payment Methods</p>
                    </div>
                    <div class="business-overwhelm-inner">
                        <div class="overwhelmed-outer-img"><img
                                src="<?php echo $siteurl; ?>Images/Svg/business-like-paxful-2.svg" class="img-fluid"
                                alt="Facilitated-currencies">
                        </div>
                        <h3>170+</h3>
                        <p>Facilitated currencies</p>
                    </div>
                    <div class="business-overwhelm-inner">
                        <div class="overwhelmed-outer-img"><img
                                src="<?php echo $siteurl; ?>Images/Svg/business-like-paxful-3.svg" class="img-fluid"
                                alt="Billion-Trading-Volume">
                        </div>
                        <h3>50+</h3>
                        <p>Billion Trading Volume</p>
                    </div>
                    <div class="business-overwhelm-inner">
                        <div class="overwhelmed-outer-img"><img
                                src="<?php echo $siteurl; ?>Images/Svg/business-like-paxful-4.svg" class="img-fluid"
                                alt="Support-Cryptocurrencies">
                        </div>
                        <h3>1000+</h3>
                        <p>Support Cryptocurrencies</p>
                    </div>
                </div>
                <p>With Opris paxful clone script, which is supported by the necessary security features and adheres to
                    an effective approach to deployment, you may launch a grand-scale cryptocurrency business
                    application like paxful and guarantee about the successful features of paxful.
                </p>
            </div>
        </div>
        <div class="contain-width bcs-10x-deploy">
            <h2 class="overview-cls">Would paxful clone script promise 10X faster deployment and efficiency with minimal
                setup cost?</h2>
            <div class="crypto-para">
                <p>Opris is one of the leading exchange software companies to take entrepreneurial success. We want to
                    bring an alternative to the table, allowing you, as entrepreneurs, to lead over your business
                    decision when it comes to choosing a paxful clone script.</p>
                <p>A ready-to-use paxful clone script that has been extensively tested and vetted by development experts
                    to launch cryptocurrency exchange business instantly. Opris offers services through its paxful clone
                    script trader onboarding features,configurable paxful clone apps, built-in security measures, APIs,
                    and ready-to-use UI designs</p>
                <p>With the support of the paxful clone script, you can quickly implement this lucrative business
                    strategy and draw in a large number of traders. Smooth transactions with quick loading times are
                    guaranteed by simple and straightforward clone application development.</p>
            </div>
        </div>
    </section>
    <section class="own-your-crypto business-suite-like-binance">
        <div class="contain-width">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 own-your-crypto-left">
                    <h3>Looking for the right technology partner to develop like paxful clone app?</h3>
                    <ul class="list-own-crypto">
                        <li>
                            <div class="tick-img-banner"><img src="<?php echo $siteurl; ?>Images/banner-list-tick.png"
                                    alt="Own-your-crypto-exchange"></div>
                            Ready to launch on-demand apps
                        </li>
                        <li>
                            <div class="tick-img-banner"><img src="<?php echo $siteurl; ?>Images/banner-list-tick.png"
                                    alt="Own-your-crypto-exchange"></div>
                            Free project consultation
                        </li>
                        <li>
                            <div class="tick-img-banner"><img src="<?php echo $siteurl; ?>Images/banner-list-tick.png"
                                    alt="Own-your-crypto-exchange"></div>
                            Layered Architecture
                        </li>
                    </ul>
                    <div class="intelignce-btn" style="margin-top:0px !important">
                        <ul>
                            <li class="nav-item last-menu">
                                <a class="nav-link menu-last" target="_blank"
                                    href="<?php echo $siteurl; ?>contactus/"><span>Request a live demo</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 own-your-crypto-right">
                    <div class="own-your-crypto-img"><img
                            src="<?php echo $siteurl; ?>Images/business-suite-like-paxful-img.png" class="img-fluid"
                            alt="crypto-exchange-business-like-paxful"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="bsc-scalable-architect">
        <div class="contain-width">
            <h2 class="overview-cls">Paxful clone script works best with scalable architecture</h2>
            <div class="crypto-para">
                <p>A pre-built whitelabel paxful clone script gives you a chance to rebrand the logo name, color, theme,
                    and some more features. This reflects your business goals and is delivered right to you by opris
                    supporting both domain and cloud-agnostic.</p>
            </div>
            <div class="bsc-scalable-architect-img"><img src="<?php echo $siteurl; ?>Images/bsc-scalable-architect.png"
                    alt="architecture-Paxful"></div>
            <div class="intelignce-btn bsc-scalable-architect-btn" style="margin-top:0px !important">
                <ul>
                    <li class="nav-item last-menu">
                        <a class="nav-link menu-last" target="_blank"
                            href="https://api.whatsapp.com/send?phone=919994248706&text=*Hi%20there!%20I%20am%20looking%20for%20your%20Services,%20Shall%20we%20Start%20the%20discussion*%20Lead%20From%20https://opris.exchange/"><span>Connect
                                Whatsapp</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="bsc-scalable-architect primary-feature-bsc">
        <div class="contain-width">
            <h3 class="overview-cls">Top-notch features offered by Opris paxful clone script</h3>
            <div class="row odd-primary-bsc">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="prime-featbsc-img"><img src="<?php echo $siteurl; ?>Images/prime-feat-paxful-1.png"
                            alt="Escrow-Service"></div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="primary-eat-bsc-cont">
                        <h4>Escrow Service</h4>
                        <p>Opris premier paxful clone script comes with an escrow system that enables your users to
                            perform safe and secure crypto trading with ease. It will protect the traders' security
                            level by secured escrow service.</p>
                        <div class="intelignce-btn bsc-scalable-architect-btn" style="margin-top:0px !important">
                            <ul>
                                <li class="nav-item last-menu primary-bsc-btn">
                                    <a class="nav-link menu-last" target="_blank"
                                        href="https://telegram.me/Opris_sales"><span>Connect
                                            Telegram</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row even-primary-bsc">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="primary-eat-bsc-cont">
                        <h4>Multi Payment Acceptance</h4>
                        <p>With the support of paxful clone script, Opris also provides multiple-payment support that
                            makes your traders cryptocurrency transactions more stable. And also that makes your traders
                            transactions simple.</p>
                        <div class="intelignce-btn bsc-scalable-architect-btn" style="margin-top:0px !important">
                            <ul>
                                <li class="nav-item last-menu primary-bsc-btn">
                                    <a class="nav-link menu-last" target="_blank"
                                        href="skype:cid.b4d98d670fe822a2?chat"><span>
                                            Connect Skype </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="prime-featbsc-img"><img src="<?php echo $siteurl; ?>Images/prime-feat-paxful-2.png"
                            alt="Multi-Payment-Acceptance"></div>
                </div>
            </div>
            <div class="row odd-primary-bsc">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="prime-featbsc-img"><img src="<?php echo $siteurl; ?>Images/prime-feat-paxful-3.png"
                            alt="Create-BUY/SELL-Advertisements"></div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="primary-eat-bsc-cont">
                        <h4>Create BUY/SELL<br>Advertisements</h4>
                        <p>In Opris, Paxful clone script is designed for users to post buy/sell advertisements based on
                            traders' preferences to trade their cryptocurrencies in a hassle-free manner. It is a
                            scalable feature for traders.</p>
                        <div class="intelignce-btn bsc-scalable-architect-btn" style="margin-top:0px !important">
                            <ul>
                                <li class="nav-item last-menu primary-bsc-btn">
                                    <a class="nav-link menu-last" target="_blank"
                                        href="https://api.whatsapp.com/send?phone=919994248706&text=*Hi%20there!%20I%20am%20looking%20for%20your%20Services,%20Shall%20we%20Start%20the%20discussion*%20Lead%20From%20https://opris.exchange/"><span>Connect
                                            Whatsapp</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row even-primary-bsc">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="primary-eat-bsc-cont">
                        <h4>Real-Time Statistics</h4>
                        <p>With paxful clone script, it shows crypto live prices, market charts, trade volume, and
                            graphical statistics precisely, which will help the traders do trades in a profit based
                            manner.</p>
                        <div class="intelignce-btn bsc-scalable-architect-btn" style="margin-top:0px !important">
                            <ul>
                                <li class="nav-item last-menu primary-bsc-btn">
                                    <a class="nav-link menu-last" target="_blank"
                                        href="https://telegram.me/Opris_sales"><span>Connect
                                            Telegram</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="prime-featbsc-img"><img src="<?php echo $siteurl; ?>Images/prime-feat-paxful-4.png"
                            alt="Real-Time-Statistics"></div>
                </div>
            </div>
            <div class="row odd-primary-bsc">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="prime-featbsc-img"><img src="<?php echo $siteurl; ?>Images/prime-feat-paxful-5.png"
                            alt="Membership-Levels"></div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="primary-eat-bsc-cont">
                        <h4>Membership Levels</h4>
                        <p>With Paxful clone script, it will be categorized into each level based on their KYC
                            verification and trade frequency. Opris’ Paxful clone script comes with limits for
                            withdrawal based on traders membership levels.</p>
                        <div class="intelignce-btn bsc-scalable-architect-btn" style="margin-top:0px !important">
                            <ul>
                                <li class="nav-item last-menu primary-bsc-btn">
                                    <a class="nav-link menu-last" target="_blank"
                                        href="skype:cid.b4d98d670fe822a2?chat"><span>
                                            Connect Skype </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="top-notch">
        <div class="contain-width top-notch-contain">
            <h4 class="top-notch-h3">Additional features in opris paxful clone script</h4>
            <p class="top-notch-p">To give you competitive features, opris provides a paxful clone script with exclusive
                and cutting-edge features.</p>
            <div class="tab-top-notch tab-top-notch-desktop">
                <div id="demo" class="AI-powered-digital-assets carousel slide" data-bs-ride="carousel">
                    <!-- Indicators/dots -->
                    <div class="content-btn carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active">User
                            dashboard</button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1">
                            Admin Panel</button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2">KYC/AML</button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="3">Integration of the Fiat
                            Wallet</button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="4">Vendor Dashboard</button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="5">
                            Maximum Withdrawals</button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="6">
                            P2P Trading</button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="7">Custom Payment</button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="8">
                            Admin Profits</button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="9">Trusted & Blocked
                            Users</button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="10">Secure Trading
                        </button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="11">In app wallet</button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="12">Referral Program</button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="13">Online wallet
                            Integration</button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="14">Feedback
                            Optimization</button>
                    </div>
                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="ai-power-exchange d-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo $siteurl; ?>Images/paxful-elevate-1.png" class="img-fluid"
                                            alt="centralized-exchange">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ai-inner-content">
                                            <h5>User Dashboard </h5>
                                            <p>Opris' paxful clone script allows users to register and create their
                                                profiles easily. It should also have a robust verification process to
                                                ensure the authenticity of users. Users can look through the offers that
                                                are available for trading or buying, entering their budget or looking
                                                through trading ranges using the filter.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="ai-power-exchange d-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo $siteurl; ?>Images/paxful-elevate-2.png" class="img-fluid"
                                            alt="decentralized-exchange">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ai-inner-content">
                                            <h5>Admin Panel</h5>
                                            <p>The admin panel in opris paxful clone script enables administrators to
                                                manage the platform easily. It allows them to monitor transactions,
                                                resolve disputes, and manage traders' accounts. The trading fees and
                                                rules can be adjusted if the administrator decides to permit traders to
                                                conduct business in multiple locations.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="ai-power-exchange d-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo $siteurl; ?>Images/paxful-elevate-3.png" class="img-fluid"
                                            alt="hybrid-exchange">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ai-inner-content">
                                            <h5>KYC/AML</h5>
                                            <p>By default, Opris' Paxful clone script contains the KYC/AML code.
                                                Customers must be aware of the system's capabilities for evaluating
                                                risks and safeguarding users if they are to truly trust it.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="ai-power-exchange d-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo $siteurl; ?>Images/paxful-elevate-4.png" class="img-fluid"
                                            alt="p2p-exchange">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ai-inner-content">
                                            <h5>Integration of the Fiat Wallet</h5>
                                            <p>Opris offers various fiat money wallets all over the world. The user of a
                                                fiat wallet only needs to link his bank account and start a fiat
                                                currency transfer to the exchange wallet.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="ai-power-exchange d-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo $siteurl; ?>Images/paxful-elevate-5.png" class="img-fluid"
                                            alt="otc-leverage-exchange">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ai-inner-content">
                                            <h5>Vendor Dashboard</h5>
                                            <p>The entire objective of the vendor dashboard is to allow vendors to view
                                                detailed statistics on the total monthly traded crypto balance, monthly
                                                successful trades, closing ratio, and prior successful trades.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="ai-power-exchange d-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo $siteurl; ?>Images/paxful-elevate-6.png" class="img-fluid"
                                            alt="instant-exchange">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ai-inner-content">
                                            <h5>Maximum Withdrawals</h5>
                                            <p>However, there are some limitations on how much users can withdraw each
                                                month, so you should take that into account before moving forward. Users
                                                who attempt to do this will let you know if they succeed. Depending on
                                                the funding, this will only assist the administration.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="ai-power-exchange d-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo $siteurl; ?>Images/paxful-elevate-7.png" class="img-fluid"
                                            alt="margin-exchange">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ai-inner-content">
                                            <h5>P2P Trading </h5>
                                            <p>An effective P2P exchange needs to have tools that help with buyer-seller
                                                matching, infallible exchange functionality, an order book, a powerful
                                                matching engine, and various other functionalities. An automatic trading
                                                engine, like the one in paxful, is strongly advised for quicker and more
                                                convenient transactions.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="ai-power-exchange d-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo $siteurl; ?>Images/paxful-elevate-8.png" class="img-fluid"
                                            alt="margin-exchange">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ai-inner-content">
                                            <h5>Custom Payment
                                            </h5>
                                            <p>In the mode of custom payments, you can choose the mode and set the
                                                selling prices when selling bitcoin and other cryptocurrencies using the
                                                paxful clone script. The paxful clone script allows traders to trade
                                                cryptocurrencies using more than 300 convenient payment options.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="ai-power-exchange d-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo $siteurl; ?>Images/paxful-elevate-9.png" class="img-fluid"
                                            alt="margin-exchange">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ai-inner-content">
                                            <h5>Admin Profits
                                            </h5>
                                            <p>By configuring the trade and withdrawal fees in the admin profit
                                                management feature that Opris includes in its Paxful clone script, you
                                                can choose your own commission percentage.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="ai-power-exchange d-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo $siteurl; ?>Images/paxful-elevate-10.png" class="img-fluid"
                                            alt="margin-exchange">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ai-inner-content">
                                            <h5>Trusted & Blocked Users
                                            </h5>
                                            <p>A good/bad way to maintain contact with buyers/sellers with whom you have
                                                had positive/negative experiences is by placing your trust in other
                                                users. On the offer page, based on their actions, their offers will then
                                                be prioritized or not displayed to them.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="ai-power-exchange d-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo $siteurl; ?>Images/paxful-elevate-11.png" class="img-fluid"
                                            alt="margin-exchange">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ai-inner-content">
                                            <h5>Secure Trading</h5>
                                            <p>The paxful clone script can guarantee high-end security with a variety of
                                                secure trading features, including escrow. In order to create the most
                                                secure form of transaction ever, this feature makes use of a wide
                                                variety of security modules that provide a variety of advantages.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="ai-power-exchange d-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo $siteurl; ?>Images/paxful-elevate-12.png" class="img-fluid"
                                            alt="margin-exchange">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ai-inner-content">
                                            <h5>In app Wallet
                                            </h5>
                                            <p>By joining up with the paxful clone script, your customers can leverage
                                                the advantages of an integrated wallet by using the app wallet. An
                                                integrated cryptocurrency wallet for storing bitcoins, ethereum, and
                                                tether would undoubtedly be included in a trustworthy P2P crypto
                                                exchange script that clones the paxful exchange.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="ai-power-exchange d-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo $siteurl; ?>Images/paxful-elevate-13.png" class="img-fluid"
                                            alt="margin-exchange">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ai-inner-content">
                                            <h5>Referral Program
                                            </h5>
                                            <p>The paxful clone script can be recommended by current traders to friends
                                                or acquaintances so that both parties can benefit from the rewards. In
                                                turn, this expands the paxful clone script trader base.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="ai-power-exchange d-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo $siteurl; ?>Images/paxful-elevate-14.png" class="img-fluid"
                                            alt="margin-exchange">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ai-inner-content">
                                            <h5>Online wallet Integration
                                            </h5>
                                            <p>In the online wallet integration, there are various third-party online
                                                wallets, including paypal, m-pesa, apple pay, and others, which are
                                                supported by the paxful clone script.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="ai-power-exchange d-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo $siteurl; ?>Images/paxful-elevate-15.png" class="img-fluid"
                                            alt="margin-exchange">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ai-inner-content">
                                            <h5>Feedback Optimization
                                            </h5>
                                            <p>By obtaining customer input regarding their experiences using paxful
                                                clones, you can successfully optimize the platform. entering their
                                                budget or looking through trading ranges using the optimization.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bar-indicator carousel-indicators2">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" aria-label="carousel-dot" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1" aria-label="carousel-dot"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2" aria-label="carousel-dot"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="3" aria-label="carousel-dot"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="4" aria-label="carousel-dot"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="5" aria-label="carousel-dot"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="6" aria-label="carousel-dot"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="7" aria-label="carousel-dot"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="8" aria-label="carousel-dot"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="9" aria-label="carousel-dot"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="10" aria-label="carousel-dot"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="11" aria-label="carousel-dot"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="12" aria-label="carousel-dot"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="13" aria-label="carousel-dot"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="14" aria-label="carousel-dot"></button>
                    </div>
                </div>
            </div>
            <div class="tab-top-notch tab-top-notch-mobile accordion-model-view">
                <section class="faq-sectn">
                    <div class="contain-width">
                        <div class="faq-cls-sectns">
                            <div class="perks-benfits">
                                <div class="block-1 coloured">
                                    <div class="accrd-panel-head active">
                                        <h4>
                                            <span class="align-self-center">User Dashboard
                                            </span>
                                        </h4>
                                    </div>
                                    <div class="accrd-panel-body active">
                                        <div class="top-notch-main-img"><img
                                                src="<?php echo $siteurl; ?>Images/paxful-elevate-1.png"
                                                class="img-fluid" alt="User-dashboard"></div>
                                        <p>Opris' paxful clone script allows users to register and create their profiles
                                            easily. It should also have a robust verification process to ensure the
                                            authenticity of users. Users can look through the offers that are available
                                            for trading or buying, entering their budget or looking through trading
                                            ranges using the filter.
                                        </p>
                                    </div>
                                </div>
                                <div class="block-1">
                                    <div class="accrd-panel-head">
                                        <h4>
                                            <span class="align-self-center">Admin Panel
                                            </span>
                                        </h4>
                                    </div>
                                    <div class="accrd-panel-body">
                                        <div class="top-notch-main-img"><img
                                                src="<?php echo $siteurl; ?>Images/paxful-elevate-2.png"
                                                class="img-fluid" alt="Admin-dashboard"></div>
                                        <p>Opris admin panel clone script should have an efficiency that enables
                                            administrators to manage the platform easily. It should allow them to
                                            monitor transactions, resolve disputes, and manage traders' accounts. The
                                            trading fees and rules can be adjusted if the administrator decides to
                                            permit traders to conduct business in multiple locations. </p>
                                    </div>
                                </div>
                                <div class="block-1">
                                    <div class="accrd-panel-head">
                                        <h4>
                                            <span class="align-self-center">KYC/AML
                                            </span>
                                        </h4>
                                    </div>
                                    <div class="accrd-panel-body">
                                        <div class="top-notch-main-img"><img
                                                src="<?php echo $siteurl; ?>Images/paxful-elevate-3.png"
                                                class="img-fluid" alt="Order-book"></div>
                                        <p>By default, Opris' Paxful clone script contains the KYC/AML code. Customers
                                            must be aware of the system's capabilities for evaluating risks and
                                            safeguarding users if they are to truly trust it.
                                        </p>
                                    </div>
                                </div>
                                <div class="block-1">
                                    <div class="accrd-panel-head">
                                        <h4>
                                            <span class="align-self-center">Integration of the Fiat Wallet
                                            </span>
                                        </h4>
                                    </div>
                                    <div class="accrd-panel-body">
                                        <div class="top-notch-main-img"><img
                                                src="<?php echo $siteurl; ?>Images/paxful-elevate-4.png"
                                                class="img-fluid" alt="Unified-trade-view"></div>
                                        <p>Opris offers various fiat money wallets all over the world. The user of a
                                            fiat wallet only needs to link his bank account and start a fiat currency
                                            transfer to the exchange wallet.
                                        </p>
                                    </div>
                                </div>
                                <div class="block-1">
                                    <div class="accrd-panel-head">
                                        <h4>
                                            <span class="align-self-center">Vendor Dashboard
                                            </span>
                                        </h4>
                                    </div>
                                    <div class="accrd-panel-body">
                                        <div class="top-notch-main-img"><img
                                                src="<?php echo $siteurl; ?>Images/paxful-elevate-5.png"
                                                class="img-fluid" alt="KYC/AML-verification"></div>
                                        <p>The entire objective of the vendor dashboard is to allow vendors to view
                                            detailed statistics on the total monthly traded crypto balance, monthly
                                            successful trades, closing ratio, and prior successful trades.
                                        </p>
                                    </div>
                                </div>
                                <div class="block-1">
                                    <div class="accrd-panel-head">
                                        <h4>
                                            <span class="align-self-center">Maximum Withdrawals
                                            </span>
                                        </h4>
                                    </div>
                                    <div class="accrd-panel-body">
                                        <div class="top-notch-main-img"><img
                                                src="<?php echo $siteurl; ?>Images/paxful-elevate-6.png"
                                                class="img-fluid" alt="Order-types"></div>
                                        <p>However, there are some limitations on how much users can withdraw each
                                            month, so you should take that into account before moving forward. Users who
                                            attempt to do this will let you know if they succeed. Depending on the
                                            funding, this will only assist the administration.
                                        </p>
                                    </div>
                                </div>
                                <div class="block-1">
                                    <div class="accrd-panel-head">
                                        <h4>
                                            <span class="align-self-center">P2P Trading
                                            </span>
                                        </h4>
                                    </div>
                                    <div class="accrd-panel-body">
                                        <div class="top-notch-main-img"><img
                                                src="<?php echo $siteurl; ?>Images/paxful-elevate-7.png"
                                                class="img-fluid" alt="Multi-lingual-support"></div>
                                        <p>An effective P2P exchange needs to have tools that help with buyer-seller
                                            matching, infallible exchange functionality, an order book, a powerful
                                            matching engine, and various other functionalities. An automatic trading
                                            engine, like the one in paxful, is strongly advised for quicker and more
                                            convenient transactions.
                                        </p>
                                    </div>
                                </div>
                                <div class="block-1">
                                    <div class="accrd-panel-head">
                                        <h4>
                                            <span class="align-self-center">Custom Payment</span>
                                        </h4>
                                    </div>
                                    <div class="accrd-panel-body">
                                        <div class="top-notch-main-img"><img
                                                src="<?php echo $siteurl; ?>Images/paxful-elevate-8.png"
                                                class="img-fluid" alt="Uninterrupted-communication-system"></div>
                                        <p>In the mode of custom payments, you can choose the mode and set the selling
                                            prices when selling bitcoin and other cryptocurrencies using the paxful
                                            clone script. The paxful clone script allows traders to trade
                                            cryptocurrencies using more than 300 convenient payment options.
                                        </p>
                                    </div>
                                </div>
                                <div class="block-1">
                                    <div class="accrd-panel-head">
                                        <h4>
                                            <span class="align-self-center">Admin Profits
                                            </span>
                                        </h4>
                                    </div>
                                    <div class="accrd-panel-body">
                                        <div class="top-notch-main-img"><img
                                                src="<?php echo $siteurl; ?>Images/paxful-elevate-9.png"
                                                class="img-fluid" alt="API-documentation"></div>
                                        <p>By configuring the trade and withdrawal fees in the admin profit management
                                            feature that Opris includes in its Paxful clone script, you can choose your
                                            own commission percentage.
                                        </p>
                                    </div>
                                </div>
                                <div class="block-1">
                                    <div class="accrd-panel-head">
                                        <h4>
                                            <span class="align-self-center"> Trusted & Blocked Users
                                            </span>
                                        </h4>
                                    </div>
                                    <div class="accrd-panel-body">
                                        <div class="top-notch-main-img"><img
                                                src="<?php echo $siteurl; ?>Images/paxful-elevate-10.png"
                                                class="img-fluid" alt="Payment-gateway-integration"></div>
                                        <p>A good/bad way to maintain contact with buyers/sellers with whom you have had
                                            positive/negative experiences is by placing your trust in other users. On
                                            the offer page, based on their actions, their offers will then be
                                            prioritized or not displayed to them.
                                        </p>
                                    </div>
                                </div>
                                <div class="block-1">
                                    <div class="accrd-panel-head">
                                        <h4>
                                            <span class="align-self-center">Secure Trading
                                            </span>
                                        </h4>
                                    </div>
                                    <div class="accrd-panel-body">
                                        <div class="top-notch-main-img"><img
                                                src="<?php echo $siteurl; ?>Images/paxful-elevate-11.png"
                                                class="img-fluid" alt="Payment-gateway-integration"></div>
                                        <p>The paxful clone script can guarantee high-end security with a variety of
                                            secure trading features, including escrow. In order to create the most
                                            secure form of transaction ever, this feature makes use of a wide variety of
                                            security modules that provide a variety of advantages.
                                        </p>
                                    </div>
                                </div>
                                <div class="block-1">
                                    <div class="accrd-panel-head">
                                        <h4>
                                            <span class="align-self-center">In app Wallet
                                            </span>
                                        </h4>
                                    </div>
                                    <div class="accrd-panel-body">
                                        <div class="top-notch-main-img"><img
                                                src="<?php echo $siteurl; ?>Images/paxful-elevate-12.png"
                                                class="img-fluid" alt="Payment-gateway-integration"></div>
                                        <p>By joining up with the paxful clone script, your customers can leverage the
                                            advantages of an integrated wallet by using the app wallet. An integrated
                                            cryptocurrency wallet for storing bitcoins, ethereum, and tether would
                                            undoubtedly be included in a trustworthy P2P crypto exchange script that
                                            clones the paxful exchange.
                                        </p>
                                    </div>
                                </div>
                                <div class="block-1">
                                    <div class="accrd-panel-head">
                                        <h4>
                                            <span class="align-self-center">Referral Program
                                            </span>
                                        </h4>
                                    </div>
                                    <div class="accrd-panel-body">
                                        <div class="top-notch-main-img"><img
                                                src="<?php echo $siteurl; ?>Images/paxful-elevate-13.png"
                                                class="img-fluid" alt="Payment-gateway-integration"></div>
                                        <p>The paxful clone script can be recommended by current traders to friends or
                                            acquaintances so that both parties can benefit from the rewards. In turn,
                                            this expands the paxful clone script trader base.
                                        </p>
                                    </div>
                                </div>
                                <div class="block-1">
                                    <div class="accrd-panel-head">
                                        <h4>
                                            <span class="align-self-center">Online wallet Integration
                                            </span>
                                        </h4>
                                    </div>
                                    <div class="accrd-panel-body">
                                        <div class="top-notch-main-img"><img
                                                src="<?php echo $siteurl; ?>Images/paxful-elevate-14.png"
                                                class="img-fluid" alt="Payment-gateway-integration"></div>
                                        <p>In the online wallet integration, there are various third-party online
                                            wallets, including paypal, m-pesa, apple pay, and others, which are
                                            supported by the paxful clone script.
                                        </p>
                                    </div>
                                </div>
                                <div class="block-1">
                                    <div class="accrd-panel-head">
                                        <h4>
                                            <span class="align-self-center">Feedback Optimization
                                            </span>
                                        </h4>
                                    </div>
                                    <div class="accrd-panel-body">
                                        <div class="top-notch-main-img"><img
                                                src="<?php echo $siteurl; ?>Images/paxful-elevate-15.png"
                                                class="img-fluid" alt="Payment-gateway-integration"></div>
                                        <p>By obtaining customer input regarding their experiences using paxful clones,
                                            you can successfully optimize the platform. entering their budget or looking
                                            through trading ranges using the optimization.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <section class="riorous-security">
        <div class="contain-width">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 ">
                    <div class="riorous-security-head">
                        <h5>Rigorous security features offered by opris paxful clone script</h5>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 ">
                    <!-- swiper slide starts -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div>
                                    <div class="rigor-img d-flex justify-content-center"><img
                                            src="<?php echo $siteurl; ?>Images/Svg/Rigorous-paxful-1.svg"
                                            class="img-fluid" alt="Login-Authentication">
                                    </div>
                                    <h5>Login Authentication</h5>
                                    <p>In the scenario of threats, we don't limit security to simple procedures or
                                        compromising elements. As an added security measure, two-factor authentication
                                        and other login authentication has been implemented.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <div class="rigor-img d-flex justify-content-center"><img
                                            src="<?php echo $siteurl; ?>Images/Svg/Rigorous-paxful-2.svg"
                                            class="img-fluid" alt="HTTPS-Authentication ">
                                    </div>
                                    <h5>HTTPS Authentication
                                    </h5>
                                    <p>In HTTPS authentication mode, a security feature included in the opris paxful
                                        clone script is to protect your traders privacy. They must enter their usernames
                                        and passwords in order to log in to your paxful clone. Along with the usual
                                        username and password, a one-time code is required.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <div class="rigor-img d-flex justify-content-center"><img
                                            src="<?php echo $siteurl; ?>Images/Svg/Rigorous-paxful-3.svg"
                                            class="img-fluid" alt="Jail-Login">
                                    </div>
                                    <h5>Jail Login
                                    </h5>
                                    <p>The safety of a user's account depends on this security feature in this clone
                                        script. This is accomplished by locking the account itself in the event that an
                                        unauthorized person enters the wrong credentials.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <div class="rigor-img d-flex justify-content-center"><img
                                            src="<?php echo $siteurl; ?>Images/Svg/Rigorous-paxful-4.svg"
                                            class="img-fluid" alt="KYC/AML-Verification">
                                    </div>
                                    <h5>KYC/AML Verification
                                    </h5>
                                    <p>Since the paxful clone script provide your traders with exchange and trading
                                        services, it is crucial to confirm the traders recognize, which is why we have a
                                        KYC/AML verification features built into script.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <div class="rigor-img d-flex justify-content-center"><img
                                            src="<?php echo $siteurl; ?>Images/Svg/Rigorous-paxful-5.svg"
                                            class="img-fluid" alt="SSL/TLS-encryption">
                                    </div>
                                    <h5>SSL/TLS encryption
                                    </h5>
                                    <p>In Opris, paxful clone script should use SSL/TLS encryption to secure the
                                        communication between the web server and the user's browser. This will ensure
                                        that all data transmitted between the two is encrypted and cannot be intercepted
                                        by hackers.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <div class="rigor-img d-flex justify-content-center"><img
                                            src="<?php echo $siteurl; ?>Images/Svg/Rigorous-paxful-6.svg"
                                            class="img-fluid" alt="CSRF-&-SSRF-Protection ">
                                    </div>
                                    <h5>CSRF & SSRF Protection
                                    </h5>
                                    <p>In the process of CSRF & SSRF protection, traders are protected from outside
                                        attacks by the CSRF and SSRF. The CSRF & SSRF protection features are shields
                                        that traders can use as primary security features.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <div class="rigor-img d-flex justify-content-center"><img
                                            src="<?php echo $siteurl; ?>Images/Svg/Rigorous-paxful-7.svg"
                                            class="img-fluid" alt="DDoS-protection-and-regular-security-audits ">
                                    </div>
                                    <h5>DDoS protection and regular security audits
                                    </h5>
                                    <p>In Opris, DDoS protection script should undergo regular security audits by
                                        third-party security firms to identify and fix any vulnerabilities. and the
                                        script should be equipped with robust DDoS protection measures to prevent
                                        denial-of-service attacks.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <div class="rigor-img d-flex justify-content-center"><img
                                            src="<?php echo $siteurl; ?>Images/Svg/Rigorous-paxful-8.svg"
                                            class="img-fluid" alt="Secure-coding-practices ">
                                    </div>
                                    <h5>Secure coding practices
                                    </h5>
                                    <p>The paxful clone script should be developed using secure coding practices to
                                        prevent common web application vulnerabilities such as SQL injection, cross-site
                                        scripting (XSS), and cross-site request forgery (CSRF).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <!-- swiper slide ends -->
                </div>
            </div>
        </div>
    </section>
    <section class="build-on-any-platform wherever-your-users-are py-5">
        <div class="contain-width">
            <h5>Opris Paxful clone script compatible with any devices</h5>
            <p>Create a user-friendly and attractive paxful clone script on different platforms.</p>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 ">
                    <div class="inner-block-build">
                        <div class="inner-block-build-img"><img src="<?php echo $siteurl; ?>Images/own-platform-1.png"
                                alt="Web"></div>
                        <h5>Web</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 ">
                    <div class="inner-block-build">
                        <div class="inner-block-build-img"><img src="<?php echo $siteurl; ?>Images/own-platform-2.png"
                                alt="IOS"></div>
                        <h5>IOS</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 ">
                    <div class="inner-block-build">
                        <div class="inner-block-build-img"><img src="<?php echo $siteurl; ?>Images/own-platform-3.png"
                                alt="Android"></div>
                        <h5>Android</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 ">
                    <div class="inner-block-build">
                        <div class="inner-block-build-img"><img src="<?php echo $siteurl; ?>Images/own-platform-4.png"
                                alt="Cloud"></div>
                        <h5>Cloud</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="own-your-crypto accelerate-our-cryptocurrency py-5">
        <div class="contain-width">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 own-your-crypto-left">
                    <h4>Build your next project with Opris.exchange</h4>
                    <ul class="list-own-crypto">
                        <li>
                            <div class="tick-img-banner"><img src="<?php echo $siteurl; ?>Images/banner-list-tick.png"
                                    alt="Build-your-next-project"></div>
                            Use all features on all plans
                        </li>
                        <li>
                            <div class="tick-img-banner"><img src="<?php echo $siteurl; ?>Images/banner-list-tick.png"
                                    alt="Build-your-next-project"></div>
                            On Mac, Window and Linux
                        </li>
                        <li>
                            <div class="tick-img-banner"><img src="<?php echo $siteurl; ?>Images/banner-list-tick.png"
                                    alt="Build-your-next-project"></div>
                            14-day free trial
                        </li>
                    </ul>
                    <div class="intelignce-btn" style="margin-top:0px !important">
                        <ul>
                            <li class="nav-item last-menu">
                                <a class="nav-link menu-last" target="_blank"
                                    href="<?php echo $siteurl; ?>contactus/"><span>Request a live demo</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 own-your-crypto-right">
                    <div class="own-your-crypto-img"><img
                            src="<?php echo $siteurl; ?>Images/business-suite-like-paxful-img.png"
                            alt="build-crypto-exchange-like-paxful" class="img-fluid"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="build-on-any-platform extended-service py-5">
        <div class="contain-width">
            <h4>Extended addons offering by Opris paxful clone script</h4>
            <p>Paxful clone script offers cutting-edge and unique features to give you a competitive advantage.</p>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 ">
                    <div class="inner-block-build">
                        <div class="inner-block-build-img"><img
                                src="<?php echo $siteurl; ?>Images/extended-service-paxful-1.png"
                                alt="Liquidity-API-integration"></div>
                        <h4>Quick Trade Matching Engine</h4>
                        <p>Opris paxful clone script that helps organise the orders when two or more orders are placed
                            on a single entity at the same time or with a short time gap by synchronizing the data from
                            various trading parties.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 ">
                    <div class="inner-block-build">
                        <div class="inner-block-build-img"><img
                                src="<?php echo $siteurl; ?>Images/extended-service-paxful-2.png" alt="IEO-launchpad">
                        </div>
                        <h4>Anti-Scam Assistance</h4>
                        <p>Let the anti-scam assistance chargeback attempts be rejected by anti-scam facilitation in
                            order to stop any fraudulent behaviour. The platform becomes more reliable as a result, and
                            many active traders use it.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 ">
                    <div class="inner-block-build">
                        <div class="inner-block-build-img"><img
                                src="<?php echo $siteurl; ?>Images/extended-service-paxful-3.png" alt="Crypto-loans">
                        </div>
                        <h4>Core wallet integrated</h4>
                        <p>An integrated core wallet that can efficiently manage the funds and transactions connected to
                            the peer-to-peer cryptocurrency exchange is a feature of the paxful clone script. The
                            participant can streamline his asset monitoring due to the integration of the core wallet.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 ">
                    <div class="inner-block-build">
                        <div class="inner-block-build-img"><img
                                src="<?php echo $siteurl; ?>Images/extended-service-paxful-4.png"
                                alt="AI-powered-future-trading-predictions"></div>
                        <h4>Supports multiple languages</h4>
                        <p>Paxful clone script's one of its fundamental features is multilingualism. A top-notch
                            cryptocurrency exchange can be created with multilingual support. You can increase the user
                            base and attract the interest of crypto users worldwide by utilising this feature.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 ">
                    <div class="inner-block-build">
                        <div class="inner-block-build-img"><img
                                src="<?php echo $siteurl; ?>Images/extended-service-paxful-5.png"
                                alt="AI-powered-risk-mitigation"></div>
                        <h4>Documentation for API</h4>
                        <p>Opris offers comprehensive API documentation that makes it simple for you to get current
                            market information and execute trades. For developers to integrate into their platforms,
                            many cryptocurrency exchanges have made their APIs available.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 ">
                    <div class="inner-block-build">
                        <div class="inner-block-build-img"><img
                                src="<?php echo $siteurl; ?>Images/extended-service-paxful-6.png"
                                alt="Create-your-blockchain-like-BSC"></div>
                        <h4>Crypto price calculator</h4>
                        <p>Using precise and current exchange rates, users of our Paxful clone script can easily
                            determine how much cryptocurrency is worth in any of the supported global currencies.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 ">
                    <div class="inner-block-build">
                        <div class="inner-block-build-img"><img
                                src="<?php echo $siteurl; ?>Images/extended-service-paxful-7.png" alt="Crypto-staking">
                        </div>
                        <h4>Dispute Management</h4>
                        <p>The paxful clone script has features that support dispute management. In a direct sense,
                            dispute management relates to the factors that impede fund transfers on both ends. Hacker
                            attacks continue to have no impact on the transactions.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 ">
                    <div class="inner-block-build">
                        <div class="inner-block-build-img"><img
                                src="<?php echo $siteurl; ?>Images/extended-service-paxful-8.png" alt="Crypto-pooling">
                        </div>
                        <h4>Bots for crypto trading</h4>
                        <p>In Crypto trading, this type of bot can assist traders in buying and selling cryptocurrencies
                            because it is an automated computer program. It assists traders in getting perfect timing
                            along with the matching engine.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 ">
                    <div class="inner-block-build">
                        <div class="inner-block-build-img"><img
                                src="<?php echo $siteurl; ?>Images/extended-service-paxful-9.png" alt="VISA-Cards<">
                        </div>
                        <h4>Platform Crossing</h4>
                        <p>Opris’ platform crossing allows traders to manage and streamline their trading processes
                            while simultaneously buying and selling. The platform crossing feature allows traders to
                            manage and streamline their trading processes while simultaneously buying and selling.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 ">
                    <div class="inner-block-build">
                        <div class="inner-block-build-img"><img
                                src="<?php echo $siteurl; ?>Images/extended-service-paxful-10.png" alt="Crypto-staking">
                        </div>
                        <h4>Gift Card Payment System</h4>
                        <p>Gift card payment services are part of the Paxful clone script. It is a mode of payment that
                            may be used to buy things at retail establishments. For retailers, gift cards make secure,
                            practical payment and gift options.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 ">
                    <div class="inner-block-build">
                        <div class="inner-block-build-img"><img
                                src="<?php echo $siteurl; ?>Images/extended-service-paxful-11.png" alt="Crypto-pooling">
                        </div>
                        <h4>Decentralised Lending</h4>
                        <p>Decentralised functions combined with peer-to-peer financing and trade have their own
                            advantages. The use of smart contracts will enable traders to trade cryptocurrencies with
                            anyone.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="interested-to-see-bsc">
        <div class="contain-width">
            <p>Launch cryptocurrency exchange application with the readymade paxful Clone script</p>
            <h4>Take an clear insight of Opris paxful clone script</h4>
            <p>Opris proficiency extends to build software tailored to the platform of your choice, whether it be
                web-based, mobile-based.</p>
            <div class="row">
                <div class="intelignce-btn" style="margin-top:0px !important">
                    <ul>
                        <li class="nav-item last-menu">
                            <a class="nav-link menu-last" target="_blank" href="<?php echo $siteurl; ?>contactus/"><span>Request a live demo</span></a>
                        </li>
                        <!--<li class="nav-item last-menu">-->

                        <!--    <a class="nav-link menu-last" target="_blank"-->
                        <!--        href="https://api.whatsapp.com/send?phone=919994248706&text=*Hi%20there!%20I%20am%20looking%20for%20your%20Services,%20Shall%20we%20Start%20the%20discussion*%20Lead%20From%20https://opris.exchange/"><span>Connect-->
                        <!--            Whatsapp</span></a>-->

                        <!--</li>-->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="dev-servce dev-servce-feature py-5 py-md-0">
        <div class="contain-width">
            <!--mt-160px-->
            <h4 style="text-align: center;font-weight: 800;margin-bottom:40px;margin-top:40px">Admin features of opris
                paxful clone script</h4>
            <div class="row admin-features-of-binance-clone">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 odd-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/Admin-features-paxful-1.svg" class="img-fluid"
                                alt="Admin-Dashboard">
                        </div>
                        <h5>Admin Dashboard</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 even-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/Admin-features-paxful-2.svg" class="img-fluid"
                                alt="User-management">
                        </div>
                        <h5>User management</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 odd-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/Admin-features-paxful-3.svg" class="img-fluid"
                                alt="Transaction-Management">
                        </div>
                        <h5>Transaction Management</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 odd-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/Admin-features-paxful-4.svg" class="img-fluid"
                                alt="Integrating-Wallet">
                        </div>
                        <h5>Integrating Wallet</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 even-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/Admin-features-paxful-5.svg" class="img-fluid"
                                alt="KYC/AML-Management">
                        </div>
                        <h5>KYC/AML Management</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 odd-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/Admin-features-paxful-6.svg" class="img-fluid"
                                alt="Fee-Management">
                        </div>
                        <h5>Fee Management</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 odd-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/Admin-features-paxful-7.svg" class="img-fluid"
                                alt="Security-Management">
                        </div>
                        <h5>Security Management</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 even-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/Admin-features-paxful-8.svg" class="img-fluid"
                                alt="Analytics-and-Reporting">
                        </div>
                        <h5>Analytics and Reporting</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 odd-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/Admin-features-paxful-9.svg" class="img-fluid"
                                alt="IP-restrictions-Management">
                        </div>
                        <h5>IP restrictions Management</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="user-features-section dev-servce dev-servce-feature">
        <div class="contain-width">
            <h4 style="text-align: center;font-weight: 800;">User features of opris paxful clone script</h4>
            <div class="row user-features-of-binance-clone">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 odd-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/User-features -paxful-1.svg" class="img-fluid"
                                alt="Seamless-Login-or-Register">
                        </div>
                        <h5>Seamless Login or Register</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 even-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/User-features -paxful-2.svg" class="img-fluid"
                                alt="KYC-Verification">
                        </div>
                        <h5>KYC Verification</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 odd-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/User-features -paxful-3.svg" class="img-fluid"
                                alt="Enable-Login-Authentication">
                        </div>
                        <h5>Enable Login Authentication</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 odd-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/User-features -paxful-4.svg" class="img-fluid"
                                alt="Enable-Security-Patterns">
                        </div>
                        <h5>Enable Security Patterns</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 even-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/User-features -paxful-5.svg" class="img-fluid"
                                alt="Multiple-Payment-Options">
                        </div>
                        <h5>Multiple Payment Options</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 odd-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/User-features -paxful-6.svg" class="img-fluid"
                                alt="Deposit-Crypto/Fiat-to-Wallets">
                        </div>
                        <h5>Deposit Crypto/Fiat to Wallets</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 odd-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/User-features -paxful-7.svg" class="img-fluid"
                                alt="View-Order-Book">
                        </div>
                        <h5>View Order Book</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 even-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/User-features -paxful-8.svg" class="img-fluid"
                                alt="Select-BID/ASK-Orde">
                        </div>
                        <h5>Select BID/ASK Order</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 odd-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/User-features -paxful-9.svg" class="img-fluid"
                                alt="Request-a-withdraw-from Wallet">
                        </div>
                        <h5>Request a withdraw from Wallet</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 odd-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/User-features -paxful-10.svg" class="img-fluid"
                                alt="Transaction-History">
                        </div>
                        <h5>Transaction History</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 even-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/User-features -paxful-11.svg" class="img-fluid"
                                alt="Wallet-Dashboard">
                        </div>
                        <h5>Wallet Dashboard</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 odd-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/User-features -paxful-12.svg" class="img-fluid"
                                alt="Wallet-History">
                        </div>
                        <h5>Wallet History</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 odd-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/User-features -paxful-13.svg" class="img-fluid"
                                alt="Login-IPs-history">
                        </div>
                        <h5>Login IPs history</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 even-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/User-features -paxful-14.svg" class="img-fluid"
                                alt="Profile-settings">
                        </div>
                        <h5>Profile settings</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 odd-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/User-features -paxful-15.svg" class="img-fluid"
                                alt="Setting-Dark/Light-Theme">
                        </div>
                        <h5>Setting Dark/Light Theme</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 odd-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/User-features -paxful-16.svg" class="img-fluid"
                                alt="Enable-trading-tools">
                        </div>
                        <h5>Enable trading tools</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 even-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/User-features -paxful-17.svg" class="img-fluid"
                                alt="Refer">
                        </div>
                        <h5>Refer &amp; earn</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 odd-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/User-features -paxful-18.svg" class="img-fluid"
                                alt="Trade-API-key-access">
                        </div>
                        <h5>Trade API key access</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 odd-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/User-features -paxful-19.svg" class="img-fluid"
                                alt="Trading-guide">
                        </div>
                        <h5>Trading guide</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 even-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/User-features -paxful-20.svg" class="img-fluid"
                                alt="Safe-transactions">
                        </div>
                        <h5>Safe transactions</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 odd-padding">
                    <div class="inner-dev">
                        <div class="coin-fet-img-admin-bsc"><img
                                src="<?php echo $siteurl; ?>Images/Svg/User-features -paxful-21.svg" class="img-fluid"
                                alt="Trading-terminal">
                        </div>
                        <h5>Trading terminal</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="crypto-exchange py-5">
        <div class="contain-width">
            <h4 class="overview-cls">Opris Paxful clone app script supports for Android and iOS</h4>
            <div class="crypto-para">
                <p>Developing a paxful Clone script for both iOS and Android requires a team of experienced developers
                    who are proficient in both native app development and blockchain technology.</p>
                <p>
                    Opris development of the paxful Clone script for both iOS and Android is a complex process that
                    requires a team of experienced developers, designers, and blockchain experts. The cost and timeline
                    of the project may vary depending on the features and customizations required.
                </p>
                <div class="bcs-works-best-scalable-architecture"><img
                        src="<?php echo $siteurl; ?>Images/dev-of-paxful-apps.png" class="img-fluid"
                        alt="paxful-clone-apps"></div>
                <!-- <div class="intelignce-btn">
                  <ul>
                  <li class="nav-item last-menu">
                  <a class="nav-link menu-last" href="https://www.opris.exchange/contactus/"><span>Reserve your demo now !</span></a>
                  </li> 
                  </ul>
                  </div> -->
            </div>
        </div>
    </section>
    <section class="interested-to-see-bsc">
        <div class="contain-width">
            <p>Launch cryptocurrency exchange application with the readymade paxful Clone script</p>
            <h4>Interested to see Opris paxful clone app script demo?</h4>
            <p>Opris proficiency extends to build software tailored to the platform of your choice, whether it be
                web-based, mobile-based.</p>
            <div class="row">
                <div class="intelignce-btn" style="margin-top:0px !important">
                    <ul>
                        <li class="nav-item last-menu">
                            <a class="nav-link menu-last" target="_blank"
                                href="<?php echo $siteurl; ?>contactus/"><span>Request a live demo</span></a>
                        </li>
                        <!--<li class="nav-item last-menu">-->

                        <!--    <a class="nav-link menu-last" target="_blank"-->
                        <!--        href="https://telegram.me/Opris_sales"><span>Connect-->
                        <!--            Telegram</span></a>-->

                        <!--</li>-->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="process-coin explore-the-benefits">
        <div class="contain-width">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 process-left mt-auto mb-auto">
                    <div class="d-flex justify-content-center">
                        <img src="<?php echo $siteurl; ?>Images/explore-paxful-benefits.png" class="img-fluid"
                            alt="paxful-clone-script">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 process-right">
                    <h5>Explore the benefits of Opris paxful clone script</h5>
                    <p>A fully-functional paxful Clone script, facilitating you kickstart a cryptocurrency exchange
                        business like paxful in a few days along with numerous perks</p>
                    <div class="proc-dev aos-init">
                        <div class="light-pink-img"><img src="<?php echo $siteurl; ?>Images/binance-explore-1.png"
                                alt="High-scalability"></div>
                        <div class="light-pink-cont">
                            <h5>High scalability</h5>
                            <p>Every cryptocurrency exchange can process a large number of trades at once.So,software
                                enriched with bug-free backed, paxful Clone script exhibit the app's competence to
                                handle millions of users.</p>
                        </div>
                    </div>
                    <div class="proc-dev aos-init">
                        <div class="light-blue-img"><img src="<?php echo $siteurl; ?>Images/binance-explore-2.png"
                                alt="Customized-UI"></div>
                        <div class="light-blue-cont">
                            <h5>Customized UI</h5>
                            <p>A script supports for customize the design for your vision to recreate the paxful
                                application based on your requirements.</p>
                        </div>
                    </div>
                    <div class="proc-dev aos-init">
                        <div class="light-pink-img"><img src="<?php echo $siteurl; ?>Images/binance-explore-3.png"
                                alt="Faster-deployment"></div>
                        <div class="light-pink-cont">
                            <h5>Faster deployment</h5>
                            <p>A script quickly deploys on the required server requirements. We exhibit the knack of
                                pampering our customers with all-encompassing, all-inclusive support at every touchpoint
                                of the cryptocurrency exchange development process.</p>
                        </div>
                    </div>
                    <div class="proc-dev aos-init">
                        <div class="light-blue-img"><img src="<?php echo $siteurl; ?>Images/binance-explore-4.png"
                                alt="Ready-to-launch"></div>
                        <div class="light-blue-cont">
                            <h5>Ready to launch</h5>
                            <p>The arresting array of cryptocurrency exchange business solutions are not just
                                aesthetically pleasing and highly secured but can be launched in a matter of a few days.
                            </p>
                        </div>
                    </div>
                    <div class="proc-dev aos-init">
                        <div class="light-pink-img"><img src="<?php echo $siteurl; ?>Images/binance-explore-5.png"
                                alt="White-label-solutions"></div>
                        <div class="light-pink-cont">
                            <h5>White-label solutions</h5>
                            <p>We metamorphose the paxful clone with your ingrained business identity elements such as
                                logo, brand name, making you the sole owner of the cryptocurrency exchange application.
                            </p>
                        </div>
                    </div>
                    <div class="proc-dev aos-init">
                        <div class="light-blue-img"><img src="<?php echo $siteurl; ?>Images/binance-explore-6.png"
                                alt="Non-disclosure-agreement"></div>
                        <div class="light-blue-cont">
                            <h5>Non-disclosure agreement</h5>
                            <p>We religiously adhere to the regulations of the Non-Disclosure Agreement struck between
                                us, making the entire development process leak-proof.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="we-go-fast">
        <div class="contain-width">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 go-extra-miles">
                    <h3>We go the extra mile</h3>
                    <p>Your success is our success. We take responsibility for the success of your project</p>
                    <p>Opris cryptocurrency exchange script developed by Alpharive Tech Pvt Ltd is a team of experts in
                        digital product development for web and mobile, certified professionals in digital solutions. We
                        have extensive experience in many industries including the following — Fintech, Martech,
                        Edutech.</p>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 start-asap">
                    <div class="asap-start">
                        <h3>Want to start ASAP ?</h3>
                        <p>Want to discuss the details immediately?</p>
                        <div class="intelignce-btn">
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
        </div>
    </section>
    <section class="stack-preferable">
        <div class="contain-width">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 left-stack">
                    <h3>Why modern technology
                        stack preferable for your
                        crypto exchange business?</h3>
                    <p>The next generation of technology stack
                        that will transform life significantly. Experience lightning-fast and seamless data transactions
                        with modern technology, even when dealing with high volumes of trading requests. Enjoy faster
                        transactions and improved scalability with the advanced support system.
                    </p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 right-stack">
                    <div class="logo-opris-quote-inner">
                        <div class="logo-opris-quote">
                            <img src="<?php echo $siteurl; ?>Images/quote2.png" class="left-opris"
                                alt="AI-Powered-Digital-Assets-Exchange-Software">
                            <img src="<?php echo $siteurl; ?>Images/logo-opris.png" class="right-opris"
                                alt="AI-Powered-Digital-Assets-Exchange-Software">
                        </div>
                        <h3>We believe that any sufficiently
                            advanced software is equivalent
                            to magic.
                        </h3>
                        <p>- OPRIS EXCHANGE SOFTWARE TEAM</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="modern-tech" id="tech-modern">
        <div class="contain-width">
            <h3>Advanced technology stack utilized to develop paxful clone script</h3>
            <h4 class="stack-con">We provide helper libraries for the most popular programing Languages, so you can focus on the most
                important aspects instead of wasting time connecting the pieces together</h4>
            <div class="metaverse desktop-token-three-ways">
                <div class="meta-vese-inner">
                    <div class="tabs">
                        <button class="tablinks" onclick="openCity(event, 'front-end')" id="defaultOpen">
                            <h4 class="meta-head">All</h4>
                        </button>
                        <button class="tablinks" onclick="openCity(event, 'back-end')">
                            <h4 class="meta-head">Server Side</h4>
                        </button>
                        <button class="tablinks" onclick="openCity(event, 'dbconnect')">
                            <h4 class="meta-head">Front End</h4>
                        </button>
                        <button class="tablinks" onclick="openCity(event, 'server-req')">
                            <h4 class="meta-head">Database</h4>
                        </button>
                        <button class="tablinks" onclick="openCity(event, 'framework')">
                            <h4 class="meta-head">Services</h4>
                        </button>
                    </div>
                    <div id="front-end" class="tabcontents">
                        <div class="inner-tab-content">
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/server-side1.png" class="img-fluid"
                                    alt="Laravel">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/server-side2.png" class="img-fluid"
                                    alt="node-js">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/server-side3.png" class="img-fluid" alt="nginx">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/server-side4.png" class="img-fluid"
                                    alt="apache">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/front-end1.png" class="img-fluid" alt="vue-js">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/front-end2.png" class="img-fluid" alt="Twilio">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/front-end3.png" class="img-fluid" alt="sass">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/front-end4.png" class="img-fluid"
                                    alt="tailwindcss">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/db1.png" class="img-fluid" alt="my-sql">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/db2.png" class="img-fluid" alt="Sql">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/db3.png" class="img-fluid" alt="redis">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/db4.png" class="img-fluid" alt="memcrched">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/service1.png" class="img-fluid"
                                    alt="cloud-flare">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/service2.png" class="img-fluid" alt="captcha">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/service3.png" class="img-fluid" alt="stripe">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/service4.png" class="img-fluid" alt="sila">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/service5.png" class="img-fluid"
                                    alt="coin-payments">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/service6.png" class="img-fluid" alt="infura">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/service7.png" class="img-fluid" alt="tron-web">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/service8.png" class="img-fluid" alt="etherscan">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/service9.png" class="img-fluid" alt="bsc-scan">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/service10.png" class="img-fluid" alt="mail-gun">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/service11.png" class="img-fluid"
                                    alt="tranding-view">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/solidity.png" class="img-fluid"
                                    alt="tranding-view">
                            </div>
                        </div>
                    </div>
                    <div id="back-end" class="tabcontents">
                        <div class="inner-tab-content">
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/server-side1.png" class="img-fluid"
                                    alt="Laravel">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/server-side2.png" class="img-fluid"
                                    alt="node-js">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/server-side3.png" class="img-fluid" alt="nginx">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/server-side4.png" class="img-fluid"
                                    alt="apache">
                            </div>
                        </div>
                    </div>
                    <div id="dbconnect" class="tabcontents">
                        <div class="inner-tab-content">
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/front-end1.png" class="img-fluid" alt="vue.js">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/front-end2.png" class="img-fluid" alt="laravel">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/front-end3.png" class="img-fluid" alt="sass">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/front-end4.png" class="img-fluid"
                                    alt="tailwindcss">
                            </div>
                        </div>
                    </div>
                    <div id="server-req" class="tabcontents">
                        <div class="inner-tab-content">
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/db1.png" class="img-fluid" alt="my-sql">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/db2.png" class="img-fluid" alt="sql">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/db3.png" class="img-fluid" alt="redis">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/db4.png" class="img-fluid" alt="memcrched">
                            </div>
                        </div>
                    </div>
                    <div id="framework" class="tabcontents">
                        <div class="inner-tab-content">
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/service1.png" class="img-fluid"
                                    alt="cloud-flare">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/service2.png" class="img-fluid" alt="captcha">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/service3.png" class="img-fluid" alt="stripr">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/service4.png" class="img-fluid" alt="sila">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/service5.png" class="img-fluid"
                                    alt="coin-payments">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/service6.png" class="img-fluid" alt="infura">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/service7.png" class="img-fluid" alt="town-web">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/service8.png" class="img-fluid" alt="etherscan">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/service9.png" class="img-fluid" alt="bsc-scan">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/service10.png" class="img-fluid" alt="mail-gun">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/service11.png" class="img-fluid"
                                    alt="trading-view">
                            </div>
                            <div class="techno">
                                <img src="<?php echo $siteurl; ?>Images/solidity.png" class="img-fluid"
                                    alt="trading-view">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="prefer-binance-script">
        <div class="contain-width">
            <h4>Why do you need to prefer opris to buy a Paxful clone script ?</h4>
            <p>You may start your own cryptocurrency exchange business with our user-friendly paxful clonewhich includes
                all the features and functionalities. The paxful clonedeveloped by us supportsmultiple trading of
                cryptocurrencies, and quick transactions and is completely flawless.
            </p>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                    <div class="inner-blockprefer">
                        <div class="inner-blockprefer-img"><img src="<?php echo $siteurl; ?>Images/prefer-to-buy-1.png"
                                alt="source-code"></div>
                        <div class="inner-blockprefer-text">100% source code</div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                    <div class="inner-blockprefer">
                        <div class="inner-blockprefer-img"><img src="<?php echo $siteurl; ?>Images/prefer-to-buy-2.png"
                                alt="Free-installation-set-up"></div>
                        <div class="inner-blockprefer-text">Free installation & set up</div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                    <div class="inner-blockprefer">
                        <div class="inner-blockprefer-img"><img src="<?php echo $siteurl; ?>Images/prefer-to-buy-3.png"
                                alt="One-time-payment"></div>
                        <div class="inner-blockprefer-text">One time payment</div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                    <div class="inner-blockprefer">
                        <div class="inner-blockprefer-img"><img src="<?php echo $siteurl; ?>Images/prefer-to-buy-4.png"
                                alt="Multiple-languages"></div>
                        <div class="inner-blockprefer-text">Multiple languages (RTL, LTR)</div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                    <div class="inner-blockprefer">
                        <div class="inner-blockprefer-img"><img src="<?php echo $siteurl; ?>Images/prefer-to-buy-5.png"
                                alt="Customizable
"></div>
                        <div class="inner-blockprefer-text">Customizable</div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                    <div class="inner-blockprefer">
                        <div class="inner-blockprefer-img"><img src="<?php echo $siteurl; ?>Images/prefer-to-buy-6.png"
                                alt="End-to-end-support"></div>
                        <div class="inner-blockprefer-text">End to end support</div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                    <div class="inner-blockprefer">
                        <div class="inner-blockprefer-img"><img src="<?php echo $siteurl; ?>Images/prefer-to-buy-7.png"
                                alt="Security-&-reliability"></div>
                        <div class="inner-blockprefer-text">Security & reliability</div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                    <div class="inner-blockprefer">
                        <div class="inner-blockprefer-img"><img src="<?php echo $siteurl; ?>Images/prefer-to-buy-8.png"
                                alt="App-in-your-brand-name"></div>
                        <div class="inner-blockprefer-text">App in your brand name</div>
                    </div>
                </div>
                <div class="intelignce-btn d-flex justify-content-center">
                    <ul>
                        <li class="nav-item last-menu mx-3">

                            <a class="nav-link menu-last" target="_blank" 
                              href="<?php echo $siteurl; ?>contactus/"><span>Request a live demo</span></a>
                        </li>
                    </ul>
                    <!--<ul>-->
                    <!--    <li class="nav-item last-menu mx-3">-->

                    <!--        <a class="nav-link menu-last" target="_blank"-->
                    <!--            href="https://telegram.me/Opris_sales"><span>Connect-->
                    <!--                Telegram</span></a>-->
                    <!--    </li>-->
                    <!--</ul>-->
                </div>
            </div>
        </div>
    </section>
    <section class="cex">
        <div class="contain-width">
            <div class="row desktop-clone-script-build">
                <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 left-cex">
                    <h4>Build your exchange platform like Leading Clone Scripts</h4>
                    <p>Get industry-leading, feature-rich clone scripts with built-in customization and peer-to-peer
                        technology, which allows your users to directly exchange cryptocurrency, while also providing
                        customization options.</p>
                    <div class="tabs">
                        <button class="tablinkss" onclick="openCities(event, 'Paxful')" id="defaultOpens">
                            <div class="tech-icon"><img src="<?php echo $siteurl; ?>Images/paxful-small1.png"
                                    alt="Paxful-script"></div>
                            <h4 class="meta-head">Paxful</h4>
                        </button>
                        <button class="tablinkss" onclick="openCities(event, 'binance')">
                            <div class="tech-icon"><img src="<?php echo $siteurl; ?>Images/Binance_Logo.svg"
                                    alt="binance-script"></div>
                            <h4 class="meta-head">Binance</h4>
                        </button>
                        <button class="tablinkss" onclick="openCities(event, 'Coinbase')">
                            <div class="tech-icon"><img src="<?php echo $siteurl; ?>Images/coinbase.png" alt="Coinbase-script">
                            </div>
                            <h4 class="meta-head">Coinbase</h4>
                        </button>
                        <button class="tablinkss" onclick="openCities(event, 'Wazirx')">
                            <div class="tech-icon"><img src="<?php echo $siteurl; ?>Images/cex-1.png" alt="Wazirx-script">
                            </div>
                            <h4 class="meta-head">Wazirx</h4>
                        </button>
                        <button class="tablinkss" onclick="openCities(event, 'Poloniex')">
                            <div class="tech-icon"><img src="<?php echo $siteurl; ?>Images/polonix-small1.png"
                                    alt="Poloniex-script"></div>
                            <h4 class="meta-head">Poloniex</h4>
                        </button>
                        <button class="tablinkss" onclick="openCities(event, 'LocalBitcoins')">
                            <div class="tech-icon"><img src="<?php echo $siteurl; ?>Images/localbitcoin-small.png"
                                    alt="LocalBitcoins-script"></div>
                            <h4 class="meta-head">LocalBitcoins</h4>
                        </button>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 right-cex">
                    <div id="Paxful" class="tabcontentss">
                        <div class="right-detail-img"><img src="<?php echo $siteurl; ?>Images/paxful-large1.png"
                                alt="crypto-exchange-development-services"></div>
                        <div class="right-detail">
                            <h4>Paxful</h4>
                            <div class="detail-desc">
                                <p>The Paxful clone is a P2P cryptocurrency exchange script that performs functions
                                    similar to
                                    Paxful. It allows trading and exchanging of Bitcoins, Altcoins, tokens, etc. The
                                    primary features
                                    included conducting escrow transactions.
                                </p>
                                <a href="<?php echo $siteurl; ?>paxful-clone-script/">View More<i
                                        class="fa-solid fa-arrow-right ms-4"></i></a>
                            </div>
                        </div>
                    </div>
                    <div id="binance" class="tabcontentss">
                        <div class="right-detail-img"><img src="<?php echo $siteurl; ?>Images/Binance_Logo.svg"
                                alt="Binance-script"></div>
                        <div class="right-detail">
                            <h4>Binance</h4>
                            <div class="detail-desc">
                                <p>Binance Clone Script is the perfect solution for entrepreneurs and start-ups who are
                                    looking to quickly launch their own cryptocurrency exchange like Binance.
                                </p>
                                <a href="https://www.opris.exchange/binance-clone-script/">View More<i
                                        class="fa-solid fa-arrow-right ms-4"></i></a>
                            </div>
                        </div>
                    </div>
                    <div id="Coinbase" class="tabcontentss">
                        <div class="right-detail-img"><img src="<?php echo $siteurl; ?>Images/coinbase-large.png"
                                alt="crypto-exchange-development-services"></div>
                        <div class="right-detail">
                            <h4>Coinbase</h4>
                            <div class="detail-desc">
                                <p> The program used to create the Coinbase exchange's pre-designed user-to-admin
                                    cryptocurrency exchange clones is known as the Coinbase clone script. This uses
                                    plug-ins,
                                    functionality, and a user interface that are similar to those of Coinbase.
                                </p>
                                <a href="<?php echo $siteurl; ?>coinbase-clone-script/">View More<i
                                        class="fa-solid fa-arrow-right ms-4"></i></a>
                            </div>
                        </div>
                    </div>
                    <div id="Wazirx" class="tabcontentss">
                        <div class="right-detail-img"><img src="<?php echo $siteurl; ?>Images/right-tech-icon-1.png"
                                alt="crypto-exchange-development-services"></div>
                        <div class="right-detail">
                            <h4>Wazirx</h4>
                            <div class="detail-desc">
                                <p>Utilize specialized WazirX Clone Script to enter the crypto trading business. It is a
                                    thorough
                                    WazirX clone software creation that is tailored to your needs and has cutting-edge
                                    security
                                    features and add-ons to help you stand out from the competition.
                                </p>
                                <a href="<?php echo $siteurl; ?>wazirx-clone-script/">View More<i
                                        class="fa-solid fa-arrow-right ms-4"></i></a>
                            </div>
                        </div>
                    </div>
                    <div id="Poloniex" class="tabcontentss">
                        <div class="right-detail-img"><img src="<?php echo $siteurl; ?>Images/poloniex-large.png"
                                alt="crypto-exchange-development-services"></div>
                        <div class="right-detail">
                            <h4>Poloniex</h4>
                            <div class="detail-desc">
                                <p>A complete cryptocurrency exchange platform is Poloniex. Despite the availability of
                                    other
                                    exchanges, Poloniex is consistently rated as the top exchange among all exchange
                                    platforms.
                                    The Poloniex exchange platform gives users access to cutting-edge trading options
                                    with high
                                    levels of security.
                                </p>
                                <a href="<?php echo $siteurl; ?>poloniex-clone-script/">View More<i
                                        class="fa-solid fa-arrow-right ms-4"></i></a>
                            </div>
                        </div>
                    </div>
                    <div id="LocalBitcoins" class="tabcontentss">
                        <div class="right-detail-img"><img src="<?php echo $siteurl; ?>Images/localbitcoin-large.png"
                                alt="crypto-exchange-development-services"></div>
                        <div class="right-detail">
                            <h4>LocalBitcoins</h4>
                            <div class="detail-desc">
                                <p>A P2P cryptocurrency exchange platform called LocalBitcoins enables people to
                                    purchase and
                                    sell Bitcoins online from anywhere in the world. A LocalBitcoins clone is a version
                                    of the original
                                    LocalBitcoins platform that incorporates all of the same features and
                                    functionalities.
                                </p>
                                <a href="<?php echo $siteurl; ?>localbitcoins-clone-script/">View More<i
                                        class="fa-solid fa-arrow-right ms-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mobile-clone-script-build">
                <section class="faq-sectn">
                    <div class="contain-width">
                        <h4>Build your exchange platform like Leading Clone Scripts</h4>
                        <p>Get industry-leading, feature-rich clone scripts with built-in customization and peer-to-peer
                            technology, which allows your users to directly exchange cryptocurrency, while also
                            providing customization options.</p>
                        <div class="faq-cls-sectns">
                            <div class="perks-benfits">
                                <div class="block-1 coloured">
                                    <div class="accrd-panel-head active">
                                        <div class="tech-icon"><img src="<?php echo $siteurl; ?>Images/cex-1.png"
                                                alt="Wazirx"></div>
                                        <h4 class="meta-head">Wazirx</h4>
                                    </div>
                                    <div class="accrd-panel-body active">
                                        <div class="detail-desc">
                                            <div class="right-detail-img"><img
                                                    src="<?php echo $siteurl; ?>Images/right-tech-icon-1.png"
                                                    alt="crypto-exchange-development-services"></div>
                                            <p>Utilize specialized WazirX Clone Script to enter the crypto trading
                                                business. It is a thorough
                                                WazirX clone software creation that is tailored to your needs and has
                                                cutting-edge security
                                                features and add-ons to help you stand out from the competition.
                                            </p>
                                            <a href="<?php echo $siteurl; ?>wazirx-clone-script/">View More<i
                                                    class="fa-solid fa-arrow-right ms-4"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-1">
                                    <div class="accrd-panel-head">
                                        <div class="tech-icon"><img src="<?php echo $siteurl; ?>Images/coinbase.png"
                                                alt="Coinbase"></div>
                                        <h4 class="meta-head">Coinbase</h4>
                                    </div>
                                    <div class="accrd-panel-body">
                                        <div class="detail-desc">
                                            <div class="right-detail-img"><img
                                                    src="<?php echo $siteurl; ?>Images/coinbase-large.png"
                                                    alt="crypto-exchange-development-services"></div>
                                            <p> The program used to create the Coinbase exchange's pre-designed
                                                user-to-admin
                                                cryptocurrency exchange clones is known as the Coinbase clone script.
                                                This uses plug-ins,
                                                functionality, and a user interface that are similar to those of
                                                Coinbase.
                                            </p>
                                            <a href="<?php echo $siteurl; ?>coinbase-clone-script/">View More<i
                                                    class="fa-solid fa-arrow-right ms-4"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-1">
                                    <div class="accrd-panel-head">
                                        <div class="tech-icon"><img
                                                src="<?php echo $siteurl; ?>Images/localbitcoin-small.png"
                                                alt="LocalBitcoins"></div>
                                        <h4 class="meta-head">LocalBitcoins</h4>
                                    </div>
                                    <div class="accrd-panel-body">
                                        <div class="detail-desc">
                                            <div class="right-detail-img"><img
                                                    src="<?php echo $siteurl; ?>Images/localbitcoin-large.png"
                                                    alt="crypto-exchange-development-services"></div>
                                            <p>A P2P cryptocurrency exchange platform called LocalBitcoins enables
                                                people to purchase and
                                                sell Bitcoins online from anywhere in the world. A LocalBitcoins clone
                                                is a version of the original
                                                LocalBitcoins platform that incorporates all of the same features and
                                                functionalities.
                                            </p>
                                            <a href="<?php echo $siteurl; ?>localbitcoins-clone-script/">View More<i
                                                    class="fa-solid fa-arrow-right ms-4"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-1">
                                    <div class="accrd-panel-head">
                                        <div class="tech-icon"><img
                                                src="<?php echo $siteurl; ?>Images/polonix-small1.png" alt="Poloniex">
                                        </div>
                                        <h4 class="meta-head">Poloniex</h4>
                                    </div>
                                    <div class="accrd-panel-body">
                                        <div class="detail-desc">
                                            <div class="right-detail-img"><img
                                                    src="<?php echo $siteurl; ?>Images/poloniex-large.png"
                                                    alt="crypto-exchange-development-services"></div>
                                            <p>A complete cryptocurrency exchange platform is Poloniex. Despite the
                                                availability of other
                                                exchanges, Poloniex is consistently rated as the top exchange among all
                                                exchange platforms.
                                                The Poloniex exchange platform gives users access to cutting-edge
                                                trading options with high
                                                levels of security.
                                            </p>
                                            <a href="<?php echo $siteurl; ?>poloniex-clone-script/">View More<i
                                                    class="fa-solid fa-arrow-right ms-4"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-1">
                                    <div class="accrd-panel-head">
                                        <div class="tech-icon"><img
                                                src="<?php echo $siteurl; ?>Images/remitano-small.png" alt="Remitano">
                                        </div>
                                        <h4 class="meta-head">Remitano</h4>
                                    </div>
                                    <div class="accrd-panel-body">
                                        <div class="detail-desc">
                                            <div class="right-detail-img"><img
                                                    src="<?php echo $siteurl; ?>Images/remitano-large.png"
                                                    alt="crypto-exchange-development-services"></div>
                                            <p>Remitano Clone Script is a P2P cryptocurrency exchange clone application
                                                that comes fully
                                                equipped It functions as a next-generation escrow mechanism that shields
                                                employing high-level
                                                transaction security in performances and offers total flexibility.
                                            </p>
                                            <a href="<?php echo $siteurl; ?>remitano-clone-script/">View More<i
                                                    class="fa-solid fa-arrow-right ms-4"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-1">
                                    <div class="accrd-panel-head">
                                        <div class="tech-icon"><img src="<?php echo $siteurl; ?>Images/Binance_Logo.svg"
                                                alt="Binance"></div>
                                        <h4 class="meta-head">Binance</h4>
                                    </div>
                                    <div class="accrd-panel-body">
                                        <div class="detail-desc">
                                            <div class="right-detail-img"><img
                                                    src="<?php echo $siteurl; ?>Images/Binance_Logo.svg" alt="Binance">
                                            </div>
                                            <p>Binance Clone Script is the perfect solution for entrepreneurs and
                                                start-ups who are looking to quickly launch their own cryptocurrency
                                                exchange like Binance.
                                            </p>
                                            <a href="<?php echo $siteurl; ?>binance-clone-script/">View More<i
                                                    class="fa-solid fa-arrow-right ms-4"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <section class="faq-sectn">
        <div class="contain-width">
            <h5>FAQs</h5>
            <div class="faq-cls-sectns">
                <div class="perks-benfits">
                    <div class="block-1 coloured">
                        <div class="accrd-panel-head active">
                            <div class="new-numeric-and-text">
                                <span class="numeric n1">01</span>
                                <h5>
                                    <span class="align-self-center">What is Opris Paxful clone script?</span>
                                </h5>
                            </div>
                            <span class="mp-icon"><i class="fa-solid fa-plus"></i></span>
                        </div>
                        <div class="accrd-panel-body active">
                            <p>Opris’ paxful clone script is a white-label cryptocurrency exchange platform that is
                                built to mimic the functionality and features of the paxful cryptocurrency exchange
                                platform.
                            </p>
                        </div>
                    </div>
                    <div class="block-1">
                        <div class="accrd-panel-head">
                            <div class="new-numeric-and-text">
                                <span class="numeric">02</span>
                                <h5>
                                    <span class="align-self-center">What are the benefits of using a opris paxful clone
                                        script?
                                    </span>
                                </h5>
                            </div>
                            <span class="mp-icon"><i class="fa-solid fa-plus"></i></span>
                        </div>
                        <div class="accrd-panel-body">
                            <p>The benefits of using a paxful clone script include faster time-to-market, lower
                                development costs, customizable features, scalable infrastructure, and ease of use for
                                both admins and traders.
                            </p>
                        </div>
                    </div>
                    <div class="block-1">
                        <div class="accrd-panel-head">
                            <div class="new-numeric-and-text">
                                <span class="numeric">03</span>
                                <h5>
                                    <span class="align-self-center">What are the technologies used in developing opris
                                        paxful clone script?
                                    </span>
                                </h5>
                            </div>
                            <span class="mp-icon"><i class="fa-solid fa-plus"></i></span>
                        </div>
                        <div class="accrd-panel-body">
                            <p>The technologies used in developing a paxful clone script include programming languages
                                such as PHP, Python, and Node.js; database management systems such as MySQL and MongoDB,
                                and front-end frameworks such as React and Angular.
                            </p>
                        </div>
                    </div>
                    <div class="block-1">
                        <div class="accrd-panel-head">
                            <div class="new-numeric-and-text">
                                <span class="numeric">04</span>
                                <h5>
                                    <span class="align-self-center">Can opris paxful clone script be customized to fit
                                        my specific needs?
                                    </span>
                                </h5>
                            </div>
                            <span class="mp-icon"><i class="fa-solid fa-plus"></i></span>
                        </div>
                        <div class="accrd-panel-body">
                            <p>Yes, a paxful clone script can be customized to fit your specific needs. Many providers
                                offer custom solutions that can be tailored to your specific business requirements and
                                branding guidelines.
                            </p>
                        </div>
                    </div>
                    <div class="block-1">
                        <div class="accrd-panel-head">
                            <div class="new-numeric-and-text">
                                <span class="numeric">05</span>
                                <h5>
                                    <span class="align-self-center">Is it legal to use a paxful clone script to start
                                        the business?
                                    </span>
                                </h5>
                            </div>
                            <span class="mp-icon"><i class="fa-solid fa-plus"></i></span>
                        </div>
                        <div class="accrd-panel-body">
                            <p>The legality of using a paxful clone script to start a cryptocurrency clone script
                                depends on the laws and regulations of your jurisdiction. It is important to consult
                                with legal experts to ensure that your business complies with all applicable laws and
                                regulations
                            </p>
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

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
                "@type": "Question",
                "name": "What is Opris Paxful clone script?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Opris’ paxful clone script is a white-label cryptocurrency exchange platform that is built to mimic the functionality and features of the paxful cryptocurrency exchange platform."
                }
            },
            {
                "@type": "Question",
                "name": "What are the benefits of using a opris paxful clone script?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The benefits of using a paxful clone script include faster time-to-market, lower development costs, customizable features, scalable infrastructure, and ease of use for both admins and traders."
                }
            },
            {
                "@type": "Question",
                "name": "What are the technologies used in developing opris paxful clone script?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The technologies used in developing a paxful clone script include programming languages such as PHP, Python, and Node.js; database management systems such as MySQL and MongoDB, and front-end frameworks such as React and Angular."
                }
            },
            {
                "@type": "Question",
                "name": "Can opris paxful clone script be customized to fit my specific needs?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, a paxful clone script can be customized to fit your specific needs. Many providers offer custom solutions that can be tailored to your specific business requirements and branding guidelines."
                }
            },
            {
                "@type": "Question",
                "name": "Is it legal to use a paxful clone script to start the business?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The legality of using a paxful clone script to start a cryptocurrency clone script depends on the laws and regulations of your jurisdiction. It is important to consult with legal experts to ensure that your business complies with all applicable laws and regulations"
                }
            }
        ]
    }
    </script>
    <!--FAQPage Code Generated by https://saijogeorge.com/json-ld-schema-generator/faq/-->
</body>

</html>