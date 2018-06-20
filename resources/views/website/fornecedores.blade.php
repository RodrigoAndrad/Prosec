@extends('layouts.website')

@section('content')
<div class="row">
    <section>
        <!-- banner topo -->
        <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12 banner">
            <figure><img src="{{asset($banners->imageSrc)}}" width="100%" height="100%" alt="$banners->imageAlt"></figure>
        </div>
        <div class="col-smart-12 col-tablet-12 col-laptop-12 col-desktop-12">
            <div class="cont text-orca serv-intro">
                <h6><a href="index.html">HOME</a> / <a href="fale-conosco.html"> FALE CONOSCO</a> / CADASTRO FORNECEDORES</h6>
                <h1>{{$textIntro->title}}</h1>

                <h2>{{$textIntro->subtitle}}</h2>
                <hr>
            </div>
        </div>
        <form id="contact_form" enctype="multipart/form-data" action="mailfornecedores.php" method="post">
        
            <div class="col-smart-12 col-tablet-12 col-laptop-6 col-desktop-6">
               
                <div class="cont">
                   
                    <div class="cax">
                        <label for="razao">Nome / Razão Social <span class="obs-form obr-form">obrigatório</span></label><br>
                        <input id="razao" class="input" name="razao" size="30" value=" Digite Nome / Razão Social" type="text" required="required"><br>
                    </div>
                   
                   <div class="cax">
                        <label for="fantasia">Nome Fantasia <span class="obs-form obr-form">obrigatório</span></label><br>
                        <input id="fantasia" class="input" name="fantasia" size="30" value=" Digite Nome Fantasia" type="text" required="required"><br>
                    </div>

                    <div class="cax">
                        <label for="cnpj">CNPJ <span class="obs-form obr-form">obrigatório</span></label><br>
                        <input id="cnpj" class="input" name="cnpj" size="30" value=" Digite CNPJ válido" type="text" required="required" onkeypress='return event.charCode >= 48 && event.charCode <= 57' data-inputmask-clearmaskonlostfocus="true"><br>
                    </div>

                    <div class="cax">
                        <label for="estadual">Inscrição Estadual</label><br>
                        <input id="estadual" class="input" name="estadual" size="30" value=" Digite número da Inscrição Estadual" type="text" required="required" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required="required" data-inputmask-clearmaskonlostfocus="true"><br>
                    </div>

                    <div class="cax">
                        <label for="municipal">Inscrição Municipal</label><br>
                        <input id="municipal" class="input" name="municipal" size="30" value=" Digite número da Inscrição Municipal" type="text" required="required" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required="required" data-inputmask-clearmaskonlostfocus="true"><br>
                    </div>

                    <div class="cax">
                    <label for="name">Contato <span class="obs-form obr-form">obrigatório</span></label><br>
                    <input id="name" class="input" name="name" size="30" value=" Digite seu nome" type="text" onkeypress='return ((event.charCode >= 65 && event.charCode <= 250) || (event.charCode == 32 || event.charCode == 0) )' required="required"><br>
                </div>
                   
                    <div class="cax">
                        <label for="tel">Telefone <span class="obs-form obr-form">obrigatório</span></label><br>
                        <input id="tel" class="input" name="tel" size="30" value="(DDD)Número" type="text" onkeypress='return event.charCode >= 65 && event.charCode <= 57' required="required" data-inputmask-clearmaskonlostfocus="true"><br>
                    </div>
                    
                </div>  
            </div>
          
            <div class="col-smart-12 col-tablet-12 col-laptop-6 col-desktop-6">
            
                <div class="cont">
            
                    <div class="cax">
                        <label for="end">Endereço <span class="obs-form obr-form">obrigatório</span></label><br>
                        <input id="end" class="input" name="end" size="30" value="Digite o endereço" type="text" required="required"><br>
                    </div>
            
                    <div class="cax">
                        <label for="compl">Complemento <span class="obs-form obr-form">obrigatório</span></label><br>
                        <input id="compl" class="input" name="compl" size="30" value="Digite número, bloco, etc" type="text" required="required">
                    </div>
                    
                    <div class="cax-cep">
                        <label for="cep">Cep <span class="obs-form">(XXXXX-XXX)</span>  <span class="obs-form obr-form">obrigatório</span></label><br>
                        <input id="cep" class="input" name="cep" size="30" value="Digite o CEP" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' data-inputmask-clearmaskonlostfocus="true" required="required"><br>
                    </div>
                    
                    <div class="cax">
                        <label for="email">E-mail <span class="obs-form obr-form">obrigatório</span></label><br>
                        <input id="email" class="input" name="email" size="30" value="Digite seu email" type="email" required="required"><br>
                    </div>

                    <div class="cax">
                        <label for="atividade">Ramo de Atividade <span class="obs-form obr-form">obrigatório</span></label><br>
                        <input id="atividade" class="input" name="atividade" size="30" value="Digite Ramo de Ativivdade" type="text" required="required"><br>
                    </div>
                    
                    <div class="cax">
                        <label for="message">Comentários</label><br>
                        <textarea id="message" class="input" name="message" rows="5" cols="30" value="Digite informações complementares">Digite informações complementares</textarea><br>
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
    /*
        $("#fantasia").keypress(function(event){
            var inputValue = event.which;
            // allow letters and whitespaces only.
            if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) { 
                event.preventDefault(); 
            }
        });
    */        
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

        $('#razao').focus(function() 
        {  
            if($(this).val() === " Digite Nome / Razão Social" || $(this).val() === ' “Nome / Razão Social” é obrigatório')
            {
                $(this).val('');
                $(this).css('color','#000');
            }
        });  

        $('#razao').blur(function() 
        {  
            if($(this).val() === '')
            {
                $(this).css('color','#a0a0a0');
                $(this).val(" Digite Nome / Razão Social");
            }
        });

        $('#fantasia').focus(function() 
        {  
            if($(this).val() === " Digite Nome Fantasia" || $(this).val() === ' “Nome Fantasia” é obrigatório')
            {
                $(this).val('');
                $(this).css('color','#000');
            }
            
        });  

        $('#fantasia').blur(function() 
        {  
            if($(this).val() === '')
            {
                $(this).css('color','#a0a0a0');
                $(this).val(" Digite Nome Fantasia");
            }
        });

        $('#cnpj').focus(function() 
        {  
            if($(this).val() === " Digite CNPJ válido" || $(this).val() === ' “CNPJ” é obrigatório')
            {
                $(this).inputmask('99.999.999/9999-99');
                $(this).val('');
                $(this).css('color','#000');
            }
        });  

        $('#cnpj').blur(function() 
        {  
            if($(this).val() === '')
            {
                $(this).css('color','#a0a0a0');
                $(this).val(" Digite CNPJ válido");
            }
        });
        
        $('#estadual').focus(function() 
        {  
            if($(this).val() === " Digite número da Inscrição Estadual")
            {
                $(this).val('');
                $(this).css('color','#000');
            }
            
        });  

        $('#estadual').blur(function() 
        {  
            if($(this).val() === '')
            {
                $(this).css('color','#a0a0a0');
                $(this).val(" Digite número da Inscrição Estadual");
            }
        });

        $('#municipal').focus(function() 
        {  
            if($(this).val() === " Digite número da Inscrição Municipal")
            {
                $(this).val('');
                $(this).css('color','#000');
            }
            
        });  

        $('#municipal').blur(function() 
        {  
            if($(this).val() === '')
            {
                $(this).css('color','#a0a0a0');
                $(this).val(" Digite número da Inscrição Municipal");
            }
        });


        $('#name').focus(function() 
        {  
            if($(this).val() === " Digite seu nome" || $(this).val() === ' "Contato" é obrigatório')
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
                $(this).val(" Digite seu nome");
            }
        });
        

        $('#tel').focus(function() 
        {  
            if($(this).val() === "(DDD)Número" || $(this).val() === ' "Telefone" é obrigatório')
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
            var resF = res.replace(/" "/g,'');
            $("#tel").val(res);

            if($(this).val() === '')
            {
                $(this).css('color','#a0a0a0');
                $(this).val("(DDD)Número");
            }
            else
            {
                if($('#tel').val().length > 13) 
                {  
                    $('#tel').inputmask('(99) 9 9999-9999');  
                } 
                else 
                {  
                    $('#tel').inputmask('(99) 9999-9999');  
                }  
            }
        });

        $('#end').focus(function() 
        {  
            if($(this).val() === "Digite o endereço" || $(this).val() === '"Endereço" é obrigatório')
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
            if($(this).val() === "Digite número, bloco, etc" || $(this).val() === '"Complemento" é obrigatório')
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
            if($(this).val() === "Digite o CEP" || $(this).val() === '"Cep" é obrigatório')
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

        $('#atividade').focus(function() 
        {  
            if($(this).val() === "Digite Ramo de Ativivdade"  || $(this).val() === '"Ramo de Atividade" é obrigatório')
            {
                $(this).val('');
                $(this).css('color','#000');
            }
        });  

        $('#atividade').blur(function() 
        {  
            if($(this).val() === '')
            {
                $(this).css('color','#a0a0a0');
                $(this).val("Digite Ramo de Ativivdade");
            }
        });

        $('#message').focus(function() 
        {  
            if($(this).val() === "Digite informações complementares")
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
                $(this).val("Digite informações complementares");
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
        razao = $form.find( "input[name='razao']" ).val(),
        fantasia = $form.find( "input[name='fantasia']" ).val(),
        cnpj = $form.find( "input[name='cnpj']" ).val(),
        estadual = $form.find( "input[name='estadual']" ).val(),
        municipal = $form.find( "input[name='municipal']" ).val(),
        name = $form.find( "input[name='name']" ).val(),
        tel = $form.find( "input[name='tel']" ).val(),
        end = $form.find( "input[name='end']" ).val(),
        compl = $form.find( "input[name='compl']" ).val(),
        cep = $form.find( "input[name='cep']" ).val(),
        email = $form.find( "input[name='email']" ).val(),
        atividade = $form.find( "#atividade" ).val(),
        message = $form.find( "#message" ).val(),
        url = $form.attr( "action" );
        send = 1;

        if(razao === null || razao === " Digite Nome / Razão Social" || razao === ' “Nome / Razão Social” é obrigatório')
        {
            $form.find("input[name='razao']").val(' “Nome / Razão Social” é obrigatório');
            $form.find("input[name='razao']").css('color', 'red');
            send = 0;
        }

        if(fantasia === null || fantasia === " Digite Nome Fantasia" || fantasia === ' “Nome do Fantasia” é obrigatório')
        {
            $form.find("input[name='fantasia']").val(' “Nome Fantasia” é obrigatório');
            $form.find("input[name='fantasia']").css('color', 'red');
            send = 0;
        }

        if(cnpj === null || cnpj === " Digite CNPJ válido" || cnpj === ' “CNPJ” é obrigatório')
        {
            $form.find("input[name='cnpj']").val(' “CNPJ” é obrigatório');
            $form.find("input[name='cnpj']").css('color', 'red');
            send = 0;
        }

        if(name === null || name === " Digite seu nome" || name === ' "Contato" é obrigatório')
        {
            $form.find("input[name='name']").val(' "Contato" é obrigatório');
            $form.find("input[name='name']").css('color', 'red');
            send = 0;
        }

        if(tel === null || tel === "(DDD)Número" || tel === ' "Telefone" é obrigatório')
        {
            $form.find("input[name='tel']").val(' "Telefone" é obrigatório');
            $form.find("input[name='tel']").css('color', 'red');
            send = 0;
        }

        if(end === null || end === "Digite o endereço" || tel === '"Endereço" é obrigatório')
        {
            $form.find("input[name='end']").val('"Endereço" é obrigatório');
            $form.find("input[name='end']").css('color', 'red');
            send = 0;
        }
        
        if(compl === null || compl === "Digite número, bloco, etc" || compl === '"Complemento" é obrigatório')
        {
            $form.find("input[name='compl']").val('"Complemento" é obrigatório');
            $form.find("input[name='compl']").css('color', 'red');
            send = 0;
        }

        if(cep === null || cep === "Digite o CEP" || cep === '"Cep" é obrigatório')
        {
            $form.find("input[name='cep']").val('"Cep" é obrigatório');
            $form.find("input[name='cep']").css('color', 'red');
            send = 0;
        }

        if(email === null || email === "Digite seu email" || email == "O campo e-mail é obrigatório")
        {
            $form.find("input[name='email']").val('O campo e-mail é obrigatório');
            $form.find("input[name='email']").css('color', 'red');
            send = 0;
        }

        if(atividade === null || atividade === "Digite Ramo de Ativivdade" || atividade == '"Ramo de Atividade" é obrigatório')
        {
            $form.find("input[name='atividade']").val('"Ramo de Atividade" é obrigatório');
            $form.find("input[name='atividade']").css('color', 'red');
            send = 0;
        }
        
        telValidation = tel.replace(/\D/g,'');
        if(telValidation.length < 10 )
        {
            $('#tel').inputmask('remove');
            $("#tel").css('color', 'red');
            $('#tel').val(' "Telefone" é obrigatório');
            send = 0;
        }

        if(send > 0)
        {
            $form.find( "input[name='razao']" ).val('');
            $form.find( "input[name='fantasia']" ).val('');
            $form.find( "input[name='cnpj']" ).val('');
            $form.find( "input[name='estadual']" ).val('');
            $form.find( "input[name='municipal']" ).val('');
            $form.find( "input[name='name']" ).val('');
            $form.find( "input[name='tel']" ).val('');
            $form.find( "input[name='end']" ).val('');
            $form.find( "input[name='compl']" ).val('');
            $form.find( "input[name='cep']" ).val('')
            $form.find( "input[name='email']" ).val('')
            $form.find( "#atividade" ).val('');
            $form.find( "#message" ).val('');
            // Send the data using post
            var posting = $.post( url,{ 
                                    razao: razao, 
                                    fantasia: fantasia, 
                                    cnpj: cnpj, 
                                    estadual: estadual,
                                    municipal: municipal,
                                    name: name, 
                                    tel: tel, 
                                    end: end, 
                                    compl: compl, 
                                    cep: cep, 
                                    email: email, 
                                    atividade: atividade, 
                                    message: message 
                                } ); 
     
      
      // Put the results in a div
      posting.done(function( data ) 
      {
          alert( data);
          /*
        var conteudo;
        conteudo = data;
        $("#result").text(conteudo);
    */
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
          alert( data);
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
           
