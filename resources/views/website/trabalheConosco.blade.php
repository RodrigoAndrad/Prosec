@extends('layouts.website')

@section('content')
<div class="row">
	<section>
		<!-- banner topo -->
		<div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12 banner">
			<figure><img src="{{asset($banners->imageSrc)}}" width="100%" height="100%" alt="{{$banners->imageAlt}}"></figure>
		</div>
		<div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
			<div class="cont text-orca serv-intro">
				<h6><a href="index.html">HOME</a> / <a href="fale-conosco.html"> FALE CONOSCO</a> / TRABALHE CONOSCO</h6>
				<h1>Trabalhe Conosco</h1>

				<hr>
				<!--
                                            <p>O Grupo Pro Security oferece aos colaboradores a possibilidade de crescimento profissional e pessoal em um ambiente dinâmico e participativo</p>
				<p>Se você tem interesse em fazer parte da equipe Pro Security, envie seu currículo através do formulário abaixo e conte-nos sobre a sua experiência profissional.</p>
                                            -->
                                            <p>O Grupo Pro Security oferece aos colaboradores a possibilidade de crescimento profissional e pessoal em um ambiente dinâmico e participativo</p>
				<p>Se você tem interesse em fazer parte da equipe Pro Security, envie seu currículo através do email abaixo e conte-nos sobre a sua experiência profissional.</p>
			</div>
		</div>
        <!--
    	<form id="contact_form" enctype="multipart/form-data" action="mailtrabalhe.php" method="post" >
        
            <div class="col-smart-12 col-tablet-12 col-laptop-6 col-desktop-6">
               
                <div class="cont">
                   
                	<div class="cax">
                        <label for="name"> Nome <span class="obs-form obr-form">obrigatório</span></label><br>
                        <input id="name" class="input" name="name" size="30" value="Digite seu nome" required="required" type="text"><br>
                    </div>
                    
                    <div class="cax">
                    	<label for="tel">Telefone 1 <span class="obs-form obr-form">obrigatório</span></label><br>
                    	<input id="tel" class="input" name="tel" size="30" value="(DDD)Número" type="text" onkeypress='return event.charCode >= 65 && event.charCode <= 57' required="required" data-inputmask-clearmaskonlostfocus="true"><br>
                	</div>
                
                    <div class="cax">
                        <label for="tel2">Telefone 2 </label><br>
                        <input id="tel2" class="input" name="tel2" size="30" value="(DDD)Número" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' data-inputmask-clearmaskonlostfocus="true"><br>
                    </div>
                    <div class="cax">
                    	    <label for="archive"> Anexe seu currículo <span class="obs-form obr-form">obrigatório - Tamanho máximo de 1Mb</span></label><br>
                            <input type="file" name="file" id="file" /><br>
                    </div>
                </div>
            </div>
          
            <div class="col-smart-12 col-tablet-12 col-laptop-6 col-desktop-6">
            
                <div class="cont">
            
                    <div class="cax">
                        <label for="email">E-mail <span class="obs-form obr-form">obrigatório</span></label><br>
                        <input id="email" class="input" name="email" size="30" value="Digite seu email" type="email" required="required"><br>
                    </div>
                    
                    <div class="cax">
                        <label for="message">Comentários</label><br>
                        <textarea id="message" class="input" name="message" rows="5" cols="30" value="Digite informações adicionais">Digite informações adicionais</textarea><br>
                    </div>

                </div>  
            
            </div>
            
            <div id="result" class="col-smart-12 col-tablet-12 col-laptop-3 col-desktop-3 text-rodape" style="width: 500px; float: right; color: green; display: block; font-size: 1em; text-align: right; position: relative; right: 2%;">
            </div>

            <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
                <div class="cont">
                    <input id="submit_button" value="Enviar" type="submit">
                </div>  
            </div>   
        </form> 
        -->         <div  style="height: 480px; text-align: center; font-weight: bolder; font-style: italic; text-decoration: underline; font-size: 18px;" >
                    <a href="mailto:curriculo@prosecurity.com.br?subject='Site Pro Security - Trabalhe Conosco">curriculo@prosecurity.com.br</a>
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

    		$('#name').focus(function() 
            {  
                if($(this).val() === "Digite seu nome" || $(this).val() === '“Nome do Responsável” é obrigatório')
                {
                    $(this).val('');
                    $(this).css('color','#000');
                }
                
            });  

            $('#name').blur(function() 
            {  
                if($(this).val() === '')
                {
                    $(this).css('color','#a0a0a0');
                    $(this).val("Digite seu nome");
                }
            });

            $('#tel').focus(function() 
            {  
                if($(this).val() === "(DDD)Número" || $(this).val() === 'O "Telefone 1" é obrigatório')
                {
                    $('#tel').inputmask('(99) [9]9999-9999');
                    $(this).val('');
                    $(this).css('color','#000');
                }
            });  

            $('#tel').blur(function() 
            {  
                var str  = $('#tel').val();
                var res = str.replace(/_/g,'');
                $("#tel").val(res);

                if($(this).val() === '')
                {
                    $(this).css('color','#a0a0a0');
                    $(this).val("(DDD)Número");
                }
                else
                {
                    if($('#tel').val().length > 14) 
                    {  
                        $('#tel').inputmask('(99) 9 9999-9999');  
                    } 
                    else 
                    {  
                        $('#tel').inputmask('(99) 9999-9999');  
                    }  
                }
            });

            $('#tel2').focus(function() 
            {  
                if($(this).val() === "(DDD)Número")
                {
                    $('#tel2').inputmask('(99) [9]9999-9999');
                    $(this).val('');
                    $(this).css('color','#000');
                }
            });  

            $('#tel2').blur(function() 
            {  
                var str  = $('#tel2').val();
                var res = str.replace(/_/g,'');
                $("#tel2").val(res);

                if($(this).val() === '')
                {
                    $(this).css('color','#a0a0a0');
                    $(this).val("(DDD)Número");
                }
                else
                {
                    if($('#tel2').val().length > 14) 
                    {  
                        $('#tel2').inputmask('(99) 9 9999-9999');  
                    } 
                    else 
                    {  
                        $('#tel2').inputmask('(99) 9999-9999');  
                    }  
                }
            });

            $('#email').focus(function() 
            {  
                if($(this).val() === "Digite seu email"  || $(this).val() === 'O campo e-mail é obrigatório')
                {
                    $(this).val('');
                    $(this).css('color','#000');
                }
            });  

            $('#email').blur(function() 
            {  
                if($(this).val() === '')
                {
                    $(this).css('color','#a0a0a0');
                    $(this).val("Digite seu email");
                }
            });

            $('#message').focus(function() 
            {  
                if($(this).val() === "Digite informações adicionais")
                {
                    $(this).val('');
                    $(this).css('color','#000');
                }
            });  

            $('#message').blur(function() 
            {  
                if($(this).val() === '')
                {
                    $(this).css('color','#a0a0a0');
                    $(this).val("Digite informações adicionais");
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
        $( "#contact_form" ).submit(function( event ) {
         
          // Stop form from submitting normally
          event.preventDefault();
         
          // Get some values from elements on the page:
            var $form = $( this ),
            name = $form.find( "input[name='name']" ).val(),
            tel = $form.find( "input[name='tel']" ).val(),
            tel2 = $form.find( "input[name='tel2']" ).val(),
            file = $form.find( "input[name='file']" ).val(),
            email = $form.find( "input[name='email']" ).val(),
            message = $form.find( "#message" ).val(),
            url = $form.attr( "action" );
            send = 1;
            if(name === null || name === "Digite seu nome" || name === '“Nome do Responsável” é obrigatório')
            {
                $form.find("input[name='name']").val('“Nome do Responsável” é obrigatório');
                $form.find("input[name='name']").css('color', 'red');
                send = 0;
            }

            if(tel === null || tel === "(DDD)Número" || tel === 'O "Telefone 1" é obrigatório')
            {
                $form.find("input[name='tel']").val('O "Telefone 1" é obrigatório');
                $form.find("input[name='tel']").css('color', 'red');
                send = 0;
            }
            
			if(file === null)
            {
                $form.find("input[name='file']").val('O campo e-mail é obrigatório');
                $form.find("input[name='file']").css('color', 'red');
                send = 0;
            }

            if(email === null || email === "Digite seu email" || email == "O campo e-mail é obrigatório")
            {
                $form.find("input[name='email']").val('O campo e-mail é obrigatório');
                $form.find("input[name='email']").css('color', 'red');
                send = 0;
            }

            if(send > 0)
            {
          // Send the data using post
          var form;
    $('#file').change(function (event) {
        form = new FormData();
        form.append('file', event.target.files[0]); // para apenas 1 arquivo
        //var name = event.target.files[0].content.name; // para capturar o nome do arquivo com sua extenção
    });
          var posting = $.post( url,{ 
                                        name: name, 
                                        tel: tel, 
                                        tel2: tel2, 
                                        file: file, 
                                        email: email, 
                                        message: message 
                                    } ); 
         
          
          // Put the results in a div
          posting.done(function( data ) 
          {
            alert(data);
          });
        }
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
    <script type="text/javascript">
    	var inputs = document.querySelectorAll( '.inputfile' );
		Array.prototype.forEach.call( inputs, function( input )
		{
			var label	 = input.nextElementSibling,
				labelVal = label.innerHTML;

			input.addEventListener( 'change', function( e )
			{
				var fileName = '';
				if( this.files && this.files.length > 1 )
					fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
				else
					fileName = e.target.value.split( '\\' ).pop();

				if( fileName )
					label.querySelector( 'span' ).innerHTML = fileName;
				else
					label.innerHTML = labelVal;
			});
		});
	</script>
@endsection
           
