<!--?php 

if (isset($_GET['utm_source'])) { $utm_source = $_GET['utm_source'];}
else { $utm_source = ''; }

if (isset($_GET['utm_medium'])) { $utm_medium = $_GET['utm_medium']; }
else { $utm_medium = ''; }

if (isset($_GET['utm_campaign'])) { $utm_campaign = $_GET['utm_campaign']; }
else { $utm_campaign = ''; }

if (isset($_GET['utm_term'])) { $utm_term = $_GET['utm_term']; }
else { $utm_term = ''; }

if (isset($_GET['keyword'])) { $keyword = $_GET['keyword']; }
else { $keyword = ''; }

if (isset($_GET['matchtype'])) { $matchtype = $_GET['matchtype']; }
else { $matchtype = ''; }

if (isset($_GET['device'])) { $device = $_GET['device']; }
else { $device = ''; }


$fullurl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

?--><!DOCTYPE html><html lang="en"><head>

<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<link rel="preload" href="images/banners/jayabheri-sahasra-banner-1.webp" as="image" fetchpriority="high">

<link rel="preload" href="images/logos/jayabheri-white-logo.webp" as="image">


<title>Jayabheri The Sahasra</title>

<!--?php include 'include-files/top-links.php' ?-->

<style>
#exampleModal121 .img-cls img {width: 100%;}
#exampleModal121 .modal-dialog {width: fit-content;}
#exampleModal121 .modal-dialog {width: 344px;}
.v-view a{position: fixed;z-index: 999;top: 40%;background: #fff;width: 40px;height: 40px;right: 26px;border-radius: 100%;-webkit-box-shadow: 0 8px 30px 0 rgba(84,110,122,.35);-moz-box-shadow: 0 8px 30px 0 rgba(84,110,122,.35);box-shadow: 0 8px 30px 0 rgba(84,110,122,.35);animation: zoomInOut 2s infinite;}
@keyframes zoomInOut {
0%, 100% { transform: scale(1);}
50% {transform: scale(1.2);}
}
section.vw {text-align: right;position: relative;display: flex;align-items: center;justify-content: end;}
.v-view a img {margin-right: 12px;margin-top: 12px;}
section.vws{display:none;}

@media screen and (max-width: 590px){

section.vw{display:none;}

.v-views a{position: fixed;z-index: 999;bottom: 75%;background: #fff;width: 40px;height: 40px;right: 26px;border-radius: 100%;-webkit-box-shadow: 0 8px 30px 0 rgba(84,110,122,.35);-moz-box-shadow: 0 8px 30px 0 rgba(84,110,122,.35);box-shadow: 0 8px 30px 0 rgba(84,110,122,.35);animation: zoomInOut 2s infinite;}
@keyframes zoomInOut {
0%, 100% {transform: scale(1);}
50% {transform: scale(1.2);}
}
section.vws {text-align: right;position: fixed;display: flex;align-items: center;justify-content: end;z-index:999;}
.v-views a img {margin-right: 12px;margin-top: 12px;}
section.vws{display:block;}
}
@media screen and (max-width: 590px){
#exampleModal121 .modal-dialog {width: auto;} 
}
</style>

</head>
<body>

<!--?php include 'include-files/header.php' ?-->

<!-- scroll spy section start-->
<div data-bs-spy="scroll" data-bs-target="#scroll-spy-on-body" data-bs-offset="0" tabindex="0">
 
<div class="carousel-inner">
<div class="carousel-item active" data-bs-interval="2000">
<picture><source srcset="images/banners/320w/jayabheri-sahasra-banner-1_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/banners/640w/jayabheri-sahasra-banner-1_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/banners/1024w/jayabheri-sahasra-banner-1_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/banners/1920w/jayabheri-sahasra-banner-1_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/banners/jayabheri-sahasra-banner-1.webp" class="carousel-img" alt="..." loading="lazy" decoding="async" width="1920" height="1080"></picture>
<div class="carousel-caption d-inline-flex  justify-content-center">
<div data-aos="fade-up" data-aos-duration="5000">
<h2 class="carousel-heading"><span class="ms-5 caption-normal">A</span>
<br>
<span class="banner-large-text">PARADISE</span><span class="caption-normal"> YOU</span>
<br>
<span class="align-top caption-normal">CAN CALL </span><span class="banner-large-text">HOME</span>
</h2>
</div>
</div>
</div>
</div>
</div>
 

<section id="about-us" class="about-us-section section-padding-bottom">
<div class="about-us-section-content">
<div class="container">
<div class="row">

<div class="col-12 col-md-4 col-lg-4" data-aos="fade-down">
<div class="section-heading">
<h1>JAYABHERI <br>
The Sahasra</h1>
</div>
</div>

<div class="col-12 col-md-8 col-lg-6" data-aos="fade-up">
<h3>A Symphony of Connected Living Jayabheri</h3>
<div class="my-3 ">
<p>At Jayabheri, we believe exceptional properties go beyond shelter. They're vibrant communities in harmony with nature, nurturing social interaction for a flourishing life.</p>
<p>With pride, we unveil Jayabheri The Sahasra— a visionary project elevating life's quality.</p>
<p>Embrace connected living, and experience a vibrant community cherishing togetherness. Immerse in lush green spaces, a soul sanctuary. Step into Jayabheri The Sahasra, a symphony of connected living, where every step brings purpose and belonging.</p>
<p class="rera-no"><b>RERA No.: P02400005088</b></p>
</div>

<div class="d-flex justify-content-between">
<a class="download-brochure-btn" data-bs-toggle="modal" data-bs-target="#downloadNowPopUpForm">Download Brochure<i class="bi bi-download ms-2"></i>
</a>

<a class="download-brochure-btn" data-bs-toggle="modal" data-bs-target="#enquireNowPopUpForm">Enquire Now<i class="bi bi-patch-question-fill ms-2"></i>
</a>

<!--<button type="submit" class="submit-button-1 w-auto" data-bs-toggle="modal" data-bs-target="#enquireNowPopUpForm" data-aos="flip-down">
<span>Enquire Now</span>
<i class="bi bi-arrow-right ms-1"></i>
</button>-->

</div>
</div>

</div>
</div>
</div>
</section>


<section class="stads-section">
<div class="stads-section-content">
<picture><source srcset="images/bg/320w/about-section-bg_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/bg/640w/about-section-bg_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/bg/1024w/about-section-bg_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/bg/1920w/about-section-bg_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="w-100 lazy" src="images/bg/about-section-bg.webp" data-src="images/bg/stads-section-bg.jpg" alt="Buildings" loading="lazy" decoding="async" width="1324" height="850"></picture>

<!-- <picture>
  <source media="(max-width: 767px)" srcset="images/bg/about-section-bg-m.webp">


  <img class="w-100" src="images/bg/about-section-bg.jpg" alt="Buildings">
</picture>
 -->

<div class="building-card building-1" data-aos="zoom-in-down">
<p class="flex-grow-1">966 LAVISH</p>
<h3>2 &amp; 3 BHK</h3>
<p>APARTMENTS</p>
<hr class="stads-section-hr d-block d-md-none">
</div>

<div class="building-card building-2" data-aos="zoom-in-down">
<p class="flex-grow-1">RANGING FROM</p>
<h3>1400-2510</h3>
<p>SQUARE FEET</p>
<hr class="stads-section-hr d-block d-md-none">
</div>

<div class="building-card building-3" data-aos="zoom-in-down">
<p class="flex-grow-1">OVER </p>
<h3>70,000 </h3>
<p>SFT OF AMENITIES</p>
<hr class="stads-section-hr d-block d-md-none">
</div>

<div class="building-card building-4" data-aos="zoom-in-down">
<p class="flex-grow-1">OVER </p>
<h3>80% </h3>
<p>OF OPEN SPACE</p>
</div>
</div>
</section>

<section class="bg-pink text-green section-padding-top section-padding-bottom">
<div class="container " id="3d-video">

<div class="section-heading text-center" data-aos="fade-up">
<h2>walk-through</h2>
</div>
<!--<h3 class="text-center mt-5 mb-5" style="font-weight: 700;text-transform: capitalize;font-size: 30px;margin-bottom:30px">walk-through</h3>-->
<div style="padding:56.25% 0 0 0;position:relative;"><iframe class="lazyload" data-src="https://player.vimeo.com/video/857778538?h=cedaf9f731&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" allow="fullscreen; picture-in-picture" allowfullscreen=""></iframe></div>
</div>
</section>

<section class="nature-canvas section-padding-top section-padding-bottom">
<div class="container">
<div class="row pb-5">

<div class="section-heading canvas-section-heading" data-aos="fade-up">
<h2>CARESSING</h2>
<h2>NATURE’S</h2>
<h2>CANVAS</h2>
</div>

<div class="text-center">
<picture><source srcset="images/body/320w/loading-img-for-lazyloading_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/body/640w/loading-img-for-lazyloading_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/body/1024w/loading-img-for-lazyloading_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/body/1920w/loading-img-for-lazyloading_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="w-100 d-none d-md-inline-block lazy" src="images/body/loading-img-for-lazyloading.webp" data-src="images/body/nature-canvas-section.png" alt="" loading="lazy" decoding="async" width="965" height="561"></picture>
</div>

</div>

<div class="row">
<div class="col-12 col-md-4 text-center pb-3 mb-3" data-aos="fade-up">
<picture><source srcset="images/body/320w/loading-img-for-lazyloading_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/body/640w/loading-img-for-lazyloading_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/body/1024w/loading-img-for-lazyloading_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/body/1920w/loading-img-for-lazyloading_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="canvas-mobile-img  lazy d-inline-block d-md-none" src="images/body/loading-img-for-lazyloading.webp" data-src="images/body/deep-soil-zone.png" alt="" loading="lazy" decoding="async" width="965" height="561"></picture>
<div class="canvas-content-heading mt-2">
<h3 class="pp-acma-font me-2">20%</h3>
<h3> GROUND COVERAGE</h3>
</div>
<p>For an enhanced open space quality</p>
</div>
<div class="col-12 col-md-4 text-center pb-3 mb-3" data-aos="fade-down">
<picture><source srcset="images/body/320w/loading-img-for-lazyloading_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/body/640w/loading-img-for-lazyloading_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/body/1024w/loading-img-for-lazyloading_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/body/1920w/loading-img-for-lazyloading_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="canvas-mobile-img lazy d-inline-block d-md-none" src="images/body/loading-img-for-lazyloading.webp" data-src="images/body/podium-landscape.png" alt="" loading="lazy" decoding="async" width="965" height="561"></picture>
<div class="canvas-content-heading mt-2">
<h3 class="pp-acma-font me-2">32%</h3>
<h3> Podium Landscape</h3>
</div>

<p>For Reduced Heat Absorption and Surface radiation</p>
</div>
<div class="col-12 col-md-4 text-center pb-3 mb-3" data-aos="fade-up">
<picture><source srcset="images/body/320w/loading-img-for-lazyloading_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/body/640w/loading-img-for-lazyloading_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/body/1024w/loading-img-for-lazyloading_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/body/1920w/loading-img-for-lazyloading_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="canvas-mobile-img lazy d-inline-block d-md-none" src="images/body/loading-img-for-lazyloading.webp" data-src="images/body/ground-coverage.png" alt="" loading="lazy" decoding="async" width="965" height="561"></picture>
<div class="canvas-content-heading mt-2">
<h3 class="pp-acma-font me-2">23% </h3>
<h3>deep soil zone</h3>
</div>
<p>For a sustainable unhindered landscape</p>
</div>
</div>
<!--CTA-->
<div class="d-flex justify-content-center">
<button type="submit" class="cta-canvas-btn" data-bs-toggle="modal" data-bs-target="#enquireNowPopUpForm">
<span>Enquire Now</span>
<i class="bi bi-envelope ms-1"></i> 
</button> 
</div>
<!--CTA-->
</div>
</section>

<section id="amenities" class="amenities-section section-padding-top section-padding-bottom">
<div class="container">

<div class="section-heading mb-5">
<h2>AMENITIES</h2>
</div>

<!-- each amenities row start -->
<div class="row mb-5">
<div class="col-12 col-md-6">
<hr class="amenities-card-hr" data-aos="zoom-in-down">
<p>1.</p>
<div class="row justify-content-between">
<div class="col-12 col-md-4" data-aos="fade-down">
<h3 class="amenities-card-heading">SOCIAL &amp; ACTIVE LIVING</h3>
</div>
<div class="col-12 col-md-7" data-aos="fade-right">
<ul class="amenities-card-list">
<li> Amphitheatre &amp; tree grove</li>
<li>Thematic gardens</li>
<li>Multi-purpose court </li>
<li>Children's play area</li>
<li>Senior citizen park</li>
<li>Pet park</li>
<li>Open gym/wellness area</li>
<li>Maidan &amp; Event Plaza</li>
<li>Games plaza</li>
</ul>
</div>
</div>
</div>
<div class="col-12 col-md-6" data-aos="flip-right">
<picture><source srcset="images/body/320w/loading-img-for-lazyloading_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/body/640w/loading-img-for-lazyloading_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/body/1024w/loading-img-for-lazyloading_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/body/1920w/loading-img-for-lazyloading_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="amenities-img lazy" src="images/body/loading-img-for-lazyloading.webp" data-src="images/body/amenities-social-active-living.jpg" alt="" loading="lazy" decoding="async" width="965" height="561"></picture>
</div>
</div>
<!-- each amenities row end -->

<!-- each amenities row start -->
<div class="row mb-5">
<div class="col-12 col-md-6">
<hr class="amenities-card-hr" data-aos="zoom-in-down">
<p>2.</p>
<div class="row justify-content-between">
<div class="col-12 col-md-4" data-aos="fade-down">
<h3>The Bazaar</h3>
</div>
<div class="col-12 col-md-7" data-aos="fade-right">
<ul class="amenities-card-list">
<li>30,000 Sq.Ft Of Exclusive Retail Area</li>
<li>Supermarket</li>
<li>Convenience Store &amp; Other Vanilla Stores</li>
<li>Spa/Salon</li>
<li>Restaurant/Banquet Hall &amp; Multiple Terrace Banquets</li>
<li>Cafe &amp; Ice-Cream/Bakery</li>
<li>Pharmacy</li>
</ul>
</div>
</div>
</div>
<div class="col-12 col-md-6" data-aos="flip-left">
<picture><source srcset="images/body/320w/loading-img-for-lazyloading_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/body/640w/loading-img-for-lazyloading_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/body/1024w/loading-img-for-lazyloading_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/body/1920w/loading-img-for-lazyloading_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="amenities-img lazy" src="images/body/loading-img-for-lazyloading.webp" data-src="images/body/amenities-the-bazaar.jpg" alt="" loading="lazy" decoding="async" width="965" height="561"></picture>
</div>
</div>
<!-- each amenities row end -->

<!-- each amenities row start -->
<div class="row mb-5">
<div class="col-12 col-md-6">
<hr class="amenities-card-hr" data-aos="zoom-in-down">
<p>3.</p>
<div class="row justify-content-between">
<div class="col-12 col-md-4" data-aos="fade-down">
<h3>The Arena</h3>
</div>
<div class="col-12 col-md-7" data-aos="fade-right">
<ul class="amenities-card-list">
<li>Outdoor Swimming Pool With Toddler Pool</li>
<li>2850 Sq.Ft Of Indoor Gym Overseeing Landscape</li>
<li>Double-Height Indoor Badminton Courts</li>
<li>Rooftop Multi-Sports Arena</li>
<li>Open Lounge</li>
</ul>
</div>
</div>
</div>
<div class="col-12 col-md-6" data-aos="flip-right">
<picture><source srcset="images/body/320w/loading-img-for-lazyloading_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/body/640w/loading-img-for-lazyloading_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/body/1024w/loading-img-for-lazyloading_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/body/1920w/loading-img-for-lazyloading_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="amenities-img lazy" src="images/body/loading-img-for-lazyloading.webp" data-src="images/body/amenities-the-arena.jpg" alt="" loading="lazy" decoding="async" width="965" height="561"></picture>
</div>
</div>
<!-- each amenities row end -->

<!-- each amenities row start -->
<div class="row">
<div class="col-12 col-md-6">
<hr class="amenities-card-hr" data-aos="zoom-in-down">
<p>4.</p>
<div class="row justify-content-between">
<div class="col-12 col-md-4" data-aos="fade-down">
<h3>RECREATION</h3>
</div>
<div class="col-12 col-md-7" data-aos="fade-right">
<ul class="amenities-card-list">
<li>Indoor Games Zone – Pool Tables, Table Tennis, Board Games &amp; More</li>
<li>Day Care / Creche</li>
<li>Music &amp; Dance, Creative Arts Area</li>
<li>Yoga / Aerobics / Meditation</li>
<li>Multipurpose Halls</li>
<li>Board Room</li>
<li>Guest Rooms</li>
<li>Tennis Court</li>
<li>Basketball Court.</li>
</ul>
</div>
</div>
</div>
<div class="col-12 col-md-6" data-aos="flip-left">
<picture><source srcset="images/body/320w/loading-img-for-lazyloading_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/body/640w/loading-img-for-lazyloading_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/body/1024w/loading-img-for-lazyloading_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/body/1920w/loading-img-for-lazyloading_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="amenities-img lazy" src="images/body/loading-img-for-lazyloading.webp" data-src="images/body/amenities-indoor-recreation.jpg" alt="" loading="lazy" decoding="async" width="965" height="561"></picture>
</div>
</div>
<!-- each amenities row end -->
</div>
</section>

<section id="floor-plan" class="floor-plan-section section-padding-top section-padding-bottom">
<div class="container">
<div class="row justify-content-between">
<div class="col-12 col-md-12 col-lg-3 ">

<div class="section-heading floor-plan-heading" data-aos="zoom-in-right">
<h2>HOLISTIC. </h2>
<h2>AESTHETIC. </h2>
<h2>METICULOUS.</h2>

<div class="sub-heading-with-line" data-aos="fade-up">
<span class="sub-line bg-green"></span>
<h4>Secured Boundless Vistas</h4>
<span class="sub-line bg-green"></span>
</div>
</div>



</div>
<div class="col-12 col-md-12 col-lg-8">
<!-- master plan card start -->
<div class="row justify-content-between mb-3">
<div class="text-center">
<hr class="floor-plan-hr" data-aos="zoom-in">
</div>
<div class="col-12 col-md-5 floor-plans-head-btn order-2 order-md-1  mb-2" data-aos="zoom-in">
<div>
<h3>MASTER PLAN</h3>
</div>
<div><a class="submit-button-1" href="master-plan.php">View <i class="bi bi-arrow-right ms-1"></i></a></div>
</div>
<div class="col-12 col-md-5 order-1 order-md-2  mb-2" data-aos="fade-right">
<a href="master-plan.php"><picture><source srcset="images/body/320w/loading-img-for-lazyloading_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/body/640w/loading-img-for-lazyloading_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/body/1024w/loading-img-for-lazyloading_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/body/1920w/loading-img-for-lazyloading_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img style="aspect-ratio: 4/3;" class="floor-plans-small-img mb-2 lazy" src="images/body/loading-img-for-lazyloading.webp" data-src="images/floor-plans/master-plan-low.jpg" alt="" loading="lazy" decoding="async" width="965" height="561"></picture></a>
</div>
</div>
<!-- master plan card end  -->

<!-- tower a b d g plan card start -->
<div class="row justify-content-between mb-3">
<div class="text-center">
<hr class="floor-plan-hr mt-0" data-aos="zoom-in">
</div>
<div class="col-12 col-md-5 floor-plans-head-btn order-2 order-md-1 mb-2" data-aos="zoom-in">
<div>
<h3>TOWER A | B | D | G</h3>
</div>
<div><a class="submit-button-1" href="tower-abdg.php">View <i class="bi bi-arrow-right ms-1"></i></a></div>
</div>
<div class="col-12 col-md-4 order-1 order-md-2 mb-2" data-aos="fade-right">
<a href="tower-abdg.php"><picture><source srcset="images/body/320w/loading-img-for-lazyloading_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/body/640w/loading-img-for-lazyloading_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/body/1024w/loading-img-for-lazyloading_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/body/1920w/loading-img-for-lazyloading_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img style="aspect-ratio: 3/4;" class="floor-plans-small-img mb-2 lazy" src="images/body/loading-img-for-lazyloading.webp" data-src="images/floor-plans/tower-abdg/tower-abdg-first-low.jpg" alt="" loading="lazy" decoding="async" width="965" height="561"></picture></a> 
</div>

</div>
<!-- tower a b d g card end  -->
<!-- tower a b d g plan card start -->
<div class="row justify-content-between mb-4">
<div class="text-center">
<hr class="floor-plan-hr" data-aos="zoom-in">
</div>
<div class="col-12 col-md-5 floor-plans-head-btn order-2 order-md-1 mb-2" data-aos="zoom-in">
<div>
<h3>TOWER C | E | F</h3>
</div>
<div><a class="submit-button-1" href="tower-cef.php">View <i class="bi bi-arrow-right ms-1"></i></a></div>
</div>
<div class="col-12 col-md-4 order-1 order-md-2 mb-2" data-aos="fade-right">
<a href="tower-cef.php"><picture><source srcset="images/body/320w/loading-img-for-lazyloading_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/body/640w/loading-img-for-lazyloading_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/body/1024w/loading-img-for-lazyloading_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/body/1920w/loading-img-for-lazyloading_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img style="aspect-ratio: 3/4;" class="floor-plans-small-img mb-2 lazy" src="images/body/loading-img-for-lazyloading.webp" data-src="images/floor-plans/tower-cef/tower-cef-first-low.jpg" alt="" loading="lazy" decoding="async" width="965" height="561"></picture></a>
</div>
</div>
<div class="text-center ">
<hr class="floor-plan-hr" data-aos="zoom-in">
</div>
<!-- tower a b d g card end  -->
</div>
</div>
</div>
</section>

<section id="location" class="location-highlights-section pt-0 pb-0">
<div class="container-fluid">
<div class="row">
<div class="col-12 col-md-5 px-5 section-padding-top section-padding-bottom bg-green">
<!-- section heading start  -->
<div class="text-center" data-aos="zoom-in-up">
<div class="section-heading mb-4">
<h2>BLISSFUL LIVING</h2>
</div>
<div class="sub-heading-with-line justify-content-center">
<span class="sub-line bg-pink"></span>
<h4>Where convenience meets serenity</h4>
<span class="sub-line bg-pink"></span>
</div>
</div>
<!-- section heading end  -->

<!-- location highlights Work -->
<div class="row mb-3 section-padding-top">
<div class="col-12 col-lg-4" data-aos="zoom-in-right">
<h5>WORK</h5>
</div>
<div class="col-12 col-lg-8" data-aos="zoom-in-left">
<ul class="location-highlight-points">
<li>Financial District - 1 km </li>
<li>Gachibowli IT Hub - 4 km</li>
<li>Kokapet Hub - 4.5 km</li>
</ul>
</div>
</div>

<!-- location highlights schools -->
<div class="row mb-3">
<div class="col-12 col-lg-4" data-aos="zoom-in-right">
<h5>SCHOOLS</h5>
</div>
<div class="col-12 col-lg-8" data-aos="zoom-in-left">
<ul class="location-highlight-points">
<li>Kairos International School - 0.1 km </li>
<li>Keystone International School - 4.5 km </li>
<li>The Shri Ram Universal School - 4.6 km </li>
<li>Oakridge International School - 5.5 km</li>
<li>Phoenix Greens School - 6.9 km </li>
<li>Future Kids School - 5.6 km </li>
<li>Delhi Public School - 5.9 km </li>
</ul>
</div>
</div>

<!-- location highlights recreation-->
<div class="row mb-3">
<div class="col-12 col-lg-4" data-aos="zoom-in-right">
<h5>RECREATION</h5>
</div>
<div class="col-12 col-lg-8" data-aos="zoom-in-left">
<ul class="location-highlight-points">
<li>Botanical Garden - 7 km </li>
<li>Sarath City Mall - 7.8 km </li>
<li>Inorbit Mall - 9.6 km </li>
<li>RGI Airport - 30.6 km </li>
</ul>
</div>
</div>

<!-- location highlights Hospitals-->
<div class="row mb-3">
<div class="col-12 col-lg-4" data-aos="zoom-in-right">
<h5>HOSPITALS</h5>
</div>
<div class="col-12 col-lg-8" data-aos="zoom-in-left">
<ul class="location-highlight-points">
<li>Continental Hospital - 2.6 km </li>
<li>Star Hospital - 4.8 km</li>
<li>Rainbow Hospital - 4.8 km </li>
<li>Citizens Hospital - 4.9 km </li>
<li>AIG Hospital - 7.6 km </li>
<li>Care Hospital - 7.9 km </li>
</ul>
</div>
</div>

</div>


<div class="col-12 col-md-7 ps-0 pe-0">
<div class="map-container">

<iframe data-src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d37377.501730915945!2d78.2972863871219!3d17.438190613792298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bcb93a2de0845bf%3A0xbafd167e676c8527!2sjayabheri%20sahasra!3m2!1d17.4355545!2d78.3184127!5e0!3m2!1sen!2sin!4v1688035837727!5m2!1sen!2sin" style="border:none;" allowfullscreen="" loading="lazy" class="lazyload" referrerpolicy="no-referrer-when-downgrade"></iframe>

<div class="get-directions-card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
<a href="https://www.google.com/maps/dir/?api=1&amp;destination=17.4355545,78.3184127" target="_blank" class="submit-button-2">Get Directions <i class="bi bi-arrow-right ms-1"></i></a>
</div>

</div>
</div>

</div>
</div>
</section>


<!--?php include 'include-files/gallery-section.php' ?-->

<section class="section-padding-top section-padding-bottom bg-green text-pink">
<div class="container">

<div class="section-heading mb-5">
<h2>PROJECT <br>PROGRESS
</h2>
</div>

<div class="accordion accordion-flush" id="accordionFlushExample">
<div class="accordion-line"></div>
<div class="accordion-item">

<h3 class="accordion-header" id="flush-headingOne">
<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne"><span class="play-btn"><i class="timeline-circle"></i></span>Current Status</button>
</h3>

<div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
<div class="accordion-body bg-green text-pink">

<p>Click on the images to enlarge</p>

<!--Copy This container and past it in index page -->
<div class="container">
<div class="row">

<div class="col-12 col-md-6 ">
<a href="project-progress/april-2025/block-b.webp" data-fancybox="project-progressf" data-caption="Structure Completed">
<picture><source srcset="images/body/320w/loading-img-for-lazyloading_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/body/640w/loading-img-for-lazyloading_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/body/1024w/loading-img-for-lazyloading_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/body/1920w/loading-img-for-lazyloading_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="w-100 lazy construction-progress-img" src="images/body/loading-img-for-lazyloading.webp" data-src="project-progress/april-2025/block-b.webp" alt="" loading="lazy" decoding="async" width="965" height="561"></picture>
</a>
<h6>B - Block</h6>
<p>Structure Completed</p>
</div>

<div class="col-12 col-md-6">
<a href="project-progress/april-2025/block-c.webp" data-fancybox="project-progressf" data-caption="6th floor shuttering under progress.">
<picture><source srcset="images/body/320w/loading-img-for-lazyloading_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/body/640w/loading-img-for-lazyloading_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/body/1024w/loading-img-for-lazyloading_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/body/1920w/loading-img-for-lazyloading_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="w-100 lazy construction-progress-img" src="images/body/loading-img-for-lazyloading.webp" data-src="project-progress/april-2025/block-c.webp" alt="" loading="lazy" decoding="async" width="965" height="561"></picture>
</a>
<h6>C - Block</h6>
<p>6th floor shuttering under progress.</p>
</div>

</div>

<div class="row">

<div class="col-12 col-md-6">
<a href="project-progress/april-2025/block-d.webp" data-fancybox="project-progressf" data-caption="Structure Completed">
<picture><source srcset="images/body/320w/loading-img-for-lazyloading_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/body/640w/loading-img-for-lazyloading_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/body/1024w/loading-img-for-lazyloading_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/body/1920w/loading-img-for-lazyloading_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="w-100 lazy construction-progress-img" src="images/body/loading-img-for-lazyloading.webp" data-src="project-progress/april-2025/block-d.webp" alt="" loading="lazy" decoding="async" width="965" height="561"></picture>
</a>
<h6>D - Block</h6>
<p>Structure Completed</p>
</div>

<div class="col-12 col-md-6">
<a href="project-progress/april-2025/block-e.webp" data-fancybox="project-progressf" data-caption="Structure Completed">
<picture><source srcset="images/body/320w/loading-img-for-lazyloading_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/body/640w/loading-img-for-lazyloading_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/body/1024w/loading-img-for-lazyloading_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/body/1920w/loading-img-for-lazyloading_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="w-100 lazy construction-progress-img" src="images/body/loading-img-for-lazyloading.webp" data-src="project-progress/april-2025/block-e.webp" alt="" loading="lazy" decoding="async" width="965" height="561"></picture>
</a>
<h6>E - Block</h6>
<p>Structure Completed</p>
</div>

</div>

<div class="row">

<div class="col-12 col-md-6">
<a href="project-progress/april-2025/block-f.webp" data-fancybox="project-progressf" data-caption="7th floor shuttering under progress.">
<picture><source srcset="images/body/320w/loading-img-for-lazyloading_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/body/640w/loading-img-for-lazyloading_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/body/1024w/loading-img-for-lazyloading_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/body/1920w/loading-img-for-lazyloading_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="w-100 lazy construction-progress-img" src="images/body/loading-img-for-lazyloading.webp" data-src="project-progress/april-2025/block-f.webp" alt="" loading="lazy" decoding="async" width="965" height="561"></picture>
</a>
<h6>F - Block</h6>
<p>7th floor shuttering under progress.</p>
</div>

<div class="col-12 col-md-6">
<a href="project-progress/april-2025/block-g.webp" data-fancybox="project-progressf" data-caption="14th floor shuttering under progress.">
<picture><source srcset="images/body/320w/loading-img-for-lazyloading_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/body/640w/loading-img-for-lazyloading_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/body/1024w/loading-img-for-lazyloading_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/body/1920w/loading-img-for-lazyloading_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="w-100 lazy construction-progress-img" src="images/body/loading-img-for-lazyloading.webp" data-src="project-progress/april-2025/block-g.webp" alt="" loading="lazy" decoding="async" width="965" height="561"></picture>
</a>
<h6>G - Block</h6>
<p>14th floor shuttering under progress.</p>
</div>

</div>

<div class="row d-flex justify-content-center flex-warp">
<a class="submit-button-4" href="project-progress/april-2025/april-report.pdf" data-fancybox="project-progressf">More Details <i class="bi bi-filetype-pdf ms-1"></i> </a>
<button class="submit-button-4" data-bs-toggle="modal" data-bs-target="#enquireNowPopUpForm">Enquire Now<i class="bi bi-patch-question-fill ms-1"></i></button>
</div>

</div>
<!--Copy This container and past it in index page -->

</div>
</div>
</div>

<div class="accordion-item">
<h3 class="accordion-header">
<button class="accordion-button collapsed" type="button" onclick="location.href='project-progress.php'" aria-expanded="false">
<span class="play-btn"><i class="timeline-circle"></i></span>
View Previous Project Progress
</button>
</h3>
</div>
</div>
</div>
</section>


<section id="contact-us" class="get-in-touch-section px-5 section-padding-top section-padding-bottom">
<div>
<h3 class="get-in-touch-heading" data-aos="flip-up">Come Experience A Vibrant Community Embedded In The Beauty Of Nature.</h3>
<button class="submit-button-3" data-bs-toggle="modal" data-bs-target="#enquireNowPopUpForm" data-aos="flip-down">Get in Touch <i class="bi bi-arrow-right ms-1"></i> </button>
</div>
</section>


 

<!--?php include 'include-files/footer.php' ?-->
<!--?php include 'include-files/bottom-links.php' ?-->


<!-- Modal -->
<div class="modal fade" id="exampleModal121" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<!--<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body img-cls">
<picture><source srcset="images/popup/320w/Price-Hike-Sashra-Fortune-Cookies_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/popup/640w/Price-Hike-Sashra-Fortune-Cookies_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/popup/1024w/Price-Hike-Sashra-Fortune-Cookies_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/popup/1920w/Price-Hike-Sashra-Fortune-Cookies_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="lazy" src="images/popup/Price-Hike-Sashra-Fortune-Cookies.webp" data-src="images/popup/Price-Hike-Sashra-Fortune-Cookies.webp" alt="img" loading="lazy" decoding="async" width="400" height="600"></picture>
</div>

</div>
</div>
</div>

 
<script>
$(document).ready(function(){

setTimeout(function(){
$("#updatePopUp").modal('show');
}, 3000);
});
</script>

 
 
 


</body></html>