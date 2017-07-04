        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" style="margin-top: 27px;">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="logo" style="padding-top: 5px;" href="{{ url('/') }}">
                        <img width="110" src="img/clicktravel-logo.png">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <li><a href="{{ url('ticket') }}"><i class="fa fa-ticket"></i> &nbsp;Đăng ký vé máy bay</a></li>
                        <li><a href="{{ url('payment') }}"><i class="fa fa-credit-card"></i> &nbsp;Thanh toán &nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                        <!-- <li><a href=""></a></li> -->
                        @if (Auth::guest())
                        <!-- <li><a href="{{ route('login') }}">Login</a></li> -->
                        <li><a class="btn btn-primary hidden-xs" data-toggle="modal" data-target="#login" href="#">Đăng nhập</a></li>
                        <li><a class="hidden-sm hidden-ms hidden-lg" data-toggle="modal" data-target="#login" href="#"><i class="fa fa-sign-in"></i> &nbsp;Đăng nhập</a></li>

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