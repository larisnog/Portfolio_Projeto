@extends('layouts.website')

@section('styles')
<style type="text/css">
    
</style>
@endsection

@section('content')

    <section>
        <section class="section parallax-container context-dark" data-parallax-img="images/parallax-1.jpg">
            <div class="parallax-content parallax-header">
                <div class="parallax-header__inner context-dark">
                    <div class="parallax-header__content">
                        <div class="container">
                            <div class="row justify-content-sm-center">
                                <div class="col-md-10 col-xl-8">
                                    <h2 class="heading-decorated">Contacts</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!-- portfolio-->
    <section class="section-md bg-default text-center">
        <div class="bg-decor d-flex align-items-center" data-parallax-scroll="{&quot;y&quot;: 50,  &quot;smoothness&quot;: 30}"><img src="{{ url('/images/bg-decor-6.png') }}" alt=""/>
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
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 2"><a class="img-thumbnail-variant-3" href="#"><img src="{{ url('/images/portfolio-5-418x315.jpg') }}" alt="" width="418" height="315"/><span class="label-custom label-white">Link</span>
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
                          <figure><img src="{{ url('/images/portfolio-2-418x315.jpg') }}" alt="" width="418" height="315"/>
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
                          <figure><img src="{{ url('/images/portfolio-9-418x315.jpg') }}" alt="" width="418" height="315"/>
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
                          <figure><img src="{{ url('/images/portfolio-4-418x315.jpg') }}" alt="" width="418" height="315"/>
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
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 1"><a class="img-thumbnail-variant-3" href="#"><img src="{{ url('/images/portfolio-1-418x315.jpg') }}" alt="" width="418" height="315"/><span class="label-custom label-white">Link</span>
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
                          <figure><img src="{{ url('/images/portfolio-6-418x315.jpg') }}" alt="" width="418" height="315"/>
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
                          <figure><img src="{{ url('/images/portfolio-7-418x315.jpg') }}" alt="" width="418" height="315"/>
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
                          <figure><img src="{{ url('/images/portfolio-8-418x315.jpg') }}" alt="" width="418" height="315"/>
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
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 1"><a class="img-thumbnail-variant-3" href="#"><img src="{{ url('/images/portfolio-3-418x315.jpg') }}" alt="" width="418" height="315"/><span class="label-custom label-white">Link</span>
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

@endsection