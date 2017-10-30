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
<div class="container-fluid agency-bg" style="background-image: url({{ $config['agency_url'] }}); height: 250px; padding-top: 120px; background-position: cover">
    <div class="container">
        <h2 class="text-white">Trở thành đại lý cấp 2 của cty vé máy bay Trần Phong</h2>
        <a class="text-white" style="text-decoration-line: 1px" href="/agency">Lợi ích mang lại </a>

    </div>
</div>
<br>
<br>
<div class="container">
                @if (isset($_GET['success']))
                    <div class="alert alert-success">
                        <p>Email đã gửi thành công, chúng tôi sẽ xác nhận và liên hệ với bạn sớm nhất</p>
                    </div>
                @endif
    <div class="row">
        <br>
        <div class="col-md-5"> 
            {!! $content['benefit'] !!}
            
        </div>
        <div class="col-md-7">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/agency') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-3 label2">
                        <label>Họ và tên đệm</label>
                    </div>
                    <div class="col-md-9">
                        <input id="name" type="text" class="form-control" name="first_name" required autofocus placeholder="Họ và tên đệm">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3 label2">
                        <label>Tên</label>
                    </div>
                    <div class="col-md-9">
                        <input id="name" type="text" class="form-control" name="last_name" required placeholder="Tên">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3 label2">
                        <label >Địa chỉ email</label>
                    </div>

                    <div class="col-md-9">
                        <input id="name" type="email" class="form-control" name="email" required placeholder="Địa chỉ email">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3 label2">
                        <label >Số điện thoại</label>
                    </div>

                    <div class="col-md-9">
                        <input id="name" type="text" class="form-control" name="phone" required placeholder="Số điện thoại">
                    </div>
                </div>
                <br> 
                <div class="row">
                    <div class="col-md-3 label2">
                        <label >Địa chỉ</label>
                    </div>

                    <div class="col-md-9">
                        <input id="name" type="text" class="form-control" name="address" required placeholder="Địa chỉ">
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-md-3 label2">
                        <label >Thông tin thêm</label>
                    </div>
                    <div class="col-md-9">
                        <textarea id="name" rows="5" class="form-control" name="memo" placeholder="Thông tin thêm"></textarea>
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-md-6 col-md-offset-6">
                        <button type="submit" class="btn btn-primary" style="height: 50px; border-radius: 3px; width: 100%">
                            Đăng ký
                        </button>
                    </div>
                </div>
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
