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
          <th scope="row">Kode Ruangan</th>
          <th scope="row">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($rooms as $room)
          <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $room->name }}</td>
            <td>{{ $room->code }}</td>
            <td style="font-size: 22px;">
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
