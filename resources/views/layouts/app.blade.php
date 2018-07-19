<!DOCTYPE html>
<html>
<head>

  <title>@yield('title')</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="{{ asset('public/adminLTE/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/adminLTE/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/adminLTE/dist/css/skins/_all-skins.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/adminLTE/plugins/datatables/dataTables.bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('public/adminLTE/plugins/datepicker/datepicker3.css') }}">
  <link rel="stylesheet" href="{{ asset('public/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/sweetalert/sweetalert.css') }}">

</head>
<body class="sidebar-mini skin-green-light">

 <header class="main-header">

    <a href="#" class="logo">
      <span class="logo-mini"><b>FC</b></span>
     <span class="logo-lg"><b>Fire</b>Cek</span>
    </a>


    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="#" class="user-image" alt="User Image">
                <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">
                <li class="user-header">
                    <img src="#" class="img-circle" alt="User Image">

                    <p>
                     
                    </p>
                </li>
                <li class="user-footer">
                    <div class="pull-left">
                        <a class="btn btn-default btn-flat" href="#">Edit Profil</a>
                    </div>
                    <div class="pull-right">
                        <a href="#" > Logout
                        </a>
                        
                    </div>
                </li>

            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
   <aside class="main-sidebar">

    <section class="sidebar">
<ul class="sidebar-menu">
  @section('sidebar')
  <li>HTML</li>
  <li>CSS</li>
  @show
  <li>JS</li>
</ul>
</section>
</aside>
<div class="container">
@yield('content')
</div>
<script src="{{ asset('public/adminLTE/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<script src="{{ asset('public/adminLTE/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/adminLTE/dist/js/app.min.js') }}"></script>

<script src="{{ asset('public/adminLTE/plugins/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('public/adminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/adminLTE/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('public/adminLTE/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('public/js/validator.min.js') }}"></script>
<script src="{{ asset('public/js/bootstrap3-typeahead.min.js') }}"></script>
<script src="{{ asset('public/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script src="{{ asset('public/sweetalert/sweetalert.min.js') }}"></script>
@yield('script')
</body>
</html>