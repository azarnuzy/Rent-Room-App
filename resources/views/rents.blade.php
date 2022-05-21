@extends('layouts.second')

@section('container')
<div class="col-md-10 p-0">
    <h2 class="content-title text-center">Daftar Peminjaman</h2>
    <!-- tambahkan content disini! -->
    <div class="card-body text-end">
      <a class="btn btn-primary mb-3 button" href="./addDosen.php" role="button">Pinjam</a>
      <div class="table-responsive">
        <table class="table table-hover table-stripped table-bordered text-center">
          <thead class="table-info">
            <tr>
              <th scope="row">No.</th>
              <th scope="row">Peminjam</th>
              <th scope="row">Kode Ruangan</th>
              <th scope="row">Waktu Awal Pinjam</th>
              <th scope="row">Waktu Akhir Pinjam</th>
              <th scope="row">Tujuan Peminjaman</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Sekar Madu</td>
              <td>A123</td>
              <td>2022-05-20 13:00:07</td>
              <td>Belum kembali</td>
              <td>Rapat</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection