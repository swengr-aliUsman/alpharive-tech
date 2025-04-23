<?php include('define.php'); ?>

<!DOCTYPE html>

<html lang="en">

<head>



    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact us - Opris exchange</title>

    <link rel="icon" type="image/x-icon" href="<?php echo $siteurl; ?>Images/favicon.png">

    <meta name="title" content="Request for Live Demo - Opris exchange" />

    <meta name="description" content="Contact us for any inquiries or support related to our Cryptocurrency Exchange Software Solution. Opris team is here to help you succeed.">

    <meta name="keywords" content="Contact for cryptocurrency exchange software, crypto exchange software, bitcoin exchange software, cryptocurrency exchange software, White Label Crypto Exchange Software Development Services">

    <meta name="robots" content="index, follow">
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
    <link rel="canonical" href="<?php echo $canonical; ?>" />



</head>



<body class="contact-us-main-page">

<!--- Header START -->



<?php include('include/header.php'); ?>


<?php include('form-new.php'); ?>



<!--- Footer START -->



    <?php include('include/footer.php'); ?>




<!--- Footer end -->




 








</body>

</html>

