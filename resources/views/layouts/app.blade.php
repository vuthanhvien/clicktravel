<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" 
      type="image/png" 
      href="/favicon.png" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script> -->
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Clicktravel.vn | Homepage</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datedropper.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/easy-autocomplete.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/easy-autocomplete.themes.css') }}" rel="stylesheet"> -->

    <script src="{{ asset('js/datedropper.min.js')}}"></script>
    <!-- <script src="{{ asset('js/jquery.easy-autocomplete.js')}}"></script> -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="logo" style="padding-top: 5px;" href="{{ url('/') }}">
                        <!-- {{ config('app.name', 'Clicktravel') }} -->
                        <img width="130" src="img/logo.png">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <li><a href="{{ url('ticket') }}"><i class="fa fa-ticket"></i> &nbsp;Đăng ký vé máy bay</a></li>
                        <li><a href="{{ url('payment') }}"><i class="fa fa-credit-card"></i> &nbsp;Thanh toán &nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                        <!-- <li><a href=""></a></li> -->
                        @if (Auth::guest())
                        <!-- <li><a href="{{ route('login') }}">Login</a></li> -->
                        <li><a class="btn btn-primary hidden-xs" data-toggle="modal" data-target="#login" href="#">Đăng nhập</a></li>
                        <li><a class="hidden-sm hidden-ms hidden-lg" data-toggle="modal" data-target="#login" href="#">Đăng nhập</a></li>

                        <!-- <li><a href="{{ route('register') }}">Register</a></li> -->
                        @else
                        <li class="dropdown">
                            <a class="btn btn-primary" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                
                                <li><a href=""><i class="fa fa-ticket"></i> &nbsp;&nbsp;Your ticket </a></li>
                                <li><a href=""><i class="fa fa-cog"></i> &nbsp;&nbsp;Account setting </a></li>
                                <li><a href=""><i class="fa fa-history"></i> &nbsp;&nbsp;History </a></li>
                                <li>
                                    <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i> &nbsp;&nbsp;Logout 
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>


    <!-- Modal -->
    <div id="login" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Login to Clicktravel</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <h4><strong>Social network login</strong></h4>
                            <p>It’s quick, easy and we won’t post to your network without asking</p>
                            <div class="text-center">
                            <div>
                                <button style="width: 80%" class="btn btn-default btn-login-fb"><i class="fa  fa-facebook"></i> &nbsp;&nbsp; Login by facebook</button>
                                </div>
                                <br />
                                <div>
                                <button style="width: 80%" class="btn btn-default btn-login-fb"><i class="fa  fa-google"></i> &nbsp;&nbsp; Login by google</button>
                            </div>
                            </div>

                        </div>
                        <div class="col-md-7">
                            <h4><strong>Log in with your Clicktrabel account</strong></h4>
                            <p>No Skyscanner account? <a href="{{ route('register') }}">Register here</a>, or <a href="">Become a agency</a></p>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 text-right" style="padding-top: 8px">
                                    <a href="">Forgot password</a>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-primary text-center" style="width: 100%"> Login</button>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        By signing up you agree to Clicktravel's <a href=""> Terms of Service </a>and <a href=""> Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @yield('content')
</div>

<!-- Scripts -->
<!-- <script src="{{ asset('js/app.js') }}"></script> -->
</body>
</html>
