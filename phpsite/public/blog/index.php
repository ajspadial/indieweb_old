<!DOCTYPE html>
<html lang="ast">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="mobile-web-app-capable" content="yes" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="authorization_endpoint" href="https://indieauth.com/auth">
  <link rel="token_endpoint" href="https://tokens.indieauth.com/token">
  <!-- To use social readers via microsub, follow these steps.
    (Details: https://indieweb.org/Microsub#Getting_Started)
    1. After publishing this to your domain, sign in to https://aperture.p3k.io/login with your domain
    2. You will see a <link> tag displayed on your dashboard that looks like:
      <link rel="microsub" href="https://aperture.p3k.io/microsub/000">
    3. Copy that <link> tag and paste it after this HTML comment.
    4. Publish the updated page!
   -->
  <title>Bits al serviciu de la Ciencia</title>
  <link href="../css/index.css" rel = "stylesheet">

  <script src="../js/htmx.min.js" defer></script>

  <!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//stats.spadial.com/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->

</head>

<body>
<?php 
  $uri = $_SERVER['REQUEST_URI']; 
  if (str_ends_with(trim($uri,"/ \t\n\r\0\x0B"), 'blog') ) {
    require ('../../components/blog_home.php');
  }
  else {
    require('../../components/blog_page.php');
  }
?>

</body>

</html>