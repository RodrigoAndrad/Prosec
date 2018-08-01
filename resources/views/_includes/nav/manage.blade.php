<div class="side-menu" id="admin-side-menu">
  <aside class="menu m-t-30 m-l-10" id="sideBar">
    <b-collapse :open.sync="generalIsOpen">
      <div slot="trigger">
          <p class="menu-label">
            Painéis
            <i v-if="generalIsOpen" id="bannerDropdownIcon" class="fa fa-chevron-down is-pulled-right p-r-10"></i>
            <i v-else id="bannerDropdownIcon" class="fa fa-chevron-up is-pulled-right p-r-10"></i>
          </p>
      </div> 
      <ul class="menu-list">
        <li><a href="{{route('manage.dashboard')}}" class="{{Nav::isRoute('manage.dashboard')}}">Dashboard</a></li>
      </ul>
    </b-collapse>
    <hr />
    <b-collapse :open.sync="devIsOpen">
      <div slot="trigger">
        <p class="menu-label">
          Desenvolvedor
          <i v-if="devIsOpen" id="bannerDropdownIcon" class="fa fa-chevron-down is-pulled-right p-r-10"></i>
          <i v-else id="bannerDropdownIcon" class="fa fa-chevron-up is-pulled-right p-r-10"></i>
        </p>
      </div>
    <ul class="menu-list">
      <li><a href="{{route('pages.index')}}" class="{{Nav::isResource('pages', 2)}}">Páginas</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('components.index')}}" class="{{Nav::isResource('components', 2)}}">Componentes</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('elements.index')}}" class="{{Nav::isResource('elements', 2)}}">Elementos</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('texts.index')}}" class="{{Nav::isResource('texts', 2)}}">Textos</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('images.index')}}" class="{{Nav::isResource('images', 2)}}">Imagens</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('links.index')}}" class="{{Nav::isResource('links', 2)}}">Links</a></li>
    </ul>
    </b-collapse>
    <hr />
    <b-collapse :open.sync="adminIsOpen">
      <div slot="trigger">
        <p class="menu-label">Administrar Usuários
          <i v-if="adminIsOpen" id="bannerDropdownIcon" class="fa fa-chevron-down is-pulled-right p-r-10"></i>
          <i v-else id="bannerDropdownIcon" class="fa fa-chevron-up is-pulled-right p-r-10"></i>
        </p>
      </div>
      <ul class="menu-list">
        <li><a href="{{route('users.index')}}" class="{{Nav::isResource('users')}}">Manage Users</a></li>
        <b-collapse :open.sync="rolesAndPermissionsIsOpen">
          <div slot="trigger">
            <p class="menu-label">
              <a>
              <i v-if="adminIsOpen" id="bannerDropdownIcon" class="fa fa-chevron-down is-pulled-right p-r-10 has-font-size-10"></i>
              <i v-else id="bannerDropdownIcon" class="fa fa-chevron-up is-pulled-right p-r-10 has-font-size-10"></i>
              Roles &amp; Permissions</a>
            </p>  
          </div>
        <li>
          <ul>
            <li><a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Roles</a></li>
            <li><a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Permissions</a></li>
          </ul>
        </li>
      </ul>    
      </b-collapse> 
      </ul>
    </b-collapse>
    <hr /> 
    <b-collapse :open.sync="editorIsOpen">
      <div slot="trigger">
        <p class="menu-label">
          Gerenciar Conteúdo
          <i v-if="editorIsOpen" id="bannerDropdownIcon" class="fa fa-chevron-down is-pulled-right p-r-10"></i>
          <i v-else id="bannerDropdownIcon" class="fa fa-chevron-up is-pulled-right p-r-10"></i>
        </p>
     </div>
     <ul class="menu-list">
        <li><a href="{{route('manage.website.homepage')}}" class="{{Nav::isRoute('manage.website.homepage')}}">Home</a></li>
      <ul class="menu-list">
        <li><a href="{{route('manage.servicos')}}" class="{{Nav::isRoute('manage.servicos')}}">Serviços</a>
          <ul>
            <li><a href="{{route('manage.vigPatrimonial')}}" class="{{Nav::isRoute('manage.vigPatrimonial')}}">Vigilância Patrimonial</a></li>
            <li><a href="{{route('manage.vigPessoalEscolta')}}" class="{{Nav::isRoute('manage.vigPessoalEscolta')}}">Vigilância Pessoal e Escolta</a></li>
            <li><a href="{{route('manage.portariaRecepcao')}}" class="{{Nav::isRoute('manage.portariaRecepcao')}}">Portaria, Controlador de Acesso e Recepção</a></li>
            <li><a href="{{route('manage.segEletronica')}}" class="{{Nav::isRoute('manage.segEletronica')}}">Segurança Eletrônica</a></li>
            <li><a href="{{route('manage.24h')}}" class="{{Nav::isRoute('manage.24h')}}">Monitoramento 24h</a></li>
            <li><a href="{{route('manage.proControl')}}" class="{{Nav::isRoute('manage.proControl')}}">Pro Control</a></li>
            <li><a href="{{route('manage.limpeza')}}" class="{{Nav::isRoute('manage.limpeza')}}">Limpeza</a></li>
            <li><a href="{{route('manage.servicosGerais')}}" class="{{Nav::isRoute('manage.servicosGerais')}}">Serviços Gerais</a></li>
          </ul>
        </li>  
      </ul>
      <ul class="menu-list">
        <li><a href="{{route('manage.atuacao')}}" class="{{Nav::isRoute('manage.atuacao')}}">Áreas de Atuação</a></li>
      </ul>
      <ul class="menu-list">
        <li><a href="{{route('manage.grupo')}}" class="{{Nav::isRoute('manage.grupo')}}">O Grupo</a>
          <ul>
            <li><a href="{{route('manage.conheca')}}" class="{{Nav::isRoute('manage.conheca')}}">Conheça</a></li>
            <li><a href="{{route('manage.respSocial')}}" class="{{Nav::isRoute('manage.respSocial')}}">Responsabilidade Social</a></li>
            <li><a href="{{route('manage.proAcao')}}" class="{{Nav::isRoute('manage.proAcao')}}">Pro Ação</a></li>
            <li><a href="{{route('manage.proAcaoCampanha')}}" class="{{Nav::isRoute('manage.proAcaoCampanha')}}">Pro Ação Campanha</a></li>
            <li><a href="{{route('manage.clientes')}}" class="{{Nav::isRoute('manage.clientes')}}">Nossos Clientes</a></li>
            <li><a href="{{route('manage.rh')}}" class="{{Nav::isRoute('manage.rh')}}">Políticas de RH</a></li>
          </ul>
        </li>
      </ul>
      <ul class="menu-list">
        <li><a href="{{route('manage.faleConosco')}}" class="{{Nav::isRoute('manage.faleConosco')}}">Fale Conosco</a>
          <ul>
            <li><a href="{{route('manage.sac')}}" class="{{Nav::isRoute('manage.sac')}}">SAC</a></li>
            <li><a href="{{route('manage.trabalheConosco')}}" class="{{Nav::isRoute('manage.trabalheConosco')}}">Trabalhe Conosco</a></li>
            <li><a href="{{route('manage.fornecedores')}}" class="{{Nav::isRoute('manage.fornecedores')}}">Cadastro de Fornecedores</a></li>
            <li><a href="{{route('manage.contatos')}}" class="{{Nav::isRoute('manage.contatos')}}">Endereços e Telefones</a></li>
            <li><a href="{{route('manage.proposta')}}" class="{{Nav::isRoute('manage.proposta')}}">Solicite Uma Proposta</a></li>
          </ul>
        </li>
      </ul>
    </ul>
  </b-collapse>
  <hr />   
  </aside>
</div>

<script>
var componentes = new Vue({
  el: '#sideBar',
  data: {
    generalIsOpen: false,
    devIsOpen: false,
    adminIsOpen: false,
    rolesAndPermissionsIsOpen: false,
    editorIsOpen: false,
  },
  methods: {
    getConsolePage: function()
    {
      // var rsa = {{ Route::currentRouteName() }}.split('.');
      // console.log(rsa);
    }
  },
  created: function() {
    var path = window.location.pathname.split('/');
    switch(path[path.length - 1]) {
      case 'home':
        if(path[path.length - 2] === 'content')
        {
          this.editorIsOpen = true; 
        }
        else
        {
          this.generalIsOpen = true;
        }
        break;
      case 'dashboard':
          this.generalIsOpen = true;
        break;
      case 'pages':
      case 'components':
      case 'elements':
      case 'texts':
      case 'images':
      case 'links':
          this.devIsOpen = true;
        break;
      case 'users':
          this.adminIsOpen = true;
        break;
      case'roles':
      case 'permissions':
          this.adminIsOpen = true;
          this.rolesAndPermissionsIsOpen = true;
        break;      
      case 'servicos':
      case 'vig-patrimonial':
      case 'vig-pessoal-escolta':
      case 'portaria-recepcao':
      case 'seg-eletronica':
      case '24h':
      case 'pro-control':
      case 'limpeza':
      case 'servicos-gerais':
      case 'atuacao':
      case 'grupo':
      case 'conheca':
      case 'resp-social':
      case 'pro-acao':
      case 'pro-acao-campanha':
      case 'clientes':
      case 'rh':
      case 'sac':
      case 'trabalhe-conosco':
      case 'fornecedores':
      case 'contatos':
      case 'proposta':
          this.editorIsOpen = true;
        break;
    }

    var $container = $("#admin-side-menu");
    var $scrollTo = $container.find('.is-active');
    $container.animate({
      scrollTop: $scrollTo.offset().top - $container.offset().top - 500
    }, 2000);
    
  }

});
</script>