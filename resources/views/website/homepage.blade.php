@extends('layouts.website')

@section('content')
<div class="row">
    <!-- banner rotativo -->
    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_options = {
                $AutoPlay: 1,
                $Cols: 1,
                $Align: 0,
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1200;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                } else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
    <style>
        /* jssor slider loading skin double-tail-spin css */
        .jssorl-004-double-tail-spin img {
            animation-name: jssorl-004-double-tail-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-004-double-tail-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .jssora053 {display:block;position:absolute;cursor:pointer;}
        .jssora053 .a {fill:none;stroke:#fff;stroke-width:640;stroke-miterlimit:10;}
        .jssora053:hover {opacity:.8;}
        .jssora053.jssora053dn {opacity:.5;}
        .jssora053.jssora053ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1200px;height:671px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="images/double-tail-spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1200px;height:671px;overflow:hidden;">
            @foreach($banner as $slide)
            <div data-p="233.875" @if(!empty($slide->link)) onclick="alert('{{$slide->link}}');" target="{{$slide->linkTarget}}" @endif>
                 <img data-u="image" src="{{asset($slide->imageSrc)}}" alt="{{$slide->imageAlt}}" />
            </div>
            @endforeach
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora053 prevBttn" style="width:95px;height:109px;top:0px;left:0px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        </div>
        <div data-u="arrowright" class="jssora053 nextBttnr" style="width:95px;height:109px;top:0px;right:0px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        </div>
    </div>
    <!-- #endregion Jssor Slider End -->
    <!-- Box de Destaque -->
    @foreach($boxes as $box)
    <div class="col-smart-12 col-tablet-6 col-laptop-4 col-desktop-4">
        <div class="cont link-dest">
            @if(!empty($box->link))
            <a href="{{ $box->link}}" target="{{$box->linkTarget}}" >
                @endif
                <figure class="foto_legenda">
                    <img src="{{ asset($box->imageSrc)}}" width="100%" height="100%" alt="{{$box->imageAlt}}">
                    <figcaption>
                        <h2>{{$box->title}}</h2>
                    </figcaption>
                </figure>
                @if(!empty($box->link))
            </a>
            @endif
        </div>
    </div>
    @endforeach    
    <!-- destaques e noticias -->
    <div class="row">
        <article>
            <div class="col-smart-12 col-tablet-12 col-laptop-9 col-desktop-9">
                <div class="cont destaque">
                    <h2>Destaque</h2>
                    <hr>
                    <figure><a href="{{ $highlights->link }}" target="{{ $highlights->linkTarget }}"><img src="{{asset($highlights->imageSrc)}}" width="80%" height="80%"></a></figure>
                </div>
            </div>
        </article>
        <aside>
            <div class="col-smart-12 col-tablet-12 col-laptop-3 col-desktop-3">
                <div class="cont noticias">
                    <h2>Últimas Notícias</h2>
                    <hr>
                    @foreach($posts as $post)
                    <p>- <strong>{{$post->title}}</strong><br>
                        {{$post->content}} ...
                        <a href="{{$post->link}}" target="{{$post->linkTarget}}"><em>{{$post->linkText}}</em></a></p>
                    @endforeach
                </div>
            </div>
        </aside>
    </div>
    <div class="row">
        <!-- info numeros e videos-->
        <article>
            <div class="row numeros">
                @foreach($leads as $lead)
                <div class="col-smart-6 col-tablet-6 col-laptop-3 col-desktop-3 estatisticas">
                    <div class="cont estat">
                        <h2 id="sistemasEletronicos" name="sisEleContador" >@if( $lead->position === 'before' && !empty($lead->symbol) ) {{$lead->symbol}} @endif<span class="count">{{$lead->content}}</span>@if( $lead->position === 'after' && !empty($lead->symbol) ) {{$lead->symbol}} @endif</h2>
                        <hr>
                        <h3>{!! $lead->title !!}</h3>
                    </div>
                </div>
                @endforeach
                
            </div>
        </article>
    </div>
    <div class="row">
        <article>
            <div class="row video">
                <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
                    <div class="cont">
                        <h2>Vídeos<h2>
                                <hr>
                                </div>
                                </div>
                                @foreach($videos as $video)
                                <div class="col-smart-12 col-tablet-6 col-laptop-6 col-desktop-6">
                                    <div class="cont youtube">
                                        @if(!empty($video->link))
                                        <iframe width="400" height="225" src="{{$video->link}}" frameborder="0" allowfullscreen></iframe>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                                </div>
                                </article>
                                </div>
                                @endsection
                                @section('scripts')
                                @endsection