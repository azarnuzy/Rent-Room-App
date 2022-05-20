@extends('layouts.main')

@section('container')
    <!-- Start Hero -->
    <div class="hero hero-login">
        <div class="hero__inner container d-flex flex-wrap justify-content-center">
            <div class="left-login">
                <img src="img/logotext.png" alt="logo" >
                <h4>Sistem Informasi Peminjaman Ruangan Kampus</h4>
            </div>
            <div class="right-login">
              <div class="form">
                  <h3 class="title-form">Login</h3>
                  <form action="./admin.html" method="post" class="form-imput">
                    <input
                      type="text"
                      placeholder="Username"
                      class="input-form"
                      name="username"
                    />
                    <input
                      type="password"
                      placeholder="Password"
                      class="input-form"
                      name="password"
                    />
                    <button type="submit" class="button-submit">Login</button>
                  </form>
                </div>
            </div>
        </div>
      </div>
      <!-- End Hero -->
@endsection