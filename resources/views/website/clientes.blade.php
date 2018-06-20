@extends('layouts.website')

@section('content')
<div class="row">
    <section>
        <!-- banner topo -->
        <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12 banner">
            <figure><img src="{{asset($banners->imageSrc)}}" width="100%" height="100%" alt="{{asset($banners->imageSrc)}}"></figure>
        </div>
        <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
            <div class="cont serv-intro">
                <h6><a href="index.html">HOME</a> / <a href="grupo.html"> O GRUPO</a> / NOSSOS CLIENTES</h6>
                <h1>{{$textIntro->title}}</h1>
                <hr>
                {!! $textIntro->content !!}
            </div>
        </div>
        @foreach($logos as $logo)
        <div class="col-smart-6 col-tablet-4 col-laptop-2 col-desktop-2">
            <div class="cont serv-conteudo">
                <figure>
                    <img src="{{asset($logo->imageSrc)}}" width="100px" height="100px" alt="{{$logo->imageAlt}">
                </figure>
            </div>
        </div>
        @endforeach
    </section>
</div>
@endsection
@section('scripts')
@endsection