@extends('layouts.main')

@section('container')
    <!-- Start Hero -->
    <div class="hero hero-login">
        <div class="hero__inner container d-flex flex-wrap justify-content-center">
        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('loginError')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
            <div class="left-login">
                <img src="img/logotext.png" alt="logo" >
                <h4>sistem informasi peminjaman ruangan di kampus</h4>
            </div>
            <div class="right-login">
              <div class="form">
                  <h3 class="title-form">Login</h3>
                  <form action="/login" method="post" class="form-input">
                      @csrf
                    <input
                      type="email"
                      placeholder="email @error('email') is-invalid @enderror" autofocus required value="{{old('email')}}"
                      class="input-form"
                      name="email"
                      id="email"
                    />
                    @error('email') 
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <input
                      type="password"
                      placeholder="password @error('password') is-invalid @enderror" autofocus required value="{{old('password')}}"
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