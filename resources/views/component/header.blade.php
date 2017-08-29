        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" style="margin-top: 14px;">
                        <i class="fa fa-bars fa-lg"></i>
                    </button>

                    <a class="logo" style="padding: 10px 50px 0 15px;" href="{{ url('/') }}">
                        <img height="60" src="/img/clicktravel-logo.png" style="margin-top: 3px">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-left no-margin">
                        <li  class="item-head {{ ( request()->is('ticket*') || request()->is('/') )? 'active' : '' }}"><a href="{{ url('ticket') }}" >Vé nội địa và quốc tế</a></li>
                        <li  class="item-head {{ request()->is('hotel*') ? 'active' : '' }}"><a href="{{ url('hotel') }}" >Khách sạn</a></li>
                        <li  class="item-head {{ request()->is('visa*') ? 'active' : '' }}"><a href="{{ url('visa') }}" >Visa/Pastport</a></li>
                        <li  class="item-head {{ request()->is('promotion*') ? 'active' : '' }}"><a href="{{ url('promotion') }}" >Khuyến mãi</a></li>
                        <li  class="item-head {{ request()->is('payment*') ? 'active' : '' }}"><a href="{{ url('payment') }}" >Thanh toán </a></li>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right no-margin">
                    @if (Auth::guest())
                        <li><a class="btn btn-primary hidden-xs" href="{{ url('login') }}">Đăng nhập</a></li>
                        <li><a class="hidden-sm hidden-md hidden-lg" href="{{ url('payment') }}"><i class="fa fa-sign-in"></i> &nbsp;Đăng nhập</a></li>

                        @else

                        <li><a class="hidden-sm hidden-md hidden-lg" href="/user"><i class="fa fa-cog"></i> &nbsp;&nbsp;Tài khoản của bạn </a></li>
                        <li><a class="hidden-sm hidden-md hidden-lg" href="/user/ticket"><i class="fa fa-ticket"></i> &nbsp;&nbsp;Vé của bạn </a></li>
                        @if (Auth::user()->role == 1 ||  Auth::user()->role == 2)
                        <li><a class="hidden-sm hidden-md hidden-lg"  href="/admin"><i class="fa fa-tachometer"></i> &nbsp;&nbsp;Trang quản lý </a></li>
                        @endif
                        <li>
                            <a  class="hidden-sm hidden-md hidden-lg"  href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i> &nbsp;&nbsp;Đăng xuất 
                            </a>
                        </li>


                        <li class="dropdown hidden-xs">
                            <a class="btn btn-primary" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu login-section" role="menu">

                                <li><a href="/user"><i class="fa fa-cog"></i> &nbsp;&nbsp;Tài khoản của bạn </a></li>
                                <li><a href="/user/ticket"><i class="fa fa-ticket"></i> &nbsp;&nbsp;Vé của bạn </a></li>
                                @if (Auth::user()->role == 1 ||  Auth::user()->role == 2)
                                <li><a href="/admin"><i class="fa fa-tachometer"></i> &nbsp;&nbsp;Trang quản lý </a></li>
                                @endif
                                <li>
                                    <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i> &nbsp;&nbsp;Đăng xuất 
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