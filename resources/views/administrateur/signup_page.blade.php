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
        body {
            background-image: url("https://images.squarespace-cdn.com/content/54b92d53e4b0876afab0e8c1/1464812672705-UYNBWKVTNAHPL3CMFR7V/shutterstock_234589129.jpg?format=2500w&content-type=image%2Fjpeg");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>
</head>

<body>
    <div id="header-users">
        <!--start Header-->
        <nav class="navbar navbar-expand-md navbar-light p-4 bg-transparent">
            <div class="bloc_logo col-2">
                <a href="./" class="navbar-brand text-primary"><i class="fa fa-cube"></i> ACHAT<b>COM</b></a>
            </div>
        </nav>
        <!--end Header-->
    </div>
    <!--Main section-->
    <div id="main-section">
        <!-- content page -->
        <div id="content" class="p-4">
            <!--form login-->
            <div class="row">
                <!--photo login-->
                <div class="col-md-6">
                    <img class=" img-responsive col-9 img-circle img-rounded rounded-circle"
                        src="https://image.freepik.com/free-vector/illustration-cartoon-female-user-entering-login_241107-682.jpg"
                        alt="">
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">{{ __('Creer un compte ') }}</div>
        
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
        
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer-users" class="main-footer bg-light pt-3 ">
        <footer>
            <div>
                <div>
                    <!-- copyright -->
                    <div class="col-sm-8 mx-auto text-center my-4 text-muted ">
                        <hr>
                        <p>ACHAT COM &copy; 2021</p>
                    </div>
                </div>
            </div>
        </footer>
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
