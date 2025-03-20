<section class="footer-part">
    <div class="contain-width">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                <h4>Company</h4>
                <ul class="foot-list">
                    <li><a href="<?php echo $siteurl; ?>">Home</a></li>
                    <li><a href="<?php echo $siteurl; ?>aboutus/">About Us</a></li>
                    <li><a href="<?php echo $siteurl; ?>blog/">Blog</a></li>
                    <li><a href="<?php echo $siteurl; ?>contactus/">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                <h4>Exchange</h4>
                <ul class="foot-list">
                    <li><a href="<?php echo $siteurl; ?>blog/decentralized-exchange-development/">Decentralized Exchange </a>
                    </li>
                    <li><a href="<?php echo $siteurl; ?>white-label-cryptocurrency-exchange-software/">White Label
                            Crypto Exchange Software </a></li>
                    <li><a href="<?php echo $siteurl; ?>p2p-cryptocurrency-exchange-development/">P2P Cryptocurrency
                            Exchange </a></li>
                    <li><a href="<?php echo $siteurl; ?>centralized-exchange-development/">Centralized Exchange</a></li>
                </ul>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                <h4>Clone Scripts</h4>
                <ul class="foot-list">
                    <li><a href="<?php echo $siteurl; ?>wazirx-clone-script/">Wazrix Clone</a></li>
                    <li><a href="<?php echo $siteurl; ?>coinbase-clone-script/">Coinbase Clone</a></li>
                    <li><a href="<?php echo $siteurl; ?>binance-clone-script/">Binance Clone</a></li>
                    <li><a href="<?php echo $siteurl; ?>paxful-clone-script/">Paxful Clone</a></li>
                </ul>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                <h4>Reach Out</h4>
                <ul class="reach-us">
                    <li><a href="https://www.linkedin.com/company/opris-exchange-global/" target="_blank"><img
                                src="<?php echo $siteurl; ?>Images/linked.png" alt="linkedin-footer"></a></li>
                    <li><a href="https://twitter.com/OprisExchange" target="_blank"><img
                                src="<?php echo $siteurl; ?>Images/twiter.png" alt="twitter-footer"></a></li>
                    <li><a href="https://www.facebook.com/oprisglobalexchange" target="_blank"><img
                                src="<?php echo $siteurl; ?>Images/facebook.png" alt="facebook-footer"></a></li>
                    <li><a href="https://www.instagram.com/opris.exchange/" target="_blank"><img
                                src="<?php echo $siteurl; ?>Images/instagram.png" alt="insta-footer"></a></li>
                    <li><a href="https://www.pinterest.co.uk/oprisexchange/" target="_blank"><img
                                src="<?php echo $siteurl; ?>Images/pintrest.png" alt="pinterest-footer"></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="copy-rigt-part">
    <div class="contain-width">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 copy-left">© 2022 Opris Inc. All Rights Reserved.</div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ppts-right">
                <ul>
                    <li><a href="<?php echo $siteurl; ?>privacy-policy" target="_blank">Privacy Policy</a>
                    <li>|</li>
                    <li><a href="<?php echo $siteurl; ?>terms-conditions" target="_blank"> Terms of Service</a></li>
                    </ul>
            </div>
        </div>
    </div>
</div>
<div class="social-icons-contact-fixed">
    <ul class="social-contact-list">
        <li><a target="_blank" href="skype:cid.b4d98d670fe822a2?chat"><img src="<?php echo $siteurl; ?>Images/skype.png"
                    alt="cryptocurrency-exchange-development-services"></a></li>
        <li><a target="_blank" href="https://telegram.me/Opris_sales"><img
                    src="<?php echo $siteurl; ?>Images/telegram.png"
                    alt="cryptocurrency-exchange-development-services"></a></li>
        <li><a target="_blank"
                href="https://api.whatsapp.com/send/?phone=%2B919994248706&text&type=phone_number&app_absent=0"><img
                    src="<?php echo $siteurl; ?>Images/whatsapp.png"
                    alt="cryptocurrency-exchange-development-services"></a></li>
    </ul>
</div>
<div class="social-icons-contact-fixed">
    <ul class="social-contact-list">
        <li><a target="_blank" href="skype:cid.b4d98d670fe822a2?chat"><img src="<?php echo $siteurl; ?>Images/skype.png"
                    alt="cryptocurrency-exchange-development-services"></a></li>
        <li><a target="_blank" href="https://telegram.me/Opris_sales"><img
                    src="<?php echo $siteurl; ?>Images/telegram.png"
                    alt="cryptocurrency-exchange-development-services"></a></li>
        <li><a target="_blank"
                href="https://api.whatsapp.com/send/?phone=%2B919994248706&text&type=phone_number&app_absent=0"><img
                    src="<?php echo $siteurl; ?>Images/whatsapp.png"
                    alt="cryptocurrency-exchange-development-services"></a></li>
    </ul>
</div>
<script src="<?php echo $siteurl; ?>assets/js/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('a.close-menu').click(function() {
        $(this).parent('.collapse').removeClass('show');
    });
    $('li.drop-down-menu-exch a').click(function() {
        $(this).siblings('.drop-down-list-exch').slideDown(200);
    });
    $('li.exch-close-menu-list a').click(function() {
        $('li.exch-close-menu-list').parent('.drop-down-list-exch').slideUp(200);
    });
    $('li.drop-down-menu-clone a').click(function() {
        $(this).siblings('.drop-down-list-clone').slideDown(200);
    });
    $('li.clone-close-menu-list').click(function() {
        $('li.clone-close-menu-list').parent('.drop-down-list-clone').slideUp(200);
    });
    $('.interested-to-see-bsc a.nav-link.menu-last').click(function() {
        $("#appo-container").show()
    });
    $('.own-your-crypto-left a.nav-link.menu-last').click(function() {
        $("#appo-container").show()
    });
    $('.bsc-scalable-architect a.nav-link.menu-last').click(function() {
        $("#appo-container").show()
    });
    $('.we-go-fast a.nav-link.menu-last').click(function() {
        $("#appo-container").show()
    });
})
</script>

<!-- - Google analytics --> 
<script async> function googletag() { var head = document.getElementsByTagName("head")[0]; var script = document.createElement("script"); script.type = "text/javascript"; script.src = "https://www.googletagmanager.com/gtag/js?id=G-N4LQ0H5J5D"; script.defer = true; head.appendChild(script); } setTimeout(googletag, 7000); window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } setTimeout(() => { gtag('js', new Date()); gtag('config', 'G-N4LQ0H5J5D', { 'debug_mode': true }); }, 7000); </script> 
<!--- End google analytics -->