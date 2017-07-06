@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row">
        <div class="col-md-12">
            <div class="out-form">
                <div class="booking-summary" data-toggle="collapse" data-target="#ticket-form">
                    <div class="pull-left col-xs-6 ">
                        <h4>{{$input['start_place']}} đến {{$input['end_place']}}</h4>
                        <p>{{$input['number']}} | {{$input['mode_lang']}}</p>
                    </div>
                    <div class=" col-xs-6  text-right" style="margin-top: 15px;">
                        <br class="hidden-xs">
                        <p>Thời gian đi : {{ $input['start_date'] }} @if ($input['mode'] == 'two_way') <span class="hidden-xs">||</span> <br class="hidden-sm hidden-md hidden-lg"><br class="hidden-sm hidden-md hidden-lg"> Thời gian về : {{ $input['end_date'] }} @endif</p>
                    </div>
                    <div style="clear: both;"></div>

                </div>
                <div id="ticket-form" class="ticket-form collapse">
                    <br>
                    <form action="/ticket">
                    <div class="row">
                        <div class="col-md-2">
                            <label>Loại chuyến bay</label>
                        </div>
                        <div class="col-xs-10">
                            <span class="radio radio-primary">
                                <input type="radio" name="mode" id="radio1" value="two_way" onclick="modechange('two_way')">
                                <label for="radio1">
                                    Khứ hồi
                                </label>
                            </span> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                            <span class="radio radio-primary">
                                <input type="radio" checked="checked" name="mode" id="radio2" value="one_way" onclick="modechange('one_way')">
                                <label for="radio2">
                                    Một chiều
                                </label>
                            </span>
                        </div>
                    </div>
                    <hr>    
                    <div class="book-ticket">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Địa điểm</label>
                            </div>
                            <div class="col-md-10">
                                <div class="inner " style="width: 50%" >
                                    <label class="label">Điểm đi</label>
                                    <input type="text"  onclick="openPopover('popover-start')" id="start_place" name="start_place" readonly placeholder="Điểm đi" value="{{ $input['start_place'] }}" />
                                    <div id="popover-start" class="dropdown-menu " style="padding: 0">
                                        <div class="popover-header text-left" style="background: #3097D1; height: 50px; padding: 15px 15px 0 15px" >
                                            <h4 class="no-margin text-white" style="display: inline-block;">Chọn lựa điểm đi</h4>
                                            <ul class="no-list" style="display: inline-block;">
                                                <li  class="active" ><a data-toggle="tab" href="#country" class="text-white">Nội địa</a></li>
                                                <li class="text-white">&nbsp;&nbsp; || &nbsp;&nbsp; </li>
                                                <li><a data-toggle="tab" href="#asia" class="text-white">Khu vực</a> </li>
                                                <li class="text-white">&nbsp;&nbsp; || &nbsp;&nbsp; </li>
                                                <li><a data-toggle="tab" href="#world" class="text-white"> Quốc tế</a></li>
                                            </ul>
                                        </div>
                                        <div class="popover-body">
                                            <div style="width: 550px">
                                                <div style="color: #555; padding: 15px 20px">
                                                    <br>
                                                    <div class="tab-content place-select">
                                                        <div id="country" class="tab-pane fade in active">
                                                            <div class="row">
                                                                <div class="col-xs-4">
                                                                    <ul>
                                                                        <li><a class="place" data-place="HN">Hà Nội</a></li>
                                                                        <li><a class="place" data-place="HN1">Hà Nội1</a></li>
                                                                        <li><a class="place" data-place="HN2">Hà Nội2</a></li>
                                                                        <li><a class="place" data-place="HN3">Hà Nội3</a></li>
                                                                        <li><a class="place" data-place="HN4">Hà Nội4</a></li>
                                                                        <li><a class="place" data-place="HN5">Hà Nội5</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <ul>
                                                                        <li><a class="place" data-place="HN">Hà Nội</a></li>
                                                                        <li><a class="place" data-place="HN1">Hà Nội1</a></li>
                                                                        <li><a class="place" data-place="HN2">Hà Nội2</a></li>
                                                                        <li><a class="place" data-place="HN3">Hà Nội3</a></li>
                                                                        <li><a class="place" data-place="HN4">Hà Nội4</a></li>
                                                                        <li><a class="place" data-place="HN5">Hà Nội5</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <ul>
                                                                        <li><a class="place" data-place="HN">Hà Nội</a></li>
                                                                        <li><a class="place" data-place="HN1">Hà Nội1</a></li>
                                                                        <li><a class="place" data-place="HN2">Hà Nội2</a></li>
                                                                        <li><a class="place" data-place="HN3">Hà Nội3</a></li>
                                                                        <li><a class="place" data-place="HN4">Hà Nội4</a></li>
                                                                        <li><a class="place" data-place="HN5">Hà Nội5</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="asia" class="tab-pane fade">
                                                            <div class="row">
                                                                <div class="col-xs-4">
                                                                    <ul>
                                                                        <li><a class="place" data-place="HN" >Maylaisya</a></li>
                                                                        <li><a class="place" data-place="HN" >Campuchia</a></li>
                                                                        <li><a class="place" data-place="HN" >Thailand</a></li>
                                                                        <li><a class="place" data-place="HN" >Laod</a></li>
                                                                        <li><a class="place" data-place="HN" >Singapr</a></li>
                                                                        <li><a class="place" data-place="HN" >Philipin</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <ul>
                                                                        <li><a class="place" data-place="HN" >Maylaisya</a></li>
                                                                        <li><a class="place" data-place="HN" >Campuchia</a></li>
                                                                        <li><a class="place" data-place="HN" >Thailand</a></li>
                                                                        <li><a class="place" data-place="HN" >Laod</a></li>
                                                                        <li><a class="place" data-place="HN" >Singapr</a></li>
                                                                        <li><a class="place" data-place="HN" >Philipin</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <ul>
                                                                        <li><a class="place" data-place="HN" >Maylaisya</a></li>
                                                                        <li><a class="place" data-place="HN" >Campuchia</a></li>
                                                                        <li><a class="place" data-place="HN" >Thailand</a></li>
                                                                        <li><a class="place" data-place="HN" >Laod</a></li>
                                                                        <li><a class="place" data-place="HN" >Singapr</a></li>
                                                                        <li><a class="place" data-place="HN" >Philipin</a></li>
                                                                    </ul>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div id="world" class="tab-pane fade">
                                                            <div class="row">
                                                                <div class="col-xs-4">
                                                                    <ul>
                                                                        <li><a class="place" data-place="HN">Australia</a></li>
                                                                        <li><a class="place" data-place="HN" >Par (Pháp)</a></li>
                                                                        <li><a class="place" data-place="HN" >Luân đôn (Anh)</a></li>
                                                                        <li><a class="place" data-place="HN" >New york (Mỹ)</a></li>
                                                                        <li><a class="place" data-place="HN" >Bắc Kinh (TQ)</a></li>
                                                                        <li><a class="place" data-place="HN" >Tokyo (Nhật)</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <ul>
                                                                        <li><a class="place" data-place="HN">Australia</a></li>
                                                                        <li><a class="place" data-place="HN" >Par (Pháp)</a></li>
                                                                        <li><a class="place" data-place="HN" >Luân đôn (Anh)</a></li>
                                                                        <li><a class="place" data-place="HN" >New york (Mỹ)</a></li>
                                                                        <li><a class="place" data-place="HN" >Bắc Kinh (TQ)</a></li>
                                                                        <li><a class="place" data-place="HN" >Tokyo (Nhật)</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <ul>
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
                                            </div>

                                        </div>
                                        <div class="text-center" style="height: 56px;">
                                            <button type=button class="btn-end" onClick="update(); closePopover('popover-start');">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="inner"  style="width: 50%" >
                                    <label class="label">Điểm đến</label>
                                    <button class="btn replace hidden-xs" type="button" onclick="change_place()"> <i class="fa fa-exchange"></i></button>
                                    <input type="text" onclick="openPopover('popover-end')" id="end_place" name="end_place" readonly placeholder="Điểm đến" style="padding-left: 45px;" value="{{ $input['end_place'] }}"/>
                                    <div id="popover-end" class="dropdown-menu dropdown-menu-right" style="padding: 0">
                                        <div class="popover-header text-left" style="background: #3097D1; height: 50px; padding: 15px 15px 0 15px" >

                                            <h4 class="no-margin text-white" style="display: inline-block;">Chọn lựa điểm đến</h4>
                                            <ul class="no-list" style="display: inline-block;">
                                                <li  class="active" ><a data-toggle="tab" href="#country2" class="text-white">Nội địa</a></li>
                                                <li class="text-white">&nbsp;&nbsp; || &nbsp;&nbsp; </li>
                                                <li><a data-toggle="tab" href="#asia2" class="text-white">Khu vực</a> </li>
                                                <li class="text-white">&nbsp;&nbsp; || &nbsp;&nbsp; </li>
                                                <li><a data-toggle="tab" href="#world2" class="text-white"> Quốc tế</a></li>
                                            </ul>
                                        </div>
                                        <div class="popover-body">
                                            <div style="width: 550px">
                                                <div style="color: #555; padding: 15px 20px">
                                                    <br>
                                                    <div class="tab-content place-select">
                                                        <div id="country2" class="tab-pane fade in active">
                                                            <div class="row">
                                                                <div class="col-xs-4">
                                                                    <ul>
                                                                        <li><a class="place" data-place="HN">Hà Nội</a></li>
                                                                        <li><a class="place" data-place="HN1">Hà Nội1</a></li>
                                                                        <li><a class="place" data-place="HN2">Hà Nội2</a></li>
                                                                        <li><a class="place" data-place="HN3">Hà Nội3</a></li>
                                                                        <li><a class="place" data-place="HN4">Hà Nội4</a></li>
                                                                        <li><a class="place" data-place="HN5">Hà Nội5</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <ul>
                                                                        <li><a class="place" data-place="HN">Hà Nội</a></li>
                                                                        <li><a class="place" data-place="HN1">Hà Nội1</a></li>
                                                                        <li><a class="place" data-place="HN2">Hà Nội2</a></li>
                                                                        <li><a class="place" data-place="HN3">Hà Nội3</a></li>
                                                                        <li><a class="place" data-place="HN4">Hà Nội4</a></li>
                                                                        <li><a class="place" data-place="HN5">Hà Nội5</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <ul>
                                                                        <li><a class="place" data-place="HN">Hà Nội</a></li>
                                                                        <li><a class="place" data-place="HN1">Hà Nội1</a></li>
                                                                        <li><a class="place" data-place="HN2">Hà Nội2</a></li>
                                                                        <li><a class="place" data-place="HN3">Hà Nội3</a></li>
                                                                        <li><a class="place" data-place="HN4">Hà Nội4</a></li>
                                                                        <li><a class="place" data-place="HN5">Hà Nội5</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="asia2" class="tab-pane fade">
                                                            <div class="row">
                                                                <div class="col-xs-4">
                                                                    <ul>
                                                                        <li><a class="place" data-place="HN" >Maylaisya</a></li>
                                                                        <li><a class="place" data-place="HN" >Campuchia</a></li>
                                                                        <li><a class="place" data-place="HN" >Thailand</a></li>
                                                                        <li><a class="place" data-place="HN" >Laod</a></li>
                                                                        <li><a class="place" data-place="HN" >Singapr</a></li>
                                                                        <li><a class="place" data-place="HN" >Philipin</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <ul>
                                                                        <li><a class="place" data-place="HN" >Maylaisya</a></li>
                                                                        <li><a class="place" data-place="HN" >Campuchia</a></li>
                                                                        <li><a class="place" data-place="HN" >Thailand</a></li>
                                                                        <li><a class="place" data-place="HN" >Laod</a></li>
                                                                        <li><a class="place" data-place="HN" >Singapr</a></li>
                                                                        <li><a class="place" data-place="HN" >Philipin</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <ul>
                                                                        <li><a class="place" data-place="HN" >Maylaisya</a></li>
                                                                        <li><a class="place" data-place="HN" >Campuchia</a></li>
                                                                        <li><a class="place" data-place="HN" >Thailand</a></li>
                                                                        <li><a class="place" data-place="HN" >Laod</a></li>
                                                                        <li><a class="place" data-place="HN" >Singapr</a></li>
                                                                        <li><a class="place" data-place="HN" >Philipin</a></li>
                                                                    </ul>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div id="world2" class="tab-pane fade">
                                                            <div class="row">
                                                                <div class="col-xs-4">
                                                                    <ul>
                                                                        <li><a class="place" data-place="HN">Australia</a></li>
                                                                        <li><a class="place" data-place="HN" >Par (Pháp)</a></li>
                                                                        <li><a class="place" data-place="HN" >Luân đôn (Anh)</a></li>
                                                                        <li><a class="place" data-place="HN" >New york (Mỹ)</a></li>
                                                                        <li><a class="place" data-place="HN" >Bắc Kinh (TQ)</a></li>
                                                                        <li><a class="place" data-place="HN" >Tokyo (Nhật)</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <ul>
                                                                        <li><a class="place" data-place="HN">Australia</a></li>
                                                                        <li><a class="place" data-place="HN" >Par (Pháp)</a></li>
                                                                        <li><a class="place" data-place="HN" >Luân đôn (Anh)</a></li>
                                                                        <li><a class="place" data-place="HN" >New york (Mỹ)</a></li>
                                                                        <li><a class="place" data-place="HN" >Bắc Kinh (TQ)</a></li>
                                                                        <li><a class="place" data-place="HN" >Tokyo (Nhật)</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <ul>
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
                                            </div>

                                        </div>
                                        <div class="text-center" style="height: 56px;">
                                            <button type="button" class="btn-end" onClick="update(); closePopover('popover-end');">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2"><label>Thời gian</label></div>
                            <div class="col-md-10">
                                <div class="inner" style="width: 50%" >

                                    <label class="label">Ngày đến</label>
                                    <input type="text" class="" id="start_date"  data-large-mode="true" data-large-default="true" data-lang="vi" value="{{ $input['start_date'] }}" data-min-year="2016" data-max-year="2030" name="start_date" placeholder="Ngày đi">
                                    <i class="fa fa-calendar input-icon"></i>
                                </div>
                                <div class="inner" style="width: 50%" >

                                    <label class="label">Ngày khứ hồi</label>
                                    <input type="text" value="{{ $input['end_date'] }}" data-large-mode="true" data-large-default="true"  data-lang="vi" id="end_date" data-min-year="2016"  data-max-year="2030" name="end_date" placeholder="Ngày khứ hồi">
                                    <i class="fa fa-calendar input-icon"></i>
                                </div>
                            </div>

                        </div>

                        <hr>
                        <div class="row passenger">
                            <div class="col-md-2">
                                <label>Hành khách</label>
                                <input type="hidden" name="number" id="number-passenger" value="{{ $input['number'] }}">
                            </div>
                            <div class="col-md-10">
                                <div class="row ">
                                    <div class="col-sm-4 text-center">
                                        <button type="button" class="btn" onClick="down('adult')"><i class="fa fa-minus"></i></button>
                                        <span class="nb" id="adult"> {{ $input['adult'] }} </span> 
                                        <input  name="adult" type="hidden" id="adult-value" value=" {{ $input['adult'] }}">
                                        <button type="button" class="btn" onClick="up('adult')"><i class="fa fa-plus"></i></button>
                                        <br>
                                        <span> Người lớn (hơn 12 tuổi)</span>
                                        <br>

                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <button type="button" class="btn" onClick="down('children')"><i class="fa fa-minus"></i></button>
                                        <span class="nb" id="children"> {{ $input['children'] }} </span> 
                                        <input  name="children" type="hidden" id="children-value" value=" {{ $input['children'] }}">
                                        <button type="button" class="btn" onClick="up('children')"><i class="fa fa-plus"></i></button>
                                        <br> 
                                        <span> Trẻ em (từ 2 đến 11 tuổi)</span>
                                        <br>

                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <button type="button" class="btn" onClick="down('baby')"><i class="fa fa-minus"></i></button>
                                        <span class="nb" id="baby"> {{ $input['baby'] }} </span> 
                                        <input  name="baby" type="hidden" id="baby-value" value=" {{ $input['baby'] }}">
                                        <button type="button" class="btn" onClick="up('baby')"><i class="fa fa-plus"></i></button>
                                        <br>
                                        <span> Trẻ sơ sinh (dưới 24 tháng tuổi)</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row text-center">
                        <button class="btn btn-success"><i class="fa fa-search"></i> &nbsp; Tìm chuyến bay</button>
                    </div>
                    <br>
                    </form>
                    <!-- </div> -->
                </div>
            </div>
            <a href="{{ url('/ticket-month') }}">Hiển thị theo tháng </a> &nbsp;&nbsp; || &nbsp;&nbsp; <a href=""><strong>Hiện thị chuyến bay</strong></a>
            <div class="result">
                <br>
                <div class="row">
                    <div class="col-md-3 hidden-xs">
                        <br>
                        <br>
                        <br>
                        <div >
                            <div data-toggle="collapse" data-target="#time_flight" style="border-bottom: 1px solid #ccc; padding: 0 10px; cursor: pointer;">
                                <h4 style="color: #3097D1"><strong>Thời gian bay </strong> <i class="pull-right fa fa-chevron-down""></i></h4>
                            </div>

                            <div id="time_flight" class="collapse in" style="padding: 10px">
                                <br>
                                <p><strong>Giờ xuất phát</strong></p>
                                <p id="show-start">0g 00 phút đến 24g 00 phút</p>
                                <input
                                id="time-start"
                                type="text"
                                name="somename"
                                data-provide="slider"
                                data-slider-min="0"
                                data-slider-max="1440"
                                data-slider-step="15"
                                data-slider-value="{{ $tickets['filter-start'] }}"
                                data-slider-tooltip="hide"
                                onchange="changeTimeStart()"
                                >
                                <br>
                                <br>
                                <p><strong>Giờ xuất phát</strong></p>
                                <p id="show-end">0g 00 phút đến 24g 00 phút</p>
                                <input
                                id="time-end"
                                type="text"
                                name="somename"
                                data-provide="slider"
                                data-slider-min="0"
                                data-slider-max="1440"
                                data-slider-step="15"
                                data-slider-value="{{ $tickets['filter-start'] }}"
                                data-slider-tooltip="hide"
                                onchange="changeTimeEnd()"
                                >
                            </div>
                            <br>
                            <br>
                            <div data-toggle="collapse" data-target="#brand-flight" style="border-bottom: 1px solid #ccc; padding: 0 10px; cursor: pointer;">
                                <h4 style="color: #3097D1"><strong>Các hãng hàng không </strong> <i class="pull-right fa fa-chevron-down""></i></h4>
                            </div>

                            <div id="brand-flight" class="collapse in" style="padding: 10px">
                                <p class="text-center"><a onclick="deselect()">Chọn hết </a> &nbsp; || &nbsp; <a onclick="select()">Bỏ hết</a></p>
                                @foreach ($tickets['filter-brand'] as $key => $brand)
                                <div class="checkbox checkbox-primary">
                                    <input id="{{$key}}" type="checkbox" checked="{{$brand['check']}}" onchange="select_button()"> 
                                    <label for="{{$key}}">
                                        <strong>{{$brand['name']}}</strong>
                                    </label>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-xs-6" >
                                <h3 style="margin-top: 5px; ">{{ $tickets['showed'] }} <small>/ {{ $tickets['total'] }} kết quả</small><h3>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <span>
                                        <span class="hidden-xs">Sắp xếp theo: </span>
                                        <select class="form-control" value="{{$tickets['filter']}}" style="display: inline-block; width: initial;">
                                            <option value="alphabeta" selected=" {{$tickets['filter'] == 'alphabeta'}} ">Thứ tự ABC</option>
                                            <option value="price" selected=" {{$tickets['filter'] == 'price'}} ">Theo giá</option>
                                            <option value="brand" selected=" {{$tickets['filter'] == 'brand'}} ">Theo hãng bay</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="loading hidden">
                                    <div class="container goo2">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    @foreach ($tickets['rows'] as $key => $ticket)
                                    <br>
                                    <div class="ticket-info">
                                        <div class="ticket ticket-left">
                                            <h4 class="white text-center header" style="white-space: nowrap;"> Thông tin chuyến bay</h4>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-3 col-sm-offset-1 text-center hidden-xs logo-plane"">
                                                    <img src="{{$ticket['img-brand']}}" height="18px">
                                                </div>
                                                <div class="col-sm-2 col-xs-3 col-xs-offset-1 col-sm-offset-0">
                                                    <h3>{{$ticket['start_time']}}</h3>
                                                    <p  style="white-space: nowrap;">{{$ticket['start_place']}}</p>
                                                </div>
                                                <div class="col-sm-3 col-xs-4">
                                                    <p class="text-center time">1g 45 phút</p>
                                                    <div class="line">
                                                    </div>&nbsp;
                                                    <i class="fa fa-plane fa-rotate-45 pull-right" style="margin-left: 0"></i>
                                                    <img class="hidden-lg hidden-md hidden-sm" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" width="70%">
                                                </div>
                                                <div class="col-sm-2 col-xs-3">
                                                    <h3>{{$ticket['end_time']}}</h3>
                                                    <p  style="white-space: nowrap;">{{$ticket['end_place']}}</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-3 col-sm-offset-1 text-center hidden-xs logo-plane"">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" height="18px">
                                                </div>
                                                <div class="col-sm-2 col-xs-3 col-xs-offset-1 col-sm-offset-0">
                                                    <h3>12:45</h3>
                                                    <p  style="white-space: nowrap;">HCM</p>
                                                </div>
                                                <div class="col-sm-3 col-xs-4">
                                                    <p class="text-center time">1g 45 phút</p>
                                                    <div class="line">
                                                    </div>&nbsp;
                                                    <i class="fa fa-plane fa-rotate-45 pull-right" style="margin-left: 0"></i>
                                                    <img class="hidden-lg hidden-md hidden-sm" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" width="70%">
                                                </div>
                                                <div class="col-sm-2 col-xs-3">
                                                    <h3>13:45</h3>
                                                    <p style="white-space: nowrap;">Hà Nội</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class=" ticket ticket-right">
                                            <div class="text-center">
                                                <h4 class="white" style="margin-top: 10px; color: white;"> Giá vé </h4>
                                                <br>
                                                <br>
                                                <br>
                                                <h3 class="money">2.523.125 ₫</h3>
                                                <br>
                                                <button class="btn btn-success" data-toggle="modal" data-target="#detail"> &nbsp;&nbsp;Chọn <i class="fa  fa-chevron-right"></i>&nbsp;&nbsp;</button>
                                            </div>
                                        </div>
                                    </div>           
                                    <div class="clear"></div>
                                    @endforeach

                                    <!-- <div class="text-center">
                                        <button class="btn btn-primary"> Xem thêm <i class="fa fa-spinner fa-pulse fa-w"></i></button>
                                    </div> -->
                                    <br>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @component('modal.modal_ticketdetail')
    @endcomponent

    @component('component.footer')
    @endcomponent

    <script type="text/javascript">
        $('#end_date').dateDropper();
        $( "#start_date" ).dateDropper();

        var adult = {{ $input['adult'] }};
        var children = {{ $input['children'] }};
        var baby = {{  $input['baby'] }};
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
        function changeTimeStart(){
            var time = $('#time-start').val();
            time = time.split(",");
            var start = mintohour(time[0]*1);
            var end = mintohour(time[1]*1);

            $('#show-start').html(start + ' đến ' + end);
        }
        function changeTimeEnd(){
            var time = $('#time-end').val();
            time = time.split(",");
            var start = mintohour(time[0]*1);
            var end = mintohour(time[1]*1);

            $('#show-end').html(start + ' đến ' + end);
        }
        function mintohour(min){

            var hours = Math.floor(min / 60);          
            var minutes = min % 60;
            if (minutes == '0'){ minutes = '00'}
                return hours+'g '+minutes+' phút';
        }
        function openPopover(id){
            $('#'+id).fadeIn(100);
        }
        function closePopover(id){
            $('#'+id).hide();
        }
        function change_place(){
            var tmp = $('#start_place').val();
            $('#start_place').val($('#end_place').val());
            $('#end_place').val(tmp);
        }
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
        function modechange(type){
            if(type == 'one_way'){
                $('#end_date').val('--/--/----');
            }
            if(type == 'two_way'){
                $('#end_date').val($('#start_date').val());
            }
        }
        function deselect(){
            $('.checkbox input').prop('checked', true);
            filter_data();
        }
        function select(){
            $('.checkbox input').prop('checked', false);
            filter_data();
        }
        function select_button(){
            filter_data();
        }
        function filter_data(){
            console.log('123');
        }

    </script>
    @endsection

