@extends('layouts.app')

@section('content')
<div class="container-fluld">
    <div class="booking-summary" data-toggle="collapse" data-target="#ticket-form">
        <div class="container ">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-xs-4">
                            <h4  class="text-right">{{$input['start_place']}} </h4>

                        </div>
                        <div class="col-xs-4 ">
                            <p class="text-center" style="white-space: nowrap;">{{$input['adult'] + $input['children'] + $input['baby']}} hành khách | {{$input['mode_lang']}}</p>
                            <hr style="margin-top: 5px"><span style="    position: absolute;right: 0;top: 19px;">&#10230;</span>
                        </div>
                        <div class="col-xs-4 ">
                            <h4  class="text-left">{{$input['end_place']}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-right" style="margin-top: 16px;">
                    <p >Thời gian đi : {{ $input['start_date'] }} @if ($input['mode'] == 'two_way') || Thời gian về : {{ $input['end_date'] }} @endif</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container ">
    <div class="row">
        <div class="col-md-12">
            <div class="out-form">

                <div id="ticket-form" class="ticket-form collapse {{ $input['no_param'] }}">
                    @component('component.form')

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
                    <!-- </div> -->
                </div>
            </div>
            <br>
            
            <div class="result"  id="result" >
                <!-- <a href="{{ '/ticket-month?'.$input['current_url'] }}">Hiển thị theo tháng </a> &nbsp;&nbsp; || &nbsp;&nbsp; <a href=""><strong>Hiện thị chuyến bay</strong></a> -->
                <br>
                <div class="row">


                    <div class="col-md-9">
                        <h4 style="    background: #f6962d; padding: 15px; color: white; border-radius: 5px; box-shadow: 0 0 5px #555;" >Chuyến đi <strong>{{$input['start_place']}} đến {{$input['end_place']}} vào ngày {{$input['start_date']}} </strong></h4>
                        <div id="list" style="padding-right: 15px; padding-left: 15px;">

                          <!--   <div class="row">
                                <div class="col-xs-6" >
                                    <h3 style="margin-top: 5px; " class="pull-left"> <span id="current_page" >0</span> <small id="total_page">/ 0 kết quả</small></h3>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <span>
                                        <span class="hidden-md hidden-lg"><a onclick="show_filter()">Lọc </a></span>
                                        <span class="hidden-xs"> Sắp xếp theo: </span>
                                        <select class="form-control"  style="display: inline-block; width: initial;" id="filter">
                                            <option value="alphabeta" >Thứ tự ABC</option>
                                            <option value="price" >Theo giá</option>
                                            <option value="brand" >Theo hãng bay</option>
                                        </select>
                                    </span>
                                </div>
                            </div> -->
                            <div class="date-list">
                                <ul class="nav nav-tabs nav-justified">
                                    <li><a href="">{{date('d/m', strtotime(' -3 day'))}}</a></li>
                                    <li><a href="">{{date('d/m', strtotime(' -2 day'))}}</a></li>
                                    <li><a href="">{{date('d/m', strtotime(' -1 day'))}}</a></li>
                                    <li class="active"><a href="">{{date('d/m')}}</a></li>
                                    <li><a href="">{{date('d/m', strtotime(' +1 day'))}}</a></li>
                                    <li><a href="">{{date('d/m', strtotime(' +2 day'))}}</a></li>
                                    <li><a href="">{{date('d/m', strtotime(' +3 day'))}}</a></li>
                                </ul>
                            </div>
                            <style type="text/css">
                                .date-list li a{
                                    background: white;
                                    border: 1px solid #ccc;
                                }
                                .date-list li.active a{
                                    background: #f6962d;
                                }
                            </style>

                            <div class="row" id="loading">
                                <div class="col-md-12">
                                    <div id="no-result">
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <h4 class="text-center">Tìm kiếm chuyến bay</h4>
                                        <div class="loading">
                                            <div class="container goo2">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                       <!--  <div class="" style="background: white; padding: 15px; border-radius: 5px">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <h4  class="text-right" style="margin-top: 17px">{{$input['start_place']}} </h4>
                                                </div>
                                                <div class="col-xs-4 text-center">
                                                    <p class="text-center" style="white-space: nowrap;">{{$input['adult'] + $input['children'] + $input['baby']}} hành khách | {{$input['mode_lang']}}</p>
                                                    <hr style="margin-top: 5px; border-color: #555"><span style="    position: absolute;right: 0;top: 19px;">&#10230;</span>
                                                    <p ><strong>{{ $input['start_date'] }} @if ($input['mode'] == 'two_way') <span >&#10230;</span> {{ $input['end_date'] }} @endif</strong></p>
                                                </div>
                                                <div class="col-xs-4 ">
                                                    <h4  class="text-left"  style="margin-top: 17px">{{$input['end_place']}}</h4>
                                                </div>
                                            </div>
                                        </div> -->
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <h4 style="    background: #f6962d; padding: 15px; color: white; border-radius: 5px; box-shadow: 0 0 5px #555;" >Chuyến về <strong>{{$input['end_place']}} đến {{$input['start_place']}}  vào ngày  {{$input['end_date']}} </strong></h4>
                        <div id="list_back" style="padding-right: 15px; padding-left: 15px;">
<!--                             <div class="row">
                                <div class="col-xs-6" >
                                    <h3 style="margin-top: 5px; " class="pull-left"> <small id="total_page">/ 0 kết quả</small></h3>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <span>
                                        <span class="hidden-md hidden-lg"><a onclick="show_filter()">Lọc </a></span>
                                        <span class="hidden-xs"> Sắp xếp theo: </span>
                                        <select class="form-control"  style="display: inline-block; width: initial;" id="filter">
                                            <option value="alphabeta" >Thứ tự ABC</option>
                                            <option value="price" >Theo giá</option>
                                            <option value="brand" >Theo hãng bay</option>
                                        </select>
                                    </span>
                                </div>
                            </div> -->
                            <div class="date-list">
                                <ul class="nav nav-tabs nav-justified">
                                    <li><a href="">{{date('d/m', strtotime(' -3 day'))}}</a></li>
                                    <li><a href="">{{date('d/m', strtotime(' -2 day'))}}</a></li>
                                    <li><a href="">{{date('d/m', strtotime(' -1 day'))}}</a></li>
                                    <li class="active"><a href="">{{date('d/m')}}</a></li>
                                    <li><a href="">{{date('d/m', strtotime(' +1 day'))}}</a></li>
                                    <li><a href="">{{date('d/m', strtotime(' +2 day'))}}</a></li>
                                    <li><a href="">{{date('d/m', strtotime(' +3 day'))}}</a></li>
                                </ul>
                            </div>
                            <style type="text/css">
                                .date-list li a{
                                    background: white;
                                    border: 1px solid #ccc;
                                }
                                .date-list li.active a{
                                    background: #f6962d;
                                }
                            </style>

                            <div class="row" id="loading_back">
                                <div class="col-md-12">
                                    <div id="no-result">
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <h4 class="text-center">Tìm kiếm chuyến bay</h4>
                                        <div class="loading">
                                            <div class="container goo2">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
<!--                                         <div class="" style="background: white; padding: 15px; border-radius: 5px">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <h4  class="text-right" style="margin-top: 17px">{{$input['start_place']}} </h4>
                                                </div>
                                                <div class="col-xs-4 text-center">
                                                    <p class="text-center" style="white-space: nowrap;">{{$input['adult'] + $input['children'] + $input['baby']}} hành khách | {{$input['mode_lang']}}</p>
                                                    <hr style="margin-top: 5px; border-color: #555"><span style="    position: absolute;right: 0;top: 19px;">&#10230;</span>
                                                    <p ><strong>{{ $input['start_date'] }} @if ($input['mode'] == 'two_way') <span >&#10230;</span> {{ $input['end_date'] }} @endif</strong></p>
                                                </div>
                                                <div class="col-xs-4 ">
                                                    <h4  class="text-left"  style="margin-top: 17px">{{$input['end_place']}}</h4>
                                                </div>
                                            </div>
                                        </div> -->
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-md-3 filter-section">
                        <div>
                            <div>
                                <h4>Chuyến đi</h4>
                            </div>
                            <h4>Chuyến về</h4>
                        </div>
                        <br>
                        <div >
                            <div data-toggle="collapse" data-target="#mode-flight" style="border-bottom: 1px solid #ccc; padding: 0 10px; cursor: pointer;">
                                <h4 style="color: #3097D1"><strong>Chuyến bay </strong> <i class="pull-right fa fa-chevron-down""></i></h4>
                            </div>

                            <div id="mode-flight" class="collapse in" style="">
                                <div class="checkbox checkbox-primary">
                                    <input id="direct_select" type="checkbox" disabled checked onchange="select_way()"> 
                                    <label for="direct_select">
                                        <strong>Bay thẳng</strong>
                                    </label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="one_way_select" type="checkbox" checked onchange="select_way()"> 
                                    <label for="one_way_select">
                                        <strong>1 Trạm dừng</strong>
                                    </label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="two_way_select" type="checkbox" checked onchange="select_way()"> 
                                    <label for="two_way_select">
                                        <strong>hơn 1 Trạm dừng</strong>
                                    </label>
                                </div>

                                <br>
                                <br>
                            </div>
                            <div data-toggle="collapse" data-target="#time_flight" style="border-bottom: 1px solid #ccc; padding: 0 10px; cursor: pointer;">
                                <h4 style="color: #3097D1"><strong>Thời gian bay </strong> <i class="pull-right fa fa-chevron-down""></i></h4>
                            </div>

                            <div id="time_flight" class="collapse in text-center" style="">
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
                                data-slider-value="[0, 1440]"
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
                                data-slider-value="[0, 1440]"
                                data-slider-tooltip="hide"
                                onchange="changeTimeEnd()"
                                >
                                <br>
                                <br>
                            </div>
                            <div data-toggle="collapse" data-target="#brand-flight" style="border-bottom: 1px solid #ccc; padding: 0 10px; cursor: pointer;">
                                <h4 style="color: #3097D1"><strong>Các hãng hàng không </strong> <i class="pull-right fa fa-chevron-down""></i></h4>
                            </div>

                            <div id="brand-flight" class="collapse in" style="padding: 10px">
                                <p class="text-center"><a onclick="deselect()">Chọn hết </a> &nbsp; || &nbsp; <a onclick="select()">Bỏ hết</a></p>
                                <div class="checkbox checkbox-primary">
                                    <input id="1" type="checkbox" checked onchange="select_button()"> 
                                    <label for="1">
                                        <strong>Vietnam eline</strong>
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<button onclick="create_ticket(0, 10, 0)"></button>

@component('component.footer')
@endcomponent
<div  id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Điều kiện về hành lý và giá vé</h4>
        </div>
        <div class="modal-body">
            <div class="ticket-detail-other-info">
                <table cellpadding="0" cellspacing="0" class="table">
                    <tbody>
                        <tr>
                            <td>
                                <b>Điều kiện hành lý</b>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Hành lý xách tay: 7kg
                            </td>
                            <td>Hành lý ký gởi: Vui lòng chọn ở bước sau
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Điều kiện vé</b>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Đổi Tên Hành khách:
                            </td>
                            <td>Thu phí: 402.000 VNĐ
                            </td>
                        </tr>
                        <tr>
                            <td>Hoàn vé:
                            </td>
                            <td>Không được phép (được hoàn miễn phí nếu chuyến bay bị hoãn 3 tiếng trở lên)
                            </td>
                        </tr>
                        <tr>
                            <td>Đổi Hành trình:
                            </td>
                            <td>Thu phí: 402.000 VNĐ + chênh lệch giá vé (nếu có)
                            </td>
                        </tr>
                        <tr>
                            <td>Bảo lưu:
                            </td>
                            <td>Không được phép
                            </td>
                        </tr>
                        <tr>
                            <td>Đổi ngày bay:
                            </td>
                            <td>Thu phí: 402.000 VNĐ + chênh lệch giá vé (nếu có)
                            </td>
                        </tr>
                        <tr>
                            <td>Thời hạn thay đổi:
                            </td>
                            <td>Trước 01 ngày so với ngày khởi hành
                            </td>
                        </tr>
                    </tbody>
                </table>


            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
    </div>

</div>

</div>


<script type="text/javascript">

    function show_filter(){
        $('.filter-section').toggleClass('in');
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

    var mode = '1';
    var start_place = 'SIN';
    var end_place = 'BKK';
    var start_date = '12/08/2017';
    var end_date = '30/08/2017';  
    var adult = <?php echo $input['adult'] ?>;  
    var children = <?php echo $input['children'] ?>;  
    var baby = <?php echo $input['baby'] ?>; 
    var data_input = {
        'mode': mode,
        'start_place': start_place,
        'end_place': end_place,
        'start_date': start_date,
        'end_date': end_date,
        'adult': adult,
        'children': children,
        'baby': baby,
    }
    var service_price_adult = 120000;
    var service_price_childern = 80000;
    var service_price_baby = 0;
    var result = [];
    $.get( "/search", data_input, function( response ) {
        result = response.first.FareData;
        if(result.length > 0){
            $('#loading').fadeOut();
            $('#loading_back').fadeOut();
            $('#result').fadeIn();
            create_ticket('noidia');
        }
    });
    function show_more(type){
        console.log(type);
    }
    var current_page = 1;
    var offset = 10;
    function create_ticket(type){
        console.log(result);
        $('#total_page').html(result.length);
        if(type == 'noidia'){
            $.each(result, function( index, flight ){
                var first_flight = flight.ListDepartureFlight.Flight;
                if(flight.ListReturnFlight){
                    var second_flight = flight.ListReturnFlight.Flight;
                }
                var d_v = 22735;
                var start_time = new Date(first_flight.StartTm).getTime();
                var end_time = new Date(first_flight.EndTm).getTime();
                var fly_time = (end_time - start_time)/60000;
                var fly_time = Math.floor(fly_time/60) + 'g ' + (fly_time%60) + ' p'; 

                var html =  
                '<div class="flight">'+
                '<div style="min-height: 65px">'+
                '<div class="inline text-center" style="width: 10%">'+
                '        <img src="https://daisycon.io/images/airline/?width=100&height=50&color=ffffff&iata='+flight.PlatingCarrier+'" width="100" height="50" />'+
                '    </div>'+
                '<div class="inline " style="width: 55%">'+
                '<div>';
                console.log(first_flight.StartTm);
                html +=  '<div  class="inline text-right" style="width: 40%; padding-right: 30px; border-right: 1px dashed #ccc; ">'+
                '        <p style="font-size: 16px">'+first_flight.StartPoint+' '+first_flight.StartTm.substr(11, 5)+'</p>'+
                '        <p><small>'+first_flight.StartTm.substr(0, 10)+'</small></p>'+
                '    </div>'+
                '    <div class="inline text-center" style="width: 20%; padding: 0 15px;">'+
                '        <p>'+fly_time+'</p>'+
                '        <hr style="margin: 3px;">'+
                '        <p><small style="white-space: nowrap;">'+(first_flight.StopNum == 0 ? 'Bay thẳng' : first_flight.StopNum+' chặng dừng')+'</small></p>'+
                '    </div>'+
                '    <div class="inline" style="width: 40%;  padding-left: 30px;     border-left: 1px dashed #ccc;">'+
                '        <p style="font-size: 16px">'+first_flight.EndPoint+' '+first_flight.EndTm.substr(11, 5)+'</p>'+
                '        <p><small>'+first_flight.EndTm.substr(0, 10)+'</small></p>'+
                ' <div style="clear: both"></div>'+
                '    </div>'+
                ' <hr style="margin: 3px;"/>'+
                '    </div>'+
                '    </div>'+
                '    <div class="inline text-center" style=" width: 15%;">'+
                '        <p class="money">'+(Math.round(flight.TotalFare * 10*d_v) / 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,')+'</p>'+
                '    </div>'+
                '    <div class="inline text-center" style="width: 15%;">'+
                '        <br>'+
                '        <a style="cursor: pointer; margin-top: 5px; display: block" data-toggle="collapse" data-target="#id_'+flight.FareDataId+'">Xem chi tiết</a>'+
                '    </div>'+
                '    <div class="inline text-center" style="width: 5%;">'+
                '        <input type="radio" name="fight" style="margin-top: 22px; height:18px; width: 18px" onclick="change_flight('+index+')" value="booking_id_'+flight.FareDataId+'"/>'+
                '    </div>'+
                '</div>'+
                ' <div style="clear: both"></div>'+
                '<div id="id_'+flight.FareDataId+'" class="collapse" style="width: 100%">'+
                '    <hr style="margin: 8px">';
                if(first_flight.ListAvailFlt.AvailFlt.length == undefined){
                    var availFlt = first_flight.ListAvailFlt.AvailFlt;
                    var availFlt_st = '00'+availFlt.StartTm;
                    availFlt_st  = (availFlt_st).substr(availFlt_st.length - 4);
                    availFlt_st = availFlt_st.substr(0, 2)+':'+availFlt_st.substr(2, 2);
                    var availFlt_et = '00'+availFlt.EndTm;
                    availFlt_et  = (availFlt_et).substr(availFlt_et.length - 4);
                    availFlt_et = availFlt_et.substr(0, 2)+':'+availFlt_et.substr(2, 2);

                    var availFlt_sd = availFlt.StartDt.substr(0, 4) +'/'+ availFlt.StartDt.substr(4, 2) + '/'+availFlt.StartDt.substr(6,8);
                    var availFlt_ed = availFlt.EndDt.substr(0, 4) +'/'+ availFlt.EndDt.substr(4, 2  ) + '/'+availFlt.EndDt.substr(6,2);
                    html += '<div>'+
                    '        <div style="width: 20%" class="inline">'+
                    '            <img src="https://daisycon.io/images/airline/?width=100&height=50&color=ffffff&iata='+availFlt.AirV+'" width="100" height="50" />'+
                    '        </div>'+
                    '        <div style="width: 25%" class="inline">'+
                    '            <br>'+
                    '            <p>Từ: <strong>'+availFlt.StartAirp+'</strong></p>'+
                    '            <p><strong>'+availFlt_st+' </strong><small>'+availFlt_sd+'</small></p>'+
                    '        </div>'+
                    '        <div style="width: 25%" class="inline">'+
                    '            <br>'+
                    '            <p>Từ: <strong>'+availFlt.EndAirp+'</strong></p>'+
                    '            <p><strong>'+availFlt_et+' </strong><small>'+availFlt_ed+'</small></p>'+
                    '        </div>'+
                    '        <div style="width: 30%" class="inline">'+
                    '            <p>Mã máy bay: <strong>'+availFlt.Equip+'</strong></p>'+
                    '            <p>Số hiệu chuyến bay: <strong>'+availFlt.FltNum+'</strong></p>'+
                    '            <button data-toggle="modal" data-target="#myModal" >Điều kiện vé</button>'+
                    '        </div>'+
                    '    <div style="clear: both"></div>'+
                    '    </div>'+
                    '    <hr style="margin: 8px">';

                }else{
                    $.each(first_flight.ListAvailFlt.AvailFlt, function(index, value){
                        var availFlt = value;
                        var availFlt_st = '00'+availFlt.StartTm;
                        availFlt_st  = (availFlt_st).substr(availFlt_st.length - 4);
                        availFlt_st = availFlt_st.substr(0, 2)+':'+availFlt_st.substr(2, 2);
                        var availFlt_et = '00'+availFlt.EndTm;
                        availFlt_et  = (availFlt_et).substr(availFlt_et.length - 4);
                        availFlt_et = availFlt_et.substr(0, 2)+':'+availFlt_et.substr(2, 2);

                        var availFlt_sd = availFlt.StartDt.substr(0, 4) +'/'+ availFlt.StartDt.substr(4, 2) + '/'+availFlt.StartDt.substr(6,8);
                        var availFlt_ed = availFlt.EndDt.substr(0, 4) +'/'+ availFlt.EndDt.substr(4, 2  ) + '/'+availFlt.EndDt.substr(6,2);
                        html += '<div>'+
                        '        <div style="width: 20%" class="inline">'+
                        '            <img src="https://daisycon.io/images/airline/?width=100&height=50&color=ffffff&iata='+availFlt.AirV+'" width="100" height="50" />'+
                        '        </div>'+
                        '        <div style="width: 25%" class="inline">'+
                        '            <br>'+
                        '            <p>Từ: <strong>'+availFlt.StartAirp+'</strong></p>'+
                        '            <p><strong>'+availFlt_st+' </strong><small>'+availFlt_sd+'</small></p>'+
                        '        </div>'+
                        '        <div style="width: 25%" class="inline">'+
                        '            <br>'+
                        '            <p>Từ: <strong>'+availFlt.EndAirp+'</strong></p>'+
                        '            <p><strong>'+availFlt_et+' </strong><small>'+availFlt_ed+'</small></p>'+
                        '        </div>'+
                        '        <div style="width: 30%" class="inline">'+
                        '            <p>Mã máy bay: <strong>'+availFlt.Equip+'</strong></p>'+
                        '            <p>Số hiệu chuyến bay: <strong>'+availFlt.FltNum+'</strong></p>'+
                        '            <button data-toggle="modal" data-target="#myModal">Điều kiện vé</button>'+
                        '        </div>'+
                        '    <div style="clear: both"></div>'+
                        '    </div>'+
                        '    <hr style="margin: 8px">';
                    });
                }

                html +='    <div style="width: 80%; margin-left: 10%">'+
                '        <table class="table">'+
                '        <thead>'+
                '            <tr>'+
                '            <th>Hành khách</th>'+
                '            <th>Số lượng</th>'+
                '            <th>Giá mỗi vé</th>'+
                '            <th>Thuế và phụ phí</th>'+
                '            <th>Tổng giá</th>'+
                '            </tr>'+
                '            </thead>'+
                '            <tbody>';

                if(flight.Adult){
                    html +=
                    '                <tr>'+
                    '                   <td>Người lớn</td>'+
                    '                    <td>'+flight.Adult+'</td>'+
                    '                    <td>'+money_format((flight.FareAdult*flight.Adult*10*d_v)/10)+'</td>'+
                    '                    <td>'+money_format(service_price_adult)+'</td>'+
                    '                    <td>'+money_format(((flight.FareAdult*flight.Adult* 10 * d_v) /10) + service_price_adult*flight.Adult)+'</td>'+
                    '                </tr>';
                }
                if(flight.Child){
                    html +=
                    '                <tr>'+
                    '                    <td>Trẻ em</td>'+
                    '                    <td>'+flight.Child+'</td>'+
                    '                    <td>'+money_format((flight.FareChild*flight.Child*10*d_v)/10)+'</td>'+
                    '                    <td>'+money_format(service_price_childern)+'</td>'+
                    '                    <td>'+money_format(((flight.FareChild*flight.Child* 10 * d_v) /10) + service_price_childern*flight.Child)+'</td>'+
                    '                </tr>';
                }
                if(flight.Infant){
                    html +=
                    '                <tr>'+
                    '                    <td>Trẻ sơ sinh</td>'+
                    '                    <td>'+flight.Infant+'</td>'+
                    '                    <td>'+money_format((flight.FareInfant*flight.Infant*10*d_v)/10)+'</td>'+
                    '                    <td>'+money_format(service_price_baby)+'</td>'+
                    '                    <td>'+money_format(((flight.FareInfant*flight.Infant* 10 * d_v) /10) + service_price_baby*flight.Infant)+'</td>'+
                    '                </tr>';
                }
                html +=
                '                 <tr class="strong">'+
                '                    <td>Tổng cộng</td>'+
                '                    <td>'+flight.TotalPax+'</td>'+
                '                    <td>'+money_format(((flight.FareAdult*flight.Adult + flight.FareChild*flight.Child + flight.FareInfant*flight.Infant) * 10*d_v) / 10)+'</td>'+
                '                    <td>'+money_format(service_price_adult*flight.Adult + service_price_childern*flight.Child + service_price_baby*flight.Infant)+'</td>'+
                '                    <td>'+money_format(((flight.TotalFare * 10 * d_v) / 10) + (service_price_adult*flight.Adult + service_price_childern*flight.Child + service_price_baby*flight.Infant))+'</td>'+
                '                </tr>'+
                '            </tbody>'+
                '        </table>'+
                '    </div>'+
                '    <div style="clear: both"></div>'+
                '</div>'+
                '</div>';

                $('#list').append(html);
                $('#list_back').append(html);

            });
}

}
function money_format(money){
    return (Math.round(money).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,') );
}
function change_flight(index){
    console.log(index);
    console.log(result[index]);
}
</script>

@endsection

