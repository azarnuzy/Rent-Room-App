<div class=" col-md-2 col-6 p-0 sidebar">
    <ul class="nav flex-column ">
      <li class="nav-item {{Request::is('dashboard/admin') ? 'sidebar-active' : ''}}">
        <a class="nav-link" href="/dashboard/admin">Daftar Admin</a>
      </li>
      <li class="nav-item {{Request::is('dashboard/user') ? 'sidebar-active' : ''}}">
        <a class="nav-link " href="/dashboard/user">Daftar User</a>
      </li>
      <li class="nav-item {{Request::is('rooms') ? 'sidebar-active' : ''}}">
        <a class="nav-link" href="/rooms">Daftar Ruangan</a>
      </li>
      <li class="nav-item {{Request::is('dashboard/rents') ? 'sidebar-active' : ''}}">
        <a class="nav-link " href="/dashboard/rents">Daftar Peminjaman</a>
      </li>
      <li class="nav-item {{Request::is('dashboard/temporaryRents') ? 'sidebar-active'  : ''}}">
        <a class="nav-link " href="/dashboard/temporaryRents">Daftar Peminjaman Sementara</a>
      </li>
    </ul>
</div>