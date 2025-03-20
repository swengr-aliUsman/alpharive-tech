<?php include('define.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opris</title>
    <!-- 
    <link rel="icon" type="image/x-icon" href="assert/images/favicon.png"> -->
    
   <!--  <link rel="stylesheet" href="assert/css/owl.theme.default.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>css/custom.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>css/contact.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>css/responsive.css">
  <link rel="stylesheet" href="<?php echo $siteurl; ?>assetsindex/css/fontawesome/css/all.min.css" fetchpriority="low" as="font" media="all">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/aos.css" fetchpriority="low" media="all">


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-N4LQ0H5J5D"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-N4LQ0H5J5D',{ 'debug_mode':true });
</script>


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W5RD48F');</script>
<!-- End Google Tag Manager -->



<style type="text/css">

.button-model{
    display: inline-block;
    padding: 15px 58px 19px !important;
    width: auto;
    text-align: center;
    font-size: 20px;
    background: linear-gradient(0deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), linear-gradient(180deg, #FF0F0F 0%, #FF4849 100%);
    backdrop-filter: blur(10px);
    border-radius: 50px;
    color: #fff;
}

section.section-message {
    text-align: center;
    padding: 50px 0;
}

section.section-message h4 {
    margin: 25px 0;
}

section.section-message a {
    text-decoration: none;
    color: #fff !important;
}
  
</style>


</head>

<body>


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W5RD48F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<!--- Header START -->

<?php include('header.php'); ?>

<!--- Header end -->



<section class="section-message">
  
  <div class="contain-width">

    <div class="row">

      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12">
      </div>

      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
        <h2>Your message has not been sent successfully!</h2>
        <h4>Try again later</h4>
        <div class="text-align-centre">
         <a class="button-model" href="contact.php">Go Back</a>
        </div>
      </div>

      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12">
      </div>

    </div>

  </div>

</section>


<!--- Footer START -->

<?php include('footer.php'); ?>

<!--- Footer end -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="<?php echo $siteurl; ?>assets/js/3.3.1/jquery.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


</body>
</html>
