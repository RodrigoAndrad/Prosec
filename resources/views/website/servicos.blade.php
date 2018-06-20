@extends('layouts.website')

@section('content')

<div class="row">
    <!-- banner topo -->
    <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12 banner">
        <figure><img src="{{asset($banners->imageSrc)}}" width="100%" height="100%" alt="Serviços"></figure>
    </div>
    <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
        <div class="cont serv-intro">
            <h6><a href="index.html">HOME</a> / SERVIÇOS</h6>
            <h1>Serviços</h1>
        </div>
    </div>
    <!-- box Links -->
    <div class="row link-desktop">
        @foreach($boxes as $box)
        <div class="col-smart-6 col-tablet-6 col-laptop-4 col-desktop-4">
            <a href="{{$box->link}}">
                <div class="cont box-serv">
                    <figure class="ico-serv">
                        <img src="{{asset($box->imageSrc[0])}}" width="50px" height="50px" alt="{{'asset($box->imageAlt[0])'}}"/>
                    </figure>
                    <div class="img-serv-bg img-serv-bg-box1" style="background-image: url('{{asset($box->imageSrc[1])}}')">
                        <h3>{{$box->title}}</h3>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    <div class="row lista-mobile">
        <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
            <div class="cont">
                <ul>
                    @foreach($boxes as $box)
                    <a href="{{$box->link}}"><li>{{$box->title}}</li></a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
</section> 
@endsection

@section('scripts')
@endsection
