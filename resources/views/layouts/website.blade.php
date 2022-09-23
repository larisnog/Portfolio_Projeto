<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{ url('/images/favicon.ico') }}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Fira+Sans:300,600,800,800i%7COpen+Sans:300,400,400i">
    <link rel="stylesheet" href="{{ url('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('/css/fonts.css') }}">

    @yield('styles')

  </head>
  <body>
  <header class="page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-stick-up-clone="false" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-md-stick-up-offset="115px" data-lg-stick-up-offset="35px">
            <!-- RD Navbar Top Panel-->
            <div class="rd-navbar-top-panel rd-navbar-top-panel-dark">
              <div class="rd-navbar-top-panel__main">
                <div class="rd-navbar-top-panel__toggle rd-navbar-fixed__element-1 rd-navbar-static--hidden" data-rd-navbar-toggle=".rd-navbar-top-panel__main"><span></span></div>
                <div class="rd-navbar-top-panel__content">
                  <div class="rd-navbar-top-panel__left">
                    <ul class="rd-navbar-items-list">
                      <li>
                        <div class="unit flex-row align-items-center unit-spacing-xs">
                          <div class="unit__left"><span class="icon icon-gray-darker fa-envelope-o fa-1x"></span></div>
                          <div class="unit__body">
                            <ul class="list-semicolon">
                                <p>larissanogueira033@gmail.com</p>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="unit flex-row align-items-center unit-spacing-xs">
                          <div class="unit__left"><span class="icon icon-gray-darker fa-whatsapp fa-lg"></span></div>
                          <div class="unit__body">
                            <ul class="list-semicolon">
                              <li><a href="">+55 51 996462689</a></li>
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
                      <li><a class="icon icon-xxs icon-gray-darker fa fa-instagram" href="#"></a></li>
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
                <div class="rd-navbar-brand"><a class="brand-name" href="index.html"><img src="images/logo.png" alt="" width="344" height="67"/></a></div>
              </div>
              <!-- RD Navbar Nav-->
              <div class="rd-navbar-nav-wrap rd-navbar-search_not-collapsable">
                <div class="rd-navbar-search_collapsable">
                  <ul class="rd-navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a>
                    </li>
                    <li><a href="{{ url('/portfolio') }}">Portfolio</a>
                    </li>
                    <li><a href="{{ url('/contato') }}">Contato</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      
      @yield('content')

      <!-- Page Footer-->
      <section class="pre-footer-corporate bg-image-7 bg-overlay-darkest">
        <div class="container">
          <div class="row justify-content-sm-center justify-content-lg-start row-30 row-md-60">
            <div class="col-sm-10 col-md-6 col-lg-10 col-xl-3">
              <h6>Sobre</h6>
              <p>Desenvolver sites é um hobby que pretendo manter por boa parte da minha vida, pois foi a área pela qual 
                eu mais me identifiquei durante meu curso técnico.</p>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-3 col-xl-3">
              <h6>Navigation</h6>
              <ul class="list-xxs">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                <li><a href="{{ url('/contato') }}">Contato</a></li>
              </ul>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-4 col-xl-3">
              <h6>Contato</h6>
              <ul class="list-xs">
                <li>
                  <dl class="list-terms-minimal">
                    <dt>Whatsapp</dt>
                    <dd>
                      <ul class="list-semicolon">
                        <li><a href="tel:#">+55 51 996462689</a></li>
                      </ul>
                    </dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-minimal">
                    <dt>E-mail</dt>
                    <dd><a href="mailto:#">larissanogueira033@gmail.com</a></dd>
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
            <p class="rights">&copy; 2022 Larissa Nogueira</p>
            <ul class="list-inline-xxs">
              <li><a class="icon icon-xxs icon-primary fa fa-facebook" href="#"></a></li>
              <li><a class="icon icon-xxs icon-primary fa fa-twitter" href="#"></a></li>
              <li><a class="icon icon-xxs icon-primary fa fa-instagram" href="#"></a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="{{ url('/js/core.min.js') }}"></script>
    <script src="{{ url('/js/script.js') }}"></script>

    @yield('scripts')

  </body>
</html>