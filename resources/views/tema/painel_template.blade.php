<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{$layout->nome_jogo ?? 'meu site'}}</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('assets/startbootstrap/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('assets/startbootstrap/css/sb-admin-2.css') }}"   rel="stylesheet">
  <!-- favicon --->
  <link  rel="shortcut icon" href="" type="image/x-icon"/>
  
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home-page')}}">
        <div class="sidebar-brand-icon">
          <p> home</p>
        </div>

      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>PAINEL DE CONTROLE</span>
        </a>
      </li>

      <!--  MENU DE USUARIO ADMIN   --->
      @can('admin')
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          Administração
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin" aria-expanded="true" aria-controls="collapseAdmin">
            <i class="fas fa-fw fa-cog"></i>
            <span>Gerenciar</span>
          </a>
          <div id="collapseAdmin" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Admin:</h6>
              <a class="collapse-item" href="{{route('layout.edit',1)}}">layout</a>
              <a class="collapse-item" href="{{route('mensagem.index')}}">Mensagens</a>
              <a class="collapse-item" href="{{route('personagem.index')}}">Personagens</a>
              
            </div>
          </div>
        </li>
      @endcan

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars" style="color:#292c2c"></i>
          </button>

         

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">@if(isset(Auth::user()->name)){{Auth::user()->name}}@endif </span>
                <!--img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"-->
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sair
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading 
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

          </div>-->
            <!-- Bootstrap core JavaScript-->
              <script src={{ asset('assets/startbootstrap/vendor/jquery/jquery.min.js') }}></script>
              <script src={{ asset('assets/startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>
              <script src={{ asset('assets/startbootstrap/vendor/jquery-mask/jquery.mask.min.js') }}></script>

              <!-- Core plugin JavaScript-->
              <script src={{ asset('assets/startbootstrap/vendor/jquery-easing/jquery.easing.js') }}></script>

              <!-- Custom scripts for all pages-->
              <script src={{ asset('assets/startbootstrap/js/sb-admin-2.min.js') }}></script>

              <!-- Page level plugins -->
              <script src={{ asset('assets/startbootstrap/vendor/chart.js/Chart.min.js') }}></script>

              <!-- Page level custom scripts -->
              <script src={{ asset('assets/startbootstrap/js/demo/chart-area-demo.js') }}></script>
              <script src={{ asset('assets/startbootstrap/js/demo/chart-pie-demo.js') }}></script>
              
          <!-----  conteudo  ------->
            @include('flash::message')  
            @yield('painel-admin')

          <!-------------------------------------->
          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span> &copy; 2019 - {{date('Y')}} </span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tem certeza?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Deseja realmente encerra sua sessão.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <form id="btn btn-primary" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">
                {{ __('Sair') }}
            </button>
        </form>
        </div>
      </div>
    </div>
  </div>

  @yield('section_script')

</body>

</html>
