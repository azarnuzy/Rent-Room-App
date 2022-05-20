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
                <img src="img/noPhoto.png" class="card-img-top" alt="Ruang Kelas">
                <div class="card-body">
                  <h5 class="card-title text-center">Ruang Kelas</h5>
                  <p class="card-text">Ruang kelas ini memiliki kapasitas 20-30 orang dan biasanya dipakai untuk perkuliahan.</p>
                </div>
              </div>
              <div class="card m-3" style="width: 18rem;">
                <img src="img/noPhoto.png" class="card-img-top" alt="Ruang Kelas">
                <div class="card-body">
                  <h5 class="card-title text-center">Ruang Lab</h5>
                  <p class="card-text">Ruang lab berisi komputer yang biasanya dipakai untuk praktikum. Kapasitas ruangan ini biasanya mencapai 20-25 orang</p>
                </div>
              </div>
              <div class="card m-3" style="width: 18rem;">
                <img src="img/noPhoto.png" class="card-img-top" alt="Ruang Kelas">
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
        <div class="filter-denah filter-option">
            <div class="custom-select" style="width:250px;">
                <select> 
                  <option value="FPMIPA C - Lantai 1">FPMIPA C - Lantai 1</option>
                  <option value="FPMIPA C - Lantai 2">FPMIPA C - Lantai 2</option>
                  <option value="FPMIPA C - Lantai 3">FPMIPA C - Lantai 3</option>
                </select>
            </div>
        </div>
        <div class="denah-images">
            <img src="img/sample-denah.png" alt="">
        </div>
    </div>
    <!-- End Denah -->
@endsection