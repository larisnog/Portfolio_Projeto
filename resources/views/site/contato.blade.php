@extends('layouts.website')

@section('styles')
<style type="text/css">
    
</style>
@endsection

@section('content')

<!-- Parallax header-->
    <section>
              <section class="section parallax-container context-dark" data-parallax-img="{{ url('images/contato_header.jpg') }}">
                <div class="parallax-content parallax-header">
                  <div class="parallax-header__inner context-dark">
                    <div class="parallax-header__content">
                      <div class="container">
                        <div class="row justify-content-sm-center">
                          <div class="col-md-10 col-xl-8">
                            <h2 class="heading-decorated">Contato</h2>
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
              <h4 class="heading-decorated">Detalhes de Contato</h4>
              <ul class="list-sm contact-info">
                <li>
                  <dl class="list-terms-inline">
                    <dt>Email</dt>
                    <dd>larissanogueira033@gmail.com</dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-inline">
                    <dt>WhatssApp</dt>
                    <dd>
                      <ul class="list-semicolon">
                        <li><a href="https://web.whatsapp.com/send?phone=5551996462689" target="_blank">+55 51 996462689</a></li>
                      </ul>
                    </dd>
                  </dl>
                </li>
                <li>
                  <ul class="list-inline-sm">
                    <li><a class="icon-sm fa-facebook icon" href="#"></a></li>
                    <li><a class="icon-sm fa-twitter icon" href="#"></a></li>
                    <li><a class="icon-sm fa-instagram icon" href="#"></a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="col-md-7 col-lg-8">
              <h4 class="heading-decorated">Mande uma Mensagem</h4>
              <!-- RD Mailform-->
              <form class="rd-mailform rd-mailform_style-1 form-shadow" method="POST" action="{{ url('/envio-contato') }}" id="form" onSubmit="return validar()">
                <div class="form-wrap form-wrap_icon linear-icon-man">
                  <input class="form-input" type="text" placeholder="Seu nome" id="name" name="name">
                </div>
                <div class="form-wrap form-wrap_icon linear-icon-envelope">
                  <input class="form-input" type="email" placeholder="Seu email" id="email" name="email">
                </div>
                <div class="form-wrap form-wrap_icon linear-icon-feather">
                  <textarea class="form-input" id="mensagem" placeholder="Sua mensagem" name="mensagem"></textarea>
                </div>
                <button class="button button-primary button-shadow" type="submit">enviar</button>
              </form>
            </div>
          </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
      function validar(){
        var nome = document.getElementById('name');

        if(nome.value == ""){
          alert("Preencha o campo Nome!");
          nome.focus();
          return false;
        }
        if(email.value == ""){
          alert("Preencha o campo Email!");
          email.focus();
          return false;
        }
        if(mensagem.value == ""){
          alert("Preencha o campo Mensagem!");
          mensagem.focus();
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

          var url = '{{ url('/envio-contato') }}';

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
              if(nome.value != '' && email.value != '' && mensagem.value != '' && response.status == true){
                alert("Mensagem enviada com sucesso!");
                nome.value = '';
                email.value = '';
                mensagem.value = '';
              }else if(response.status  == false){
                alert("Erro ao enviar mensagem, revise os campos informados!");
              }
            }
          });
          return false;
        });
      });
    </script>
@endsection