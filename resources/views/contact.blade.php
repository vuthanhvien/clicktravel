@extends('layouts.app')

@section('content')

<style type="text/css">

    .label2{
        padding-top: 15px;
        text-align: right;
        color: #555;
    }
    @media (max-width:991px) {
        .label2 {
            text-align: left;
        }
    }
</style>
<div class="container-fluid agency-bg" style="background-image: url(/img/bg-6.jpg); height: 250px; padding-top: 120px; background-position: cover">
    <div class="container">
        <h2 class="text-white">Liên hệ với chúng tôi</h2>

    </div>
</div>
<br>
<br>
<div class="container">
    <div class="row">
        <br>
        
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/contact-us') }}">
                {{ csrf_field() }}
                <div>
                        <label>Mã đặt chỗ </label>
                        <input id="name" type="text" class="form-control" name="seat_id" required autofocus placeholder="Mã đặt chỗ" value="{{$ticket->seat_id}}">
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                       <label>Tên</label>
                        <input id="name" type="text" class="form-control" name="last_name" required placeholder="Tên">
                    </div>

                    <div class="col-md-6">
                       <label>Địa chỉ email</label>
                        <input id="name" type="email" class="form-control" name="email" required placeholder="Địa chỉ email">
                    </div>
                </div>
                <br>
              
                <div >
                        <label >Thông tin thêm</label>
                        <textarea id="name" rows="5" class="form-control" name="memo" placeholder="Thông tin thêm" required></textarea>

                </div>
                <br>
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button type="submit" class="btn btn-primary" style="height: 50px; border-radius: 3px; padding-left: 25px; padding-right: 15px;">
                            Gửi cho chúng tôi &nbsp;&nbsp;&nbsp; <i class="fa fa-send"></i>
                        </button>
                    </div>
                </div>
                <br>
                @if ($ticket->status == 'sent')
                    <div class="alert alert-success">
                        <p>Email đã gửi thành công</p>
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>
<br>
<br>
<br>
@component('component.footer')
@endcomponent

@endsection
