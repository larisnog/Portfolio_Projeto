@extends('layouts.website')

@section('styles')
<style type="text/css">
    
</style>
@endsection

@section('content')
      <!-- Parallax header-->
      <section>
        <section class="section parallax-container context-dark" data-parallax-img="{{ url('images/artigos_header.jpg') }}">
          <div class="parallax-content parallax-header">
            <div class="parallax-header__inner context-dark">
              <div class="parallax-header__content">
                <div class="container">
                  <div class="row justify-content-sm-center">
                    <div class="col-md-10 col-xl-8">
                      <h2 class="heading-decorated">Artigos</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>

      <div class="section-sm section-divided">
        <div class="container">
          <div class="row row-50 row-md-75">
            <div class="col-lg-8 section-divided__main">
              <!-- Left aligned image-->
              @foreach($artigos as $artigo)
              <?php
                    setlocale(LC_ALL, 'pt_Br', 'pt_BR.utf-8', 'pt_Br.utf-8', 'portuguese');
                    $artigo->data;
                    $data = strftime('%d de %B de %Y', strtotime($artigo->data));
                  ?>
              <section class="section-sm">
                  <h5>{{ $artigo->titulo }}</h5>
                  <div class="post-inline__header"><span class="post-inline__time">{{ $data }}</span><a class="post-inline__author meta-author" href="#">{{ $artigo->autor }}</a></div>
                  <div class="row flex-md-row-reverse row-30">
                    <div class="col-md-6 conteudo conteudo-artigo">
                      <p>{!! $artigo->conteudo !!}</p>
                    </div>
                    <div class="col-md-6 conteudo conteudo-imagem">
                      <figure class="figure"><img src="{{ url('images/'.$artigo->imagem_red) }}" alt="" width="1500" height="1000"/>
                      </figure>
                    </div>
                  </div>
              @endforeach
              </section>
            </div>
          </div>
        </div>
      </div>

      
@endsection