<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ACHAT-COM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Compiled and minified CSS -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css ">-->
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css ">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{asset('assets/css/style/fontastic.css ')}}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700 ">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('assets/css/style/style.default.css " id="theme-stylesheet')}}">
    <!-- toastr stylesheet - for Notifications-->
    <link rel="stylesheet" href="{{asset('assets/css/style/toastr.min.css ')}}">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('assets/css/style/custom.css ')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('assets/images/icon/favicon.ico ')}}">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!--Dynamic StyleSheets added from a view would be pasted here-->
    <style>


    </style>
</head>

<body>
    <div id="header-users">
          <!-- Main Navbar-->
          @include('includes.header_off')
    </div>
    <!--Main section-->
    <div id="main-section">
         <!-- content page -->
        <div id="content" class="py-4" >
            <div id="content-services">
                <div class="row mx-auto">
                    <div class="card shadow col-md-11 bg-light mx-auto">
                      <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            @yield('Holder')
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <div id="footer-users" class="main-footer bg-light pt-3 ">
        <!-- Page Footer-->
        @include('includes.footer')
    </div>

    <!-- JavaScript files-->
    <!-- Compiled and minified JavaScript -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>-->
    <script src="{{asset('assets/js/jquery/jquery.min.js ')}}"></script>
    <script src="{{asset('assets/js/popper.js/umd/popper.min.js ')}}"> </script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.min.js ')}}"></script>
    <script src="{{asset('assets/js/jquery.cookie/jquery.cookie.js ')}}"> </script>
    <script src="{{asset('assets/js/chart.js/Chart.min.js ')}}"></script>
    <script src="{{asset('assets/js/jquery-validation/jquery.validate.min.js ')}}"></script>
    <script src="{{asset('assets/js/script/charts-home.js ')}}"></script>
    <script src="{{asset('assets/js/script/front.js ')}}"></script>
    <!-- Main File-->
    <script src="{{asset('assets/js/script/toastr.min.js ')}}"></script>
    <!-- Dump all dynamic scripts into template -->
    <!--@yield('scripts')-->
    <script>
        function toast(message,header) {

            toastr.success(message, 'Message', {
                timeOut: 1200,
                progressBar: true
            });
        }

    </script>
</body>

</html>
