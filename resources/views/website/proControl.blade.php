@extends('layouts.website')

@section('content')
                <div class="row">
                    <!-- banner topo -->
                    <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12 banner">
                        <figure><img src="{{asset($banners->imageSrc)}}" width="100%" height="100%" alt="{{asset($banners->imageSrc)}}"></figure>
                    </div>
                    <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
                        <div class="cont">
                            <h6><a href="index.html">HOME</a> / <a href="sercos.html">SERVIÇOS</a> / SEGURANÇA ELETRÔNICA</h6>
                        </div>
                    </div>
    
                    <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
                        <div class="cont serv-intro">
                            <h1>{{$textIntro->title}}</h1>
                            {!! $textIntro->content !!}
                        </div>
                    </div>
                    @foreach($boxes as $box)
                    <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
                        <div class="cont serv-conteudo">
                            <div id="box{{$box->id}}More" class="boxMore"></div>
                            <h2>{{$box->title}}</h2>
                            <hr>
                            <div id="box{{$box->id}}Content">
                                {!! $box->content !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($links as $link)
                    <div class="serv-intro">
                        <h3><a href="{{$link->link}}" target="blank"> {{$link->text}}</a><br>
                        E Saiba Mais</h3><br>
                    </div>
                    @endforeach
                </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(function()
        {
            $('#box1More').click(function()
            {
                $('#box1Content').slideToggle("slow");
                
                if( $('#box1More').hasClass('boxMore') )
                {
                    $('#box1More').removeClass("boxMore");
                    $('#box1More').addClass("boxLess");
                }
                else if( $('#box1More').hasClass("boxLess") )
                {
                    $('#box1More').removeClass("boxLess");
                    $('#box1More').addClass("boxMore");
                }
            });

            $('#box2More').click(function()
            {
                $('#box2Content').slideToggle("slow");
                
                if( $('#box2More').hasClass('boxMore') )
                {
                    $('#box2More').removeClass("boxMore");
                    $('#box2More').addClass("boxLess");
                }
                else if( $('#box2More').hasClass("boxLess") )
                {
                    $('#box2More').removeClass("boxLess");
                    $('#box2More').addClass("boxMore");
                }
            });

            $('#box3More').click(function()
            {
                $('#box3Content').slideToggle("slow");
                
                if( $('#box3More').hasClass('boxMore') )
                {
                    $('#box3More').removeClass("boxMore");
                    $('#box3More').addClass("boxLess");
                }
                else if( $('#box3More').hasClass("boxLess") )
                {
                    $('#box3More').removeClass("boxLess");
                    $('#box3More').addClass("boxMore");
                }
            });
        });
    </script>
@endsection