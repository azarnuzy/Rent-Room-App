@extends('dashboard.layouts.main')

@section('container')
<!-- Main Content -->
{{-- @dd(request()->segment(count(request()->segments()))) --}}
{{-- @dd(count(request()->segments())) --}}
<div class="col-md-10 p-0">
    <h2 class="content-title text-center mb-3">{{$room->name}}</h2>
    <article class='explore-detail d-flex flex-wrap' style="margin-left: 20px;" tabindex='0'>
        <div class='img-container'>
          <img
            class='explore-item__thumbnail'
            src='{{ asset('storage/' . $room->img) }}'
            alt='{{ $room->name . '.jpg' }}'
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
            <div class="input-group mb-3 filter-tgl-wrap">
                <label for="tgl-pinjam-detail"><strong>Tanggal: </strong></label>
                <div class="filter-detail ms-2 text-start" style="width: 30%; float:left;">
                    <input type="date" class="form-control" name="bday" id="datePicker" style="width: 50%; display: inline-block;">
                    <input type="button" class="btn button text-white" value="Filter" id="datebtn">
                    <input type="button" class="btn button text-white" value="Reset" id="datereset">
                    <!-- <input type="date" class="form-control" id="tgl-pinjam-detail" style="width: 50%; display: inline-block;">
                    <button class="input-group-text btn btn-primary" id="submit-detail-filter">Filter</button> -->
            </div>
            </div>
            @if (auth()->user()->role_id <= 4)
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#pinjamRuangan">Pinjam</button>
            @endif
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-stripped table-bordered text-center dt-head-center" id="datatable">
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
                <tbody class="rent-details">
                    @foreach ($rents as $rent)
                    <tr class="rent-detail">
                      <th scope="row">{{ $loop->iteration }}</th scope="row">
                      <td>{{ $rent->user->name }}</td>
                      <td class="detail-rent-room_start-time">{{ $rent->time_start_use }}</td>
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
@extends('dashboard.partials.rentModal')
@endsection