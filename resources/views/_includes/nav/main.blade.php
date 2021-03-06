<nav class="navbar has-shadow" style="position: fixed; width: 100%; z-index: 50000;">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item is-paddingless brand-item" href="{{route('manage.home')}}">
        <img src="{{asset('images/prosecurity-logo.png')}}" alt="Prosecurity Logo">
      </a>

      @if (Request::segment(1) == "manage")
        <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
          <span class="icon">
            <i class="fa fa-arrow-circle-right"></i>
          </span>
        </a>
      @endif

      <button class="button navbar-burger">
       <span></span>
       <span></span>
       <span></span>
     </button>
    </div>
    <div class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item is-tab is-active">Gerenciador</a>
        <a class="navbar-item is-tab" href="{{route('siteHomePage')}}" target="_blank">Website</a>
         <!-- <a class="navbar-item is-tab">Preview</a> -->
      </div> <!-- end of .navbar-start -->


      <div class="navbar-end nav-menu" style="overflow: visible">
        @guest
          <a href="{{route('login')}}" class="navbar-item is-tab">Entrar</a>
          <!-- <a href="{{route('register')}}" class="navbar-item is-tab">Join the Community</a> -->
        @else
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">Olá, {{Auth::user()->name}}</a>
            <div class="navbar-dropdown is-right" >
              <a href="#" class="navbar-item">
                <span class="icon">
                  <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                </span>Perfil
              </a>

              <a href="#" class="navbar-item">
                <span class="icon">
                  <i class="fa fa-fw fa-bell m-r-5"></i>
                </span>Notificações
              </a>
              <a href="{{route('manage.dashboard')}}" class="navbar-item">
                <span class="icon">
                  <i class="fa fa-fw fa-cog m-r-5"></i>
                </span>Gerenciar Site
              </a>
              <hr class="navbar-divider">
              <a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                <span class="icon">
                  <i class="fa fa-fw fa-sign-out m-r-5"></i>
                </span>
                Logout
              </a>
              @include('_includes.forms.logout')
            </div>
          </div>
        @endguest
      </div>
    </div>

  </div>
</nav>