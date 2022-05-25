<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Sistem Informasi Peminjaman Ruangan Kampus"
    />
    <meta name="keywords" content="Peminjaman Ruangan Kampus" />
    <meta name="theme-color" content="#1A374D" />
    <link rel="icon" href="favicon.ico" />
    <link rel="stylesheet" href="/css/index.css" />
    <link rel="stylesheet" href="/css/dashboard.css" />
    <link rel="stylesheet" href="/css/responsive.css" />
    <link rel="stylesheet" href="/css/normalize.css" />
    <link rel="stylesheet" href="/css/landingPage.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
      integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>SiManuk App | {{$title}} </title>
  </head>
  <body>
      @include('dashboard.partials.navbar')

    <main>
        <div class="row m-0 sidebar-container">
            @include('dashboard.partials.sidebar')
        
            @yield('container')
        </div>
    </main>
      @include('dashboard.partials.footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/index.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
      $('#datatable').DataTable( {
        columnDefs: [
          {
            targets: '_all',
            className: 'dt-head-center'
          }
        ]
      });
      $('#datatable_length').css('text-align', 'left');
      $('#datatable_info').css('text-align', 'left');
    </script>
    {{-- Room Edit Modal --}}
    <script src="/js/editroom.js"></script>
    <script src="/js/edituser.js"></script>
    <script src="/js/editadmin.js"></script>
  </body>
</html>
