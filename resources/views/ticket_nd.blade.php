@extends('layouts.app')

@section('content')
<style type="text/css">
    body, html{
        background: white;
    }
    @media (max-width: 991px) {
        #app{
        }
       
    }

</style>

<div class="container-fluld collapse   booking" style="background-image: url('/img/plane.png') ,url('/img/bg.png'); background-position: right 50px bottom, left top; background-color: #007e7a"" id="ticket-form" >
    <div class="container" >
        <h2 class="text-center text-white no-margin" ><strong>Đặt vé máy bay rẻ trực tuyến</strong></h2>
        <h4 style="color: #ffc600; text-align: center; ">Tìm kiếm thông minh, thực hiện đơn giản</h4>
        <div  class="ticket-form ">
            @component('component.form')
            @slot('mode')
            @endslot

            @slot('start_place')
            @endslot

            @slot('end_place')
            @endslot

            @slot('start_date')
            @endslot    

            @slot('end_date')
            @endslot

            @slot('adult')
            @endslot

            @slot('children')
            @endslot

            @slot('baby')
            @endslot

            @endcomponent
            <br>
            <br>
        </div>

    </div>
</div>
<div class="container "  >
 </div>

@component('component.footer')
@endcomponent

 

@endsection

