<?php 
include 'db_connection.php';
session_start();
if (!isset($_SESSION['userLogin'])) {
  header("location:login.php");
  exit();
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
  <meta name="facebook-domain-verification" content="swsp7ljvobab8zg4ngdcrzvmws84vs">

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
  <title>The all-in-one hospitality solution</title>

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
  <script> function gtag_report_conversion(url) { var callback = function () { if (typeof (url) != 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-471405884/dgliCPfHpuwBELyq5OAB', 'event_callback': callback }); return false; }</script>


  <style type="text/css">
    .card-venue .card-title {
    overflow: hidden;
    text-overflow: ellipsis;
    line-height: 20px;
    max-height: 40px;
    font-weight: 300;}
  </style>
</head>

<body style="background-color: #e5e5e5; font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;color: #212529;">