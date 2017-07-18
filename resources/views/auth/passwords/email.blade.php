@extends('layouts.app')

@section('content')
<style type="text/css">
    label{
        margin-top: 15px;
    }
</style>
<div class="container">
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <div class="form-login">
                <h3 class="text-center title">Quên mật khẩu</h3>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Send Password Reset Link
                            </button>
                        </div>
                    </div>
                    <br>
                    <br>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
@component('component.footer')
@endcomponent
@endsection
