@extends('layouts.website')

@section('content')
<div class="row">
        <!-- banner topo -->
        <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12 banner">
            <figure>
                <img src="{{asset($banners->imageSrc)}}" width="100%" height="100%" alt="{{$banners->imageAlt}}">
            </figure>
        </div>
        <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
            <div class="cont text-orca serv-intro">
                <h6><a href="index.html">HOME</a> / SOLICITE UMA PROPOSTA</h6>
                <h1>{{$textIntro->title}}</h1>

                <h2>{{$textIntro->subtitle}}</h2>
                <hr>
                {!! $textIntro->content !!}
            </div>
        </div>
    <form id="contact_form" enctype="multipart/form-data" action="mailorca.php" method="post">
        
        <div class="col-smart-12 col-tablet-12 col-laptop-6 col-desktop-6">
           
            <div class="cont">
               
                <div class="cax">
                    <label for="con">Condomínio / Empresa</label><br>
                    <input id="con" class="input" name="con" size="30" value="Condomínio / Empresa" type="text"><br>
                </div>
               
               <div class="cax">
                    <label for="name">Nome do Responsável <span class="obs-form obr-form">obrigatório</span></label><br>
                    <input id="name" class="input" name="name" size="30" value="Digite seu nome" type="text" onkeypress='return ((event.charCode >= 65 && event.charCode <= 250) || (event.charCode == 32 || event.charCode == 0) )' required="required"><br>
                </div>
               
                <div class="cax">
                    <label for="adm">Administradora do Condomínio</label><br>
                    <input id="adm" class="input" name="adm" size="30" value="Digite Administradora" type="text"><br>
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
                    <label for="como">COMO SOUBE DA PRO SECURITY? <span class="obs-form obr-form">obrigatório</span></label><br>
                    <select id="como" name="como" class="list" required="required" >
                            <option value="Invalido">Escolha uma opção</option>
                            <option value="Administradora">Administradora</option>
                            <option value="Cliente">Cliente</option>
                            <option value="Indicação">Indicação</option>
                            <option value="SindicoNet">SindicoNet</option>
                            <option value="Google">Google</option>
                            <option value="Youtube">Youtube</option>
                            <option value="Sindiconews">Sindiconews</option>
                            <option value="Em condomínios">Em condomínios</option>
                            <option value="E-mail marketing">E-mail marketing</option>
                            <option value="Ativo">Ativo</option>
                            <option value="Evento">Evento</option>
                            <option value="Facebook">Facebook</option>
                    </select><br>
                </div>
            
            </div>  
        
        </div>
      
        <div class="col-smart-12 col-tablet-12 col-laptop-6 col-desktop-6">
        
            <div class="cont">
        
                <div class="cax">
                    <label for="end">Endereço</label><br>
                    <input id="end" class="input" name="end" size="30" value="Digite o endereço" type="text" ><br>
                </div>
        
                <div class="cax">
                    <label for="compl">Complemento</label><br>
                    <input id="compl" class="input" name="compl" size="30" value="Digite número, bloco, etc" type="text">
                </div>
                
                <div class="cax-cep">
                    <label for="cep">Cep <span class="obs-form">(XXXXX-XXX)</span></label><br>
                    <input id="cep" class="input" name="cep" size="30" value="Digite o CEP" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' data-inputmask-clearmaskonlostfocus="true"><br>
                </div>
                
                <div class="cax">
                    <label for="email">E-mail <span class="obs-form obr-form">obrigatório</span></label><br>
                    <input id="email" class="input" name="email" size="30" value="Digite seu email" type="email" required="required"><br>
                </div>
                
                <div class="cax">
                    <label for="message">Comentários</label><br>
                    <textarea id="message" class="input" name="message" rows="5" cols="30" value="Digite informações sobre o casa, condomínio, edifício e/ou empresa e suas necessidades">Digite informações sobre o casa, condomínio, edifício e/ou empresa e suas necessidades</textarea><br>
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

    </div>
</section>
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
 <script type="text/javascript">
    $(document).ready(function(){

   $('*').keydown( function(e) {
        var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
        if(key == 13) {
            e.preventDefault();
            var inputs = $(this).closest('form').find(':input:visible');
            inputs.eq( inputs.index(this)+ 1 ).focus();
        }
    });
});
    </script>
    
    <script type="text/javascript">
        $(function() 
        {
            /* Menu Mobile Click */
            $( "#menuMobile" ).click(function() 
            {
                $( "#mobileNavbar" ).toggle();
            });

            /* Form Focus/Blur Cleanner/Filler */
            $("#newsInput").focus(function()
            {
                /* Default Falue Cleanner */
                if( $( "#newsInput" ).val() === "Seu email"  )
                {
                    $( "#newsInput" ).val('');
                }

                /* Default Message Cleanner */
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

            $('#con').focus(function() 
            {  
                if($(this).val() === "Condomínio / Empresa")
                {
                    $(this).val('');
                    $(this).css('color','#000');
                }
            });  

            $('#con').blur(function() 
            {  
                if($(this).val() === '')
                {
                    $(this).css('color','#a0a0a0');
                    $(this).val("Condomínio / Empresa");
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

            $('#adm').focus(function() 
            {  
                if($(this).val() === "Digite Administradora")
                {
                    $(this).val('');
                    $(this).css('color','#000');
                }
            });  

            $('#adm').blur(function() 
            {  
                if($(this).val() === '')
                {
                    $(this).css('color','#a0a0a0');
                    $(this).val("Digite Administradora");
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
            
            $('#como').focus(function() 
            {  
                    $(this).css('color','#000');
            });  

            $('#end').focus(function() 
            {  
                if($(this).val() === "Digite o endereço")
                {
                    $(this).val('');
                    $(this).css('color','#000');
                }
            });  

            $('#end').blur(function() 
            {  
                if($(this).val() === '')
                {
                    $(this).css('color','#a0a0a0');
                    $(this).val("Digite o endereço");
                }
            });

            $('#compl').focus(function() 
            {  
                if($(this).val() === "Digite número, bloco, etc")
                {
                    $(this).val('');
                    $(this).css('color','#000');
                }
            });  

            $('#compl').blur(function() 
            {  
                if($(this).val() === '')
                {
                    $(this).css('color','#a0a0a0');
                    $(this).val("Digite número, bloco, etc");
                }
            });

            $('#cep').focus(function() 
            {  
                if($(this).val() === "Digite o CEP")
                {
                    $("#cep").inputmask(({"mask": "99999-999", 'greedy' : true}));
                    $(this).val('');
                    $(this).css('color','#000');
                }
            });  

            $('#cep').blur(function() 
            {  
                if($(this).val() === '')
                {
                    $(this).css('color','#a0a0a0');
                    $(this).val("Digite o CEP");
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
                if($(this).val() === "Digite informações sobre o casa, condomínio, edifício e/ou empresa e suas necessidades")
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
                    $(this).val("Digite informações sobre o casa, condomínio, edifício e/ou empresa e suas necessidades");
                }
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
            con = $form.find( "input[name='con']" ).val(),
            name = $form.find( "input[name='name']" ).val(),
            adm = $form.find( "input[name='adm']" ).val(),
            tel = $form.find( "input[name='tel']" ).val(),
            tel2 = $form.find( "input[name='tel2']" ).val(),
            como = $form.find( "#como option:selected" ).val();
            end = $form.find( "input[name='end']" ).val(),
            compl = $form.find( "input[name='compl']" ).val(),
            cep = $form.find( "input[name='cep']" ).val(),
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
            
            if(como === null || como === "" || como === "Invalido")
            {
                $form.find("select[name='como']").css('color', 'red');
                send = 0;
            }
            if(email === null || email === "Digite seu email" || email === "O campo e-mail é obrigatório")
            {
                $form.find("input[name='email']").val('O campo e-mail é obrigatório');
                $form.find("input[name='email']").css('color', 'red');
                send = 0;
            }
            
            telValidation = tel.replace(/\D/g,'');
            if(telValidation.length < 10 )
            {
                $('#tel').inputmask('remove');
                $("#tel").css('color', 'red');
                $('#tel').val('O "Telefone 1" é obrigatório');
                send = 0;
            }
            
            if(como !== "Invalido" && telValidation.length > 9)
            {
                $( this ).find( "input[name='con']" ).val('');
                $( this ).find( "input[name='name']" ).val('');
                $( this ).find( "input[name='adm']" ).val('');
                $( this ).find( "input[name='tel']" ).val('');
                $( this ).find( "input[name='tel2']" ).val('');
                $( this ).find( "#como option:selected" ).val('');
                $( this ).find( "input[name='end']" ).val('');
                $( this ).find( "input[name='compl']" ).val('');
                $( this ).find( "input[name='cep']" ).val('');
                $( this ).find( "input[name='email']" ).val('');
                $( this ).find( "#message" ).val('');
            }
            
            if(send > 0)
            {
          // Send the data using post
          var posting = $.post( url,{ 
                                        con: con, 
                                        name: name, 
                                        adm: adm, 
                                        tel: tel, 
                                        tel2: tel2, 
                                        como: como, 
                                        end: end, 
                                        compl: compl, 
                                        cep: cep, 
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
            /*  
            var conteudo;
            conteudo = data;
            $("#result2").empty().text(conteudo);
            */
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