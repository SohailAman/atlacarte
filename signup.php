<?php 
session_start();
include 'db_connection.php';

if (isset($_POST['user-signup'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];
  $signup_date=date('d-M-Y');
  $found=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `user-login` WHERE email='$email'"));
  if ($found > 0) {
   $_SESSION['msg']='Email Already Exists';
   $_SESSION['bg']='bg-danger';
  }else{
    $query="INSERT INTO `user-login`( `name`, `email`, `phone`, `password`, `signup_date`) VALUES ('$name','$email','$phone','$password','$signup_date') LIMIT 1";
    $result=mysqli_query($db, $query);
    if ($result) {
      $_SESSION['msg']='User Registered Successfully <br> ';
      $_SESSION['bg']='bg-success';
    }else{
       $_SESSION['msg']='Problem in Registration';
      $_SESSION['bg']='bg-danger';
    }
  }
  
}
 ?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Libs CSS -->
  <link rel="stylesheet" href="assets/fonts/Feather/feather.css">
  <link rel="stylesheet" href="assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.css">
  <link rel="stylesheet" href="assets/libs/aos/dist/aos.css">
  <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
  <link rel="stylesheet" href="assets/libs/flickity-fade/flickity-fade.css">
  <link rel="stylesheet" href="assets/libs/flickity/dist/flickity.min.css">
  <link rel="stylesheet" href="assets/libs/highlightjs/styles/vs2015.css">
  <link rel="stylesheet" href="assets/libs/jarallax/dist/jarallax.css">
  <link rel="stylesheet" href="assets/libs/quill/dist/quill.core.css">

  <!-- Map -->
  <link href='mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet'>

  <!-- Theme CSS -->
  <link rel="stylesheet" href="assets/css/theme.min.css">

  <!-- Primary Meta Tags -->
  <title>atlacarte the all-in-one solution, just one chat away</title>
  <meta name="title" content="atlacarte the all-in-one solution, just one chat away">
  <meta name="description" content="atlacarte is an all-in-one, chat-based business solution that connects all venues directly with their customers. atlacarte can be used for marketing, promotions, sales, reservations, analytics, and more">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://atlacarte.com/">
  <meta property="og:title" content="atlacarte the all-in-one solution, just one chat away">
  <meta property="og:description" content="atlacarte is an all-in-one, chat-based business solution that connects all venues directly with their customers. atlacarte can be used for marketing, promotions, sales, reservations, analytics, and more">
  <meta property="og:image" content="https://atlacarte.com/assets/img/atlacarte.jpg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://atlacarte.com/">
  <meta property="twitter:title" content="atlacarte the all-in-one solution, just one chat away">
  <meta property="twitter:description" content="atlacarte is an all-in-one, chat-based business solution that connects all venues directly with their customers. atlacarte can be used for marketing, promotions, sales, reservations, analytics, and more">
  <meta property="twitter:image" content="https://atlacarte.com/assets/img/atlacarte.jpg">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async="" src="gtag/js?id=UA-178459130-1"></script>
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() { dataLayer.push(arguments); }
      gtag('js', new Date());

      gtag('config', 'UA-178459130-1');
  </script>

  <!-- Global site tag (gtag.js) - Google Ads: 471405884 -->
  <script async="" src="gtag/js-1?id=AW-471405884"></script>
  <script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'AW-471405884');</script>
  <!-- Facebook Pixel Code -->
  <script>
      !function (f, b, e, v, n, t, s) {
          if (f.fbq) return; n = f.fbq = function () {
              n.callMethod ?
                  n.callMethod.apply(n, arguments) : n.queue.push(arguments)
          };
          if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
          n.queue = []; t = b.createElement(e); t.async = !0;
          t.src = v; s = b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t, s)
      }(window, document, 'script',
          'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '401508934231271');
      fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none" src="tr?id=401508934231271&ev=PageView&noscript=1"></noscript>
  <!-- End Facebook Pixel Code -->
  <script type="text/javascript">
      var _iub = _iub || [];
      _iub.csConfiguration = { "consentOnContinuedBrowsing": false, "ccpaAcknowledgeOnDisplay": true, "whitelabel": false, "lang": "en", "enableCcpa": true, "countryDetection": true, "siteId": 2015703, "cookiePolicyId": 98116998, "enableCMP": true, "privacyPolicyUrl": "https://atlacarte.com/privacy-policy.html", "cookiePolicyUrl": "https://atlacarte.com/cookies.html", "banner": { "acceptButtonDisplay": true, "customizeButtonDisplay": true, "position": "bottom", "rejectButtonDisplay": true } };
  </script>
  <script type="text/javascript" src="cs/tcf/stub-v2.js"></script>
  <script type="text/javascript" src="cs/ccpa/stub.js"></script>
  <script type="text/javascript" src="cs/iubenda_cs.js" charset="UTF-8" async=""></script>
  <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async="" defer="" src="5387465.js"></script>
  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>
      window.fbAsyncInit = function () {
          FB.init({
              xfbml: true,
              version: 'v9.0'
          });
      };

      (function (d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_GB/sdk/xfbml.customerchat.js';
          fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your Chat Plugin code -->
  <div class="fb-customerchat" attribution="install_email" page_id="437357603090330" theme_color="#E5523D" logged_in_greeting="Hi! How can we help you today?" logged_out_greeting="Hi! How can we help you today?">
  </div>
  <!-- End of HubSpot Embed Code -->
  <style>
      .iubenda-tp-btn.iubenda-cs-preferences-link {
          display: none !important;
      }
  </style>
  <title>atlacarte</title>

  <link rel="stylesheet" href="ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/password-field-test">
  <link rel="stylesheet" href="npm/bootstrap-icons%401.3.0/font/bootstrap-icons.css"> 
  <link rel="stylesheet" href="npm/%40xz/fonts%401/serve/hk-grotesk.min.css">
</head>

<body>

  <!-- CONTENT
    ================================================== -->
  <section>
    
    <div class="container d-flex flex-column ">
      
      <div class="row align-items-center justify-content-center no-gutters min-vh-100 ">
       
       
          <div class="col-12 col-md-6 col-lg-4 py-8 py-md-11">
          <!-- Heading -->
          <h1 class="mb-0 font-weight-bold" style="
          font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
          font-style: normal;
          font-weight: bold;
          font-size: 37px;">
            Sign up
          </h1>

          <!-- Text -->
          <p class="mb-6 text-muted" style="
           font-family: 'HK Grotesk', sans-serif; 
           font-style: normal;
           font-weight: 500;
          font-size: 17px;
          line-height: 26px;;
          ;">
            join our growing family of partnered venues
          </p>

          <!-- Form -->
          <form class="mb-6"  action="" method="POST">

            <!-- Owner Name -->
            <div class="form-group">
              <?php 
              if (isset($_SESSION['msg'])) { ?>
                <label  class="<?= $_SESSION['bg'];?> text-white text-center" style='width: 100%'>
                 <b> <h3><?= $_SESSION['msg']; ?></h3></b>
                </label>
              <?php unset($_SESSION['msg']); unset($_SESSION['bg']); } ?>
                <label for="name">
                  Owner Name
                </label>
                <input type="text" class="form-control" name='name' id="name" placeholder="John Trend" required="required">
              </div>

            <!-- Email -->
            <div class="form-group">
              <label for="email">
                Email Address
              </label>
              <input type="email" class="form-control" name='email' id="email" placeholder="john@email.com" required="required">
            </div>

            <!-- Phone -->
            <div class="form-group">
                <label for="number">
                  Phone
                </label>
                <input type="tel" class="form-control" name='phone' id="phone-number" placeholder="+44 7123 456 7890" required="required">
              </div>

            <!-- Password -->
            <div class="form-group mb-5">

                 <label for="password">
                    Password
                  </label>
            

                      <p class="input-group">
                        
                        <input class="form-control" type="password" name="password" id="password" required="required" placeholder="Enter your password">
                        <i class="bi bi-eye-slash" id="togglePassword" style="margin-left: -25px; z-index: 100; margin-top: 20px; cursor: pointer;"></i>
                      </p>

            </div>
            

            <!-- Continue Button -->
            <input class="btn btn-block btn-primary" type="submit" name="user-signup" value="Continue to venue registration">
          </form>

          <!-- Text -->
          <p class="mb" style="margin-left: 40px; color: #6E84A3;
          font-family: 'HK Grotesk', sans-serif;  
          font-style: normal;
          font-weight: 500;
         font-size: 17px;
         line-height: 26px;">
          
              Already have an account? <a href="login.php">Log in</a>.
          </p>
<br>

          <!-- Text -->
          <p class="mb-1 font-size-sm text-muted" style="margin-left: 15px; text-align: center; font-family: 'HK Grotesk', sans-serif;">
            By signing up you accept the <a href="terms-and-conditions.html">Terms of Service</a>,
            <a href="terms-and-conditions.html">Cookies</a> and <a href="terms-and-conditions.html">Privacy Policy</a>.
        </p>

        </div>
        <div class="col-lg-7 offset-lg-1 align-self-stretch d-none d-lg-block">

          <!-- Image -->
          <div class="h-100 w-cover bg-cover" style="background-image: url(assets/img/covers/cover-15.jpg);"></div>

          <!-- Shape -->
          <div class="shape shape-left shape-fluid-y svg-shim text-white">
            <svg viewbox="0 0 100 1544" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h100v386l-50 772v386H0V0z" fill="currentColor"></path></svg>
          </div>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- JAVASCRIPT
    ================================================== -->
    <script src="assets/js/password-hide-toggle.js"></script>
    <script src="assets/js/signup.js"></script>
  <!-- Libs JS -->
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
  <script src="assets/libs/aos/dist/aos.js"></script>
  <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
  <script src="assets/libs/countup.js/dist/countUp.min.js"></script>
  <script src="assets/libs/dropzone/dist/min/dropzone.min.js"></script>
  <script src="assets/libs/flickity/dist/flickity.pkgd.min.js"></script>
  <script src="assets/libs/flickity-fade/flickity-fade.js"></script>
  <script src="assets/libs/highlightjs/highlight.pack.min.js"></script>
  <script src="assets/libs/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/libs/isotope-layout/dist/isotope.pkgd.min.js"></script>
  <script src="assets/libs/jarallax/dist/jarallax.min.js"></script>
  <script src="assets/libs/jarallax/dist/jarallax-video.min.js"></script>
  <script src="assets/libs/jarallax/dist/jarallax-element.min.js"></script>
  <script src="assets/libs/quill/dist/quill.min.js"></script>
  <script src="assets/libs/smooth-scroll/dist/smooth-scroll.min.js"></script>
  <script src="assets/libs/typed.js/lib/typed.min.js"></script>

  <!-- Map -->
  <script src='mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

  <!-- Theme JS -->
  <script src="assets/js/theme.min.js"></script>

  
</body>

</html>