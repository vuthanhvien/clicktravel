        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header" style="width: 100%" >
                   <!--  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" style="margin-top: 14px;">
                        <i class="fa fa-bars fa-lg"></i>
                    </button> -->

                    <div style="float: left; width: 20%">
                        
                    <a class="logo" style="padding: 10px 50px 0 15px;" href="{{ url('/') }}">
                        <image src="/img/clicktravel-logo.png" height="60" style="margin-top: 10px" class="hidden-sm hidden-xs"/>
                        <image src="/img/clicktravel-logo.png" height="50" style="margin-top: 10px" class="hidden-md hidden-lg"/>
                    </a>
                    </div>
                     <div class="text-center pull-right hidden-lg hidden-md">
                                        <p style="color: #015cb3; margin: 0;margin-top: 10px"><strong>TỔNG ĐÀI ĐẶT VÉ</strong></p>
                                        <p style="margin: 0; margin-top: 5px; color: red; font-size: 15px">02543 893 896</p>
                                    </div>
                    <div style="float: left; width: 80%" class="hidden-xs hidden-sm">
                        <div class="row">
                            <div class="col-md-1 col-md-offset-5">
                                <img src="/img/contact.png" width="35" style="text-align: right; margin-top: 15px" />
                            </div>
                            <div class="col-md-6 text-right">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <p style="color: #015cb3; margin: 0;margin-top: 10px"><strong>TỔNG ĐÀI ĐẶT VÉ</strong></p>
                                        <p style="margin: 0; margin-top: 5px; color: red; font-size: 15px">02543 893 896</p>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <p style="color: #015cb3;margin: 0; margin-top: 10px"><strong>HOTLINE ĐẶT VÉ</strong></p>
                                        <p style="margin: 0; margin-top: 5px; color: red; font-size: 15px">0922 897 997</p>
                                        
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <p style="color: #015cb3; margin: 0;margin-top: 10px"><strong>HOTLINE KINH DOANH</strong></p>
                                        <p style="margin: 0; margin-top: 5px; color: red; font-size: 15px">0945 255 113</p>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 text-center" >
                                <ul class="nav navbar-nav " style="margin-top: 0px">
                                     <li  class="item-head {{ ( request()->is('vemaybay*') || request()->is('/') )? 'active' : '' }}"><a href="{{ url('vemaybay') }}">Vé nội địa và quốc tế</a></li>
                                    <li  class="item-head {{ request()->is('hotel*') ? 'active' : '' }}"><a href="{{ url('hotel') }}" >Khách sạn</a></li>
                                    <li  class="item-head {{ request()->is('visa*') ? 'active' : '' }}"><a href="{{ url('visa') }}" >Visa/Passport</a></li>
                                    <!-- <li  class="item-head {{ request()->is('promotion*') ? 'active' : '' }}"><a href="{{ url('promotion') }}" >Khuyến mãi</a></li> -->
                                    
                                </ul>
                            </div>
                            <div class="col-md-4 text-right" style="padding: 4px">
                            <ul class="nav navbar-nav navbar-right no-margin">
                            @if (Auth::guest())
                                <li><a class="btn btn-primary hidden-xs" href="{{ url('login') }}">Đăng nhập</a></li>
                                <li><a class="hidden-sm hidden-md hidden-lg" href="{{ url('payment') }}"><i class="fa fa-sign-in"></i> &nbsp;Đăng nhập</a></li>

                                @else

                                <li><a class="hidden-sm hidden-md hidden-lg" href="/user"><i class="fa fa-cog"></i> &nbsp;&nbsp;Tài khoản của bạn </a></li>
                                <!-- <li><a class="hidden-sm hidden-md hidden-lg" href="/user/ticket"><i class="fa fa-ticket"></i> &nbsp;&nbsp;Vé của bạn </a></li> -->
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
                                        <!-- <li><a href="/user/ticket"><i class="fa fa-ticket"></i> &nbsp;&nbsp;Vé của bạn </a></li> -->
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
                    </div>
                </div>
              <!--   <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right no-margin">
                         <li  class="item-head {{ ( request()->is('vemaybay*') || request()->is('/') )? 'active' : '' }}"><a href="{{ url('vemaybay') }}">Vé nội địa và quốc tế</a></li>
                        <li  class="item-head {{ request()->is('hotel*') ? 'active' : '' }}"><a href="{{ url('hotel') }}" >Khách sạn</a></li>
                        <li  class="item-head {{ request()->is('visa*') ? 'active' : '' }}"><a href="{{ url('visa') }}" >Visa/Pastport</a></li>
                        <li  class="item-head {{ request()->is('promotion*') ? 'active' : '' }}"><a href="{{ url('promotion') }}" >Khuyến mãi</a></li>
                        
                    </ul>
                </div> -->
            </div>
            
        </nav>