@extends('dashboard.layouts.main')

@section('container')
<div class="col-md-10 p-0">
    <h2 class="content-title text-center">Daftar {{$title}}</h2>
<div class="card-body text-end">
    <a class="btn btn-primary mb-3 button" href="./addDosen.php" role="button">Pinjam</a>
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
          <th scope="row">Action</th>
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
            <td>
              <a href=""><i
                class="bi bi-pencil-square text-warning"></i></a>&nbsp;<a
              href=""><i
                class="bi bi-trash-fill text-danger"></i></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
@endsection
