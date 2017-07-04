@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row">
        <div class="col-md-12">
            <div class="out-form">
                <div class="booking-summary" data-toggle="collapse" data-target="#ticket-form">
                    <div class="pull-left col-xs-6 ">
                        <h4>TP Hồ Chí Minh đến Hà Nội</h4>
                        <p>3 hành khách | 2 chiều</p>
                    </div>
                    <div class=" col-xs-6  text-right" style="margin-top: 15px;">
                        <br class="hidden-xs">
                        <p>Thời gian đi : 20/05/2017 <span class="hidden-xs">||</span> <br class="hidden-sm hidden-md hidden-lg"><br class="hidden-sm hidden-md hidden-lg"> Thời gian về : 20/05/2017</p>
                    </div>
                    <div style="clear: both;"></div>

                </div>
                <div id="ticket-form" class="ticket-form collapse">
                    <br>
                    <div class="row">
                        <div class="col-md-2">
                            <label>Loại chuyến bay</label>
                        </div>
                        <div class="col-xs-10">
                            <span class="radio radio-primary">
                                <input type="radio" name="mode" id="radio1" value="two_way">
                                <label for="radio1">
                                    Khứ hồi
                                </label>
                            </span> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                            <span class="radio radio-primary">
                                <input type="radio" checked="checked" name="mode" id="radio2" value="one_way">
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
                                    <select type="text"  id="start_place" name="start_place" placeholder="Điểm đi">
                                        <option>Hồ Chí Minh</option>
                                        <option>Hà Nội</option>
                                        <option>Hà Nội</option>
                                        <option>Hà Nội</option>
                                        <option>Hà Nội</option>
                                        <option>Hà Nội</option>
                                    </select>
                                </div>
                                <div class="inner"  style="width: 50%" >
                                    <label class="label">Điểm đến</label>
                                    <button class="btn replace"> <i class="fa fa-exchange"></i></button>
                                    <select type="text"  id="end_place" name="end_place" placeholder="Điểm đến">
                                        <option>Hồ Chí Minh</option>
                                        <option>Hà Nội</option>
                                        <option>Hà Nội</option>
                                        <option>Hà Nội</option>
                                        <option>Hà Nội</option>
                                        <option>Hà Nội</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2"><label>Thời gian</label></div>
                            <div class="col-md-10">
                                <div class="inner" style="width: 50%" >

                                    <label class="label">Ngày đến</label>
                                    <input type="text" class="" id="start_date" data-default-date="11-13-2016" data-large-mode="true" data-large-default="true" data-lang="vi" value="20/10/2017" data-min-year="2016" data-max-year="2030" name="start_date" placeholder="Ngày đi">
                                    <i class="fa fa-calendar input-icon"></i>
                                </div>
                                <div class="inner" style="width: 50%" >

                                    <label class="label">Ngày khứ hồi</label>
                                    <input type="text" data-default-date="11-13-2016" data-large-mode="true" data-large-default="true"  data-lang="vi" id="end_date" data-min-year="2016"  data-max-year="2030" value="20/12/2017" name="end_date" placeholder="Ngày khứ hồi">
                                    <i class="fa fa-calendar input-icon"></i>
                                </div>
                            </div>

                        </div>

                        <hr>
                        <div class="row passenger">
                            <div class="col-md-2">
                                <label>Hành khách</label>
                            </div>
                            <div class="col-md-10">
                                <div class="row ">
                                    <div class="col-sm-4 text-center">
                                        <button class="btn" onClick="down('adult')"><i class="fa fa-minus"></i></button>
                                        <span class="nb" id="adult"> 1 </span> 
                                        <button class="btn" onClick="up('adult')"><i class="fa fa-plus"></i></button>
                                        <br>
                                        <span> Người lớn (hơn 12 tuổi)</span>
                                        <br>

                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <button class="btn" onClick="down('children')"><i class="fa fa-minus"></i></button>
                                        <span class="nb" id="children"> 0 </span> 
                                        <button class="btn" onClick="up('children')"><i class="fa fa-plus"></i></button>
                                        <br> 
                                        <span> Trẻ em (từ 2 đến 11 tuổi)</span>
                                        <br>

                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <button class="btn" onClick="down('baby')"><i class="fa fa-minus"></i></button>
                                        <span class="nb" id="baby"> 0 </span> 
                                        <button class="btn" onClick="up('baby')"><i class="fa fa-plus"></i></button>
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
                                data-slider-value="[0,1440]"
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
                                data-slider-value="[0,1440]"
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
                                <p class="text-center"><a href=""><strong>Chọn hết </strong></a> &nbsp; || &nbsp; <a href="">Bỏ hết</a></p>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox8" type="checkbox" checked="">
                                    <label for="checkbox8">
                                        <strong>Vietnam airline</strong>
                                    </label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox1" type="checkbox" checked="">
                                    <label for="checkbox1">
                                        <strong>Vietjet star</strong>
                                    </label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox2" type="checkbox" checked="">
                                    <label for="checkbox2">
                                        <strong>Vietjet air</strong>
                                    </label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox3" type="checkbox" checked="">
                                    <label for="checkbox3">
                                        <strong>China airline</strong>
                                    </label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox4" type="checkbox" checked="">
                                    <label for="checkbox4">
                                        <strong>Maylasia airline</strong>
                                    </label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox5" type="checkbox" checked="">
                                    <label for="checkbox5">
                                        <strong>Singapore airline</strong>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-xs-6" >
                                <h3 style="margin-top: 5px; ">30 <small>/ 125 kết quả</small><h3>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <span>
                                        <span class="hidden-xs">Sắp xếp theo: </span>
                                        <select class="form-control" style="display: inline-block; width: initial;">
                                            <option>Thứ tự ABC</option>
                                            <option>Theo giá</option>
                                            <option>Theo hãng bay</option>
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
                                    @for ($i = 0; $i < 10; $i++)
                                    <br>
                                    <div class="ticket-info">
                                        <div class="ticket ticket-left">
                                            <h4 class="white text-center header" style="white-space: nowrap;"> Thông tin chuyến bay</h4>
                                            <br>
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
                                                    <p  style="white-space: nowrap;">Hà Nội</p>
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
                                    @endfor

                                    <div class="text-center">
                                        <button class="btn btn-primary"> Xem thêm <i class="fa fa-spinner fa-pulse fa-w"></i></button>
                                    </div>
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
        $('#children').html(children);
        $('#baby').html(baby);
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

</script>
@endsection

