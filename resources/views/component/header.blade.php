        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" style="margin-top: 14px;">
                        <i class="fa fa-bars fa-lg"></i>
                    </button>

                    <a class="logo" style="padding: 10px 50px 0 15px;" href="{{ url('/') }}">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="60px" height="60px" viewBox="0 0 60 60" enable-background="new 0 0 60 60" xml:space="preserve">  <image id="image0" width="60" height="60" x="0" y="0"
    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD8AAAA8CAYAAADRy2JxAAAABGdBTUEAALGPC/xhBQAAACBjSFJN AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QA/wD/AP+gvaeTAAAA B3RJTUUH4QkLCRUOFAF3awAADi5JREFUaN7tmnuMXNV9xz+/cx8zszOzD++ud/3Y9a4f4Bc2Fhgs CoKEJmoUiEirqEoaRTTQpuk/qVpLhEIjqCiQtlHdRESp1CZBCKHSmJKmRMAfCSkUSmmwMbbB9tqL vbbX+37Ne+49v/5x7+yu1w/8WLAj+ElHM3fuuef8vr/X+Z5zRwB45HvQ+3NYeM2qhlTiD3JBcEeo djVqE1yWIoCeY1dTBtnniXl2cX3jk4f9o/vpq4dHv4XwwIMgxoHgs1h7H9hNiHiXGt5pRYUGE7DK LXAoTDFq3fMxV9UoO0PkYVz/Z1gbGrquAQ1uR+33Eb3ucgXuo3wmMcSPG97goewuUtjzsxt4oehm RB8jrN5BthOHDSvWgN2GcOWlBngmyWDZmu7hb7I7udYb4Wflpfx7efG5Bv4sEYAs6CqK46+YjOd+ BXTjpQZ4JjEIX607zD3pPTRLmQnr80plIaHKhQ+quiHjuXeaAG4Hzj15PlQRVjs5vp7aT5IQgOO2 jp1BQ+zECxYngNtMKQhWIBc30gcmCrckhuh2cgQIgrI7bKI/THDO1f50IkIpCLoNgn+pMZ5JPFHW uZN408VN2FFtoqjm4gcX/HkYZf7FR1nulvGBpISxrpBXl91B/bzNcxmCF5Y7Bb6cPIoBCupCHPKj 6nMkTF9svl/G4FW42R/iWm+QEJiw3rSiQzZFv/W5qHy/nMH7EvLbiUE6TYGUCRm0CcLY8/02xcR5 sLrfMPDCIlNhtTNBiynRZsqcsEkqGEAZtEmCeVT58gKv0OaUaTFl6qXCCifPsbCOnLogwqj62PmJ +MsQPCBqASVNyEZvjGM2xYhNTld7na9qd9mBFxi2CUatjxHL9e4IJetwIMwiKHYegb8/+A+d+CnH bIJ3ggZQ2OiOscQp8nq1GQD/PHdy5w9eAAtUgCIQzDGExvdn61H77Vzy8XTPz5KSOvy0vIQ8Lm2m yCcTA7xaaWVUfVpMGSPzl/QnrxsWGFYYBPLxtQdkgXagXuA9hfH4yWVAg8Dx+JllwAI5uxEGgBNx hzZg0ZzwEuX5cjv/XWnl04l+Pp/o47nSYt6sNtPh5PGwlOcpJGc8HwAHFPYC/UCOyPPjQB+wGxjS yCgjMYjR+NkcMASU32c2AUoaPT8Ut9MYasj6fLdwBYM2ySZ3hFv8QZ4udbHEFGh3KsxXPkbgFTis cJTI2wuB1cB6gZVAJjZEP9ABLJgDqA1YA8yl3TKnKdAmsPgM+sf9jFh+UVnIY4VVCMrX6/bTE2Tp tWk2e6PzRfBwEWBS4Xj8y1JguUThDiACKY08XwUy8bXGYEqAJ9Cq4M8KeSGqG3miqPKBdNwypzmA tPFYAq11FbZ4o/xLYQXtpsTdqR7uquthe3EZ13ujvFBqY2puuVLBF0uIITyNdSRmibNLjYsCw0Qh Ww8si4HXnlegEbgiBlDTu/Z5SKPwdYCVGnnWAgMapUseCIlqRBOw6gwhe0LhELAYRrt9NvujXOuN 8g/51eTV487UQabUZWfQwiZ/gpcrTbGKQoOErPFzrPEKqCrPl5o5YWd26gmUa/wJeoI6Bu3MEaWL JcpZBRqA5KlOISHQOcsYs++b2LPlGKgQ1YZ9tUiJx5wCTgBZBWeWAQQoAEfi61aoiuHZ0hKeanyV bifHY4XV/F+1mS+menHdYQZskpRA2QobvUluTIyw1p2kooZ9QZYWp8qJMDp1bzFV/qiuF0+UX1dW zQl7GyspwNlO6WcDrnndxClS1qgA1kK9Lx6zHVgh0bgnFHpPM1gIHIsLaTeQjQbfGTTyVLGLb6b3 sNkb44liN4/lryRhLFVxuMItsMUdot0p0uVMUVCPR6bW0B8mMaIsMFVu8kf4Wt0BFpsCd05soawG Zi2VUc6bWJ+Q8xcvDvlaKhQ0iqQE0dKXiu8tlCjsXaL6IhpFw+546cwCi2XasAHC9wsrWelO8YVE Hw9kdtFvUxy1aUq4TFqXlyptZKmw0snxjanraHUDbk32sc4d5wZviE3uKEV12Dq1ibeq9ScBj8Cb OCyJwz/k4khvJR6jjihdavM5zLCKWtSXiYocROlx0tGcckIT/MXkJt5KNXFbop9mU6aC4bXKAnZV G7nZH+D2xDG2ldaz1svRZookCGl3iuTU45lyJ9tLHTxfXoiehhxF4BuIlrFxYFQjL80ui8LMGv5+ Zwkm7h8A4ZwVYDbwWo1ZCBwm4gxTGpGmWQbo1wR/X7iSH5W6We9OsNzJs84Z54HMLrqcPP9YXEur lFjrjdPtTGFQem2GN8MWfpjvojdInOLxGfAKNEtUiCaAnjgkmyQCYomWwt7Ym6vkzGu0AnUCCY14 wQBRoXTicUbnFLsE0CFQjDlGP1H4nzS+EgIj1qNFKtyVOsgad4IJm+BvC+vZUW3ie9k3KOLwg+Jq VjkTeGL5n3Ijx0PvjMCZDsQk0AW8SxT6e4BGjbxcJjJKhaiIVXQG7DCR0WoyFF+3Ae/FraAzJGkA qNfI4zXvC7CIiB4PAFaj3G/klLq4vbyYN4NGVjoFBmySI2GKb2X3MqwphmyS42GSbfnl0TZDOSvw GfAKtEo08XuxAQbm9GqJDZQUcBRUYCxWslbwxuK2jHgFUDg2C2iCGVCzW1ZgYcwLjsYGbDw1vEKg J0zTE2QAxRXlwdwahLVU1FBWmSE458CAT97YtEtEdEZ1pvj5RJ5qmiE/yaXKNQ0jLJAq2iDggjYp YolyNgNH1yV5u7WBcIwo/xNAc3w/F3uljhlFlwlkNJpzjtdPFp32qEfIVc44GQnYF2Y5GKbfH/EZ wSuRQnUycz27QGmk6ZqGHI93/S9LnSKqoCrYJYJBERRReL3azO+aGxhp9U/2hBIZuFbYaiCTwFI5 WZezitBqqmzLvsl6d5KnSx3cPbmZ4nksVaf2nB2OcCqjA1ISUk+VX5cX8J3canZUm0hoyAulRWzL reZwmCYrAY6tWU/AyrTxsAZCiVJnFhh0jkGmd0Sz+5ioAWPW49lyByUMbU4Z9zz3+hdwDqzsD9L8 yeRmDoQZ9lQbeTT7Flv8YZ4pL+XJ4jLeDutpN2VSYnFVWe7kqarQb1OsdKZY4hSoquFQmOGITdEk FdpNmX6bYlRnVGqVMq2mzBGboqAenabACjeHVdgf1nMsTLG91MHdqZ7zh3Fh4GFYfZ4pLQVRjMyc rAmKh+VWf4BP+SdY647xamUh96T38Gy5g/4wxTfS+2iUaE9+KExz39RGljpF7s/s4ielTu7PbaCE oUGqfDv7Fjf5Q/zxxHW0mAr3pvfQ5eQA2B008s2pq5lQ74K39xfO5aR2bnXyzAHCe2GaBgn4HX+A +zN7sAhj6nFb8ig+lr/ObWBbfjXLnTxb0+9SwZAUyx3JYyxz8qDCGneSzyWOU7YO3U6eb2d2kpSQ B3Mb+G5hNevcCe7L7KFFKlg9E/Gofc5tF+H5M9oDCDH8qLiczyWOs8kd5anSMh7KrWdIfV6rtOCL ZX+1gSZT4bPJY6xyJ9lbbeA/Sh3cmTrEFm+EfUEDn/CGyEqVvyuu5Qp3ik6nwIP59TxfXkRGQm7w hrneG2GFO0U4xwEuymJTYsy6JMTioUhcTtIS0BemKON8MH9KCGK6N6Y+jxVWsS/MIFiq6vCl5GGu zuwibap0SIkJ9aggvFBp58upXm71B/l5aQm3+AMM2wSvVFvY6r+LAn+YOsgXU4cQoEmqOFgaTGVO PRbqCHg0s5MXK20sd/II0OXkaTMlFpoSD+XX8ZNS5wf3jwwhOoM/bqNd00Z3gn9ueJ2sBGwvdXAw zHBX6hAtpoQAr1cWcDDMcq03wq2JATa6E7xWbWZ/EJ3ZVzE8XVxGj83iYLEIZXUYtAmck+ArOXWZ VJdrvRFaTYn/qrRzoz/EvqCeAMON/hDPljo+2JcWARK/aBCu90e4wpniiWIXfzZ5Dc+Vl1B7/+LE LyF/WVlIpyny1dQhslLlxUo7Q+qxN6wnQUhRXZ4odPNPhVX8W7GDX1VaORrW4YgiqhgFVLAYXq82 c5U7SaOE7Kw2YRF2Bk0cCdP4caLMg+djYjPL+gKIzP5NGbUJAgw3+UN8ra6HWxMn6HZyIPCn6QNs ndrIi+V2vpLs5RP+AEdsHS9XWgHYXlrKFxJ9/Hn6HTrdHL1Bhi3+MJ6EfCe3jkCF9d4EX0q9x7h1 KajLrmoTnem97A3q6bN1GOw0CavJvHh+Sl36bYqiRiQ/JAr5YZuIPC/KLyutPFlaxlXuBI/U7yAh AY+XuhlTj6vccbJS5Y1qE28EzYypxy8qbfSEaRBlR9DI1qlN7A3r+f1EH/dm9rLBHWdXdQGDNsH+ +HXWenecTyYGuNkfos+meSfM8GbQxKR6jKlPQR0m1WNSvXideuCvwmnKdIGyyJRoNWX6wjrG1MNF 6XbyGOBQmKYaV+MFEnCVO05SLLuqDRRx6JgmPHVUMXSZAvWmyqBN0G+T03MIwhJT5Ep3iiQhR8I6 DoRZKgidpkiDqTBqfQQlRDhuU3SZPHl1GVafbqfAuPVISbT1OW7rdF7AR7STk7eQtbV3LuXUeK2V mMfO7Td9HaXLqfPM2iSc9hlm7qvMjKO1OSXa74roPFV7PZVlnYlny5zNwtx+Z+Xnevr7Z51r7vcZ XS+vV9QfsnwM/qMqH4P/qMrH4D+qYohO5D+KUjEghy61FpdGpNcA/8nMf64+KhICzxnEeRxk16XW 5sMVeRtxfmxo7toL5mGU/kut0gcuqqCcAHmYzOLdDtddDcgBhAMCK1FtRcS51HrOtwgErpgdVpx7 wfyUypR1eOkl+MzvWf71oXe9Nb/1q6znTQVKk0ITqr/5RhBTAfOOh/lhZ1PzA2NP/eXLbPq85f57 +H9LJuxoSk/TyQAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxNy0wOS0xMVQwOToyMToxNC0wNzowMKt9 gb4AAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTctMDktMTFUMDk6MjE6MTQtMDc6MDDaIDkCAAAAGXRF WHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAABJRU5ErkJggg==" />
</svg>

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