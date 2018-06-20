@extends('layouts.website')

@section('content')
                <div class="row">
                    <!-- banner topo -->
                    <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12 banner">
                        <figure><img src="{{asset($banners->imageSrc)}}" width="100%" height="100%" alt="{{asset($banners->imageSrc)}}"></figure>
                    </div>
                    <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
                        <div class="cont">
                            <h6><a href="index.html">HOME</a> / <a href="grupo.html"> O GRUPO</a> / CONHEÇA</h6>
                            <h1>{{$pageTitle->title}}</h1>
                        </div>
                    </div>
                    
                    <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
                        <div class="cont serv-conteudo">
                            <h2>{{$textIntro->title}}</h2>
                            <hr>
                            {!! $textIntro->content !!}
                        </div>
                    </div>
                    <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
                        <div class="cont serv-conteudo">
                        @foreach($texts as $text)        
                            <h2>{{$text->title}}</h2>
                            <hr>
                            {!! $text->content !!}
                        @endforeach
                        </div>
                    </div>
                    <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
                        <div class="cont serv-intro">
                            <h2>{{$textIntroBox3->title}}</h2>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                    @foreach($certs as $cert)
                        @if(!empty($cert->imageSrc))  
                        <div class="row">
                            <div class="col-smart-12 col-tablet-12 col-laptop-2 col-desktop-2">
                                <div class="cont serv-intro">
                                    <figure>
                                        <img src="{{$cert->imageSrc}}" alt="{{$cert->imageAlt}}" width="100px" height="100px">
                                    </figure>
                                </div>
                            </div>
                        @endif
                        @if(!empty($cert->content))
                            <div class="col-smart-12 col-tablet-12 col-laptop-10 col-desktop-10">
                                <div class="cont serv-intro">
                                    <h3>{{$cert->title}}</h3>
                                    <hr>
                                    {!!$cert->content!!}
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
            </div>
        </div>            
@endsection
@section('scripts')
@endsection