<!--
Author: Studio QI / Luiz Ipolito / Rodrigo Andrade
Author URL: www.estudio.fot.br
-->

<!DOCTYPE html>
<html lang="pt-br">
    @include('_includes.website.head')

    <!--  LinkedIn Insight Tag -->
    <script type="text/javascript"> _linkedin_data_partner_id = "117407"; </script><script type="text/javascript"> (function(){var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(); </script> <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=117407&fmt=gif" /> 
    </noscript>
    
    <body>
        <script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/ad10e0df-81b8-4a9b-9671-6000376c956b-loader.js"></script>
        <div class="container">
            <!-- Cabeçalho -->
            @include('_includes.website.navbar')
            <!-- Corpo -->
            @yield('content')
                <!-- footer -->
                <div class="row rodape">
                    @include('_includes.website.footer')
                </div>
            </div>          
    </body>

@yield('scripts')
    <!-- navegação --><!-- newsletter --><!-- ação topo -->
    <script type="text/javascript">
        $(function ()
        {
            $(".menuMobile").click(function ()
            {
                $(".menu-mobile").find("ul").toggle();
            });

            $("#newsInput").focus(function ()
            {
                if ($("#newsInput").val() === "Seu email")
                {
                    $("#newsInput").val('');
                }

            });

            $("#newsInput").blur(function ()
            {
                if ($("#newsInput").val() === "")
                {
                    $("#newsInput").val("Seu email");
                }

            });
        });

        jQuery(document).ready(function ($)
        {
            $(".scroll").click(function (event)
            {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });

        });

    </script>

    <script>
        // Attach a submit handler to the form
        $("#newsForm").submit(function (event) {
            // Stop form from submitting normally
            event.preventDefault();

            // Get some values from elements on the page:
            var $form = $(this),
            newsEmail = $form.find("input[name='newsEmail']").val(),
            url = $form.attr("action");
            
            // Send the data using post
            var posting = $.post(url, {email: newsEmail});
            $("#newsInput").val("");
            hideEnter();
            // Put the results in a div
            posting.done(function (data)
            {
                $( "#dialog-message" ).dialog({
                modal: true,
                buttons: {
                  Ok: function() {
                    $( this ).dialog( "close" );
                  }
                }
              });
              
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

    <!-- banner rotativo -->


    <script>
        var crtl = 0;
        $(window).scroll(function () {
            var hT = $('#sistemasEletronicos').offset().top,
                    hH = $('#sistemasEletronicos').outerHeight(),
                    wH = $(window).height(),
                    wS = $(this).scrollTop();
            //console.log((hT-wH) , wS);
            if (wS > (hT + hH - wH))
            {
                if (crtl === 0)
                {
                    crtl++;
                    $('.count').each(function () {
                        $(this).prop('Counter', 0).animate({
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
</html>