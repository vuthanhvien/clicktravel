@extends('layouts.app')

@section('content')
<div class="container-fluid booking" style="background-image: url('/img/bg-{{rand(1,4)}}.jpg')">
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#"><i class="fa fa-plane fa-lg"></i> &nbsp;&nbsp;&nbsp; Đăng ký vé máy bay</a></li>
        </ul>
        <div class="form">
            <br>
            <form action="/ticket" class=" ">
                <span class="radio radio-primary">
                    <input type="radio" checked="checked" name="mode" id="radio1" value="two_way" onclick="modechange('two_way')">
                    <label for="radio1">
                        Khứ hồi
                    </label>
                </span> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                <span class="radio radio-primary">
                    <input type="radio" name="mode" id="radio2" value="one_way" onclick="modechange('one_way')">
                    <label for="radio2">
                        Một chiều
                    </label>
                </span>
                <br>
                <div class="form-booking">
                    <div class="inner start-place " >
                        <label>Điểm đi</label>
                        <input type="text" onclick="openPopover('popover-start')" id="start_place" name="start_place" data-readonly placeholder="Điểm đi" required />
                        <div id="popover-start" class="dropdown-menu location-select">
                            <div class="popover-header text-left" style="background: #3097D1; height: 50px; padding: 15px 15px 0 15px" >
                                <h4 class="no-margin hidden-xs" style="display: inline-block;">Chọn lựa điểm đi &nbsp;&nbsp;&nbsp;&nbsp;</h4>
                                <ul class="no-list no-padding" style="display: inline-block;">
                                    <li  class="active" ><a data-toggle="tab" href="#country" class="text-white">Nội địa</a></li>
                                    <li>&nbsp;&nbsp; || &nbsp;&nbsp; </li>
                                    <li><a data-toggle="tab" href="#asia" class="text-white">Khu vực</a> </li>
                                    <li>&nbsp;&nbsp; || &nbsp;&nbsp; </li>
                                    <li><a data-toggle="tab" href="#world" class="text-white"> Quốc tế</a></li>
                                </ul>
                            </div>
                            <div class="popover-body">
                                <br>
                                <div class="tab-content place-select">
                                    <div id="country" class="tab-pane fade in active">
                                        <div class="row">
                                            <div class="col-xs-5 col-sm-4">
                                                <ul>
                                                    <li class="text-blue"><strong>Miền bắc</strong></li>
                                                    <li><a class="place" data-place="HN">Hà Nội</a></li>
                                                    <li><a class="place" data-place="HN1">Hải phòng</a></li>
                                                    <li><a class="place" data-place="HN2">Ninh Bình</a></li>
                                                    <li><a class="place" data-place="HN3">Sapa</a></li>
                                                    <li><a class="place" data-place="HN4">Lạng Sơn</a></li>
                                                    <li><a class="place" data-place="HN5">Yên bái</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-7 col-sm-4">
                                                <ul>
                                                    <li class="text-blue"><strong>Miền nam</strong></li>
                                                    <li><a class="place" data-place="HN">Tp Hồ chí Minh</a></li>
                                                    <li><a class="place" data-place="HN1">Cần thơ</a></li>
                                                    <li><a class="place" data-place="HN2">Cà Mau</a></li>
                                                    <li><a class="place" data-place="HN3">Phú quốc</a></li>
                                                    <li><a class="place" data-place="HN4">Kiên giang</a></li>
                                                    <li><a class="place" data-place="HN5">Vĩnh Long</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-6 col-sm-4">
                                                <ul>
                                                    <li class="text-blue"><strong>Miền trung</strong></li>
                                                    <li><a class="place" data-place="HN">Huê</a></li>
                                                    <li><a class="place" data-place="HN1">Đà Nẵng</a></li>
                                                    <li><a class="place" data-place="HN2">Nghệ An</a></li>
                                                    <li><a class="place" data-place="HN3">Đà lạt</a></li>
                                                    <li><a class="place" data-place="HN4">Buôn mê thuột</a></li>
                                                    <li><a class="place" data-place="HN5">Nghệ An</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="asia" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-xs-5 col-sm-4">
                                                <ul>
                                                    <li class="text-blue"><strong>Thái Lan</strong></li>
                                                    <li><a class="place" data-place="HN" >Bangkok</a></li>
                                                    <li><a class="place" data-place="HN" >Bangkok</a></li>
                                                    <li class="text-blue"><strong>Campuchia</strong></li>
                                                    <li><a class="place" data-place="HN" >Pompenh</a></li>
                                                    <li class="text-blue"><strong>Singapore</strong></li>
                                                    <li><a class="place" data-place="HN" >Singapore</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-7 col-sm-4">
                                                <ul>
                                                    <li class="text-blue"><strong>Philipin</strong></li>
                                                    <li><a class="place" data-place="HN" >Philipin</a></li>
                                                    <li class="text-blue"><strong>Maylaisya</strong></li>
                                                    <li><a class="place" data-place="HN" >Maylaisya</a></li>
                                                    <li class="text-blue"><strong>Indonexia</strong></li>
                                                    <li><a class="place" data-place="HN" >Indonexia</a></li>
                                                    <li><a class="place" data-place="HN" >Singapr</a></li>
                                                    <li><a class="place" data-place="HN" >Philipin</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-6 col-sm-4">
                                                <ul>
                                                    <li class="text-blue"><strong>Philipin</strong></li>
                                                    <li><a class="place" data-place="HN" >Philipin</a></li>
                                                    <li class="text-blue"><strong>Maylaisya</strong></li>
                                                    <li><a class="place" data-place="HN" >Maylaisya</a></li>
                                                    <li class="text-blue"><strong>Indonexia</strong></li>
                                                    <li><a class="place" data-place="HN" >Indonexia</a></li>
                                                    <li><a class="place" data-place="HN" >Singapr</a></li>
                                                    <li><a class="place" data-place="HN" >Philipin</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="world" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-xs-5 col-sm-4">
                                                <ul>
                                                    <li class="text-blue"><strong>Châu Á</strong></li>
                                                    <li><a class="place" data-place="HN">Australia</a></li>
                                                    <li><a class="place" data-place="HN" >Par (Pháp)</a></li>
                                                    <li><a class="place" data-place="HN" >Luân đôn (Anh)</a></li>
                                                    <li><a class="place" data-place="HN" >New york (Mỹ)</a></li>
                                                    <li><a class="place" data-place="HN" >Bắc Kinh (TQ)</a></li>
                                                    <li><a class="place" data-place="HN" >Tokyo (Nhật)</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-7 col-sm-4">
                                                <ul>
                                                    <li class="text-blue"><strong>Châu Âu</strong></li>
                                                    <li><a class="place" data-place="HN">Australia</a></li>
                                                    <li><a class="place" data-place="HN" >Par (Pháp)</a></li>
                                                    <li><a class="place" data-place="HN" >Luân đôn (Anh)</a></li>
                                                    <li><a class="place" data-place="HN" >New york (Mỹ)</a></li>
                                                    <li><a class="place" data-place="HN" >Bắc Kinh (TQ)</a></li>
                                                    <li><a class="place" data-place="HN" >Tokyo (Nhật)</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-6 col-sm-4">
                                                <ul>
                                                    <li class="text-blue"><strong>Châu Mỹ</strong></li>
                                                    <li><a class="place" data-place="HN">Australia</a></li>
                                                    <li><a class="place" data-place="HN" >Par (Pháp)</a></li>
                                                    <li><a class="place" data-place="HN" >Luân đôn (Anh)</a></li>
                                                    <li><a class="place" data-place="HN" >New york (Mỹ)</a></li>
                                                    <li><a class="place" data-place="HN" >Bắc Kinh (TQ)</a></li>
                                                    <li><a class="place" data-place="HN" >Tokyo (Nhật)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center" style="height: 56px;">
                                <button type=button class="btn-end" onClick="update(); closePopover('popover-start');">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="inner end-place" >
                        <label>Điểm đến</label>
                        <button class="btn replace hidden-xs hidden-sm" type="button" onclick="change_place()"> <i class="fa fa-exchange"></i></button>
                        <input type="text" onclick="openPopover('popover-end')" id="end_place" name="end_place" data-readonly placeholder="Điểm đến" required />
                        <div id="popover-end" class="dropdown-menu location-select" style="padding: 0">
                            <div class="popover-header text-left" style="background: #3097D1; height: 50px; padding: 15px 15px 0 15px" >

                                <h4 class="no-margin hidden-xs" style="display: inline-block;">Chọn lựa điểm đến &nbsp;&nbsp;&nbsp;&nbsp;</h4>
                                <ul class="no-list no-padding" style="display: inline-block;">
                                    <li  class="active" ><a data-toggle="tab" href="#country2" class="text-white">Nội địa</a></li>
                                    <li>&nbsp;&nbsp; || &nbsp;&nbsp; </li>
                                    <li><a data-toggle="tab" href="#asia2" class="text-white">Khu vực</a> </li>
                                    <li>&nbsp;&nbsp; || &nbsp;&nbsp; </li>
                                    <li><a data-toggle="tab" href="#world2" class="text-white"> Quốc tế</a></li>
                                </ul>
                            </div>
                            <div class="popover-body">
                                <br>
                                <div class="tab-content place-select">
                                <div id="country2" class="tab-pane fade in active">
                                        <div class="row">
                                            <div class="col-xs-5 col-sm-4">
                                                <ul>
                                                    <li class="text-blue"><strong>Miền bắc</strong></li>
                                                    <li><a class="place" data-place="HN">Hà Nội</a></li>
                                                    <li><a class="place" data-place="HN1">Hải phòng</a></li>
                                                    <li><a class="place" data-place="HN2">Ninh Bình</a></li>
                                                    <li><a class="place" data-place="HN3">Sapa</a></li>
                                                    <li><a class="place" data-place="HN4">Lạng Sơn</a></li>
                                                    <li><a class="place" data-place="HN5">Yên bái</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-7 col-sm-4">
                                                <ul>
                                                    <li class="text-blue"><strong>Miền nam</strong></li>
                                                    <li><a class="place" data-place="HN">Tp Hồ chí Minh</a></li>
                                                    <li><a class="place" data-place="HN1">Cần thơ</a></li>
                                                    <li><a class="place" data-place="HN2">Cà Mau</a></li>
                                                    <li><a class="place" data-place="HN3">Phú quốc</a></li>
                                                    <li><a class="place" data-place="HN4">Kiên giang</a></li>
                                                    <li><a class="place" data-place="HN5">Vĩnh Long</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-6 col-sm-4">
                                                <ul>
                                                    <li class="text-blue"><strong>Miền trung</strong></li>
                                                    <li><a class="place" data-place="HN">Huê</a></li>
                                                    <li><a class="place" data-place="HN1">Đà Nẵng</a></li>
                                                    <li><a class="place" data-place="HN2">Nghệ An</a></li>
                                                    <li><a class="place" data-place="HN3">Đà lạt</a></li>
                                                    <li><a class="place" data-place="HN4">Buôn mê thuột</a></li>
                                                    <li><a class="place" data-place="HN5">Nghệ An</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="asia2" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-xs-5 col-sm-4">
                                                <ul>
                                                    <li class="text-blue"><strong>Thái Lan</strong></li>
                                                    <li><a class="place" data-place="HN" >Bangkok</a></li>
                                                    <li><a class="place" data-place="HN" >Bangkok</a></li>
                                                    <li class="text-blue"><strong>Campuchia</strong></li>
                                                    <li><a class="place" data-place="HN" >Pompenh</a></li>
                                                    <li class="text-blue"><strong>Singapore</strong></li>
                                                    <li><a class="place" data-place="HN" >Singapore</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-7 col-sm-4">
                                                <ul>
                                                    <li class="text-blue"><strong>Philipin</strong></li>
                                                    <li><a class="place" data-place="HN" >Philipin</a></li>
                                                    <li class="text-blue"><strong>Maylaisya</strong></li>
                                                    <li><a class="place" data-place="HN" >Maylaisya</a></li>
                                                    <li class="text-blue"><strong>Indonexia</strong></li>
                                                    <li><a class="place" data-place="HN" >Indonexia</a></li>
                                                    <li><a class="place" data-place="HN" >Singapr</a></li>
                                                    <li><a class="place" data-place="HN" >Philipin</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-6 col-sm-4">
                                                <ul>
                                                    <li class="text-blue"><strong>Philipin</strong></li>
                                                    <li><a class="place" data-place="HN" >Philipin</a></li>
                                                    <li class="text-blue"><strong>Maylaisya</strong></li>
                                                    <li><a class="place" data-place="HN" >Maylaisya</a></li>
                                                    <li class="text-blue"><strong>Indonexia</strong></li>
                                                    <li><a class="place" data-place="HN" >Indonexia</a></li>
                                                    <li><a class="place" data-place="HN" >Singapr</a></li>
                                                    <li><a class="place" data-place="HN" >Philipin</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="world2" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-xs-5 col-sm-4">
                                                <ul>
                                                    <li class="text-blue"><strong>Châu Á</strong></li>
                                                    <li><a class="place" data-place="HN">Australia</a></li>
                                                    <li><a class="place" data-place="HN" >Par (Pháp)</a></li>
                                                    <li><a class="place" data-place="HN" >Luân đôn (Anh)</a></li>
                                                    <li><a class="place" data-place="HN" >New york (Mỹ)</a></li>
                                                    <li><a class="place" data-place="HN" >Bắc Kinh (TQ)</a></li>
                                                    <li><a class="place" data-place="HN" >Tokyo (Nhật)</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-7 col-sm-4">
                                                <ul>
                                                    <li class="text-blue"><strong>Châu Âu</strong></li>
                                                    <li><a class="place" data-place="HN">Australia</a></li>
                                                    <li><a class="place" data-place="HN" >Par (Pháp)</a></li>
                                                    <li><a class="place" data-place="HN" >Luân đôn (Anh)</a></li>
                                                    <li><a class="place" data-place="HN" >New york (Mỹ)</a></li>
                                                    <li><a class="place" data-place="HN" >Bắc Kinh (TQ)</a></li>
                                                    <li><a class="place" data-place="HN" >Tokyo (Nhật)</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-6 col-sm-4">
                                                <ul>
                                                    <li class="text-blue"><strong>Châu Mỹ</strong></li>
                                                    <li><a class="place" data-place="HN">Australia</a></li>
                                                    <li><a class="place" data-place="HN" >Par (Pháp)</a></li>
                                                    <li><a class="place" data-place="HN" >Luân đôn (Anh)</a></li>
                                                    <li><a class="place" data-place="HN" >New york (Mỹ)</a></li>
                                                    <li><a class="place" data-place="HN" >Bắc Kinh (TQ)</a></li>
                                                    <li><a class="place" data-place="HN" >Tokyo (Nhật)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center" style="height: 56px;">
                                <button type=button class="btn-end" onClick="update(); closePopover('popover-end');">
                                </button>
                            </div>
                        </div>
                    </div>
                    <span class="select-date">
                        <div class="inner start-date" >

                            <label>Ngày đến</label>
                            <input type="text" class="" id="start_date"  data-large-mode="true" data-large-default="true" data-lang="vi"  data-min-year="2016" data-max-year="2030" name="start_date" data-format="d/m/Y" placeholder="Ngày đi" required>
                            <i class="fa fa-calendar input-icon"></i>
                        </div>
                        <div class="inner end-date" >

                            <label>Ngày khứ hồi</label>
                            <input type="text"  data-large-mode="true" data-large-default="true"  data-lang="vi" id="end_date" data-min-year="2016"  data-max-year="2030" name="end_date"  data-format="d/m/Y" placeholder="Ngày khứ hồi" onchange="update_mode()">
                            <i class="fa fa-calendar input-icon"></i>
                        </div>
                    </span>
                    <div class="inner number" >

                        <label>Hành khách</label>
                        <div class="dropdown passenger">
                            <input type="text" readonly id="number-passenger" value="1 hành khách" onClick="openPopover('popover-passenger')" name="number" placeholder="Hành khách" >
                            <div id="popover-passenger" class="dropdown-menu dropdown-menu-right " >
                                <div class="popover-header">
                                    <p>Chọn lựa số lượng hành khách</p>
                                </div>
                                <div class="popover-body">
                                    <div>
                                        <button type=button class="btn" onClick="down('adult')"><i class="fa fa-minus"></i></button><span class="nb" id="adult"> 1 </span> <button type=button class="btn" onClick="up('adult')"><i class="fa fa-plus"></i></button> <span> Người lớn (hơn 12 tuổi)</span>
                                        <input  name="adult" type="hidden" id="adult-value" value="1">
                                    </div>
                                    <hr>
                                    <div>
                                        <button type=button class="btn" onClick="down('children')"><i class="fa fa-minus"></i></button><span class="nb" id="children"> 0 </span> <button type=button class="btn" onClick="up('children')"><i class="fa fa-plus"></i></button> <span> Trẻ em (từ 2 đến 11 tuổi)</span>
                                        <input name="children" type="hidden" id="children-value" value="0">
                                    </div>
                                    <hr>
                                    <div>
                                        <button type=button class="btn" onClick="down('baby')"><i class="fa fa-minus"></i></button><span class="nb" id="baby"> 0 </span> <button type=button class="btn" onClick="up('baby')"><i class="fa fa-plus"></i></button> <span> Trẻ sơ sinh (dưới 24 tháng tuổi)</span>
                                        <input  name="baby" type="hidden" id="baby-value" value="0">

                                    </div>
                                </div>
                                <div class="text-center" style="height: 56px;">
                                    <button class="btn-end" type=button onClick="update(); closePopover('popover-passenger');">
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-success submit"  type="submit"><i class="fa fa-search"></i> &nbsp;&nbsp; Tìm chuyến bay</button>
                    </div>
                </div>

            </form>
        </div>
        <br>
        <br>
    </div>
</div>
<div class="bestter container-fluid" style="background-color: #eee">

    <div class="container">
        <div class="timeline">
            <h3 class="header">Các chuyến bay nội địa</h3>
            <p class="desc">Tháng 7, bay từ TP Hồ Chí Mình</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="place place-first" style='background-image: url("https://content.skyscnr.com/0ccd022e5d074467344ac3d01d5d1df7/GettyImages-178793470.jpg?resize=900px:600px&quality=50");'>
                        <div class="content-place">
                            <h3>Đà Nắng <small>Việt nam</small> </h3>
                            <hr />
                            <p>Chỉ từ 1.500.000 đ</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="place" style='background-image: url("https://content.skyscnr.com/4256a18a3673a5f3926fc37bb2b80beb/GettyImages-517678055.jpg?resize=900px:600px&quality=50");'>
                        <div class="content-place">
                            <h3>Đà Lạt, <small>Việt nam</small> </h3>
                            <hr />
                            <p>Chỉ từ 1.500.000 đ</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="place" style='background-image: url("https://content.skyscnr.com/b08a6baae567f5c74243d9d01de13498/GettyImages-491610663.jpg?resize=900px:600px&quality=50");''>
                        <div class="content-place">
                            <h3>Phú quốc, <small>Việt nam</small> </h3>
                            <hr />
                            <p>Chỉ từ 1.500.000 đ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="timeline">
            <h3 class="header">Các chuyến bay trong khu vực</h3>
            <p class="desc">Tháng 7, bay từ TP Hồ Chí Mình</p>
            <div class="row">
                <div class="col-md-5">
                    <div class="place place-first" style='background-image: url("https://content.skyscnr.com/03f91e2d35a994dc7e207b3d81a7f347/GettyImages-453302789.jpg?resize=900px:600px&quality=50");'>
                        <div class="content-place">
                            <h3>Đền Angco, <small>Campuchia</small> </h3>
                            <hr />
                            <p>Chỉ từ 1.500.000 đ</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="place" style='background-image: url("https://content.skyscnr.com/4256a18a3673a5f3926fc37bb2b80beb/GettyImages-517678055.jpg?resize=900px:600px&quality=50");'>
                        <div class="content-place">
                            <h3>Anima, <small>Philippin</small> </h3>
                            <hr />
                            <p>Chỉ từ 1.500.000 đ</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="place" style='background-image: url("https://content.skyscnr.com/b08a6baae567f5c74243d9d01de13498/GettyImages-491610663.jpg?resize=900px:600px&quality=50");''>
                        <div class="content-place">
                            <h3>Bangkok, <small>Thái Lan</small> </h3>
                            <hr />
                            <p>Chỉ từ 1.500.000 đ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="timeline">
            <h3 class="header">Các chuyến bay quốc tế</h3>
            <p class="desc">Tháng 7, bay từ TP Hồ Chí Mình</p>
            <div class="row">
                <div class="col-md-7">
                    <div class="place" style='background-image: url("https://content.skyscnr.com/e7a2a47983670312af48f3cae2a229c4/GettyImages-483655401.jpg?resize=900px:600px&quality=50");''>
                        <div class="content-place">
                            <h3>Alicante, <small>Spanis</small> </h3>
                            <hr />
                            <p>Chỉ từ 5.500.000 đ</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="place" style='background-image: url("https://content.skyscnr.com/e74a469df80618aad23161a93fe88fb4/GettyImages-471878489.jpg?resize=900px:600px&quality=50");'>
                        <div class="content-place">
                            <h3>New delhi, <small>Indian</small> </h3>
                            <hr />
                            <p>Chỉ từ 3.500.000 đ</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
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
                <h4>Phục vụ 24/7</h4>
                <br>
                <p>Chúng tôi luôn luôn phụ vụ quý khách suốt 24 giờ trong ngày và 7 ngày trong tuần</p>
            </div>
            <div class="col-md-4 text-center  content-inner">
                <img src="/img/price-tag.png" width="100">  
                <br>
                <h4>Giá cả phù hợp</h4>
                <br>
                <p>Chúng tôi cam kết giá cả luôn cạnh tranh, luôn phù hợp với quý khách</p>
            </div>
            <div class="col-md-4 text-center  content-inner">
                <img src="/img/luggage.png" width="100">
                <br>
                <h4>Dịch vụ đa dạng</h4>
                <br>
                <p>Chúng tôi có một dịch vụ đa dạng, bao gồm vé máy bay, khách sạn, tour du lịch</p>
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

                <h4>Phương thức 1: </h4>
                <div class="box">
                    <p style="margin-left: 15px;">Lên trực tiếp website, nhanh và tiền nhất , truy cập <a href="http://clicktravel.vn/ticket"  target="_blank">http://clicktravel.vn/ticket</a></p>
                </div>
                <br>
                <h4>Phương thức 2: </h4>
                <div class="box">
                    <p style="margin-left: 15px;">Qua Chat</p>
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
                                    <h4 class="pull-left">Skype</h4>
                                    <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
                                    <div id="SkypeButton_Call_vuthanhvien742_1">
                                        <script type="text/javascript">
                                            Skype.ui({
                                                "name": "dropdown",
                                                "element": "SkypeButton_Call_vuthanhvien742_1",
                                                "participants": ["vuthanhvien742"],
                                                "imageSize": 24
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="zalo" class="tab-pane fade">
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <hr class="no-margin" >
                                    <br>
                                    <h4>Zalo &nbsp; <a href="viber://add?number=0975010733">0975010733</a></h4>
                                </div>
                            </div>
                        </div>
                        <div id="facebook" class="tab-pane fade">
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <hr class="no-margin" >
                                    <br>
                                    <h4>Facebook messenger &nbsp; <a href="https://www.facebook.com/vanphongtyphu" target="_blank">fb.com/vanphongtyphu</a></h4>
                                </div>
                            </div>
                        </div>
                        <div id="viber" class="tab-pane fade">
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <hr class="no-margin" >
                                    <br>
                                    <h4>Viber &nbsp; <a href="viber://add?number=0975010733">0975010733</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <h4>Phương thức 3: </h4>
                <div class="box">
                    <p style="margin-left: 15px;">Gọi điện dến cty Tiến Phong</p>
                    <h3 class="text-center"><a href=""><i class="fa fa-phone"></i> 0912.563.256 </a><small class="hidden-xs">  &nbsp;&nbsp; hoặc &nbsp;&nbsp;</small><br class="hidden-sm hidden-lg hidden-md"><a href=""><i class="fa fa-phone"></i> 0912.563.256 </a></h3>
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
                                    <a href="" ><img src="/img/bank/1.png"></a>
                                </div>
                                <div class="logo-inner">
                                    <a href="" ><img src="/img/bank/2.jpg"></a>
                                </div>
                                <div class="logo-inner">
                                    <a href="" ><img src="/img/bank/3.png"></a>
                                </div>
                                <div class="logo-inner">
                                    <a href="" ><img src="/img/bank/4.png"></a>
                                </div>
                                <div class="logo-inner">
                                    <a href="" ><img src="/img/bank/5.jpg"></a>
                                </div>
                                <div class="logo-inner">
                                    <a href="" ><img src="/img/bank/6.jpg"></a>
                                </div>
                                <div class="logo-inner">
                                    <a href="" ><img src="/img/bank/7.png"></a>
                                </div>
                                <div class="logo-inner">
                                    <a href="" ><img src="/img/bank/8.png"></a>
                                </div>
                                <div class="logo-inner">
                                    <a href="" ><img src="/img/bank/9.png"></a>
                                </div>
                                <div class="logo-inner">
                                    <a href="" ><img src="/img/bank/10.jpg"></a>
                                </div>
                                <div class="logo-inner">
                                    <a href="" ><img src="/img/bank/11.png"></a>
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
                <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="450" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
                <br>
                <br>
            </div>
            <div class="col-md-7">
                <br>
                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3921.396670920603!2d107.05020711479943!3d10.626260192423524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175110847b2d1cd%3A0x54f75cbfc2290b7f!2zVsOpIE3DoXkgQmF5IMSQ4bqhaSBUaeG6v24gUGhvbmc!5e0!3m2!1svi!2s!4v1499012979688" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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


<script type="text/javascript">
    var adult = 1;
    var children = 0;
    var baby = 0;
    function down(type){
        if(type == 'adult'){
            if(adult > 0)
                adult = adult - 1;
        }else if(type == 'children'){
            if(children > 0)
                children = children - 1;
        }else if(type == 'baby'){
            if(baby > 0)
                baby = baby - 1;
        }
        update();
    }
    function up(type){
        if(type == 'adult'){
            if(adult < 99)
                adult = adult + 1;
        }else if(type == 'children'){
            if(children < 99)
                children = children + 1;
        }else if(type == 'baby'){
            if(baby < 99)
                baby = baby + 1;
        }
        update();
    }
    function update(){
        $('#adult').html(adult);
        $('#adult-value').val(adult);
        $('#children').html(children);
        $('#children-value').val(children);
        $('#baby').html(baby);
        $('#baby-value').val(baby);
        var total = adult + children + baby;
        $('#number-passenger').val(total + ' hành khách');
    }
    $('#end_date').dateDropper();
    $('#end_date_mobile').dateDropper();
    $( "#start_date" ).dateDropper();
    $( "#start_date_mobile" ).dateDropper();
    function openPopover(id){
        $('#'+id).fadeIn(50);
    }
    function closePopover(id){
        $('#'+id).hide();
    }
    function change_place(){
        var tmp = $('#start_place').val();
        $('#start_place').val($('#end_place').val());
        $('#end_place').val(tmp);
    }
    function modechange(type){
        if(type == 'one_way'){
            $('#end_date').val('--/--/----');
        }
        if(type == 'two_way'){
            $('#end_date').val($('#start_date').val());
        }
    }
    function update_mode(){
        $('#radio1').prop('checked',true);
    }
    $(document).mouseup(function(e){
        var passenger_div = $("#popover-passenger");
        if (!passenger_div.is(e.target) && passenger_div.has(e.target).length === 0){
            passenger_div.hide();
        }

        var start_div = $("#popover-start");
        if (!start_div.is(e.target) && start_div.has(e.target).length === 0){
            start_div.hide();
        }
        var end_div = $("#popover-end");
        if (!end_div.is(e.target) && end_div.has(e.target).length === 0){
            end_div.hide();
        }

    });

    $('#popover-start .place').click(function(event){
        console.log(event);
// var data = $(this).data('place');
var data = $(this).html();

$('#start_place').val(data);
$("#popover-start").hide();
})
    $('#popover-end .place').click(function(event){
        console.log(event);
// var data = $(this).data('place');
var data = $(this).html();

$('#end_place').val(data);
$("#popover-end").hide();
})

</script>


@endsection
