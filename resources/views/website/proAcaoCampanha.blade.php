@extends('layouts.website')

@section('content')
                <!-- Corpo -->
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
						</div>
					</div>
					<div class="col-smart-12 col-tablet-12 col-laptop-4 col-desktop-4">
						<div class="cont serv-intro">
							<figure><img src={{asset($textIntro->imageSrc)}} align="center" alt="Pro Ação Criança"></figure>
						</div>
					</div>
					<div class="col-smart-12 col-tablet-12 col-laptop-8 col-desktop-8">
						<div class="cont serv-intro">
							{!! $textIntro->content !!}
						</div>
					</div>
				</section>
				<!-- banner -->
				<article>
					<div class="row">
						<div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
							<figure><img src="{{asset($boxes[0]->imageSrc)}}" width="100%" height="100%" alt="{{asset($boxes[0]->imageSrc)}}"></figure>
						</div>
					</div>
				</article>
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