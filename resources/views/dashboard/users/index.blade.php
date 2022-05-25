@extends('dashboard.layouts.main')

@section('container')
<div class="col-md-10 p-0">
    <h2 class="content-title text-center">Daftar {{$title}}</h2>
<div class="card-body text-end">
  @if(session()->has('userSuccess'))
    <div class="col-md-16 mx-auto alert alert-success text-center  alert-success alert-dismissible fade show" style="margin-top: 50px" role="alert">
        {{session('userSuccess')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if(session()->has('deleteUser'))
    <div class="col-md-16 mx-auto alert alert-success text-center  alert-dismissible fade show" style="margin-top: 50px" role="alert">
        {{session('deleteUser')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
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
            <a href="/dashboard/users/{{ $user->id }}/edit" class="edituser" id="edituser" data-id="{{ $user->id }}" data-bs-toggle="modal" data-bs-target="#edituser"><i class="bi bi-pencil-square text-warning"></i></a>&nbsp;
            <a href="/dashboard/users/{{ $user->id }}/makeAdmin" class="makeadmin" id="makeadmin"><i class="bi bi-person-plus-fill"></i></a>&nbsp;
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
  <div class="d-flex justify-content-end">
    {{ $users->links() }}
  </div>
</div>
</div>
@extends('dashboard.partials.addUserModal')
@extends('dashboard.partials.editUserModal')
@endsection
