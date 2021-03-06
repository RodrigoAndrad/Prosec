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
                            <h6><a href="index.html">HOME</a> / <a href="grupo.html"> O GRUPO</a> / POLÍTICA DE RH</h6>
                            <h1>{{$textIntro->title}}</h1>
                        </div>
                    </div>
                    <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
                        @foreach($boxes as $box)
                        <div class="cont serv-conteudo">
                            <div id="box{{$box->id}}More" class="boxMore"></div>
                            <h2>{{$box->title}}</h2>
                            <hr>
                            <div id="box{{$box->id}}Content">
                                {!! $box->content !!}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
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

            $('#box4More').click(function()
            {
                $('#box4Content').slideToggle("slow");
                
                if( $('#box4More').hasClass('boxMore') )
                {
                    $('#box4More').removeClass("boxMore");
                    $('#box4More').addClass("boxLess");
                }
                else if( $('#box4More').hasClass("boxLess") )
                {
                    $('#box4More').removeClass("boxLess");
                    $('#box4More').addClass("boxMore");
                }
            });

            $('#box5More').click(function()
            {
                $('#box5Content').slideToggle("slow");
                
                if( $('#box5More').hasClass('boxMore') )
                {
                    $('#box5More').removeClass("boxMore");
                    $('#box5More').addClass("boxLess");
                }
                else if( $('#box5More').hasClass("boxLess") )
                {
                    $('#box5More').removeClass("boxLess");
                    $('#box5More').addClass("boxMore");
                }
            });
        });
    </script>
@endsection