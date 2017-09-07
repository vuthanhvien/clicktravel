@extends('admin.layout')

@section('content')
<style type="text/css">
	.detail,
	.title {
		background: white;
		border: 1px solid #ccc;
		padding: 0;
		border-radius: 5px;
	}
	input,
	select{
		width: 100%;
		height: 50px;
		color: #555;
		border: 1px solid #ccc;
		border-radius: 3px;
		padding-left: 15px;
	}
	.avatar{
		height: 170px; 
		width: 170px; 
		background-size: cover; 
		display: inline-block;
		margin: -85px auto 0;  
		border: 6px solid white;
	}
	.field,
	.field-fund{
		min-height: 50px;
		border: 1px solid #ccc; 
		border-radius: 3px; 
		padding-top: 15px;
		padding-bottom: 10px;
		margin-top: 5px;
		margin-bottom: 5px;
	}
	.field .input{
		display: none;
	}
	.field .input input{
		margin-top: -7px; 
		margin-bottom: 2px; 
	}
	#save{
		display: none;
	}
	#cancel_btn{
		display: none;
	}
	.err{
		background: #f44336;
		padding: 5px;
		padding-left: 25px;
		color: white;
		border-radius: 5px;
	}
	.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover{
		height: 36px;
	}
	.nav-tabs>li>a:hover{
		background-color: transparent;
	}
</style>
<div class="container-fluid">

	<div class="detail">
		<div style="height: 300px; background: url('/img/bg-3.jpg'); background-size: cover">

		</div>
		<div class="row">
			<div class="col-md-3 text-center">

				<!-- <div class="avatar" style="background-image: url('{{$user->avatar}}'); "> -->
				<div class="avatar" style="    background-image: url(/img/clicktravel-logo.png);
											    background-size: 100%;
											    background-repeat: no-repeat;
											    background-color: #CCC;
											    background-position: center">

				</div>

			<!-- <form enctype="multipart/form-data" action="/avatar" method="POST">
                <label for="avatar" style="color: #00bcd4; cursor: pointer;">Đổi ảnh đại diện</label>
                <input class="hidden" id="avatar" type="file" name="avatar" onchange="this.form.submit()">
                <input type="hidden"  name="user_id" value="{{$user->id}}"> 
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form> -->

			</div>
			<div class="col-md-9">
				<br>
				<br>
				<div style="padding: 15px">
					<ul class="nav nav-tabs" style="background: #00bcd4; padding: 0">
						<li @if($active_tab == 'home' ) class="active"  @endif ><a href="/{{ request()->path()}}?active=home">Thông tin chung</a></li>
						<li @if($active_tab == 'fund' ) class="active"  @endif><a  href="/{{ request()->path()}}?active=fund">Tiền quỹ</a></li>
						<li @if($active_tab == 'other' ) class="active"  @endif><a  href="/{{ request()->path()}}?active=other">Thông tin khác</a></li>
						<li @if($active_tab == 'pass' ) class="active"  @endif><a  href="/{{ request()->path()}}?active=pass">Đổi mật khẩu</a></li>
					</ul>
					
					<div class="tab-content">
						<div id="menu0" class="tab-pane fade  @if($active_tab == 'home' ) in active  @endif ">
							<form action="/admin/user/new" method="POST"  autocomplete="false">
								{{ csrf_field() }}
								<input type="hidden" name="type" value="edit">
								<input type="hidden" name="id" value="{{$user->id}}">
								<br>
								<h4>
									<strong>Thông tin tài khoản &nbsp;&nbsp;&nbsp;&nbsp;</strong> 
									<button class=" btn btn-sm " type="button" style="margin-top: 10px" onclick="editProfile()" id="edit_btn"><i class="fa fa-pencil fa-sm" style="font-size: 14px"></i> &nbsp;&nbsp; Sửa</button>
									<button class=" btn btn-sm " type="button" style="margin-top: 10px" onclick="cancelProfile()" id="cancel_btn"><i class="fa fa-pencil fa-sm" style="font-size: 14px"></i> &nbsp;&nbsp; Hủy sửa</button>
								</h4>
								<div class="field">
									<div class="row">
										<div class="col-xs-3 text-right">
											<p>Họ và tên</p>
										</div>
										<div class="col-xs-9">
											<p class="content"><strong>{{$user->name}}</strong></p>
											<div class="input form-group label-floating" >
												<input type="text" class="form-control" value="{{$user->name}}"  name="name" placeholder="Họ và tên"> 
												<span class="material-input"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="field">
									<div class="row">
										<div class="col-xs-3 text-right">
											<p >Chức vụ</p>
										</div>
										<div class="col-xs-9">
											<p class="content"><strong>@if($user->role == '1') Quản trị @elseif ($user->role == '2') Đại lý cấp 2 @elseif ($user->role == '3') Nhân viên @else Khách hàng @endif </strong></p>
											<div class="input form-group label-floating" >
												<select class="form-control"  name="role"> 
													<option value="1" @if($user->role == '1' ) selected @endif >Quản trị</option>
													<option value="2" @if($user->role == '2' ) selected @endif >Đại lý cấp 2</option>
													<option value="3" @if($user->role == '3' ) selected @endif >Nhân viên</option>
													<option value="4" @if($user->role == '4') selected @endif >Khách hàng</option>
												</select>
												<span class="material-input"></span>
											</div>

										</div>
									</div>
								</div>
								<div class="field">
									<div class="row">
										<div class="col-xs-3 text-right">
											<p>Địa chỉ Email</p>
										</div>
										<div class="col-xs-9">
											<p class="content"><strong>{{$user->email}}</strong></p>
											<div class="input form-group label-floating" >
												<input type="email" class="form-control" value="{{$user->email}}"  name="email" placeholder="Địa chỉ email"> 
												<span class="material-input"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="field">
									<div class="row">
										<div class="col-xs-3 text-right">
											<p>Số điện thoại</p>
										</div>
										<div class="col-xs-9">
											<p class="content"><strong>{{$user->phone}}</strong></p>
											<div class="input form-group label-floating" >
												<input type="text" class="form-control" value="{{$user->phone}}"  name="phone" placeholder="Số điện thoại"> 
												<span class="material-input"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="field">
									<div class="row">
										<div class="col-xs-3 text-right">
											<p>Số di động</p>
										</div>
										<div class="col-xs-9">
											<p  class="content"><strong>{{$user->mobile}}</strong></p>
											<div class="input form-group label-floating" >
												<input type="text" class="form-control" value="{{$user->mobile}}"  name="mobile" placeholder="Số di động"> 
												<span class="material-input"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="field">
									<div class="row">
										<div class="col-xs-3 text-right">
											<p >Địa chỉ</p>
										</div>
										<div class="col-xs-9">
											<p class="content"><strong>{{$user->address}}</strong></p>
											<div class="input form-group label-floating" >
												<input type="text" class="form-control" value="{{$user->address}}"  name="address" placeholder="Địa chỉ"> 
												<span class="material-input"></span>
											</div>
										</div>
									</div>
								</div>

								<br>
								<div class="text-right">
									<button class="btn btn-success" id="save" type="submit"><i class="fa fa-save"></i> &nbsp;&nbsp; Lưu</button>
								</div>
							</form>
						</div>
						<div id="menu1" class="tab-pane fade  @if($active_tab == 'fund' ) in active  @endif ">
							<br>
							<h4><strong>Tiền quỹ trước &nbsp;&nbsp; </strong> @if(Auth::user()->role == '1' || Auth::user()->role == '3') <button class="btn btn-success btn-sm" data-toggle="collapse" data-target="#add-fund"><i class="fa fa-plus"></i>  &nbsp;&nbsp; Thêm tiền quỹ</button>@endif</h4>
							@if(Auth::user()->role == '1' || Auth::user()->role == '3') 
							<div id="add-fund" class="collapse @if(Session::get('message')) in @endif" >
								@if(Session::get('message'))
									<p class="err">{{ Session::get('message') }}</p>
									@endif

								<form action="/admin/user/save_fund" method="POST" autocomplete="false">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="{{$user->id}}">
									<div class="form-fund" style="border: 1px solid #ccc; padding: 15px; border-radius: 5px;">
										<br>
										<div class="row">
											<div class="col-xs-5 ">
												<div class="form-group label-floating" style="    margin: 0; margin-top: -6px;">
													<label class="control-label">Số tiền</label>
													<input type="number" class="form-control"  name="count" /> 
													<span class="material-input"></span>
												</div>
											</div>
											<div class="col-xs-5">
												
												<div class="form-group label-floating" style="    margin: 0; margin-top: -6px;">
													<label class="control-label">Mật khẩu đăng nhập</label>
													<input type="password" class="form-control"  name="pass" /> 
													<span class="material-input"></span>
												</div>
											</div>
											<div class="col-md-2">
												<button class="btn btn-success" style="    margin: 0; margin-top: -13px;" type="submit"><i class="fa fa-save"></i> &nbsp; &nbsp; Lưu</button>
											</div>

										</div>
									</div>
								</form>
							</div>
							@endif
							<div class="fund-list">
								<hr style="border-color: #ccc">
								<p>Số quỹ hiện có: <strong class="money">{{$total_fund}} vnd</strong></p>
								<hr style="border-color: #ccc">
								<p><strong>Lịch sử giao dịch </strong></p>
								<div class="table-responsive">
									<table class="table">
										<thead class="text-primary">
											<th>Số tiền</th>
											<th>Nội dung</th>
											<th>Vé xuất</th>
											<th>Ngày thay đổi</th>
										</thead>
										<tbody>
											@foreach ($fund as $f)
											<tr>
												<td><strong class="money">{{$f->value}}</strong> vnd</td>
												<td>{{$f->type}}</td>
												<td>
												@if ($f->ticket_id > 0)
												<a href="/admin/ticket/{{$f->ticket_id}}">Thông tin vé</a>
												@endif
												</td>
												<td>{{$f->created_at}}</td>
											</tr>
											@endforeach
										</tbody>
									</table>

								</div>
							</div>
							
						</div>
						<div id="menu2" class="tab-pane fade  @if($active_tab == 'other' ) in active  @endif ">
							<br>
							<p><strong>Thông tin đại lý</strong></p>
							<form action="/admin/user/save_note" method="POST">
							{{ csrf_field() }}
							<input name="user_id" value="{{$user->id}}" type="hidden">
							<textarea id="textarea" name="value">
								{{$user->note}}
							</textarea>
							<button class="btn btn-success" type="submit">Lưu</button>
							</form>
							<hr>
							<p><strong>Vé đã đăng ký</strong></p>
							<div class="table-responsive">
								<table class="table">
									<thead class="text-primary">
										<th>Mã đặt chỗ</th>
										<th>Giá</th>
										<th>Trạng thái</th>
										<th>Ngày thay đổi</th>
									</thead>
									<tbody>
										@foreach ($ticket as $t)
										<tr>
											<td>{{$t->seat_id}} </td>
											<td class="money">{{$t->total}} đ</td>
											<td>{{$t->status}} </td>
											<td>{{$t->updated_at}}</td>
										</tr>
										@endforeach
									</tbody>
								</table>

							</div>
							<hr>

						</div>
						<div id="menu3" class="tab-pane fade  @if($active_tab == 'pass' ) in active  @endif ">
							<br>
							<h4><strong>Đổi mật khẩu </strong></h4>
							<form action="/admin/user/save_password" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="id" value="{{$user->id}}">
								<div class="form-pass" style="border: 1px solid #ccc; border-radius: 5px; padding: 15px">
									<br>
									@if(Session::get('message'))
									<p class="err">{{ Session::get('message') }}</p>
									@endif
									<br>
									@if(Auth::user()->role == '2') 
									<div class="row">
										<div class="col-xs-3 text-right" style="padding-top: 14px;">
											<p><strong>Mật khẩu hiện tại</strong></p>
										</div>
										<div class="col-xs-9 col-sm-7">
											<input type="password"  name="old" placeholder="Mật khẩu hiện tại" required> 
										</div>
									</div>
									<br>
									@endif
									<div class="row">
										<div class="col-xs-3 text-right" style="padding-top: 14px;">
											<p><strong>Mật khẩu mới</strong></p>
										</div>
										<div class="col-xs-9 col-sm-7">
											<input type="password"  name="new" placeholder="Mật khẩu mới" required minlength="8"> 
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-xs-3 text-right" style="padding-top: 14px;">
											<p><strong>Lặp lại mật khẩu mới</strong></p>
										</div>
										<div class="col-xs-9 col-sm-7">
											<input type="password"  name="confirm" placeholder="Lặp lại mật khẩu mới" required minlength="8"> 
										</div>
									</div>
									<br>
									<div class="text-center">
										<button class="btn btn-success" type="submit"><i class="fa fa-save"></i> &nbsp; &nbsp; Lưu</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
<script type="text/javascript">
	function editProfile(){
		$('.field .input').css('display', 'initial');
		$('#save').css('display', 'initial');
		$('#cancel_btn').css('display', 'initial');

		$('#edit_btn').css('display', 'none');
		$('.field .content').css('display', 'none');
	}
	function cancelProfile(){
		$('.field .input').css('display', 'none');
		$('#save').css('display', 'none');
		$('#cancel_btn').css('display', 'none');

		$('#edit_btn').css('display', 'initial');
		$('.field .content').css('display', 'initial');
	}
	tinymce.init({ selector:'#textarea' });


</script>
@endsection

