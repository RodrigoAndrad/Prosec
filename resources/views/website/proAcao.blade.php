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
							<h6><a href="index.html">HOME</a> / <a href="grupo.html"> O GRUPO</a> / PRO AÇÃO</h6>
							<h1>{{$textIntro->title}}</h1>
							<hr>
							<figure><img src="{{asset($textIntro->imageSrc)}}" align="center" alt="{{$textIntro->imageAlt}}"></figure>
							{!! $textIntro->content !!}
						</div>
					</div>
				</section>
				<!-- info numeros -->
				<article>
					<div class="row numeros_proacao">
						@foreach($boxes as $box)
						<div class="col-smart-12 col-tablet-12 col-laptop-4 col-desktop-4 estatisticas">
							<div class="cont estat" style="margin-top: 0">
								<h3>{{$box->title}}</h3>
								<h2 id="contadorCrescente" name="sisEleContador" ><span class="count">{{$box->subtitle}}</span></h2>
								<hr>
								<h3>
									{!! $box->content !!}
								</h3>
							</div>
						</div>
						@endforeach
					</div>
					<!-- Carrossel de imagens 1 -->
					<div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
						<div class="cont">
							<h2>Carrossel de Fotos</h2>
						</div>
						<script type="text/javascript">
						        jQuery(document).ready(function ($) {

						            var jssor_1_SlideshowTransitions = [
						              {$Duration:800,$Opacity:2}
						            ];

						            var jssor_1_options = {
						              $AutoPlay: 1,
						              $Idle: 2000,
						              $Cols: 1,
						              $Align: 0,
						              $SlideshowOptions: {
						                $Class: $JssorSlideshowRunner$,
						                $Transitions: jssor_1_SlideshowTransitions,
						                $TransitionsOrder: 1
						              },
						              $ArrowNavigatorOptions: {
						                $Class: $JssorArrowNavigator$
						              },
						              $ThumbnailNavigatorOptions: {
						                $Class: $JssorThumbnailNavigator$,
						                $Cols: 15,
						                $SpacingX: 5,
						                $SpacingY: 5,
						                $Align: 458
						              }
						            };

						            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

						            /*#region responsive code begin*/

						            var MAX_WIDTH = 800;

						            function ScaleSlider() {
						                var containerElement = jssor_1_slider.$Elmt.parentNode;
						                var containerWidth = containerElement.clientWidth;

						                if (containerWidth) {

						                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

						                    jssor_1_slider.$ScaleWidth(expectedWidth);
						                }
						                else {
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
						        /* jssor slider loading skin spin css */
						        .jssorl-009-spin img {
						            animation-name: jssorl-009-spin;
						            animation-duration: 1.6s;
						            animation-iteration-count: infinite;
						            animation-timing-function: linear;
						        }

						        @keyframes jssorl-009-spin {
						            from {
						                transform: rotate(0deg);
						            }

						            to {
						                transform: rotate(360deg);
						            }
						        }


						        .jssorb052 .i {position:absolute;cursor:pointer;}
						        .jssorb052 .i .b {fill:#000;fill-opacity:0.3;}
						        .jssorb052 .i:hover .b {fill-opacity:.7;}
						        .jssorb052 .iav .b {fill-opacity: 1;}
						        .jssorb052 .i.idn {opacity:.3;}

						        .jssora053 {display:block;position:absolute;cursor:pointer;}
						        .jssora053 .a {fill:none;stroke:#fff;stroke-width:640;stroke-miterlimit:10;}
						        .jssora053:hover {opacity:.8;}
						        .jssora053.jssora053dn {opacity:.5;}
						        .jssora053.jssora053ds {opacity:.3;pointer-events:none;}

						        .jssort061 .p {position:absolute;top:0;left:0;border:2px solid rgba(255,255,255,.5);box-sizing:border-box;}
						        .jssort061 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
						        .jssort061 .p:hover {border-color:rgba(0,0,0,.6);}
						        .jssort061 .pav, .jssort061 .p:hover.pdn{border-color:#000;}
						        .jssort061 .pav .t, .jssort061 .p:hover.pdn .t{opacity:1;}
						    </style>
						    <div id="jssor_1" style="position:relative;margin:0 auto; top:0px;left:0px;width:800px;height:600px;margin-top: 0px; margin-bottom: 50px; overflow:hidden;visibility:hidden;">
						        <!-- Loading Screen -->
						        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
						            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
						        </div>
						        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:800px;height:600px;overflow:hidden;">
						            @foreach($slides as $key => $slide)
										@if($key % 2 == 0)
										<div data-p="170.00">
						                	<img data-u="image" src="{{asset($slide->imageSrc)}}"/>
										@else
											<img data-u="thumb" src="{{asset($slide->imageSrc)}}"/>
						            	</div>
										@endif
									@endforeach
						        </div>
						        <!-- Thumbnail Navigator -->
						        <div data-u="thumbnavigator" class="jssort061" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1" data-scale-bottom="0.75">
						            <div data-u="slides">
						                <div data-u="prototype" class="p" style="width:64px;height:64px;">
						                    <div data-u="thumbnailtemplate" class="t"></div>
						                </div>
						            </div>
						        </div>
						        <!-- Arrow Navigator -->
						        <div data-u="arrowleft" class="jssora053" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
						            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
						                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
						            </svg>
						        </div>
						        <div data-u="arrowright" class="jssora053" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
						            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
						                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
						            </svg>
						        </div>
						    </div>
						    <!-- #endregion Jssor Slider End -->

				</article>
			</div>
              
@endsection
@section('scripts')
    <script>
    var crtl = 0;
    $(window).scroll(function() {
   	   var hT = $('#contadorCrescente').offset().top,
       hH = $('#contadorCrescente').outerHeight(),
       wH = $(window).height(),
       wS = $(this).scrollTop();
	   //console.log((hT-wH) , wS);
	   if (wS > (hT+hH-wH))
	   {
	    	if(crtl === 0)
	    	{
		        crtl++;
			    $('.count').each(function () {
			    $(this).prop('Counter',0).animate({
			        Counter: $(this).text()
			    }, {
			        duration: 2500,
			        easing: 'swing',
			        step: function (now) {
			            $(this).text(Math.ceil(now));
			        	}
			   	    });
				});
			}
	    }
	});
	</script>
@endsection