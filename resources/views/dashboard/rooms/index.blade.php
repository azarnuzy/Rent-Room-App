@extends('dashboard.layouts.main')

@section('container')
<div class="col-md-10 p-0">
    <h2 class="content-title text-center">Daftar {{$title}}</h2>
<div class="card-body text-end">
  @if(session()->has('roomSuccess'))
    <div class="col-md-16 mx-auto alert alert-success text-center  alert-success alert-dismissible fade show" style="margin-top: 50px" role="alert">
        {{session('roomSuccess')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if(session()->has('deleteRoom'))
    <div class="col-md-16 mx-auto alert alert-success text-center  alert-dismissible fade show" style="margin-top: 50px" role="alert">
        {{session('deleteRoom')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if (auth()->user()->role_id <= 4)    
  <button type="button" class="mb-3 btn button btn-primary" data-bs-toggle="modal" data-bs-target="#pinjamRuangan">
    Pinjam
  </button>
  @endif
    @if (auth()->user()->role_id <= 2)
    <button type="button" class="mb-3 btn button btn-primary" data-bs-toggle="modal" data-bs-target="#addRoom">
      Tambah Ruangan
    </button>
    @endif
  <div class="table-responsive">
    <table class="table table-hover table-stripped table-bordered text-center dt-head-center">
      <thead class="table-info">
        <tr>
          <th class="text-center" scope="row">No.</th>
          <th class="text-center" scope="row">Nama Ruangan</th>
          <th class="text-center" scope="row">Kode Ruangan</th>
          @if(auth()->user()->role_id <= 2)
          <th class="text-center" scope="row">Action</th>
          @endif
        </tr>
      </thead>
      <tbody>
        @foreach ($rooms as $room)
          <tr>
            <th>{{ $loop->iteration }}</th>
            <td><a href="/dashboard/rooms/{{ $room->code }}" class="text-decoration-none" role="button">{{ $room->name }}</a></td>
            <td>{{ $room->code }}</td>
            @if (auth()->user()->role_id <= 2)    
            <td style="font-size: 22px;">
              <a href="/dashboard/rooms/{{ $room->code }}/edit" class="bi bi-pencil-square text-warning border-0 editroom" id="editroom" data-id="{{ $room->id }}" data-code="{{ $room->code }}" data-bs-toggle="modal" data-bs-target="#editRoom"></a>
              &nbsp;
              <form action="/dashboard/rooms/{{ $room->code }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="bi bi-trash-fill text-danger border-0" onclick="return confirm('Hapus data ruangan?')"></button>
              </form>
            </td>
            @endif
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="d-flex justify-content-end">
    {{ $rooms->links() }}
  </div>
</div>
</div>
@extends('dashboard.partials.rentModal')
@extends('dashboard.partials.addRoomModal')
@extends('dashboard.partials.editRoomModal')
@endsection
