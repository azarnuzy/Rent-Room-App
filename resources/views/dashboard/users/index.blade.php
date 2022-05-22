@extends('dashboard.layouts.main')

@section('container')
<div class="col-md-10 p-0">
    <h2 class="content-title text-center">Daftar {{$title}}</h2>
<div class="card-body text-end">
  <button type="button" class="mb-3 btn button btn-primary" data-bs-toggle="modal" data-bs-target="#addUser">
    Tambah User
  </button>
  <div class="table-responsive">
    <table class="table table-hover table-stripped table-bordered text-center">
      <thead class="table-info">
        <tr>
          <th scope="row">No.</th>
          <th scope="row">Username</th>
          <th scope="row">Nomor Induk</th>
          <th scope="row">Email</th>
          <th scope="row">Role</th>
          <th scope="row">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user) 
        <tr>
          <th scope="row">{{$loop->iteration}} </th>
          <td>{{$user->name}} </td>
          <td>{{$user->nomor_induk}} </td>
          <td>{{$user->email}} </td>
          <td>{{$user->role->name}} </td>
          <td style="font-size: 22px;">
            <a href=""><i class="bi bi-pencil-square text-warning"></i></a>&nbsp;
            <form action="/dashboard/users/{{ $user->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button type="submit" class="bi bi-trash-fill text-danger border-0" onclick="return confirm('Hapus data user?')"></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<div class="my-2 text-center d-flex justify-content-center">
  {{ $users->links()}}
</div>
</div>
@extends('dashboard.partials.addUserModal')
@endsection
