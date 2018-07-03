<?php 
$agora = Carbon\Carbon::now();
?>
<div class="row cabeca">
    <header id="cabecalho">
        <div class="col-smart-3 col-tablet-3 col-laptop-3 col-desktop-3">
            <a href="index.html"><img class="logo_ps_topo" src="{{asset('images/logoPRO.png')}}" width="240" height="63" alt="logo prosecurity" align="left"></a>
        </div>
        <div class="col-smart-9 col-tablet-9 col-laptop-9 col-desktop-9 ico-menu">
            <figure >
                <a href="#"><img id="menuMobile" class="menuMobile" src="{{asset('images/menu_mobile2.png')}}" width="50" height="44" alt="menu mobile" align="right"></a>
            </figure>
            <nav id="mobileNavbar" class="mobileNavbar">
                <div class= "menu-mobile">
                    <ul class="menu-mobile-list">
                        <li><a href="servicos.html">Serviços</a></li>
                        <li><a href="atuacao.html">Áreas de Atuação</a></li>
                        <li><a href="grupo.html">O Grupo</a></li>
                        <li><a href="fale-conosco.html">fale conosco</a></li>
                        <li><a href="proposta.html">Solicite uma Proposta</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="col-smart-12 col-tablet-12 col-laptop-9 col-desktop-9" style="width: 75%;" >
            <!-- Menu -->
            <nav>
                <div class= "menu">
                    <ul class="menu-list">
                        <li><a href="servicos.html">Serviços</a>
                            <ul class="sub-menu">
                                <a href="vig-patrimonial.html"><li>Vigilância Patrimonial</li></a>
                                <a href="vig-pessoal-escolta.html"><li>Vigilância Pessoal Privada e Escolta</li></a>
                                <a href="portaria-recepcao.html"><li>Portaria, Controlador de Acesso e Recepção</li></a>
                                <a href="http://intelligentservice.com.br/" target="blank"><li>Intelligent Service - Portaria Virtual</li></a>
                                <a href="seg-eletronica.html"><li>Segurança Eletrônica</li></a>
                                <a href="24h.html"><li>Monitoramento 24h</li></a>
                                <a href="pro-control.html"><li>Pro Control</li></a>
                                <a href="limpeza.html"><li>Limpeza e Conservação</li></a>
                                <a href="servicos-gerais.html"><li>Serviços Gerais</li></a>
                            </ul>
                        </li>
                        <li><a href="atuacao.html">Áreas de Atuação</a></li>
                        <li><a href="grupo.html">O Grupo</a>
                            <!-- SubMenu 1-->
                            <ul class="sub-menu">
                                <a href="conheca.html"><li>Conheça</li></a>
                                <a href="resp-social.html"><li>Responsabilidade Social</li></a>
                                <a href="pro-acao.html"><li>Pro Ação Criança</li></a>
                                @if($campanha)
                                <a href="pro-acao-campanha.html" style="background-color: red;"><li>Pro Ação Criança {{$agora->year}}</li></a>
                                @endif
                                <a href="clientes.html"><li>Nossos Clientes</li></a>
                                <a href="rh.html"><li>Política de RH</li></a>
                                <a href="http://prosecurity.com.br/pronews/" target="blank"><li>Últimas Notícias</li></a>
                            </ul>
                        </li>
                        <li><a href="fale-conosco.html">Fale Conosco</a>
                            <ul class="sub-menu">
                                <a href="sac.html"><li>SAC</li></a>
                                <a href="trabalhe-conosco.html"><li>Trabalhe Conosco</li></a>
                                <a href="fornecedores.html"><li>Cadastro de Fornecedores</li></a>
                                <a href="contatos.html"><li>Endereços e Telefones</li></a>
                            </ul>
                        </li>
                        <li><a href="proposta.html">Solicite uma Proposta</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
</div>