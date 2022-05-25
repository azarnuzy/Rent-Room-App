@extends('layouts.main')

@section('container')

<div class="hero hero-about">
    <div class="hero__inner container">
      <div class="hero-description text-center">
          <h2>TENTANG SIMANUK</h2>
          <p>
            Aplikasi <span><b>Sistem Informasi Peminjaman Ruangan di (SiManuk)</b></span> merupakan aplikasi real-time berbasis website. 
            Aplikasi ini menampilkan ketersediaan ruangan serta informasi mendetail lainnya mengenai ruangan yang sedang dan akan dipinjam dalam suatu gedung. 
            Aplikasi ini ditujukan bagi internal (dosen dan mahasiswa) dan eksternal (tamu/guest).
          </p>
      </div>
    </div>
  </div>
  <!-- End Hero -->
  <!-- Start Description About -->
  <div class="description-about container">
      <div class="upper-content d-flex flex-wrap my-4">
          <div class="section section-1 mx-3" style="width: 30vw;">
              <h1 class="title-section text-center">LATAR BELAKANG</h1>
              <div class="section-description">
                Salah satu sarana dan prasarana di lingkungan kampus adalah ruangan kelas. 
                Akan tetapi, terkadang ruangan kelas yang tersedia belum dapat digunakan secara efektif dan umumnya hanya digunakan untuk keperluan jadwal kuliah. 
                Untuk mengefektifkan penjadwalan ruangan dan bisa digunakan untuk berbagai kegiatan, 
                maka dibuatlah aplikasi web berupa peminjaman ruangan di lingkungan kampus khususnya di gedung FPMIPA-C.
              </div>
          </div>
          <div class="section mx-3" style="width: 40vw;">
              <h1 class="title-section text-center">TUJUAN</h1>
              <div class="section-description">
                Aplikasi sistem peminjaman ruangan ini bertujuan untuk mengetahui ruangan apa saja yang sedang dan akan digunakan pada jadwal yang disediakan pada hari tersebut. 
                Selain itu, aplikasi ini juga membantu para mahasiswa baru ataupun tamu dari luar kampus yang kurang bahkan tidak mengetahui letak dari suatu ruangan dalam gedung. 
                Informasi seperti penanggung jawab peminjam ruangan, ruangan yang dipakai, tujuan pemakaian ruangan, jadwal asli pemakaian ruangan, dan lama waktu ruangan dipinjam juga dapat dilihat melalui aplikasi. 
                Tentu hal ini mempermudah para pengakses gedung agar tidak perlu mengecek ruangan satu persatu.
              </div>
          </div>
      </div>
      <div class="lower-content">
          <h1 class="text-center">LOKASI</h1>
          <div class="mapouter m-auto my-4 mb-5">
            <div class="gmap_canvas">
              <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=universitas%20pendidikan%20indonesia%20FPMIPA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
              <a href="https://123movies-to.org"></a><br>
              <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style>
              <a href="https://www.embedgooglemap.net">google map website</a>
              <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
            </div>
          </div>
      </div>
  </div>
  <!-- End Description About -->
  <!-- Start Our Team -->
  <div class="bg-light">
    <h1 class="text-center p-4">TIM KITA</h1>
    <div class="row px-5 pb-5">
      <div class="col-sm">
        <div class="card">
          <div class="card-body">
            <img class="card-img-top rounded-circle" src="img/jek.jpg" alt="Zakaria">
            <h5 class="text-center mt-2">M. Zakaria S.</h5>
            <p class="text-center">2007993</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card">
          <div class="card-body">
            <img class="card-img-top rounded-circle" src="img/rahma.jpeg" alt="Rahma">
            <h5 class="text-center mt-2">Rahma Maulida</h5>
            <p class="text-center">2003688</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card">
          <div class="card-body">
            <img class="card-img-top rounded-circle" src="img/azar.jpg" alt="Azar">
            <h5 class="text-center mt-2">M. Azar Nuzy</h5>
            <p class="text-center">2004191</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card">
          <div class="card-body">
            <img class="card-img-top rounded-circle" src="img/sekar.jpg" alt="Sekar">
            <h5 class="text-center mt-2">Sekar Madu K.</h5>
            <p class="text-center">2007703</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card">
          <div class="card-body">
            <img class="card-img-top rounded-circle" src="img/ahmad.jpg" alt="Ahmad">
            <h5 class="text-center mt-2">Hilman Ahmad R.</h5>
            <p class="text-center">2007325</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Our Team -->
    
@endsection