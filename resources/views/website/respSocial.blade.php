@extends('layouts.website')

@section('content')
                <div class="row">
                    <!-- banner topo -->
                    <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12 banner">
                        <figure><img src="{{$banners->imageSrc}}" width="100%" height="100%" alt="{{$banners->imageSrc}}"></figure>
                    </div>
                    <!-- texto introdutório -->
                    <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
                        <div class="cont serv-intro">
                            <h6><a href="index.html">HOME</a> / <a href="grupo.html"> O GRUPO</a> / RESPONSABILIDADE SOCIAL</h6>
                            <h1>{{$textIntro->title}}</h1>
                            <p>{!! $textIntro->content !!}</p>
                        </div>
                    </div>
                    <!-- boxes de ações sociais -->
                    @foreach($boxes as $key => $box)
                    <div @if($key < 2) class="col-smart-12 col-tablet-6 col-laptop-6 col-desktop-6" @else style="float: right; clear: left;" class="col-smart-12 col-tablet-4 col-laptop-4 col-desktop-4 " @endif>
                        <div class="cont serv-conteudo box-resp-social">
                            <figure>
                                <img src="{{$box->imageSrc}}" alt="$box->imageAlt" width="150px" height="150px">
                            </figure>
                            <h2>{{$box->title}}</h2>
                            <hr>
                            {!! $box->content !!}
                        </div>
                    </div>
                    @endforeach
                </div>
@endsection
@section('scripts')
@endsection
