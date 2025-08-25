<!-- Fave Icon  Start-->
<link rel="apple-touch-icon" sizes="180x180" href="images/icons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon-16x16.png">
<link rel="manifest" href="images/icons/site.webmanifest">
<!-- Fave Icon  End-->

<!-- Bootstrap CSS CDN start   -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Bootstrap CSS CDN End  -->

  <!-- Css files  -->
  <link rel="stylesheet" href="css/main.css?v=35" >
  <link rel="stylesheet" href="css/responsive.css?v=44" >
  <!-- CSS files End  -->
  
  <!-- Preloading Images to Improve Performance  -->
  <link rel="preload" href="images/logos/jayabheri-logo-updated.png" as="image">
  <link rel="preload" href="images/logos/jayabheri-white-logo.webp" as="image">
  <link rel="preload" href="images/banners/jayabheri-sahasra-banner-1.jpg" as="image">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" href="fonts/PPAcma-Semibold.ttf" as="font" type="font/ttf" crossorigin="anonymous">
<link rel="preload" href="fonts/Poppins-Light.ttf" as="font" type="font/ttf" crossorigin="anonymous">
<link rel="preload" href="fonts/InterTight-Regular.ttf" as="font" type="font/ttf" crossorigin="anonymous">

<script>
function loadGTM() {
  if (!window.gtmLoaded) {
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
      var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-N2G7BRLS'); // Replace with your GTM ID

    window.gtmLoaded = true; // Prevent re-loading
    console.log('GTM script loaded');
  }
}

// Load GTM after the page has fully loaded
window.addEventListener('load', function() {
  loadGTM();
});
</script>

