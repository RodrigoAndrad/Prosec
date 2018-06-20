<div class="side-menu" id="admin-side-menu">
  <aside class="menu m-t-30 m-l-10">
    <p class="menu-label">
      General
    </p>
    <ul class="menu-list">
      <li><a href="{{route('manage.dashboard')}}" class="{{Nav::isRoute('manage.dashboard')}}">Dashboard</a></li>
    </ul>

    <p class="menu-label">
      Desenvolvedor
    </p>
    <ul class="menu-list">
      <li><a href="{{route('pages.index')}}" class="{{Nav::isResource('pages', 2)}}">Páginas</a></li>
      {{-- <li>
        <a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}">Roles &amp; Permissions</a>
        <ul class="submenu">
          <li><a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Roles</a></li>
          <li><a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Permissions</a></li>
        </ul>
      </li> --}}
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('components.index')}}" class="{{Nav::isResource('components', 2)}}">Componentes</a></li>
      {{-- <li>
        <a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}">Roles &amp; Permissions</a>
        <ul class="submenu">
          <li><a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Roles</a></li>
          <li><a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Permissions</a></li>
        </ul>
      </li> --}}
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('elements.index')}}" class="{{Nav::isResource('elements', 2)}}">Elementos</a></li>
      {{-- <li>
        <a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}">Roles &amp; Permissions</a>
        <ul class="submenu">
          <li><a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Roles</a></li>
          <li><a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Permissions</a></li>
        </ul>
      </li> --}}
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('texts.index')}}" class="{{Nav::isResource('texts', 2)}}">Textos</a></li>
      {{-- <li>
        <a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}">Roles &amp; Permissions</a>
        <ul class="submenu">
          <li><a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Roles</a></li>
          <li><a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Permissions</a></li>
        </ul>
      </li> --}}
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('images.index')}}" class="{{Nav::isResource('images', 2)}}">Imagens</a></li>
      {{-- <li>
        <a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}">Roles &amp; Permissions</a>
        <ul class="submenu">
          <li><a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Roles</a></li>
          <li><a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Permissions</a></li>
        </ul>
      </li> --}}
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('links.index')}}" class="{{Nav::isResource('links', 2)}}">Links</a></li>
      {{-- <li>
        <a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}">Roles &amp; Permissions</a>
        <ul class="submenu">
          <li><a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Roles</a></li>
          <li><a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Permissions</a></li>
        </ul>
      </li> --}}
    </ul>

    <p class="menu-label">
      Administration
    </p>
    <ul class="menu-list">
      <li><a href="{{route('users.index')}}" class="{{Nav::isResource('users')}}">Manage Users</a></li>
      <li>
        <a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}">Roles &amp; Permissions</a>
        <ul class="submenu">
          <li><a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Roles</a></li>
          <li><a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Permissions</a></li>
        </ul>
      </li>
      <li>
        <a class="has-submenu">Example Accordion</a>
        <ul class="submenu">
          <li><a href="{{route('roles.index')}}">Roles</a></li>
          <li><a href="{{route('permissions.index')}}">Permissions</a></li>
        </ul>
      </li>
      <li>
        <a class="has-submenu">Another Example</a>
        <ul class="submenu">
          <li><a href="{{route('roles.index')}}">Roles</a></li>
          <li><a href="{{route('permissions.index')}}">Permissions</a></li>
        </ul>
      </li>
    </ul>
    <p class="menu-label">
      Administrador
    </p>
    <ul class="menu-list">
      <li><a href="{{route('manage.website.homepage')}}">Home</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('manage.servicos')}}">Serviços</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('manage.vigPatrimonial')}}">Vigilância Patrimonial</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('manage.vigPessoalEscolta')}}">Vigilância Pessoal e Escolta</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('manage.portariaRecepcao')}}">Portaria, Controlador de Acesso e Recepção</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('manage.segEletronica')}}">Segurança Eletrônica</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('manage.24h')}}">Monitoramento 24h</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('manage.proControl')}}">Pro Control</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('manage.limpeza')}}">Limpeza</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('manage.servicosGerais')}}">Serviços Gerais</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('manage.atuacao')}}">Áreas de Atuação</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('manage.grupo')}}">O Grupo</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('manage.conheca')}}">Conheça</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('manage.respSocial')}}">Responsabilidade Social</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('manage.proAcao')}}">Pro Ação</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('manage.proAcaoCampanha')}}">Pro Ação Campanha</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('manage.clientes')}}">Nossos Clientes</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('manage.rh')}}">Políticas de RH</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('manage.faleConosco')}}">Fale Conosco</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('manage.sac')}}">SAC</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('manage.trabalheConosco')}}">Trabalhe Conosco</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('manage.fornecedores')}}">Cadastro de Fornecedores</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('manage.contatos')}}">Endereços e Telefones</a></li>
    </ul>
    <ul class="menu-list">
      <li><a href="{{route('manage.proposta')}}">Solicite Uma Proposta</a></li>
    </ul>
  </aside>
</div>