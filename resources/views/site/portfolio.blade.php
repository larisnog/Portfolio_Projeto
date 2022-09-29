@extends('layouts.website')

@section('styles')
<style type="text/css">
    
</style>
@endsection

@section('content')

    <section>
        <section class="section parallax-container context-dark" data-parallax-img="{{ url('images/portfolio_header.jpg') }}">
            <div class="parallax-content parallax-header">
                <div class="parallax-header__inner context-dark">
                    <div class="parallax-header__content">
                        <div class="container">
                            <div class="row justify-content-sm-center">
                                <div class="col-md-10 col-xl-8">
                                    <h2 class="heading-decorated">Portfolio</h2>
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
          <h4 class="heading-decorated">Projetos</h4>
          <div class="isotope-wrap row row-70">
            <div class="col-sm-12">
              <ul class="list-nav isotope-filters isotope-filters-horizontal">
                <li><a class="active" data-isotope-filter="*" data-isotope-group="gallery" href="#">Todos</a></li>
                <li><a data-isotope-filter="Category 1" data-isotope-group="gallery" href="#">Design Web</a></li>
                <li><a data-isotope-filter="Category 2" data-isotope-group="gallery" href="#">Sites</a></li>
              </ul>
              <div class="isotope row" data-isotope-layout="fitRows" data-isotope-group="gallery">
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 2"><a class="img-thumbnail-variant-3" href="{{ url('images/maah-music_zoom.jpg') }}" data-lightgallery="item">
                          <figure><img src="{{ url('/images/maah-music_portfolio.png') }}" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>Site</li>
                            </ul>
                            <p class="heading-5 hover-top-element">Maah Music</p>
                            <div class="divider"></div>
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 1"><a class="img-thumbnail-variant-3" href="{{ url('images/she-rocks_zoom.jpg') }}" data-lightgallery="item">
                          <figure><img src="{{ url('/images/she-rocks_portfolio.png') }}" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>Design Web</li>
                            </ul>
                            <p class="heading-5 hover-top-element">She Rocks At Coolege</p>
                            <div class="divider"></div>
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 2"><a class="img-thumbnail-variant-3" href="{{ url('images/nacao-musica_zoom.jpg') }}" data-lightgallery="item">
                          <figure><img src="{{ url('/images/nacao-musica_portfolio.png') }}" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>Site</li>
                            </ul>
                            <p class="heading-5 hover-top-element">Nação da Música</p>
                            <div class="divider"></div>
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 2"><a class="img-thumbnail-variant-3" href="{{ url('images/efenge_zoom.jpg') }}" data-lightgallery="item">
                          <figure><img src="{{ url('/images/efenge_portfolio.png') }}" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>Site</li>
                            </ul>
                            <p class="heading-5 hover-top-element">Efenge Engenharia</p>
                            <div class="divider"></div>
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 1"><a class="img-thumbnail-variant-3" href="{{ url('images/fraga-advocacia_zoom.jpg') }}" data-lightgallery="item">
                          <figure><img src="{{ url('/images/fraga-advocacia_portfolio.png') }}" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>Design Web</li>
                            </ul>
                            <p class="heading-5 hover-top-element">S Fraga Advocacia</p>
                            <div class="divider"></div>
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 2"><a class="img-thumbnail-variant-3" href="{{ url('images/palco-digital_zoom.jpg') }}" data-lightgallery="item">
                          <figure><img src="{{ url('/images/palco-digital_portfolio.png') }}" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>Site</li>
                            </ul>
                            <p class="heading-5 hover-top-element">Palco Digital</p>
                            <div class="divider"></div>
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 2"><a class="img-thumbnail-variant-3" href="{{ url('images/yakso_zoom.jpg') }}" data-lightgallery="item">
                          <figure><img src="{{ url('/images/yakso_portfolio.png') }}" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>Site</li>
                            </ul>
                            <p class="heading-5 hover-top-element">Yakso Tecnologia</p>
                            <div class="divider"></div>
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 2"><a class="img-thumbnail-variant-3" href="{{ url('images/maes_zoom.jpg') }}" data-lightgallery="item">
                          <figure><img src="{{ url('/images/maes_portfolio.png') }}" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>Site</li>
                            </ul>
                            <p class="heading-5 hover-top-element">Mães de Joelhos Filhos em Pé</p>
                            <div class="divider"></div>
                          </div></a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="section-md bg-gray-lighter text-center decor-text">
        <div class="container">
          <div class="row justify-content-lg-center"> 
            <div class="col-lg-10 col-xl-8 comentarios">
              <h4 class="heading-decorated">Comentários da página</h4>
                  @foreach($comentarios as $comentario)
                  <?php
                    setlocale(LC_ALL, 'pt_Br', 'pt_BR.utf-8', 'pt_Br.utf-8', 'portuguese');
                    $comentario->data_coment;
                    $data_coment = strftime('%d de %B de %Y às %Hh%M', strtotime($comentario->data_coment));
                  ?>
                  <p class="name">{{ $comentario->nome }}</p>
                  <p class="date">Em {{ $data_coment }}</p>
                  <p class="coment">{{ $comentario->comentario }}</p>
                  @endforeach
            </div>
          </div>
        </div>
      </section>

    <section class="section-md bg-default text-center">
      <div class="col-md-7 col-lg-8 coments">
          <h4 class="heading-decorated">Escreva um comentário também</h4>
            <!-- RD Mailform-->
            <form class="rd-mailform rd-mailform_style-1 form-shadow" method="POST" action="{{ url('/envio-comentario') }}" id="form" onSubmit="return validar()">
              <div class="form-wrap form-wrap_icon linear-icon-man">
                <input class="form-input" type="text" placeholder="Seu nome" id="name" name="name">
              </div>
              <div class="form-wrap form-wrap_icon linear-icon-envelope">
                <input class="form-input" type="email" placeholder="Seu email" id="email" name="email">
              </div>
              <div class="form-wrap form-wrap_icon linear-icon-feather">
                <textarea class="form-input" id="comentario" placeholder="Seu comentário" name="comentario"></textarea>
              </div>
              <button class="button button-primary button-shadow" type="submit">enviar</button>
            </form>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
      function validar(){
        var nome = document.getElementById('name');

        if(nome.value == ""){
          alert("Preencha o campo Nome");
          nome.focus();
          return false;
        }
        if(email.value == ""){
          alert("Preencha o campo Email");
          email.focus();
          return false;
        }
        if(comentario.value == ""){
          alert("Preencha o campo Comentário");
          comentario.focus();
          return false;
        }
        return true;
      }
    </script>

    <script>
      $(document).ready(function(){
        $('#form').submit(function(e){

          e.preventDefault();

          var dados = $(this).serialize();

          var url = '{{ url('/envio-comentario') }}';

          var nome = document.getElementById('name');

       $.ajax({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: 'POST',
            data: dados,
            success: function(response){
              console.log(response);
              if(nome.value != '' && email.value != '' && comentario.value != '' && response.status == true){
                alert("Comentário enviado com sucesso!");
                nome.value = '';
                email.value = '';
                comentario.value = '';
              }else if(response.status  == false){
                alert("Erro ao enviar comentário, revise os campos informados!");
              }
            }
          });
          return false;
        });
      });
    </script>
@endsection