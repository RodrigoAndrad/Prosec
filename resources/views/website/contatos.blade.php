@extends('layouts.website')

@section('content')
<div class="row">
    <section>
        <!-- banner topo -->
        <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12 banner">
            <figure><img src="{{asset($banners->imageSrc)}}" width="100%" height="100%" alt="$banners->imageAlt"></figure>
        </div>
        <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
            <div class="cont serv-intro tels">
                <h6><a href="index.html">HOME</a> / <a href="fale-conosco.html"> FALE CONOSCO</a> / ENDEREÇOS E TELEFONES</h6>
                <h1>{{$textIntro->title}}</h1>
                <figure>
                <img src="{{asset($imageIntro->imageSrc)}}" alt="{{$imageIntro->imageAlt}}" width="50%" height="50%">
                </figure>
                @foreach($boxes as $box)
                <h2>{{$box->title}}</h2>
                <hr>
                {!! $box->content !!}
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
@section('scripts')
<!-- navegação --><!-- newsletter --><!-- ação topo -->
    <script type="text/javascript">
        $(function() 
        {
            $( ".menuMobile" ).click(function() 
            {
                $( ".menu-mobile" ).find("ul").toggle();
            });

            $("#newsInput").focus(function()
            {
                if( $( "#newsInput" ).val() === "Seu email" )
                {
                    $( "#newsInput" ).val('');
                }

            });

            $("#newsInput").blur(function()
            {
                if( $( "#newsInput" ).val() === "" )
                {
                    $( "#newsInput" ).val("Seu email");
                }

            });
        });

        jQuery(document).ready(function($) 
        {
            $(".scroll").click(function(event)
            {       
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });

        });
    
    </script>

    <script>
        // Attach a submit handler to the form
        $( "#newsForm" ).submit(function( event ) {
         
          // Stop form from submitting normally
          event.preventDefault();
         
          // Get some values from elements on the page:
          var $form = $( this ),
          newsEmail = $form.find( "input[name='newsEmail']" ).val(),
          url = $form.attr( "action" );
          

          // Send the data using post
          var posting = $.post( url,{ email: newsEmail} ); 
          $("#newsInput").val("");
          hideEnter();
          // Put the results in a div
          posting.done(function( data ) 
          {
            alert(data);
          });

        });
    </script>
    <script type="text/javascript">
        function showEnter()
        {
            $("#result2").empty().text("Pressione ENTER para enviar");
        }

        function hideEnter()
        {
            $("#result2").empty().text("");
        }
    </script>
@endsection