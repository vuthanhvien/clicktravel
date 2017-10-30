@extends('layouts.app')
<style type="text/css">
    @media print {
    .myDivToPrint {
        background-color: white;
        height: 100%;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        margin: 0;
        padding: 15px;
        font-size: 14px;
        line-height: 18px;
    }
}

</style>
@section('title')
 Clicktravel.vn | Đại lý vé máy bay nội địa quốc tế
@endsection
@section('content')
<!-- <div class="container-fluld " style="background-color: #f4f4f4">
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
                    <p class="hidden-xs" id="time_plane">Thời gian đi : {{ $input['start_date'] }} @if ($input['mode'] == 'two_way') || Thời gian về : {{ $input['end_date'] }} @endif</p>
                </div>
            </div>
        </div>
    </div>
</div> -->
@if (isset($_GET['start_place']) || !isset($_GET['Request']))
<div class="container-fluld collapse {{ isset($_GET['Request']) ? '' : 'in' }} booking" style="background-image: url('/img/plane.png') ,url('/img/bg.png'); background-position: right 50px bottom, left top; background-color: #007e7a"" id="ticket-form" >
    <div class="container" >
        <h2 class="text-center text-white no-margin" ><strong>Đặt vé máy bay rẻ trực tuyến</strong></h2>
        <h4 style="color: #ffc600; text-align: center; ">Tìm kiếm thông minh, thực hiện đơn giản</h4>
        <div  class="ticket-form ">
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
</div>
@endif
<div class="container myDivToPrint" style="position: relative;" >
<iframe name="flightframe" scrolling="no" id="flightframe" src="https://sbs.datacom.vn/Flights.aspx?ProductKey=ypgqvnubwp59zjh" frameborder="0" style="width:100%;height:600px"></iframe>
<div class="printer-ticket" style="position: absolute; /* margin-right: 0; */ right: 0; top: 15px;">
    <button class="btn btn-primary" onclick="printerTicket()">
        <i class="fa fa-print"></i>
        In vé        
    </button>
</div>
</div>
@component('component.footer')
@endcomponent

<script type="text/javascript">
    $('#time_plane').html($('#lblFlightDateParam').html())
    setTimeout(function() {
        console.log($('#lblDepartureParam').html());
        console.log($('#lblDepartureTo').html());
    }, 100);
    function printerTicket(){
        if($('#IBEProgressBarWrapper .IBEProgressBarItems .next').hasClass('active')){
            window.print();
        }else{
            alert('Xin hoàn tất tìm kiếm và điền thông tin trước khi in vé');
        }
    }
</script>


@endsection

