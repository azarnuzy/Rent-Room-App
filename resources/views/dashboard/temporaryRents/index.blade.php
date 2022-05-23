@extends('dashboard.layouts.main')

@section('container')
<div class="col-md-10 p-0">
    <h2 class="content-title text-center">Daftar {{$title}}</h2>
<div class="card-body text-end">
  <div class="table-responsive">
    <table class="table table-hover table-stripped table-bordered text-center">
      <thead class="table-info">
        <tr>
          <th scope="row">No.</th>
          <th scope="row">Nama Ruangan</th>
          <th scope="row">Nama Peminjam</th>
          <th scope="row">Mulai Pinjam</th>
          <th scope="row">Selesai Pinjam</th>
          <th scope="row">Tujuan</th>
          <th scope="row">Mulai Transaksi</th>
          <th scope="row">Status Pinjam</th>
          <th scope="row">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($rents as $rent)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th scope="row">
              <td><a href="" class="text-decoration-none">{{ $rent->room->code }}</a></td>
            <td>{{ $rent->user->name }}</td>
            <td>{{ $rent->time_start }}</td>
            <td>{{ $rent->time_end }}</td>
            <td>{{ $rent->purpose }}</td>
            <td>{{ $rent->transaction_start }}</td>
            <td>{{ $rent->status }}</td>
            <td>
              <button class="btn btn-success mb-2" style="padding: 2px 10px">Setuju</button>
              <button class="btn btn-danger mb-2" style="padding: 2px 10px">Tidak Setuju</button>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
@endsection
