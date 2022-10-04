@extends('layouts.website')

@section('styles')
<style type="text/css">

</style>
@endsection

@section('content')
    <?php
        setlocale(LC_ALL, 'pt_Br', 'pt_BR.utf-8', 'pt_Br.utf-8', 'portuguese');
        $post->data;
        $data = strftime('%d de %B de %Y', strtotime($post->data));
    ?>
    <div class="section-sm section-divided">
        <div class="container">
            <div class="row row-50 row-md-75">
                <div class="col-lg-8 section-divided__main">
                    <!-- Large image should always fit-->
                    <section class="section-sm post">
                        <h5>{{ $post->titulo }}</h5>
                        <div class="post-inline__header post-info"><span class="post-inline__time">{{ $data }}</span><a class="post-inline__author meta-author" href="#">{{ $post->autor }}</a></div>
                        <figure class="figure"><img src="{{ url('images/'.$post->imagem) }}" alt="" width="1500" height="1000"/>
                        </figure>
                        <p>{!! $post->conteudo !!}</p>
                </section>
                </div>
            </div>
        </div>
    </div>
@endsection