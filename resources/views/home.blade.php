@extends('layouts.app')

@section('content')
<div class="container-fluid booking" style="background-image: url('/img/plane.png') ,url('/img/bg.png'); background-position: right 50px bottom, left top; background-color: #007e7a">
    <div class="container">
        <!-- <ul class="nav nav-tabs">
            <li class="active"><a href="#"><i class="fa fa-plane fa-lg"></i> &nbsp;&nbsp;&nbsp; Đăng ký vé máy bay</a></li>
        </ul> -->
        <h2 class="text-center text-white" ><strong>Đặt vé máy bay rẻ trực tuyến</strong></h2>
        <h4 style="color: #ffc600; text-align: center; ">Tìm kiếm thông minh, thực hiện đơn giản</h4>
        @component('component.form')
            @slot('mode')
            {{$input['mode']}}
            @endslot

            @slot('start_place')
            {{$input['start_place']}}
            @endslot

            @slot('end_place')
            {{$input['end_place']}}
            @endslot

            @slot('start_date')
            {{$input['start_date']}}
            @endslot    

            @slot('end_date')
            {{$input['end_date']}}
            @endslot

            @slot('adult')
            {{$input['adult']}}
            @endslot

            @slot('children')
            {{$input['children']}}
            @endslot

            @slot('baby')
            {{$input['baby']}}
            @endslot

            @endcomponent
        <br>
        <br>
    </div>
</div>
<div class="container-fluid" style="padding:30px 0 40px 0;">
    <h2 class="text-center" style="color: #ff9c00"><span><img src="/img/viber.png" height="40"></span>&nbsp;&nbsp;<strong>Điện thoại đặt vé: 0922 897 997 - 0945 255 113 - 0945 259 113</strong></h2>
    
</div>
<div class="bestter container-fluid" style="background-color: #eee">

    <div class="container">
        <div class="timeline">
            <h3 class="header">{!! $config->title_location_1 !!}</h3>
            <p class="desc">{!! $config->content_location_1 !!}</p>
            <div class="row">
                <div class="col-md-{{$config->width_1_1}}">
                    <div class="place place-first" style='background-image: url("{{$config->image_1_1}}");'>
                        <div class="content-place">
                            <h3>{!! $config->location_1_1 !!} </h3>
                            <hr />
                            <p>{!! $config->price_1_1 !!}</p>
                        </div>
                    </div>
                </div>
                @if($config->width_1_2 > 0)
                <div class="col-md-{{$config->width_1_2}}">
                    <div class="place" style='background-image: url("{{$config->image_1_2}}");'>
                        <div class="content-place">
                            <h3>{!! $config->location_1_2 !!} </h3>
                            <hr />
                            <p>{!! $config->price_1_2 !!}</p>
                        </div>
                    </div>
                </div>
                @endif
                @if($config->width_1_3 > 0)
                <div class="col-md-{{$config->width_1_3}}">
                    <div class="place" style='background-image: url("{{$config->image_1_3}}");'>
                        <div class="content-place">
                            <h3>{!! $config->location_1_3 !!} </h3>
                            <hr />
                            <p>{!! $config->price_1_3 !!}</p>
                        </div>
                    </div>
                </div>
                @endif
                @if($config->width_1_4 > 0)
                <div class="col-md-{{$config->width_1_4}}">
                    <div class="place" style='background-image: url("{{$config->image_1_4}}");'>
                        <div class="content-place">
                            <h3>{!! $config->location_1_4 !!} </h3>
                            <hr />
                            <p>{!! $config->price_1_4 !!}</p>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <div class="timeline">
            <h3 class="header">{!! $config->title_location_2 !!}</h3>
            <p class="desc">{!! $config->content_location_2 !!}</p>
            <div class="row">
                <div class="col-md-{{$config->width_2_1}}">
                    <div class="place place-first" style='background-image: url("{{$config->image_2_1}}");'>
                        <div class="content-place">
                            <h3>{!! $config->location_2_1 !!} </h3>
                            <hr />
                            <p>{!! $config->price_2_1 !!}</p>
                        </div>
                    </div>
                </div>
                @if($config->width_2_2 > 0)
                <div class="col-md-{{$config->width_2_2}}">
                    <div class="place" style='background-image: url("{{$config->image_2_2}}");'>
                        <div class="content-place">
                            <h3>{!! $config->location_2_2 !!} </h3>
                            <hr />
                            <p>{!! $config->price_2_2 !!}</p>
                        </div>
                    </div>
                </div>
                @endif
                @if($config->width_2_3 > 0)
                <div class="col-md-{{$config->width_2_3}}">
                    <div class="place" style='background-image: url("{{$config->image_2_3}}");'>
                        <div class="content-place">
                            <h3>{!! $config->location_2_3 !!} </h3>
                            <hr />
                            <p>{!! $config->price_2_3 !!}</p>
                        </div>
                    </div>
                </div>
                @endif
                @if($config->width_2_4 > 0)
                <div class="col-md-{{$config->width_2_4}}">
                    <div class="place" style='background-image: url("{{$config->image_2_4}}");'>
                        <div class="content-place">
                            <h3>{!! $config->location_2_4 !!} </h3>
                            <hr />
                            <p>{!! $config->price_2_4 !!}</p>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
        @if($config->title_location_3)
        <div class="timeline">
            <h3 class="header">{!! $config->title_location_3 !!}</h3>
            <p class="desc">{!! $config->content_location_3 !!}</p>
            <div class="row">
                <div class="col-md-{{$config->width_3_1}}">
                    <div class="place place-first" style='background-image: url("{{$config->image_3_1}}");'>
                        <div class="content-place">
                            <h3>{!! $config->location_3_1 !!} </h3>
                            <hr />
                            <p>{!! $config->price_3_1 !!}</p>
                        </div>
                    </div>
                </div>
                @if($config->width_3_2 > 0)
                <div class="col-md-{{$config->width_3_2}}">
                    <div class="place" style='background-image: url("{{$config->image_3_2}}");'>
                        <div class="content-place">
                            <h3>{!! $config->location_3_2 !!} </h3>
                            <hr />
                            <p>{!! $config->price_3_2 !!}</p>
                        </div>
                    </div>
                </div>
                @endif
                @if($config->width_3_3 > 0)
                <div class="col-md-{{$config->width_3_3}}">
                    <div class="place" style='background-image: url("{{$config->image_3_3}}");'>
                        <div class="content-place">
                            <h3>{!! $config->location_3_3 !!} </h3>
                            <hr />
                            <p>{!! $config->price_3_3 !!}</p>
                        </div>
                    </div>
                </div>
                @endif
                @if($config->width_3_4 > 0)
                <div class="col-md-{{$config->width_3_4}}">
                    <div class="place" style='background-image: url("{{$config->image_3_4}}");'>
                        <div class="content-place">
                            <h3>{!! $config->location_3_4 !!} </h3>
                            <hr />
                            <p>{!! $config->price_3_4 !!}</p>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
        @endif
    </div>
    <br>
</div>
</div>
<div class="service container-fluid" style="background: white">

    <div class="container">
        <div class="row">
            <div class="col-md-12 title" >
                <h3><strong>Dịch vụ của chúng tôi</strong></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center content-inner">
                <img src="/img/24-hours.png" width="100">
                <br>
                <h4>{!! $config->title_1_hompage !!}</h4>
                <br>
                <p>{!! $config->content_1_hompage !!}</p>
            </div>
            <div class="col-md-4 text-center  content-inner">
                <img src="/img/price-tag.png" width="100">  
                <br>
                <h4>{!! $config->title_2_hompage !!}</h4>
                <br>
                <p>{!! $config->content_2_hompage !!}</p>
            </div>
            <div class="col-md-4 text-center  content-inner">
                <img src="/img/luggage.png" width="100">
                <br>
                <h4>{!! $config->title_3_hompage !!}</h4>
                <br>
                <p>{!! $config->content_3_hompage !!}</p>
            </div>
        </div>
    </div>
</div>
<div class="payment-section container-fluid" style="background:#eee">

    <div class="container">
        <div class="row">
            <div class="col-md-5 ">
                <br>
                <h4><strong>Quý khách có thể mua vé máy bay qua các hình thức</strong></h4>

                <h4>{!! $config->method_1_hompage !!} </h4>
                <div class="box">
                    <p style="margin-left: 15px;">{!! $config->method_content_1_hompage !!}</p>
                </div>
                <br>
                <h4>{!! $config->method_2_hompage !!}</h4>
                <div class="box">
                    <p style="margin-left: 15px;">{!! $config->method_content_2_hompage !!}</p>
                    <br>
                    <ul class="text-center chat" style="padding-left: 0">
                        <li class="active"><a  data-toggle="tab" href="#skype" > <img src="/img/skype.svg"></a></li>
                        <li ><a  data-toggle="tab" href="#zalo"> <img src="/img/zalo.png" ></a></li>
                        <li ><a  data-toggle="tab"  href="#facebook"> <img src="/img/facebook.png" ></a></li>
                        <li ><a data-toggle="tab" href="#viber"> <img src="/img/viber.svg" ></a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="skype" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <hr class="no-margin" >
                                    <br>
                                    <h4 class="pull-left"> {!! $config->skype !!}</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <div id="zalo" class="tab-pane fade">
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <hr class="no-margin" >
                                    <br>
                                    <h4 class="pull-left"> {!! $config->zalo !!}</h4>
                                </div>
                            </div>
                        </div>
                        <div id="facebook" class="tab-pane fade">
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <hr class="no-margin" >
                                    <br>
                                    <h4 class="pull-left"> {!! $config->facebook !!}</h4>
                                </div>
                            </div>
                        </div>
                        <div id="viber" class="tab-pane fade">
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1">
                                   <hr class="no-margin" >
                                   <br>
                                   <h4 class="pull-left"> {!! $config->viber !!}</h4>
                               </div>
                           </div>
                       </div>
                   </div>

               </div>
               <br>
               <h4>Phương thức 3: </h4>
               <div class="box">
                <p style="margin-left: 15px;">Gọi điện dến {!! $config->company_name !!}</p>
                <h3 class="text-center"><a href="telto:{{$config->phone1}}"><i class="fa fa-phone"></i> {{$config->phone1}} </a><small class="hidden-xs">  &nbsp;&nbsp; hoặc &nbsp;&nbsp;</small><br class="hidden-sm hidden-lg hidden-md"><a href="teto:{{$config->phone2}}"><i class="fa fa-phone"></i> {{$config->phone2}} </a></h3>
            </div>
            <br />
            <br />
        </div>
        <div class="col-md-7 ">
            <br>
            <h4><strong>Các hình thức thanh toán</strong></h4>
            <br>
            <div class="payment-method" >
                <div class="row">
                    <div class="col-sm-2">
                        <img src="/img/company.png" class="icon">
                    </div>
                    <div class="col-sm-10">
                        <br>
                        <p><strong>Thanh toán bằng tiền mặt tại văn phòng công ty Tiến Phong</strong></p>
                        <p>Thanh toán trực tiếp tại phòng vé, quý khách sẽ được phụ vụ tốt nhất</p>
                    </div>
                </div>
                <hr class="no-margin">
                <div class="row">
                    <div class="col-sm-2">

                        <img src="/img/home.png" class="icon" >
                    </div>
                    <div class="col-sm-10">
                        <br>
                        <p><strong>Thanh toán tại nhà</strong></p>
                        <p>Nhân viên công ty Tiến Phong sẽ giao vé và thu tiền tận nhà theo địa chỉ Quý khách cung cấp</p>
                    </div>
                </div>
                <hr class="no-margin">
                <div class="row">
                    <div class="col-sm-2">

                        <img src="/img/bank.png" class="icon">
                    </div>
                    <div class="col-sm-10">
                        <br>
                        <p><strong>Thanh toán qua chuyển khoản</strong></p>
                        <p>Quý khách có thể thanh toán bằng cách chuyển khoản trực tiếp tại ngân hàng, qua thẻ ATM, hoặc qua Internet banking</p>
                        <br>
                        <div class="bank-logo text-center">
                            <div class="logo-inner">
                                <a href="" ><img src="/img/bank/2.jpg"></a>
                            </div>
                            <div class="logo-inner">
                                <a href="" ><img src="/img/bank/4.jpg"></a>
                            </div>
                            <div class="logo-inner">
                                <a href="" ><img src="/img/bank/5.jpg"></a>
                            </div>
                            <div class="logo-inner">
                                <a href="" ><img src="/img/bank/7.jpg"></a>
                            </div>
                            <div class="logo-inner">
                                <a href="" ><img src="/img/bank/8.jpg"></a>
                            </div>
                            <div class="logo-inner">
                                <a href="" ><img src="/img/bank/9.jpg"></a>
                            </div>
                            <div class="logo-inner">
                                <a href="" ><img src="/img/bank/12.jpg"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
        </div>

    </div>
</div>
</div>
<div class="social-section container-fluid" >
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <br>
                <br>
                <div class="fb-page" data-href="{{$config->facebook_url}}" data-tabs="timeline" data-height="450" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="{{$config->facebook_url}}" class="fb-xfbml-parse-ignore"><a href="{{$config->facebook_url}}">Facebook</a></blockquote></div>
                <br>
                <br>
            </div>
            <div class="col-md-7">
                <br>
                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3921.3966709206125!2d107.05020711480661!3d10.626260192423516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175110847b2d1cd%3A0x54f75cbfc2290b7f!2zVsOpIE3DoXkgQmF5IMSQ4bqhaSBUaeG6v24gUGhvbmc!5e0!3m2!1svi!2s!4v1501087722513" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
<div class="connect container-fluid" style="background: white">
    <div class="container">
        <h3><strong>Nhà đồng hành</strong></h3>
        <br>
        <div class="slide-container">
            <img src="/img/airline/1.png">
            <img src="/img/airline/2.png">
            <img src="/img/airline/3.png">
            <img src="/img/airline/4.jpg">
            <img src="/img/airline/5.png">
            <img src="/img/airline/6.jpg">
            <img src="/img/airline/7.png">
            <img src="/img/airline/8.png">
            <img src="/img/airline/9.png">
            <img src="/img/airline/10.png">
            <img src="/img/airline/11.jpg">
        </div>
        <br>
    </div>
</div>
<!-- Modal -->
@component('modal.modal_passenger')
@endcomponent

@component('component.footer')
@endcomponent

<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</script>


@endsection
