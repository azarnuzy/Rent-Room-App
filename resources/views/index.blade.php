@extends('layouts.main')

@section('container')
    <!-- Start Hero -->
    <div class="hero">
      <div class="hero__inner container">
        <div class="hero-description">
            <h2>Streamline loan, make it easy for you to keep working and creating!</h2>
            <p>Sistem Informasi Peminjaman Ruangan Kampus</p>
        </div>
      </div>
    </div>
    <!-- End Hero -->
    <!-- Start Daftar Ruangan -->
    <div class="daftar-ruangan my-5 container">
        <h3 class="title-daftar-ruangan text-center">
            Daftar Ruangan
        </h3>
        <div class="list-ruangan d-flex flex-wrap justify-content-center">
            <div class="card m-3" style="width: 18rem;">
                <img src="img/ruang-kelas.jpeg" style="height: 250px" class="card-img-top" alt="Ruang Kelas">
                <div class="card-body">
                  <h5 class="card-title text-center">Ruang Kelas</h5>
                  <p class="card-text">Ruang kelas ini memiliki kapasitas 20-30 orang dan biasanya dipakai untuk perkuliahan.</p>
                </div>
              </div>
              <div class="card m-3" style="width: 18rem;">
                <img src="img/lab-komputer.jpeg" style="height: 250px" class="card-img-top" alt="Ruang Kelas">
                <div class="card-body">
                  <h5 class="card-title text-center">Ruang Lab</h5>
                  <p class="card-text">Ruang lab berisi komputer yang biasanya dipakai untuk praktikum. Kapasitas ruangan ini biasanya mencapai 20-25 orang</p>
                </div>
              </div>
              <div class="card m-3" style="width: 18rem;">
                <img src="img/noPhoto.png" style="height: 250px" class="card-img-top" alt="Ruang Kelas">
                <div class="card-body">
                  <h5 class="card-title text-center">Ruang Dosen</h5>
                  <p class="card-text">Ruang ini digunakan oleh dosen untuk istirahat</p>
                </div>
              </div>
        </div>
    </div>
    <!-- End Daftar Ruangan -->
    <!-- Start Denah -->
    <div class="denah my-4 container">
      <h2 class="title-denah text-center">Denah</h2>
      <select class="form-select denah-select d-block mx-auto" id="denah-select" style="width: 50%" aria-label="Default select example">
        <option selected>Pilih Denah</option>
        <option value="1">FPMIPA C - Lantai 1</option>
        <option value="2">FPMIPA C - Lantai 2</option>
        <option value="3">FPMIPA C - Lantai 3</option>
      </select>
      <div class="denah-images">
        <img src="/img/denah_lt1.png" class="denah_lt1-img d-none" alt="">
        <img src="/img/denah_lt2.png" class="denah_lt2-img d-none" alt="">
        <img src="/img/denah_lt3.png" class="denah_lt3-img d-none" alt="">
      </div>
    </div>
    <!-- End Denah -->
@endsection