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
          </ul>
        </div>
      </div>
      <div class="sign_in">
        <a href="/login">Sign In</a>
      </div>
  </header>
  <!-- End Navbar -->