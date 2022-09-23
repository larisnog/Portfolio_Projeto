@extends('layouts.website')

@section('styles')
<style type="text/css">
    
</style>
@endsection

@section('content')

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
            <div class="swiper-slide-img" style="background-image: url(/images/fundo_slider.jpg);" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperSlideRotate&quot;, &quot;duration&quot;: 2000, &quot;delay&quot;: 600 }"></div>
            <div class="swiper-slide-caption text-center context-dark">
              <h1 data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentStack&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 500 }">Larissa Nogueira</h1>
              <div class="group-lg group-middle" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentStack&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 700 }"></div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-slide-img" style="background-image: url(/images/fundo_slider.jpg));" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperSlideRotate&quot;, &quot;duration&quot;: 2000, &quot;delay&quot;: 600 }"></div>
            <div class="swiper-slide-caption context-dark">
              <h2 data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentStack&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 500 }">Estudante &<br class="d-none d-lg-block">Desenvolvedora</h2>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev linear-icon-chevron-left"></div>
        <div class="swiper-button-next linear-icon-chevron-right"></div>
      </div>

      <!--features-->
      <!-- Our Features-->
      <section class="section-md bg-gray-lighter text-center decor-text" data-content="Services">
        <div class="container">
          <div class="row justify-content-lg-center"> 
            <div class="col-lg-10 col-xl-8">
              <h4 class="heading-decorated">Sobre mim</h4>
              <p>Me chamo Larissa Nogueira, tenho 19 anos e sou apaixonada por desenvolvimento web. Desenvolver sites
                é um hobby que pretendo manter por boa parte da minha vida, pois foi a área pela qual eu mais me identifiquei
                durante meu curso técnico. Sinta-se a vontade para dar uma olhada nos projetos que já desenvolvi e participei 
                durante minha jornada :)</p>
            </div>
          </div>
        </div>
      </section>
     
      <!-- portfolio-->
      <section class="section-md bg-default text-center">
        <div class="bg-decor d-flex align-items-center" data-parallax-scroll="{&quot;y&quot;: 50,  &quot;smoothness&quot;: 30}"><img src="{{ url('/images/bg-decor-6.png') }}" alt=""/>
        </div>
        <div class="container">
          <h4>Portfolio</h4>
          <h5 class="heading-decorated">Projetos Favoritos</h5>
          <div class="isotope-wrap row row-70">
            <div class="col-sm-12">
              <div class="isotope row" data-isotope-layout="fitRows">
                <div class="col-12 col-md-6 col-lg-4 isotope-item"><a class="img-thumbnail-variant-3" href="{{ url('/images/maes_portfolio_zoom.jpg') }}" data-lightgallery="item">
                          <figure><img src="{{ url('/images/maes_portfolio.jpg') }}" alt="" width="418" height="315"/>
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
                <div class="col-12 col-md-6 col-lg-4 isotope-item"><a class="img-thumbnail-variant-3" href="{{ url('/images/yakso_portfolio_zoom.jpg') }}" data-lightgallery="item">
                          <figure><img src="{{ url('/images/yakso_portfolio.jpg') }}" alt="" width="418" height="315"/>
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
                <div class="col-12 col-md-6 col-lg-4 isotope-item"><a class="img-thumbnail-variant-3" href="{{ url('/images/efenge_portfolio_zoom.jpg') }}" data-lightgallery="item">
                          <figure><img src="{{ url('/images/efenge_portfolio.jpg') }}" alt="" width="418" height="315"/>
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
              </div>
            </div>
          </div>
        </div>
      </section>
    
@endsection
