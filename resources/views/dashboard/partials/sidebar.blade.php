<div class=" col-md-2 col-6 p-0 sidebar">
    <ul class="nav flex-column ">
      @if (auth()->user()->role_id <= 2)
        <li class="nav-item {{Request::is('dashboard/admin') ? 'sidebar-active' : ''}}">
          <a class="nav-link" href="/dashboard/admin">Daftar Admin</a>
        </li>
        <li class="nav-item {{Request::is('dashboard/users') ? 'sidebar-active' : ''}}">
          <a class="nav-link " href="/dashboard/users">Daftar User</a>
        </li>
        <li class="nav-item {{Request::is('dashboard/temporaryRents') ? 'sidebar-active'  : ''}}">
          <a class="nav-link " href="/dashboard/temporaryRents">Daftar Peminjaman Sementara</a>
        </li>
      @endif
      @if (auth()->user()->role_id <= 4)
        <li class="nav-item {{Request::is('dashboard/rents') ? 'sidebar-active' : ''}}">
          <a class="nav-link " href="/dashboard/rents">Daftar Peminjaman</a>
        </li>
      @endif
      <li class="nav-item {{Request::is('dashboard/rooms') ? 'sidebar-active' : ''}}">
        <a class="nav-link" href="/dashboard/rooms">Daftar Ruangan</a>
      </li>
    </ul>
</div>