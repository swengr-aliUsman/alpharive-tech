<?php include('define.php'); ?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Succsess Message | Opris</title>

    <link rel="icon" type="image/x-icon" href="<?php echo $siteurl; ?>Images/favicon.png">

   <link rel="preload" href="<?php echo $siteurl; ?>fonts/Poppins-Regular.otf" as="font" type="font/otf" crossorigin>
     <style>
    @font-face {
    font-family: poppins;
     font-style: normal;
    src: url("../fonts/Poppins-Regular.otf");
      font-display: swap;
    }
        </style>
    <link rel="stylesheet" href="<?php echo $siteurl; ?>assetsindex/css/boostrap/bootstrap.min.css" fetchpriority="low">
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/header.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/custom.css" fetchpriority="low"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/footer.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/media.css" />


<style type="text/css">



.button-model{

display: inline-block;

    padding: 10px 60px 10px !important;

    /* width: auto; */

    text-align: center;

    font-size: 20px;

    background: rgba(40, 40, 43, 1);

    color: var(--white-text);
    
    border: 1px solid var(--para-clr);
    
    padding: 10px 20px;
    
    font-size: var(--font-15);
    
    border-radius: 5px;
    
    transition: transform 300ms ease, box-shadow 300ms ease, background-color 300ms ease, -webkit-transform 300ms ease;
    
    position: relative;
    
    z-index: 99;

}

.button-model:hover{
        box-shadow: 0px 10px 30px 0px #F46968B2;
    background: linear-gradient(47.82deg, #FF1717 0%, #FF6461 100%);
    border: 1px solid #FF1717;
    transform: translate(0px, -2px);
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

<!--- Header START -->

<?php include('include/header.php'); ?>

<!--- Header end -->

<section class="section-message">

  

  <div class="contain-width">



    <div class="row">



      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12">

      </div>



      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">

        <h2>Your message has been sent successfully!</h2>

        <h4>We shall contact you soon.</h4>

        <div class="text-align-centre">

          <a class="button-model" href="/">Go Back</a>

        </div>

      </div>



      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12">

      </div>



    </div>



  </div>



</section>





<!--- Footer START -->



<?php include('include/footer.php'); ?>



<!--- Footer end -->



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



<script src="<?php echo $siteurl; ?>assets/js/3.3.1/jquery.min.js"></script>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>



</body>

</html>

