@extends('dashboard.layouts.main')

@section('container')
<!-- Main Content -->
<div class="col-md-10 p-0">
    <h2 class="content-title text-center">{{$room->name}}</h2>
    <article class='explore-detail d-flex flex-wrap' style="margin-left: 20px;" tabindex='0'>
        <div class='img-container'>
          <img
            class='explore-item__thumbnail'
            src='../../img/{{ $room->img }}'
            alt='{{ $room->img }}'
            tabindex='0'
            style="width: 18rem;"
          />
        </div>
        
        <ul class='detail-explore__info'>
            <table class="table table-borderless table-sm">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col">Nama</th>
                        <td>: {{$room->name}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Kode Ruangan</th>
                        <td>: {{$room->code}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Gedung</th>
                        <td>: {{$room->building->name}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Lantai</th>
                        <td>: {{$room->floor}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Kapasitas</th>
                        <td>: {{$room->capacity}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Tipe Ruangan</th>
                        <td>: {{$room->type}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Deskripsi</th>
                        <td>: {{$room->description}}</td>
                    </tr>
                </tbody>
            </table>
        </ul>
    </article>
    <h2 class="content-title text-center" style="margin-top: 20px;">Daftar Peminjaman </h2>
    <!-- tambahkan content disini! -->
    <div class="card-body text-end me-3">
        <div class="d-flex justify-content-between align-items-center">
            <div class="filter-tgl-wrap">
                <label for="tlg-pinjam-detail"><strong>Tanggal: </strong></label>
                <input type="date" name="tgl-pinjam-detail" class="filter-tgl" id="tgl-pinjam-detail">
            </div>
            <a class="btn btn-primary mb-3 button d-block" href="./addDosen.php" role="button">Pinjam</a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-stripped table-bordered text-center">
                <thead class="table-info">
                  <tr>
                    <th scope="row">No.</th>
                    <th scope="row">Nama Peminjam</th>
                    <th scope="row">Mulai Pinjam</th>
                    <th scope="row">Selesai Pinjam</th>
                    <th scope="row">Tujuan</th>
                    <th scope="row">Waktu Transaksi</th>
                    <th scope="row">Status Pinjam</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($rents as $rent)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th scope="row">
                      <td>{{ $rent->user->name }}</td>
                      <td>{{ $rent->time_start_use }}</td>
                      <td>{{ $rent->time_end_use }}</td>
                      <td>{{ $rent->purpose }}</td>
                      <td>{{ $rent->transaction_start }}</td>
                      <td>{{ $rent->status }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
<!-- Main Content -->
</div>
@endsection