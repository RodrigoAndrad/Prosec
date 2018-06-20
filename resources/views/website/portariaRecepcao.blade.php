@extends('layouts.website')

@section('content')
<div class="row">
    <!-- banner topo -->
    <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12 banner">
        <figure><img src="{{asset($banners->imageSrc)}}" width="100%" height="100%" alt="{{$banners->imageAlt}}"></figure>
    </div>
    <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
        <div class="cont">
            <h6><a href="index.html">HOME</a> / <a href="servicos.html">SERVIÇOS</a> / PORTARIA, CONTROLADOR DE ACESSO E RECEPÇÃO</h6>
        </div>
    </div>
    <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
        <div class="cont serv-conteudo">
            <h1 class="subtit">{{$box->title}}</h1>
            <hr>
            {!!$box->content!!}
            
        </div>
    </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection
