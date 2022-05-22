<!-- Start Navbar -->
<header class="header d-flex justify-content-center">
    <div class="header_content d-flex flex-row align-items-center">
      <a href="#">
        <div class="logo_container">
          <div class="logo">
            <img src="img/logotext.png" alt="LOGO" />
          </div>
        </div>
      </a>
      <div class="main_nav_container">
        <div class="main_nav">
          <ul class="main_nav_list">
            <li class="main_nav_item {{Request::is('') ? '' : 'active'}}">
              <a href="/">Beranda</a>
            </li>
            <li class="main_nav_item {{Request::is('about') ? 'active' : ''}}">
              <a href="/about">Tentang</a>
            </li>
            <li class="main_nav_item {{Request::is('help') ? 'active' : ''}}">
              <a href="/help">Bantuan</a>
            </li>
            @auth
            <li class="main_nav_item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back, {{auth()->user()->name}}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard/rooms"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                  </form>  
              </ul>
            </li>
            @else
            <li class="main_nav_item {{Request::is('login') ? 'active' : ''}}">
              <a href="/login">Login</a>
            </li>
            @endauth
          </ul>
        </div>
      </div>
  </header>
  <!-- End Navbar -->