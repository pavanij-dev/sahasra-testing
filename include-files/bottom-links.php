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

?--><html><head></head><body><div class="modal fade" id="enquireNowPopUpForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="enquireNowPopUpForm" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">
<div class="row">
<div class="col-lg-6 d-none d-lg-block">
<picture><source srcset="images/body/320w/loading-img-for-lazyloading_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/body/640w/loading-img-for-lazyloading_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/body/1024w/loading-img-for-lazyloading_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/body/1920w/loading-img-for-lazyloading_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="w-100 h-100 lazy" src="images/body/loading-img-for-lazyloading.webp" data-src="images/body/enquire-now-popup.jpeg" alt=""></picture>
</div>
<div class="col-12 col-lg-6">
<div class="modal-header d-flex justify-content-between">
<picture><source srcset="images/body/320w/loading-img-for-lazyloading_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/body/640w/loading-img-for-lazyloading_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/body/1024w/loading-img-for-lazyloading_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/body/1920w/loading-img-for-lazyloading_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="jayabheri-logo lazy" src="images/body/loading-img-for-lazyloading.webp" data-src="images/logos/jayabheri-logo-updated.png" alt="Jayabheri sahasra logo"></picture>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body text-dark px-1">
<div class="mb-2">
<p><a href="tel:9533135135"><b>Call: </b>+91 9533135135</a></p>
<p style="overflow-x:auto;"><a href="mailto:chiefmarketingofficer@jayabherigroup.in"><b>Write to us:</b>
chiefmarketingofficer@jayabherigroup.in </a></p>
</div>

<div class="mb-2 mx-3">
<form id="enquireNowPopForm" action="mail.php" method="POST">

<div class="mb-3">
<input class="form-control form-input" type="text" placeholder="Name*" name="name" pattern="[a-zA-z ]+" title="Enter valid Name, Max characters allowed are 30" required="">
</div>

<div class="mb-3">
<input class="form-control form-input" type="tel" name="phone" pattern="[6-9]{1}[0-9]{9}" title="Enter Valid 10 digits Mobile Number" minlength="10" maxlength="12" placeholder="Phone Number*" required="">
</div>

<div class="mb-3">
<input class="form-control form-input" type="email" name="email" title="Enter a valid Email ID" placeholder="Email Address*" required="">
</div>

<!--change-->
<div class="mb-3 dp-down">
<select class="form-controls form-input" name="budget" required="" style="width: 100%;">
<option value="" style="display:none">Budget</option>
<option value="₹2.25 Cr to ₹2.35 Cr">₹2.25 Cr to ₹2.35 Cr</option>
<option value="₹2.65 Cr to ₹2.85 Cr">₹2.65 Cr to ₹2.85 Cr</option>
</select>
</div>
<div></div>

<div class="mb-3">
<textarea class="form-control form-input" name="message" cols="30" rows="4" placeholder="Write Message"></textarea>
</div>

<input type="hidden" name="utm_source" value="<?php echo $utm_source ?>">
<input type="hidden" name="utm_medium" value="<?php echo $utm_medium ?>">
<input type="hidden" name="utm_campaign" value="<?php echo $utm_campaign ?>">
<input type="hidden" name="utm_term" value="<?php echo $utm_term ?>">
<input type="hidden" name="keyword" value="<?php echo $keyword ?>">
<input type="hidden" name="matchtype" value="<?php echo $matchtype ?>">
<input type="hidden" name="device" value="<?php echo $device ?>">

<input type="hidden" name="fullurl" value="<?php echo $fullurl ?>">

<input type="hidden" id="token" name="token">

<div class="form-submit-button">
<button id="enquireNowSubmitBtn" class="submit-button-1">Submit</button>
</div>

</form>
</div>

</div>
</div>
</div>

</div>
</div>
</div>
<!-- Enquire Now PopUp  End-->


<!-- Download Brochure PopUp start From bottom links  -->
<div class="modal fade" id="downloadNowPopUpForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="downloadNowPopUpForm" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">
<div class="row">
<div class="col-lg-6 d-none d-lg-block">
<picture><source srcset="images/body/320w/loading-img-for-lazyloading_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/body/640w/loading-img-for-lazyloading_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/body/1024w/loading-img-for-lazyloading_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/body/1920w/loading-img-for-lazyloading_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="w-100 h-100 lazy" src="images/body/loading-img-for-lazyloading.webp" data-src="images/body/download-brochure-pop-up.jpeg" alt=""></picture>
</div>
<div class="col-12 col-lg-6">
<div class="modal-header d-flex justify-content-between">
<picture><source srcset="images/body/320w/loading-img-for-lazyloading_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/body/640w/loading-img-for-lazyloading_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/body/1024w/loading-img-for-lazyloading_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/body/1920w/loading-img-for-lazyloading_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="jayabheri-logo lazy" src="images/body/loading-img-for-lazyloading.webp" data-src="images/logos/jayabheri-logo-updated.png" alt="Jayabheri sahasra logo"></picture>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body text-dark px-1">
<div class="mb-2">
<p><a href="tel:9533135135"><b>Call: </b>+91 9533135135</a></p>
<p style="overflow-x:auto;"><a href="mailto:chiefmarketingofficer@jayabherigroup.in"><b>Write to us:</b>
chiefmarketingofficer@jayabherigroup.in </a></p>
</div>

<div class="mb-2 mx-3">
<form id="downloadNowPopForm" action="brochure-mail.php" method="POST">

<div class="mb-3">
<input class="form-control form-input" type="text" placeholder="Name*" name="name" pattern="[a-zA-z ]+" title="Enter valid Name, Max characters allowed are 30" required="">
</div>

<div class="mb-3">
<input class="form-control form-input" type="tel" name="phone" pattern="[6-9]{1}[0-9]{9}" title="Enter Valid 10 digits Mobile Number" minlength="10" maxlength="12" placeholder="Phone Number*" required="">
</div>

<div class="mb-3">
<input class="form-control form-input" type="email" name="email" title="Enter a valid Email ID" placeholder="Email Address*" required="">
</div>

<div class="mb-3 dp-down">
<select class="form-controls form-input" name="budget" required="" style="width: 100%;">
<option value="" style="display:none">Budget</option>
<option value="₹2.25 Cr to ₹2.35 Cr">₹2.25 Cr to ₹2.35 Cr</option>
<option value="₹2.65 Cr to ₹2.85 Cr">₹2.65 Cr to ₹2.85 Cr</option>
</select>
</div>

<div class="mb-3">
<textarea class="form-control form-input" name="message" cols="30" rows="4" placeholder="Write Message"></textarea>
</div>

<input type="hidden" name="utm_source" value="<?php echo $utm_source ?>">
<input type="hidden" name="utm_medium" value="<?php echo $utm_medium ?>">
<input type="hidden" name="utm_campaign" value="<?php echo $utm_campaign ?>">
<input type="hidden" name="utm_term" value="<?php echo $utm_term ?>">
<input type="hidden" name="keyword" value="<?php echo $keyword ?>">
<input type="hidden" name="matchtype" value="<?php echo $matchtype ?>">
<input type="hidden" name="device" value="<?php echo $device ?>">
<input type="hidden" name="fullurl" value="<?php echo $fullurl ?>">

<input type="hidden" id="token11" name="token">

<div class="form-submit-button">
<button id="downloadSubmitBtn" class="submit-button-1 w-auto">Download <i class="bi bi-download ms-1"></i></button>
</div>



</form>
</div>


</div>
</div>
</div>
</div>
</div>
</div>
<!-- Download Brochure PopUp End -->



<!-- <style>
.form-controls{
color:grey;
padding: 0.373rem 0.72rem;
}
</style> -->
<!--utm-->



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script async="" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

 


<script>
$(document).ready(function(){
$("#myModal_popup").modal('show'); 
setTimeout(function(){
$("#myModal_popup").modal('show'); 
}, 1000);
})
</script>


<script src="js/script.js?v=15"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="js/custom-swiper.js?V=9"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet">
<script>
function loadSwiperStylesheet() {
var stylesheet = document.createElement('link');
stylesheet.rel = 'stylesheet';
stylesheet.href = 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css';
document.head.appendChild(stylesheet);
}
function loadBootstrapIcons() {
var stylesheet = document.createElement('link');
stylesheet.rel = 'stylesheet';
stylesheet.href = 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css';
document.head.appendChild(stylesheet);
}
 function loadLiveChat() {
if (!window.liveChatLoaded) {
var script = document.createElement('script');
script.src = 'https://www.kenyt.ai/botapp/ChatbotUI/dist/js/bot-loader.js';
script.type = 'text/javascript';
script.setAttribute('data-bot', '21848930'); // Adding the required attribute
script.async = true;
script.defer = true;

document.body.appendChild(script);

script.onload = function () {
window.liveChatLoaded = true; // Prevent re-loading

};
}
}

 function loadjQueryAPI() {

// Create the script tag to load Vimeo Player API
var script = document.createElement('script');
script.src = "https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js";
script.async = true; // Load asynchronously
script.onload = function() {
 console.log("fancy-box loaded")
 
};

// Append the script tag to the head of the document
document.head.appendChild(script);
}
 
window.onload = function () {
loadSwiperStylesheet();
loadBootstrapIcons();
loadLiveChat();
loadjQueryAPI();
};
</script>

<script>
AOS.init({
duration: 500,
});
</script>


<script>
document.addEventListener('scroll', function() {
if (!window.recaptchaLoaded) {
var script = document.createElement('script');
script.src = 'https://www.google.com/recaptcha/api.js?render=6LcQJcAgAAAAAOQVcOo1ONNJ-t5fx68tCljogety';
script.async = true;
script.defer = true;

document.body.appendChild(script);

script.onload = function() {
window.recaptchaLoaded = true; // Prevent re-loading
grecaptcha.ready(function() {
grecaptcha.execute('6LcQJcAgAAAAAOQVcOo1ONNJ-t5fx68tCljogety', { action: 'homepage' }).then(function(token) {
// Send the token to your backend for verification
 

  // Check if the element with ID "token" exists before assigning
        const tokenElement = document.getElementById("token");
        if (tokenElement) {
            tokenElement.value = token;
        }

        // Check if the element with ID "token1" exists before assigning
        const token1Element = document.getElementById("token1");
        if (token1Element) {
            token1Element.value = token;
        }

        // Check if the element with ID "token11" exists before assigning
        const token11Element = document.getElementById("token11");
        if (token11Element) {
            token11Element.value = token;
        }
        

});
});
}
}
}, { once: true }); // Ensure the event fires only once
</script>


<script>
function isNumber(evt) {
evt = (evt) ? evt : window.event;
var charCode = (evt.which) ? evt.which : evt.keyCode;
if (charCode > 31 && (charCode < 48 || charCode > 57)) {
return false;
}
return true;
}
</script>

<!--<script src="https://www.kenyt.ai/botapp/ChatbotUI/dist/js/bot-loader.js" type="text/javascript" data-bot="29822176"></script>-->
<!--<script src="https://www.kenyt.ai/botapp/ChatbotUI/dist/js/bot-loader.js" type="text/javascript" data-bot="21848930"></script>-->
 


 <script>
 
      const lazyElements = document.querySelectorAll('.lazyload, .lazy-bg');

            const loadElement = (element) => {
                if (element.tagName === 'IMG') {
                    if (element.dataset.src) {
                        element.src = element.dataset.src;
                    }
                    if (element.dataset.srcset) {
                        element.srcset = element.dataset.srcset;
                    }
                    element.classList.add('loaded');
                } else if (element.tagName === 'IFRAME') {
                    if (element.dataset.src) {
                        element.src = element.dataset.src;
                    }
                    element.classList.add('loaded');
                } else if (element.classList.contains('lazy-bg')) {
                    let backgroundImage = element.getAttribute( 'data-bgSrc' ) ;
                    if (backgroundImage) {
                        element.style.backgroundImage = `url('${backgroundImage}')`;
                        element.classList.add('loaded'); // Add 'loaded' for potential CSS transitions
                        
                    }
                     console.log('Background image loaded:', backgroundImage);
                }
 

              


            };

            if ('IntersectionObserver' in window) {
                let lazyObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            loadElement(entry.target);
                            observer.unobserve(entry.target); // Stop observing once loaded
                        }
                    });
                },
                 {rootMargin: '0px 0px '+window.innerHeight/2+'px 0px'}
                );

                lazyElements.forEach(function(element) {
                    lazyObserver.observe(element);
                });

                 

              
 
            } 
 </script>

</body></html>