@extends('layouts.website')

@section('content')
                <div class="row">
                    <!-- banner topo -->
                    <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12 banner">
                        <figure><img src="{{asset($banners->imageSrc)}}" width="100%" height="100%" alt="{{asset($banners->imageSrc)}}"></figure>
                    </div>
                    <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
                        <div class="cont">
                            <h6><a href="index.html">HOME</a> / O GRUPO</h6>
                        </div>
                    </div>
    
                    <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
                        <div class="cont serv-intro">
                            <h1>{{$textIntro->title}}</h1>
                            {!! $textIntro->content !!}
                            <ul>

                                @foreach($links as $link)
                                <a href="{{$link->url}}" target="{{$link->target}}"><li>{{$link->text}}</li></a>
                                @endforeach
                            </ul>

                        </div>
                    </div>
                </div>
@endsection
@section('scripts')
@endsection