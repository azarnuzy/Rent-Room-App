@extends('dashboard.layouts.main')

@section('container')
<div class="col-md-10 p-0">
    <h2 class="content-title text-center">Daftar {{$title}}</h2>
<div class="card-body text-end">
  <button type="button" class="mb-3 btn button btn-primary tambahDosen" data-bs-toggle="modal" data-bs-target="#tambahDsn">
      Pinjam
  </button>
  <a class="btn btn-primary mb-3 button" href="./addDosen.php" role="button">Tambah Ruangan</a>
  <div class="table-responsive">
    <table class="table table-hover table-stripped table-bordered text-center">
      <thead class="table-info">
        <tr>
          <th scope="row">No.</th>
          <th scope="row">Nama Ruangan</th>
          <th scope="row">Nama Peminjam</th>
          <th scope="row">Mulai</th>
          <th scope="row">Selesai</th>
          <th scope="row">Tujuan</th>
          <th scope="row">Status Pinjam</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($rents as $rent)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th scope="row">
            <td>{{ $rent->room->name }}</td>
            <td>{{ $rent->user->name }}</td>
            <td>{{ $rent->time_start }}</td>
            <td>{{ $rent->time_end }}</td>
            <td>{{ $rent->purpose }}</td>
            <td>{{ $rent->status }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
@extends('dashboard.partials.modal')
@endsection
