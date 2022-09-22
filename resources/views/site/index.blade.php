<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{ url('/assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Fira+Sans:300,600,800,800i%7COpen+Sans:300,400,400i">
    <link rel="stylesheet" href="{{ url('/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/fonts.css') }}">
  </head>
  <body>
    <!-- Page-->
      <header class="page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar_transparent rd-navbar_boxed" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-stick-up-clone="false" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-md-stick-up-offset="115px" data-lg-stick-up-offset="35px" data-body-class="rd-navbar-absolute">
            <!-- RD Navbar Top Panel-->
            <div class="rd-navbar-top-panel">
              <div class="rd-navbar-top-panel__main">
                <div class="rd-navbar-top-panel__toggle rd-navbar-fixed__element-1 rd-navbar-static--hidden" data-rd-navbar-toggle=".rd-navbar-top-panel__main"><span></span></div>
                <div class="rd-navbar-top-panel__content">
                  <div class="rd-navbar-top-panel__left">
                    <ul class="rd-navbar-items-list">
                      <li>
                        <div class="unit flex-row align-items-center unit-spacing-xs">
                          <div class="unit__left"><span class="icon icon-sm icon-primary linear-icon-map-marker"></span></div>
                          <div class="unit__body">
                            <p><a href="#">Address: 4578 Marmora Road, Glasgow, D04 89GR</a></p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="unit flex-row align-items-center unit-spacing-xs">
                          <div class="unit__left"><span class="icon icon-sm icon-primary linear-icon-telephone"></span></div>
                          <div class="unit__body">
                            <ul class="list-semicolon">
                              <li><a href="tel:#">(800) 123-0045</a></li>
                              <li><a href="tel:#">(800) 123-0045</a></li>
                            </ul>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="rd-navbar-top-panel__right">
                    <ul class="list-inline-xxs">
                      <li><a class="icon icon-xxs icon-gray-darker fa fa-facebook" href="#"></a></li>
                      <li><a class="icon icon-xxs icon-gray-darker fa fa-twitter" href="#"></a></li>
                      <li><a class="icon icon-xxs icon-gray-darker fa fa-google-plus" href="#"></a></li>
                      <li><a class="icon icon-xxs icon-gray-darker fa fa-vimeo" href="#"></a></li>
                      <li><a class="icon icon-xxs icon-gray-darker fa fa-youtube" href="#"></a></li>
                      <li><a class="icon icon-xxs icon-gray-darker fa fa-pinterest-p" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="rd-navbar-inner rd-navbar-search-wrap">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel rd-navbar-search-lg_collapsable">
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand-name" href="index.html"><img src="{{ url('/assets/images/logo-344x67.png') }}" alt="" width="172" height="33"/></a></div>
              </div>
              <!-- RD Navbar Nav-->
              <div class="rd-navbar-nav-wrap rd-navbar-search_not-collapsable">
                <div class="rd-navbar-search_collapsable">
                  <ul class="rd-navbar-nav">
                    <li class="active"><a href="index.html">Home</a>
                    </li>
                    <li><a href="about.html">About</a>
                    </li>
                    <li><a href="typography.html">Typography</a>
                    </li>
                    <li><a href="contacts.html">Contacts</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper-->
      <svg class="defs">
        <defs>
          <lineargradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="50%" stop-color="#AA54ED">
              <animate attributename="stop-color" values="#AA54ED; #5348E2; #AA54ED" dur="5s" repeatcount="indefinite"></animate>
            </stop>
            <stop offset="100%" stop-color="#5348E2">
              <animate attributename="stop-color" values="#5348E2; #AA54ED; #5348E2" dur="5s" repeatcount="indefinite"></animate>
            </stop>
          </lineargradient>
        </defs>
      </svg>
      <div class="swiper-container swiper-slider" data-effect="frame-trapeze" data-loop="true" data-autoplay="5500" data-speed="1200" data-mousewheel="false" data-keyboard="true" data-frame-fill="url(#gradient1)">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="swiper-slide-img" style="background-image: url(images/slider-slide-5-1920x1280.jpg);" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperSlideRotate&quot;, &quot;duration&quot;: 2000, &quot;delay&quot;: 600 }"></div>
            <div class="swiper-slide-caption text-center context-dark">
              <h1 data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentStack&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 500 }">Element</h1>
              <h3 data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentStack&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 600 }">New HTML Templates Generation</h3>
              <div class="group-lg group-middle" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentStack&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 700 }"></div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-slide-img" style="background-image: url(images/slider-slide-6-1920x986.jpg);" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperSlideRotate&quot;, &quot;duration&quot;: 2000, &quot;delay&quot;: 600 }"></div>
            <div class="swiper-slide-caption context-dark">
              <h2 data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentStack&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 500 }">The Power of Bootstrap<br class="d-none d-lg-block"> Discover it with Element</h2>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-slide-img" style="background-image: url(images/slider-slide-7-1920x1080.jpg);" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperSlideRotate&quot;, &quot;duration&quot;: 2000, &quot;delay&quot;: 600 }"></div>
            <div class="swiper-slide-caption context-dark">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-7">
                    <h2 data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentStack&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 500 }">Built by geeks & used by humans</h2>
                    <h5 class="text-width-2 block-centered" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentStack&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 600 }">Element aims to satisfy real needs of real projects. We've got a pack of tools for that.</h5>
                    <div class="group-lg group-middle" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentStack&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 700 }"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev linear-icon-chevron-left"></div>
        <div class="swiper-button-next linear-icon-chevron-right"></div>
      </div>
     
      <!-- portfolio-->
      <section class="section-md bg-default text-center">
        <div class="bg-decor d-flex align-items-center" data-parallax-scroll="{&quot;y&quot;: 50,  &quot;smoothness&quot;: 30}"><img src="{{ url('/assets/images/bg-decor-6.png') }}" alt=""/>
        </div>
        <div class="container">
          <h4 class="heading-decorated">Portfolio</h4>
          <div class="isotope-wrap row row-70">
            <div class="col-sm-12">
              <ul class="list-nav isotope-filters isotope-filters-horizontal">
                <li><a class="active" data-isotope-filter="*" data-isotope-group="gallery" href="#">All</a></li>
                <li><a data-isotope-filter="Category 1" data-isotope-group="gallery" href="#">Web Design</a></li>
                <li><a data-isotope-filter="Category 2" data-isotope-group="gallery" href="#">Web Development</a></li>
              </ul>
              <div class="isotope row" data-isotope-layout="fitRows" data-isotope-group="gallery">
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 2"><a class="img-thumbnail-variant-3" href="#"><img src="{{ url('/assets/images/portfolio-5-418x315.jpg') }}" alt="" width="418" height="315"/><span class="label-custom label-white">Link</span>
                          <div class="caption"><span class="icon hover-top-element linear-icon-folder-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>9 photos</li>
                              <li>Web Development</li>
                            </ul>
                            <p class="heading-5 hover-top-element">Peterson Ltd.</p>
                            <div class="divider"></div>
                            <p class="small hover-bottom-element">Creative projects &amp; ideas</p><span class="icon arrow-right linear-icon-arrow-right"></span>
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 1"><a class="img-thumbnail-variant-3" href="images/slider-slide-14-1280x1920.jpg" data-lightgallery="item">
                          <figure><img src="{{ url('/assets/images/portfolio-2-418x315.jpg') }}" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>Web Design</li>
                            </ul>
                            <p class="heading-5 hover-top-element">Kreative Co.</p>
                            <div class="divider"></div>
                            <p class="small hover-bottom-element">Creative projects &amp; ideas</p><span class="icon arrow-right linear-icon-plus"></span>
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 2"><a class="img-thumbnail-variant-3" href="images/portfolio-original-9-1920x1282.jpg" data-lightgallery="item">
                          <figure><img src="{{ url('/assets/images/portfolio-9-418x315.jpg') }}" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>Web Development</li>
                            </ul>
                            <p class="heading-5 hover-top-element">Architex</p>
                            <div class="divider"></div>
                            <p class="small hover-bottom-element">Creative projects &amp; ideas</p><span class="icon arrow-right linear-icon-plus"></span>
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 1"><a class="img-thumbnail-variant-3" href="images/portfolio-original-4-1920x1920.jpg" data-lightgallery="item">
                          <figure><img src="{{ url('/assets/images/portfolio-4-418x315.jpg') }}" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>Web Design</li>
                            </ul>
                            <p class="heading-5 hover-top-element">Colorful Studios</p>
                            <div class="divider"></div>
                            <p class="small hover-bottom-element">Creative projects &amp; ideas</p><span class="icon arrow-right linear-icon-plus"></span>
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 1"><a class="img-thumbnail-variant-3" href="#"><img src="{{ url('/assets/images/portfolio-1-418x315.jpg') }}" alt="" width="418" height="315"/><span class="label-custom label-white">Link</span>
                          <div class="caption"><span class="icon hover-top-element linear-icon-folder-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>9 photos</li>
                              <li>Web Design</li>
                            </ul>
                            <p class="heading-5 hover-top-element">BlueLine</p>
                            <div class="divider"></div>
                            <p class="small hover-bottom-element">Creative projects &amp; ideas</p><span class="icon arrow-right linear-icon-arrow-right"></span>
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 2"><a class="img-thumbnail-variant-3" href="images/portfolio-original-6-1920x1539.jpg" data-lightgallery="item">
                          <figure><img src="{{ url('/assets/images/portfolio-6-418x315.jpg') }}" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>Web Development</li>
                            </ul>
                            <p class="heading-5 hover-top-element">EOC Ltd.</p>
                            <div class="divider"></div>
                            <p class="small hover-bottom-element">Creative projects &amp; ideas</p><span class="icon arrow-right linear-icon-plus"></span>
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 2"><a class="img-thumbnail-variant-3" href="images/portfolio-original-7-1280x1920.jpg" data-lightgallery="item">
                          <figure><img src="{{ url('/assets/images/portfolio-7-418x315.jpg') }}" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>Web Development</li>
                            </ul>
                            <p class="heading-5 hover-top-element">SlabTek Inc.</p>
                            <div class="divider"></div>
                            <p class="small hover-bottom-element">Creative projects &amp; ideas</p><span class="icon arrow-right linear-icon-plus"></span>
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 2"><a class="img-thumbnail-variant-3" href="images/portfolio-original-8-1920x1336.jpg" data-lightgallery="item">
                          <figure><img src="{{ url('/assets/images/portfolio-8-418x315.jpg') }}" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>Web Development</li>
                            </ul>
                            <p class="heading-5 hover-top-element">TSB Studios</p>
                            <div class="divider"></div>
                            <p class="small hover-bottom-element">Creative projects &amp; ideas</p><span class="icon arrow-right linear-icon-plus"></span>
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 1"><a class="img-thumbnail-variant-3" href="#"><img src="{{ url('/assets/images/portfolio-3-418x315.jpg') }}" alt="" width="418" height="315"/><span class="label-custom label-white">Link</span>
                          <div class="caption"><span class="icon hover-top-element linear-icon-folder-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>9 photos</li>
                              <li>Web Design</li>
                            </ul>
                            <p class="heading-5 hover-top-element">R-Bay Ltd.</p>
                            <div class="divider"></div>
                            <p class="small hover-bottom-element">Creative projects &amp; ideas</p><span class="icon arrow-right linear-icon-arrow-right"></span>
                          </div></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
      <!-- Page Footer-->
      <section class="pre-footer-corporate bg-image-7 bg-overlay-darkest">
        <div class="container">
          <div class="row justify-content-sm-center justify-content-lg-start row-30 row-md-60">
            <div class="col-sm-10 col-md-6 col-lg-10 col-xl-3">
              <h6>About</h6>
              <p>Element is HTML template that fits for both developers and beginners. It comes loaded with an assortment of tools and features that make customization process much easier. A pack of child themes available with the full version of this template, allows users to create a fully functional site for any specific business quickly and worry-free.</p>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-3 col-xl-3">
              <h6>Navigation</h6>
              <ul class="list-xxs">
                <li><a href="about.html">About</a></li>
                <li><a href="#">Why Choose Us</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Our Partners</a></li>
              </ul>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-5 col-xl-3">
              <h6>Recent Comments</h6>
              <ul class="list-xs">
                <li>
                  <!-- Comment minimal-->
                  <article class="comment-minimal">
                    <p class="comment-minimal__author">Brian Williamson on</p>
                    <p class="comment-minimal__link"><a href="#">Site Speed and Search Engines Optimization Aspects</a></p>
                  </article>
                </li>
                <li>
                  <!-- Comment minimal-->
                  <article class="comment-minimal">
                    <p class="comment-minimal__author">Brian Williamson on</p>
                    <p class="comment-minimal__link"><a href="#">5 Things to Know Before You Buy an HTML Template</a></p>
                  </article>
                </li>
                <li>
                  <!-- Comment minimal-->
                  <article class="comment-minimal">
                    <p class="comment-minimal__author">Brian Williamson on</p>
                    <p class="comment-minimal__link"><a href="#">Turning Your Site into a Sales Machine</a></p>
                  </article>
                </li>
              </ul>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-4 col-xl-3">
              <h6>Contacts</h6>
              <ul class="list-xs">
                <li>
                  <dl class="list-terms-minimal">
                    <dt>Address</dt>
                    <dd>4578 Marmora Road, Glasgow, D04 89GR</dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-minimal">
                    <dt>Phones</dt>
                    <dd>
                      <ul class="list-semicolon">
                        <li><a href="tel:#">(800) 123-0045</a></li>
                        <li><a href="tel:#">(800) 123-0045</a></li>
                      </ul>
                    </dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-minimal">
                    <dt>E-mail</dt>
                    <dd><a href="mailto:#">info@demolink.org</a></dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-minimal">
                    <dt>Opening Hours:</dt>
                    <dd>Mn-Fr: 10 am-8 pm</dd>
                  </dl>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <footer class="footer-corporate bg-gray-darkest">
        <div class="container">
          <div class="footer-corporate__inner">
            <p class="rights"><span>Element</span><span>&nbsp;</span><span class="copyright-year"></span>. All Rights Reserved. Design by <a href="https://www.templatemonster.com">TemplateMonster</a></p>
            <ul class="list-inline-xxs">
              <li><a class="icon icon-xxs icon-primary fa fa-facebook" href="#"></a></li>
              <li><a class="icon icon-xxs icon-primary fa fa-twitter" href="#"></a></li>
              <li><a class="icon icon-xxs icon-primary fa fa-google-plus" href="#"></a></li>
              <li><a class="icon icon-xxs icon-primary fa fa-vimeo" href="#"></a></li>
              <li><a class="icon icon-xxs icon-primary fa fa-youtube" href="#"></a></li>
              <li><a class="icon icon-xxs icon-primary fa fa-pinterest" href="#"></a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="{{ url('/assets/js/core.min.js') }}"></script>
    <script src="{{ url('/assets/js/script.js') }}"></script>
  </body>
</html>