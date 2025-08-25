
<!-- Bootstrap 5.3 tabs are used for this section -->


<!-- Below image element with the CSS class "lazy".
 It uses lazy loading technique by setting the actual image source in the "data-src" attribute. 
 The image will be loaded when it comes into the user's viewport.
The "src" attribute contains a placeholder image that will be shown before the actual image is loaded. 
Javascript code is present in the script Js
-->

<section id="gallery" class="gallery-section section-padding-top section-padding-bottom">
       <div class="container">
        <div class="section-heading">
            <h2>GALLERY</h2>
        </div>

        <div class="row section-padding-top">
             
        <!-- Tab buttons coulumn Start  -->
            <div class="col-12 col-lg-3 col-xl-2 mb-4 order-2 order-lg-1">
                <div class="nav gallery-button-group nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="gallery-tab-btn active" id="balcony-facade-tab-btn" data-bs-toggle="pill" data-bs-target="#tab-balcony-facade" type="button" role="tab" aria-controls="tab-balcony-facade" aria-selected="true">Balcony & Facade <i class="bi ms-1"></i></button>
                    <button class="gallery-tab-btn" id="the-bazaar-tab-btn" data-bs-toggle="pill" data-bs-target="#tab-the-bazaar" type="button" role="tab" aria-controls="tab-the-bazaar" aria-selected="false">The Bazaar <i class="bi ms-1"></i></button>
                    <button class="gallery-tab-btn" id="club-house-tab-btn" data-bs-toggle="pill" data-bs-target="#tab-club-house" type="button" role="tab" aria-controls="tab-club-house" aria-selected="false">Club House <i class="bi  ms-1"></i></button>
                    <button class="gallery-tab-btn" id="exterior-tab-btn" data-bs-toggle="pill" data-bs-target="#tab-exterior" type="button" role="tab" aria-controls="tab-exterior" aria-selected="false">Exterior <i class="bi ms-1"></i></button>
                    <button class="gallery-tab-btn" id="landscape-tab-btn" data-bs-toggle="pill" data-bs-target="#tab-landscape" type="button" role="tab" aria-controls="tab-landscape" aria-selected="false">Landscape <i class="bi ms-1"></i></button>
                </div>
            </div>
         <!-- Tab buttons coulumn End  -->

         <!-- Gallery Tab Content Column start  -->
            <div class="col-12 col-lg-9 col-xl-10 mb-4 order-1 order-lg-2 ">
                <div class="tab-content">

                    <!-- Balcony gallery card -->
                    <div class="tab-pane fade show active" id="tab-balcony-facade" role="tabpanel" aria-labelledby="balcony-facade-tab-btn" tabindex="0">
                        <div class="row">
                            <div class="col-12 col-md-2 order-2 order-md-1">
                                <div class="swiper swiper-container">
                                    <div class="gallery-hr-div">
                                        <hr class="gallery-slider-hr-line">
                                    </div>
                                    <div class="swiper-wrapper" role="tablist" aria-orientation="vertical">
                                        <div class="swiper-slide active bi" id="balcony-facade-small-1" data-bs-toggle="pill" data-bs-target="#balcony-facade-large-1"   role="tab" aria-controls="balcony-facade-large-1" aria-selected="true"><img loading="lazy" src="images/gallery/small/balcony-facade-small-1.jpg" alt=""></div>
                                        <div class="swiper-slide bi" id="balcony-facade-small-2" data-bs-toggle="pill" data-bs-target="#balcony-facade-large-2"   role="tab" aria-controls="balcony-facade-large-2" aria-selected="false"><img loading="lazy" src="images/gallery/small/balcony-facade-small-2.jpg" alt=""></div>
                                        <div class="swiper-slide bi" id="balcony-facade-small-3" data-bs-toggle="pill" data-bs-target="#balcony-facade-large-3"   role="tab" aria-controls="balcony-facade-large-3" aria-selected="false"><img loading="lazy" src="images/gallery/small/balcony-facade-small-3.jpg" alt=""></div>
                                        <div class="swiper-slide bi" id="balcony-facade-small-4" data-bs-toggle="pill" data-bs-target="#balcony-facade-large-4"   role="tab" aria-controls="balcony-facade-large-4" aria-selected="false"><img loading="lazy" src="images/gallery/small/balcony-facade-small-4.jpg" alt=""></div>
                                        <div class="swiper-slide bi" id="balcony-facade-small-5" data-bs-toggle="pill" data-bs-target="#balcony-facade-large-5"   role="tab" aria-controls="balcony-facade-large-5" aria-selected="false"><img loading="lazy" src="images/gallery/small/balcony-facade-small-5.jpg" alt=""></div>
                                        <div class="swiper-slide bi" id="balcony-facade-small-6" data-bs-toggle="pill" data-bs-target="#balcony-facade-large-6"   role="tab" aria-controls="balcony-facade-large-6" aria-selected="false"><img loading="lazy" src="images/gallery/small/balcony-facade-small-6.jpg" alt=""></div>
                                        <div class="swiper-slide bi" id="balcony-facade-small-7" data-bs-toggle="pill" data-bs-target="#balcony-facade-large-7"   role="tab" aria-controls="balcony-facade-large-7" aria-selected="false"><img loading="lazy" src="images/gallery/small/balcony-facade-small-7.jpg" alt=""></div>
                                        <div class="swiper-slide bi" id="balcony-facade-small-8" data-bs-toggle="pill" data-bs-target="#balcony-facade-large-8"   role="tab" aria-controls="balcony-facade-large-8" aria-selected="false"><img loading="lazy" src="images/gallery/small/balcony-facade-small-8.jpg" alt=""></div>
                                        <div class="swiper-slide bi" id="balcony-facade-small-9" data-bs-toggle="pill" data-bs-target="#balcony-facade-large-9"   role="tab" aria-controls="balcony-facade-large-9" aria-selected="false"><img loading="lazy" src="images/gallery/small/balcony-facade-small-9.jpg" alt=""></div>
                                        <div class="swiper-slide bi" id="balcony-facade-small-10" data-bs-toggle="pill" data-bs-target="#balcony-facade-large-10"   role="tab" aria-controls="balcony-facade-large-10" aria-selected="false"><img loading="lazy" src="images/gallery/small/balcony-facade-small-10.jpg" alt=""></div>
                                        <div class="swiper-slide bi" id="balcony-facade-small-11" data-bs-toggle="pill" data-bs-target="#balcony-facade-large-11"   role="tab" aria-controls="balcony-facade-large-11" aria-selected="false"><img loading="lazy" src="images/gallery/small/balcony-facade-small-11.jpg" alt=""></div>
                                        <div class="swiper-slide bi" id="balcony-facade-small-12" data-bs-toggle="pill" data-bs-target="#balcony-facade-large-12"   role="tab" aria-controls="balcony-facade-large-12" aria-selected="false"><img loading="lazy" src="images/gallery/small/balcony-facade-small-12.jpg" alt=""></div>
                                        <div class="swiper-slide bi" id="balcony-facade-small-13" data-bs-toggle="pill" data-bs-target="#balcony-facade-large-13"   role="tab" aria-controls="balcony-facade-large-13" aria-selected="false"><img loading="lazy" src="images/gallery/small/balcony-facade-small-13.jpg" alt=""></div>
                                        <div class="swiper-slide bi" id="balcony-facade-small-14" data-bs-toggle="pill" data-bs-target="#balcony-facade-large-14"   role="tab" aria-controls="balcony-facade-large-14" aria-selected="false"><img loading="lazy" src="images/gallery/small/balcony-facade-small-14.jpg" alt=""></div>
                                        <div class="swiper-slide bi" id="balcony-facade-small-15" data-bs-toggle="pill" data-bs-target="#balcony-facade-large-15"   role="tab" aria-controls="balcony-facade-large-15" aria-selected="false"><img loading="lazy" src="images/gallery/small/balcony-facade-small-15.jpg" alt=""></div>
                                        <div class="swiper-slide bi" id="balcony-facade-small-16" data-bs-toggle="pill" data-bs-target="#balcony-facade-large-16"   role="tab" aria-controls="balcony-facade-large-16" aria-selected="false"><img loading="lazy" src="images/gallery/small/balcony-facade-small-16.jpg" alt=""></div>
                                    </div>
                                    <div class="gallery-hr-div">
                                        <hr class="gallery-slider-hr-line">
                                    </div>
                                    <div class="swiper-button-next navigation-btn-top"></div>
                                    <div class="swiper-button-prev navigation-btn-bottom"></div>

                                </div>

                            </div>
                            <div class="col-12 col-md-10 order-1 order-md-2">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="balcony-facade-large-1" role="tabpanel" aria-labelledby="balcony-facade-small-1" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/balcony-facade-large-1.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="balcony-facade-large-2" role="tabpanel" aria-labelledby="balcony-facade-small-2" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/balcony-facade-large-2.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="balcony-facade-large-3" role="tabpanel" aria-labelledby="balcony-facade-small-3" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/balcony-facade-large-3.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="balcony-facade-large-4" role="tabpanel" aria-labelledby="balcony-facade-small-4" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/balcony-facade-large-4.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="balcony-facade-large-5" role="tabpanel" aria-labelledby="balcony-facade-small-5" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/balcony-facade-large-5.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="balcony-facade-large-6" role="tabpanel" aria-labelledby="balcony-facade-small-6" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/balcony-facade-large-6.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="balcony-facade-large-7" role="tabpanel" aria-labelledby="balcony-facade-small-7" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/balcony-facade-large-7.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="balcony-facade-large-8" role="tabpanel" aria-labelledby="balcony-facade-small-8" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/balcony-facade-large-8.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="balcony-facade-large-9" role="tabpanel" aria-labelledby="balcony-facade-small-9" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/balcony-facade-large-9.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="balcony-facade-large-10" role="tabpanel" aria-labelledby="balcony-facade-small-10" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/balcony-facade-large-10.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="balcony-facade-large-11" role="tabpanel" aria-labelledby="balcony-facade-small-11" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/balcony-facade-large-11.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="balcony-facade-large-12" role="tabpanel" aria-labelledby="balcony-facade-small-12" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/balcony-facade-large-12.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="balcony-facade-large-13" role="tabpanel" aria-labelledby="balcony-facade-small-13" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/balcony-facade-large-13.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="balcony-facade-large-14" role="tabpanel" aria-labelledby="balcony-facade-small-14" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/balcony-facade-large-14.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="balcony-facade-large-15" role="tabpanel" aria-labelledby="balcony-facade-small-15" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/balcony-facade-large-16.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="balcony-facade-large-16" role="tabpanel" aria-labelledby="balcony-facade-small-16" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/balcony-facade-large-16.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Balcony gallery card end  -->

                    <!-- Bazar gallery card  -->
                    <div class="tab-pane fade" id="tab-the-bazaar" role="tabpanel" aria-labelledby="the-bazaar-tab-btn" tabindex="0">
                        <div class="row">
                            <div class="col-12 col-md-2 order-2 order-md-1">
                                <div class="swiper swiper-container">
                                    <div class="gallery-hr-div">
                                        <hr class="gallery-slider-hr-line">
                                    </div>
                                    <div class="swiper-wrapper" role="tablist" aria-orientation="vertical">
                                        <div class="swiper-slide balcony-gallery active bi" id="bazaar-small-1" data-bs-toggle="pill" data-bs-target="#bazaar-large-1"   role="tab" aria-controls="bazaar-large-1" aria-selected="true"><img loading="lazy" src="images/gallery/small/bazaar-small-1.jpg" alt=""></div>
                                        <div class="swiper-slide balcony-gallery bi" id="bazaar-small-2" data-bs-toggle="pill" data-bs-target="#bazaar-large-2"   role="tab" aria-controls="bazaar-large-2" aria-selected="false"><img loading="lazy" src="images/gallery/small/bazaar-small-2.jpg" alt=""></div>
                                        <div class="swiper-slide balcony-gallery bi" id="bazaar-small-3" data-bs-toggle="pill" data-bs-target="#bazaar-large-3"   role="tab" aria-controls="bazaar-large-3" aria-selected="false"><img loading="lazy" src="images/gallery/small/bazaar-small-3.jpg" alt=""></div>
                                    </div>
                                    <div class="gallery-hr-div">
                                        <hr class="gallery-slider-hr-line">
                                    </div>
                                    <div class="swiper-button-next navigation-btn-top"></div>
                                    <div class="swiper-button-prev navigation-btn-bottom"></div>

                                </div>

                            </div>
                            <div class="col-12 col-md-10 order-1 order-md-2">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="bazaar-large-1" role="tabpanel" aria-labelledby="bazaar-small-1" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/bazaar-large-1.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="bazaar-large-2" role="tabpanel" aria-labelledby="bazaar-small-2" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/bazaar-large-2.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="bazaar-large-3" role="tabpanel" aria-labelledby="bazaar-small-3" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/bazaar-large-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Bazar gallery card end  -->

                    <!-- club house card start  -->
                    <div class="tab-pane fade" id="tab-club-house" role="tabpanel" aria-labelledby="club-house-tab-btn" tabindex="0">
                        <div class="row">
                            <div class="col-12 col-md-2 order-2 order-md-1">
                                <div class="swiper swiper-container">
                                    <div class="gallery-hr-div">
                                        <hr class="gallery-slider-hr-line">
                                    </div>
                                    <div class="swiper-wrapper" role="tablist" aria-orientation="vertical">
                                        <div class="club-house-gallery swiper-slide active bi" id="club-house-small-1" data-bs-toggle="pill" data-bs-target="#club-house-large-1"   role="tab" aria-controls="club-house-large-1" aria-selected="true"><img loading="lazy" src="images/gallery/small/club-house-small-1.jpg" alt=""></div>
                                        <div class="club-house-gallery swiper-slide bi" id="club-house-small-2" data-bs-toggle="pill" data-bs-target="#club-house-large-2"   role="tab" aria-controls="club-house-large-2" aria-selected="false"><img loading="lazy" src="images/gallery/small/club-house-small-2.jpg" alt=""></div>
                                        <div class="club-house-gallery swiper-slide bi" id="club-house-small-3" data-bs-toggle="pill" data-bs-target="#club-house-large-3"   role="tab" aria-controls="club-house-large-3" aria-selected="false"><img loading="lazy" src="images/gallery/small/club-house-small-3.jpg" alt=""></div>
                                        <div class="club-house-gallery swiper-slide bi" id="club-house-small-4" data-bs-toggle="pill" data-bs-target="#club-house-large-4"   role="tab" aria-controls="club-house-large-4" aria-selected="false"><img loading="lazy" src="images/gallery/small/club-house-small-4.jpg" alt=""></div>


                                    </div>
                                    <div class="gallery-hr-div">
                                        <hr class="gallery-slider-hr-line">
                                    </div>
                                    <div class="swiper-button-next navigation-btn-top"></div>
                                    <div class="swiper-button-prev navigation-btn-bottom"></div>

                                </div>

                            </div>
                            <div class="col-12 col-md-10 order-1 order-md-2">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="club-house-large-1" role="tabpanel" aria-labelledby="club-house-small-1" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/club-house-large-1.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="club-house-large-2" role="tabpanel" aria-labelledby="club-house-small-2" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/club-house-large-2.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="club-house-large-3" role="tabpanel" aria-labelledby="club-house-small-3" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/club-house-large-3.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="club-house-large-4" role="tabpanel" aria-labelledby="club-house-small-4" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/club-house-large-4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- exterior card  -->
                    <div class="tab-pane fade" id="tab-exterior" role="tabpanel" aria-labelledby="exterior-tab-btn" tabindex="0">
                        <div class="row">
                            <div class="col-12 col-md-2 order-2 order-md-1">
                                <div class="swiper swiper-container">
                                    <div class="gallery-hr-div">
                                        <hr class="gallery-slider-hr-line">
                                    </div>
                                    <div class="swiper-wrapper" role="tablist" aria-orientation="vertical">
                                        <div class="exterior-gallery swiper-slide active bi" id="exterior-small-1" data-bs-toggle="pill" data-bs-target="#exterior-large-1"   role="tab" aria-controls="exterior-large-1" aria-selected="true"><img loading="lazy" src="images/gallery/small/exterior-small-1.jpg" alt=""></div>
                                        <div class="exterior-gallery swiper-slide bi" id="exterior-small-2" data-bs-toggle="pill" data-bs-target="#exterior-large-2"   role="tab" aria-controls="exterior-large-2" aria-selected="false"><img loading="lazy" src="images/gallery/small/exterior-small-2.jpg" alt=""></div>
                                        <div class="exterior-gallery swiper-slide bi" id="exterior-small-3" data-bs-toggle="pill" data-bs-target="#exterior-large-3"   role="tab" aria-controls="exterior-large-3" aria-selected="false"><img loading="lazy" src="images/gallery/small/exterior-small-3.jpg" alt=""></div>
                                        <div class="exterior-gallery swiper-slide bi" id="exterior-small-4" data-bs-toggle="pill" data-bs-target="#exterior-large-4"   role="tab" aria-controls="exterior-large-4" aria-selected="false"><img loading="lazy" src="images/gallery/small/exterior-small-4.jpg" alt=""></div>
                                        <div class="exterior-gallery swiper-slide bi" id="exterior-small-5" data-bs-toggle="pill" data-bs-target="#exterior-large-5"   role="tab" aria-controls="exterior-large-5" aria-selected="false"><img loading="lazy" src="images/gallery/small/exterior-small-5.jpg" alt=""></div>
                                        <div class="exterior-gallery swiper-slide bi" id="exterior-small-6" data-bs-toggle="pill" data-bs-target="#exterior-large-6"   role="tab" aria-controls="exterior-large-6" aria-selected="false"><img loading="lazy" src="images/gallery/small/exterior-small-6.jpg" alt=""></div>
                                        <div class="exterior-gallery swiper-slide bi" id="exterior-small-7" data-bs-toggle="pill" data-bs-target="#exterior-large-7"   role="tab" aria-controls="exterior-large-7" aria-selected="false"><img loading="lazy" src="images/gallery/small/exterior-small-7.jpg" alt=""></div>


                                    </div>
                                    <div class="gallery-hr-div">
                                        <hr class="gallery-slider-hr-line">
                                    </div>
                                    <div class="swiper-button-next navigation-btn-top"></div>
                                    <div class="swiper-button-prev navigation-btn-bottom"></div>

                                </div>

                            </div>
                            <div class="col-12 col-md-10 order-1 order-md-2">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="exterior-large-1" role="tabpanel" aria-labelledby="exterior-small-1" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/exterior-large-1.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="exterior-large-2" role="tabpanel" aria-labelledby="exterior-small-2" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/exterior-large-2.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="exterior-large-3" role="tabpanel" aria-labelledby="exterior-small-3" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/exterior-large-3.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="exterior-large-4" role="tabpanel" aria-labelledby="exterior-small-4" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/exterior-large-4.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="exterior-large-5" role="tabpanel" aria-labelledby="exterior-small-5" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/exterior-large-5.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="exterior-large-6" role="tabpanel" aria-labelledby="exterior-small-6" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/exterior-large-6.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="exterior-large-7" role="tabpanel" aria-labelledby="exterior-small-7" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/exterior-large-7.jpg" alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Landscape gallery tab  -->
                    <div class="tab-pane fade" id="tab-landscape" role="tabpanel" aria-labelledby="landscape-tab-btn" tabindex="0">
                        <div class="row">
                            <div class="col-12 col-md-2 order-2 order-md-1">
                                <div class="swiper swiper-container">
                                    <div class="gallery-hr-div">
                                        <hr class="gallery-slider-hr-line">
                                    </div>
                                    <div class="swiper-wrapper" role="tablist" aria-orientation="vertical">
                                        <div class="landscape-gallery swiper-slide active bi" id="landscape-small-1" data-bs-toggle="pill" data-bs-target="#landscape-large-1"   role="tab" aria-controls="landscape-large-1" aria-selected="true"><img loading="lazy" src="images/gallery/small/landscape-small-1.jpg" alt=""></div>
                                        <div class="landscape-gallery swiper-slide bi" id="landscape-small-2" data-bs-toggle="pill" data-bs-target="#landscape-large-2"   role="tab" aria-controls="landscape-large-2" aria-selected="false"><img loading="lazy" src="images/gallery/small/landscape-small-2.jpg" alt=""></div>
                                        <div class="landscape-gallery swiper-slide bi" id="landscape-small-3" data-bs-toggle="pill" data-bs-target="#landscape-large-3"   role="tab" aria-controls="landscape-large-3" aria-selected="false"><img loading="lazy" src="images/gallery/small/landscape-small-3.jpg" alt=""></div>
                                        <div class="landscape-gallery swiper-slide bi" id="landscape-small-4" data-bs-toggle="pill" data-bs-target="#landscape-large-4"   role="tab" aria-controls="landscape-large-4" aria-selected="false"><img loading="lazy" src="images/gallery/small/landscape-small-4.jpg" alt=""></div>
                                        <div class="landscape-gallery swiper-slide bi" id="landscape-small-5" data-bs-toggle="pill" data-bs-target="#landscape-large-5"   role="tab" aria-controls="landscape-large-5" aria-selected="false"><img loading="lazy" src="images/gallery/small/landscape-small-5.jpg" alt=""></div>
                                        <div class="landscape-gallery swiper-slide bi" id="landscape-small-6" data-bs-toggle="pill" data-bs-target="#landscape-large-6"   role="tab" aria-controls="landscape-large-6" aria-selected="false"><img loading="lazy" src="images/gallery/small/landscape-small-6.jpg" alt=""></div>
                                        <div class="landscape-gallery swiper-slide bi" id="landscape-small-7" data-bs-toggle="pill" data-bs-target="#landscape-large-7"   role="tab" aria-controls="landscape-large-7" aria-selected="false"><img loading="lazy" src="images/gallery/small/landscape-small-7.jpg" alt=""></div>
                                        <div class="landscape-gallery swiper-slide bi" id="landscape-small-8" data-bs-toggle="pill" data-bs-target="#landscape-large-8"   role="tab" aria-controls="landscape-large-8" aria-selected="false"><img loading="lazy" src="images/gallery/small/landscape-small-8.jpg" alt=""></div>
                                        <div class="landscape-gallery swiper-slide bi" id="landscape-small-9" data-bs-toggle="pill" data-bs-target="#landscape-large-9"   role="tab" aria-controls="landscape-large-9" aria-selected="false"><img loading="lazy" src="images/gallery/small/landscape-small-9.jpg" alt=""></div>
                                        <div class="landscape-gallery swiper-slide bi" id="landscape-small-10" data-bs-toggle="pill" data-bs-target="#landscape-large-10"   role="tab" aria-controls="landscape-large-10" aria-selected="false"><img loading="lazy" src="images/gallery/small/landscape-small-10.jpg" alt=""></div>
                                        <div class="landscape-gallery swiper-slide bi" id="landscape-small-11" data-bs-toggle="pill" data-bs-target="#landscape-large-11"   role="tab" aria-controls="landscape-large-11" aria-selected="false"><img loading="lazy" src="images/gallery/small/landscape-small-11.jpg" alt=""></div>
                                        <div class="landscape-gallery swiper-slide bi" id="landscape-small-12" data-bs-toggle="pill" data-bs-target="#landscape-large-12"   role="tab" aria-controls="landscape-large-12" aria-selected="false"><img loading="lazy" src="images/gallery/small/landscape-small-12.jpg" alt=""></div>
                                        <div class="landscape-gallery swiper-slide bi" id="landscape-small-13" data-bs-toggle="pill" data-bs-target="#landscape-large-13"   role="tab" aria-controls="landscape-large-13" aria-selected="false"><img loading="lazy" src="images/gallery/small/landscape-small-13.jpg" alt=""></div>
                                        <div class="landscape-gallery swiper-slide bi" id="landscape-small-14" data-bs-toggle="pill" data-bs-target="#landscape-large-14"   role="tab" aria-controls="landscape-large-14" aria-selected="false"><img loading="lazy" src="images/gallery/small/landscape-small-14.jpg" alt=""></div>
                                        <div class="landscape-gallery swiper-slide bi" id="landscape-small-15" data-bs-toggle="pill" data-bs-target="#landscape-large-15"   role="tab" aria-controls="landscape-large-15" aria-selected="false"><img loading="lazy" src="images/gallery/small/landscape-small-15.jpg" alt=""></div>
                                        <div class="landscape-gallery swiper-slide bi" id="landscape-small-16" data-bs-toggle="pill" data-bs-target="#landscape-large-16"   role="tab" aria-controls="landscape-large-16" aria-selected="false"><img loading="lazy" src="images/gallery/small/landscape-small-16.jpg" alt=""></div>
                                        <div class="landscape-gallery swiper-slide bi" id="landscape-small-17" data-bs-toggle="pill" data-bs-target="#landscape-large-17"   role="tab" aria-controls="landscape-large-17" aria-selected="false"><img loading="lazy" src="images/gallery/small/landscape-small-17.jpg" alt=""></div>
                                        <div class="landscape-gallery swiper-slide bi" id="landscape-small-18" data-bs-toggle="pill" data-bs-target="#landscape-large-18"   role="tab" aria-controls="landscape-large-18" aria-selected="false"><img loading="lazy" src="images/gallery/small/landscape-small-18.jpg" alt=""></div>
                                        <div class="landscape-gallery swiper-slide bi" id="landscape-small-19" data-bs-toggle="pill" data-bs-target="#landscape-large-19"   role="tab" aria-controls="landscape-large-19" aria-selected="false"><img loading="lazy" src="images/gallery/small/landscape-small-19.jpg" alt=""></div>
                                        <div class="landscape-gallery swiper-slide bi" id="landscape-small-20" data-bs-toggle="pill" data-bs-target="#landscape-large-20"   role="tab" aria-controls="landscape-large-20" aria-selected="false"><img loading="lazy" src="images/gallery/small/landscape-small-20.jpg" alt=""></div>
                                        <div class="landscape-gallery swiper-slide bi" id="landscape-small-21" data-bs-toggle="pill" data-bs-target="#landscape-large-21"   role="tab" aria-controls="landscape-large-21" aria-selected="false"><img loading="lazy" src="images/gallery/small/landscape-small-21.jpg" alt=""></div>
                                        <div class="landscape-gallery swiper-slide bi" id="landscape-small-22" data-bs-toggle="pill" data-bs-target="#landscape-large-22"   role="tab" aria-controls="landscape-large-22" aria-selected="false"><img loading="lazy" src="images/gallery/small/landscape-small-22.jpg" alt=""></div>
                                        <div class="landscape-gallery swiper-slide bi" id="landscape-small-23" data-bs-toggle="pill" data-bs-target="#landscape-large-23"   role="tab" aria-controls="landscape-large-23" aria-selected="false"><img loading="lazy" src="images/gallery/small/landscape-small-23.jpg" alt=""></div>

                                    </div>
                                    <div class="gallery-hr-div">
                                        <hr class="gallery-slider-hr-line">
                                    </div>
                                    <div class="swiper-button-next navigation-btn-top"></div>
                                    <div class="swiper-button-prev navigation-btn-bottom"></div>

                                </div>

                            </div>
                            <div class="col-12 col-md-10 order-1 order-md-2">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="landscape-large-1" role="tabpanel" aria-labelledby="landscape-small-1" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/landscape-large-1.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="landscape-large-2" role="tabpanel" aria-labelledby="landscape-small-2" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/landscape-large-2.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="landscape-large-3" role="tabpanel" aria-labelledby="landscape-small-3" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/landscape-large-3.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="landscape-large-4" role="tabpanel" aria-labelledby="landscape-small-4" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/landscape-large-4.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="landscape-large-5" role="tabpanel" aria-labelledby="landscape-small-5" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/landscape-large-5.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="landscape-large-6" role="tabpanel" aria-labelledby="landscape-small-6" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/landscape-large-6.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="landscape-large-7" role="tabpanel" aria-labelledby="landscape-small-7" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/landscape-large-7.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="landscape-large-8" role="tabpanel" aria-labelledby="landscape-small-8" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/landscape-large-8.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="landscape-large-9" role="tabpanel" aria-labelledby="landscape-small-9" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/landscape-large-9.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="landscape-large-10" role="tabpanel" aria-labelledby="landscape-small-10" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/landscape-large-10.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="landscape-large-11" role="tabpanel" aria-labelledby="landscape-small-11" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/landscape-large-11.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="landscape-large-12" role="tabpanel" aria-labelledby="landscape-small-12" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/landscape-large-12.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="landscape-large-13" role="tabpanel" aria-labelledby="landscape-small-13" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/landscape-large-13.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="landscape-large-14" role="tabpanel" aria-labelledby="landscape-small-14" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/landscape-large-14.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="landscape-large-15" role="tabpanel" aria-labelledby="landscape-small-15" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/landscape-large-15.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="landscape-large-16" role="tabpanel" aria-labelledby="landscape-small-16" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/landscape-large-16.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="landscape-large-17" role="tabpanel" aria-labelledby="landscape-small-17" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/landscape-large-17.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="landscape-large-18" role="tabpanel" aria-labelledby="landscape-small-18" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/landscape-large-18.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="landscape-large-19" role="tabpanel" aria-labelledby="landscape-small-19" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/landscape-large-19.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="landscape-large-20" role="tabpanel" aria-labelledby="landscape-small-20" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/landscape-large-20.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="landscape-large-21" role="tabpanel" aria-labelledby="landscape-small-21" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/landscape-large-21.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="landscape-large-22" role="tabpanel" aria-labelledby="landscape-small-22" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/landscape-large-22.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="landscape-large-23" role="tabpanel" aria-labelledby="landscape-small-23" tabindex="0">
                                        <img class="lazy" src="images/body/loading-img-for-lazyloading.jpg" data-src="images/gallery/large/landscape-large-23.jpg" alt="">
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        <!-- Gallery Tab Content Column End -->
        </div>
    </div>
</section>