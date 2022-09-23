@extends('layouts.website')

@section('styles')
<style type="text/css">
    
</style>
@endsection

@section('content')

<!-- Parallax header-->
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
    <section class="section-md bg-default decor-text" data-content="Contact">
        <div class="container">
          <div class="row row-50">
            <div class="col-md-5 col-lg-4">
              <h4 class="heading-decorated">Contact Details</h4>
              <ul class="list-sm contact-info">
                <li>
                  <dl class="list-terms-inline">
                    <dt>Address</dt>
                    <dd>4578 Marmora Road, Glasgow, D04 89GR</dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-inline">
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
                  <dl class="list-terms-inline">
                    <dt>Opening Hours</dt>
                    <dd>Mn-Fr: 10 am-8 pm</dd>
                  </dl>
                </li>
                <li>
                  <ul class="list-inline-sm">
                    <li><a class="icon-sm fa-facebook icon" href="#"></a></li>
                    <li><a class="icon-sm fa-twitter icon" href="#"></a></li>
                    <li><a class="icon-sm fa-google-plus icon" href="#"></a></li>
                    <li><a class="icon-sm fa-vimeo icon" href="#"></a></li>
                    <li><a class="icon-sm fa-youtube icon" href="#"></a></li>
                    <li><a class="icon-sm fa-pinterest-p icon" href="#"></a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="col-md-7 col-lg-8">
              <h4 class="heading-decorated">Get in Touch</h4>
              <!-- RD Mailform-->
              <form class="rd-mailform rd-mailform_style-1 form-shadow" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="form-wrap form-wrap_icon linear-icon-man">
                  <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                  <label class="form-label" for="contact-name">Your name</label>
                </div>
                <div class="form-wrap form-wrap_icon linear-icon-envelope">
                  <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-email">Your e-mail</label>
                </div>
                <div class="form-wrap form-wrap_icon linear-icon-feather">
                  <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                  <label class="form-label" for="contact-message">Your message</label>
                </div>
                <button class="button button-primary button-shadow" type="submit">send</button>
              </form>
            </div>
          </div>
        </div>
    </section>

@endsection
