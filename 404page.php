<?php include('define.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 page not found</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $siteurl; ?>Images/favicon.png">
    <meta name="robots" content="noindex,nofollow">
    <!-- 
    <link rel="icon" type="image/x-icon" href="assert/images/favicon.png"> -->
    
   <!--  <link rel="stylesheet" href="assert/css/owl.theme.default.min.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo $siteurl; ?>assetsindex/css/fontawesome/css/all.min.css" fetchpriority="low" as="font" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>css/custom.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>css/contact.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>css/responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>assets/css/aos.css" fetchpriority="low" media="all">




</head>

<body>




<!--- Header START -->

<?php include('header.php'); ?>

<!--- Header end -->



<!-----  Banner start  -->

<section class="page-not-found">


  <div class="page-nf-inner-img">
    
    <img src="../Images/404errortornwires-scaled.jpg" alt="cryptocurrency-exchange-development-services">

  </div>
  
</section>

<!-----  Banner end  -->


<!--- Footer START -->

<?php include('footer.php'); ?>


<!--- Footer end -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="<?php echo $siteurl; ?>assets/js/3.3.1/jquery.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
  $(document).ready(function () {
    
    $('#form-help').submit(function () {

      // show that something is loading
      $('#response').html("<b>Loading response...</b>");

      // Call ajax for pass data to other place
      $.ajax({
        type: 'POST',
        url: 'contact-form.php',
        data: $(this).serialize() // getting filed value in serialize form
      })
        .done(function (data) { // if getting done then call.

          // show the response
          // $('#response').html(data);
          $("#form-help")[0].reset();
          window.location.href = 'success.php';
          //aert(data);

        })
        .fail(function () { // if fail then getting message

          // just in case posting your form failed
          alert("Posting failed.");

        });

      // to prevent refreshing the whole page page
      return false;

    });

  });

    </script>


</body>
</html>
