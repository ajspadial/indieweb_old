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
  <title>Antonio J Sanchez-Padial</title>
  <link href="css/index.css" rel = "stylesheet">

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

  <!-- TODO
    -- Si tas viendo estu nun ye un descuidu, dexélo pa nun escaecer amestalo más alantre
  <div class="menu" id="menu-right">
    <a href="es/" target="_self" rel="alternative">es</a>
    ·
    <a href="en/" target="_self" rel="alternative">en</a>
  </div>
  -->

  <div class="h-card"> 

  <!-- Reference for representative h-card properties: https://microformats.org/wiki/h-card -->
      <header rel="author">

        <img class="u-photo" id="retratu" alt="Retratu" src="/images/M_Q1Be0g_400x400.jpg" width = "150" height = "150"
        onmouseover="this.src='/images/M_Q1Be0g_400x400.jpg';"
        onmouseout="this.src='/images/bear200.jpg';">
        <script>
          document.getElementById("retratu").src = "/images/bear200.jpg";
        </script>

        <h1 class="p-name">
          Antonio J. <br/> Sánchez-Padial
        </h1>
      </header>

<!-- TODO
        -- Si tas viendo esto nun ye un descuidu, ye pa alcordame de les fasteres que quiero poner
  -->
         <div class="menu inner-menu">
          <a class ="current-menu">aniciu</a>
          ·
          <!--
          <a href="enseñu">enseñu</a>
          ·
  -->
          <a href="/blog" target="_self">blog</a>
     <!--     
          ·
          <a href="nodicies">nes nodícies</a>
          ·
          <a href=""erros">erros</a>
  --> 
        </div>
    <main>
      <p id="job-title">
        <span class="p-job-title">Direutor de Teunoloxía y Sistemes (TIC)</span> na <br/>
        <span class="p-org">Fundación Española pa la Ciencia y la Teunoloxía</span>
      </p>

      <p> Desde 2003, pongo bits a trabayar al serviciu de la Ciencia. Agora en <a href="https://fecyt.es" target="_blank" rel="external">FECYT</a>.
      Tamién soi profesor na <a href="https://informatica.ucm.es/" target="_blank" rel="external">Facultá de Informática</a> de la Universidad Complutense de Madrid.</p>

    </main>

    <?php include("../components/menu.html");?>
  </div>
</body>

</html>