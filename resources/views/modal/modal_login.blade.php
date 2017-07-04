
<div id="login" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">Đăng nhập Clicktravel</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5">
                        <h4><strong>Đăng nhập bằng mạng xã hội</strong></h4>
                        <p>Dễ dàng, tiện lợi hơn và chúng tôi sẽ không đăng nếu không hỏi ý kiến bạn.</p>
                        <div class="text-center">
                            <div>
                                <button style="width: 80%" class="btn btn-default btn-login-fb"><i class="fa  fa-facebook"></i> &nbsp;&nbsp; Đăng nhập bằng Facebook</button>
                            </div>
                            <br />
                            <div>
                                <button style="width: 80%" class="btn btn-default btn-login-fb"><i class="fa  fa-google"></i> &nbsp;&nbsp; Đăng nhập bằng Google</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-7">
                        <h4><strong>Đăng nhập bằng tài khoản Clicktravel</strong></h4>
                        <p>Chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký tại đây</a>, hoặc <a href="">Trở thành đại lý cấp 2</a></p>
                        <br>

                        <form class="" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                                <label for="email" class="col-md-12 control-label">Địa chỉ email</label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row">
                                <label for="password" class="col-md-12 control-label">Mật khẩu</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

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

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        By signing up you agree to Clicktravel's <a href=""> Terms of Service </a>and <a href=""> Privacy Policy</a>
                    </div>
                </div>
                <br>
                <br>

            </div>
        </div>

    </div>
</div>