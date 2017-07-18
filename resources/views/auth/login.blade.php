@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-login">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    <h3 class="text-center title"><strong>Đăng nhập</strong></h3>
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Địa chỉ E-Mail</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Mật khẩu</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <br>
                    <p class="text-center">Chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký tại đây</a>, hoặc <a href="/agency">Trở thành đại lý cấp 2</a></p>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Đăng nhập
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Quên mật khẩu?
                            </a>
                        </div>
                    </div>
                </form>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<style type="text/css">

</style>
@component('component.footer')
@endcomponent
@endsection
