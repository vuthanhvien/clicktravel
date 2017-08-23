        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" style="margin-top: 14px;">
                        <i class="fa fa-bars fa-lg"></i>
                    </button>

                    <a class="logo" style="padding-left:15px; padding-top: 5px;" href="{{ url('/') }}">
                        <img width="110" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGgAAAA8CAYAAACKA/9AAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RTM2RjExNDM3OTE4MTFFN0I0N0VDQUM5QjQxQzRDNUEiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RTM2RjExNDI3OTE4MTFFN0I0N0VDQUM5QjQxQzRDNUEiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QjREMEMyOTM2MEQzMTFFN0I0OTk4QzQ2NUM1QjkwQzQiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QjREMEMyOTQ2MEQzMTFFN0I0OTk4QzQ2NUM1QjkwQzQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5MHXUtAAAZLUlEQVR42uxc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">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Right Side Of Navbar -->
                    <div class="hidden">
                    @if(request()->is('ticket*'))
                    <div class="pull-left" style="margin-top: 18px;">
                        <div class="step-book {{ request()->is('ticket?*') ||  request()->is('ticket')  ? 'active' : '' }}" >
                            <a href="">
                                1. Kết quả tìm kiếm
                            </a>
                        </div>
                        <div class="step-arrow">
                            <p>
                            <i class="fa  fa-chevron-right"></i>
                            </p>
                        </div>
                        <div class="step-book {{ request()->is('ticket/booking*') ? 'active' : '' }}" >
                        @if( request()->is('ticket?*') ||  request()->is('ticket'))
                            <p>
                                2. Thông tin chuyến bay
                            </p>
                        @else
                            <a  href="">
                                2. Thông tin chuyến bay
                            </a>
                        @endif
                        </div>
                        <div class="step-arrow">
                            <p>
                            <i class="fa  fa-chevron-right"></i>
                            </p>
                        </div>
                        <div class="step-book {{ request()->is('ticket/info*') ? 'active' : '' }}">
                        @if( request()->is('ticket?*') ||  request()->is('ticket') || request()->is('ticket/booking*'))
                            <p>
                                3. Hồ sơ đặt chỗ
                            </p>
                        @else
                            <a  href="">
                                3. Hồ sơ đặt chỗ
                            </a>
                        @endif

                        </div>

                    </div>
                    @endif
                        </div>
                    <ul class="nav navbar-nav navbar-right no-margin">
                        <!-- Authentication Links -->
                        <!-- <li><a href="{{ url('ticket') }}"><i class="fa fa-ticket"></i> &nbsp;Vé ngoại địa</a></li> -->
                        <li><a href="{{ url('ticket') }}"><i class="fa fa-ticket"></i> &nbsp;Vé máy bay</a></li>
                        <li><a href="{{ url('payment') }}"><i class="fa fa-credit-card"></i> &nbsp;Thanh toán &nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                        <!-- <li><a href=""></a></li> -->
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