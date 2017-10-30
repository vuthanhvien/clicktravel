@extends('layouts.app')
@section('title')
Clicktravel.vn | Đại lý vé máy bay nội địa quốc tế
@endsection

@section('content')
<script type="text/javascript">

    @if(isset($_REQUEST['khuyenmai']))
            $('#myModal').modal('show');
    @endif
    </script>
<div class="container-fluid booking" style="">
    <div class="container">
        <br>
        <h2 class="text-center text-white hidden-xs" ><strong>Đặt vé máy bay rẻ trực tuyến</strong></h2>
        <h4 style="color: #ffc600; text-align: center; " class=" hidden-xs">Tìm kiếm thông minh, thực hiện đơn giản</h4>
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
<!-- <div class="container-fluid" style="padding:30px 0 40px 0;">
    <h2 class="text-center" style="color: #ff9c00"><span><img src="/img/viber.png" height="40"></span>&nbsp;&nbsp;<strong>Điện thoại đặt vé: 0922 897 997 - 0945 255 113 - 0945 259 113</strong></h2>
</div>
 -->
</div>
<div class="connect container-fluid" style="background: white">
    <div class="container">
    <br>
    <br>
    <div class="row"> 
    <div class="col-md-5">
                <h3 class="text-center" style="color: #ff9c00"><strong>Đối tác quan trọng</strong></h3>
        <p class="text-center">-----------------***----------------</p>
        <br>
        <style type="text/css">
            .listAirlinesLogo{
                display: table;
                margin: 0 auto;
            }
            .listAirlinesLogo a img{
                width: 34px;
                position: absolute;
                top: 0;
                right: 0;
                left: 0;
                bottom: 0;
                margin: auto;
            }
            .listAirlinesLogo a {
                border-radius: 25px;
                border: 3px solid #ccc;
                width: 50px;
                text-align: center;
                height: 50px;
                position: relative;
                margin: 5px;
                display: inline-block;
            }
        </style>
        <div class="text-center">
            <div class="listAirlinesLogo text-center">
                <a href="/ve-gia-re/vietjet-air" target="_blank" title="VietJet">
                    <img alt="Air Asia" src="https://s3-ap-southeast-1.amazonaws.com/traveloka/imageResource/2015/12/17/1450350670702-a9dba44d3e9fe096f83ffe00d56a99ec.png">
                </a>
                <a href="/ve-gia-re/viet-nam-air" target="_blank" title="Vietnam Airlines">
                    <img alt="Vietnam Airlines" src="https://s3-ap-southeast-1.amazonaws.com/traveloka/imageResource/2015/12/17/1450350677249-52f0dd5f4ddc5cbfc75b674577c44d45.png">
                </a>
                <a href="/ve-gia-re/jetstar" target="_blank" title="Jetstar">
                    <img alt="Jetstar" src="https://s3-ap-southeast-1.amazonaws.com/traveloka/imageResource/2015/12/17/1450349850619-974acdfa8d5d889d507515772ad20519.png">
                </a>
                <a href="/ve-gia-re/tigerair" target="_blank" title="Scoot">
                    <img alt="Scoot" src="https://s3-ap-southeast-1.amazonaws.com/traveloka/imageResource/2017/07/10/1499669895896-461d8d56204ab098ccc9dd66c31ad8a4.png">
                </a>
                <a target="_blank" href="/ve-gia-re/thai-air" title="Thai AirAsia">
                    <img alt="Thai AirAsia" src="https://s3-ap-southeast-1.amazonaws.com/traveloka/imageResource/2015/12/17/1450349732337-846058ee22c4a13a3480597eae37b329.png">
                </a>
                <a target="_blank" href="/ve-gia-re/silk-air" title="SilkAir">
                    <img   alt="SilkAir" src="https://s3-ap-southeast-1.amazonaws.com/traveloka/imageResource/2015/12/17/1450350419177-36ee4b5cfa8dd2f6880f57b442f5f1c0.png">
                </a>
                <a href="" target="_blank" href="/ve-gia-re/singaport-air" title="Singapore Airlines">
                    <img  alt="Singapore Airlines" src="https://s3-ap-southeast-1.amazonaws.com/traveloka/imageResource/2015/12/17/1450350610403-aefa15ce3b8e59de9882926d198eb27f.png">
                </a>
                <a href="/ve-gia-re/malaysia-airlines" target="_blank" title="Malaysia Airlines">
                    <img alt="Malaysia Airlines" src="https://s3-ap-southeast-1.amazonaws.com/traveloka/imageResource/2015/12/17/1450350412847-3992f7771a86e8e878338cd31c390786.png">
                </a>
                <a href="/ve-gia-re/cathay-pacific" target="_blank" title="Cathay Pacific">
                    <img alt="Cathay Pacific" src="https://s3-ap-southeast-1.amazonaws.com/traveloka/imageResource/2016/11/17/1479375081019-abaa527e23bc56424390edf666c9055e.png">
                </a>
                <a href="/ve-gia-re/southern_china" target="_blank" title="China Southern Airlines">
                    <img alt="China Southern Airlines" src="https://s3-ap-southeast-1.amazonaws.com/traveloka/imageResource/2015/12/17/1450349261477-e2cbf221721f41b83b5a65a6a3c2a866.png">
                </a>
                <a href="/ve-gia-re/china-airlines" target="_blank" title="China Airlines">
                    <img alt="China Airlines" src="https://s3-ap-southeast-1.amazonaws.com/traveloka/imageResource/2015/12/17/1450349231542-0b361dab47374da6c45371b20afad93a.png">
                </a>
                <a href="/ve-gia-re/hongkong-airlines" target="_blank" title="Hongkong Airlines">
                    <img alt="Hongkong Airlines" src="https://s3-ap-southeast-1.amazonaws.com/traveloka/imageResource/2015/12/17/1450349784627-6cf9e8259125d74d6be5f7e79ddba070.png">
                </a>
                <a target="_blank" href="/ve-gia-re/turkish-air" title="Turkish Airlines">
                    <img  alt="Turkish Airlines" src="https://s3-ap-southeast-1.amazonaws.com/traveloka/imageResource/2015/12/17/1450350636339-8ef065b228beccbb2d86c7f29cb41ccd.png">
                </a>
                <a href="/ve-gia-re/eva-air" target="_blank" title="EVA Air">
                    <img alt="EVA Air" src="https://s3-ap-southeast-1.amazonaws.com/traveloka/imageResource/2015/12/17/1450349217449-19bbf8095eb9b4c02df65d2b12f386d1.png">
                </a>
                <a href="/ve-gia-re/asiana-air" target="_blank" title="Asiana Airlines">
                    <img  alt="Asiana Airlines" src="https://s3-ap-southeast-1.amazonaws.com/traveloka/imageResource/2015/12/17/1450350520772-dddfedaf401fb4f0b91303dbce757332.png">
                </a>
                <a href="/ve-gia-re/etihad" target="_blank" title="Etihad Airways">
                    <img alt="Etihad Airways" src="https://s3-ap-southeast-1.amazonaws.com/traveloka/imageResource/2015/12/17/1450349724206-72d6a3ea3fa3969c701c1fa26df685d8.png">
                </a>
                <a target="_blank" href="/ve-gia-re/japan-airline" title="Japan Airlines">
                    <img  alt="Japan Airlines" src="https://s3-ap-southeast-1.amazonaws.com/traveloka/imageResource/2015/12/17/1450349813952-78c3d4dc0889e1ec3abb288700f55db6.png">
                </a></div>
                <br>
            </div>
    </div>
    <div class="col-md-7">
        <ul class="nav nav-tabs nav-justified">
          <li class="active"><a data-toggle="tab" href="#home">{!! $config->tab_name_1 !!}</a></li>
          <li><a data-toggle="tab" href="#menu1">{!! $config->tab_name_2 !!}</a></li>
          <li><a data-toggle="tab" href="#menu2">{!! $config->tab_name_3 !!}</a></li>
          <li><a data-toggle="tab" href="#menu3">{!! $config->tab_name_4 !!}</a></li>
        </ul>

        <div class="tab-content" style="padding: 10px; background-color: #eee; width: 102%">
          <div id="home" class="tab-pane fade in active" style="height: 300px; overflow: hidden;">
            <a href="{{$config->tab_url_1 }}" target="_blank">
            <img src="{{$config->tab_img_1 }}" width="100%" style="border-radius: 5px" />
            </a>
          </div>
          <div id="menu1" class="tab-pane fade"  style="height: 300px; overflow: hidden;">
            <a href="{{$config->tab_url_2 }}" target="_blank">
            <img src="{{$config->tab_img_2 }}" width="100%" style="border-radius: 5px"/>
            </a>
           
          </div>
          <div id="menu2" class="tab-pane fade"  style="height: 300px; overflow: hidden;">
            <a href="{{$config->tab_url_3 }}" target="_blank">
            <img src="{{$config->tab_img_3 }}" width="100%" style="border-radius: 5px"/>
            </a>
             
          </div>
            <div id="menu3" class="tab-pane fade"  style="height: 300px; overflow: hidden;">
            <a href="{{$config->tab_url_4 }}" target="_blank">
            <img src="{{$config->tab_img_4 }}" width="100%" style="border-radius: 5px"/>
            </a>
             
          </div>
        </div>
    </div>
    <style type="text/css">

        .nav-tabs-justified>li>a, .nav-tabs.nav-justified>li>a{
            background: #ff9c00;
            color: white;
            border: 0!important;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            height: 40px;
            text-transform: uppercase ;    width: 106%;
        }
        .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
            background: linear-gradient( #ccc ,#eee);
            color: black;
            border: 0!important;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            height: 40px;
            text-transform: uppercase ;
                width: 106%;
        }
    </style>
    </div>

        </div>
    </div>
    <div class=" container-fluid" style="background: white">
        <div class=" container" style="    border: 1px solid #ccc; border-radius: 15px; margin-top: 32px; margin-bottom: 15px">
            <h3><strong>Vé máy bay giá rẻ</strong></h3>
            <br>
            <div id="slider" data-slick='{"slidesToShow": 5, "slidesToScroll": 1}' class="hidden-xs ">
                @for ($i = 1; $i < 4; $i++)
                @for ($j = 1; $j < 4; $j++)
                @if( $config->{'width_'.$i.'_'.$j} )
                <div>
                    <div style="padding: 10px">
                        <div style="height: 180px; background-image: url({{ $config->{'image_'.$i.'_'.$j}  }}) ; background-position: center; padding-top: 100px; border-radius: 10px;">
                            <div style="background-color: rgba(0,0,0, 0.6); height: 80px; padding: 15px;  border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; position: relative;">
                                <a class="text-white" style="font-size: 16px">{!! $config->{'location_'.$i.'_'.$j} !!}</a>
                                <p class="text-white">{!! $config->{'width_'.$i.'_'.$j} !!}</p>
                                <p style=" color: #ff9c00; font-size: 19px; position: absolute; right: 9px; bottom: -2px;     font-weight: bold;">{!! $config->{'price_'.$i.'_'.$j} !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endfor
                @endfor

            </div>
            <div id="slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}' class="hidden-md hidden-sm hidden-lg">
                @for ($i = 1; $i < 4; $i++)
                @for ($j = 1; $j < 4; $j++)
                @if( $config->{'width_'.$i.'_'.$j} )
                <div>
                    <div style="padding: 10px">
                        <div style="height: 180px; background-image: url({{ $config->{'image_'.$i.'_'.$j}  }}) ; background-position: center; padding-top: 100px; border-radius: 10px;">
                            <div style="background-color: rgba(0,0,0, 0.6); height: 80px; padding: 15px;  border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; position: relative;">
                                <a class="text-white" style="font-size: 16px">{!! $config->{'location_'.$i.'_'.$j} !!}</a>
                                <p class="text-white">{!! $config->{'width_'.$i.'_'.$j} !!}</p>
                                <p style=" color: #ff9c00; font-size: 19px; position: absolute; right: 9px; bottom: -2px;     font-weight: bold;">{!! $config->{'price_'.$i.'_'.$j} !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endfor
                @endfor

            </div>
        </div>
    </div>
    <style type="text/css">
        #slider button.slick-next {
            position: absolute;
            right: -23px;
            top: 80px;
            background-color: transparent;
            color: transparent;
            border: 0;


        }
        #slider button.slick-next:before {
            font-family: FontAwesome;
            content: "\f054";
            font-size: 38px;
            color: white;
        }
        #slider button.slick-prev:before {
            font-family: FontAwesome;
            content: "\f053";
            font-size: 38px;
            color: white;
        }


        #slider button.slick-prev {
            position: absolute;
            left: 23px;
            top: 80px;
            background-color: transparent;
            color: transparent;
            border: 0;

        }
        .slick-slide{
            height: auto;
        }
    </style>
    <br>
    <div class="container-fluid" >
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3><strong>Cách thức đặt vé</strong></h3>

                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <i class="fa fa-send fa-first"></i>
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                        Đặt vé trực tiếp qua clicktravel.vn
                                    </a>
                                    <i class="fa fa-angle-down fa-last" aria-hidden="true"></i>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Vào link <a href="/ve-may-bay">Vé máy bay</a> để đặt vé</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <i class="fa fa-comment-o  fa-first"></i>
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                        Qua chat với hỗ trợ viên của clicktravel.vn
                                    </a>
                                    <i class="fa fa-angle-down fa-last" aria-hidden="true"></i>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body"> 
                                    <p>Liên hệ với hộ trợ viên qua phần mềm chat góc màn hình</p></div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-phone  fa-first"></i>
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                            Gọi điện trực tiếp đến clicktravel.vn
                                        </a>
                                        <i class="fa fa-angle-down fa-last" aria-hidden="true"></i>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="box">
                                            <br>
                                            <ul class="text-center chat" style="padding-left: 0; list-style: none">
                                                <li class="active" style="display: inline-block;"><a  data-toggle="tab" href="#skype" > <img src="/img/skype.svg" width="40"></a></li>
                                                <li style="display: inline-block;"><a  data-toggle="tab" href="#zalo"> <img src="/img/zalo.png"  width="40"></a></li>
                                                <li style="display: inline-block;"><a  data-toggle="tab"  href="#facebook"> <img src="/img/facebook.png"  width="40"></a></li>
                                                <li style="display: inline-block;"><a data-toggle="tab" href="#viber"> <img src="/img/viber.svg"  width="40"></a></li>
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
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-building  fa-first"></i>
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                            Đến trực tiếp văn phòng clicktravel.vn
                                        </a>
                                        <i class="fa fa-angle-down fa-last" aria-hidden="true"></i>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p><strong>Cơ sở 1</strong> : QL51 (Bên cạnh cổng KCN PM3), Phước Hòa, Tân Thành, BRVT</p>
                                        <p><strong>Cơ sở 2</strong> : QL51 (Bên cạnh cổng VEDAN), Phước Bình, Long Thành, Đồng Nai</p>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="col-md-4">
                        <h3><strong>Hình thức thanh toán</strong></h3>

                        <div class="panel-group" id="accordion2">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-building fa-first"></i>
                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse5">
                                            Thanh toán tại văn phòng clicktravel.vn
                                        </a>
                                        <i class="fa fa-angle-down fa-last" aria-hidden="true"></i>
                                    </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Thanh toán trực tiếp tại phòng vé, quý khách sẽ được phụ vụ tốt nhất</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-home  fa-first"></i>
                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse6">
                                            Thanh toán qua chuyển khoản
                                        </a>
                                        <i class="fa fa-angle-down fa-last" aria-hidden="true"></i>
                                    </h4>
                                </div>
                                <div id="collapse6" class="panel-collapse collapse">
                                    <div class="panel-body"> 
                                        <p>Quý khách có thể thanh toán bằng cách chuyển khoản trực tiếp tại ngân hàng, qua thẻ ATM, hoặc qua Internet banking</p>

                                        <div class="bank-logo text-center">
                                            <div class="logo-inner">
                                                <a href=""><img src="/img/bank/2.jpg"></a>
                                            </div>
                                            <div class="logo-inner">
                                                <a href=""><img src="/img/bank/4.jpg"></a>
                                            </div>
                                            <div class="logo-inner">
                                                <a href=""><img src="/img/bank/5.jpg"></a>
                                            </div>
                                            <div class="logo-inner">
                                                <a href=""><img src="/img/bank/7.jpg"></a>
                                            </div>
                                            <div class="logo-inner">
                                                <a href=""><img src="/img/bank/8.jpg"></a>
                                            </div>
                                            <div class="logo-inner">
                                                <a href=""><img src="/img/bank/9.jpg"></a>
                                            </div>
                                            <div class="logo-inner">
                                                <a href=""><img src="/img/bank/12.jpg"></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-credit-card  fa-first"></i>
                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse7">
                                            Thanh toán tại nhà
                                        </a>
                                        <i class="fa fa-angle-down fa-last" aria-hidden="true"></i>
                                    </h4>
                                </div>
                                <div id="collapse7" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Nhân viên công ty Tiến Phong sẽ giao vé và thu tiền tận nhà theo địa chỉ Quý khách cung cấp</p>

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <i class="fa fa-mobile  fa-first"></i>
                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse8">
                                            Thanh toán qua cổng online
                                        </a>
                                        <i class="fa fa-angle-down fa-last" aria-hidden="true"></i>
                                    </h4>
                                </div>
                                <div id="collapse8" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p></p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-4">
                        <h3><strong><i class="fa fa-question-circle-o" style="color: #ff9c00"></i> Câu hỏi thường gặp</strong></h3>
                        <div class="panel-group" id="accordion3" >
                            <div class="panel panel-default" style="padding: 15px; padding-bottom: 50px;    padding-top: 35px;">
                                <div data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>
                                    <div>
                                        <div class="round-item">
                                            <div class="item item-cauhoihome">
                                                <i class="fa fa-angle-right"></i> 
                                                <a href="/ve-gia-re/cau-hoi-thuong-gap">Làm thủ tục bay (check-in) tại sân bay cần những giấy tờ gì?</a>
                                            </div>
                                            <div class="item item-cauhoihome">
                                                <i class="fa fa-angle-right"></i> 
                                                <a href="/ve-gia-re/cau-hoi-thuong-gap">Hành khách sẽ được mang theo hành lý khi bay là bao nhiêu kg?</a>
                                            </div>
                                            <div class="item item-cauhoihome">
                                                <i class="fa fa-angle-right"></i> 
                                                <a href="/ve-gia-re/cau-hoi-thuong-gap">Trẻ em có thể đi máy bay một mình hay không?</a>
                                            </div>
                                            <div class="item item-cauhoihome">
                                                <i class="fa fa-angle-right"></i>
                                                <a href="/ve-gia-re/cau-hoi-thuong-gap"> Các vật dụng không được mang theo đối với hành lý xách tay?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="round-item">
                                            <div class="item item-cauhoihome">
                                                <i class="fa fa-angle-right"></i> 
                                                <a href="/ve-gia-re/cau-hoi-thuong-gap">Quy định về đổi ngày bay, giờ bay?</a>
                                            </div>
                                            <div class="item item-cauhoihome">
                                                <i class="fa fa-angle-right"></i> 
                                                <a href="/ve-gia-re/cau-hoi-thuong-gap">Sự khác nhau giữa các hạng ghế trên máy bay?</a>
                                            </div>
                                            <div class="item item-cauhoihome">
                                                <i class="fa fa-angle-right"></i> 
                                                <a href="/ve-gia-re/cau-hoi-thuong-gap">Trong trường hợp khách hàng cần bay gấp, vậy có thể mua vé sớm nhất trước giờ bay bao nhiêu tiếng?</a>
                                            </div>
                                            <div class="item item-cauhoihome">
                                                <i class="fa fa-angle-right"></i>
                                                <a href="/ve-gia-re/cau-hoi-thuong-gap"> Trong suốt hành trình bay, tôi cần chú ý những gì để đảm bảo an toàn chuyến bay?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="round-item">
                                            <div class="item item-cauhoihome">
                                                <i class="fa fa-angle-right"></i> 
                                                <a href="/ve-gia-re/cau-hoi-thuong-gap">Những trường hợp hành khách nào đi máy bay cần có xác nhận sức khỏe trước chuyến bay? Trường hợp nào không được phép đi máy bay?</a>
                                            </div>
                                            <div class="item item-cauhoihome">
                                                <i class="fa fa-angle-right"></i> 
                                                <a href="/ve-gia-re/cau-hoi-thuong-gap">Trách nhiệm của các hãng hàng không đối với việc thất lạc hành lý?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style type="text/css">

            #accordion3 button.slick-next {
                position: absolute;
                right: -23px;
                bottom: -20px;
                background-color: transparent;
                color: transparent;
                border: 0;


            }
            #accordion3 button.slick-next:before {
                font-family: FontAwesome;
                content: "\f054";
                font-size: 18px;
                color: #444;
            }
            #accordion3 button.slick-prev:before {
                font-family: FontAwesome;
                content: "\f053";
                font-size: 18px;
                color: #444;
            }


            #accordion3 button.slick-prev {
                position: absolute;
                right: -0px;
                bottom: -20px;
                background-color: transparent;
                color: transparent;
                border: 0;

            }


            .item-cauhoihome{
                padding: 6px
            }
            .item-cauhoihome a{
                color: #444;
            }
            .panel-group{
                box-shadow: 1px 1px 20px -8px #313131;
            }
            .panel-group .panel{
                border-radius: 0;
            }
            .panel-group, .panel{
                background-color: white;
            }
            .panel-group .panel+.panel{
                margin-top: 0;
            }
            .panel-group .fa-first{
                background: #999;
                color: white;
                height: 40px;
                width: 40px;
                border-radius: 23px;
                padding: 13px;
                margin-right: 8px;
                text-align: center;
                margin-left: -50px;
            }
            .panel-group .fa-last{
                position: absolute;
                right: 24px;
                top: 14px;
            }
            .panel-title a:hover{
                color: #ff9c00;
            }
            .panel-title {
                padding-left: 45px;
            }
            .panel-default>.panel-heading{
                position: relative;
            }
        </style>

        <div class="container-fluid" style="background-color: white">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div style="background-color: #eee; margin-top: 60px; padding: 20px; margin-bottom: 20px; ">
                            <div style="text-align: center; margin-top: -47px">
                                <div style=" 
                                height: 60px;
                                width: 60px;
                                background: #ff9c00;
                                border-radius: 30px;
                                margin: 0px auto ;
                                text-align: center;
                                padding-top: 15px;
                                padding-left: 6px;
                                ">
                                <img src="img/icon-tienich9.png">
                            </div>
                        </div>

                        <h4  style="text-align: center;"><strong>CAM KẾT CHẤT LƯỢNG</strong></h4>
                        <p  style="text-align: justify;">Với phương châm "Giá trị nằm ở dịch vụ" Clicktravel luôn hết mình trong sứ mệnh phục vụ khách hàng với chất lượng tốt nhất trên thị trường</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div style="background-color: #eee; margin-top: 60px; padding: 20px; margin-bottom: 20px; ">
                        <div style="text-align: center; margin-top: -47px">
                            <div style=" 
                            height: 60px;
                            width: 60px;
                            background: #ff9c00;
                            border-radius: 30px;
                            margin: 0px auto ;
                            text-align: center;
                            padding-top: 15px;
                            ">
                            <img src="img/icon-tienich10.png">
                        </div>
                    </div>

                    <h4  style="text-align: center;"><strong>ĐẢM BẢO GIÁ TỐT</strong></h4>
                    <p  style="text-align: justify;">Tại Clicktravel khách hàng sẽ luôn được chính sách giá tốt nhất từ tất cả các hãng . Clicktravel luôn ưu tiên quyền lợi của khách hàng bay</p>
                </div>
            </div>
            <div class="col-md-3">
                <div style="background-color: #eee; margin-top: 60px; padding: 20px; margin-bottom: 20px; ">
                    <div style="text-align: center; margin-top: -47px">
                        <div style=" 
                        height: 60px;
                        width: 60px;
                        background: #ff9c00;
                        border-radius: 30px;
                        margin: 0px auto ;
                        text-align: center;
                        ">
                        <img src="img/icon-tienich11.png">
                    </div>
                </div>

                <h4  style="text-align: center;"><strong>DỊCH VỤ SỐ 1</strong></h4>
                <p  style="text-align: justify;">Thật tuyệt vời khi bạn đặt chỗ tại Clicktravel, với đội ngũ nhân viên chuyên nghiệp, nhiệt tình, tận tâm bạn sẽ luôn nhận được các chuyến bay tốt nhất</p>
            </div>
        </div>
        <div class="col-md-3">
            <div style="background-color: #eee; margin-top: 60px; padding: 20px; margin-bottom: 20px; ">
                <div style="text-align: center; margin-top: -47px">
                    <div style=" 
                    height: 60px;
                    width: 60px;
                    background: #ff9c00;
                    border-radius: 30px;
                    margin: 0px auto ;
                    text-align: center;
                    padding-top: 15px;
                    ">
                    <img src="img/icon-tienich12.png">
                </div>
            </div>

            <h4  style="text-align: center;"><strong>HOÀN TIỀN 100%</strong></h4>
            <p  style="text-align: justify;">Clicktravel sẽ cam kết hoàn tiền 100% nếu khách hàng không hài lòng với dịch vụ của chúng tôi, khách hàng sẽ luôn nhận được các giá trị to lớn</p>
        </div>
    </div>
</div>
</div>
</div>
<div class="container-fluid" style="background-image: url('/img/global_map.jpg')" id="promotion">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-1">
                <br>
                <br>
                <br>
                <br>
                <h3 class="text-white">Chào mừng đến với clicktravel.vn</h3>
                <i class="fa fa-star" aria-hidden="true" style="color: yellow"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: yellow"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: yellow"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: yellow"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: yellow"></i>
                <span  class="text-white">455 USER RATTINGS</span>
                <br>
                <br>
                <p  class="text-white">Clicktravel là đối tác cao cấp của nhiều hãng hàng không lớn trên thế giới như Vietnam Airlines, Thai Airways, Air Asia, Singapore Airlines ... Chúng tôi sẽ mang mức gái tối nhất đến cho khách hàng</p>
                <p  class="text-white" > Với hơn 30.000 khách hành được phục vụ bởi đội ngủ tư vấn chu đáo, nhiệt tình, chuyên nghiệp, Clicktravel.vn luôn cung cấp dịc vụ du lịch tốt nhất</p>
                <br>
                <p>
                    <span style="margin-right: 15px">
                        <a href="/agency">
                            <img src="/img/dkctv.png">
                        </a>
                    </span>
                    <span >
                        <a  data-toggle="modal" data-target="#myModal"  >
                            <img src="/img/khuyenmai.png">
                        </a>
                    </span>
                </p>
                <br>
                <br>
                <br>
                <br>
            </div>
            <div class="col-md-5">
                <img src="/img/gioithieu01.png" style="    width: 100%; margin-top: 99px;">
            </div>
        </div>
    </div>
</div>
 
<div class="container">
    <style type="text/css">
        #bottomlink .tilte{
            font
        }
    </style>
    <div id="bottomlink" style="margin-top: 15px; margin-bottom: 15px">
        <div class="row">
            <div class="col-md-4"><ul>
                <li class="title"><h4>Vé máy bay giá rẻ nội địa<h4></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-di-sai-gon-37" target="_self">Vé máy bay giá rẻ đi Sài Gòn</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-di-ha-noi-38" target="_self">Vé máy bay đi Hà Nội</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-di-da-nang-39" target="_self">Vé máy bay giá rẻ đi Đà Nẵng</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-tu-da-lat-40" target="_self">Vé máy bay giá rẻ từ Đà Lạt</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-di-phu-quoc-41" target="_self">Vé máy bay đi Phú Quốc</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-di-vinh-42" target="_self">Vé máy bay giá rẻ đi Vinh</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-di-nha-trang-43" target="_self">Vé máy bay giá rẻ đi Nha Trang</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-tu-can-tho-44" target="_self">Vé máy bay giá rẻ từ Cần Thơ</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-tu-hai-phong-45" target="_self">Vé máy bay giá rẻ từ Hải Phòng</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-tu-dien-bien-48" target="_self">Vé máy bay giá rẻ từ Điện Biên</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-tu-phu-yen-49" target="_self">Vé máy bay giá rẻ từ Phú Yên</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-tu-quy-nhon-50" target="_self">Vé máy bay giá rẻ từ Quy Nhơn</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-buon-me-thuoc-51" target="_self">Vé máy bay giá rẻ Buôn Mê Thuộc</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-tu-ca-mau-52" target="_self">Vé máy bay giá rẻ từ Cà Mau</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-tu-pleiku-53" target="_self">Vé máy bay giá rẻ từ Pleiku</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-tu-rach-gia-54" target="_self">Vé máy bay giá rẻ từ Rạch Giá</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-tu-tam-ky-55" target="_self">Vé máy bay giá rẻ từ Tam Kỳ</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-tu-tuy-hoa-57" target="_self">Vé máy bay giá rẻ từ Tuy Hòa</a></li>
            </ul></div>
            <div class="col-md-4">  <ul>
                <li class="title"><h4>Vé máy bay giá rẻ quốc tế</h4></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-di-phap-60" target="_self">Vé máy bay giá rẻ đi Pháp</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-di-trung-quoc-61" target="_self">Vé máy bay giá rẻ đi Trung Quốc</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-di-uc-62" target="_self">Vé máy bay giá rẻ đi Úc</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-di-canada-63" target="_self">Vé máy bay giá rẻ đi Canada</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-di-duc-64" target="_self">Vé máy bay giá rẻ đi Đức</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-di-han-quoc-65" target="_self">Vé máy bay giá rẻ đi Hàn Quốc</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-di-singapore-66" target="_self">Vé máy bay giá rẻ đi Singapore</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-di-thuy-si-67" target="_self">Vé máy bay giá rẻ đi Thụy Sĩ</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-di-thai-lan-68" target="_self">Vé máy bay giá rẻ đi Thái Lan</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-di-nga-69" target="_self">Vé máy bay giá rẻ đi Nga</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-di-nhat-ban-70" target="_self">Vé máy bay giá rẻ đi Nhật Bản</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-di-new-zeland-71" target="_self">Vé máy bay giá rẻ đi New Zeland</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-di-malaysia-72" target="_self">Vé máy bay giá rẻ đi Malaysia</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-di-brunei-73" target="_self">Vé máy bay giá rẻ đi Brunei</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-di-my-74" target="_self">Vé máy bay giá rẻ đi Mỹ</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-di-ha-lan-75" target="_self">Vé máy bay giá rẻ đi Hà Lan</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-di-an-do-76" target="_self">Vé máy bay giá rẻ đi Ấn Độ</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-di-dubai-78" target="_self">Vé máy bay giá rẻ đi DuBai</a></li>
            </ul></div>
            <div class="col-md-4"> <ul>
                <li class="title"><h4>Vé máy bay theo hãng</h4></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-vietnam-airlines-79" target="_self">Vé máy bay giá rẻ Vietnam Airlines</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-jetstar-80" target="_self">Vé máy bay giá rẻ JetStar</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-vietjet-81" target="_self">Vé máy bay giá rẻ VietJet</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-tiger-airway-82" target="_self">Vé máy bay giá rẻ Tiger Airway</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-singapore-airlines-83" target="_self">Vé Máy Bay giá rẻ Singapore Airlines</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-qatar-airways-84" target="_self">Vé Máy Bay giá rẻ Qatar Airways</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-eva-airlines-85" target="_self">Vé Máy Bay giá rẻ Eva Airlines</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-cathay-pacific-86" target="_self">Vé Máy Bay giá rẻ Cathay Pacific</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-thai-airways-87" target="_self">Vé Máy Bay giá rẻ Thai Airways</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-asiana-88" target="_self">Vé Máy Bay giá rẻ Asiana</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-air-asia-90" target="_self">Vé máy bay giá rẻ Air Asia</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-gia-re-china-airlines-91" target="_self">Vé máy bay giá rẻ China Airlines</a></li>
                <li class="title"><h4>Vé máy bay </h4></li>
                <li><a href="/ve-gia-re/ve-may-bay-vietnam-airlines-129" target="_self">Vé máy bay Vietnam Airlines</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-jetstar-135" target="_self">Vé máy bay Jetstar</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-tet-137" target="_self">Vé máy bay tết</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-vietjet-141" target="_self">Vé máy bay Vietjet</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-khuyen-mai-147" target="_self">Vé Máy Bay Khuyến Mãi</a></li>
                <li><a href="/ve-gia-re/ve-may-bay-tet-2018-152" target="_self">Vé máy bay Tết 2018</a></li>
            </ul></div>
        </div>

    </div>
</div>
<div class="social-section container-fluid hidden" >
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <br>
                <br>
                <div class="fb-page" data-href="https://www.facebook.com/Clicktravelvn/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Clicktravelvn/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Clicktravelvn/">Clicktravel.vn - vé máy bay trực tuyến</a></blockquote></div>
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
<script type="text/javascript">
    $('.quick_search').click(function(re){
        console.log(re);
        var s = $(this).html();
        console.log(s);
        var data_form = $('#formid').serializeArray().reduce(function(obj, item) {
            obj[item.name] = item.value;
            return obj;
        }, {});

        var param = {
            Adt: data_form.adult,
            Chd: data_form.children,
            Departure: getBettwen(data_form.start_place),
            DepartureDate: data_form.start_date,
            Destination: getBettwen(s),
            Inf: data_form.baby,
            ItineraryType: data_form.mode == 'two_way' ? 2 : 1,
            ReturnDate: data_form.end_date,
            fn: "search",
            languageCode: "vi-VN",
            m: "searchbox",
            productKey: "anhjyzmiuwvtjlr"
        }
        console.log(param);
        $.post("http://ibev2.maybay.net/Modulerequest.ashx",
            param,
            function (data, status) {
                var ref = $.parseJSON(data);
                console.log(data);
                window.location = ref.Data;
// window.location = ref.Data + '&'+$('#formid').serialize();
});

    })
</script>
<style type="text/css">
    .quick_search{
        cursor: pointer;
    }
    .content-place p {
        color: #ff9c00;
        font-size: 18px;
        font-weight: bold;
    }

</style>


<div id="myModal" class="modal fade  " role="dialog" >
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/email-khuyenmai" method="post" id="khuyenmai-form">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Nhận mã đăng ký</h4>
                </div>
                <div class="modal-body">
                    <label>
                        Điền tên và email của bạn cho chúng tôi, chúng tôi sẽ gửi mã giảm giá cho bạn
                    </label>
                    <br>
                    <br>
                    <div class="row">
                    <div class="col-md-3 text-right">
                            <br>
                            <p>Tên của bạn</p>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="name" class="form-control" placeholder="Tên của bạn" id="khuyenmai-name" />
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3  text-right">
                            <br>
                            <p>Email của bạn. </p>
                        </div>
                        <div class="col-md-9">
                            <input type="email" name="email" class="form-control" placeholder="Email của bạn"  id="khuyenmai-email" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-9 col-md-offset-3">
                 <div class="alert alert-danger" id="khuyenmai-error" style="display: none">
                    Có lỗi xảy ra, xin thử lại
                </div>
                <div class="alert alert-success" id="khuyenmai-success"  style="display: none">
                    Đã gửi thành công, xin hãy thường xuyên kiểm tra email.
                </div>
                </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-success" id="btn-submit-km" onclick="submitKhuyenmai()">Gửi</button>
                </div>
            </div>
        </form>
    </div>
</div>


<script type="text/javascript">
    function submitKhuyenmai(){
        var data = $('#khuyenmai-form').serialize();
        $('#khuyenmai-error').css('display', 'none');
        $('#khuyenmai-success').css('display', 'none');
        $('#btn-submit-km').prop("disabled", true);

        if($('#khuyenmai-email').val() == '' || $('#khuyenmai-name').val() == ''){
            $('#khuyenmai-error').css('display', 'block');
            $('#khuyenmai-error').html('Xin hãy điền đủ thông tin');
            $('#btn-submit-km').prop("disabled", false);
            return;
        }
        if(!validateEmail($('#khuyenmai-email').val())){
            $('#khuyenmai-error').css('display', 'block');
            $('#khuyenmai-error').html('Xin hãy nhập đúng email');
             $('#btn-submit-km').prop("disabled", false);
            return;
        }
        $.ajax({
            type: "get",
            url: '/khuyenmai-email/?'+data,
            success: function(res){
                res = JSON.parse(res);
                $('#btn-submit-km').prop("disabled", false);
                if(res.success){
                     $('#khuyenmai-success').css('display', 'block');
                     $('#khuyenmai-email').val('');
                     $('#khuyenmai-name').val('')
                }else{
                     $('#khuyenmai-error').css('display', 'block');
                    $('#khuyenmai-error').html(res.msg);
                }
            },
        });
    }
    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

</script>

@endsection
