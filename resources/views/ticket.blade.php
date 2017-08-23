@extends('layouts.app')

@section('content')
<style type="text/css">
    body, html{
        background: white;
    }
</style>
<div class="container-fluld">
    <div class="booking-summary" data-toggle="collapse" data-target="#ticket-form">
        <div class="container ">
            <div class="row">
                <div class="col-md-6" style="padding-top: 5px;">
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
                    <!-- </div> -->
                </div>
            </div>
            <br>
            @if ($input['no_param'] != 'in')
            <div class="result"  id="result" >
                <!-- <a href="{{ '/ticket-month?'.$input['current_url'] }}">Hiển thị theo tháng </a> &nbsp;&nbsp; || &nbsp;&nbsp; <a href=""><strong>Hiện thị chuyến bay</strong></a> -->
                <br>
                <div class="row">


                    <div class="col-md-9">
                   <!--  <div class="row">
                        <div class="col-xs-1">
                        </div>
                        <div class="col-xs-10 text-center">
                            <h4><strong>Xin hãy chọn chuyến bay</strong></h4>
                            <p><small>{{$input['start_place']}} đến {{$input['end_place']}} vào ngày {{$input['start_date']}}</small></p>
                        </div>
                    </div>
                -->
                <div id="404-notfound" class="text-center" style="display: none;">
                <br>
                <br>
                    <h4>Không tìm thấy chuyến bay nào</h4>
                <br>
                <br>
                </div>
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
                    <!--     <div class="date-list">
                            <ul class="nav nav-tabs nav-justified">
                                <li><a href="">{{date('d/m', strtotime(' -3 day'))}}</a></li>
                                <li><a href="">{{date('d/m', strtotime(' -2 day'))}}</a></li>
                                <li><a href="">{{date('d/m', strtotime(' -1 day'))}}</a></li>
                                <li class="active"><a href="">{{ $input['start_date'] }}</a></li>
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
                            .date-list li a:hover{
                                background: #eee;
                                border: 1px solid #ccc;
                            }
                        </style> -->

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
                    @if($input['mode'] == 'two_way')
<!--                     <div class="row" style="display: none">
                        <div class="col-xs-1">
                        </div>
                        <div class="col-xs-10 text-center">
                            <h4><strong>Xin hãy chọn chuyến vể</strong></h4>
                            <p><small>{{$input['end_place']}} đến {{$input['start_place']}}  vào ngày  {{$input['end_date']}}</small></p>
                        </div>
                    </div>
                    <div id="list_back" style="padding-right: 15px; padding-left: 15px; display: none;" >
                             <div class="row">
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
                        </div> 
                        <div class="date-list">
                            <ul class="nav nav-tabs nav-justified">
                                <li><a href="">{{date('d/m', strtotime(' -3 day'))}}</a></li>
                                <li><a href="">{{date('d/m', strtotime(' -2 day'))}}</a></li>
                                <li><a href="">{{date('d/m', strtotime(' -1 day'))}}</a></li>
                                <li class="active"><a href="">{{ $input['end_date'] }}</a></li>
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
                                        <div class="" style="background: white; padding: 15px; border-radius: 5px">
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
                                    </div> 
                                    <br>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>


                    </div> -->
                    @endif
                    <br>
                    <br>
                    <br>
                </div>
                <div class="col-md-3 filter-section">
                    <div >
                        <div  style="border-bottom: 1px solid #ccc; padding: 0 10px;">
                            <p style="color: #3097D1"><strong>Chuyến bay </strong> <i class="pull-right fa fa-chevron-down""></i></p>
                        </div>

                        <div>
                            <div class="checkbox checkbox-primary">
                                <input id="direct_select" type="checkbox" checked onchange="filter_data()"> 
                                <label for="direct_select">
                                    <strong>Bay thẳng</strong>
                                </label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="one_way_select" type="checkbox" checked onchange="filter_data()"> 
                                <label for="one_way_select">
                                    <strong>1 Trạm dừng</strong>
                                </label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="muti_way_select" type="checkbox" checked onchange="filter_data()"> 
                                <label for="muti_way_select">
                                    <strong>Nhiều Trạm dừng</strong>
                                </label>
                            </div>

                            <br>
                        </div>
<!--                             <div data-toggle="collapse" data-target="#time_flight" style="border-bottom: 1px solid #ccc; padding: 0 10px; cursor: pointer;">
                            <p style="color: #3097D1"><strong>Thời gian bay </strong> <i class="pull-right fa fa-chevron-down""></i></p>
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
                        </div> -->
                        <div style="border-bottom: 1px solid #ccc; padding: 0 10px; cursor: pointer;">
                            <p style="color: #3097D1"><strong>Các hãng hàng không </strong> <i class="pull-right fa fa-chevron-down""></i></p>
                        </div>

                        <div style="padding: 10px" id="choose-brand">
                            <p class="text-center"><a onclick="deselect()">Chọn hết </a> &nbsp; || &nbsp; <a onclick="select()">Bỏ hết</a></p>
                            <div id="brands">
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        @else
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        @endif
    </div>
</div>
</div>

@component('component.footer')
@endcomponent

@component('modal.modal_dk')
@endcomponent


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
        $('#choose-brand .checkbox input').prop('checked', true);
        filter_data();
    }
    function select(){
        $('#choose-brand .checkbox input').prop('checked', false);
        filter_data();
    }
    function filter_data(){
        var out = [];
        $('.brand_key').each(function(index, data){
            if($(data).is(':checked')){
                out = out.concat(flight_brand[$(data).val()]);
            }
        })
        out = uniques(out);
        console.log(out);
        var one_stop = $('#one_way_select').is(":checked");
        var muti_stop = $('#muti_way_select').is(":checked");
        var direct = $('#direct_select').is(":checked");
        var out_2 = [];
        if(one_stop){   
            out_2 = out_2.concat(stop_num.one_stop);
        }
        if(muti_stop){   
            out_2 = out_2.concat(stop_num.muti_stop);
        }
        if(direct){   
            out_2 = out_2.concat(stop_num.direct);
        }
        out_2 = uniques(out_2);
        console.log(out_2);
        var common = $.grep(out, function(element) {
            return $.inArray(element, out_2 ) !== -1;
        });

        console.log(common);

        $(".flight").css('display', 'none');
        if(common.length == 0){
            $('#404-notfound').css('display', 'block');
        }else{
            $('#404-notfound').css('display', 'none');

        }
        $.each(common, function(index, flight_id){
            $('#'+flight_id).css('display', 'block');
        })
    }
    function submit_form(id){
        console.log(id);
        var data_form = $('#'+id).serializeArray();
        var data_flight = result.data.FareData;
        var data_booking = data_flight[data_form[0].value];
        if(data_booking.ListDepartureFlight.Flight.length > 0){
            var tmp = data_booking.ListDepartureFlight.Flight[data_form[1].value];
            data_booking.ListDepartureFlight.Flight = tmp;
        }
        if(data_booking.ListReturnFlight && data_booking.ListReturnFlight.Flight.length > 0){
            var tmp = data_booking.ListReturnFlight.Flight[data_form[2].value];
            data_booking.ListReturnFlight.Flight = tmp;
        }
        data_booking.DepartureId = data_form[1].value;
        if(data_booking.ListReturnFlight ){
            
            data_booking.ReturnId = data_form[2].value;
        }
        localStorage.setItem('data_booking', JSON.stringify(data_booking));
        
        window.location.href = '/ticket/booking';
    }

    var mode = '<?php if($input["mode"] == 'two_way') echo 2; else echo 1; ?>';
    var start_place = '<?php echo $input['start_place']?>';
    start_place = start_place.substring(start_place.lastIndexOf("(")+1,start_place.lastIndexOf(")"));
    var end_place = '<?php echo $input['end_place']?>';
    end_place = end_place.substring(end_place.lastIndexOf("(")+1,end_place.lastIndexOf(")"));
    var start_date = '<?php echo $input["start_date"]?>';
    var end_date = '<?php echo $input["end_date"]?>';  
    var adult = '<?php echo $input['adult'] ?>';  
    var children = '<?php echo $input['children'] ?>';  
    var baby = '<?php echo $input['baby'] ?>'; 
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
    var service_price_adult = {{ $input['service_adult'] }};
    var service_price_children = {{ $input['service_children'] }};
    var service_price_baby = {{ $input['service_baby'] }};
    var result = [];
    var stop_num = {
        'direct' : [],
        'one_stop' : [],
        'muti_stop' : [],
    };
    var flight_brand = [];
    search();
    function search(){
        $.get( "/search", data_input, function( response ) {
            result = response;
            var type = response.type;
            if(type == 'quocte'){
                if(result && result.data.FareData &&  result.data.FareData.length > 0){
                    $('#loading').fadeOut();
                    $('#result').fadeIn();
                    create_ticket(type);
                }else{
                    $('#loading').fadeOut();
                    $('#result').fadeIn();
                    $('#list').append('<br><br><br><h4 class="text-center">Không tìm thấy chuyến bay nào</h4><br><br><br>')
                }
            }
        });
    }
    var current_page = 1;
    var offset = 10;
    function create_ticket(type){
        if(type == 'quocte'){
            $('#list_back').remove();
            var data_flight = result.data.FareData;

            $.each(data_flight, function( index, flight ){
                if(!flight_brand[flight.PlatingCarrier]){
                    flight_brand[flight.PlatingCarrier] = [];
                }
                flight_brand[flight.PlatingCarrier].push('flight_'+flight.FareDataId);
                flight_brand[flight.PlatingCarrier] = uniques(flight_brand[flight.PlatingCarrier]);
                general_brand(flight_brand);
                var first_flights = flight.ListDepartureFlight.Flight;
                if(first_flights.length > 0){
                    first_flights = first_flights;
                }else{
                    first_flights = [first_flights]
                }

                if(flight.ListReturnFlight){
                    var second_flights = flight.ListReturnFlight.Flight;
                    if(second_flights.length > 0){
                        second_flights = second_flights;
                    }else{
                        second_flights = [second_flights]
                    }
                }


                var html =  
                '<div class="flight" id="flight_'+flight.FareDataId+'">'+
                '<form id="form_'+flight.FareDataId+'">'+
                '    <input type="hidden" name="flight" value="'+index+'">'+
                '    <div class="quocte-header">'+
                '        <p class="text-white money no-margin"><strong>Giá vé '+money_format(flight.TotalFare*1 + service_price_adult*flight.Adult + service_price_children*flight.Child + service_price_baby*flight.Infant)+'</strong></p>'+
                '    </div>'+
                '    <div class="quocte-body">';


                html+= render_turn(first_flights, flight, index,'first');
                if(flight.ListReturnFlight){
                    html+= render_turn(second_flights, flight, index, 'back');
                }

                html +=                 
                '            <div class="text-right button-select">'+
                '                <button class="btn" type="button" onclick="submit_form(&apos;form_'+flight.FareDataId+'&apos;)">Chọn </button>'+
                '            </div>'+
                '</div>';
                '</form>';
                $('#list').append(html);

            });
        }else{

        }

    }
    function render_turn(first_flights, flight, index, type){

        var start_time = first_flights[0].StartTm ? first_flights[0].StartTm : '';
        var start_point = first_flights[0].StartPoint;

        var render = '';
        render +=   '        <div class="quocte-turn">'+
        '            <div class="quocte-first-header">'+
        '                <p class="text-white">'+(type == 'first' ? '<img src="/img/departures.png" class="img-plane">Chuyến đi' : '<img src="/img/arrivals.png" class="img-plane">Chuyến về')+' '+start_time.substr(0, 10)+' từ '+start_point+'</p>'+
        '            </div>';

        $.each(first_flights, function(index2, first_flight){
            var start_time = new Date(first_flight.StartTm).getTime();
            var end_time = new Date(first_flight.EndTm).getTime();
            var fly_time = (end_time - start_time)/60000;
            var fly_time = Math.floor(fly_time/60) + 'g ' + (fly_time%60) + ' p';
            var start_point = first_flight.StartPoint;
            var start_time = first_flight.StartTm ? first_flight.StartTm : '';
            var end_point = first_flight.EndPoint;
            var end_time = first_flight.EndTm ? first_flight.EndTm : '';

            if(first_flight.StopNum == 0){
                stop_num['direct'].push('flight_'+flight.FareDataId);
                stop_num['direct'] =uniques(stop_num['direct']);
            }
            if(first_flight.StopNum == 1){
                stop_num['one_stop'].push('flight_'+flight.FareDataId);
                stop_num['one_stop'] =uniques(stop_num['one_stop']);
            }
            if(first_flight.StopNum > 1){
                stop_num['muti_stop'].push('flight_'+flight.FareDataId);
                stop_num['muti_stop'] =uniques(stop_num['muti_stop']);
            }

            render  +=
            '            <div class="quocte-first-list" >'+
            '                <div class="quocte-detail">'+
            '                           <div class="inline text-center" style="width: 10%">'+
            '                            <img src="https://daisycon.io/images/airline/?width=100&amp;height=40&amp;color=ffffff&amp;iata='+flight.PlatingCarrier+'" width="100" height="40">'+
            '                           </div>'+
            '                           <div class="inline " style="width: 60%">'+
            '                              <div>'+
            '                                 <div class="inline text-right quocte-start-place" style="width: 35%; ">'+
            '                                    <p style="font-size: 16px">'+start_point+' '+start_time.substr(11, 5)+'</p>'+
            '                                    <p><small>'+start_time.substr(0, 10)+'</small></p>'+
            '                                 </div>'+
            '                                 <div class="inline text-center quocte-between" style="width: 30%;">'+
            '                                    <p>'+fly_time+'</p>'+
            '                                    <hr style="margin: 3px;">'+
            '                                    <p><small class="unbreak">'+(first_flight.StopNum == 0 ? 'Bay thẳng' : first_flight.StopNum+' chặng dừng')+'</small></p>'+
            '                                 </div>'+
            '                                 <div class="inline quocte-end-place" style="width: 35%;  ">'+
            '                                    <p style="font-size: 16px">'+end_point+' '+end_time.substr(11, 5)+'</p>'+
            '                                    <p><small>'+end_time.substr(0, 10)+'</small></p>'+
            '                                    <div style="clear: both"></div>'+
            '                                 </div>'+
            '                                 <hr style="margin: 3px;">'+
            '                              </div>'+
            '                           </div>'+
            '                           <div class="inline text-right" style="width: 20%;">  '+
            '                           <br>'+
            '                                <a style="cursor: pointer;display: block" data-toggle="collapse" data-target="#id_'+type+'_'+flight.FareDataId+index2+'" class="collapsed" aria-expanded="false">Xem chi tiết</a>'+
            '                           </div>'+
            '                           <div class="inline text-right" style="width: 10%;">'+
            '                           <input type="radio" '+(index2 == 0 ? 'checked' : 0 )+' name="fight_'+type+'" class="quocte-selecte" value="'+index2+'">'+
            '                           </div>'+
            '                </div>'+
            '        </div>'+

            ' <div style="clear: both"></div>';

            render += render_detail(flight, first_flight, index2 ,type);


        })
render +=           '</div>';                  

return render;
}
function render_detail(flight, first_flight, index2, type){
    var render= '';
    render += '<div id="id_'+type+'_'+flight.FareDataId+index2+'" class="collapse coll-detail" >'+
    '<hr style="margin: 8px"><br>';
    if(first_flight.ListAvailFlt.AvailFlt.length == undefined){
        var availFlts = [first_flight.ListAvailFlt.AvailFlt];
    }else{
        var availFlts = first_flight.ListAvailFlt.AvailFlt;
    }

    $.each(availFlts, function(index, availFlt){
        var availFlt_st = '00'+availFlt.StartTm;
        availFlt_st  = (availFlt_st).substr(availFlt_st.length - 4);
        availFlt_st = availFlt_st.substr(0, 2)+':'+availFlt_st.substr(2, 2);
        var availFlt_et = '00'+availFlt.EndTm;
        availFlt_et  = (availFlt_et).substr(availFlt_et.length - 4);
        availFlt_et = availFlt_et.substr(0, 2)+':'+availFlt_et.substr(2, 2);

        var availFlt_sd = availFlt.StartDt.substr(0, 4) +'/'+ availFlt.StartDt.substr(4, 2) + '/'+availFlt.StartDt.substr(6,8);
        var availFlt_ed = availFlt.EndDt.substr(0, 4) +'/'+ availFlt.EndDt.substr(4, 2  ) + '/'+availFlt.EndDt.substr(6,2);
        if(!flight_brand[availFlt.AirV]){
            flight_brand[availFlt.AirV] = [];
        }
        flight_brand[availFlt.AirV].push('flight_'+flight.FareDataId);
        flight_brand[availFlt.AirV] = uniques(flight_brand[availFlt.AirV]);

        render += '<div>'+
        '        <div style="width: 20%" class="inline">'+
        '            <img src="https://daisycon.io/images/airline/?width=100&height=50&color=f5f5f5&iata='+availFlt.AirV+'" width="100" height="50" />'+
        '        </div>'+
        '        <div style="width: 25%" class="inline">'+
        '            <br>'+
        '            <p>Từ: <strong>'+airports[availFlt.StartAirp]+'</strong></p>'+
        '            <p><strong>'+availFlt_st+' </strong><small>'+availFlt_sd+'</small></p>'+
        '        </div>'+
        '        <div style="width: 25%" class="inline">'+
        '            <br>'+
        '            <p>Từ: <strong>'+airports[availFlt.EndAirp]+'</strong></p>'+
        '            <p><strong>'+availFlt_et+' </strong><small>'+availFlt_ed+'</small></p>'+
        '        </div>'+
        '        <div style="width: 30%" class="inline">'+
        '            <p>Mã máy bay: <strong>'+availFlt.Equip+'</strong></p>'+
        '            <p>Số hiệu chuyến bay: <strong>'+availFlt.FltNum+'</strong></p>'+
        '            <button data-toggle="modal" data-target=".modal-dk"  type="button">Điều kiện vé</button>'+
        '        </div>'+
        '    <div style="clear: both"></div>'+
        '    </div>'+
        '    <hr style="margin: 8px">';
    });

    render +='    <div style="width: 80%; margin-left: 10%">'+
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

    if(flight.Adult!= 0){
        render +=
        '                <tr>'+
        '                   <td>Người lớn</td>'+
        '                    <td>'+flight.Adult+'</td>'+
        '                    <td>'+money_format(flight.FareAdult*flight.Adult)+'</td>'+
        '                    <td>'+money_format(service_price_adult)+'</td>'+
        '                    <td>'+money_format(flight.FareAdult*flight.Adult + service_price_adult*flight.Adult)+'</td>'+
        '                </tr>';
    }
    if(flight.Child!= 0){
        render +=
        '                <tr>'+
        '                    <td>Trẻ em</td>'+
        '                    <td>'+flight.Child+'</td>'+
        '                    <td>'+money_format(flight.FareChild*flight.Child)+'</td>'+
        '                    <td>'+money_format(service_price_children)+'</td>'+
        '                    <td>'+money_format(flight.FareChild*flight.Child + service_price_children*flight.Child)+'</td>'+
        '                </tr>';
    }
    if(flight.Infant != 0){
        render +=
        '                <tr>'+
        '                    <td>Trẻ sơ sinh</td>'+
        '                    <td>'+flight.Infant+'</td>'+
        '                    <td>'+money_format(flight.FareInfant*flight.Infant)+'</td>'+
        '                    <td>'+money_format(service_price_baby)+'</td>'+
        '                    <td>'+money_format(flight.FareInfant*flight.Infant + service_price_baby*flight.Infant)+'</td>'+
        '                </tr>';
    }
    render +=
    '                 <tr class="strong">'+
    '                    <td>Tổng cộng</td>'+
    '                    <td>'+flight.TotalPax+'</td>'+
    '                    <td>'+money_format(flight.FareAdult*flight.Adult + flight.FareChild*flight.Child + flight.FareInfant*flight.Infant)+'</td>'+
    '                    <td>'+money_format(service_price_adult*flight.Adult + service_price_children*flight.Child + service_price_baby*flight.Infant)+'</td>'+
    '                    <td>'+money_format(flight.TotalFare*1 + service_price_adult*flight.Adult + service_price_children*flight.Child + service_price_baby*flight.Infant)+'</td>'+
    '                </tr>'+
    '            </tbody>'+
    '        </table>'+
    '    </div><br>'+
    '    </div>'+
    '    <div style="clear: both"></div>';

    return render;
}
function money_format(money){
    var d_v = {{ $input['convert'] }};
    return (Math.round((money * 10 * d_v)/10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,') );
}
function change_flight(index){
    console.log(result[index]);
}
function general_brand(flights){
    var html_flight = '';
    Object.keys(flights).map(function(objectKey, index) {
        var value = flights[objectKey];

        html_flight += '<div class="checkbox checkbox-primary">';
        html_flight += '<input id="id_cb_'+objectKey+'" type="checkbox" value="'+objectKey+'" class="brand_key" checked onchange="filter_data()">';
        html_flight += '<label for="id_cb_'+objectKey+'">';
        html_flight += '<strong><img src="https://daisycon.io/images/airline/?width=100&amp;height=25&amp;color=ffffff&amp;iata='+objectKey+'" width="100" height="25" style="margin: -6px 13px 0 0"></strong>';
        html_flight += '</label>';
        html_flight += '</div>';
    })
    $("#brands").html(html_flight);
}
function uniques(arr) {
    var a = [];
    for (var i=0, l=arr.length; i<l; i++)
        if (a.indexOf(arr[i]) === -1 && arr[i] !== '')
            a.push(arr[i]);
        return a;
    }

</script>

@endsection
