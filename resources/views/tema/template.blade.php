<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('assets/startbootstrap/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('assets/startbootstrap/css/sb-admin-2.css')}}"   rel="stylesheet">
  
  <!-- favicon --->
  <link  rel="shortcut icon" href="{{asset('/assets/img/favicon.ico') }}" type="image/x-icon"/>

</head>

<body id="page-top" >

  <!-- Page Wrapper -->
  <div id="wrapper" >

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" >

      <!-- Main Content -->
      <div id="content" style="height: 109; padding: 0px; margin: 0px">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background: #363636 0% 0% no-repeat padding-box;height: 109px;opacity: 1;">

          <ul class="navbar-nav" style="widows: 400px;margin-left: 40%;">
            <div style="height: 109px;">
                <a style="height: 100%; float:left" >
                <div style="max-width: 200px" >
                    <img src="{{ asset('assets/img/Imagem_3.png')}}" width="100%">
                </div>
                </a>
                <p style="text-align: left;font: Bold 23px/36px Montserrat;letter-spacing: 0.68px;color: #FFFFFF;text-transform: uppercase;opacity: 1; height: 30px;float: right; margin: 30px;">
                  @if(isset($layout->nome_jogo))  
                    {{$layout->nome_jogo}}
                  @endif
                </p>
              </div>
            </ul>
       
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - User Information -->
           
            <li class="nav-item dropdown no-arrow">
            
              @if(isset(Auth::user()->name))
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}} </span>
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Sair
                    </a>
                </div>
                @else
                  
                  <a class="btn" href="{{route('login')}}">Entrar</a>
                  <a  class="btn" href="{{route('register')}}">registrar</a>
                @endif
                
              </li>
          </ul>
         
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
       

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
            
            @include('flash::message')  
            @yield('home')

          <!-------------------------------------->
          
         

      
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  

  <!-- Scroll to Top Button-->

  

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



</body>
 <!-- Footer -->
 <footer style="top: 2969px;
    left: 0px;
    margin-bottom: 0px;
    height: 410px;
    background: #363636 0% 0% no-repeat padding-box;
    opacity: 1;" >
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>
</footer>
<!-- End of Footer -->

</html>
